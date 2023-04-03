<?php
require_once ("../Controlador/Funciones/insert.php");
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
            header('Location: ../Vista/BackEnd/DatosPersona/DatosPersonales.html');
        }else{
            header('Location: ../Vista/BackEnd/DatosPersona/DatosPersonalesEdit.php');
        }
    } else {
        header('Location: ../Vista/FrondEnd/Login.html');
    }
}

?>