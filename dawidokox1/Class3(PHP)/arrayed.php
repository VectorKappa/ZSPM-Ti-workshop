<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        function getAge(){
            return rand(18,65);
        }
        $person = [
            "name"=>["Liam","Olivia","Noah","Emma","Oliver","Ava","William","Sophia","Elijah","Isabella","James","Charlotte","Benjamin","Amelia","Lucas","Mia","Mason","Harper","Ethan","Evelyn"],
            "age"=>[getAge(),getAge(),getAge()],
            "title"=>["Server Master","Programming God","Idiot"]
        ];
    ?>
<div id="container">
<table>
    <tr>
        <th></th>
        <th>Staff</th>
        <th></th>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo($person["name"][rand(0,19)])?></td>
        <td><?php echo($person["name"][rand(0,19)])?></td>
        <td><?php echo($person["name"][rand(0,19)])?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?php echo($person["age"][0])?></td>
        <td><?php echo($person["age"][1])?></td>
        <td><?php echo($person["age"][2])?></td>
    </tr>
    <tr>
        <th>Title</th>
        <td><?php echo($person["title"][rand(0,2)]) ?></td>
        <td><?php echo($person["title"][rand(0,2)]) ?></td>
        <td><?php echo($person["title"][rand(0,2)]) ?></td>
    </tr>
</table>
</div>

    
</body>
</html>