<?php 
    define('DB_HOST','localhost');
    define('DB_USER','bryan');
    define('DB_PASS','123qwe');
    define('DB_NAME','php_dev');

    //create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    //CHECK CONNECTION
    if($conn->connect_error){
        die('Connection Failed' . $conn->connect_error);
    }

?>