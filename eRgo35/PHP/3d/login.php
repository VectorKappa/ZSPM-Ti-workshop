<?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $u = $_POST['user'];
        $p = $_POST['pass'];
        if ($u === "user" && $p === "123") {
            echo "success!";
        }
        else {
            echo "error";
        }
    }
?>
<form action="login.php" method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Log in">
</form>