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
					<td>Edad</td>
					<td>Foto</td>
					<td>Fecha de Nacimiento</td>
					<td>Estado civil</td>
					<td>Presentacion</td>
				</tr>

				<?php

				// llamada a funcion para cargar datos Otto da funcion y es parecida a la de abajo

				$mostrar=getDatosPersonales($idPersona);
						
				?>

				<tr>
					<td><?php echo $mostrar["nombre"]?></td>
					<td><?php echo $mostrar["edad"]?></td>
					<td><?php echo $mostrar["fotografía"]?></td>
					<td><?php echo $mostrar["fechadeNacimiento"]?></td>
					<td><?php echo $mostrar["idEstadoCivil"]?></td>
					<td><?php echo $mostrar["presentacion"]?></td>
				</tr>
				<?php
				
				?>
			</table>
			<table>
				<tr>
					<td>Telefono</td>
					<td>Correo</td>
				</tr>

				$mostrar=getDatosPersonales($idPersona);

				<tr>
					<td><?php echo $mostrar["telefono"]?></td>
					<td><?php echo $mostrar["correo"]?></td>
				</tr>
				<?php
				}
				?>
			</table>
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

				$mostrar=getDatosPersonales($idPersona);

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

				$mostrar=getDatosAcademicos($idPersona);
				
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
					<td>Proyectos</td>
					<td>Habilidades</td>
					<td>Conocimientos</td>
				</tr>

				$mostrar=getDatoLaborales($idPersona);

				<tr>
					<td><?php echo $mostrar["proyectos"]?></td>
					<td><?php echo $mostrar["habilidades"]?></td>
					<td><?php echo $mostrar["conocimientos"]?></td>
				</tr>

			</table>
		
		</div>
			
	</div>
	</body>
</html>