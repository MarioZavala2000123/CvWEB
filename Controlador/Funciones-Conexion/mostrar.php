<?php
// FUNCION PARA ENVIAR DATOS
function Mostrar($conn, $tabla){

    //variable conexion
    $conn = mysqli_connect("localhost", "root", "", "prueba");

        if(!mysqli_connect_errno()){

            $mostrar = "SELECT * From datospersonales INNER JOIN datoslaborales on datospersonales.idUsuario=datoslaborales.idUsuario";
            $resultado = mysqli_query($conn,$tabla);

            //consulta exitosa
            if(!$resultado){
                die("Ocurrio un error en la consulta: " . mysqli_error($conn));
            }
    // Verificar si la conexión fue exitosa
    if (!$conn) {
        die("Error en la conexión: " . mysqli_connect_error());
            }
        

        }// Cerrar la conexión a la base de datos
    
    mysqli_close($conn);

    return $resultado;




}


















?>