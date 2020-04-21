<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="id13273657_dare2u";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT   id, name, qs1, qs2, qs3, qs4, qs5, qa1, qa2, qa3, qa4, qa5, gift  FROM dare1 where id= '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>