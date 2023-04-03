<?php

// Incluir archivo de configuración Otto
require_once (".. /.. /.. /Conexion/Funciones/insert.php");


// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {


    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["LEstado"]))) {
        $LEstado_err = "LEstado";
       } else {
          $LEstado = trim($_POST["LEstado"]);
          // echo $LEstado;
       }
  
    if (empty(trim($_POST["LNombre"]))) {
        $LNombre_err = "Por favor ingrese el nombre de la empresa.";
    } else {
        $LNombre = trim($_POST["LNombre"]);
        //echo("<script>console.log('Nombre: ".$LNombre."');</script>");
        // echo $LNombre;
    }
    if (empty(trim($_POST["LArea"]))) {
        $LArea_err = "Por favor ingresar el area del trabajo.";
    } else {
        $LArea = trim($_POST["LArea"]);
        // echo $LArea;
    }

    if (empty(trim($_POST["LPuesto"]))) {
        $LPuesto_err = "Por favor ingrese su Puesto.";
    } else {
        $LPuesto = trim($_POST["LPuesto"]);
        // echo $LPuesto;
    }
     
    if (empty(trim($_POST["LTiempoInicial"]))){
        $LTiempoInicial_err = "Por favor ingrese el tiempo inicial.";
    } else {
        $LTiempoInicial = trim($_POST["LTiempoInicial"]);
    }

   if (empty(trim($_POST["LTiempoFinal"]))) {
        $LTiempoFinal_err = "Por favor ingrese el tiempo final.";
    } else {
        $LTiempoFinal = trim($_POST["LTiempoFinal"]);
    }
    
    if (empty(trim($_POST["LResumen"]))) {
        $LResumen_err = "Resumen de lo que realizo en el trabajo.";
    } else {
        $LResumen= trim($_POST["LResumen"]);
        // echo $LResumen;
    }

    if (empty(trim($_POST["Lreferencias"]))) {
        $Lreferencias_err = "Por favor ingrese su referencia dentro de la empresa.";
    } else {
        $Lreferencias = trim($_POST["Lreferencias"]);
        // echo $Lreferencias;
    }

    if (datosLaborales($LEstado, $LNombre, $LArea, $LPuesto, $LTiempoInicial, $LTiempoFinal,$LResumen, $Lreferencias)){
   header('Location: Currículum.php');
    }else {

       //mostrar mensaje de error 
         header('Location: Datoslaborales.html');
 
    }
    
}

?>