<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 8;
        $y = 10;
        $z = $x + $y;
        $x++;
        $y *= $z;
        $y--;
        echo "$x<br>$y<br>$z<hr>";
        $a = 7;
        $b = 10;
        $c = null;
        $a--;
        $c = $a / 7;
        $b++;
        $a = ($a+$c)/3;
        $b += $a;
        echo "$a<br>$b<br>$c<hr>";
        define("PI","3.14");
        $r = 89027892347589237;
        $p = PI*pow($r,2);
        echo("$p")
    ?>
</body>
</html>