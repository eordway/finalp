<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
   </head>
<body>
<?php
include("flashheader.php");
echo '<div id= sessionstart>';

session_start();
if (!isset($_SESSION['login_name'])) {
	header("Location: flashlogin.php");
}else{
	echo "<h3>Welcome, ".$_SESSION['login_name']."</h3>";
}

$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
if ($conn->connect_error) die($conn->connect_error);

$site_url= $_POST['site_url'];
$site_name=$_POST['site_name'];



$query= "SELECT * from location WHERE site_name= '$site_name'";
$result = $conn->query($query);
echo '<div id= sessionstart>';

if(mysqli_num_rows($result)>0){
	echo "<br>Site already exists in database! <a href ='newgame.php'>Please select from dropdown options</a>";
	echo'</div>';

	}

else{
$query= "INSERT INTO location (site_name, site_url) VALUES ('$site_name', '$site_url')";


$result = $conn->query($query);    
if (!$result) {
	echo "Sorry, something went wrong!";
	die($conn->error);  
}
else {
	echo "<br>Site successfully added!";
	echo "<div><a href= 'newgame.php'>Please return to new game form to add game</a></div>";

}
}

?>
</body>
</html>
