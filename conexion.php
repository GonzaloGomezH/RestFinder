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

// Obtener los valores de los campos del formulario
$nombre_completo = $_POST['nombre_completo'];
$nombre_usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

// Crear la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO sesion (NOMBRE, USUARIO, CONTRASENA) VALUES ('$nombre_completo', '$nombre_usuario', '$password')";

// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>