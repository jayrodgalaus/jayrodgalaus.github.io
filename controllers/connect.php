<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jsg";
// $servername = "localhost";
// $username = "u809621508_jsg";
// $password = "Lt!k!/zadZ&2";
// $db = "u809621508_jsg";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connected successfully";
}

?>