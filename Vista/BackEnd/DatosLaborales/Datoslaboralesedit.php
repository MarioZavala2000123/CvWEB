<?php
//verificacion de datos y hacer un get
session_start();
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones/insert.php");
//Campos del DB
//$datosPersona=getDatosPersona($_SESSION['idPersona']);
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
?>
<?php
//Actualizar datos y enviarlos
// Incluir archivo de configuración Otto
require_once ("../../../Controlador/Funciones/insert.php");
// Procesamiento de datos del formulario cuando se envía el formulario
//Validar si preciona el boton guardar
if (isset($_POST['modificar'])) {
    //recuperar los datos que se encuentran en cada uno de los imputs
    $idUsuario= $_POST['id'];
}
//Para modificar se puede utilizar el metodo "PUT"
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

//datos edit
    //if (datosLaborales($LEstado, $LNombre, $LArea, $LPuesto, $LTiempoInicial, $LTiempoFinal,$LResumen, $Lreferencias)){
    //header('Location: ');
     //}else {
 
        //mostrar mensaje de error 
          //header('Location: Datoslaborales.html');
  
    // }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulario para CV</title>

    <link href="CSS/datosPersonales.css" rel="stylesheet">
    <link href="CSS/main.css" rel="stylesheet">
    <link href="CSS/main.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
</head>
</head>
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Datos Laborales </h2>
                </div>
                <div class="card-body">
                    <form action="Datoslaborales.php" method="POST">
                        <div class="form-row">
                            <div class="name">En esta empresa estas trabajando actualmente </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="LEstado" id="Estado"  value="<?php echo $Estado; ?>"><br><br>>
                                            <option disabled="disabled" selected="selected">Seleccione opcion</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No </option>

                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="form-row m-b-55">
                            <div class="name">Nombre de la empresa</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="LNombre" id="LNombre">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Puesto de trabajo</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="LArea" id="LArea">
                                            <label class="label--desc">Area de trabajo</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="LPuesto" id="LPuesto">
                                            <label class="label--desc">El puesto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">El tiempo que incio a trabajar</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name=" LTiempoInicio" id="LTiempoInicio">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">El tiempo que finalizo de trabajar</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name=" LTiempoFinal" id="LTiempoFinal">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Referencias </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Lreferencias" id="Lreferencias">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Que realizo dentro de la empresa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="LResumen" id="LResumen">
                                    <label class="label--desc">Concepto de lo que trabajo en la empresa</label>
                                </div>
                            </div>
                        </div>
                            <!-- <button class="btn btn--radius-2 btn--red" type="submit">Siguiente</button> -->
                            <input class="btn  btn--blue" type="submit"  value="Guardar"/>
                        </div>
                        <span></span>
                        <div></div>
                        <span></span>
                        <p></p>
                        <div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
