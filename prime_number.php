<?php

function primeNumber($input){
     $primevalidate=0;
    if($input ===1){
       echo  "$input is a neither prime number nor composite number";
    }
    if($input >1){
        for($i=2;$i<$input;$i++){
           if($input % $i ==0 ){
               $primevalidate ++;
           }
        }
        if($primevalidate >0){
            echo "$input is a not prime number ";
        }
        else{
           echo  "$input is prime number ";
        }

    }
    else{
        echo "$input is equal or less than zero ";
    }
}
primeNumber(9);

