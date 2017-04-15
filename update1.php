<head>
<meta content="en-us" http-equiv="Content-Language">
<title>
</title>
<style type="text/css">
.style1 {
	border-style: solid;
	border-color: #FF0000;
	background-color: #FF0000;
	text-align: center;
	font-size: xx-large;
	color: #FFFFFF;
}
.style2 {
	border-style: solid;
	border-color: #0000FF;
	background-color: #0000FF;
	
}
.style3 {
	font-weight: bold;
}
.style5 {
	background-color: #0000FF;
}
</style>


</head>


<body>
<table style="width: 100%">
	<tr>
		<td class="style1"><strong><br>CRUD SITE<br></strong></td>
	</tr>
	<tr>
		<td class="style2">
		<form name="Form1" method="post" action="" enctype="multipart/form-data" onclick="recheck()" id="form1">
&nbsp; Enter serial No:
			<input name="Text1" id="Text1" style="width: 181px; height: 34px" type="text" value=" "><br>
			<br>&nbsp;&nbsp;&nbsp; <strong>
			<input class="style3" name="submit1" type="submit" value="Submit" ><br>
			
			
			
			</strong></form>
			
					

		&nbsp;</td>
	</tr>
	<?php
if (isset($_REQUEST['Text1'])!="")
{

$a=$_REQUEST['Text1'];

$servername="localhost";
$password="123456";
$username="karan";
$dbname="crud";

$con=mysqli_connect($servername, $username, $password, $dbname);
$query="SELECT * FROM info where sno='$a'";

$result=mysqli_query($con, $query);


while($row=mysqli_fetch_assoc($result)){
$a=$row["sno"];
$b=$row["name"];
$c=$row["classs"];
$d=$row["pic"];

}
$con=mysqli_query($con,$query);
} 

else
{
$a=" ";
$b=" ";
$c=" ";
$d="";
}
?>

</table>


<?php
if ( isset($_GET['success']) && $_GET['success'] == 2 )
{
     // treat the succes case ex:
      echo"<img src='../uploads/text2.gif' width=700px; height=30px;>";
      echo"</br>";
    
}
?>
<form method="post" enctype="multipart/form-data" action="update.php" >
<table style="width: 100%">
   <input name="Hidden1" type="hidden" value="<?php echo $a ?>" >
	<tr>
		<td class="style5">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp; NAME:</strong><input name="Text3" id="Text3" style="width: 181px; height: 34px" type="text" value="<?php echo $b ?>"><br>
			<br><strong>SURNAME:</strong><input name="Text4" id="Text4" style="width: 181px; height: 34px" type="text" value="<?php echo $c ?>"><br>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
			<?php
			//to display an error message;
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
      echo"<img src='../uploads/text1.gif' width=250px; height=30px;>";
      echo"</br>";
    echo"<img src='../uploads/text.gif' width=700px; height=30px;>";
    echo"</br>";
}
?>

		&nbsp;&nbsp;&nbsp;&nbsp;	<input name="imageUpload" type="file" id="fileupload" value="1"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="style3" name="Submit" style="width: 88px; height: 33px" type="submit" value="UPDATE">
		</td>
	</tr>
</table>
</form>

</body>

