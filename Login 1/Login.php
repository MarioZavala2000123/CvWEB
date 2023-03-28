<?php

// Tengo que incluir el archivo de otto
require_once("../Controlador/Funciones/insert.php");

// Proceso de datos cunado se envian

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Comprobar si el usuario esta vacio
    if(empty(trim($_POST["vNombreLogin"]))); {
        $vNombreLogin_err = "Porfavor ingrese su Nombre";
    
    } else {
        $vNombreLogin = trim($_POST[$vNombreLogin]);
        // echo "vNombreLogin";
        // echo $vNombreLogin;
    }

    if(empty(trim($_POST["vApellidoLogin"]))); {
        $vApellidoLogin_err = "Porfavor ingrese su Apellido";
    
    } else {
        $vApellidoLogin = trim($_POST[$vApellidoLogin]);
        // echo "vApellidoLogin";
        // echo $vApellidoLogin;
    }

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


    if (Login($vNombreLogin, $vApellidoLogin, vCorreoLogin, $vContraseñaLogin)){
        header('Location: Login.html');
    } else {
        //Mostrar mensaje de error
        header('Location: Login.html')
    }
}
?>