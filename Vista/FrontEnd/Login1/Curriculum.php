<?php

require_once("../../Controlador/Funciones-Conexion/insert-conexion.php");

if (isset($_GET['idUsuario'])) {
    //recuperar los datos que se encuentran en cada uno de los imputs
    $idUsuario= $_GET['idUsuario'];
}

?>

<html>
	<head>
		<title> Mi Curriculum</title>
		<link rel="stylesheet" href="css/styles.css">
		<script src="https://kit.fontawesome.com/0ae6180350.js" crossorigin="anonymous"></script> 
	</head>
		<body>
		<header class="encabezadoI">
			<div class="encabezado">
				<img src="CSS/curriculum-vitae-cartoon-icon-illustration-people-business-icon-concept-isolated-premium-flat-cartoon-style-vector.jpg" alt="acompañamiento">
				<H1><B>Tu informacion</B></H1>
				<a href="javascript:window.print()"><button class="imprimir">Imprimir</button></a>
			</div>
			
			<div  class="desplegable">  			
				<button class="imprimir" >Editar</button>
				<div class="Links1">
					<a href="../BackEnd/DatosPersona/datosPersonalesEdit.php">Datos Personales</a>
					<a href="#">Datos Academicos</a>
					<a href="#">Datos Laborales</a>
				</div>
			</div>

		</header>
		
	<div class="contenedor">
		<div>
			<header>
				<div class="Mia">
					<img src="css/Logo_Uspg.jpg" alt="acompañamiento">
					<H1><B>Curriculim Vitae</B></H1>
					<div style="text-align: right;">
					</div>
				</div>
			</header>
				<div>
			<H1 class="Primero"><B><U>Datos Personales:</U></B></H1> 
		<div class="Parrafo">
			<table>
				<tr>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Fecha de Nacimiento</td>
					<td>DPI</td>
					<td>Estado civil</td>
					<td>Telefono</td>
					<td>Correo</td>
				</tr>

				<?php

				// llamada a funcion para cargar datos Otto da funcion y es parecida a la de abajo

				$mostrar=datosPersonales($idPersona);
						
				?>

				<tr>
					<td><?php echo $mostrar["nombre"]?></td>
					<td><?php echo $mostrar["apellido"]?></td>
					<td><?php echo $mostrar["fecha_Nacimiento"]?></td>
					<td><?php echo $mostrar["dpi"]?></td>
					<td><?php echo $mostrar["estadoCivil"]?></td>
					<td><?php echo $mostrar["telefono"]?></td>
					<td><?php echo $mostrar["correo"]?></td>
				</tr>
		</div>
		<div class="Parrafo">
			&nbsp
			<H1><B><U>ESTUDIOS REALIZADOS:</U></B></H1>
			<table>
				<tr>
					<td>Nivel Primario</td>
					<td>Nivel Secundario</td>
					<td>Estudios mayores</td>
				</tr>

				<?php

				$mostrar=getDatosPersonales($idPersona);

				?>

				<?php // Me tengo que poer de acuerdo con otto para hacr el while ?>

				<tr>
					<td><?php echo $mostrar["nivelPrimario"]?></td>
					<td><?php echo $mostrar["nivelSecundario"]?></td>
					<td><?php echo $mostrar["estudiosMayores"]?></td>
				</tr>
			
			</table>
		</div>
		<div class="Parrafo">
			&nbsp 
			<H1><U>Datos academicos:</U></H1>
			<table>
				<tr>
					<td>Certificaciones</td>
					<td>Diplomas</td>
					<td>Idiomas</td>
				</tr>

				<?php

				$mostrar=getDatosAcademicos($idPersona);

				?>
				
				<tr>
					<td><?php echo $mostrar["certificaciones"]?></td>
					<td><?php echo $mostrar["idiomas"]?></td>
					<td><?php echo $mostrar["diplomas"]?></td>
				</tr>
			</table>
		</div>
		<div class="Parrafo">
			&nbsp 
			<H1><U>EXPERIENCIA LABORAL:</U></H1>
			<table>
				<tr>
					<td>Nombre de la Empresa</td>
					<td>Tiempo Laborando</td>
					<td>Area Laboral</td>
					<td>Descripcion</td>
					<td>Puesto Ocupado</td>
					<td>Refecencia</td>

				</tr>

				<?php				
				$mostrar=datosLaborales($idPersona);
				
				$i = $idLaboral;
				// Colocar while "Ponerse de acuerdo con Otto"
				
				//el $i lo tiene que dar el while
				?>

				<?php
				while ($i < count($idPersona)){
				?>
					<tr>
					<td><?php echo $mostrar[$i++] ["nombreEmpresa"]?></td>
					<td><?php echo $mostrar["estado"]?></td>
					<td><?php echo $mostrar["puesto"]?></td>
					<td><?php echo $mostrar["area"]?></td>
					<td><?php echo $mostrar["tiempoInicial"]?></td>
					<td><?php echo $mostrar["tiempoFinal"]?></td>
					<td><?php echo $mostrar["referencia"]?></td>
					<td><?php echo $mostrar["resu"]?></td>
					</tr>
				<?php	
				}
				?>
				

			</table>
		
		</div>
			
	</div>
	</body>
</html>