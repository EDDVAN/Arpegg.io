<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    $id = $_SESSION["user_id"];
    $file;
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    
    $query1 = 'UPDATE simples Set `Deleted`=1 , `Visible`=0 where iduser='.$id.' ';  
    mysqli_query($conn, $query1);
    //unlink('../'.$file.'');  


?>