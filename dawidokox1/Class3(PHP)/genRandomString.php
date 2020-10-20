<?php
function genRandomString($len){
    $res="";
    for($i=0;$i<$len;$i++){
        $res = $res.strval(chr(rand(65,122)));
    }
    return $res;
}
?>