<?php

function findLeapYear($year){

    if($year %400 == 0)
    {
        echo "$year is a leapYear"."\n";
    }
    else if($year %100 ==0 )
    {
        echo "$year is a leapYear"."\n";
    }
    else if($year % 4 ==0 )
    {
        echo "$year is a leapYear"."\n";
    
    }
    else{
        echo "$year is a not leapYear"."\n";
    }
    }
    findLeapYear(1900);
