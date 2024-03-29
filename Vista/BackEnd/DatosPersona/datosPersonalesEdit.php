<?php
//Actualizar datos y enviarlos
//verificacion de datos y hacer un get
session_start();
// Incluir archivo de configuración de conexion
require_once ("../../../Controlador/Funciones-Conexion/insert-conexion.php");
// Procesamiento de datos del formulario cuando se envía el formulario
    //Funcion de llamada a la capa de controlador
//$datosPersona=getDatosPersona($_SESSION['idPersona']);
//Campos del DB
    //ejemplo
    // $datosPersona = [
    //     "nombre" => "Daniel",
    //     "apellido" => "Guerra",
    //     "fecha_nacimiento" => "04/04/1998",
    //     "dpi" => "4567891230456",
    //     "estadoCivil" => "Soltero/Soltera",
    //     "presentacion" => "Presentacion de Daniel",
    //     "telefono" => "45678925",
    //     "correo" => "danielgerr@gmail.com",
    // ];
    //echo $datosPersona['nombre'];
//Para modificar se puede utilizar el metodo "PUT"
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
    //datos edit, llamada a la funcion para update
    // if (datosPersonalesEdit($vNombre, $vApellido, $vFNacimiento, $vDPI, $vECivil, $vPresentacion, $vTelefono, $vCorreo)) {
    //     header('Location: datosAcademicos.html');
    // } else {
    //     //mostrar mensaje de error 
    //     header('Location: datosPersonales.html');
    // }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link href="CSS/datosPersonales.css" rel="stylesheet">
    <link href="CSS/main.css" rel="stylesheet">
    <link href="CSS/main.min.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Datos personales</h2>
                </div>
                <div class="card-body">
                    <form action="datosPersonalesEdit.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <!-- agregar los campos de la tabla del DB-->
                                            <input type="hidden" name="id" value="<?php echo $datosPersona['nombre']  ?>">
                                            <input class="input--style-5" type="text" name="vNombre" id="validationDefault01" value="<?php echo $datosPersona['nombre']  ?>" required>
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="vApellido" id="validationDefault01" value="<?php echo $datosPersona['apellido']  ?>" required>
                                            <label class="label--desc">Apellido</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DPI</div>
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="vDPI" id="validationDefault01" value="<?php echo $datosPersona['dpi']  ?>" required>
                                    <label class="label--desc">Documento Personal de Identificaci&oacute;n</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fecha de nacimiento</div>
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="vFNacimiento" id="validationDefault01" value="<?php echo $datosPersona['fecha_nacimiento']  ?>" required>
                                    <label class="label--desc">d&iacute;a/mes/a&ntilde;o</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Estado Civil</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="col-md-3">
                                        <label for="validationDefault04" class="form-label"></label>
                                        <select name="vECivil" class="form-select" id="validationDefault04" value="<?php echo $datosPersona['estadoCivil']  ?>" required>
                                            <option selected disabled value="">Seleccionar</option>
                                            <option>Soltero/Soltera</option>
                                            <option>Casado/Casada</option>
                                            <option>Divorciado/Divorciada</option>
                                            <option>Unido</option>
                                            <option>Viudo/Viuda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Presentaci&oacute;n</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="vPresentacion" value="<?php echo $datosPersona['presentacion']  ?>">
                                    <label class="label--desc">Presentaci&oacute;n o concepto de quien es</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electr&oacute;nico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="vCorreo" id="validationDefault01" value="<?php echo $datosPersona['correo']  ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tel&eacute;fono</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="vTelefono" id="validationDefault01" value="<?php echo $datosPersona['telefono']  ?>" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input name="modificar" class="btn btn--radius-2 btn--blue" type="submit" value="Guardar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>