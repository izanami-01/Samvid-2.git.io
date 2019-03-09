<?php
require 'conf/config.php';


$username=$_POST['username'];
//echo($username);

$sql="SELECT * FROM `users` WHERE `username`='$username'";

$result=mysqli_query($link,$sql);

$count=mysqli_num_rows($result);
//echo($count);

$user = mysqli_fetch_assoc($result);

if($count==0){
	$sql="INSERT INTO `users` (`username`) VALUES ('$username')";
	$result=mysqli_query($link,$sql);
	$sql="SELECT * FROM `users` WHERE `username`='$username'";

	$result=mysqli_query($link,$sql);

	

	$user = mysqli_fetch_assoc($result);	

} else {
	$sql="DELETE FROM `user_answers` WHERE `user_id` " . $user['id'];
	$result=mysqli_query($link,$sql);	
}

$_SESSION["username"] = $username;
$_SESSION["user_id"] = $user['id'];
$_SESSION['question'] = 0;
//echo($_SESSION['user_id']);

header("location:quiz.php");

?>