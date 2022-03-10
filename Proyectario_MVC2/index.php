<?php
    require_once "Config/Config.php";
    $ruta = !empty($_GET['url']) ? $_GET['url'] : "Home/index"; //Verificar si no existe la variable url, en caso contrario si existe la variable url almacenamos ese mismo valor, caso contrario le indicamos que es Home(index)
    //echo $ruta; //imprimir la ruta

    $array = explode("/", $ruta); //Convertir en un arreglo la ruta
    //print_r($array); //imprimir el arreglo

    $controller = $array[0];
    $metodo = "index";
    $parametro = "";

    //Hacer validaciones para verificar si existe el método
    if(!empty($array[1])){
        //verificar que sea dferente de vacio
        if(!empty($array[1] != "")){
            $metodo = $array[1]; //entonces el método va aser igual al array con índice 1

        }
    }
    //print_r($metodo); //verificar el método

    //Hacer validaciones para verificar el parámetro
    if(!empty($array[2])){
        //verificar que sea dferente de vacio
        if(!empty($array[1] != "")){
            for($i=2; $i < count($array); $i++){ //Si es diferente de vacío, se recorre con un for toda la cantidad el arreglo
                $parametro .= $array[$i]. ","; //Almacenar en parametro con concatenacion para que no lo separe con coma.
            }

            $parametro = trim($parametro, ",");//Eliminar la última coma
        }
    }

    //comprobar
    /*echo $controller;
    echo $metodo;
    echo $parametro;*/

    require_once "Config/App/autoload.php";

    $dirControllers = "Controllers/".$controller.".php"; //Variable para almacenar la ruta de la carpeta controllers y concatenar la variable controller y la extensión
    //Verificar si existe este controlador en ese directorio
    if(file_exists($dirControllers)){
        require_once $dirControllers; //Si existe requerimos ese controlador
        $controller = new $controller();//Hacemos una instancia

        //Verificamos si dentro del controlador existe un método.
        if(method_exists($controller, $metodo)){
            $controller->$metodo($parametro);//Si existe, entonces lo llamamos y si tiene parametro entonces tambien lo llamamos.
        }else{
            echo "No existe el metodo";//Si no existe, mostramos el mensaje
        }

    }else{
        echo "No existe el controlador";//Si no existe, mostramos el mensaje
    }
?>