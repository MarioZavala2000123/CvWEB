<?php
//require_once "configs.php";
//FUNCION PARA DATOS PERSONALES
function datosPersonales($nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo){
    $link = mysqli_connect("localhost", "root", "", "prueba");

    if(!mysqli_connect_errno()){
       // $idUsuario=$_SESSION("idUsuario"); son corchetes 

            $insertar = "INSERT INTO datosPersonales(idUsuario,nombre,apellido,fecha_nacimiento,dpi,estadoCivil,presentacion,telefono,correo) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "isssissis",$nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo);
                
                
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



function datosLaborales($nombreEmpresa,$tiempoLaboral,$areaLaboral,$descripcionLaboral,$puestoLaboral,$referenociaLaboral){
    $link = mysqli_connect("localhost", "root", "", "prueba");

    if(!mysqli_connect_errno()){
   
            $insertar = "INSERT INTO datosLaborales(nombreEmpresa,tiempoLaboral,areaLaboral,descripcionLaboral,puestoLaboral,referenciaLaboral) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "ssssss",$nombreEmpresa,$tiempoLaboral,$areaLaboral,$descripcionLaboral,$puestoLaboral,$referenciaLaboral);
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: datosPersonales.html"); 
                }else{
                    echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                }
            //CERRAR SENTENCIA
           mysqli_stmt_close($stmt);
    }
    else{
        // Si mysqli_prepare() devuelve false, se ha producido un error
    echo "Error al preparar la consulta: " . mysqli_error($link);
    die();
    }
    mysqli_close($link);
}

?>