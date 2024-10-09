<?php
    declare(strict_types=1);

    function esPar(int $num): bool {
        return $num%2==0;
    }
    echo esPar(num:22)?"Es par":"Es impar";

    function arrayAleatorio(int $tam, int $min, int $max):array{
        $arrNumAle = array();
        for($i=0;$i<$tam;$i++){
            $arrNumAle[$i]=rand(min: $min,max: $max);
        }
        return $arrNumAle;
    }

    function mostartArray(array $arr){
        foreach($arr as $value)
        echo $value." ";
    }
    mostartArray(arr: arrayAleatorio(tam: 7,min: 10, max: 100));


    function arrayPares(array &$array): int{
        int $contPares=0;
        foreach($array as $value)
        if(esPar($value))
        $contPares++;
    
        return $contPares;
    }
    $arrResultado = arrayAleatorio(tam: 15, min: 10,max: 100);
    mostartArray($arrResultado);
    echo "<br>";
    echo arrayPares($arrResultado);

?>