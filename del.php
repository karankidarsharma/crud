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
	font-size: small;
}
.style4 {
	color: #FFFFFF;
	font-size: x-large;
}
</style>

             <!--CREATE DIALOGUE BOX using script-->
<script>
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}

</script>
</head>

<body>
<table style="width: 100%">
	<tr>
		<td class="style1"><strong><br>CRUD SITE<br></strong></td>
	</tr>
	<tr>
		<td class="style2">
		<form method="post" action="del1.php" enctype="multipart/form-data" Onclick="ConfirmDelete()">
&nbsp; <br>
			&nbsp;<span class="style4">ENTER&nbsp; S.No. : </span>&nbsp;<input name="Text1" style="width: 163px; height: 29px" type="text"><br>&nbsp;&nbsp;&nbsp; 
			<strong>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="style3" name="submit1" type="submit" value="Delete" style="width: 78px" ><br>
			
			
			
			</strong></form>
			<?php
				if(isset($_GET['success']) && $_GET['success'] == 1)
			{
				echo "Record Deleted successfully ";
			}	
?>
<?php

if(isset($_GET['success']) && $_GET['success'] == 2)
  {
  
     echo "RETRY TO DELETE RECORD";
  }

?>

</tr>
</table>
</body>