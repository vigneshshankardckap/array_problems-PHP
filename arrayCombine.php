<?php



$keys = array(
    "field1"=>"vignesh",
    "field2"=>"kishore",
    "field3"=>"deepak"
);

$values = array(
    "field1value"=>"22",
    "field2value"=>"20",
    "field3value"=>"21"
);

//this function creates an array by using the elements from one "keys" array and one "values" array.

$keyValue=array_combine($keys,$values);

print_r($keyValue);

// ============another methhod using loop =============

$result=[];
$keyOne=array_keys($keys);
$keyTwo=array_keys($values);


for($i=0;$i<count($keyOne);$i++){

    $result[$keys[$keyOne[$i]]]=$values[$keyTwo[$i]];
}
print_r($result);

