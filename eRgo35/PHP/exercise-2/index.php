<?php 
    echo "<h3>Zadanie 1</h3>";
    echo "Pierwsza linijka<br>druga linijka tekstu";

    echo "<h3>Zadanie 2</h3>";
    echo "<ul>Typy danych w PHP:<li>integer</li><li>string</li><li>boolean</li><li>float</li></ul>";

    echo "<h3>Zadanie 3</h3>";
    $a = 10; $b = 5; $c = $a - $b*2;
    echo "Wynik działania: $c";
    echo "<p style='color: blue'>Pamiętaj, PHP zna kolejność wykonywania działań!!</p>";

    echo "<h3>Zadanie 4</h3>";
    $x = 4; $y = 4; $z = 4; $w = 4;
    $x += 3; $y -= 2; $z *= 2; $w /= 3;
    echo "Wartość zmiennej \$x wynosi $x. <br>Wartość zmiennej \$y wynosi $y <br>Wartość zmiennej \$z wynosi $z <br>Wartość zmiennej \$w wynosi $w";

    echo "<h3>Zadanie 5</h3>";
    $w1 = "Zespół";
    $w2 = "Szkół";
    $w3 = "Poligraficzno-Mechanicznych";
    echo "Moja szkoła to " . $w1 . " " . $w2 . " " . $w3 . ".";
?>