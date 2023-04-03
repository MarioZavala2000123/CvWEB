<?php
//require_once "configs.php";
//FUNCION PARA DATOS PERSONALES
function datosPersonales($nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo){
    $link = mysqli_connect("localhost", "root", "", "proyectocv");

    if(!mysqli_connect_errno()){
            $insertar = "INSERT INTO datosPersonales(nombre,apellido,fecha_nacimiento,dpi,estadoCivil,presentacion,telefono,correo) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "sssissis",$nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo);
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: datosPersonales.html");
                }else{
                    echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                }
            
            //CERRAR SENTENCIA
        mysqli_stmt_close($stmt);
            //var_dump($stmt);    
    }
    else{
        // Si mysqli_prepare() devuelve false, se ha producido un error
    echo "Error al preparar la consulta: " . mysqli_error($link);
    die();
    }
    mysqli_close($link);

}

?>