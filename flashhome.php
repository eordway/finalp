<?php
$date= date ("Y-m-d");
setcookie("date", $date);
setcookie("name", "em");
?>
<!DOCTYPE html>
<html>
<head> 
 <link rel = "stylesheet"
   type = "text/css"
   href = "flashstyle.css" />
   <title>Flash Game Database</title>
  </head>
<body>
<h2> Greetings!!</h2>
<?php
include_once("flashheader.php");

# connect to db
$conn = new mysqli("localhost", "root", "", "eordway");
if ($conn->connect_error) die($conn->connect_error);
	
	
# construct query
$query = 'SELECT * FROM `games` ORDER BY RAND() LIMIT 10';
	
//'SELECT games.name, creator.creator_name, games.upload_date, games.rating, games.description, games.url
//FROM creator
//INNER JOIN games ON creator.creator_id=games.creator_id';


# send to db
$result = $conn->query($query);
if (!$result) die($conn->error);
# output to user 

	

#printing table and column headings
echo '<table id= "hometable" border="1px" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Game</font> </td> 
		  <td> <font face="Arial">Creator</font> </td> 
          <td> <font face="Arial">Date Published</font> </td> 
          <td> <font face="Arial">Rating</font> </td> 
          <td> <font face="Arial">Summary</font> </td> 
          <td> <font face="Arial">Location</font> </td> 
      </tr>';
 
#return elements from database while they are not null, store in variable
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
		$field2name = $row["creator_id"];
        $field3name = $row["upload_date"];
        $field4name = $row["rating"];
        $field5name = $row["description"];
        $field6name = $row["url"]; 
 
#echo variables in table rows 	    
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 

              </tr>';
    }


#include_once("flashfooter.php");

?>
<p id= "login"><a href="flashloginpage.php">Login</a></p>

<p id= "addone"><a href="newgame.php">Add new game</a></p>

</body>
</body>

</html>





















