<?php
function OpenCon()
{
    $servername = '127.0.0.1';
    $username = "root";
    $password = "";
    $dbname = "concerts";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname)
    or die("Connect failed: %s\n". $conn -> error);
    return $conn;
    }
    function CloseCon($conn)
    {
    $conn -> close();
    }
    ?>