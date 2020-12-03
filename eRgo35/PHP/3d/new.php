<?php
    if (isset($_POST['c'])) {
        echo "Good";
    }
    else {
        echo "Error";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new.php" method="post">
        Name <input type="text" name="name"><br><br>
        Age <input type="text" name="age"><br><br>
        <input type="checkbox" name="c">Accept<br><br>
        <input type="submit" value="send">
    </form>
</body>
</html>