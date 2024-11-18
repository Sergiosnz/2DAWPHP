<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $altura=$_POST["altura"];
        $anchura=$_POST["anchura"];
        

        if(is_uploaded_file($_FILES["imagen"]["tmp_name"])){
            $nombre = microtime(). $_FILES["imagen"]["name"];
            $tamaño = $altura+$anchura. $_FILES["imagen"]["size"];
            move_uploaded_file($_FILES["imagen"]["tmp_name"],"./descargas/{$nombre}");
        }
        echo "<p>Imagen subida con exito</p>";
        echo "<p>Altura: ". $altura;
        echo "<p>Anchura: ". $anchura;
        echo "<p><img src='./descargas/{$nombre}' height='$altura' width='$anchura'>";
    } else {
        echo "<p>Acceso Denegado, Manda una Imagen</p>";
    }
?>
