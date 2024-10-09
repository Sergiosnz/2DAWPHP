<?php
    $frase="Me llamo Sergio";
    $frase2="";
    for($i=0;$i<strlen($frase);$i++){
        if($i%2!=0){
        $frase2.=$frase[$i];}
    }
    echo $frase2;
?>