<?php
// seems to work in login.php and insertdata.php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sides";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error()); 
}

?>