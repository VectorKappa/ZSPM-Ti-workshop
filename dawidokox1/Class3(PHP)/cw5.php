<?php

    function ciag($z, $len){
        for($i=0;$i<$len;$i++){
            echo("$z");
        }
        echo "<br>";
    }
    ciag("@",10);
    ciag("#",8);
    ciag("$",15);
?>