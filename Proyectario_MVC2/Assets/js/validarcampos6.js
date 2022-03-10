const form = document.getElementById('form');

const rfc_log = document.getElementById('rfc_log');

const usuarioE = document.getElementById('usuarioE');
const passwordE = document.getElementById('passwordE');

const usuarioA = document.getElementById('usuarioA');
const passwordA = document.getElementById('passwordA');

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
    console.log("cliiakk");
});

function checkInputs(select){
    //Traer los valores de los inputs
    const rfc_logv = rfc_log.value.trim();

    const usuarioEv = usuarioE.value.trim();
    const passwordEv = passwordE.value.trim();

    const usuarioAv= usuarioA.value.trim();
    const passwordAv= passwordA.value.trim();

    //console.log("RFC:", rfc_log);


    //Oferente Interno
    if(select == 'div1'){
        //-----RFC-------
        if(rfc_logv == ''){
            setErrorFor(rfc_log, 'El RFC no puede estar en blanco');
        } else if(!isRFCL(rfc_logv)){
            setErrorFor(rfc_log, 'El RFC no es válido');
        } else{
            setSuccessFor(rfc_log);
        }
    }

    else if (select == 'div2'){

        //-----Usuario-----
        if(usuarioEv == ''){
            setErrorFor(usuarioE, 'El usuario e no puede estar en blanco');
        }else if(!isUsuarioL(usuarioEv)){
            setErrorFor(usuarioE, 'El usuario e no es válido');
        } else{
            setSuccessFor(usuarioE); 
        }

        //-----Contraseña de externo----------
        if(passwordEv == ''){
            setErrorFor(passwordE, 'La contraseña e no puede estar en blanco');
        }else if(!isPasswordL(passwordEv)){
            setErrorFor(passwordE, 'La contraseña e no es válida');
        }
        else{
            setSuccessFor(passwordE);
        }
    }

    else if(select =='div3'){
        ///----Usuario-----
        if(usuarioAv == ''){
            setErrorFor(usuario_logA, 'El usuario no puede estar en blanco');
        } else if(!isUsuario_LA(usuarioAv)){
            setErrorFor(usuario_logA, 'El usuario no es válido');
        }else{
            setSuccessFor(usuario_logA);
        }

        //-----Contraseña de Admin----
        if(passwordAv == ''){
            setErrorFor(password_logA, 'La contraseña no puede estar en blanco');
        } else if(!isPassword_LA(passwordAv)){
            setErrorFor(passwordA, 'La comtraseña no es válido');
        }else{
            setSuccessFor(passwordA);
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

function isUsuarioL(usuarioE){
    return /^[a-zA-Z0-9\_\-\.]{6,10}$/.test(usuarioE);
}
 function isUsuario_LA(usuarioA){
    return /^[a-zA-Z0-9\_\-\.]{6,10}$/.test(usuarioA);
 }
  
 function isPasswordL(passwordE){
    return /^(?=.*[A-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@])(?!.*[iIoO])\S{6,12}$/.test(passwordE);
 }

 function isPassword_LA(passwordA){
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{5,15}$/.test(passwordA);
 }



