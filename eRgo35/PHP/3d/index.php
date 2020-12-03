<?php
    if (isset($_POST['imie']) && isset($_POST['nazwisko'])) {
        if (empty($_POST['imie'])) {
            echo "No name!";
        }
        else {
            echo "Name:".$_POST['imie'];
        }
        echo "<br>Nazwisko:".$_POST['nazwisko'];
        if (isset($_POST['kurs'])) {
            echo "Selected: ".count($_POST['kurs']);
            foreach ($_POST['kurs'] as $i) {
                echo $i." ";
            }
        }
        else {
            echo "<br>No course selected!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="index.php" method="post">
        Name<br>
        <input type="text" name="imie"><br>
        Last Name<br>
        <input type="text" name="nazwisko"><br>
        Which courses are you interested in?<br>
        <input type="checkbox" name="kurs[]" value="en">English<br>
        <input type="checkbox" name="kurs[]" value="pl">Polish<br>
        <input type="checkbox" name="kurs[]" value="es">Spanish<br>
        <input type="checkbox" name="kurs[]" value="ru">Russian<br>
        <input type="checkbox" name="kurs[]" value="fr">French<br>
        <input type="submit" value="send">
    </form>
</body>
</html>