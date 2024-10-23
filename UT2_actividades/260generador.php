<?php

function letraleatoria(): string{    
    return random_int(0,1)==0?chr(random_int(65,90)):chr(random_int(97,122));
    
}

echo letraleatoria();
?>