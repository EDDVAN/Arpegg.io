<?php


        $id = $_SESSION['user_id'];


        if (isset($_POST["EditSubmit"]) && $_POST["EditSubmit"]!=NULL)
        {
            if(isset($_POST["old_password"]) && $_POST["old_password"]==$_SESSION["pwd"]){
                /*if(isset($_POST["username"]) && $_POST["username"]!=NULL)
                {
                    if(preg_match("/^(?=.{5,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9_]+(?<![_.])$/i", $_POST["username"])==1){
                        $username = $_POST["username"];
                        $queryUN = 'UPDATE `users` SET `username`="'.$username.'"  where idUser='.$id.' ';  
                        mysqli_query($conn,$queryUN);
                        $_SESSION['user_name']=$username;
                    }else{
                        echo '<div class="done-replay">
                        Your username must be AT LEAST 5 Characters.
                        </div>';
                    }
                }*/
                if(isset($_POST["email"]) && $_POST["email"]!=NULL)
                    {
                        $email = $_POST["email"];
                        $queryE = 'UPDATE `users` SET `email`="'.$email.'"  where idUser='.$id.' ';  
                        mysqli_query($conn,$queryE);
                        $_SESSION['email']=$email;
                        echo '<div class="done-replay">
                                        email updated
                                </div>';
                    }
                if(isset($_POST["Bio"]) && $_POST["Bio"]!=NULL)
                    {
                        $Bio = $_POST["Bio"];
                        $queryB = 'UPDATE `users` SET `bio`="'.$Bio.'"  where idUser='.$id.' ';  
                        mysqli_query($conn,$queryB);
                        $_SESSION['bio']=$Bio;
                        echo '<div class="done-replay">
                                        Bio updated
                                </div>';
                    }
                if(isset($_POST["new_password"]) && $_POST["new_password"]!=NULL){
                        if(isset($_POST["C_new_password"]) && $_POST["C_new_password"]!=NULL){
                            if(preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*_-]).{8,}$/i", $_POST["new_password"])==1){
                                if(isset($_POST["new_password"])==$_POST["C_new_password"]){
                                    $new_password = $_POST["new_password"];
                                    $queryNP = 'UPDATE `users` SET `password`="'.$new_password.'"  where idUser='.$id.' ';  
                                    mysqli_query($conn,$queryNP);
                                    $_SESSION['pwd']=$new_password;
                                    echo '<div class="done-replay">
                                        Password updated
                                </div>';
                                }
                            }else{
                                echo '<div class="error-replay">
                                Your password must be AT LEAST 8 Characters and Contain an Upper Case, a lower Case, a Number and a Special Charcter.
                                </div>';
                            }
                            
                        }else{
                            echo '<div class="error-replay">Passwords don\'t match</div>';
                        }
                        
                }
                if(isset($_FILES['profile-pic']) && $_FILES['profile-pic']!=NULL && $_FILES['profile-pic']['name']!=""){
                    $profilepic = $_FILES['profile-pic']['name'];

                    $ext = pathinfo($profilepic, PATHINFO_EXTENSION);
                    if ($ext != 'jpg' && $ext !='png' && $ext != 'JPG' && $ext !='PNG') {
                    echo '<div class="error-replay">
                    The Profile Picture Can only be a JPG/PNG file
                    </div>';
                    }
                

                    #file name with a random number so that similar dont get replaced
                    $Picname = "Arp-".$_SESSION["user_name"]."-ProfilePic.".$ext;

                    #temporary file name to store file
                    $tPicname = $_FILES["profile-pic"]["tmp_name"];
                
                    #upload directory path
                    $uploads_dir = 'Profile-Pics';
                    if(!file_exists($uploads_dir)){
                        mkdir($uploads_dir ,  0777, true);
                    }
                   
                    #TO move the uploaded file to specific location
                    move_uploaded_file($tPicname, $uploads_dir.'/'.$Picname);

                    $dir_Pic=$uploads_dir.'/'.$Picname;
                    

                    #sql query to insert into database
                    $queryUN = 'UPDATE `users` SET `profilepic`="'.$dir_Pic.'"  where idUser='.$id.' ';  
                    mysqli_query($conn,$queryUN);
                    $_SESSION['pic']=$dir_Pic;
                }

            }
            else{
                echo '<div class="error-replay">
                        Incorrect Password
                        </div>';
            }
        }  
        else{
        }

?>