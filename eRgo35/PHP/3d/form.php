<?php

    if (isset($_POST['form'])) {
        if (preg_match('/^[A-ZĄ-Ż]{1}[a-zą-ż]{1,}$/u', $_POST['name'])) {
            echo "| Name Recieved: ".$_POST['name']." |<br>";
        }
        else {
            echo "| Name Recieved: <b>INVALID NAME</b> |<br>";
        }

        if (preg_match('/^\d{1,3}$/', $_POST['age'])) {
            echo "| Age Recieved: ".$_POST['age']." |<br>";
        }
        else {
            echo "| Age Recieved: <b>INVALID AGE</b> |<br>";
        }

        if (preg_match('/^([\w\W]{1,})@(\w{1,}).(\w{1,})$/u', $_POST['email'])) {
            echo "| Email Recieved: ".$_POST['email']." |<br>";
        }
        else {
            echo "| Email Recieved: <b>INVALID EMAIL</b> |<br>";
        }
    }

?>
<form action="/form.php" method="POST">
    Name: <input type="text" name="name" required> <br>
    Age:  <input type="text" name="age" required> <br>
    Email: <input type="text" name="email" required> <br><br>
    <input type="checkbox" name="eula" required> I accept collecting all of my personal data <br><br>
    <input type="submit" name="form" value="Submit"> <input type="reset" value="Reset">
</form>