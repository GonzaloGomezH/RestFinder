<?php
$host = "localhost"; // ejemplo: localhost
$user = "root"; // el nombre de usuario para conectarse a la base de datos
$password = ""; // la contraseña del usuario
$dbname = "restfinder"; // el nombre de la base de datos

// Crear conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>