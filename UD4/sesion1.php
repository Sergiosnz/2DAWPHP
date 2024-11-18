<?php

    session_start();
    echo session_id();

    $_SESSION["nombre"]="Sergio";
    $_SESSION["edad"]=19;
    $_SESSION["email"]="ssanzpuebla@educa.madrid.org";

    $nombre=$_SESSION["nombre"];
    echo "Mi nombre es: $nombre";

?>
<br>
<a href="sesion2.php">Y luego</a>