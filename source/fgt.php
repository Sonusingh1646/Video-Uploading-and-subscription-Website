<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
		$email=$_POST['email'];
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$cnfpassword=$_POST['cnfpassword'];

	session_start();

// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$user_check_query = "UPDATE * FROM register WHERE email='$email' AND password='$oldpassword' IS email='$email' AND password='$newpassword' ";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc(($result));
 if($user)
  { 
		echo" password change succesfully";
		header("refresh:1; url=index.php");
  }
  else
  {
	  echo " entered data not matched";
	echo "Error: " . $s . "<br>" . mysqli_error($conn);
	}
mysqli_close($conn);


?>