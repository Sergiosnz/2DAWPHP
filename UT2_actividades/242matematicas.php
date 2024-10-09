<?php
echo "Primer ejercicio: ";
function digitos(int $num): int {
    $num = abs($num); 
    $contador = 0;
    
    do {
        $contador++;
        $num = intdiv($num, 10); 
    } while ($num > 0);
    
    return $contador;
}


echo digitos(12345);

echo"<br><br><br><br>";
echo "Segundo ejercicio: ";
function digitoN(int $num, int $pos): int{
    $digitoPos="no existe la posicion";
        for($i=digitos($num);$i>=$pos;$i--){
        $digitoPos=$num%10;
        $num = intdiv($num,10);
}
return $digitoPos;
}
echo digitoN(12345,3);


echo "<br><br><br><br>";
echo "Tercer ejercicio: ";
function quitaPorDetras(int $num,int $cant): int{
    for($i=$cant;$i>0;$i--){
        $num = intdiv($num,10);
    }
    return $num;
}
echo quitaPorDetras(1234,2);


echo "<br><br><br><br>";
echo "Cuarto intento: ";
function quitaPorDelante(int $num, int $cant): int{
    if(digitos($num)<$cant){
        $num="Cantidad superior";
    }elseif(digitos($num)==$cant){
        $num="";
        for($i=0;$i<$cant;$i++){
            $numResta = digitoN($num,1)*pow(10,digitos($num))
        }
    }
}
?>