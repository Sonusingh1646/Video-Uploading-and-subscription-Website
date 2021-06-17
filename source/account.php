<html>
	<head>
		<title>Bharat Acharya Education</title>
		<link href="source/index_style.css" rel="stylesheet" type="text/css">
	</head>
<body>
						<?php session_start();?>
	<div  class="image">
		<img src="source/logo2.jpg">
	</div>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="video.php">Video Channel</a>
		<a href="books.php">Books</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
		<a href="account.php">My Account</a>
		<a href="delete.php">Delete</a>
	</div>
	<div class="myaccountmain">
		<h1>My Account</h1>
			<table class="table1">
				<tr>
					<td class="td"><b>Name</b></td>
					<td><?php echo $_SESSION['username'] ;?></td>
				</tr>
				<tr>
					<td class="td"><b>Mobile</b></td>
					<td>+91<?php echo $_SESSION['mobile'];?></td>
				</tr>
				<tr>
					<td class="td"><b>Email</b></td>
					<td><?php echo $_SESSION['email'];?></td>
				</tr>
				<tr>
					<td  class="td"><b>Country</b></td>
					<td>India</td>
				</tr>
			</table>
			<button style="margin-top:40px; font-size:17px; "><a href="forgot.php" style="text-decoration:none;"> change password</a></button>
		<div>
		<h1>My Subscriptions</h1>
		<table>
			<p>Showing item.</p>
				<tr>
					<td><b>Subscription</b></td>
					<td><b>Price</b></td>
					<td><b>Time</b></td>
				</tr>
					<?php

						$servername = "localhost";
						$dbusername = "root";
						$dbpassword = "password";
						$dbname="project";
						$username=$_SESSION['username'];
						$email=$_SESSION['email'];
						$number=$_SESSION['mobile'];
						// Create connection
						$conn=mysqli_connect($servername, $dbusername, $dbpassword)or die(mysqli_error());
						mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
				  // a user does not already exist with the same username and/or email
				  $user_check_query = "SELECT * FROM s8051 WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>8051</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM s8085 WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>8085</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM s8086 WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>8086</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM arm WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>ARM</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM s80386 WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>80836</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM pentium WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>Pentium</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  $user_check_query = "SELECT * FROM aoc WHERE email='$email'";
				  $result = mysqli_query($conn, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  if($user)
				  {
					  echo"<tr><td><b>AOC</b></td>
							<td>₹ 999</td>
							<td>6 Month</td>
							</tr>";
				  }
				  ?>			  
				  
			</table>
			</div>
			<div>
				<h1>My previous Subscriptions</h1>
			<table>
			<p>Showing item.</p>
				<tr>
					<td><b>Subscription</b></td>
					<td><b>price</b></td>
					<td><b>Times</b></td>
				</tr>
				<tr>
					<td><b>No result  Found</b></td>
					<td> </td>
					<td> </td>
				</tr>

			</table>
			</div>
			</div>
			<div class="logout">
			<button><a href="../index.php">Log out</a></button>
			</div>
	<div class="footer">
	<a href="http://www.bharatacharyaeducation.com/index.php/site/terms-conditions ">TERMS AND CONDITION </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/privacy-policy">PRIVACY POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/use-policy"> PAYPAL ACCEPTABLE USE POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/refund-cancellation"> REFUND POLICY</a>
	
	</div>
</body>
</html>