<?php
if(isset($_GET['nombre']) & isset($_GET['estatura']) & !empty($_GET['nombre']) & !empty($_GET['estatura']) ){
    $nombre=$_GET["nombre"];
    $estatura=$_GET["estatura"];
    $personas=[$nombre => $estatura];

    
    echo "<table>";
    for($i=0;$i>$personas.count;$i++){
        echo "<tr>";
        echo "<td>";
        echo $personas[$i];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo ;

}

?>
