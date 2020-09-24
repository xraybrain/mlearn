<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_elearning";

$con = mysqli_connect($host,$user,$password) or die("Could not connect to database");
mysqli_select_db($con, $db) or die("No database selected");

?>