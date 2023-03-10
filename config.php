<?php
/* Credenciales de la base de datos. Las constantes están definidas con
los valores por defecto de MySQL (usuario 'root' sin contraseña) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'proyectocv');
 
/* Intento de conexión a la base de datos MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Verificar la conexión
if($link === false){
    die("ERROR: No se puede conectar a la base de datos. " . mysqli_connect_error());
} else 
    echo "ENTRE"
?>