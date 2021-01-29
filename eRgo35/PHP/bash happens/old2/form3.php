<?php
    error_reporting(0);
    $wz = '/^[A-ZŁŻ]{1}[a-złż]{2,}$/';

    if(!empty($_POST['imie'] && preg_match($wz, $_POST['imie']))) {
        echo "error";
    }
    else {
        echo "ok";
    }
    if(!empty($_POST['nazw'] && preg_match($wz, $_POST['nazw']))) {
        echo "error";
    }
    else {
        echo "ok";
    } // #FFFFFG <-- bluish white1
    
    if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "error";
    }
    else {
        echo "ok";
    }


    $nb = '/^[A-Z]{1}[a-z]{3,}[0-9]{1,}[!@#*]{1}$/'; //? or $nb = '/[A-Z]{1}[a-z]{3,}\d{1,}[!@#*]{1}/g';   

    if(!empty($_POST['numer'] && preg_match($nb, $_POST['numer']))) {
        echo "error";
    }
    else {
        echo "ok";
    }
    
    if(isset($_POST["spec"])){
        echo "Wybrano kurs: "; 
        foreach($_POST['spec'] as $spec) {
            echo $spec . " ";
        }
    }
    else {
        echo "error";
    }

?>