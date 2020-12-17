<form method="POST" action="./test.php"> <!-- I have no idea why would I use $_SERVER['PHP_SELF']; -->
    First Name: <input type="text" name="fname" required> <br>
    Last Name: <input type="text" name="lname" required> <br>
    Email: <input type="email" name="email"> <br>
    <input type="submit" name="send" value="Submit" required>
    <input type="submit" name="reset" value="Reset" required>
</form>
<?php
    if (isset($_POST['send'])) {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo $_POST['fname'] . " " . $_POST['lname'] . ", " . $_POST['email'];
        }
        else {
            echo $_POST['fname'] . " " . $_POST['lname'] . ", ERROR!";
        }
        
    }
?>