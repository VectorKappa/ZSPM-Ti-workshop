<?php
    session_start();
    if (isset($_SESSION['loggedin'])) {
        header('Location: /');
    }
    
    if (isset($_POST['signup'])) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['langs'] = $_POST['langs'];

        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Sign up - Portfolio</title>
    <style>
        body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            flex-direction: column;
            box-sizing: border-box;
            background: #ebebeb;
        }
        * {
            /* outline: 1px solid red; */
            font-family: Roboto;
        }
        #nav {
            height: 56px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1976d2;
        }
        #nav * {
            margin: 0 20px;
        }
        #nav span {
            font-size: 27pt;
            font-weight: 500;
        }
        #content {
            min-height: calc(100vh - 56px - 56px);
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        #footer {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: #d8d8d8;
            width: 100%;
            height: 56px;
        }
        a {
            color: white;
            text-decoration: none;
        }
        #form {
            width: 95vw;
            height: 95vh;
            background: white;
            border-radius: 10px;
            margin: 10px;
        }
        form {
            display: flex;
            justify-content: start;
            align-items: start;
            flex-direction: column;
            margin: 40px;
            font-size: 1.2em;
        }
        #buttons {
            background: #1976d2;
            font-size: 1em;
            color: white;
            border: none;
            outline: none;
            border-radius: 5px;
            width: 100px;
            height: 45px;
        }
        form input {
            border-radius: 5px;
            border: 1px solid #1976d2;
            font-size: 1em;
        }
        fieldset {
            border: 1px solid #1976d2;
            border-radius: 5px;
        }
        form * {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div id="nav">
        <span><a id="links" href="/">Portfolio</a></span>
        <div>
            <?php 
                if(!isset($_SESSION['loggedin'])) { 
                    echo "<span><a id='links' style='text-decoration: underline;' href='/signup'>Sign Up</a></span>"; 
                } 
                else { 
                    echo "<span><a id='links' href='/profile'>Profile</a></span><span><a id='links' href='/signout'>Sign Out</a></span>"; 
                }
            ?>
        </div>
    </div>
    <div id="content">
        <div id="form">
            <form action="/signup/" method="POST">
                <label for="name">Name: </label>
                <input type="text" name="name" required>
                <label for="name">Last Name: </label>
                <input type="text" name="lastname" required>
                <label for="name">Email: </label>
                <input type="email" name="email" required>
                <label for="name">Password: </label>
                <input type="password" name="password" minlength="8" required>
                <fieldset>
                    <legend><label for="gender">Gender: </label></legend>
                    <input type="radio" name="gender" value="Man" required>Man<br>
                    <input type="radio" name="gender" value="Woman" required>Woman<br>
                </fieldset>
                <fieldset>
                    <legend><label for="languages">Languages you know: </label></legend>
                    <input type="checkbox" name="langs[]" value="English" checked="checked">English<br>
                    <input type="checkbox" name="langs[]" value="German" >German<br>
                    <input type="checkbox" name="langs[]" value="Chinese" >Chinese<br>
                    <input type="checkbox" name="langs[]" value="Spanish" >Spanish<br>
                    <input type="checkbox" name="langs[]" value="French" >French<br>
                    <label for="languages">Other: </label>
                    <input type="text" name="langs[]">
                </fieldset>
                <div>
                    <input id="buttons" type="reset" value="Reset">
                    <input id="buttons" type="submit" name="signup" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
    <div id="footer">
        <span>Copyright &copy;<?php echo date("Y"); ?> Michał Czyż</span>
        <span>All Rights Reserved</span>
    </div>
</body>
</html>