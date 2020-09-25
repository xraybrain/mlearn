<?php
$host = "us-cdbr-east-02.cleardb.com";
$user = "b37a8abc52df42";
$password = "017b786c";
$db = "heroku_008a42196f61275";

$con = mysqli_connect($host,$user,$password) or die("Could not connect to database");
mysqli_select_db($con, $db) or die("No database selected");

?>