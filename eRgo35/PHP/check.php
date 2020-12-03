<?php
    $ans = [
        'first' => '4', 
        'second' => '6', 
        'third' => '8'
    ];

    $sum = 0;

    if ($_POST['first'] == $ans['first']) {
        echo "1. OK<br>";
        $sum++;
    }
    else {
        echo "1. Błąd. Poprawna odpowiedź to: <b>".$ans['first']."</b><br>";
    }
    if ($_POST['second'] == $ans['second']) {
        echo "2. OK<br>";
        $sum++;
    }
    else {
        echo "2. Błąd. Poprawna odpowiedź to: <b>".$ans['second']."</b><br>";
    }
    if ($_POST['third'] == $ans['third']) {
        echo "3. OK<br>";
        $sum++;
    }
    else {
        echo "3. Błąd. Poprawna odpowiedź to: <b>".$ans['third']."</b><br>";
    }
    echo "Liczba punktów: <b>$sum</b>";
?> 