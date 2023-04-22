<?php

// Tengo que incluir el archivo de otto
require_once("../../../Controlador/Funciones-Conexion/GetUsuario.php");

// Proceso de datos cunado se envian

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Comprobar si el usuario esta vacio
    if(empty(trim($_POST["vCorreoRegistro"]))) {
        $vCorreoRegistro_err = "Porfavor ingrese su Correo";
    
    } else {
        $vCorreoRegistro = trim($_POST["vCorreoRegistro"]);
         echo "vCorreoRegistro ";
         echo $vCorreoRegistro;
    }

    if(empty(trim($_POST["vContraseñaRegistro"]))) {
        $vContraseñaRegistro_err = "Porfavor ingrese su Contraseña";
    
    } else {
        $vContraseñaRegistro = trim($_POST["vContraseñaRegistro"]);
         echo "vContraseñaRegistro ";
         echo $vContraseñaRegistro;
    }
    if(Usuario($vCorreoRegistro,$vContraseñaRegistro)){
        header('Location: Login.html');
        echo "Entro al IF";
    } else {
        ECHO "NO ENTRO AL IF";
        //Mostrar mensaje de error
        header('Location: Register.html'); 
    }
}
?>