<?php


$series=(int)readline("please enter the who much you want series:"." ");

function fibonacci ($series){

    $intial=0;

    $n1=0;

    $n2=1;

    echo $n1." ".$n2." ";

    while($intial<=$series){

        $n3=$n1+$n2;

        $n1=$n2;

        $n2=$n3;

        echo $n3." ";
        $intial+=1;

    }
}

fibonacci($series);


    
    

