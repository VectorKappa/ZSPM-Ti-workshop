<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Send help
        define("PI", "4");
        echo '<b><font color="green" size="36px">Help me</font></b><br>';
        print '<b><font color="red" size="36px">Srsly</font></b><br>';
        $num = 5.54;
        echo (int) $num;
        echo "<br>";
        $str = "123abc456";
        settype($str,"integer");
        echo "$str";
        phpinfo();
    ?>
    
</body>
</html>