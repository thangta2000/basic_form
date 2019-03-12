<?php
include_once('database.php');
function alert($mess){
    echo "<script type='text/javascript'>alert('$mess');</script>";
}
$user_name = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['pass']);
$sql = "SELECT * FROM user WHERE username = '$user_name'";
$sql_result = mysqli_query($connect, $sql);
if(mysqli_num_rows($sql_result) > 0){
	while($row = mysqli_fetch_assoc($sql_result)){
		if(password_verify($password, $row['password']))
			alert("Dang nhap thanh cong !!");
		else alert("Nham mat khau");
	}	
}
else alert("Chua tao tai khoan");
?>
