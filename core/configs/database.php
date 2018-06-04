<?php

$server     = "localhost";
$username   = "root";
$password   = "";

$database   = "milePact";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->error){
    echo $conn->error;
}

?>