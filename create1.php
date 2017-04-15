<?php
$a=$_REQUEST['Text1'];
$b=$_REQUEST['Text2'];
$target_dir = "/wamp64/www/uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg|.gif |.png |.JPEG ");


$servername="localhost";
$dbname="crud";
$username="karan";
$password="123456";

$con= mysqli_connect($servername, $username, $password, $dbname);
$query= "INSERT into info(name, classs, pic) VALUES ('$a','$b','$image')";
if(mysqli_query($con, $query)) {
       echo"New record created successfully";
      
}else{

        echo "Error: " .$query . "<br>" . mysqli_error($con);
}


?>