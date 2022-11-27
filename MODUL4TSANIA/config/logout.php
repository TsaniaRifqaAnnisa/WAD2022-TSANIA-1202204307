<?php
    session_start();

    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        unset($_SESSION[$key]);
    }

    session_destroy();

    if(isset($_COOKIE['email'])){
        setcookie('email', '', 0, '/');
    }
    
    header("location: ../index.php");