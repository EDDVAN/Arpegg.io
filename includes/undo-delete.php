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
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'UPDATE users SET Deleted=0 , Active=1  where idUser='.$id.' ';  
    mysqli_query($conn, $query1);
    $query2 = 'UPDATE simples Set `Deleted`=0 , `Visible`=1 where iduser='.$id.' ';    
    mysqli_query($conn, $query2);
    $conn->close();
    echo '<script>
            window.location.href = "../Dashboard.php?Action=ManageUsers";
            </script>';
?>