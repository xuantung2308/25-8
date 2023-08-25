<?php

$sname= "localhost";
$user_name= "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($sname, $user_name, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}