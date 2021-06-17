<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
	$email=$_POST['email'];
	$password=$_POST['password'];
	session_start();
// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$user_check_query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc(($result));
  if($user)
	{
		echo "logged in";
		$
			$_SESSION['log']=true;
			$_SESSION['username']=$user['username'];
            $_SESSION['mobile']=$user['phone'];
			$_SESSION['email']=$user['email']; 
		//$_SESSION['username']=$email;
		   header("refresh:1; url= index.php");
	}
	else
	{
		echo "login error";
		header("refresh:1; url= log.php");
	}
mysqli_close($conn);


?>