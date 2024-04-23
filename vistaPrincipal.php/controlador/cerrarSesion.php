<?php   
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../../initSesion.php');
    exit;
    
?>