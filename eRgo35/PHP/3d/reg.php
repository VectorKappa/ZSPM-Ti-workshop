<?php

    if (isset($_POST['form'])) {
        if (preg_match('/^[A-ZĄ-Ż]{1}[a-zą-ż]{1,}$/u', $_POST['name'])) {
            echo "| Last Name Recieved: ".$_POST['name']." |<br>";
        }
        else {
            echo "| Last Name Recieved: <b>INVALID NAME</b> |<br>";
        }

        if (preg_match('/^\d{1,3}$/', $_POST['age'])) {
            echo "| Age Recieved: ".$_POST['age']." |<br>";
        }
        else {
            echo "| Age Recieved: <b>INVALID AGE</b> |<br>";
        }

        if (preg_match('/^\w{1,}$/', $_POST['job'])) {
            echo "| Occupation Recieved: ".$_POST['job']." |<br>";
        }
        else {
            echo "| Occupation Recieved: <b>INVALID OCCUPATION</b> |<br>";
        }
    }

?>
<form action="/reg.php" method="POST">
    Last Name: <input type="text" name="name"> <br>
    Age:  <input type="text" name="age"> <br>
    Occupation: <input type="text" name="job"> <br><br>
    <input type="submit" name="form" value="Submit"> <input type="reset" value="Reset">
</form>