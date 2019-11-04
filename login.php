<?php 

	session_start();
	//$_SESSION["uid"] = null;
?>
<?php	
	if (isset($_SESSION['uid'])) 
	{
		header('location:admin/admindash.php');
	}
	else
	{
		?>
<!DOCTYPE html>
<html style="background-color: yellow;">
<head>
	<title>Admin Login</title>
</head>
<body>
	<h1 align="center">Admin Login</h1>
	<form action="login.php" method="post">
		<table align="center">
			<tr>
				<td>username: </td>
				<td><input type="text" name="username" required="required"></td>
			</tr>
			<tr>
				<td>password:	</td>
				<td><input type="password" name="password" required="required"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php 

include('dbcon.php');



if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password` = '$password'";
	$result = mysqli_query($con, $qry);

	$row = mysqli_num_rows($result);

	if ($row < 1) {
		?>
		<script>
			alert('username or password not match');
			window.open('login.php','_self');
	</script>
	<?php
	} 
	else
	{
		$data=mysqli_fetch_assoc($result);
		$id = $data['id'];
		

		session_start();

		$_SESSION['uid']= $id;
		header('location:admin/admindash.php');
	}
}
?>


		<?php

	}

 ?>
