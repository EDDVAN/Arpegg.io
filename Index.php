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
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS\dist\WebStyle.css" rel="stylesheet">
    <link href="CSS\dist\HomeStyle.css" rel="stylesheet"></head>
<body>
    <div style="height: auto;width: 100%;">
        <?php
            include 'includes/nav.php';
            include 'includes/aside.php';
        ?>            
            <div class="article">
                <div class="article-header" style="width: 96%;">
                        <div class="header-container">
                            <div>
                                <h1>
                                    Arpeggio
                                </h1>
                                <h3>
                                    Your Way Into Great Music...
                                </h3>
                            </div>
                    </div>
                </div>
                <div class="article-mid">
                    <a href="Music Theory.html" class="LM-J">
                        <div class="MT-J-inside J-Container" >
                            <div>
                                <h1>
                                    Learn Music
                                </h1>
                                <h3 style="font-weight: lighter;">
                                    Improve Your Music Skills With This Course...
                                </h3>
                            </div>
                        </div>
                    </a>
                    <div class="J-first-row">
                        <a class="MT-J J-Container" href="Music Theory.html">
                            <div>
                                <h1>
                                    Music Theory
                                </h1>
                                <h3 style="font-weight: lighter;">
                                    Every Thing You Need To Know About Music...
                                </h3>
                            </div>
                        </a>
                        <div class="TT-J J-Container">
                            <div>
                                <h1>
                                    The Fundamentals Of Music
                                </h1>
                                <h3 style="font-weight: lighter;">
                                The basic music theory for beginners (harmony, melody, and rhythm)...
                                </h3>
                            </div>
                        </div>
                    </div>
                    <a href="Loops-Simples.html" class="LM-J">
                        <div class="MT-J-inside J-Container" >
                            <div>
                                <h1>
                                    Loops & Simples
                                </h1>
                                <h3 style="font-weight: lighter;">
                                    Share Your Creativity With The World...
                                </h3>
                            </div>
                        </div>
                    </a>
                    <a href="Midi.html" class="LM-J">
                        <div class="MT-J-inside J-Container" >
                            <div>
                                <h1>
                                    MiDi
                                </h1>
                                <h3 style="font-weight: lighter;">
                                    Unleash Your Potential With Our Collection of Free MiDis...
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="article-lower">
    
                </div>
            </div>
    
        </div>
    </div>

    <?php
        include 'includes\footer.php';
    ?>

    <script src="js/WebScript.js"></script>

    <script>
        $(window).on('scroll', function() {
            var y = jQuery(this).scrollTop();
            $('.Tempo-J').show(200);
            $('.Tempo-J').toggleClass('slide-in', y > 150);
            $('.Notes-J').show(200);
            $('.Notes-J').toggleClass('slide-in', y > 150);
            $('.Chords-J').show(200);
            $('.Chords-J').toggleClass('slide-in', y > 360);
            $('.Keys-J').show(200);
            $('.Keys-J').toggleClass('slide-in', y > 360);
            $('.Scales-J').show(200);
            $('.Scales-J').toggleClass('slide-in', y > 570);
            $('.Practice-J').show(200);
            $('.Practice-J').toggleClass('slide-in', y > 570);
        });
        
    </script>



</body>
</html>