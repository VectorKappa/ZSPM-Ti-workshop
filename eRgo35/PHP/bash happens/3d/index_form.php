<?php
    
    if (isset($_POST['form'])) {
        if (preg_match('/^\d{2}-\d{3}$/', $_POST['post'])) {
            echo "| First Name Recieved: ".$_POST['fname']." |<br>";
            echo "| Last Name Recieved: ".$_POST['lname']." |<br>";
            echo "| Postal Code Recieved: ".$_POST['post']." |<br><br>";
        }
        else {
            echo "| First Name Recieved: ".$_POST['fname']." |<br>";
            echo "| Last Name Recieved: ".$_POST['lname']." |<br>";
            echo "| Postal Code Recieved: <b>INVALID POSTAL CODE</b> |<br><br>";
        }
    }

?>
<form action="/" method="POST">
    First Name: <input type="text" name="fname"> <br>
    Last Name:  <input type="text" name="lname"> <br>
    Postal Code: (__-___)  <input type="text" name="post"> <br><br>
    <input type="submit" name="form" value="Submit"> <input type="reset" value="Reset">
</form>