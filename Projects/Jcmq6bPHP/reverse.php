<?php   
    $string = $_GET['string'];
    //echo "String retrieved: $string";
    if($string!=null && $string!="" && !is_numeric($string)){
        print "$string is: " .strrev($string);
    }else print"String cannot be empty!";
       
?>