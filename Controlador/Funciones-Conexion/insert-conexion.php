<?php

//require_once "configs.php";
//FUNCION PARA DATOS PERSONALES
function datosPersonales($nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo){
    $link = mysqli_connect("localhost", "root", "", "prueba");

    if(isset($_SESSION['idUsuario'])){
    if(!mysqli_connect_errno()){

        $idUsuario=$_SESSION['idUsuario']; //son corchetes 

            $insertar = "INSERT INTO datosPersonales(idUsuario,nombre,apellido,fecha_Nacimiento,dpi,estadoCivil,presentacion,telefono,correo) VALUES (?,?,?,?,?,?,?,?,?)";
            
            session_start();
            $_SESSION['idUsuario'] = $insertar;
            

            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "isssissis",$idUsuario,$nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$presentacion,$telefono,$correo);
                    
                    
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
    return $return;}
    else{
         echo "debe estar la variable definida";
    }

}

function datosLaborales($estado,$nombreEmpresa,$area,$puesto,$tiempoInicial,$tiempoFinal,$resumen,$referencia){
    $links = mysqli_connect("localhost", "root", "", "prueba");

    if(!mysqli_connect_errno()){
       // $idUsuario=$_SESSION("idUsuario"); //son corchetes 

            $inserta = "INSERT INTO datosPersonales(estado,nombreEmpresa,area,puesto,tiempoInicial,tiempoFinal,resumen,referencia) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($links, $inserta);   
            
                mysqli_stmt_bind_param($stmt, "ssssssss",$estado,$nombreEmpresa,$area,$puesto,$tiempoInicial,$tiempoFinal,$resumen,$referencia);
                    
                    
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