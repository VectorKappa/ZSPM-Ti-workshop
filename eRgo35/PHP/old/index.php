<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Portfolio</title>
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
            transition: 0.2s all ease-in-out;
        }
        a:hover {
            color: #dedede;
            transition: 0.2s all ease-in-out;
        }
        p {
            width: 570px;
            height: 320px;
            background: white;
            border-radius: 30px;
            margin: 20px 20px;
        }
    </style>
</head>
<body>
    <div id="nav">
        <span><a id="links" href="/" style="text-decoration: underline;">Portfolio</a></span>
        <div>
            <?php 
                if(!isset($_SESSION['loggedin'])) { 
                    echo "<span><a id='links' href='/signup'>Sign Up</a></span>"; 
                } 
                else { 
                    echo "<span><a id='links' href='/profile'>Profile</a></span><span><a id='links' href='/signout'>Sign Out</a></span>"; 
                }
            ?>
        </div>
    </div>
    <div id="content">
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
    </div>
    <div id="footer">
        <span>Copyright &copy;<?php echo date("Y"); ?> Michał Czyż</span>
        <span>All Rights Reserved</span>
    </div>
</body>
</html>