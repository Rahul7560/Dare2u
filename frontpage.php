<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="front.css">
</head>

<body>


<?php

$id= $_GET['id'];
include 'rahul.php';

/*
$sb11= $row["qa1"] ;
$sb23= $row["qa2"] ;
$sb34= $row["qa3"] ;
$sb44= $row["qa4"] ;
$sb55= $row["qa5"] ;

*/

?>
 <div >
        <H4 class="vibrate">WELCOME <?php echo strtoupper($row["name"]); ?></H4>
    </div>
    <div align="center" id="block1">
        <p id="main">Once again a warm welcome .Given below there are some challenges specially designed for you
            . Inoder to make the game smoother for u there are some rules and regulation.After reading rules and
            regulation click on agree for starting the challenges </p>
        <h2>Rules and Regulation</h2>
        <div>
            <li>Don't close the window after the games starts.You can minimize it or swap the browser tabs
            </li>
            <li>
                The challenge is not time bounded
            </li>
            <li>Please don't disclose the information related  to suprise .Let others too crack it.</li>
            <li>
                In case of any error or doubt please contact the admin
            </li>
        </div>
        <button type="button" id="agree" onclick="submitt1()">Agree</button>
    </div>
    <div id="block2">
        <h2 class="challenge" align="center"> Number 1/5</h2>
        <p class="Question"> <?php echo $row["qs1"]; ?> </p>
        <div id="flx">
        <input  type="text"  id="submit2" class="submit" placeholder="Enter ur ans:"></input>
        <button class="submitbutt" onclick="submitt2()"  >SUBMIT</button>
        <p align="center" id="wrong1"></p>
        </div>      

    </div>
    <div id="block3">
        <h2 class="challenge" align="center"> Number 2/5</h2>
        <p class="Question"> <?php echo $row["qs2"]; ?> </p>
        <div id="flx">
        <input  type="text"  id="submit3" class="submit" placeholder="Enter ur ans:"></input>
        <button class="submitbutt" onclick="submitt3()" >SUBMIT</button>
        <p align="center" id="wrong2"></p>
        </div> 
    </div>
    <div id="block4">
        <h2 class="challenge" align="center"> Number 3/5</h2>
        <p class="Question"> <?php echo $row["qs3"]; ?> </p>
        <div id="flx">
        <input  type="text"  id="submit4" class="submit" placeholder="Enter ur ans:"></input>
        <button class="submitbutt" onclick="submitt4()">SUBMIT</button>
        <p align="center" id="wrong3"></p>
        </div> 
    </div>
    <div id="block5">
         <h2 class="challenge" align="center"> Number 4/5</h2>
        <p class="Question"> <?php echo $row["qs4"]; ?> </p>
        <div id="flx">
        <input  type="text"  id="submit5" class="submit" placeholder="Enter ur ans:"></input>
        <button class="submitbutt" onclick="submitt5()">SUBMIT</button>
        <p align="center" id="wrong4"></p>
        </div> 
    </div>
    <div id="block6">
        <h2 class="challenge" align="center"> Number 5/5</h2>
        <p class="Question"> <?php echo $row["qs5"]; ?> </p>
        <div id="flx">
        <input  type="text"  id="submit6" class="submit" placeholder="Enter ur ans:"></input>
        <button class="submitbutt"onclick="submitt6()">SUBMIT </button>
        <p align="center" id="wrong5"></p>
        </div> 
    </div>
    <div id="block7" >
        <h3 id="cong" 
        >CONGRATULATION</h3>
        <h4 id="quote "> R u ready to get ur suprise gift. U have to take screen short of this window and send to the admin. He will give u the pass key  for entering to suprise gift. </h4>
        <h2 class="challenge" align="center"> Requirements </h2>
        <form method="get" action=" final.php ">
            <div align="center">
                <li>U have to connect headset before submitting the key
                </li>
                <li>
                Some time it's take 2-5 seconds to load next page depends on ur network speed
                </li>
                 <li>Please dont refresh or reload page </li>
                 <li>
                In case of any error or doubt please contact  the admin
                </li>
            </div>
            <div id="flux2">
            <input type="text" placeholder="Enter the pass key " class="submit" name="passkey" ></input>
            <input type="submit" class="submitbutt">

            </div>
            
        </form>
    </div>
    


    <script>
        document.getElementById("block2").style.display = "none";
        document.getElementById("block3").style.display = "none";
        document.getElementById("block4").style.display = "none";
        document.getElementById("block5").style.display = "none";
        document.getElementById("block6").style.display = "none";
        document.getElementById("block7").style.display = "none";


        var sb1;
        var sb2,sb3,sb4,sb5;

        var sb11= <?php echo json_encode($row["qa1"]) ;?> ;
        var sb22= <?php echo json_encode($row["qa2"] );?> ;
        var sb33= <?php echo json_encode($row["qa3"] );?> ;
        var sb44= <?php echo json_encode($row["qa4"] );?> ;
        var sb55= <?php echo json_encode($row["qa5"] );?> ;


        

        function submitt1() {
            document.getElementById("block1").style.display = "none";
            document.getElementById("block2").style.display = "block";

        }
        function submitt2() {

            sb1 = document.getElementById("submit2").value;
            if( sb11==sb1)
            {

                document.getElementById("block2").style.display = "none";
                document.getElementById("block3").style.display = "block";
            }
            else{
                document.getElementById("wrong1").innerHTML="Wrong answeer";
            }

        }



        function submitt3() {

            sb2 = document.getElementById("submit3").value;
            if( sb22==sb2)
            {

                document.getElementById("block3").style.display = "none";
                document.getElementById("block4").style.display = "block";
            }
            else{
                document.getElementById("wrong2").innerHTML="Wrong answeer";
            }


        }
        function submitt4() {

            sb3 = document.getElementById("submit4").value;
            if( sb33==sb3)
            {

                document.getElementById("block4").style.display = "none";
                document.getElementById("block5").style.display = "block";
            }
            else{
                document.getElementById("wrong3").innerHTML="Wrong answeer";
            }


        }
        function submitt5() {

            sb4 = document.getElementById("submit5").value;
            if( sb44==sb4)
            {

                document.getElementById("block5").style.display = "none";
                document.getElementById("block6").style.display = "block";
            }
            else{
                document.getElementById("wrong4").innerHTML="Wrong answeer";
            }

        }
        function submitt6() {

            sb5 = document.getElementById("submit6").value;
            if( sb55==sb5)
            {

                document.getElementById("block6").style.display = "none";
                document.getElementById("block7").style.display = "block";
            }
            else{
                document.getElementById("wrong5").innerHTML="Wrong answeer";
            }

        }


            






    </script>

</body>

</html>