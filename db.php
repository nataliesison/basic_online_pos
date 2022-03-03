<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "chanel_pos";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {
	echo "Connection success";
}
else{
	echo "Connection failed";
}
?>