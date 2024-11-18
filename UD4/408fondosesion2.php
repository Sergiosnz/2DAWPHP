<?php
session_start();

$colorSeleccionado = isset($_SESSION["color"]) ? $_SESSION["color"] : "#ffffff";

if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: 408fondosesion1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color seleccionado</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($colorSeleccionado); ?>;">

    <h1>El color de fondo actual es: <?php echo htmlspecialchars($colorSeleccionado); ?></h1>
    
    <p>
        <a href="408fondosesion1.php">Volver a la página anterior</a>
    </p>
    <p>
        <a href="408fondosesion2.php?reset=1">Vaciar sesión y volver a la página anterior</a>
    </p>

</body>
</html>
