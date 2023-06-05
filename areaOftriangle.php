<?php

$height =(int)readline("enter the height :");

$base =(int)readline("enter the base :");

function findAreaOfTriangle ($height,$base){

    $Area=($height*$base)/2;

    echo "AreaOfTriangle is :$Area"."\n";

}
findAreaOfTriangle($height,$base);
