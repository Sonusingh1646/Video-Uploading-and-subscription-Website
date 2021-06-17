
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
	session_start();
	$email=$_SESSION['email'];
// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE email='$email'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user)
  {
  	$s=mysqli_query($conn,"DELETE FROM register WHERE email='$email'") or die('error');
	echo "successfully delete";
		header("refresh:2; url= ../index.php");
	}
