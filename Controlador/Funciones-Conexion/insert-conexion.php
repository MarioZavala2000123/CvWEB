<?php
//require_once "configs.php";
//FUNCION PARA DATOS PERSONALES
function datosPersonales($nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo){
    $link = mysqli_connect("localhost", "root", "", "proyectocv");

    if(!mysqli_connect_errno()){
       // $idUsuario=$_SESSION("idUsuario"); //son corchetes 

            $insertar = "INSERT INTO datosPersonales(nombre,apellido,fecha_nacimiento,dpi,estadoCivil,presentacion,telefono,correo) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "sssissis",$nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo);
                    
                    
                if(mysqli_stmt_execute($stmt)){
                    //header("location: datosPersonales.html");
                    $return = TRUE;
                    
                }else{
                    //echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                    $return = false;
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
    return $return;

}

function datosLaborales($estado,$nombreEmpresa,$puesto,$area,$tiempoInicial,$tiempoFinal,$referencia,$resu){
    $links = mysqli_connect("localhost", "root", "", "prueba");

    if(!mysqli_connect_errno()){
       // $idUsuario=$_SESSION("idUsuario"); //son corchetes 

            $insertar = "INSERT INTO datosPersonales(estado,nombreEmpresa,puesto,area,tiempoInicial,tiempoFinal,referencia,resumen) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($links, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "ssssssss",$estado,$nombreEmpresa,$puesto,$area,$tiempoInicial,$tiempoFinal,$referencia,$resumen);
                    
                    
                if(mysqli_stmt_execute($stmt)){
                    //header("location: datosLaborales.html");
                    $return = TRUE;
                    
                }else{
                    //echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                    $return = false;
                }
              //CERRAR SENTENCIA
           mysqli_stmt_close($stmt);
           //var_dump($stmt);         
    }
    else{
        // Si mysqli_prepare() devuelve false, se ha producido un error
    echo "Error al preparar la consulta: " . mysqli_error($links);
    die();
    }
    mysqli_close($links);
    return $return;
}

?>