<!DOCTYPE html>
<html>
<head>
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
</head>
<body>
<?php
include_once("flashheader.php");

echo '<div id= sessionstart>';
session_start();
if (!isset($_SESSION['login_name'])) {
	header("Location: flashlogin.php");
}else{
	echo "<h3>Welcome, ".$_SESSION['login_name']."</h3>";
}
echo'</div>';

  
?>

<div id= "addcreator">

<form action="addgenre.php" method="POST">
	<div>Genre name <input type="text" name="genre_name"></div>
	<div><input type="submit" value="Add genre"></div>

</form>
</div>
</body>
</html>



