<!DOCTYPE html>
<html>
	<head>
	<title>Search</title>
	  <link rel="stylesheet" type="text/css" href="flashstyle.css">

	</head>
<body>


<?php
session_start();
$_SESSION = array();
session_destroy();

#include_once 'header.php';
echo "<p>You are now logged out.</p>";
echo "<p><a href=\"flashhome.php\">Return to homepage</a></p>";
#include_once 'footer.php';
?>
</body>
</html>
