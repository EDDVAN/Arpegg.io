<?php
    session_start();
    include 'includes\cfg.php';
    include 'includes\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Midis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js\jquery-3.6.0.min.js" ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="CSS\dist\WebStyle.css" rel="stylesheet"></head>
    <link href="CSS\dist\Dashboard.css" rel="stylesheet"></head>
    <link href="CSS\dist\Settings.css" rel="stylesheet"></head>
    <?php 
        if(check_logged()==false){
            echo '<script>
            alert("You Need To Be Logged in to View This Content");
            window.location.href = "Index.php";
            </script>';
        }
    ?>
</head>
<body>
    <div style="height: auto;width: 100%;">
        <?php
        include 'includes\nav.php';
        include 'includes\aside.php';
        ?>            
        <div class="article" style="max-height: 1250pt;">
            <div class="DC-Inside">
                <div class="DC-Title">
                    Settings
                </div>
                <div class="DC-Content">
                    <form class="Setting-form" method="post" enctype="multipart/form-data">
                        <table id="Most-Settings">
                            <tr class="setting-line">
                                <td>
                                    <span>Username :</span>
                                </td>
                                <td>
                                <span><?php echo $_SESSION["user_name"]; ?> (You Can't change your Username)</span>
                                </td>
                            </tr>
                            <tr class="setting-line">
                                <td>
                                    <span>Email :</span>
                                </td>
                                <td>
                                    <input type="email" name="email" id="email">
                                </td>
                            </tr>
                            <tr class="setting-line">
                                <td>
                                    <span>Profile Picture :</span>
                                </td>
                                <td>
                                    <input type="file" name="profile-pic" id="profile-pic-upload">
                                </td>
                            </tr>
                            <tr class="setting-line">
                                <td>
                                    <span>Bio :</span>
                                </td>
                                <td>
                                    <textarea name="Bio" id="Bio" cols="30" rows="5" style="resize:none" maxlength="100"></textarea>
                                </td>
                            </tr>
                            <tr class="setting-line">
                                <td>
                                <span>New Password :</span>
                                </td>
                                <td>
                                    <input type="password" name="new_password" id="new_password">
                                </td>
                            </tr>
                            <tr class="setting-line">
                                <td>
                                <span>Confirm Password :</span>
                                </td>
                                <td>
                                    <input type="password" name="C_new_password" id="C_new_password">
                                </td>
                            </tr>
                            <tr class="setting-line empty-line">    
                            </tr>
                            <tr class="setting-line">
                                <td>
                                    <span>Current Password :</span>
                                </td>
                                <td>
                                    <input type="password" name="old_password" id="old_password">
                                </td>
                            </tr>
                        </table>
                        <?php
                            include 'includes\Update-info.php';
                        ?>
                        <table class="btn-table" id="Main-btns">
                            <tr class="btn-line">
                                <td>
                                    <input type="submit" class="d-btn" name="EditSubmit" value="Save Changes">
                                </td>
                                <td>
                                    <a class="d-btn" id="btn-Suspend">Suspend Account</a>
                                </td>
                                <td>
                                    <a class="d-btn" id="btn-Delete">Delete Account</a>
                                </td>
                            </tr>
                        </table>
                        <table class="btn-table" id="delete-confirm">
                            <tr class="btn-line">
                                <td colspan="2">
                                    <p>
                                        Deleting your account will result in all of your data to be transfered to a sperate private of our servers, including (your personal info and all of your activities), and will not be visible to anyone, not even us.<br>
                                        We only access that data in the case of a legal matter or to dispute/confirm a claim (Copyright or else).
                                        This operation is irreversible, once deleted an account is permanently deleted, and current email and username won't be usable anymore.
                                        Are you sure you want to continue ?
                                        <br>
                                    </p>
                                </td>
                            </tr>
                            <tr class="btn-line confirm-btn-line">
                                <td>
                                    <a href="includes/delete-account.php" class="d-btn BC-danger">Delete Account</a>
                                </td>
                                <td>
                                    <a class="d-btn BC-warning" id="Dont-delete" >Go Back</a>
                                </td>
                            </tr>
                        </table>
                        <table class="btn-table" id="suspend-confirm">
                            <tr class="btn-line">
                                <td colspan="2">
                                    <p>
                                        Suspending your account will result in all of your data to be hidden from all other users, including (your personal info and all of your activities).<br>
                                        We only access that data in the case of a legal matter or to dispute/confirm a claim (Copyright or else).
                                        You can reacivate your account by just loggin-in again.
                                        Are you sure you want to continue ?
                                        <br>
                                    </p>
                                </td>
                            </tr>
                            <tr class="btn-line confirm-btn-line">
                                <td>
                                <a href="includes/Suspend-account.php" class="d-btn BC-danger">Suspend Account</a>
                                </td>
                                <td>
                                    <a class="d-btn BC-warning" id="Dont-Suspend" >Go Back</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'includes\footer.php';
    ?>
        <script src="js/WebScript.js"></script>
        <script>
            $('#delete-confirm').hide();
            $('#suspend-confirm').hide();
            $('#btn-Delete').on("click",function(){
                $('#delete-confirm').delay(100).slideDown(300);
            });
            $('#Dont-delete').on("click",function(){
                $('#delete-confirm').delay(100).slideUp(300);
            });
            $('#btn-Suspend').on("click",function(){
                $('#suspend-confirm').delay(100).slideDown(300);
            });
            $('#Dont-Suspend').on("click",function(){
                $('#suspend-confirm').delay(100).slideUp(300);
            });     
               

        </script>
        
</body>
</html>