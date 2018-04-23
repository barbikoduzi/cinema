<?php
    session_start();
    if (isset($_POST['logout'])) 
    {
        $_SESSION[]=Array();
        session_destroy();
        header("location: index.php");
    }
?>