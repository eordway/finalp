<!DOCYPE html>
<head>
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
   </head>
   <body>

<?php
include_once("flashheader.php");

if (isset($_POST['submit'])) { 
	if ( empty($_POST['username']) || empty($_POST['password']) ) {
		echo "<p>Please fill out all of the form fields!</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$username = sanitizeMySQL($conn, $_POST['username']);
		$password = sanitizeMySQL($conn, $_POST['password']);			
		$salt1 = "qm&h*";  
		$salt2 = "pg!@";  
		$password = hash('ripemd128', $salt1.$password.$salt2);
		$query  = "SELECT fname, lname FROM users WHERE username='$username' AND password='$password'"; 
		$result = $conn->query($query);    
		if (!$result) die($conn->error); 
		$rows = $result->num_rows;
		if ($rows==1) {
			$row = $result->fetch_assoc();
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];	
			header("Location: addnewpet_v2.php"); 			
		} else {
			echo "<p>Invalid username/password combination!</p>";
		}
	}
}
function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}
?>
<div id = "loginstyle">
<form method="POST" action="loggedin.php">
Username: <input type="text" name="username">
Password: <input type="password" name="password">
<input type="submit" name="submit" value="Log in!">

</form>
   <a href= "flashnewuser.php">Create new account here!</a>

</div>

</body>

</html>
