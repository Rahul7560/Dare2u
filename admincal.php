<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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






                $id=$_POST['id'];
                $webname=$_POST['webname'];
                $username=$_POST['username'];
                $qa1=$_POST['qa1'];
                $qa2=$_POST['qa2'];
                $qa3=$_POST['qa3'];
                $qa4=$_POST['qa4'];
                $qa5=$_POST['qa5'];
                $qs1=$_POST['qs1'];
                $qs2=$_POST['qs2'];
                $qs3=$_POST['qs3'];
                $qs4=$_POST['qs4'];
                $qs5=$_POST['qs5'];
                $passkey=$_POST['passkey'];
                $soundname=$_POST['soundname'];



                $dar1= " INSERT INTO dare1 (id, name, qs1, qs2, qs3, qs4, qs5, qa1, qa2, qa3, qa4, qa5,gift) VALUES ($id,'$webname','$qs1','$qs2','$qs3','$qs4','$qs5','$qa1','$qa2','$qa3','$qa4','$qa5','0') ";
                $pass= " INSERT INTO pass (name,passkey, location) VALUES ('$webname',$passkey,'$soundname') ";
                $user= " INSERT INTO users (name, id) VALUES ('$username',$id) ";



                $conn->query($dar1);
                $conn->query($pass);
                $conn->query($user);


               


                
                
                
            ?>
        
    
</body>
</html>