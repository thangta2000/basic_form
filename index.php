<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		[name="username"]{
			margin-left: 30px;
		}
		[name="password"]{
			margin-left: 35px;
		}
		body{
			font-size: 20px;
		}
	</style>
</head>
<body>
<br><br><br>
<form method="POST">
Registration form <br>
Username
<input type="text" name="username"><br>
<label>Password</label>
<input type="password" name="password"><br>
<label>Phone Number</label>
<input type="text" name="phone"><br>
<input type="submit" name="submit" value="Registration">
</form>
<?php 
include('database.php');
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$phone=$_POST["phone"];
	$username=mysqli_real_escape_string($connection,$username);
	$password=mysqli_real_escape_string($connection,$password);
	$phone=mysqli_real_escape_string($connection,$phone);
	$password=sha1($password);
	$sql="INSERT INTO abc12users(USERNAME,PASSWORD_HASH,PHONE) VALUES ('$username','$password','$phone')";
	$result=mysqli_query($connection,$sql);
	if($result) echo("username : ".$username."<br>phone : ".$phone);
	else{
		echo("Registration Error");
	}
}
?>
</body>
</html>