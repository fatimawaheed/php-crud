<?php 
    function Connect() 
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "mc210402189";
        $conn = new mysqli($host, $user, $password, $database) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }

    function Close($conn)
    {
        $conn -> close();
    }
?>