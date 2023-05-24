<?php

// this method is used to enter values from terminal 

$num=(int)readline("please enter the number");


function reverse($num){
   $rev=0;

   while($num>1){

    $rev=$rev*10+$num%10;

    $num=$num/10;
   }

   echo "reverse number is:",$rev."\n";
}
echo "your input number is:",$num."\n";


reverse($num);
