<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    $id = $_GET["id"];
    $file;
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query='SELECT * FROM simples s JOIN users u ON s.iduser=u.idUser where idsimple='.$id.' ';
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;

    while($row = mysqli_fetch_array($result)) {
       $file=$row["file"];
    }
    $query1 = 'UPDATE simples Set `Visible`=0 , `Deleted`=1 where iduser='.$id.' ';  
    mysqli_query($conn, $query1);
    //unlink('../'.$file.'');  


?>