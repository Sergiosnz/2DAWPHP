<?php
    function mayor():int{
        $mayor=0;
        if(count(func_get_args())==0){
            return false;
        }else{
            $mayor=func_get_arg(0);
            foreach(func_get_arg()as $arg){
                if($mayor<$arg)
                $mayor=$arg;
            }
            return $mayor;
        }
        
    }
    echo "El mayor es  ". mayor(34,53,53,42,3,33,64);



    

?>