<html>
<head>
<meta content="en-us" http-equiv="Content-Language">
</head>
<table>
<tr>
<?php
$servername="localhost";
$dbname="crud";
$username="karan";
$password="123456";

$con=mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM info";
$result=mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result)) {
$a=$row['sno'];
$b=$row['name'];
$c=$row['classs'];
$d=$row['pic'];
echo"<td style='width: 20%' border='2px'>";
echo"<td style='color:red;'><img src='../uploads/$d' width='250' height='250'></br>&nbsp&nbspNAME:$b </br>&nbsp&nbspSURNAME:$c</td>";

echo"</td>";
}
   mysqli_close($con); 				
?>
</tr></table>

</html>