<!DOCTYPE html>
<html style="background-color: yellow;">
<head>
	<title>update student</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="header">
	<a href="admindash.php" style="float: left; color: white; text-decoration: none; margin-left: 30px; ">Back to Dash</a>
	<h1>Welcome to Admin Dashboard</h1>
</div>
	<form action="updatestudent.php" method="post">
		<table align="center" border="1">
			<tr>
				<td>Standard: </td>
				<td><input type="number" name="standard"></td>
			
				<td>Name: </td>
				<td><input type="text" name="name"></td>
				<td><input type="submit" name="search" value="Search"></td>
			</tr>
		</table>

	</form>


	<table border="1" width="70%" align="center" style="margin-top: 30px; background-color: black; color:#fff;">
		<td>Rollno.</td>
		<td>Name</td>
		<td>City</td>
		<td>PContact</td>
		<td>Standard</td>
		
<?php 

	if(isset($_POST['search']))
	{ 
		include('../dbcon.php');

		$std = $_POST['standard'];
		$name = $_POST['name'];

		$qry = "SELECT * FROM `student` WHERE `standerd` = '$std' AND `name`LIKE '%$name%'";
		$run = mysqli_query($con, $qry);

		if(mysqli_num_rows($run) < 1)
		{
			echo "No records found";
		}
		else
		{	
			$data = mysqli_fetch_assoc($run)	  
			 	  ?>
					 	<tr>
						<td><?php echo $data['rollno']; ?></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['city']; ?></td>
						<td><?php echo $data['pcon']; ?></td>
						<td><?php echo $data['standerd']; ?></td>
						</tr>
				<?php
			}

         }

?>
</table>


</body>
</html>
