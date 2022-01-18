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
    <link href="CSS\dist\Upload.css" rel="stylesheet"></head>
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
            <div class="DC-ShowMidi DC-Inside">
                <div class="DC-Title">
                        Upload Your Loop/Simple
                </div>
                <div class="DC-Content">
                    <form method="post" enctype="multipart/form-data" class="add-Midi-form">
                        <div>
                            <input type="text" name="Title" id="Title" class="info-box" placeholder="Title" required>
                            <input type="number" name="Tempo" id="Tempo" class="info-box" placeholder="Tempo" required>
                            <label for="keys">Choose a Key</label>
                                <select name="keys" id="keys" class="info-box">
                                    <option value="C-maj">C-maj</option>
                                    <option value="C-min">C-min</option>
                                    <option value="C#-maj">C#-maj</option>
                                    <option value="C#-min">C#-min</option>
                                    <option value="D-maj">D-maj</option>
                                    <option value="D-min">D-min</option>
                                    <option value="D#-maj">D#-maj</option>
                                    <option value="D#-min">D#-min</option>
                                    <option value="E-maj">E-maj</option>
                                    <option value="E-min">E-min</option>
                                    <option value="F-maj">F-maj</option>
                                    <option value="F-min">F-min</option>
                                    <option value="F#-maj">F#-maj</option>
                                    <option value="F#-min">F#-min</option>
                                    <option value="G-maj">G-maj</option>
                                    <option value="G-min">G-min</option>
                                    <option value="G#-maj">G#-maj</option>
                                    <option value="G#-min">G#-min</option>
                                    <option value="A-maj">A-maj</option>
                                    <option value="A-min">A-min</option>
                                    <option value="A#-maj">A#-maj</option>
                                    <option value="A#-min">A#-min</option>
                                    <option value="B-maj">B-maj</option>
                                    <option value="B-min">B-min</option>
                                </select>

                                <label for="keys">Choose an Genre</label>
                                <select name="Genre" id="Genre" class="info-box">
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

                            <label for="Audio_file">Audio File</label> <input type="file" name="Audio_file" id="Audio_file" class="info-box" required>
                            <input type="submit" name="submit" id="Submit" class="info-box" value="Add">
                            <?php
                                include 'includes\loopupload.php';
                            ?>
                        </div>                                
                    </form>
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