<?php


$startDate=(string)readline("startDate(yyy-mm-dd)");
$endDate=(string)readline("endDate(yyy-mm-dd)");

dayscount($startDate,$endDate);

function dayscount($startDate,$endDate){

    $calculate=strtotime($endDate) - strtotime($startDate);

    $days=$calculate/(1440*60);

    echo $days." days "."\n";
};