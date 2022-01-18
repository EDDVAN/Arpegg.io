<?php
    session_start();
    include 'includes\cfg.php';
    include 'includes\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - Arpeggio</title>
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
    <?php 
                if(check_if_admin()==false){
                    echo '<script>window.location.href = "index.php";</script>';
                }
                ?>
<body>
<div style="width: 100%;">
        <?php
            include 'includes\nav.php';
        ?>
            <div class="Dash-Aside">
                <a id="General-trigger">
                    General
                </a>
                <a id="Users-trigger">
                    Users
                </a>
                <a id="Simples-trigger">
                    Simples
                </a>
                <a id="Reports-trigger">
                    Reports
                </a>
                <a id="Midi-trigger">
                    Midi Managment
                </a>
                <div class="Midi-Manager">
                    <a id="Midi-Add">
                        Add
                    </a>
                    <a id="Midi-Manage">
                        Manage
                    </a>
                </div>
            </div>
            <div class="Dash-Content">
                <div class="DC-Wrapper">
                    <div class="DC-General DC-Inside">
                        <div class="DC-Title">
                            Dashboard
                        </div>
                        <div class="DC-Content">
                        <?php
                            include 'includes\count.php';
                        ?>
                        </div>
                    </div>
                    <div class="DC-Users DC-Inside">
                        <div class="DC-Title">
                            Dashboard
                        </div>
                        <div class="DC-Content">
                            <form class="filter_wrap" method="get">
                                        <div>
                                            <label for="search_midi">Username :</label> <input type="text" name="username" id="sm"> <input type="text" name="Action" value="ManageUsers" style="display:none;">
                                        </div>
                                        <div>
                                            <label for="tempo-max">Email :</label> <input type="email" name="email">
                                        </div>
                                        <div id="sub-div">
                                            <input type="submit" id="sb" value="search">
                                        </div>
                            </form>
                            <div class="list-wrapper with-bg" style="width: 100%;">
                                <table class="users-table">
                                    <tr class="table-header">
                                        <td>
                                        </td>
                                        <td>
                                            IdUser
                                        </td>
                                        <td>
                                            Username
                                        </td>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            Simples
                                        </td>
                                        <td class="cell-shortened">
                                            Numbre of uploads
                                        </td>
                                        <td class="cell-shortened">
                                            Undo-Delete
                                        </td>
                                        <td class="cell-shortened">
                                            Role
                                        </td>
                                        <td class="cell-widened">
                                            Delete
                                        </td>
                                    </tr>
                                    <?php
                                        include 'includes\selectusers.php';
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="DC-ShowSimple DC-Inside">
                        <div class="DC-Title">
                            Free Loops And Simples
                        </div>
                        <div class="DC-Content">
                        <form class="filter_wrap" method="get">
                                <div><label for="search_midi">Title :</label> <input type="text" name="title" id="sm"> <input type="text" name="Action" value="Simples" style="display:none;"></div>
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
                            <div class="list-wrapper" style="width: 100%;">
                                <?php
                                    include 'includes\selectloop-admin.php';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="DC-AddMidi DC-Inside">
                        <div class="DC-Title">
                            Dashboard
                        </div>
                        <div class="DC-Content">
                            <form method="post" enctype="multipart/form-data" class="add-Midi-form">
                                <div>
                                    <h1>Add Midi</h1>
                                    <input type="text" name="Title" id="Title" class="info-box" placeholder="Title" required>
                                    <input type="number" name="Tempo" id="Tempo" class="info-box" placeholder="Tempo" required>
                                    <textarea name="Description" id="D" cols="30" rows="5" max="100" placeholder="" class="info-box"></textarea>
                                    <label for="Audio_file">Audio File</label> <input type="file" name="Audio_file" id="Audio_file" class="info-box" required>
                                    <label for="Audio_file">Midi File</label> <input type="file" name="Midi_file" id="Midi_file" class="info-box" required>
                                    <input type="submit" name="submit" id="Submit" class="info-box" value="Add">
                                    <?php
                                        include 'includes\midiupload.php';
                                    ?>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                    <div class="DC-ShowMidi DC-Inside">
                        <div class="DC-Title">
                            Dashboard

                        </div>
                        <div class="DC-Content">
                        <form class="filter_wrap" method="get">
                            <div><label for="search_midi">Title :</label> <input type="text" name="title" id="sm"> <input type="text" name="Action" value="ManageMidi" style="display:none;"> </div>
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
                            <div class="list-wrapper" style="width: 100%;">
                                <?php
                                    include 'includes\selectmidi-admin.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>                
    <script src="js/WebScript.js"></script>

    <script>
        



        $('.l-midi-c').height($('.audio-player').height());
        $('.DC-Inside').hide();
        $('.DC-General').show();
        $(".Midi-Manager").hide();
        $("#Midi-trigger").on("click",function(){
            if($(".Midi-Manager").is(":hidden")){
                $(".Midi-Manager").slideDown(300);
            }else{
                $(".Midi-Manager").removeClass("rto");
                $(".Midi-Manager").slideUp(300);
            }
        });
        $("#General-trigger").on("click",function(){
            $('.DC-Inside').hide();
            $('.DC-General').show();
        });
        $("#Users-trigger").on("click",function(){
            $('.DC-Inside').hide();
            $('.DC-Users').show();
        });
        $("#Midi-Add").on("click",function(){
            $('.DC-Inside').hide();
            $('.DC-AddMidi').show();
        });
        $("#Midi-Manage").on("click",function(){
            $('.DC-Inside').hide();
            $('.DC-ShowMidi').show();
        });
        $("#Simples-trigger").on("click",function(){
            $('.DC-Inside').hide();
            $('.DC-ShowSimple').show();
        });
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
        var $response="<?php 
        if(isset($_GET['Action'])){
            echo $_GET['Action'] ;
        }
        else{
            echo "none";    
        }
        ?>";
        if($response=="ManageMidi"){
            $('.DC-Inside').hide();
            $('.DC-ShowMidi').show();
        }
        if($response=="Simples"){
            $('.DC-Inside').hide();
            $('.DC-ShowSimple').show();
        }
        if($response=="AddMidi"){
            $('.DC-Inside').hide();
            $('.DC-AddMidi').show();
        }
        if($response=="ManageUsers"){
            $('.DC-Inside').hide();
            $('.DC-Users').show();
        }

    </script>
</body>
</html>