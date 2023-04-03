<?php
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones-Conexion/insert-conexion.php");
//require_once ("../../../Modelo/Sesion.php");

// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["vNombre"]))) {
        $vNombre_err = "Por favor ingrese su nombre.";
    } else {
        $vNombre = trim($_POST["vNombre"]);
    }

    if (empty(trim($_POST["vApellido"]))) {
        $vApellido_err = "Por favor ingrese su apellido.";
    } else {
        $vApellido = trim($_POST["vApellido"]);
    }

    if (empty(trim($_POST["vDPI"]))) {
        $vDPI_err = "Documento de Identificación.";
    } else {
        $vDPI = trim($_POST["vDPI"]);
    }

    if (empty(trim($_POST["vFNacimiento"]))) {
        $vFNacimiento_err = "Fecha de nacimiento.";
    } else {
        $vFNacimiento = trim($_POST["vFNacimiento"]);
    }

    if (empty(trim($_POST["vECivil"]))) {
        $vECiviln_err = "Por favor ingrese su estado civil.";
    } else {
        $vECivil = trim($_POST["vECivil"]);
    }

    if (empty(trim($_POST["vPresentacion"]))) {
        $vPresentacion_err = "Presentación";
    } else {
        $vPresentacion = trim($_POST["vPresentacion"]);
    }
    
    if (!empty(($_POST["vTelefono"]))) {
        $vTelefono_err = "Número de teléfono para contacto.";
        //condicion de 8 digitos en telefono, falta mensaje de error
    } else {
            $vTelefono = trim($_POST["vTelefono"]);
    }

    if (empty(trim($_POST["vCorreo"]))) {
        $vCorreo_err = "Correo electrónino para contacto.";
    } else {
        $vCorreo = trim($_POST["vCorreo"]);
        // echo "vCorreo";
        // echo $vCorreo;
    }

    if (datosPersonales($vNombre, $vApellido, $vFNacimiento, $vDPI, $vECivil, $vPresentacion, $vTelefono, $vCorreo)) {
        //header('Location: ../DatosLaborales/datosLaborales.html');
    } else {
       // header('Location: datosPersonales.html');
    }
}
?>