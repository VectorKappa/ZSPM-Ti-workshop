<?php

    @require "../libs/auth.php";

    if (isset($_SESSION['loggedin'])) {
        header('Location: /');
    }

    $error = "";

    if (isset($_POST['login'])) {

        $email = $password = "";
        
        if (empty(trim($_POST['email'])) && empty(trim($_POST['password']))) {
            $error = "Please enter email and password.";
        }
        else if(empty(trim($_POST['email']))) {
            $error = "Please enter email.";
        }
        else if (empty(trim($_POST['password']))) {
            $error = "Please enter password";
        }
        else {
            $sql = 'SELECT id, password, name, lastname FROM users WHERE email = ?';
            
            if ($pre = $db->prepare($sql)) {
                $pre->bind_param('s', $_POST['email']);
                $pre->execute();
                $pre->store_result();
                if ($pre->num_rows > 0) {
                    $pre->bind_result($id, $password, $name, $lastname);
                    $pre->fetch();
                
                    if (password_verify($_POST['password'], $password)) {
                        session_regenerate_id();
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['name'] = $name;
                        $_SESSION['lastname'] = $lastname;
                        $_SESSION['id'] = $id;
                        header('Location: /');
                    }
                    else {
                        $error = "Invalid email or password!";
                    }
                }
                else {
                    $error = "Invalid email or password!";
                }
            }
            else {
                $error = "Oops! Something went wrong. Please try again later.";
            }
            $pre->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="You love food? So do we!">
    <meta name="author" content="Michał Czyż">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../media/favicon.jpg"/>
    <link href="../libs/Ergo-Framework-1.0.2-min.css" rel="stylesheet">
    <title>Log in - FoodBook</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #ebebeb;
        }
        #wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        #form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60vw;
            height: 40vh;
        }
        #left-pane {
            width: 55%;
            height: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin: 2em;
        }
        #right-pane {
            background: white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            width: 45%;
            height: 100%;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .heading {
            font-size: 4.7vw;
            line-height: 0;
            font-weight: 600;
            color: green;
        }
        .motto {
            font-size: 2.2vw;
            line-height: 0;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }
        #form-wrapper * {
            margin: 5px 0;
        }
        #form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 100%;
            margin: 20px;
        }
        .user {
            box-sizing: border-box;
            width: 90%;
            height: 20%;
            border-radius: 10px;
            border: 1px solid rgb(161, 161, 161);
            outline: none;
            font-size: 1.2vw;
            padding: 0 15px;
        }
        .user:focus {
            outline: none;
            border: 1px solid limegreen;
        }
        .loginBtn {
            width: 90%;
            height: 20%;
            border-radius: 10px;
            background: limegreen;
            outline: none;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 1.2vw;
            transition: background 0.2s ease-in-out;
        }
        .loginBtn:hover, .loginBtn:active {
            background: rgb(41, 165, 41);
            transition: background 0.2s ease-in-out;
        }
        .custom {
            background: rgb(161, 161, 161);
            width: 90%;
            height: 1px;
            outline: none;
            margin: 30px 0;
        }
        .reg {
            background: rgb(61, 122, 236);
            width: 60%;
        }
        .reg:hover, .reg:active {
            background: rgb(52, 105, 202);
            transition: background 0.2s ease-in-out;
        }
        #error {
            color: red;
            margin: 0.5vw 0 -1.5vw 0;
            font-size: 0.9vw;
            height: 0.9vw;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="form">
            <div id="left-pane">
                <h1 class="heading">FoodBook</h1>
                <h2 class="motto">You love food? So do we!</h2>
            </div>
            <div id="right-pane">
                <div id="form-wrapper">
                    <form action="/login/" method="POST">
                        <input class="user" name="email" placeholder="Email" type="email">
                        <input class="user" name="password" placeholder="Password" type="password">
                        <button class="loginBtn" type="submit" name="login">Log In</button>
                        <span id="error"><?php echo $error ?></span>
                    </form>
                    <hr class="custom">
                    <button class="loginBtn reg" onclick="window.location.href = '/register/';">Create New Account</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>