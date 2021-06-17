<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname="project";
	$username=$_POST['Name'];
	$email=$_POST['email'];
	$number=$_POST['mobileno'];
	$subject=$_POST['subject'];
// Create connection
$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM contactus WHERE email='$email' AND name='$username'";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if($user)
  {
	$sql =mysqli_query($conn , "UPDATE contactus SET subject='$subject' WHERE email='$email'");
	if($sql)
	{
		echo"your request has submit thanks for contact us MR. ".$username." ";
		header("refresh:2; url=../index.php");
	}
	else
	{
		echo "Error: " . $s . "<br>" . mysqli_error($conn);
			header("refresh:2; url= contact.php");
	}
  }
  else
  {
	$s=mysqli_query($conn,"INSERT INTO contactus(name,phone,email,subject) VALUES ('$username','$number','$email','$subject')") or die('error');
	if ($s==TRUE) 
	{
		echo " thank you for contact ";
		header("refresh:2; url= contact.php");
		//$ses
		//header("refresh:2; url= index1.php");	
	}
	else
	{
		echo "Error: " . $s . "<br>" . mysqli_error($conn);
		header("refresh:2; url=../ contact.php");
	} 
  }
mysqli_close($conn);

?>