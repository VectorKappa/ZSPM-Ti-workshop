<?php

// for($i=10;$i>0;$i--){
//     print("$i<br>");
// }
// for($i=0;$i<10;$i++){
//     print("<br>".($i+1));
// }
// print("<br>");
// for($i=50;$i<101;$i+=2){
//     print("<br>$i");
// }
// for($i=0;$i<5;$i++){
//     print("<br>".rand(rand(0,1000),rand(0,1000)));
// }
// $i=0;
// echo "<br>";
// while($i<51){
//     echo $i."<br>";
//     $i++;
// }

// function get_greatest_common_divisor( $a, $b ) {
// 	$l = $a > $b ? $a: $b;
// 	$s = $a > $b ? $b: $a;
// 	$r = $l % $s;
// 	return 0 == $r ? $s : get_greatest_common_divisor( $s, $r );
// }
// print("<br>".get_greatest_common_divisor(20, 100));
function genRandomString($len){
    $res="";
    for($i=0;$i<$len;$i++){
        $res = $res.strval(chr(rand(65,122)));
    }
    return $res;
}
$table = [genRandomString(8),genRandomString(8),genRandomString(8),genRandomString(8),genRandomString(8)];
echo "<table border='1' cellpadding='5'>";
for($i=0;$i<5;$i++){
    echo "<tr>";
    echo "<td>".($i+1)."</td>";
    echo "<td>".$table[$i]."</td>";
    echo "</tr>";
}
echo "</table>";

?>