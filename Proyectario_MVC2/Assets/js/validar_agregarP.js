const form = document.getElementById('form');

const titulo = document.getElementById('titulo');

const descripcion = document.getElementById('descripcion');

const requisitos = document.getElementById('requisitos');

const n_alumnos = document.getElementById('n_alumnos');


function ShowSelected()
{
    /* Para obtener el valor */
    var cod = document.getElementById("categoria").value;
    
    /* Para obtener el texto */
    var combo = document.getElementById("categoria");
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
    const titulov = titulo.value.trim();
    const descripcionv = descripcion.value.trim();

    const requisitosv= requisitos.value.trim();
    const n_alumnosv= n_alumnos.value.trim();

    //console.log("RFC:", rfc_log);


        //-----Título-------
        if(titulov == ''){
            setErrorFor(titulo, 'El título no puede estar en blanco');
        } else{
            setSuccessFor(titulo);
        }


        //-----Descripcion-----
        if(descripcionv == ''){
            setErrorFor(descripcion, 'La descripcion no puede estar en blanco');
        } else{
            setSuccessFor(descripcion); 
        }

        //-----Requisitos----------
        if(requisitosv == ''){
            setErrorFor(requisitos, 'Los requisitos no pueden estar en blanco');
        }else{
            setSuccessFor(requisitos);
        }

        ///----N_alumnos-----
        if(n_alumnosv == ''){
            setErrorFor(n_alumnos, 'El n. alumnos no puede estar en blanco');
        }else{
            setSuccessFor(n_alumnos);
        }


}

function setErrorFor(input, message) {
    const foormControl = input.parentElement;
    const small = foormControl.querySelector("small");

    small.innerText = message;
    foormControl.className = "foorm-control error";

    console.log(foormControl);
    console.log(message);
}

function setSuccessFor(input) {
    const foormControl = input.parentElement;
    foormControl.className = "foorm-control success";
  }





