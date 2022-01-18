<?php
    $localhost = "localhost"; #localhost
    $dbusername = "root"; #username of phpmyadmin
    $dbpassword = "";  #password of phpmyadmin
    $dbname = "arpeggio-database";  #database name
    

    if(!isset($_GET["username"])){
        echo '<script>
            window.location.href = "index.php";
            </script>';
    }
    else{

        $username=$_GET["username"];
    }
    #connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

    $query='SELECT * FROM users where username="'.$username.'"'; 
    $result = mysqli_query($conn,$query);
    $rowcount=$result->num_rows;
    
    if ($rowcount > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo '<div class="P-Title">
                    <div class="profile-profile-pic" style="background-image: url('.$row["profilepic"].');"></div>
                    <div class="username-bio">
                        <div class="username-space">
                            <h1>'.$row["username"].'</h1>
                        </div>
                        <div class="Bio-space">
                            <span>Bio</span>
                            <p>
                                '.$row["bio"].'
                            </p>
                        </div>
                    </div>
                </div>';
        }
    } else {
            echo '<h1 style="color:snow; ">No Users were found </h1>';
    }
    $conn->close();
?>




