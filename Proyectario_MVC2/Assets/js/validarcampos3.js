const form = document.getElementById('form');
const nombre = document.getElementById('nombre');
const telefono = document.getElementById('telefono');
const correo = document.getElementById('correo');
const nacimiento = document.getElementById('nacimiento');
const telefono_c = document.getElementById('telefono_c');
const institucion = document.getElementById('institucion');
const puesto = document.getElementById('puesto');
const usuario = document.getElementById('usuario');
const password = document.getElementById('password');
//const rfc_log = document.getElementById('rfc_log');

form.addEventListener("submit", e => {
    e.preventDefault();

    
    checkInputs();
    console.log("clikk");
    //window.open("http://www.desarrolloweb.com" , "ventana1" , "width=120,height=300,scrollbars=NO");
    console.log("Abiertoooo");
});

function checkInputs(){
    //Traer los valores de los inputs
    const nombrev = nombre.value.trim();
    const telefonov = telefono.value.trim();
    const correov = correo.value.trim();
    const nacimientov = nacimiento.value.trim();
    const telefono_cv = telefono_c.value.trim();
    const institucionv = institucion.value.trim();
    const puestov = puesto.value.trim();
    const usuariov = usuario.value.trim();
    const passwordv = password.value.trim();
    //const rfc_logv = rfc_log.value.trim();
     

    //console.log("RFC:", rfc_log);
    //-----Nombre-------
    if(nombrev == ''){
        //console.log("nombre vacío", nombre);
        setErrorFor(nombre, 'El nombre no puede estar en blanco');
    } else if(!isNombre(nombrev)){
        setErrorFor(nombre, 'El nombre no es válido');
    } else{
        setSuccessFor(nombre);
    }

    //-----Teléfono------
    if(telefonov == ''){
        setErrorFor(telefono, 'El telefono no puede estar en blanco');
    }else if(!isTelefono(telefonov)){
        setErrorFor(telefono, 'El teléfono no es válido');
    } else{
        setSuccessFor(telefono); 
    }

    //-----Correo----------
    if(correov == ''){
        setErrorFor(correo, 'El correo no puede estar en blanco');
    } else if(!isEmail(correov)){
        setErrorFor(correo, 'El correo no es válido');
    }else{
        setSuccessFor(correo);
    }

    //-----Nacimiento----
    if(nacimientov == ''){
        setErrorFor(nacimiento, 'La fecha no puede estar en blanco');
    }else{
        setSuccessFor(nacimiento);
    }

    console.log("telefono c:", telefono_cv);
    //-----Teléfono de contacto----
    if(telefono_cv == ''){
        console.log("telefono c vacío", telefono_c);
        setErrorFor(telefono_c, 'El teléfono no puede estar en blanco');
    } else if(!isTelefono(telefono_cv)){
        setErrorFor(telefono_c, 'El teléfono no es válido');
    }else{
        setSuccessFor(telefono_c);
    }

    //-----Institución de procedencia----
    if(institucionv == ''){
        setErrorFor(institucion, 'La isntitución no puede estar en blanco');
    } else if(!isInstitucion(institucionv)){
        setErrorFor(institucion, 'La isntitución no es válida');
    }else{
        setSuccessFor(institucion);
    }

    //----- Puesto ----
    /*if(puestov == ''){
        setErrorFor(puesto, 'El puesto no puede estar en blanco');
    } else if(!isPuesto(puestov)){
        setErrorFor(puesto, 'El puesto no es válido');
    }else{
        setSuccessFor(puesto);
    }*/

    //-----Usuario----
    if(usuariov == ''){
        setErrorFor(usuario, 'El usuario no puede estar en blanco');
    } else if(!isUsuario(usuariov)){
        setErrorFor(usuario, 'El usuario no es válido');
    }else{
        setSuccessFor(usuario);
    }

    //-----Contraseña----
    if(passwordv == ''){
        setErrorFor(password, 'La contraseña no puede estar en blanco');
    } else if(!strongPass(passwordv)){
        setErrorFor(password, 'La contraseña no es válida');
    }else{
        setSuccessFor(password);
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

function isEmail(correo) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(correo);
  }
  
function strongPass(password) {
    return /^(?=.*[A-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[$@])(?!.*[iIoO])\S{6,12}$/.test(password);
}

function isTelefono(telefono){
    return /^\d{10}$/.test(telefono);
}

function isNombre(nombre){
    return /^[a-zA-ZÁ-ÿ\s]{2,40}$/.test(nombre);
}

function isUsuario(usuario){
    return /^[a-zA-Z0-9\_\-\.]{6,10}$/.test(usuario);
}

function isPuesto(puesto){
    return  /^[a-zA-ZÁ-ÿ\s]{2,20}$/.test(puesto);
}

function isInstitucion(institucion){
    return /^[a-zA-Z0-9Á-ÿ\s]{2,40}$/.test(institucion);
}