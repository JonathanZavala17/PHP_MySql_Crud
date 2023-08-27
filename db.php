<?php

//iniciar la sesion
session_start();

//Variables de conexion a la base de datos
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud'
);

//Para verificar la conexion a la base de datos
/*
if (isset($conn)) {
    echo 'DB conectada';
}
*/

?>