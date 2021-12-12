<?php

    function connect()
    {
    $conn = new mysqli("localhost","root","","book_shop");
    if($conn->connect_errno)
    {
        die("Connection failed due to ".$conn->connect_error);
    }
    return $conn;
    }

?>
