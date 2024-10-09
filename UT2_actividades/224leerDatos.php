<html>
    <head></head>

    <body>
        <form action="">
<?php
    
    $cantidad = $_GET['cantidad'];
   
    for($i=0;$i<$cantidad;$i++){
        printf("<p><input type=number id=filas nombre=filas>");
    }
    
    
?>
</form>
</body>
</html>