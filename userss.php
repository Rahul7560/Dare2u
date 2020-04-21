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

$users=mysqli_real_escape_string($conn,$_GET['user']);

$sql = "SELECT   * FROM users WHERE  name = '$users'";
$result = $conn->query($sql);
$numrows = mysqli_num_rows($result);

$row = $result->fetch_assoc();

if($numrows==0){
    $out="1";
    header('Location: HOME.php?out='.$out);
}
else{

    $url="frontpage.php?id=".$row['id'];
    header('Location: '.$url);


}




?>