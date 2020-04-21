<?php


$name= $_POST['soundname'];
$target_dir = "music/";
$name=$_POST["soundname"];
$target_file = $target_dir . basename($_FILES["fileToUpload"][""]);
$newfilename= $name.str_replace( "","",basename($_FILES["fileToUpload"][""]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$newfilename)) {
        
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $previousPage = $_SERVER["HTTP_REFERER"];
        header('Location: '.$previousPage."?check=1");
        
} else {
        echo "Sorry, there was an error uploading your file.";
}
    
?>
