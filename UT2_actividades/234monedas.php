<?php
    
    echo "<html>";
    echo "<body>";
    echo "<ul>";
    if(isset($_GET["dinero"]) &&!empty($_GET["dinero"])){
    
    $cantidad= 1500;
    $dinero = [ 500=>0,
                200=>0,
                100=>0,
                50=>0,
                20=>0,
                10=>0,
                5=>0,
                2=>0,
                1=>0,];
            foreach($dinero as $key => $value){
                while($dinero>=$key){
                    $dinero[$value]++;
                    $dinero-=$key;
                }
                foreach($dinero as $key => $value){
                    if($value != 0){
                    echo $key . ":" . $value . "<br>";}
                }
            }
        }
          echo "</ul>";
        echo "</body>";
        echo"</html>";
?>