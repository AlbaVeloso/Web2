<?php
$servidor = "localhost";  // El servidor donde está la base de datos
$usuario = "root";        // El usuario de la base de datos
$clave = "";              // La contraseña (si no tienes, déjalo vacío)
$basededatos = "web2";  // El nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servidor, $usuario, $clave, $basededatos);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa";

$sql="INSERT INTO usuarios (nombre, apellidos, email, fecha, password) VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[email]', '$_POST[fecha]', '$_POST[password]')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>