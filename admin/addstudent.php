<!DOCTYPE html>
<html style="background-color: yellow;">
<head>
	<title>Add student</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
	<a href="admindash.php" style="float: left; color: white; text-decoration: none; margin-left: 30px; ">Back to Dash</a>
	<h1>Welcome to Admin Dashboard</h1>
</div>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
	<table border="1" align="center" style="margin-top: 50px;">
		<tr>
			<td>Rollno</td>
			<td><input type="text" name="rollno" required="required"></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" required="required"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" required="required"></td>
		</tr>
		<tr>
			<td>Parent Contatct</td>
			<td><input type="text" name="pcon" required="required"></td>
		</tr>
		<tr>
			<td>Choose Standar</td>
			<td><input type="number" name="standard" required="required"></td>
		</tr>
		<tr>
			<td>Choose Image</td>
			<td><input type="file" name="image" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
include('../dbcon.php');

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['standard'];
	
	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcon`, `standerd`) VALUES ('$rollno','$name','$city','$pcon','$std')";

	$run = mysqli_query($con,$qry);

	if ($run == TRUE) {
		?>
		<script>
			window.alert('data inserted successfully.');
		</script>
		<?php
	}

}

 ?>





