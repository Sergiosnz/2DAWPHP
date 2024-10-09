<?php
    declare(strict_types=1);
    include_once("243biblioteca.php");

    $arrfunciones = ["sumar", "restar", "multiplicar", "dividir"];

    //echo sumar(4,5);
    if(isset($_GET["operacion"]) && isset($_GET["num1"]) && isset($_GET["num2"])){
        $operacion= $_GET["operacion"];
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        
            echo $operacion($num1,$num2)."<br>";
        
    }

?>