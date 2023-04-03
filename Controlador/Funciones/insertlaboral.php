<?php
//require_once "configs.php";
//FUNCION PARA DATOS Laborales
function datosLaborales($Nombre, $Tiempo, $Resumen, $referencias, $Area, $Puesto, $Estado){
    $link = mysqli_connect("localhost", "root", "", "proyectocv");

    if(!mysqli_connect_errno()){
            $insertar = "INSERT INTO datosLaborales(Nombre,Tiempo,Resumen,Area, Puesto, Estado) VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_prepare($link, $insertar);   
            
                mysqli_stmt_bind_param($stmt, "sssissis",$Nombre, $Tiempo, $Resumen, $referencias, $Area, $Puesto, $Estado);
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: Datoslaborales.html");
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