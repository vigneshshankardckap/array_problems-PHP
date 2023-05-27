<?php


$num=(int)readline("please enter the  number :"." ");


function factorial($num){
    
    $factorial=1;

    for($i=1;$i<=$num;$i++){

        $factorial=$factorial*$i;
    }
    echo $factorial." is the factorial number "."\n";
}
factorial($num);

