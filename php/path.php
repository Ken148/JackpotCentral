<?php
    include_once 'seja.php';
    require_once 'database.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php"); 
        exit();
    }
    
    $user_id = $_SESSION['user_id']; 
    
    if ($user_id == 1) {
        $_SESSION['Admin'] = true;
        header("Location: index3.php");
        exit();
    } elseif ($user_id == 2) {
        $_SESSION['User'] = true;
        header("Location: index2.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
?>