<?php
    if (isset($_POST['submit'])) {
        if (!empty($_FILES['picture'])) {

            if (pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION) !== "png") {
                echo "Error";
            }
            else {

                $path = "uploads/";
                $path = $path . basename($_FILES['picture']['name']);
    
                if (move_uploaded_file($_FILES['picture']['tmp_name'], $path)) {
                    echo "The file ". basename($_FILES['picture']['name']) . " has been uploaded!";
                } 
                else {
                    echo "Error!";
                }
            }
        }
    }
?>