<?php
$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']); // Encriptar la contraseña con MD5
$archivo = $_FILES['archivo']['name'];

// Aquí debes validar el archivo y moverlo a la ubicación deseada

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (correo, contrasena, archivo) VALUES ('$correo', '$contrasena', '$archivo')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado con éxito";
    header('Location: inicioSesion.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

