<?php
if(isset($_POST["btnSubir"])&&$_POST["btnSubir"]=="Subir"){
    if(is_uploaded_file($_FILES["archivoEnviado"]["tmp_name"])){
        $nombre = microtime(). $_FILES["archivoEnviado"]["name"];
        move_uploaded_file($_FILES["archivoEnviado"]["tmp_name"],"./descargas/{$nombre}");

        echo "Archivo $nombre subido con exito";
    }
}

//microtime() hace que si se sube el mismo fichero no se reemplace uno por otro porque le asigna otro nombre

?>

