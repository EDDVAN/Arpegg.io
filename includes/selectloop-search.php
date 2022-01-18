<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    if (!isset ($_GET['Lpage']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['Lpage'];  
    }

    if(!isset($_GET["search-bar"])){
        $search_title="";
    }
    else{

        $search_title=$_GET["search-bar"];
    }
    $results_per_page = 3  ;  
    $page_first_result = ($page-1) * $results_per_page;  

    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'SELECT * FROM simples where Visible=1 AND (title LIKE "'.$search_title.'%")';
    $result1 = mysqli_query($conn, $query1);  
    $number_of_result = mysqli_num_rows($result1);


    #determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    $query='SELECT * FROM simples s JOIN users u ON s.iduser=u.idUser where Visible=1 AND (title LIKE "'.$search_title.'%") LIMIT ' . $page_first_result . ',' . $results_per_page; 
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;
    echo '<a class="see-all-link" href="Loops-Simples.php?title='.$search_title.'">See All</a>
    </div>';
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
                <span style="margin-top:0.2%;">By: <a href="User.php?username='.$row["username"].'" class="loop-user-name">'.$row['username'].'</a></span>
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
                        </p>';
                        if(check_logged()==false){
                            echo '<a href="Login-Signup.php?Action=Login" class="d-btn midi-download">Login to Download</a>';
                        }else{
                        echo '<a href="'.$row['file'].'" download="'.$name_trimmed.'" class="d-btn download">Download</a>';
                        }
                    echo '</div>                            
                </div>
            </div>
        </div>';
        }
        echo '<div class="audio-wrap pagelinkwrap">';
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a class="Page-links"  href = "Search.php?search-bar='.$_GET["search-bar"].'&Lpage=' . $page . '">' . $page . ' </a>';
        } 
        echo '</div>';
    } else {
        if($page>1){
            echo '<script>
            window.location.href = "Search.php?search-bar='.$_GET["search-bar"].'&Lpage=1";
            </script>';
        }else{
            echo "<h1>No Midis were found </h1>";
        }
    }
    $conn->close();
?>