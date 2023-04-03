<?php
require_once ("../Controlador/Funciones/insert.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (trim($_GET["idUsuario"])) {
        $_SESSION['idUsuario']=$_GET["idUsuario"];
        // echo $_SESSION['idUsuario'];
        //Get de los datospersonales, agregar funcion Otto
        //$idPersona=getidPersona($_SESSION['idUsuario']);
        if(empty($idPersona)){
            header('Location: ../Vista/BackEnd/DatosPersona/DatosPersonales.html');
        }else{
            $_SESSION['idPersona']= $idPersona;
            header('Location: ../Vista/BackEnd/DatosPersona/DatosPersonalesEdit.php');
        }
    } else {
        header('Location: ../Vista/FrondEnd/Login.html');
    }
}

?>