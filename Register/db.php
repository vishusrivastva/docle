<?php
$mysql_hostname = "localhost";
$mysql_user ="root";
$mysql_password ="";
$mysql_database ="practice";
$dbc = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
mysqli_select_db($dbc,$mysql_database) or die("opps! database not connected");

?>
