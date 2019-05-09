<!DOCTYPE html>
	<head>
	<title>New game</title>
	  <link rel="stylesheet" type="text/css" href="flashstyle.css">
<title>Register</title>
	</head>

<?php

$conn = new mysqli("localhost", "", "", "eordway");
if ($conn->connect_error) die($conn->connect_error);
  
$salt1 = "skfo*";  
$salt2 = "d8ks";  
$user_first = $_POST['fname'];  
$user_id= '';
$user_last = $_POST['lname'];  
$login_name = $_POST['username'];
$user_email = $_POST['email'];  
$user_pw = $_POST['password'];  
$token = hash('ripemd128', "$salt1$user_pw$salt2");


$query  = "INSERT INTO user (user_last, user_first, user_email, login_name, user_pw) VALUES('$user_last', '$user_first', '$user_email', '$login_name', '$token')";
$result = $conn->query($query);    
if (!$result) {
	echo "Sorry, something went wrong! Create new account   <a href= 'flashloginpage.php'>here</a><br>";
	die($conn->error);  

	
}
else {
	echo "Successfully registered!<br>
	<a href= 'newgame.php'>Add game</a>";
}
?>
</html>



