<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<audio id="player" controls></audio>
<input type="file" accept="audio/*" capture id="recorder">
    
<script>
   
    const recorder = document.getElementById('recorder');
    const player = document.getElementById('player');
    
    recorder.addEventListener('change', function(e) {
        const file = e.target.files[0];
        const url = URL.createObjectURL(file);
        // Do something with the audio file.
        player.src = url;
    });
</script>
    
</body>
</html>