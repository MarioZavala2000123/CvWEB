<?php
require_once ("../../Controlador/Funciones-Conexion/GetUsuario.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (trim($_GET["idUsuario"])) {
        session_start();
        $_SESSION['idUsuario']=$_GET["idUsuario"];
        // echo $_SESSION['idUsuario'];
        //Get de los datospersonales, agregar funcion Otto
        //Get de los datosacademocos, agregar funcion Otto
        //Get de los datosLaborales, agregar funcion Otto
        //$Session=getidPersona($_SESSION['idUsuario']);
        if(empty($Session)){
            header('Location: ../../../../Vista/BackEnd/DatosPersona/datosPersonales.html');
        }else{
            header('Location: ../../../../Vista/BackEnd/DatosPersona/datosPersonales.php');
        }
    } else {
        header('Location: ../../../../Vista/Front End/Login 1/Login.html');
    }
}

?>s