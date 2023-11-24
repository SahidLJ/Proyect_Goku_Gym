<?php
$host = "localhost"; // Cambia esto al servidor de tu base de datos
$user = "root"; // Cambia esto a tu nombre de usuario de MySQL
$pass = ""; // Cambia esto a tu contraseña de MySQL
$bd_name= "gym_clients"; // Cambia esto al nombre de tu base de datos

// Conectarse a la base de datos
$conexion = mysqli_connect($host, $user, $pass, $bd_name);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
