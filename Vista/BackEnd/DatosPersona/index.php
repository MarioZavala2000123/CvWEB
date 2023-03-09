<?php

// Incluir archivo de configuración Otto
require_once "config.php";


// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["nombre"]))) {
        $vNombre_err = "Por favor ingrese su nombre.";
    } else {
        $vNombre = trim($_POST["nombre"]);
    }

    if (empty(trim($_POST["apellido"]))) {
        $vApellido_err = "Por favor ingrese su apellido.";
    } else {
        $vApellido = trim($_POST["apellido"]);
    }

    if (empty(trim($_POST["dpi"]))) {
        $vDPI_err = "Por favor ingrese su documento de indentificación.";
    } else {
        $vDPI = trim($_POST["dpi"]);
        echo $vDPI;
    }

    if (empty(trim($_POST["fecha_Nacimiento"]))) {
        $vFNacimiento_err = "Fecha de nacimiento.";
    } else {
        $vFNacimiento = trim($_POST["fecha_Nacimiento"]);
        echo $vFNacimiento;
    }

    if (empty(trim($_POST["estadoCivil"]))) {
        $vECiviln_err = "Por favor ingrese su estado civil.";
    } else {
        $vECivil = trim($_POST["estadoCivil"]);
        echo $vECivil;
    }

    // if (empty(trim($_POST["vPresentacion"]))) {
    //     $vPresentacion_err = "Presentación";
    // } else {
    //     $vPresentacion = trim($_POST["vPresentacion"]);
    //     echo $vPresentacion;
    // }

    if (empty(trim($_POST["telefono"]))) {
        $vTelefono_err = "Número de teléfono para contacto.";
    } else {
        $vTelefono = trim($_POST["telefono"]);
        echo $vTelefono;
    }

    if (empty(trim($_POST["correo"]))) {
        $vCorreo_err = "Correo electrónino para contacto.";
    } else {
        $vCorreo = trim($_POST["correo"]);
        echo $vCorreo;
    }

    //guardarDatosPersona($username, $password);
}

?>