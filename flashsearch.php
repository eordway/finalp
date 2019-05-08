<!DOCTYPE>
<html>
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style?
  <link rel="stylesheet" type="text/css" href="flashstyle.css">
</style>
</head>
<body>
 


<form method="get" action="flashsearch.php">
Search <input type="text" name="term">
<input type="submit">
</form>
<?php
if (isset($_GET["term"]) && !empty($_GET["term"]) ) {
$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
if ($conn->connect_error) die($conn->connect_error);
$term = $_GET['term']; 





$query= 'SELECT * FROM games NATURAL JOIN creator creator_id NATURAL JOIN location location_id WHERE (creator LIKE \'%'.$term.'%\' OR name LIKE \'%'.$term.'%\'';

$result = $conn->query($query);
if (!$result) die($conn->error);

echo '<table id= "hometable" border="1px" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Game</font> </td> 
          <td> <font face="Arial">Date Published</font> </td> 
		  <td> <font face="Arial">Creator</font> </td> 
          <td> <font face="Arial">Rating</font> </td> 
          <td> <font face="Arial">Summary</font> </td> 
          <td> <font face="Arial">Location</font> </td> 
      </tr>';
	  
	 while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
		$field2name = $row["creator_id"];
        $field3name = $row["upload_date"];
        $field4name = $row["rating"];
        $field5name = $row["description"];
        $field6name = $row["url"]; 
		
		  echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 

              </tr>';
			  
	 }
}   
 
?>



</body>
</html>
