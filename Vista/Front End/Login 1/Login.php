<?php

// Tengo que incluir el archivo de otto
require_once("../Controlador/Funciones/GetUsuario.php");

// Proceso de datos cunado se envian

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Comprobar si el usuario esta vacio
    if(empty(trim($_POST["vCorreoLogin"]))); {
        $vCorreoLogin_err = "Porfavor ingrese su Correo";
    
    } else {
        $vCorreoLogin = trim($_POST[$vCorreoLogin]);
        // echo "vCorreoLogin";
        // echo $vCorreoLogin;
    }

    if(empty(trim($_POST["vContraseñaLogin"]))); {
        $vContraseñaLogin_err = "Porfavor ingrese su Contraseña";
    
    } else {
        $vContraseñaLogin = trim($_POST[$vContraseñaLogin]);
        // echo "vContraseñaLogin";
        // echo $vContraseñaLogin;
    }


    if (Login($vCorreoLogin, $vContraseñaLogin)){
        header('Location: Login.html');
    } else {
        //Mostrar mensaje de error
        header('Location: Login.php') 
    }
}
?>