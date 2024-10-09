<?php
    echo "<ul>";
    $inicio = $_GET["inicio"];
    $fin = $_GET["fin"]; 

    for ($i=$inicio; $i<$fin;$i++){
        if($i%2==0){
            echo "<li>$i</li>";}
    }

    echo "</ul>";
?>