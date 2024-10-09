<?php
    if(isset($_GET['base'])&&isset($_GET['exp'])&& !empty($_GET['base'])&&!empty($_GET['exp'])){
    $base = $_GET['base'];
    $exp = $_GET['exp'];

    if($exp>0 || $exp<0){
        echo $base**$exp;
    }else{
        echo 1;
    }}else{
        echo "No existe la llamada";
    }
?>