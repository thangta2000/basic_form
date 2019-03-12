<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-size: 20px;
		}
		[name="username"]{
			margin-left: 35px;
		}
	</style>
</head>
<body>
<br><br><br>
Reset password form
<form method="POST">
UserName
<input type="text" name="username"><br>
Phone Number
<input type="text" name="phone"><br>
<input type="submit" name="reset" value="Reset">
</form>
<?php 
include('database.php');
if(isset($_POST['reset'])){
	$username=$_POST['username'];
	$phone=$_POST['phone'];
	$username=mysqli_real_escape_string($connection,$username);
	$phone=mysqli_real_escape_string($connection,$phone);
	$sql="SELECT * FROM abc12users WHERE USERNAME='$username' AND PHONE='$phone'";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)){
		$str=str_shuffle("123456abcd");
		echo("New password: ".$str);
		$str=sha1($str);
		$sql2="UPDATE abc12users SET PASSWORD_HASH='$str' WHERE USERNAME='$username'";
		mysqli_query($connection,$sql2);
	}
	else echo("Wrong username or phone number");	
	}

?>
</body>
</html>