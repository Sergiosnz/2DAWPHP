<?php

    $arrusuarios = ["Peppa"=>"1234","George"=>"4567"];
    if(isset($_GET["usuario"])&& !empty($_GET["usuario"])&&isset($_GET["password"])&& !empty($_GET["password"])){
        $usuario =  $_GET["usuario"];
        $password = $_GET["password"];

        if(array_key_exists($usuario,$arrusuarios))
            if($arrusuarios[$usuario] == $password){
                header("Location: 247ok.php?usuario=$usuario&mensaje='Estas conectado'");
            }else{
                header("Location: 247ko.php?mensaje='El password es incorrecto'");
            }else{
                header("Location: 247ko.php?mensaje='El usuario es incorrecto'");
            }




    }else{
        echo "Debes introducir los datos";
    }
?>