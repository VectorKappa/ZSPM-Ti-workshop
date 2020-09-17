<?php
    
    function head_metas() {
        echo   '<meta charset="UTF-8"/>
                <meta name="description" content="You love food? So do we!">
                <meta name="author" content="Michał Czyż">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="icon" type="image/jpg" href="media/favicon.jpg"/>
                <link rel="stylesheet" href="libs/Ergo-Framework-1.0.2-min.css">';
    }

    function session_checker() {
        session_start();        
        if (isset($_SESSION['name'])) {
        }
        else {
        echo "<h2>Session Expired!</h2>";
            $URL="/login";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        }
    }