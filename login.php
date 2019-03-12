<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-size: 20px;
		}
	</style>
</head>
<body>
<br><br><br>
Login form<br>
<form method="POST">
Username
<input type="text" name="username"><br>
Password
<input type="password" name="password"><br>
<input type="submit" name="login" value="Log in">
</form>
<?php
include('database.php');
if(isset($_SESSION['isLogin'])){
	if($_SESSION['isLogin']==1){
		header('Location: welcome.php');
		exit();
	}
}
if(isset($_POST["login"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$username=mysqli_real_escape_string($connection,$username);
	$password=mysqli_real_escape_string($connection,$password);
	$password=sha1($password);
	$sql="SELECT * FROM abc12users WHERE USERNAME='$username' AND PASSWORD_HASH='$password'";
	$result=mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)){
		echo('WELCOME');
		$_SESSION['isLogin']=1;
		exit();
	}
	else {
		echo('Invalid username or password');
		$_SESSION['isLogin']=0;
	}
}
?>
</body>
</html>