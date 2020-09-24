<?php
    session_start();

    define('DB_SERVER', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'foodbook');

    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ( mysqli_connect_errno() ) {
        exit('Failed to connect to Database: ' . mysqli_connect_error());
    }
?>