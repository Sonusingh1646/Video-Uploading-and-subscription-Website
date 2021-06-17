<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
	session_start();
	$username=$_SESSION['username'];
	$email=$_SESSION['email'];
	$number=$_SESSION['mobile'];
// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM arm WHERE email='$email'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user)
  {
	  echo" already subscribed ";
	  header("refresh:2; url= index.php");
  }
  else
  {
	$s=mysqli_query($conn,"INSERT INTO arm(username,phone,email) VALUES ('$username','$number','$email')") or die('error');
	if ($s==TRUE) 
	{
		echo" succesfully subscribed ";
		header("refresh:2; url= index.php");	
	}
	else
	{
		echo "Errorhghhh: " . $s . "<br>" . mysqli_error($conn);
		header("refresh:2; url= index.php");
	} 
  }
mysqli_close($conn);

?>