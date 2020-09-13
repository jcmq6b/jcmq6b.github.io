<?php
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    //echo "Numbers retrieved: n1: $n1,  n2:  $n2";
    if($n1!=null && $n2!=null && $n1<$n2 && is_numeric($n1) && is_numeric($n2)){
        $sum = 0;
        for($i=$n1; $i<=$n2; $i++){
            $sum = $sum + $i*$i;
        }
        print "$n1 and $n2 is: $sum";
        
    }else print "n1 must be smaller than n2, and both must be valid numbers!";
       
?>