<?php
    session_start();
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    else{
        $id = $_SESSION['user_id'];   
    }

    $query1 = 'UPDATE `users` SET `Active`=0,`Deleted`=1  where idUser='.$id.' ';  
    mysqli_query($conn, $query1); 
    if(isset($_GET["id"])){
        include 'hide-simples-admin.php';
        $conn->close();
        echo '<script>
            window.location.href = "../Dashboard.php?Action=ManageUsers";
            </script>';
    }
    else{
        include 'delete-all-simples.php';
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
    }
    
   
    die;
?>