<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Could'nt connect to database".mysqli_connect_error());
}

 ?>
