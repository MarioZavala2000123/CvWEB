<?php

// Incluir archivo de configuración Otto
//require_once "config.php";


// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["vNombre"]))) {
        $vNombre_err = "Por favor ingrese su nombre.";
    } else {
        $vNombre = trim($_POST["vNombre"]);
        // echo $vNombre;
    }

    if (empty(trim($_POST["vApellido"]))) {
        $vApellido_err = "Por favor ingrese su apellido.";
    } else {
        $vApellido = trim($_POST["vApellido"]);
    }

    if (empty(trim($_POST["vDPI"]))) {
        $vDPI_err = "Por favor ingrese su documento de indentificación.";
    } else {
        $vDPI = trim($_POST["vDPI"]);
        echo $vDPI;
    }

    if (empty(trim($_POST["vFNacimiento"]))) {
        $vFNacimiento_err = "Fecha de nacimiento.";
    } else {
        $vFNacimiento = trim($_POST["vFNacimiento"]);
        echo $vFNacimiento;
    }

    if (empty(trim($_POST["vECivil"]))) {
        $vECiviln_err = "Por favor ingrese su estado civil.";
    } else {
        $vECivil = trim($_POST["vECivil"]);
        echo $vECivil;
    }

     if (empty(trim($_POST["vPresentacion"]))) {
         $vPresentacion_err = "Presentación";
     } else {
         $vPresentacion = trim($_POST["vPresentacion"]);
         echo $vPresentacion;
     }

    if (empty(trim($_POST["vTelefono"]))) {
        $vTelefono_err = "Número de teléfono para contacto.";
    } else {
        $vTelefono = trim($_POST["vTelefono"]);
        echo $vTelefono;
    }

    if (empty(trim($_POST["vCorreo"]))) {
        $vCorreo_err = "Correo electrónino para contacto.";
    } else {
        $vCorreo = trim($_POST["vCorreo"]);
        echo $vCorreo;
    }

    // if (guardarDatosPersona($vNombre, $vApellido)){
    //     header('Location: datosAcademicos.html');
    // }else {
    //     //mostrar mensaje de error 
    //     header('Location: datosPersonales.html');
    // }
}
?>