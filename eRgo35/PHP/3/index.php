<?php
    $x = 8;
    $y = 10;
    $z = $x + $y;
    $x++;
    $y *= $z;
    $y--;
    echo "$x<br>$y<br>$z<br>";

    $a = 7;
    $b = 10;
    $c = null;
    $a--;
    $c = $a / 7;
    $b++;
    $a = ($a + $c) / 3;
    $b += $a;
    echo "$a<br>$b<br>$c<br>";

    define("PI", "3.14");
    $r = 9834214;
    $p = PI * pow($r, 2);
    echo $p;
?>