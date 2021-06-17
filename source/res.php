<html>
<head>
<title>Bharat Acharya Education</title>
<link rel="stylesheet" type="text/css" href="Res_style.css">
</head>
<body style="color:black;">
<div  class="main_content"> <h2>Register Here</h2>
	<table>
	<form name="Respage" action="regi.php"  method="POST">
	<tr>
		<td><label>Username:</label></td>
		<td><input type="text" name="user" placeholder="username" id="username"   required ></td>
	</tr>
	<tr>
		<td><label>mobile no:</label></td>
		<td><input type="text" name="mobileno" placeholder="Mobile number" id="mobileno" required></td>
	</tr>
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
		<td><label>confirm password:</label></td>
		<td><input type="password" name="confirmpass" placeholder="Enter confirm password" id="confirmpass" required></td>
	</tr>
	</tr>
	<td><input type="submit" name="submit" value="Submit" onclick="validation();" style="width:40%; background-color:#333; color:white;"></td>
	<td><button style="background-color:#333; "><a style=" color:white; text-decoration:none; " href="../index.php">Cancel</a></button></td>
	</form>
	</table>
</div>
 <h4 style="text-align:center;">Already Resistered: <a style="color:red; text-decoration:none;" href="log.php">Login</a></h4>
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