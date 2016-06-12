<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res);
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Username / Password must have at least 2 charachters !');</script>
        <?php
	}

	$errors = "";
	if(strlen($email) < 2){
	$errors .= "Username must have at least 2 characters\r\n";
	}
	if(strlen($upass) < 2){
	$errors .= "Password must have at least 2 characters\r\n";
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>IT255-DZ13-Dejan_Stankovic_2295</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<center>
	<div id="login-form">
		<form method="post">
		<table align="center" width="30%" border="0">
			<tr>
				<td><input type="text" name="email" placeholder="Your Email" required /></td>
			</tr>
			<tr>
				<td><input type="password" name="pass" placeholder="Your Password" required /></td>
			</tr>
			<tr>
				<td><button type="submit" name="btn-login">Sign In</button></td>
			</tr>
			<tr>
				<td><a href="register.php">Sign Up Here</a></td>
			</tr>
		</table>
		</form>
	</div>
	</center>
</body>
</html>