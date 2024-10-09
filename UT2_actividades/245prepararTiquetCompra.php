<?php
 declare(strict_types=1);
 include_once("244euros.php");


    $num = 3;//$_GET["num"];

    for($i=0;$i<$num;$i++){
        echo "<select>";
        echo "<option value=leche>leche</option>";
        echo "<input type=numer name=num1>";
        echo "<br>";
        echo "</select>";
    }
    


   

    

    echo peseta2euros(34500) . "<br>";
    echo euros2peseta(150,180.65) . "<br>";
 
?>