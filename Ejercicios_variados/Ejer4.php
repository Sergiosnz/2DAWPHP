<?php
    $doseuros=2;
    $uneuro=2;
    $cincuentacnets=1;
    $veintecents=2;
    $diezcents=4;
    $sumacents=($doseuros*200)+($uneuro*100)+($cincuentacnets*50)+($veintecents*20)+($diezcents*10);
    $eurosfinal=intdiv($sumacents,100);
    $centsfinal=$sumacents%100;
    echo $eurosfinal . ' Euros con ' . $centsfinal . 'centimos';
?>