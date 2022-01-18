<?php
    session_start();
    include 'includes\cfg.php';
    include 'includes\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arpeggio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js\jquery-3.6.0.min.js" ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS\dist\WebStyle.css" rel="stylesheet"></head>
    <link href="CSS\dist\AboutStyle.css" rel="stylesheet"></head>
<body>
    <div style="height: auto; width: 100%;">
        <?php
            include 'includes\nav.php';
            include 'includes\aside.php';
        ?>
        <div class="article">
            <div class="about-container">
                <div class="top-container">
                    <img class="EddVan" src="images\Ali Profile Pic.jpg">
                    <div class="about-EddVan">
                        <h1>BAZIZI Ali</h1>
                        <br>
                        <p>
                            A 20 year old Moroccan, From the mountains of Atlas, A trainee in ISTAG Bab-Tizimi
                            <br>
                            And an aspiring PROGRAMMER
                        </p>
                    </div>
                </div>
                <div class="bot-container">
                    <div class="bot-left">
                        <h1>
                            Technologies Used :
                        </h1>
                        <br>
                        <span>HTML,CSS,SASS</span><br>
                        <span>JS,JQuery</span><br>
                        <span>PHP,Laravel</span><br>
                    </div>
                    <div class="bot-right">
                        <h1>ARPEGGIO</h1>
                        <br>
                        <p>
                            it's a Music learning and sharing platform 
                            <br>
                            made by musicians for musicians, 
                            <br>
                            thats all, collaborate and learn ...
                        </p>
                        </div>
                </div>
            </div>
        </div>    
    </div>

    <?php
        include 'includes\footer.php';
    ?>

    <script src="js/WebScript.js"></script>

    <script>     
        $(".EddVan").height($(".EddVan").width());
    </script>
    
</body>
</html>