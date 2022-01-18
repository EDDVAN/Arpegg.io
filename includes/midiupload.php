<?php

        $localhost = "localhost"; #localhost
        $dbusername = "root"; #username of phpmyadmin
        $dbpassword = "";  #password of phpmyadmin
        $dbname = "arpeggio-database";  #database name

        #connection string
        $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

        if (isset($_POST["submit"]))
        {
            #retrieve file info
            $title = $_POST["Title"];
            $tempo = $_POST["Tempo"];
            $description = $_POST["Description"];
            
            #file name with a random number so that similar dont get replaced
            $Audioname = rand(1000,10000)."-".$_FILES["Audio_file"]["name"];
            $Midiname = rand(1000,10000)."-".$_FILES["Midi_file"]["name"];
        
            #temporary file name to store file
            $tAudioname = $_FILES["Audio_file"]["tmp_name"];
            $tMidiname = $_FILES["Midi_file"]["tmp_name"];
        
            #upload directory path
            $Auploads_dir = 'Midi/AudioFiles';
            $Muploads_dir = 'Midi/MidiFiles';
            #TO move the uploaded file to specific location
            move_uploaded_file($tAudioname, $Auploads_dir.'/'.$Audioname);
            move_uploaded_file($tMidiname, $Muploads_dir.'/'.$Midiname);

            $dir_Midi=$Muploads_dir.'/'.$Midiname;
            $dir_Audio=$Auploads_dir.'/'.$Audioname;
        
            #sql query to insert into database
            $sql = "INSERT into midi(title,tempo,description,audio_file,Midi_file) VALUES('$title','$tempo','$description','$dir_Audio','$dir_Midi')";
        
            if(mysqli_query($conn,$sql)){
        
            echo "<h2 style=\"color:green;\">File Sucessfully uploaded</h2>";
            $_POST["submit"]=NULL;
            }
            else{
                echo "<h2 style=\"color:red;\">Error</h2>";
                $_POST["submit"]=NULL;
            }
        }

?>