<?php 
       $host = 'localhost';
       $user = 'root';
       $password = '';
       $database = 'ojt_portfolio';
       
       $conn = mysqli_connect($host, $user, $password, $database) or die($link);

    if (!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
?>