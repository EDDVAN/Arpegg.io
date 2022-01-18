<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    if (!isset ($_GET['id']) ) {  
        echo '<script>
            window.location.href = "Dashboard.php";
            </script>';
    }
    $id = $_GET["id"];
    $role = $_GET["role"];
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'UPDATE users SET role="'.$role.'"  where idUser='.$id.' ';  
    mysqli_query($conn, $query1); 

    $conn->close();
    echo '<script>
            window.location.href = "../Dashboard.php?Action=ManageUsers";
            </script>';
?>