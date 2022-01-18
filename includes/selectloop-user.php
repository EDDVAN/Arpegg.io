<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    if (!isset ($_GET['Spage']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['Spage'];  
    }

    $results_per_page = 10  ;  
    $page_first_result = ($page-1) * $results_per_page;  

    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'SELECT * FROM simples where Visible=1 AND iduser='.$_SESSION["user_id"].'';
    $result1 = mysqli_query($conn, $query1);  
    $number_of_result = mysqli_num_rows($result1);


    #determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    $query='SELECT * FROM simples s JOIN users u ON s.iduser=u.idUser Where Visible=1 AND s.iduser='.$_SESSION["user_id"].' LIMIT ' . $page_first_result . ',' . $results_per_page; 
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;
    
    if ($rowcount > 0) {
        while($row = mysqli_fetch_array($result)) {
            $name_trimmed=str_replace("Loops/".$row['username']."/uploaded/","",$row['file']);
        echo '<div class="audio-wrap '.$row['title'].' '.$row['tempo'].'">
            <div>
                <div>
                    <div class="user-info-loop">
                        <div class="profile-pic" style="background-image: url('.$row['profilepic'].');"></div>
                    </div>
                    <h2>'.$row['title'].'</h2><span>'.$row['tempo'].' BPM</span><span>Key: '.$row['MK'].'</span>
                </div>
                <div class="audio-c">
                    <div>
                        <audio controls controlsList="nodownload" class="audio-player" >
                        <source src="'.$row['file'].'" type="audio/mpeg">
                            Your browser does not support the audio element.s
                        </audio>
                    </div>
                    <div class="l-midi-c">
                        <p>
                            Genre:<span> '.$row["genre"].' </span>
                        </p>
                        
                        <a href="'.$row['file'].'" download="'.$name_trimmed.'" class="d-btn download">Download</a>
                        <a href="includes\delete-simple-user.php?id='.$row["idsimple"].'" class="d-btn" id="midi-btn-delete">Delete</a>
                    </div>                            
                </div>
            </div>
        </div>';
        }
        echo '<div class="audio-wrap pagelinkwrap">';
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a class="Page-links" href = "Profile.php?Spage=' . $page . '">' . $page . ' </a>';
        } 
        echo '</div>';
    } else {
        if($page>1){
            echo '<script>
            window.location.href = "Profile.php?Spage=1";
            </script>';
        }else{
            echo "<h1>No Midis were found </h1>";
        }
    }
    $conn->close();
?>