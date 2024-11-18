<?php

$cookieName = "contadorVisitas";
$cookieDuration = 365 * 24 * 60 * 60;


if (isset($_GET['reset'])) {
    setcookie($cookieName, 0, time() + $cookieDuration);
    echo "El contador de visitas ha sido reiniciado.";
    header("Location: 406contadorVisitas.php");
    exit();

} else {
    if (isset($_COOKIE[$cookieName])) {
        $contador = $_COOKIE[$cookieName] + 1;
        setcookie($cookieName, $contador, time() + $cookieDuration);
        echo "Esta es tu visita número: " . $contador;
    } else {
        $contador = 1;
        setcookie($cookieName, $contador, time() + $cookieDuration);
        echo "Bienvenido! Esta es tu primera visita.";
    }
}
echo "<br><a href='406contadorVisitas.php?reset=true'>Reiniciar contador de visitas</a>";
?>
