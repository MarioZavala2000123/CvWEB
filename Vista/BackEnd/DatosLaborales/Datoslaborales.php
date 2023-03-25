<?php

// Incluir archivo de configuración Otto
//require_once "config.php";
require_once ("../../../Controlador/Funciones-Conexion/insert-conexion.php");


// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {


    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["lNombre"]))) {
        $lNombre_err = "Por favor ingrese el nombre de la empresa.";
    } else {
        $lNombre = trim($_POST["lNombre"]);
        echo("<script>console.log('Nombre: ".$lNombre."');</script>");
        // echo $lNombre;
    }

    if (empty(trim($_POST["lTiempo"]))) {
        $lTiempo_err = "Por favor ingrese el tiempo.";
    } else {
        $lTiempo = trim($_POST["lTiempo"]);
        // echo $lTiempo;
    }
    if (empty(trim($_POST["lArea"]))) {
        $lArea_err = "Por favor ingresar el area del trabajo.";
    } else {
        $lArea = trim($_POST["lArea"]);
        // echo $lArea;
    }
    if (empty(trim($_POST["lDescripcion"]))) {
        $lDescripcion_err = "Resumen de lo que realizo en el trabajo.";
    } else {
        $lDescripcion = trim($_POST["lDescripcion"]);
        // echo $lDescripcion;
    }
    if (empty(trim($_POST["lPuesto"]))) {
        $lPuesto_err = "Por favor ingrese su Puesto.";
    } else {
        $lPuesto = trim($_POST["lPuesto"]);
        // echo $lPuesto;
    }

    if (empty(trim($_POST["lReferencias"]))) {
        $Lreferencias_err = "Por favor ingrese su referencia dentro de la empresa.";
    } else {
        $lReferencias = trim($_POST["lReferencias"]);
        // echo $lReferencias;
    }
  

    if (datosLaborales($lNombre,$lTiempo,$lArea,$lDescripcion,$lPuesto,$lReferencias)){
        header('Location: Datoslaborales.html');
    }else {
       //mostrar mensaje de error 
         header('Location: DatosLaborales.html');

    }
    
}

?>