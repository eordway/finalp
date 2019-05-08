<?php
session_start();
$_SESSION = array();
session_destroy();
include_once("flashheader.php");
?>

You logged out! 

<?php 
include_once("flashfooter.php");
?>
