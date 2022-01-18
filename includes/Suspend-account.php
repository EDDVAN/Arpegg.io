<?php
    session_start();
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    $id = $_SESSION['user_id'];
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'UPDATE `users` SET `Active`=0  where idUser='.$id.' ';  
    mysqli_query($conn, $query1); 
    
    include 'hide-simples.php';
    $conn->close();
    
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