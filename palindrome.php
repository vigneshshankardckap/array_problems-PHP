<?php


function palindrome($str){
    // this is store the given value using reverse loop ; 
    $rev_str="";

    for($i=strlen($str)-1;$i>=0;$i--){

        $rev_str.=$str[$i];     
    }
    // this condtion check the palindrome or not  
    if($rev_str===$str){
        echo "$str is palindrome"."\n";

    }
    else{
        echo  "$str is not palindrome";
    }
}
palindrome("level");