<?php
    session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['name']." - Portfolio"?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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
        #profile {
            width: 70vw;
            height: 60vh;
            background: white;
            border-radius: 20px;
            margin: 10px;
            background: white;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #profile > * {
            margin: 0 10px;
        }
        #pic {
            background: #ebebeb;
            width: 10vw;
            height: 10vw;
            border-radius: 100%;
        }
        #name {
            font-size: 25pt;
        }
        #showP {
            display: inline;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    <script>
        function pass(i) {
            if (document.getElementById("passH").style.display == "inline") {
                document.getElementById("passH").style.display = "none";
                document.getElementById("passS").style.display = "inline";
            }
            else {
                document.getElementById("passS").style.display = "none";
                document.getElementById("passH").style.display = "inline";
            }
        }
    </script>
</head>
<body>
    <div id="nav">
        <span><a id="links" href="/">Portfolio</a></span>
        <div>
            <?php 
            if (!isset($_SESSION['name'])) { 
                echo "<span><a id='links' href='/signup'>Sign Up</a></span>"; 
            } 
            else { 
                echo "<span><a id='links' href='/profile' style='text-decoration: underline;'>Profile</a></span><span><a id='links' href='/signout'>Sign Out</a></span>"; }?>
        </div>
    </div>
    <div id="content">
        <div id="profile">
            <div id="pic"></div>
            <div id="data">
                <div id="name">
                <?php
                    echo $_SESSION['name']." ";
                    echo $_SESSION['lastname'];
                ?>
                </div>
                <div id="email">
                <?php
                    echo $_SESSION['email'];
                ?>
                </div>
                <div id="langs">
                Languages:
                <i>
                <?php
                    foreach ($_SESSION['langs'] as $i) {
                        echo $i." ";
                    }
                ?>
                </i>
                </div>
                <div id="gender">
                Gender: 
                <i>
                <?php
                    echo $_SESSION['gender'];
                ?>
                </i>
                </div>
                <div id="pass">
                <div id="showP" onclick="pass()">Password:</div> 
                <i id="passH" style="display: inline;">
                    ********
                </i>
                <i id="passS" style="display: none;">
                <?php
                    echo $_SESSION['password'];
                ?>
                </i>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <span>Copyright &copy;<?php echo date("Y"); ?> Michał Czyż</span>
        <span>All Rights Reserved</span>
    </div>
</body>
</html>

<?php
    echo $_SESSION['name']."<br>";
    echo $_SESSION['lastname']."<br>";
    echo $_SESSION['email']."<br>";
    echo password_hash($_SESSION['password'], PASSWORD_DEFAULT)."<br>";
    echo $_SESSION['gender']."<br>";
    echo "<pre>";
    print_r($_SESSION['langs']);
    echo "</pre>";
?>