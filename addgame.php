
<!DOCTYPE html>

<head>
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
</head>


<?php
include_once("flashheader.php");

echo'<div id= "sessionstart">';
session_start();
if (!isset($_SESSION['login_name'])) {
	header("Location: flashloginpage.php");
}else{
	echo "<h3>Welcome, ".$_SESSION['login_name']."</h3>";
	echo '</div>';
}

$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
if ($conn->connect_error) die($conn->connect_error);

$name= $_POST['game_name'];
$creator_id= $_POST['creator_id'];
$upload_date= $_POST['upload_date'];
$url= $_POST['url'];
$rating= $_POST['rating'];
$description= $_POST['description'];
$genre_id= $_POST['genre_id'];
$site_id= $_POST['site_id'];


$query  = "INSERT INTO games (name, upload_date, rating, url, description, genre_id, site_id, creator_id) VALUES('$name', '$upload_date', '$rating', '$url', '$description', '$genre_id', '$site_id', '$creator_id')";

$result = $conn->query($query);    
if (!$result) {
	echo "Sorry, something went wrong!";
	die($conn->error);  

}
else {
	echo 
	'<div id= sessionstart>';


	
	


	echo "Successfully added!";
	
}
echo'</div>';

?>

