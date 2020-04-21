<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>


    


    <div>
        <h1 id="head">" DARE 2 U "</h1>
        <h4 id="h4">This game consist of a series of challenges designed specially for you. Firstly you will be contacting the admin and later your challenges will be updated by him. Then the real game starts and if you complete all those given by him there's something very special waiting for you at the end. </h4>
    </div>
    <div id="whats" align="center">
        <a id="whatsapp" href="http://wa.me/917560914720">Click here to contact admin</a>
    </div>
    <div id="login">

        <h3>Enter the name given by the Admin</h3>
        <form action="userss.php" method="GET">
            <input id="data1" type="text" placeholder="yours name" name="user">
            <input id="button" type="submit" onclick="click()"  >
        </form>
        <p id="test"> </p>

    </div>


</body>
<script>
    var s;
    <?php  $out=$_GET['out']; ?>
    s = <?php echo ($out) ;?> ;
    
    if(s == 1)
    {
         document.getElementById("test").innerHTML = "Sorry ur name is not in  the database,contact admin";

        }
        
    
/*
    var s;
    
    
    function getid1() {
    s = document.getElementById("data1").value;
    control()
    
    }
    function control() {
    
    switch (s) {
    case "rahuk":
    
    window.location.href = "frontpage.php";
    break;
    default:
    document.getElementById("test").innerHTML = "Sorry ur name is not in  the database,contact admin";
    
    }
    
    }
    
    */

</script>

</html>