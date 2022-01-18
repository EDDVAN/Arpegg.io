<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arp-database";  #database name

    if (!isset ($_GET['id']) ) {  
        echo '<script>
            window.location.href = "Dashboard.php";
            </script>';
    }
    $id = $_GET["id"];
    $Midifile;
    $Audiofile;
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query='SELECT * FROM midi where idMidi='.$id.' ';  
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;

    while($row = mysqli_fetch_array($result)) {
        $Audiofile=$row["audio_file"];
        $Midifile=$row["Midi_file"];
    }

    $query1 = 'DELETE FROM midi where idMidi='.$id.' ';  
    mysqli_query($conn, $query1);  

    unlink('../'.$Midifile.''); 
    unlink('../'.$Audiofile.''); 

    $conn->close();
    echo '<script>
            window.location.href = "../Dashboard.php?Action=ManageMidi";
            </script>';
?>