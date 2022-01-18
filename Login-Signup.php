<?php
    session_start();
    include 'includes\cfg.php';
    include 'includes\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-Up/Login - Arpeggio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js\jquery-3.6.0.min.js" ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="CSS\dist\WebStyle.css" rel="stylesheet"></head>
    <link href="CSS\dist\LSStyle.css" rel="stylesheet"></head>
    <?php
        if(check_logged()){
            echo '<script>window.location.href = "index.php";</script>';
        }
    ?>
<body>
    <div style="height: auto;width: 100%;">
        <?php
            include 'includes\nav.php';
        ?>
            <form id="sign-up-right" method="post">
                <div class="Sign-up-div float-right">
                    <div class="cells cell-top">
                    </div>
                    <div class="cells">
                        <span class="title-span">Sign-Up</span>
                        <br>
                    </div>
                    <div class="cells title-cell">
                        <span class="title-under"> already a member ? <a class="LS-link Login-Link">Login</a></span>
                    </div>
                    <?php
                        include 'includes\Sing-up.php';
                    ?>
                    <div class="cells input-cell">
                        <input type="email" name="email" id="email-box" class="info-box" placeholder="Email" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <input type="text" name="username" id="username-box" class="info-box" placeholder="User Name" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <input type="password" name="password" id="password-box" class="info-box" placeholder="Password" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <input type="password" name="confirm-password" id="C-password-box" class="info-box" placeholder="Confirm Password" required autocomplete="off">
                    </div>
                    <div class="cells input-cell btn-cell">
                        <input type="submit" name="submitS" id="submit-box" class="btn submit-btn" value="Sign-Up" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <span class="agree-span">By clicking the "Sign up" button, you are creating an account, and agree to Arpeggio's <a href="">Terms of Service</a>  and <a href="">Privacy Policy</a> </span>
                    </div>
                </div>
            </form>
            <form id="login-left" method="post">
                <div class="Sign-up-div float-right login-div">
                    <div class="cells cell-top">
                    </div>
                    <div class="cells">
                        <span class="title-span">Login</span>
                        <br>
                    </div>
                    <div class="cells title-cell">
                        
                        <span class="title-under"> Need an account ? <a class="LS-link Sign-Link">Sign-Up</a></span>
                    </div>
                    <?php
                        include 'includes\Login.php';
                    ?>
                    <div class="cells input-cell">
                        <input type="email" name="email" id="email-box" class="info-box" placeholder="Email" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <input type="password" name="password" id="password-box" class="info-box" placeholder="Password" required autocomplete="off">
                    </div>
                    <div class="cells input-cell btn-cell">
                        <input type="submit" name="submitL" id="submit-box" class="btn submit-btn" value="Login" required autocomplete="off">
                    </div>
                    <div class="cells input-cell">
                        <a href="" class="forgotpwd">Forgot Password ?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    

    <script src="js/WebScript.js"></script>

    <script>
        var $response="<?php echo $_GET['Action'] ?>";
        if($response=="Login"){
            $(".Sign-up-div").removeClass("float-right");
            $(".Sign-up-div").addClass("float-left");
            $("body").removeClass("backright");
            $("body").addClass("backleft");
            $("#sign-up-right").hide();
            $("#login-left").delay(200).slideDown(200);
        }
        if($response=="Sign-up")
        {
            $(".Sign-up-div").removeClass("float-left");
            $(".Sign-up-div").addClass("float-right");
            $("body").removeClass("backleft");
            $("body").addClass("backright");
            $("#login-left").hide();
            $("#sign-up-right").delay(200).slideDown(200);
        }
        $(".Login-Link").on("click",function(){
            $(".Sign-up-div").removeClass("float-right");
            $(".Sign-up-div").addClass("float-left");
            $("body").removeClass("backright");
            $("body").addClass("backleft");
            $("#sign-up-right").hide();
            $("#login-left").delay(200).slideDown(200);
        });
        $(".Sign-Link").on("click",function(){
            $(".Sign-up-div").removeClass("float-left");
            $(".Sign-up-div").addClass("float-right");
            $("body").removeClass("backleft");
            $("body").addClass("backright");
            $("#login-left").hide();
            $("#sign-up-right").delay(200).slideDown(200);
        });
    </script>
</body>
</html>