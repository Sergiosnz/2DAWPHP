<?php

    $respuestas=["Si","No","Quizas","Puede ser","Claro que si",
    "Claro que no","No lo tengo claro","Claramente si",
    "Seguro que si","Por supuesto que no","Por supuesto que si",
    "Ni de coña","En tus sueños","Lo dudas?"];
    $pregunta=$_GET["frase"];


    
    $num = rand(0,14);
    
    echo "$pregunta => $respuestas[$num];";
    


    

?>