<?php 
    $people = [
        ["name" => "Martha Jones", "occupation" => "Recepionist", "phone" => "202-555-0125", "email" => "marthajones@undefined.com", "website" => "www.jonesconsulting.com", "address" => "564 Kildeer Drive", "address_more" => "Boynton Beach, Florida, USA"],
        ["name" => "Joe N Warner", "occupation" => "Senior Web Developer", "phone" => "202-555-5323", "email" => "joewarner@undefined.com", "website" => "www.joewarner.com", "address" => "3938 Beech Street", "address_more" => "Walnut Creek, California, USA"],
        ["name" => "Jackie Kent", "occupation" => "Project Manager", "phone" => "202-555-5431", "email" => "jackiekent@undefined.com", "website" => "www.kentmanagement.com", "address" => "445 Metz Lane", "address_more" => "Woburn, Massachusetts, USA"],
        ["name" => "Jean Handy", "occupation" => "Junior Web Developer", "phone" => "202-555-6324", "email" => "jeanhandy@undefined.com", "website" => "www.jhandy.com", "address" => "2896 Hickory Heights Drive", "address_more" => "Baltimore, Maryland, USA"],
        ["name" => "Edna Huerta", "occupation" => "Accountant", "phone" => "202-555-5234", "email" => "ednahuerta@undefined.com", "website" => "www.ednahuerta.com", "address" => "2615 Everette Alley", "address_more" => "Mohler, Washington, USA"]
    ];
    $x = rand(0, 4);
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
                <div class="name"><?php echo $people[$x]["name"];?></div>
                <div class="occupation"><?php echo $people[$x]["occupation"];?></div>
            </div>
            <div id="details2">
                <div id="phone">Phone: <?php echo $people[$x]["phone"];?></div>
                <div id="email">Email: <?php echo $people[$x]["email"];?></div>
                <div id="website">Website: <?php echo $people[$x]["website"];?></div>
            </div>
            <div id="details3">
                <div id="address"><?php echo $people[$x]["address"];?></div>
                <div id="address-more"><?php echo $people[$x]["address_more"];?></div>
            </div>
        </div>
        <div id="img">
            <img class="face" src="img/person_<?php echo $x+1; ?>.jfif">
        </div>
    </div>
</body>
</html>