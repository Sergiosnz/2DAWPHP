<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $altura=$_POST["altura"];
        $anchura=$_POST["anchura"];
        

        if(is_uploaded_file($_FILES["archivo"]["tmp_name"])){
            $nombre = microtime(). $_FILES["archivo"]["name"];
            move_uploaded_file($_FILES["archivo"]["tmp_name"],"./descargas/{$nombre}");
        }
        echo "<p>Archivo subido con exito</p>";
        echo "<p>Altura: ". $altura;
        echo "<p>Anchura: ". $anchura;
    } else {
        echo "<p>Acceso Denegado, Manda un Archivo</p>";
    }
?>
