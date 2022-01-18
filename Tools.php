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
    <link href="CSS\dist\WebStyle.css" rel="stylesheet"></head>
    <link href="CSS\dist\Piano-Play.css" rel="stylesheet"></head>
 
<body>
    <div style="height: auto; width: 100%;">
        <?php
            include 'includes\nav.php';
            include 'includes\aside.php';
        ?>
            <div class="article">
                <div class="article-mid">
                    <div class="content" style="height: auto;">
                        <div class="content-container">
                        
                        </div>
                        
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
            $('.c-i-div').hide();
            $('#c-i-definition').show();
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#definition-C").delay(250).addClass("highlighted");
        $("#definition-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#definition-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-definition').show();
        });
        $("#how-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#how-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-how').show();
        });
        $("#why-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#why-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-why').show();
        });
        $("#harmony-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#harmony-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-harmony').show();
        });
        $("#melody-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#melody-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-melody').show();
        });
        $("#rhythm-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#rhythm-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-rhythm').show();
        });
    </script>
    
</body>
</html>