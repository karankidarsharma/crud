<?php


	
$a=$_REQUEST['Text1'];
$servername="localhost";
$password="123456";
$username="karan";
$dbname="crud";

$con=mysqli_connect($servername, $username, $password, $dbname);
$query="DELETE FROM info where sno='$a'";

if(mysqli_query($con, $query)) {

 header('location:del.php?success=1');
}else{

   header('location:del.php?success=2');
 }
?>
