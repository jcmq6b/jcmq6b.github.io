<?php
    
    $number = $_GET['number'];
    //echo "Number retrieved: $number";
    if($number!=null && $number!="" && $number>=1 && is_numeric($number)){
        $factorial = 1;
        for($i=$number; $i>=1; $i--){
            $factorial = $factorial*$i;
        }
        print "The factorial of $number is $factorial";
    }else print "Must be a valid number!";
       
?>