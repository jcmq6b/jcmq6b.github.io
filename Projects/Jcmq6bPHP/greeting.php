<?php

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    if((firstName!="" && firstname!= null) && (lastName!="" && lastName!= null) && !is_numeric($firstname) && !is_numeric($lastname)){
        print "Hello $firstName $lastName!";
    }else print"names cannot be blank and must be strings!";
       
?>