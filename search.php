<!DOCTYPE html>
<html>
	<head>
	<title>Search</title>
	  <link rel="stylesheet" type="text/css" href="flashstyle.css">

	</head>
<body>
<?php
include("flashheader.php");

if (isset($_GET["submit"]) && isset($_GET["term"]) && !empty($_GET["term"]) ) {

	$conn = new mysqli("localhost", "", "", "eordway");
	if ($conn->connect_error) die($conn->connect_error);
	$term = sanitizeMySQL($conn,$_GET["term"]);

	$query = 'SELECT * FROM games NATURAL JOIN creator creator_id NATURAL JOIN location location_id WHERE (name LIKE \'%'.$term.'%\' OR creator_name LIKE \'%'.$term.'%\')';
	if (isset($_GET["fo"]) && !empty($_GET["fo"])) {
		$fo = sanitizeMySQL($conn,$_GET["fo"]);
		if ($fo=="on") {
		}
	}
	echo '<table id= "hometable"> 
      <tr> 
          <td> <font face="Arial">Game</font> </td> 
		  <td> <font face="Arial">Creator</font> </td> 
          <td> <font face="Arial">Date Published</font> </td> 
          <td> <font face="Arial">Rating</font> </td> 
          <td> <font face="Arial">Summary</font> </td> 
          <td> <font face="Arial">Location</font> </td> 
      </tr>';
	$result = $conn->query($query);
	if (!$result) die($conn->error);
	print("<h1>Results</h1>");
	while ($row=$result->fetch_assoc()) {
		 $field1name = $row["name"];
		 $field2name = $row["creator_name"];
		 $field3name = $row["upload_date"];
		 $field4name = $row["rating"];
		 $field5name = $row["description"];
		 $field6name = $row["url"];


		 echo '<div><tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 

              </tr></div>';
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
<form action="search.php" method="GET">
	Search games and creators: <input type="text" name="term">
	<input type="submit" name="submit" value="Search!">
</form>
</div>

</body>
</html>
