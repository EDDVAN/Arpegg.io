<?php
        if (isset($_POST["submitL"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $query="Select * from users where email='$email' AND password='$password'";
            $result=mysqli_query($conn,$query);
            $rowcount=$result->num_rows;
            $row = mysqli_fetch_assoc($result);
            if($rowcount>0){
                if($row['Deleted']==0){
                    $_SESSION['user_name']=$row['username'];
                    $_SESSION['user_id']=$row['idUser'];
                    $_SESSION['pic']=$row['profilepic'];
                    $_SESSION['pwd']=$row['password'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['bio']=$row['bio'];
                    $_SESSION['role']=$row['role'];
                    if($row['Active']==0){
                        echo '<script>window.location.href = "includes/Reactivate-account.php";</script>';
                    }else{
                        echo '<script>window.location.href = "index.php?u=10";</script>';
                    }
                    die;
                }else{
                echo   '<div class="cells input-cell wrong-cell">
                <span style="color:crimson;">This Account is Unavilable</span>
                </div>';
                }
                
            }
            else
            {
                $_GET['Action']="Login";
                echo '<div class="cells input-cell wrong-cell">
                <span style="color:crimson;">Wrong Info</span>
                </div>';
            }
        }
        $email=NULL;
        $password=NULL;


?>