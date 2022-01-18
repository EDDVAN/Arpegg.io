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
        <div class="article">
            <div class="DC-Inside">
                <div class="DC-Title">
                    Free Loops And Simples
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
                        <div>
                        <label for="Genre">Genre</label> 
                            <select name="genre" id="Genre" class="info-box">
                                <option value="" selected></option>
                                <option value="Acoustic">Acoustic</option>
                                <option value="Afrobeat">Afrobeat</option>
                                <option value="Ambient">Ambient</option>
                                <option value="Blues">Blues</option>
                                <option value="BoomBap">BoomBap</option>
                                <option value="Chill">Chill</option>
                                <option value="Cinematic">Cinematic</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Dance">Dance</option>
                                <option value="Disco">Disco</option>
                                <option value="Dubstep">Dubstep</option>
                                <option value="EDM">EDM</option>
                                <option value="Electro">Electro</option>
                                <option value="Ethnic">Ethnic</option>
                                <option value="Folk">Folk</option>
                                <option value="Funk">Funk</option>
                                <option value="Glitch">Glitch</option>
                                <option value="Hardcore">Hardcore</option>
                                <option value="Heavy Metal">HeavyMetal</option>
                                <option value="HipHop">HipHop</option>
                                <option value="House">House</option>
                                <option value="Indie">Indie</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Jungle">Jungle</option>
                                <option value="Latin">Latin</option>
                                <option value="Lo-Fi">Lo-Fi</option>
                                <option value="Orchestral">Orchestral</option>
                                <option value="Pop">Pop</option>
                                <option value="Punk">Punk</option>
                                <option value="Rap">Rap</option>
                                <option value="Rave">Rave</option>
                                <option value="Reggae">Reggae</option>
                                <option value="RnB">RnB</option>
                                <option value="Rock">Rock</option>
                                <option value="Samba">Samba</option>
                                <option value="Soul">Soul</option>
                                <option value="Techno">Techno</option>
                                <option value="Trap">Trap</option>
                                <option value="UK-Drill">UK-Drill</option>
                                </select>
                        </div>
                        <div id="sub-div">
                            <input type="submit" id="sb" value="search">
                        </div>
                    </form>
                    <div class="list-midi" style="width: 100%;">
                        <?php
                            include 'includes\selectloop.php';
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