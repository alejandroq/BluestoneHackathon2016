<?php 
$mysql_server = "127.0.0.1"; 
$mysql_user = "user"; 
$mysql_password = "1234"; 
$mysql_db = "db"; 
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db); 
if ($mysqli->connect_errno) { 
	printf("Connection failed: %s \n", $mysqli->connect_error); 
	exit(); 
} 
$mysqli->set_charset("utf8"); 
?> 
