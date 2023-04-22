<?php

/* SELECT idUsuario 
from Usuario
Where correo=$pCorreo
and contraseña=$pClave

*/
echo "ingreso los datos del registro";
function Usuario($Correo,$Contraseña){
    $link = mysqli_connect("localhost", "root", "", "prueba");
       
    if(!mysqli_connect_errno()){
        $insert = "INSERT INTO usuario(Correo,Contraseña) VALUES (?,?)";

        $stmt = mysqli_prepare($link, $insert);

        mysqli_stmt_bind_param( $stmt, "ss", $Correo,$Contraseña);

        if(mysqli_stmt_execute($stmt)){
            echo "prueba";
            //header("location: Register.html");
            $return = TRUE;
            
        }else{
            //echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
            $return = false;
        }
mysqli_stmt_close($stmt);        
        
    }  else{
        // Si mysqli_prepare() devuelve false, se ha producido un error
    echo "Error al preparar la consulta: " . mysqli_error($link);

    die(); }
    mysqli_close($link);
    return $return;
    }

    echo "no llega a buscar el id";
    function consultaUsuario($Correo, $Contraseña){
        $link = mysqli_connect("localhost", "root", "", "prueba");
        
        $llamado = "SELECT IdUsuario from Usuario where Correo=? and Contraseña=?";
    
        echo "------entrara a la funcion--------";
        if ($sentencia = mysqli_prepare($link, $llamado)) {
            echo "entro a sesion";
            mysqli_stmt_bind_param( $sentencia, "ss", $Correo,$Contraseña);

            /* ejecutar la sentencia */
            mysqli_stmt_execute($sentencia);
            
            /* vincular las variables de resultados */
            mysqli_stmt_bind_result($sentencia, $idUsuario);
        
            /* obtener los valores */
            while (mysqli_stmt_fetch($sentencia)) {
                printf ("s", $idUsuario);
            }
        
            /* cerrar la sentencia */
            mysqli_stmt_close($sentencia);
        }

        return $idUsuario;
    }
 //$stmt = mysqli_prepare($link, $llamado);

//mysqli_stmt_bind_param( $stmt, "ss", $Correo,$Contraseña);

//$result = mysqli_stmt_get_result($stmt);

//$result = mysqli_stmt_fetch($stmt);
?>

