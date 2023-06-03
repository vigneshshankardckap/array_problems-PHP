<?php

function swaptwonumber($n1,$n2){

    if(is_numeric($n1)&& is_numeric($n2)){

        $n1=$n1+$n2;

        $n2=$n1-$n2;

        $n1=$n1-$n2;
    }
    else{
        echo "please enter the number only ";
    }
    echo $n1 ."\n";
    echo $n2 ."\n";
    
}
swaptwonumber(3,5,);
