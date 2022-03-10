const formulario = document.getElementsById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, //Letras, números, guiones
    nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/, //Lestras y espacios y acentos.
    password: /^.{4,12}$/, // 4 a 12 dígitos
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9-.]+$/,  
    telefono: /^\d{7,14}$/  // 7 a 14 número
}

const validarFormulario = () => {
    switch (e.target.name){
        case: "usuario":
            if(expresiones.usuario.text(e.target.value)){

            }
            else{
                document.getElementById('grupo__usuario').classList('formulario__grupo-incorrecto');
            }
        break;
        case: "nombre":
            console.log('Funciona!')
        break;
        case: "password":
            console.log('Funciona!')
        break;
        case: "correo":
            console.log('Funciona!')
        break;
        case: "telefono":
            console.log('Funciona!')
        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
});