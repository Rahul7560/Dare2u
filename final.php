<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift</title>
    <link rel="stylesheet" href="final.css">
    <link async href="http://fonts.googleapis.com/css?family=Atomic%20Age" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php include 'audio.php'

    
    
?>

<div class="neon-text">yours lovingly Rahul</div>
<div align="center">
<button  type="button" id="button" onclick="playAudio()">START</button></div>
<p id="feedback" align="center"> "Please sent your valuable  feedback and suggestion.Hope u enjoyed it."</p> 
<audio id="audio" src="music/<?php echo $row['location'];?>" type="audio/mpeg"></audio>



<script>
    var d
    document.getElementById("feedback").style.display="none";

    function playAudio() {
        var x = document.getElementById("audio"); 
        d = document.getElementById("audio").duration;
        x.play();
        document.getElementById("button").style.display = "none";
        document.getElementById("feedback").style.display="block";
        <?php 

        $sql = "UPDATE pass  SET location='0'  where passkey = $id";
        $conn->query($sql);

        ?>

        }

    


</script>





    
</body>
</html>