<?php
echo $_SERVER["PHP_SELF"];

?>
<html>
<head></head>
<body>
    <form enctype="multipart/form-data" action="pruebasubir.php" method="post">
        <input name="archivoEnviado" type="file" />
        <br />
        <input type="submit" name="btnSubir" value="Subir" />
    </form>
</body>
</html> 