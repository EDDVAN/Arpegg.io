<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name

    if (!isset ($_GET['Mpage']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['Mpage'];  
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

    $query1 = 'SELECT * FROM midi where (title LIKE "'.$search_title.'%")';  
    $result1 = mysqli_query($conn, $query1);  
    $number_of_result = mysqli_num_rows($result1);


    #determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    $sql3='SELECT * FROM midi where (title LIKE "'.$search_title.'%") LIMIT ' . $page_first_result . ',' . $results_per_page; 
    $result = mysqli_query($conn,$sql3);
    $rowcount=$result->num_rows;

    echo '<a class="see-all-link" href="Midi.php?title='.$search_title.'">See All</a>
    </div>';

    if ($rowcount > 0) {
        while($row = mysqli_fetch_array($result)) {
            $name_trimmed=str_replace('Midi/AudioFiles/',"Arpeggio-Midi-",$row['audio_file']);
        echo '<div class="audio-wrap '.$row['title'].' '.$row['tempo'].'">
            <div>
                <div>
                    <h2>'.$row['title'].'</h2><span>'.$row['tempo'].' BPM</span>
                </div>
                <div class="audio-c">
                    <div>
                        <audio controls controlsList="nodownload" class="audio-player" >
                        <source src="'.$row['audio_file'].'" type="audio/mpeg">
                            Your browser does not support the audio element.s
                        </audio>
                    </div>
                    <div class="l-midi-c">
                        <p>
                        '.$row["description"].'
                        </p>
                        ';
                        if(check_logged()==false){
                            echo '<a href="Login-Signup.php?Action=Login" class="d-btn midi-download">Login to Download</a>';
                        }else{
                            echo    '<a href="'.$row['Midi_file'].'" download="'.$name_trimmed.'" class="d-btn midi-download">Download Midi</a>';
                        }

                    
                    echo '</div>        
                </div>
            </div>
        </div>';
        }
        echo '<div class="audio-wrap pagelinkwrap">';
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a class="Page-links"  href = "Search.php?search-bar='.$_GET["search-bar"].'&Mpage=' . $page . '">' . $page . ' </a>';
        } 
        echo '</div>';
    } else {
        if($page>1){
            echo '<script>
            window.location.href = "Search.php?search-bar='.$_GET["search-bar"].'&Mpage=1";
            </script>';
        }else{
            echo "<h1>No Midis were found </h1>";
        }
    }
    $conn->close();
?>