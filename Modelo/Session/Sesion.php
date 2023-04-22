<?php
require_once ("../../Controlador/Funciones-Conexion/GetUsuario.php");
echo "ESTAMOS EN SESION";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ECHO "ESTAMOS EN EL SEGUNDO IF";
    if (trim($_GET["idUsuario"])) {
        session_start();
        $_SESSION['idUsuario']=$_GET["idUsuario"];
        // echo $_SESSION['idUsuario'];
        //Get de los datospersonales, agregar funcion Otto
        //Get de los datosacademocos, agregar funcion Otto
        //Get de los datosLaborales, agregar funcion Otto
        //$Session=getidPersona($_SESSION['idUsuario']);
        if(!empty($_SESSION['idUsuario'])){
            header('Location: ../../Vista/BackEnd/DatosPersona/datosPersonales.html');
        }else{
            header('Location: ../../../Vista/BackEnd/DatosPersona/datosPersonalesEdit.php');
        }
    } else {
        header('Location: ../../../../Vista/FrontEnd/Login1/Login.html');
    }
}

?>s 