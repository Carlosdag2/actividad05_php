<?php
session_start();

if (!isset($_SESSION['correo'])) {
    // Redirecciona al formulario de login si no hay sesión activa
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido Privado</title>

    <!-- Agregar las referencias a los archivos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="display-4">Bienvenido al contenido privado</h1>
    <p class="lead">Email: <?php echo $_SESSION['correo']; ?></p>
    <p class="mt-3"><a href="inicioSesion.html" class="btn btn-danger">Cerrar sesión</a></p>
</div>

</body>
</html>

