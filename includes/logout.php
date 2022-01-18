<?php
 session_start();

 if(isset($_SESSION['user_name']))
 {
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    unset($_SESSION['pic']);
    unset($_SESSION['pwd']);
    unset($_SESSION['email']);
    unset($_SESSION['bio']);
    unset($_SESSION['role']);
 
 }
 
 echo '<script>window.location.href = ".././index.php";</script>';
 die;
?>