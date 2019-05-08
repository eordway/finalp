
<?php
# Start session
echo'<div id= "sessionstart">';

session_start();
if (!isset($_SESSION['login_name'])) {
	header("Location: flashloginpage.php");
}else{
	echo "<h3>Welcome, ".$_SESSION['login_name']."</h3>";
}
include_once("flashheader.php");
	echo '</div>';

  
?>
<!DOCTYPE html>
<html>
	<head>
	<title>New game</title>
	  <link rel="stylesheet" type="text/css" href="flashstyle.css">

	</head>
<body>

<div id= "formstyle">
<form id= "newgamestyle" action="addgame.php" method="POST">
	<div>Game name<br><input type="text" name="game_name"></div>
	<div>Creator<br> <select name="creator_id"> 
	<?php
	include_once("flashheader.php");

		$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
		if ($conn->connect_error) die($conn->connect_error);
		$query= 'SELECT * FROM creator';
		$result= $conn->query($query);  
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['creator_id'].'">'.$row["creator_name"].'</option>';
		}
	?>
	
	</select>
			<a href= "newcreator.php">   Add new creator</a>

	</div>

	<div>Upload date<br><input type="date" name="upload_date"></div>
	<div>URL<br><input type="text" name="url"></div>
	<div>Rating<br><input type="number" step="0.01" name="rating"></div>
	<div>Description<br><input type="text" name="description"></div>
	<div>Genre<br><select name="genre_id">
		<?php
		$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
		if ($conn->connect_error) die($conn->connect_error);
		$query= 'SELECT * FROM genre';
		$result= $conn->query($query);  
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['genre_id'].'">'.$row["genre_name"].'</option>';
		}
	?>
	</select>
				<a href= "newgenre.php">Add new genre</a>

	</div>

	<div>Host site<br><select name="site_id">
	<?php
		$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
		if ($conn->connect_error) die($conn->connect_error);
		$query= 'SELECT * FROM location';
		$result= $conn->query($query);  
		while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['site_id'].'">'.$row["site_name"].'</option>';
		}
	?>
	</select>
				<a href= "newsite.php">Add new site</a>

	</div>
	
	<!--<div>Tags<input type="text" name="tags"></div>-->

	<input type="submit" value="Add game">

</form>
</div>

</body>
</html>

<?php

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

</html>
