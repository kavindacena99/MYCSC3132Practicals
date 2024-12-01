<?php
    /*

    define('SERVERNAME', '127.0.0.1');
    define('USERNAME', 'root');
    define('PASSWORD', 'mariadb');
    define('DBNAME', 'web');
    */

    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASS');
    $database = getenv('DB_NAME');

    try {
        $connect = mysqli_connect($servername,$username,$password,$database);
        if (!$connect) {
            die("connection failed".mysqli_connect_error());
        } 
        else {
            echo "Database is connected successfully" . "<br><br>";
        }
    } 
    catch (Exception $e) {
        die($e->getMessage());
    }
?>