<?php
    
    
        if (isset($_POST["submitS"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $username=$_POST["username"];
            $confirmpassword=$_POST["confirm-password"];
            if(preg_match("/^(?=.{5,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9_]+(?<![_.])$/i", $username)==1){
                if(preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*_-]).{8,}$/i", $password)==1){
                    if($password==$confirmpassword){
                        $query="Select * from users where email='$email'";
                        $result=mysqli_query($conn,$query);
                        $rowcount=$result->num_rows;
                        $row = mysqli_fetch_assoc($result);
                        if($rowcount>0){
                            $_GET['Action']="Sign-up";
                            echo '<div class="cells input-cell wrong-cell">
                            <span style="color:crimson;">User already exist. Are you '.$row['username'].' ? <a class="LS-link Login-Link">Login</a></span>
                            </div>';
                        }
                        else
                        {
                            $query="Select * from users where username='$username'";
                            $result=mysqli_query($conn,$query);
                            $rowcount=$result->num_rows;
                            if($rowcount>0){
                                $_GET['Action']="Sign-up";
                                echo '<div class="cells input-cell wrong-cell">
                                <span style="color:crimson;">Username taken, Try another.</span>
                                </div>';
                            }
                            else{
                                $query="insert into users (username,password,email) values ('$username','$password','$email')";
                                mysqli_query($conn, $query);
                                echo '<script>window.location.href = "Login-Signup.php?Action=Login";</script>';
                            }
                        }
                    }
                    else
                    {
                        $_GET['Action']="Sign-up";
                        echo '<div class="cells input-cell wrong-cell">
                        <span style="color:crimson;">Passwords don\'t match</span>
                        </div>';
                    }
                }else{
                    echo '<div class="cells input-cell wrong-cell">
                    <span style="color:crimson;">Your password must be AT LEAST 8 Characters and Contain an Upper Case, a lower Case, a Number and a Special Charcter.</span>
                    </div>';
                }
            }else{
            echo '<div class="cells input-cell wrong-cell">
            <span style="color:crimson;">Your username must be AT LEAST 5 Characters.</span>
            </div>';
            }
            
        }


?>