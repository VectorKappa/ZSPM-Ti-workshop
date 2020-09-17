<?php
    $bezwgl = -4;
    echo 'Wartość bezwzględna z '.$bezwgl.' to: '.abs($bezwgl)."<br>";
    $liczby = Array();
    for($i=0;$i<25;$i++){
        array_push($liczby, rand(-100,100));
    }
    echo "Maksymalna liczba: ".max($liczby)."; Minimalna liczba: ".min($liczby)."<br>";
    echo "sqrt of 25 is: ".sqrt(25)."<br>";
    echo "pow 2 to 5th is: ".pow(2,5)."<br>";
    $a = "24.".rand(0,99999999);
    settype($a, "float");
    echo "Zaokrąglanie: ".round($a);
    echo "<br>Zaokrąglanie do trzech: ".round($a,3);
    echo "<br>Potęgowanie: ".round($a)**2;
    echo "<br>".intdiv(2353523, 13513);
    echo "<br>";
    echo is_numeric("5")."<br>";
    var_dump($liczby);
    echo "<br>".str_rot13("Test string of NULL")."<br>";
    echo "<br><hr><br>";
    $txt = str_rot13("Test string of NULL");
    echo "Długość str: ". strlen($txt)."<br>";
    $pierwsza = substr($txt,-3,3); //$txt[-1].$txt[-2].$txt[-3];
    echo $pierwsza;
    echo "<br>ToUpper: ". strtoupper($txt)."<br>";
    print_r(explode(" ",$txt));
    echo "<br>".phpversion();
?>