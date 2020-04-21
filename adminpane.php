<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control panel</title>
    <link rel="stylesheet" href="admin.css">
    
   
</head>
<body>
    


    <form action="upload1.php" method="POST" id="form2" enctype="multipart/form-data">
        <input type="file" accept="audio/*" capture id="recorder" name="fileToUpload" id="fileToUpload">
        <input type="text" placeholder="enter the sound name" name="soundname">
        <p id="success"></p>
        <input type="submit" value="Upload Image" name="submit" >
    </form>


    <form method="POST" id="form1" action="admincal.php">
        <input id="intp" type="number" placeholder="ID" name="id" >
        <input id="intp" type="text" placeholder="Webpage Name" name="webname" >
        <input id="intp" type="text" placeholder="username"  name="username">
        <input id="intp" type="text" placeholder="question no 1" name="qs1">
        <input id="intp" type="text" placeholder="answer for qa1" name="qa1">
        <input id="intp" type="text" placeholder="question no 2" name="qs2">
        <input id="intp" type="text" placeholder="answer for qa2" name="qa2">
        <input id="intp" type="text" placeholder="question no 3" name="qs3">
        <input id="intp" type="text" placeholder="answer for qa3" name="qa3">
        <input id="intp" type="text" placeholder="question no 4" name="qs4">
        <input id="intp" type="text" placeholder="answer for qa4" name="qa4">
        <input id="intp" type="text" placeholder="question no 5" name="qs5">
        <input id="intp" type="text" placeholder="answer for qa5" name="qa5">
        <input id="intp" type="number" placeholder="passkey" name="passkey">
        <input id="intp" type="text" placeholder="soundfile" name="soundname">
        

        <button id="intp" type="submit">SUBMIT</button>

      

    </form>
    


    <script>  
            if(0==0){


                <?php $s=$_GET['check'];?>

                  
                
                var ch = <?php echo ("$s") ;?> ;

                if(ch==1){
                    document.getElementById("success").innerHTML=" upload success";

                }
            }


        /*const recorder = document.getElementById('recorder');
        const player = document.getElementById('player');
    
        recorder.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const url = URL.createObjectURL(file);
           


            player.src = url;
        });*/
   </script>




</body>
</html>