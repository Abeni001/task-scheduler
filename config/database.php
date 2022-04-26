<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Abeni');
    define('DB_PASS', 'abeni@123');
    define('DB_NAME', 'task');

    //create connection
    
    $con= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // check connection
    if($con->connect_error){
        die('connection failed'.$con->connect_error);
    }

    // echo 'Connected'

?>