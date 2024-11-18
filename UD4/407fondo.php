<?php
$cookieName = "colorFondo";
$cookieDuration = 24 * 60 * 60;

if (isset($_POST['color'])) {
    $colorSeleccionado = $_POST['color'];
    setcookie($cookieName, $colorSeleccionado, time() + $cookieDuration);
    header("Location: 407fondo.php");
    exit();
} else {
    $colorSeleccionado = isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : "#ffffff";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona el color de fondo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($colorSeleccionado); ?>;">

    <h1>Selecciona el color de fondo de la página</h1>
    
    <form method="post" action="407fondo.php">
        <label for="color">Elige un color:</label>
        <select name="color" id="color">
            <option value="#fff700" <?php if($colorSeleccionado == "fff700") echo 'selected'; ?>>Amarillo</option>
            <option value="#ff0000" <?php if($colorSeleccionado == "#ff0000") echo 'selected'; ?>>Rojo</option>
            <option value="#0043ff" <?php if($colorSeleccionado == "#0043ff") echo 'selected'; ?>>Azul</option>
            <option value="#ff00f2" <?php if($colorSeleccionado == "#ff00f2") echo 'selected'; ?>>Rosa</option>
            <option value="#ff9500" <?php if($colorSeleccionado == "#ff9500") echo 'selected'; ?>>Naranja</option>
            <option value="#00ffd8" <?php if($colorSeleccionado == "#00ffd8") echo 'selected'; ?>>Azul Claro</option>
            <option value="#2a9d8f" <?php if($colorSeleccionado == "#2a9d8f") echo 'selected'; ?>>Verde</option>
        </select>
        <button type="submit">Guardar color</button>
    </form>

</body>
</html>
