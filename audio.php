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
$id=mysqli_real_escape_string($conn,$_GET['passkey']);

$sql = "SELECT   location  FROM pass where passkey = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>