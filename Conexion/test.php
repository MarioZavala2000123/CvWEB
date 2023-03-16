<?php 
test("Mario");
function test($val1) { /* Preparar una sentencia INSERT por medio de una funcion*/


$conn = mysqli_connect("localhost", "root", "", "proyectocv");
   
   if(!mysqli_connect_errno())
   {
      $sql = "INSERT INTO Prueba (Nombre) VALUES (?)";
   
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "s", $val1);
   
    
     if (mysqli_stmt_execute($stmt))
        return TRUE;
        else 
            return FALSE  ;
        /*comentario extra*/
    } 
   mysqli_close($conn);

}




?>