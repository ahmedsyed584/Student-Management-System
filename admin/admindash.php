<?php 
session_start();
	
if(isset($_SESSION['uid'])){
	// $_SESSION['uid'];
}else
{
	header('location: ../login.php');
}

?>
<!DOCTYPE html>
<html style="background-color: yellow;">
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
	<a href="../logout.php" style="float: right;" class="logout">logout</a>
	<h1>Welcome to Admin Dashboard</h1>
</div>
<div class="options">
	<table align="center" style="padding-top: 20px;">
		<tr>
			<td>1.</td>
			<td><a href="addstudent.php" style="text-decoration: none;">Add User</a></td>
		</tr>
		<tr>
			<td>2.</td>
			<td><a href="updatestudent.php" style="text-decoration: none;">Update User</a></td>
		</tr>
		<tr>
			<td>3.</td>
			<td><a href="deletstudent.php" style="text-decoration: none;">Delete User</a></td>
		</tr>
	</table>
</div>
</body>
</html>