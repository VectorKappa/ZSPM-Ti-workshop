<?php
    session_start();      
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /login/');
    }
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="You love food? So do we!">
    <meta name="author" content="Michał Czyż">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="media/favicon.jpg"/>
    <link rel="stylesheet" href="libs/Ergo-Framework-1.0.2-min.css">
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>FoodBook</title>
</head>
<body>
    <div id="nav">
        <div id="page-logo">
            <div id="logo">
                <img id="logo-img" src="media/favicon.jpg" height="40px">
            </div>
            <span id="title">FoodBook</span>
        </div>
        <div id="more">
            <div id="profile" onclick="window.location.href='/profile/'">
                <div id="profile-pic">
                    <img id="profile-img" src="media/favicon.jpg" height="30px">
                </div>
                <span id="name"><?php echo $name; ?></span>
            </div>
            <div id="settings" onclick="window.location.href='/logout/'">
                <i id="settings-icon" class="material-icons">logout</i>
            </div>
        </div>
    </div>
    <div id="left-navbar">
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
    </div>
    <div id="right-navbar">
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
        <div id="item">
            <div id="item-icon"></div>
            <div id="item-name"></div>
        </div>
    </div>
    <div id="content">
        <div id="posts">
            <div id="welcome">
                <h1>Hello, <?php echo $name; ?>!</h1>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
            <div id="post">
                <div id="post-header">
                    <div id="post-icon"></div>
                    <div id="post-name"></div>
                </div>
                <div id="post-content"></div>
            </div>
        </div>
        <div id="footer">
            <div id="left-footer">
                <i class="fas fa-file-code logo"></i>
                <span>Web Development</span>
            </div>
            <div id="center-footer">
                <span>Version: 1.0.0</span>
            </div>
            <div id="right-footer">
                <span>Michał Czyż &copy;2020</span>
                <span>All Rights Reserved</span>
                <span>For Educational Purposes Only</span>
            </div>
        </div>
    </div>
</body>
</html>