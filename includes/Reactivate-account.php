<?php
    session_start();
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    
    $id = $_SESSION['user_id'];
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'UPDATE `users` SET `Active`=1  where idUser='.$id.' ';  
    mysqli_query($conn, $query1); 

    include 'unhide-simples.php';

    $conn->close();

    echo '<script>window.location.href = ".././index.php";</script>';
   
    die;
?>