<?php
    define('DB_SERVER', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'php_quiz');

    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ( mysqli_connect_errno() ) {
        exit('Nie udało połączyć się z bazą danych: ' . mysqli_connect_error());
    }
?>