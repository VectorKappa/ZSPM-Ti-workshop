<?php
    $xyz = ["Basia", 25, "kobieta", ["pon", "wt", "śr", "czw", "pt", "sob", "nd"]];
    echo $xyz[0]." ma ".$xyz[1]." lat, jest ".substr($xyz[2], 0, 6)."ą"." i jej ulubiony dzień tygodnia to ".$xyz[3][4].".";
?>
<br><br><br>
<?php
    $arr = [5,7,32,57,945,23,64,842,13,63,1,45,73];
    foreach ($arr as $item) {
        echo $item.", ";
    }
?>
<br><br><br>
<?php
    $ard = sort($arr);
    foreach ($arr as $it) {
        echo $it.", ";
    }
?>
<br><br><br>
<?php
    $b = ["imie"=>[], "nazwisko"=>[], "wiek"=>[]];
    $b["imie"] [] = "Anna";
    $b["nazwisko"] [] = "Maj";
    $b["wiek"] [] = 25;

    $b["imie"] [] = "Ewa";
    $b["nazwisko"] [] = "Nowak";
    $b["wiek"] [] = 29;

    $b["imie"] [] = "Tomasz";
    $b["nazwisko"] [] = "Kowalski";
    $b["wiek"] [] = 32;

    echo "<pre>";
    print_r($b);
    echo "</pre>";
?>