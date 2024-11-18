<?php
session_start();
$nombre= $_SESSION["nombre"];
echo "Otra vez, mi nombre es $nombre";
?>