<!DOCTYPE html>
	<head>
	<title>New game</title>
	  <link rel="stylesheet" type="text/css" href="flashstyle.css">
<title>Register</title>
	</head>
<body>
<?php
include_once("flashheader.php");

?>
<h3>Registration Form</h3>
<div id= "formstyle">
<form action="registration_form.php" method="POST"> 
First Name:<br>  <input type="text" name="fname"> <br>
Last Name: <br> <input type="text" name="lname"> <br>
Username:<br> <input type="text" name="username"> <br>
Password:<br>  <input type="password" name="password"> <br>
Email:<br>  <input type="text" name="email"> <br>
<input type="submit" value="Submit"> 
</form> 
</div>
</body>
</html>
