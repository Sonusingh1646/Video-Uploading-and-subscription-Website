<html>
<head>
<title>Bharat Acharya Education</title>
		<link href="index_style.css" rel="stylesheet" type="text/css">
</head>
<body style="color:black; background-position: center;">
<div  class="main_content"> <h2>Login Here</h2>
	<table>
	<form name="Respage" action="login.php"  method="POST">
	<tr>
		<td><label>Email:</label></td>
		<td><input type="email" name="email" class ="form-control" id="email"
		placeholder="Enter emailmail" required></td>
	</tr>
	<tr>
		<td><label>password:</label></td>
		<td><input type="password" name="password" placeholder="Enter password minimum 6 char" id="password" required></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="Submit" onclick="validation();" style=" background-color:#333; color:white;"></td>
	<td><button style="background-color:#333; "><a style=" color:white; text-decoration:none; " href="../index.php">Cancel</a></button></td>
	</tr>
	</form>
	</table>
</div>
 <h4 style="text-align:center;">Not Yet Resistered? <a style="color:red; text-decoration:none;" href="res.php">register</a> <a href="forgot.php" style="text-decoration:none; color:blue;margin-top:40px; font-size:15px;">forgot Password?</a></h4>
 <div class="footer" style="margin-top: 300px;">
	<a href="http://www.bharatacharyaeducation.com/index.php/site/terms-conditions ">TERMS AND CONDITION </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/privacy-policy">PRIVACY POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/use-policy"> PAYPAL ACCEPTABLE USE POLICY </a>|
		<a href="http://www.bharatacharyaeducation.com/index.php/site/refund-cancellation"> REFUND POLICY</a>
	
	</div>
<script>

function validation()
{
var user=document.forms["Respage"]["user"].value;
var pass=document.forms["Respage"]["password"].value;
var confirmpass=document.forms[Respage]["confirmpass"].value;
var mobile=document.forms["Respage"]["mobileno"].value;
var email=document.forms["Respage"]["email"].value;
var rex=/[a-z]{6}+/g;

	if(user=="")
	{
	document.getElementById('username').inner.HTML="**plese enter";
	return false;
	}
	if(pass!=rex)
	{
	document.getElementById('password').inner.HTML="**plese enter";
	return false;
	}
	f(confirmpass!=pass)
	{
	document.getElementById('confirmpass').inner.HTML="**password not matched";
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
	
}


</script>
</body>
</html>