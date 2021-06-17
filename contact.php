<html>
	<head>
		<title>Bharat Acharya Education</title>
		<link href="source/index_style.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div  class="image">
		<img src="source/logo2.jpg">
	</div>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="video.php">Video Channel</a>
		<a href="books.php">Books</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
		<a href="source/res.php">Register</a>
		<a href="source/log.php">Login</a>
	</div>
	<p class="contact">Contact Us</p>
	<p class="contact1">If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
	<div class="contactmain">
	<table>
	<form name="contact" action="source/contactus.php" onsubmit="return validateForm()" method="POST">
	<tr>
		<td><label for="Name">Name:</label><br>
		<input type="text" name="Name" id="Name"   required ></td>
		<td><label for="mobileno">mobile</label><br>
		<input type="text" name="mobileno" id="mobileno" required></td>
		<td><label for="email">Email</label><br>
		<input type="email" name="email" id="email"	 required></td>
	</tr>
	<tr>
		<td><label for="subject">Subject</label><br>
		<textarea style="height:30px;"id="subject" name="subject"  required></textarea> </td>
	</tr>
	<tr>
		<td><label for="Body">Body</label><br>
		<textarea name="Body" id="Body" required></textarea></td>
	</tr>
	<tr>
	<td><input style="width:40%; background-color:#333; color:white;" type="submit" name="submit" value="submit"></td>
	</tr>
	</form>
	</table>
	<p > For any assistance write us on bharatsir@hotmail.com or contact us on +91 9820408217</p>
	</div>
	</div>
	<div class="footer">
		<a href="http://www.bharatacharyaeducation.com/index.php/site/terms-conditions ">TERMS AND CONDITION </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/privacy-policy">PRIVACY POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/use-policy"> PAYPAL ACCEPTABLE USE POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/refund-cancellation"> REFUND POLICY</a>
	
	</div>
	
<script>
	function validation()
	{
	var user=document.forms["contact"]["Name"].value;
	var mobile=document.forms["contact"]("mobileno"].value;
	var email=document.forms["contact"]["email"].value;
	var sub=document.forms["contact"]["subject"].value;
	var com=document.forms["contact"]["comment"].value;

	if(user=="")
	{
	document.getElementById('username').inner.HTML="**plese enter";
	window.alert("username");
	return false;
	}
	if(mobile=="")
	{
	document.getElementById('mobileno').inner.HTML="**plese enter";
	return false;
	}
	if(email=="")
	{
	document.getElementById('email').inner.HTML="**plese enter";
	return false;
	}
	if(sub=="")
	{
		
	document.getElementById('subject').inner.HTML="**plese enter";		
	return false;
	}
	if(com=="")
	{
		document.getElementById('comment').inner.HTML="**plese enter";		
		return false;
	}




}


</script>


</body>
</html>	