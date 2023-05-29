<?php

$num =(int)readline("please the tables number:"." ");

function tables($num){

    for($i=1;$i<=10;$i++){
        

           echo $num ."x".$i."=".$num * $i."\n";
           
    }
}

tables(5);
