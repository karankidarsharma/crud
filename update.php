<?php
$x=$_REQUEST['Hidden1'];
$a=$_REQUEST['Text3'];
$b=$_REQUEST['Text4'];



    $target_dir = "/wamp64/www/uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
          header('location:update1.php?success=2');

    } else {
        echo "Sorry, there was an error uploading your file.";
// to redirect on other page and display a message
        header('Location: update1.php?success=1');
    }

    $image=basename( $_FILES["imageUpload"]["name"],".jpg|.gif |.png |.JPEG |");
    
    
$servername="localhost";
$dbname="crud";
$username="karan";
$password="123456";

$con= mysqli_connect($servername, $username, $password, $dbname);
$query= "UPDATE info SET name='$a', classs='$b', pic='$image' where sno='$x' ";
if(mysqli_query($con, $query)) {
       echo"Record Updated successfully";
      
      
}else{

        echo "Error: " .$query . "<br>" . mysqli_error($con);
}


  
?>