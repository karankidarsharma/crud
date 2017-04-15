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
$n=0;
while($row = mysqli_fetch_assoc($result)) {

if($n%4==0)

{
 echo"<tr>";
 }
$a=$row['sno'];
$b=$row['name'];
$c=$row['classs'];
$d=$row['pic'];

echo"<td style='width: 20%;color:red;border:2px solid black;align:center;' >
</br>Product No:$a </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='../uploads/$d' alt=' NO IMAGE' width='250' height='250' align='middle' ></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNAME:$b </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSURNAME:$c

</td>";
$n++;
echo"";
}
   mysqli_close($con); 	
   			
?>
</tr></table>

</html>