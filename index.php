<?php
if (isset($_POST['submit']))
{
	$Username=$_POST['user'];
	$password=md5($_POST['password']);

	$stmt="SELECT * FROM login WHERE username='$username' AND password '$password' ";
	include('inc_connection.php');
	$qry=mysqli_query($conn, $stmt);
	$count=mysqli_num_rows($qry);
	if (count==1)
	 {
	 	echo "login successful";
	}
	else
	{
		echo "login failed";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="POST"	name="frm"	action=""	enctype="multipart/form-data">	
	<fieldset>
		<legend>login</legend>
		<input type="text" name="user"	required placeholder="Username"/>

		<input type="password" name="password" required placeholder="Username"/>

		<input type="submit" name="submit" value="login"/>
	</fieldset>
</form>
</body>
</html>

