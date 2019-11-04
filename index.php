<!DOCTYPE html>
<html style="background-color: grey;">
<head>
	<title>Student Management System</title>
</head>
<body>
	<h3 align="right"><a href="login.php">Admin Login</a></h3>
	<hr>
	<h1 align="center">Welcome to Student Management System</h1>

	<form>
		<table align="center" border="1" width="30%" >
			<tr>
				<td colspan="2" align="center">Student info</td>
			</tr>
			
			<tr>
				<td>Choose standard</td>
				<td>
					<select>
						<option>1st</option>
						<option>2nd</option>
						<option>3rd</option>
						<option>4th</option>
						<option>5th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Enter Rollno: </td>
				<td><input type="text" name="rollno" required="required"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
			</tr>
		</table>
	</form>

</body>
</html>