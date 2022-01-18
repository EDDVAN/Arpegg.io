<?php
    session_start();
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
    <link href="CSS\dist\Search.css" rel="stylesheet"></head>
</head>
<body>
    <div style="height: auto;width: 100%;">
        <?php
        include 'includes\nav.php';
        include 'includes\aside.php';
        ?>            
        <div class="article" style="height:auto;">
            <div class="DC-Inside">
                <div class="DC-Title" style="height:auto;">
                    Search : <?php echo $_GET["search-bar"]; 
                    ?>
                </div>
                <div class="DC-Content" style="height:auto;">
                    <div class="search-wrapper" id="loops-search">
                    <div class="audio-wrap search-head pagelinkwrap">
                        <a>Loops : <?php echo $_GET["search-bar"];
                        ?>
                        </a>
                        <?php
                            include 'includes\selectloop-search.php'
                        ?>
                    </div>
                    <div class="search-wrapper" id="Midi-search">
                        <div class="audio-wrap pagelinkwrap">
                            <a>Midi : <?php echo $_GET["search-bar"];
                        ?>
                        </a>
                        <?php
                            include 'includes\selectmidi-search.php'
                        ?>
                    </div>
                    <div class="search-wrapper" id="Users-search">
                    <div class="audio-wrap pagelinkwrap">
                            <a>Users : <?php echo $_GET["search-bar"];
                        ?>
                        </a>

                    </div>
                        <?php
                            
                        ?>
                        <div class="list-wrapper with-bg">
                                    <?php
                                        include 'includes\selectusers-search.php';
                                    ?>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="js/WebScript.js"></script>
        
</body>
</html>