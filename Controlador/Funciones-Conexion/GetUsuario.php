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

    die();
    }
    mysqli_close($link);
    return $return;
    }


?>
