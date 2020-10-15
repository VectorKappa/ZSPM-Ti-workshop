<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizytówka</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #e4e4e4;
            font-family: Roboto;
        }
        #wrapper {
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
            width: 700px;
            height: 400px;
            border-radius: 15px;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #img {
            border-radius: 20px;
            width: 40%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #id {
            border-radius: 20px;
            width: 60%;
            height: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: column;
        }
        .face {
            height: 90%;
            width: 90%;
            object-fit: cover;
            border-radius: 10px;
        }
        .logo {
            width: 10vh;
            height: 10vh;
        }
        #details, #details2, #details3 {
            height: 3vh;
            width: 90%;
        }
        #details2, #details3 {
            font-size: 1.3vh;
        }
        #logo {
            height: 30%;
            width: 90%;
        }
        .name {
            font-size: 2.5vh;
        }
        .occupation {
            font-size: 1.5vh;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="id">
            <div id="logo">
                <img class="logo" src="img/logo.png">
            </div>
            <div id="details">
                <div class="name">{{ name }}</div>
                <div class="occupation">{{ occupation }}</div>
            </div>
            <div id="details2">
                <div id="phone">Phone: {{ telephone }}}</div>
                <div id="email">Email: {{ email }}</div>
                <div id="website">Website: {{ website }}</div>
            </div>
            <div id="details3">
                <div id="address">{{ office_address }}</div>
                <div id="address-more">{{ address_city }}</div>
            </div>
        </div>
        <div id="img">
            <img class="face" src="img/person_1.jfif">
        </div>
    </div>
</body>
</html>