const form = document.getElementById('form');
const rfc_log = document.getElementById('rfc_log');
const usuario_log = document.getElementById('usuario_log');
const password_log = document.getElementById('password_log');
const usuario_logA = document.getElementById('usuario_logA');
const password_logA = document.getElementById('password_logA');

function ShowSelected()
{
    /* Para obtener el valor */
    var cod = document.getElementById("select").value;
    
    /* Para obtener el texto */
    var combo = document.getElementById("select");
    var selected = combo.options[combo.selectedIndex].text;

    return cod;
}


form.addEventListener("submit", e => {
    e.preventDefault();

    var opt = ShowSelected();
    console.log("la opcion es:", opt);
    checkInputs(opt);
    console.log("cliickkkkk");
});

function checkInputs(select){
    //Traer los valores de los inputs
    const rfc_logv = rfc_log.value.trim();
    const usuario_logv= usuario_log.value.trim();
    const password_logv= password_log.value.trim();
    const usuario_logAv= usuario_logA.value.trim();
    const password_logAv= password_logA.value.trim();

    //console.log("RFC:", rfc_log);


    //Oferente Interno
    if(select == 'div1'){
        //-----RFC-------
        if(rfc_logv == ''){
            setErrorFor(rfc_log, 'El RFC no puede estar en blanco');
        } else if(!isRFCL(rfc_logv)){
            setErrorFor(nombre, 'El RFC no es válido');
        } else{
            setSuccessFor(nombre);
        }
    }

    //Usuario de externo
    else if (select == 'div2'){

        //-----Usuario-----
        if(usuario_logv == ''){
            setErrorFor(usuario_log, 'El usuario e no puede estar en blanco');
        }else if(!isUsuarioL(usuario_logv)){
            setErrorFor(usuario_log, 'El usuario e no es válido');
        } else{
            setSuccessFor(usuario_log); 
        }

        //-----Contraseña de externo----------
        if(password_logv == ''){
            setErrorFor(password_log, 'La contraseña e no puede estar en blanco');
        }else if(!isPasswordL(password_logv)){
            setErrorFor(password_log, 'La contraseña e no es válida');
        }
        else{
            setSuccessFor(password_log);
        }
    }
    //----- Usuario de Admin ----

    else if(select =='div3'){
            ///----Usuario-----
            if(usuario_logAv == ''){
                setErrorFor(usuario_logA, 'El usuario no puede estar en blanco');
            } else if(!isUsuario_LA(usuario_logAv)){
                setErrorFor(usuario_logA, 'El usuario no es válido');
            }else{
                setSuccessFor(usuario_logA);
            }

            //-----Contraseña de Admin----
            if(password_logAv == ''){
                setErrorFor(password_logA, 'La contraseña no puede estar en blanco');
            } else if(!isPassword_LA(password_logAv)){
                setErrorFor(password_logA, 'La comtraseña no es válido');
            }else{
                setSuccessFor(password_logA);
            }
    }
   
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    small.innerText = message;
    formControl.className = "form-control error";

    console.log(formControl);
    console.log(message);
}
function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
  }

function isRFCL(rfc_log){
    return /^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/.test(rfc_log);
}

function isUsuarioL(usuario_log){
    return /^[a-zA-Z0-9\_\-\.]{6,10}$/.test(usuario_log);
}
 function isUsuario_LA(usuario_logA){
    return /^[a-zA-Z0-9\_\-\.]{6,10}$/.test(usuario_logA);
 }
  
 function isPasswordL(password_log){
    return /^(?=.*[A-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@])(?!.*[iIoO])\S{6,12}$/.test(password_log);
 }

 function isPassword_LA(password_logA){
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{5,15}$/.test(password_logA);
 }
