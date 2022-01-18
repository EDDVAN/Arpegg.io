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
    <link href="CSS\dist\Profile.css" rel="stylesheet"></head>
    <?php 
        if(check_logged()==false){
            echo '<script>
            window.location.href = "Login-Signup.php?Action=Login";
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
        <div class="article">
            <div class="P-Inside">
                <?php
                    include 'includes\get-profile.php';
                ?>
                <div class="P-Title with-h1-C">
                    <h1>Simples and Loops uploaded</h1>
                </div>
                <div class="P-Content">
                    <?php
                        include 'includes\selectloop-user.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'includes\footer.php';
    ?>
        <script src="js/WebScript.js"></script>
        <script>
        $('#sb').on("click",function(){
            var name = $('#sm').val();
            var tempo = $('#tempo_midi').val();
            if(name!="" || tempo!=""){
            $('.audio-wrap').hide();
            if(name!="" && tempo!=""){
                $('.audio-wrap').hide();
                var nameC=name.toUpperCase();
                var nameL=name.toLowerCase();
                $('.'+nameC+'.'+tempo).show();
                $('.'+nameL+'.'+tempo).show();
            }
            else if( name!="" && tempo==""){
                $('.audio-wrap').hide();
                var nameC=name.toUpperCase();
                var nameL=name.toLowerCase();
                $('.'+nameC).show();
                $('.'+nameL).show();
            }
            else{
                $('.audio-wrap').hide();
                $('.'+tempo).show(); 
            }
            }
            else{
            $('.audio-wrap').show();
            }

        });
        $("body").height($("article").s)
        </script>
</body>
</html>