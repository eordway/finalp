<!DOCTYPE html>
<style>
<?php include 'flashstyle.css'; ?>
<head>
  <link rel="stylesheet" type="text/css" href="flashstyle.css">
</head>
</style>

<?php
include_once("flashheader.php");





$conn = new mysqli("localhost", "eordway_mysql", "VKIpn7Ae7yYT", "eordway");
		if ($conn->connect_error) die($conn->connect_error);
		$query= 'SELECT name, rating, creator_name, genre_name FROM games JOIN creator ON games.creator_id=creator.creator_id JOIN genre on games.genre_id=genre.genre_id ORDER BY rating DESC';

		$result= $conn->query($query);  
		echo '<table id= "ratingtable">
      <tr> 
          <td> <font face="Arial">Creator name</font> </td>
          <td> <font face="Arial">Game name</font> </td> 
		  <td> <font face="Arial">Rating</font> </td> 
		  <td> <font face="Arial">Genre</font> </td> 

           
      </tr>';
 
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["creator_name"];
		$field2name = $row["name"];
		$field3name = $row["rating"];
		$field4name = $row["genre_name"];


 
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
				  <td>'.$field3name.'</td> 
				  <td>'.$field4name.'</td>


              </tr>';
    }



?>

</html>

