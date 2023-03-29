<?php
require_once ("../../../Controlador/Funciones/insert.php");
//Campos del DB
//$datosPersona=getDatosPersona($_SESSION['idPersona']);
 //ejemplo
    // $datosPersona = [
    //     "Nombre" => "Carlos",
    //     "Telefono" => "45678925",
    // ];
    //echo $datosPersona['Nombre'];
?>
<?php
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones/insert.php");
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
//datos edit
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
                    <form action="datosPersonales.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <!-- agregar los campos de la tabla del DB-->
                                            <input class="input--style-5" type="text" name="vNombre" id="validationDefault01" value="<?php echo $datosPersona['nombre']  ?>" required>
                                            <label class="label--desc">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="vNombre" id="validationDefault01" value="<?php echo $datosPersona['fechadeNacimiento']  ?>" required>
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
                                    <input class="input--style-5" type="number" name="vDPI" id="validationDefault01"required>
                                    <label class="label--desc">Documento Personal de Identificaci&oacute;n</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fecha de nacimiento</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="vFNacimiento"
                                        id="validationDefault01" required>
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
                                        <select name="vECivil" class="form-select" id="validationDefault04" required>
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
                                    <input class="input--style-5" type="text" name="vPresentacion">
                                    <label class="label--desc">Presentaci&oacute;n o concepto de quien es</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Correo Electr&oacute;nico</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="vCorreo" id="validationDefault01"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tel&eacute;fono</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="vTelefono"
                                        id="validationDefault01" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="submit" value="Guardar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>