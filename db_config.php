<?php 
       $host = 'db4free.net';
       $user = 'ojtportfolio';
       $password = 'portfolio123';
       $database = 'ojt_portfolio';
       
       $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
?>