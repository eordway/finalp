<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" type="text/css" href="flashstyle.css">
   <title>Home</title>
<style><?php include_once 'flashstyle.css';?></style>
</head>
<body>
<h2 id= "hometitle">Welcome to the Flash Games Database!</h2>
<br>
<?php
include_once("flashheader.php");


$conn = new mysqli("localhost", "", "", "eordway");
if ($conn->connect_error) die($conn->connect_error);


$query = 'SELECT * FROM `creator` NATURAL JOIN `games` creator_id ORDER BY RAND() LIMIT 3';

$result = $conn->query($query);
if (!$result) die($conn->error);

	


echo '<table id= "hometable">
	<thead id= "columns">
      <tr> 
          <th>Game</th> 
		  <th>Creator</th> 
          <th>Date Published</th> 
          <th>Rating</th> 
          <th>Summary</th> 
          <th>Location</th> 
      </tr>
 </thead>';
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
		$field2name = $row["creator_name"];
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




?>




<html>

<div id= "dbsort">
<h3>Sort by: </h3>
<ul id = "databasesort">
<li><form id="sort" action= 'creatorsort.php' method='GET' name= 'creatorsort'>


<button type="submit" name="creator_sort" class="button">Creator</button>
	</form></li>
<br>
<li><form action='genresort.php' method='GET' name='genresort'>
<button type= 'submit' name='genre_sort' class= 'button'>Genre</button>
</form></li>
<br>
<li><form action='ratingsort.php' method='GET' name='ratingsort'>
<button type="submit" name= 'rating_sort' class="button">Rating</button>
</form></li>
<br>
<li><form action='datesort.php' method='GET' name='datesort'>
 <button type="submit" name="date_sort" class="button">Date</button>
 </form></li>
 </ul>
 </div>
</body>

</html>





















