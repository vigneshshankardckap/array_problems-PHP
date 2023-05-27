<?php


$num=(int)readline("please enter the factorial number :"." ");


function factorial($num){
    
    $factorial=1;

    for($i=1;$i<=$num;$i++){

        $factorial=$factorial*$i;
    }
    echo $factorial ."\n";
}
factorial($num);

