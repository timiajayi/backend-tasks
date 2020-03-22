<?php

function OpenCon()
{
        $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "tizzyme2001";
    $dbname = "backend-task1-form";

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die("connect failed:%s\n". $conn -> error);

    return $conn;
} 

function CloseCon($conn)
{
    $conn -> close();
}

?>