<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
	$username=$_POST['user'];
	$email=$_POST['email'];
	$number=$_POST['mobileno'];
	$password=$_POST['password'];
	session_start();
// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE email='$email'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc(($result));
  if($user)
  {
	  echo"this email already registered ";
	  header("refresh:2; url= log.php");
  }
  else
  {
	$s=mysqli_query($conn,"INSERT INTO register(username,phone,email,password) VALUES ('$username','$number','$email','$password')") or die('error');
	
	if ($s==TRUE) 
	{
		echo "welcome Mr.".$username." ";
		$_SESSION['log']=true;
		$_SESSION['username']=$username;
		$_SESSION['email']=$email;
		$_SESSION['mobile']=$number;
		header("refresh:2; url=index.php");	
	}
	else
	{
		header("refresh:2; url=regi.php");
		echo "Error: " . $s . "<br>" . mysqli_error($conn);
		
	} 
  }
mysqli_close($conn);
?>