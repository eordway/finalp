<!DOCTYPE html>

<head>
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
</head>

<?php

include_once("flashheader.php");

# Start session
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
<form action="addcreator.php" method="POST">
	<div>Creator name <input type="text" name="creator_name"></div>
	<div><input type="submit" value="Add creator"></div>

</form>
</div>


</html>

