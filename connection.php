<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'tourism';

    $connection = mysqli_connect(
        $db_host,
        $db_user,
        $db_pass,
        $db_name
    );

    if(mysqli_connect_error())
        die("Connection to database failed!" . mysqli_connect_errno());
?>