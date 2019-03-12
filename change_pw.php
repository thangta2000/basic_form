<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		[type="text"]{
			margin-left: 42px;
		}
		[name="newpw"]{
			margin-left:17px;
		}
	</style>
</head>
<body>
<br><br><br>
Change password form
<form method="POST">
UserName
<input type="text" name="username"><br>
Current password
<input type="password" name="oldpw"><br>
New password
<input type="password" name="newpw"><br>
<input type="submit" name="change" value="Change">
</form>
<?php  
include('database.php');
if(isset($_POST['change'])){
	$username=$_POST['username'];
	$oldpw=$_POST['oldpw'];
	$newpw=$_POST['newpw'];
	$username=mysqli_real_escape_string($connection,$username);
	$oldpw=mysqli_real_escape_string($connection,$oldpw);
	$oldpw=sha1($oldpw);
	$newpw=mysqli_real_escape_string($connection,$newpw);
	$sql="SELECT * FROM abc12users WHERE USERNAME='$username' AND PASSWORD_HASH='$oldpw'";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)){
		$newpw=sha1($newpw);
		mysqli_query($connection,"UPDATE abc12users SET PASSWORD_HASH='$newpw' WHERE USERNAME='$username'");
		echo("Successful changed password");
	}
	else echo("Incorrect username or password");	
}
?>
</body>
</html>