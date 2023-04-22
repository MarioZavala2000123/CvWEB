<?php
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones-Conexion/insert-conexion.php");


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
    
    // Repetir hasta que el campo "telefono" tenga 8 dígitos
    while (true) {
        // Validar si el campo "telefono" tiene exactamente 8 dígitos
        if (preg_match('/^\d{8}$/', $_POST["vTelefono"])) {
        // Si el campo "telefono" tiene 8 dígitos, salir del ciclo
        $vTelefono = trim($_POST["vTelefono"]);
        break;
        } else {
        // Si el campo "telefono" no tiene 8 dígitos, mostrar alerta y volver al formulario
        echo "<script>alert('Ingrese un número teléfonico valido, debe de tener 8 digitos'); window.history.back();</script>";
        exit();
        }
    }

    if (empty(trim($_POST["vCorreo"]))) {
        $vCorreo_err = "Correo electrónino para contacto.";
    } else {
        $vCorreo = trim($_POST["vCorreo"]);
        // echo "vCorreo";
        // echo $vCorreo;
    }

    if (datosPersonales($vNombre, $vApellido, $vFNacimiento, $vDPI, $vECivil, $vPresentacion, $vTelefono, $vCorreo)) {
        header('Location: ../DatosLaborales/Datoslaborales.html');
    } else {
       // header('Location: datosPersonales.html');
    }
}
?>