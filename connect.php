
<?php

    $host = 'localhost';
    $dbname = 'testsite';
    $user = 'root';
    $password = '';

    // DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    # output = 'mysql:host=localhost; dbname=testsite

    // PDO connection
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>