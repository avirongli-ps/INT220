<?php

include('Administrator/PHP/connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sql="SELECT * FROM tblusers WHERE username = '$username' AND password ='$password'";

$check = mysqli_query($connect,$sql);
if(!$check)
{
	die("Failed to connect");
}

if(mysqli_num_rows($check) >= 1){
	while($row = mysqli_fetch_array($check)){
		session_start();
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['name'] = $row['name'];
		header("Location:Administrator/PHP/AdminHome.php");	
	}
	
}else{
	header("Location:loginpage.php?error_log=1");	
}
?>

