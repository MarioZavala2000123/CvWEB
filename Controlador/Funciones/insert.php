<?php
//require_once "configs.php";
//FUNCION PARA DATOS PERSONALES
function datosPersonales($nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$telefono,$correo){
  // require_once "configs.php";
    if(!mysqli_connect_errno()){
            $insertar = "INSERT INTO datosPersonales(nombre,apellido,fecha_nacimiento,dpi,estadoCivil,telefono,correo) VALUES (?,?,?,?,?,?,?)";
            if($stmt=mysqli_prepare($link, $insertar)){
                mysqli_stmt_bind_param($stmt, "s,s,s,i,i,i,s",$nombre,$apellido,$fecha_Nacimiento,$dpi,$estadoCivil,$telefono,$correo);

                if(mysqli_stmt_execute($stmt)){
                    header("location: datosPersonales.html");
                }else{
                    echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                }
            }
            //CERRAR SENTENCIA
            mysqli_stmt_close($stmt);
    }

}
//FUNCION PARA DATOS LABORALES
function datosLaborales($idLaboral,$nombreEmpresa,$tiempoLaboral,$areaLaboral,$descripcionLaboral,$puestoLaboral,$referenciaLaboral){
    require_once "configs.php";
    if(!mysqli_connect_errno()){
            $insertar = "INSERT INTO datosPersonales(idLaboral,nombreEmpresa,tiempoLaboral,areaLaboral,descripcionLaboral,puestoLaboral,referenciaLaboral) VALUES (?,?,?,?,?,?,?)";
            if($stmt=mysqli_prepare($link, $insertar)){
                mysqli_stmt_bind_param($stmt, "i,s,s,s,s,s,s",$idLaboral,$nombreEmpresa,$tiempoLaboral,$areaLaboral,$descripcionLaboral,$puestoLaboral,$referenciaLaboral);
                if(mysqli_stmt_execute($stmt)){
                    header("location: datosPersonales.html");
                }else{
                    echo "ALGO SALIO MAL, NO SE PUDO INGRESAR LOS DATOS";
                }
            }
            //CERRAR SENTENCIA
            mysqli_stmt_close($stmt);
    }

}
?>