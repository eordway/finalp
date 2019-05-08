<!DOCTYPE html>
<html>
<head>
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
</head>
<body>
<?php

session_start();
if (!isset($_SESSION['login_name'])) {
	header("Location: flashlogin.php");
}else{
	echo "<h3>Welcome, ".$_SESSION['login_name']."</h3>";
}
echo'</div>';

$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
if ($conn->connect_error) die($conn->connect_error);

$creator_name=$_POST['creator_name'];
$query= "SELECT * from creator WHERE creator_name= '$creator_name'";
$result = $conn->query($query);
if(mysqli_num_rows($result)>0){
	echo "<br>Creator already exists in database! <a href ='newgame.php'><br>Please select from dropdown options</a>";
}

else{

$query= "INSERT INTO creator (creator_name) VALUES ('$creator_name')";


$result = $conn->query($query);    
if (!$result) {
	echo "Sorry, something went wrong!";
	die($conn->error);  
}
else {
	echo "<br>Creator successfully added!";
	echo "<div><a href= 'newgame.php'>Please return to new game form to add game</a></div>";

}
}

?>
</body>
</html>
