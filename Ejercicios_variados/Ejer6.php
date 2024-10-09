<?php
    $nota=$_GET['nota'];
    $edad=$_GET['edad'];
    $sexo=$_GET['sexo'];
    if($nota>=5&&$edad>=18&&$sexo=='F'){
        echo 'ACEPTADA';
    }elseif($nota>=5&&$edad>=18&&$sexo=='M'){
        echo 'POSIBLE';
    }else{
        echo 'NO ACEPTADA';
    }

?>