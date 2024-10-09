<html>
    <head></head>
    <body>
        
<?php

    $num=$_GET["num"];
    echo"<table>";

    for($i=0;$i<=10;$i++){
        echo "<tr>";
        echo"<td>{$num} x {$i} = </td>";
        
        echo"<td>" . ($num*$i) . "</td>";
        echo"</tr>";
}

    echo"</table>";
?>

</body>
</html>