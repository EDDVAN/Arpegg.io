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

    if(!isset($_GET["title"])){
        $search_title="";
    }
    else{

        $search_title=$_GET["title"];
    }
   
    if(!isset($_GET["tempo-min"])){
        $search_tempo_min=0;
    }
    else{
        $search_tempo_min=$_GET["tempo-min"];
        if($_GET["tempo-min"]==""){
            $search_tempo_min=0;
        }
    }
    if(!isset($_GET["tempo-max"])){
        $search_tempo_max=1000;
    }
    else{
        $search_tempo_max=$_GET["tempo-max"];
        if($_GET["tempo-max"]==""){
            $search_tempo_max=1000;
        }
    }
    
    
    

    $results_per_page = 10;  
    $page_first_result = ($page-1) * $results_per_page;  

    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query1 = 'SELECT * FROM midi where (title LIKE "'.$search_title.'%") AND tempo Between '.$search_tempo_min.' and '.$search_tempo_max.'';  
    $result1 = mysqli_query($conn, $query1);  
    $number_of_result = mysqli_num_rows($result1);


    #determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  

    $sql3='SELECT * FROM midi where (title LIKE "'.$search_title.'%") AND tempo Between '.$search_tempo_min.' and '.$search_tempo_max.' LIMIT ' . $page_first_result . ',' . $results_per_page; 
    $result = mysqli_query($conn,$sql3);
    $rowcount=$result->num_rows;
        
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
                        <a href="'.$row['Midi_file'].'" class="d-btn midi-download">Download Midi</a>
                        <a href="'.$row['audio_file'].'" download="'.$name_trimmed.'" class="d-btn audio-download">Download Audio</a>
                        <!--<a href="" class="d-btn" id="midi-btn-modify">Modify</a>-->
                        <a href="includes\delete-midi.php?id='.$row["idMidi"].'" class="d-btn" id="midi-btn-delete">Delete</a>
                    </div>        
                </div>
                
                <div>
                    <p>
                        '.$row["description"].'
                    </p>
                </div>
            </div>
        </div>';
        }
        echo '<div class="audio-wrap pagelinkwrap">';
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a class="Page-links" href = "Dashboard.php?Action=ManageMidi&Mpage=' . $page . '">' . $page . ' </a>';
        } 
        echo '</div>';
    } else {
        if($page>1){
            echo '<script>
            window.location.href = "Dashboard.php?Action=ManageMidi&Mpage=1";
            </script>';
        }else{
            echo "<h1>No Midis were found </h1>";
        }
    }
    $conn->close();
?>