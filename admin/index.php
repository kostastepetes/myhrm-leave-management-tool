<?php
session_start();
if(isset($_SESSION['adminuser']))
{
	header('location:home.php');
}
else
{
	echo "<body>";
	echo "<div class='background'>";
	echo "<div class='textview'>";
	echo "<center>";
	echo "<h1>myHRM</h1>";
	include 'nav_admin.php';
	echo "<h2>Admin Login</h2>";
	echo "<form name='login' action='validator.php' method='post' onsubmit='return valid()'>";
	if(isset($_GET['err']))
	{
		echo "<div class='error'><b><u>".htmlspecialchars($_GET['err'])."</u></b></div><br/>";
	}
	echo "<table>";
	echo "<tr><td>Username:</td><td><input type='text' name='uname' class='textbox shadow selected' placeholder='Your Username'></td></tr><br/>";
	echo "<tr><td>Password:</td><td><input type='password' name='pass' class='textbox shadow selected' placeholder='Your Password'></td></tr><br/>";
	echo "</table>";
	echo "<div class='button-container'>";
	echo "<input type='submit' value='Login' class='login-button shadow'>";
	echo "</div>";
	echo "</form>";
	echo "</center>";
	echo "</div>";
	echo "</div>";
	echo "</body>";
}
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
	background-color: #f4f4f4;
	font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
	margin: 0;
	padding: 0;
}

.container {
	max-width: 1200px;
	margin: 0 auto;
	padding: 20px;
}

.heading {
	margin: 20px 0;
	text-align: center;
	color: #333;
}

h1 {
	font-size: 3em;
	color: #0073e6;
	margin-bottom: 10px;
	padding: 7px;
	font-weight: normal;
}

h2 {
	font-size: 2em;
	color: #333;
	margin-bottom: 20px;
}

nav {
	text-align: center;
	margin-bottom: 40px;
}

nav ul {
	list-style: none;
	padding: 0;
}

nav ul li {
	display: inline;
	margin: 0 15px;
}

nav ul li a {
	text-decoration: none;
	color: #0073e6;
	font-size: 1.2em;
	transition: color 0.3s ease;
}

nav ul li a:hover {
	color: #005bb5;
}

.button-container {
	display: flex;
	justify-content: center;
	align-items: center;
	gap: 10px;
	margin-top: 20px;
}

.login-button {
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	background-color: #0073e6;
	color: white;
	cursor: pointer;
	margin-top: 10px;
}

.login-button:hover {
	background-color: #005bb5;
}
</style>
<script type="text/javascript">
function valid() {
	var user = document.login.uname.value.trim();
	var pass = document.login.pass.value;
	if (user === '') {
		alert("Please Enter Username!");
		return false;
	}
	else if (pass === '') {
		alert("Please Enter Password!");
		return false;
	}
	return true;
}
</script>
</head>
</html>
