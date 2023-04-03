<?php
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones/insert.php");
require_once ("../../../Modelo/Sesion.php");
// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["vNombre"]))) {
        $vNombre_err = "Por favor ingrese su nombre.";
    } else {
        $vNombre = trim($_POST["vNombre"]);
        // echo "vNombre";
        // echo $vNombre;
    }

    if (empty(trim($_POST["vApellido"]))) {
        $vApellido_err = "Por favor ingrese su apellido.";
    } else {
        $vApellido = trim($_POST["vApellido"]);
        // echo "vApellido";
        // echo $vApellido;
    }

    if (empty(trim($_POST["vDPI"]))) {
        $vDPI_err = "Documento de Identificación.";
    } else {
        $vDPI = trim($_POST["vDPI"]);
        // echo "vDPI";
        // echo $vDPI;
    }

    if (empty(trim($_POST["vFNacimiento"]))) {
        $vFNacimiento_err = "Fecha de nacimiento.";
    } else {
        $vFNacimiento = trim($_POST["vFNacimiento"]);
        // echo "vFNacimiento";
        // echo $vFNacimiento;
    }

    if (empty(trim($_POST["vECivil"]))) {
        $vECiviln_err = "Por favor ingrese su estado civil.";
    } else {
        $vECivil = trim($_POST["vECivil"]);
        // echo "vECivil";
        // echo $vECivil;
    }

    if (empty(trim($_POST["vPresentacion"]))) {
        $vPresentacion_err = "Presentación";
    } else {
        $vPresentacion = trim($_POST["vPresentacion"]);
        //  echo "vPresentacion";
        //  echo $vPresentacion;
    }

    if (empty(trim($_POST["vTelefono"]))) {
        $vTelefono_err = "Número de teléfono para contacto.";

        //condicion de 8 digitos en telefono, falta mensaje de error
    } elseif (strlen(trim($_POST["vTelefono"])) == 8) {
        $vTelefono = trim($_POST["vTelefono"]);
        // $vTelefono_err = "La clave al menos debe tener 6 caracteres.";
        // echo "ELSEIF vTelefono";
        //  echo $vTelefono;
    } else {
        $vTelefono_err = "La clave al menos debe tener 8 caracteres.";
        // $vTelefono = trim($_POST["vTelefono"]);
        //  echo "ELSE vTelefono";
        //  echo $vTelefono;
        // return $vTelefono;
    }

    if (empty(trim($_POST["vCorreo"]))) {
        $vCorreo_err = "Correo electrónino para contacto.";
    } else {
        $vCorreo = trim($_POST["vCorreo"]);
        // echo "vCorreo";
        // echo $vCorreo;
    }

    if (datosPersonales($vNombre, $vApellido, $vFNacimiento, $vDPI, $vECivil, $vPresentacion, $vTelefono, $vCorreo)) {
        header('Location: ../datosAcademicos.html');
    } else {
        //mostrar mensaje de error 
        // echo "Error php";
        header('Location: datosPersonales.html');
    }
}
?>