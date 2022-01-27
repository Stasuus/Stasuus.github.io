<?php 

    session_start();
    if($_COOKIE['LastName'] == '')
        require_once 'templates/Authorization.php'; 
    else{
        print_r($_COOKIE['LastName']);  
    }
        

?>