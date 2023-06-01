<?php


function orderarray($arr){
    //this varible store the Ascending order
    $arrayAsc=[];
    //this varible store the descending  order
    $arrayDes=[];

  $count=count($arr);

    for($i=0;$i<$count;$i++){

        $arrayAsc[]=$arr[$i];

        $arrayDes[]=$arr[$i];
    }
// in this line ordering the asc
    rsort($arrayAsc);
    print_r( $arrayAsc);

// in this line ordering the des
    sort($arrayDes);
    print_r($arrayDes);

};

orderarray([-16,10,7,8]);