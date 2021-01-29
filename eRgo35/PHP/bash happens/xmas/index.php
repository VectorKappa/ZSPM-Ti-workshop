<?php
    //! PHP.NET Community Functions
    function imagettfstroketext(&$image, $size, $angle, $x, $y, &$textcolor, &$strokecolor, $fontfile, $text, $px) {
        for($c1 = ($x-abs($px)); $c1 <= ($x+abs($px)); $c1++)
            for($c2 = ($y-abs($px)); $c2 <= ($y+abs($px)); $c2++)
                $bg = imagettftext($image, $size, $angle, $c1, $c2, $strokecolor, $fontfile, $text);
       return imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $text);
    }

    header("Content-type: image/png");
    
    $width = 800;
    $height = 600;

    $img = imagecreatetruecolor($width, $height);

    $white = imagecolorallocate($img, 255, 255, 255);
    $php = imagecolorallocate($img, 137, 147, 190);
    $light = imagecolorallocate($img, 176, 179, 214);
    $dark = imagecolorallocate($img, 71, 74, 138);
    $text = imagecolorallocate($img, 35, 37, 49);

    imagefill($img, 0, 0, $white);    

    imagefilledellipse($img, 400, 300, 630, 330, $dark);

    imagefilledellipse($img, 400, 300, 600, 300, $php);

    $handel = dirname(__FILE__) . '/Handel-Gothic-Italic-Italic.ttf';

    imagettfstroketext($img, 170, 0, 195, 350, $text, $white, $handel, "php", 5);

    imagepng($img);

?>