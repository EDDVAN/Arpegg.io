<?php

        $localhost = "localhost"; #localhost
        $dbusername = "root"; #username of phpmyadmin
        $dbpassword = "";  #password of phpmyadmin
        $dbname = "arpeggio-database";  #database name

        #connection string
        $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
        
        $id = $_SESSION['user_id'];
        if (isset($_POST["submit"]) && $_POST["submit"]!=NULL)
        {
            #retrieve file info
            $title = $_POST["Title"];
            $tempo = $_POST["Tempo"];
            $keys=$_POST["keys"];
            $genre=$_POST["Genre"];
            $id=$_SESSION["user_id"];
            
            $filename = $_FILES['Audio_file']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if ($ext != 'mp3' && $ext !='wav') {
                echo '<span>The Audio File should be a Mp3/Wav file</span>';
                die;
            }

            #file name with a random number so that similar dont get replaced
            $Audioname = "Arpeggio-". rand(1000,10000)."-".$title.".".$ext;

            #temporary file name to store file
            $tAudioname = $_FILES["Audio_file"]["tmp_name"];
        
            #upload directory path
            $Auploads_dir = 'Loops/'.$_SESSION["user_name"].'/uploaded';
            if(!file_exists($Auploads_dir)){
                mkdir($Auploads_dir ,  0777, true);
            }

            #TO move the uploaded file to specific location
            move_uploaded_file($tAudioname, $Auploads_dir.'/'.$Audioname);

            $dir_Audio=$Auploads_dir.'/'.$Audioname;
        
            #sql query to insert into database
            $sql = "INSERT into simples(iduser,title,tempo,MK,file,Genre) VALUES('$id','$title','$tempo','$keys','$dir_Audio','$genre')";
        
            if(mysqli_query($conn,$sql)){
        
            echo "<h2 style=\"color:green;\">File Sucessfully uploaded</h2>";
            unset($_POST["submit"]);
            }
            else{
                echo "<h2 style=\"color:red;\">Error</h2>";
                unset($_POST["submit"]);
            }
        }

?>