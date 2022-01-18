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
    <link href="CSS\dist\Midi.css" rel="stylesheet"></head>
</head>
<body>
    <div style="height: auto;width: 100%;">
        <?php
        include 'includes\nav.php';
        include 'includes\aside.php';
        ?>            
        <div class="article" style="max-height: 1250pt;">
            <div class="DC-ShowMidi DC-Inside">
                <div class="DC-Title">
                    Free Midis
                </div>
                <div class="DC-Content">
                    <form class="filter_wrap" method="get">
                        <div><label for="search_midi">Title :</label> <input type="text" name="title" id="sm"></div>
                        <div>
                            <label for="tempo-max">Max-Tempo :</label> <input type="number" name="tempo-max" id="tempo_midi">
                        </div>
                        <div>
                        <label for="tempo-min">Min-Tempo :</label> <input type="number" name="tempo-min" id="tempo_midi">
                        </div>
                        <div id="sub-div">
                            <input type="submit" id="sb" value="search">
                        </div>
                    </form>
                    <div class="list-midi" style="width: 100%;">
                        <?php
                            include 'includes\selectmidi.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'includes\footer.php';
    ?>
        <script src="js/WebScript.js"></script>
        
</body>
</html>