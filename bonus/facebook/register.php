<?php
include_once('database.php');
function alert($mess){
    echo "<script type='text/javascript'>alert('$mess');</script>";
}
$firstname=mysqli_real_escape_string($connect, $_POST["firstname"]);
$lastname=mysqli_real_escape_string($connect, $_POST["lastname"]);
$username=mysqli_real_escape_string($connect, $_POST["username"]);
$password=mysqli_real_escape_string($connect, $_POST["password"]);
$day=$_POST["day"];
$month=substr($_POST["month"], -2);
$year=$_POST["year"];
$time=mktime(0,0,0,$day,$month,$year);
$time= date('Y-m-d H:i:s',$time);
$birth=mysqli_real_escape_string($connect,$time);
$gender=mysqli_real_escape_string($connect, $_POST["gender"]);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user(Ho,Ten,username,password,birth,gender) VALUES('$firstname','$lastname','$username','$hashed_password','$birth','$gender')";
if(mysqli_query($connect,$sql)){
	alert("Dang ki thanh cong");
}
else alert("Dang ki that bai");
?>