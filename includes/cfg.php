<?php

    if(isset($_GET["search-bar"])){
        if($_GET["search-bar"]!=NULL && $_GET["search-bar"]!=""){
            echo '<script>window.location.href = "search.php?search-bar='.$_GET["search-bar"].'";</script>';
        }
        
    }


?>