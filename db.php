<?php
$servername = "localhost";
$username = "bbcap25_6"; 
$password = "********"; //the password goes here
$dbname = "wp_bbcap25_6"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
