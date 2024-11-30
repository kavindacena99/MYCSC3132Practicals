<?php
    define('SERVERNAME', '127.0.0.1');
    define('USERNAME', 'root');
    define('PASSWORD', 'mariadb');
    define('DBNAME', 'studentdb');
    try {
        $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
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