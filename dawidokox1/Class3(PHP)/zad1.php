<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
       echo "Rozpoczynamy naukę <b>PHP</b><br>";
       echo "Pierwsza linijka<br>druga linijka tekstu.<br>";
       echo '<ul type="square">Typy danych w PHP: <li>integer</li><li>const</li><li>string</li><li>bool</li><li>float</li><li>array</li><li>object</li></ul><br>';
       $a = 10;$b = 5;$c = ($a-$b)*2;
       echo "Wynik działania: $c<br>";
       echo "<font color='blue'>Pamiętaj, PHP zna kolejność wykonywania działań</font><br>";
       $x=4;$y=4;$z=4;$w=4;$x+=3;$y-=2;$z*=2;$w/=3;
       echo "Wartość zmiennej \$x wynosi: $x<br>";
       echo "Wartość zmiennej \$y wynosi: $y<br>";
       echo "Wartość zmiennej \$z wynosi: $z<br>";
       echo "Wartość zmiennej \$w wynosi: $w<br>";
       $w1 = "Zespół";$w2 = "Szkół";$w3 = "Poligraficzno-Mechanicznych";
       echo "Moja szkoła to ".$w1." ".$w2." ".$w3."!";
    ?>
</body>
</html>