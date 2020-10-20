<?php
    include "genRandomString.php";
    include "beautifyArray.php";
    $table = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
    sort($table);
    foreach($table as $key){
        echo "$key<br>";
    }
    $sum = min($table)+max($table);
    echo "Min: ".$table[0]."<br>Max: ".$table[4]."<br>Sum: $sum";
    $avg = array_sum($table)/count($table);
    echo "<br>Avg: $avg";
    echo "<hr><br>";
    $arr = ["name"=>"Was?","age"=>rand(18,65),"adr"=>"bla bla bla"];
    beautifyArray($arr);
    // sort($arr); Please don't it dies
    foreach($arr as $k=>$v){
        echo "$k : $v<br>";
    }
?>