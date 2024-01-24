<?php
session_start();

$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']);

$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['correo'] = $correo;
    echo 'Credenciales validas';
    header('Location: private_content.php');
} else {
    echo "Correo o contraseña incorrectos";
}

$conn->close();
?>
