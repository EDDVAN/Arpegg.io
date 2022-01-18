<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arp-database";  #database name

    if (!isset ($_GET['id']) ) {  
        echo '<script>
            window.location.href = "../Dashboard.php";
            </script>';
    }
    $id = $_GET["id"];
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'UPDATE `users` SET `Active`=0,`Deleted`=1  where idUser='.$id.' ';  
    mysqli_query($conn, $query1); 

    include 'hide-simples-admin.php';
    $conn->close();
    echo '<script>
            window.location.href = "../Dashboard.php?Action=ManageMidi";
            </script>';
?>