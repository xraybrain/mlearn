<?php


function dbcon(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "db_elearning";

	global $con;
	$con = mysqli_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");

	$sel = mysqli_select_db($con,$db) or die(mysqli_error($con));
}

function dbclose(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "db_elearning";

	$con = mysqli_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");

	$sel = mysqli_select_db($con,$db);

	mysqli_close($con);
}

function category(){
	dbcon();
	global $con;

	$sel = mysqli_query($con,"SELECT * from tbl_category");

	if($sel==true){
		while($row=mysqli_fetch_assoc($sel)){
			extract($row);
			echo '<option value='.$cat_Id.'>'.$name.'</option>';
		}
	}


	dbclose();
}
function sub(){
	dbcon();
	global $con;
	
	$sel = mysqli_query($con,"SELECT * from tbl_topic");

	if($sel==true){
		while($row=mysqli_fetch_assoc($sel)){
			extract($row);
			echo '<option value='.$topic_Id.'>'.$title.'</option>';
		}
	}


	dbclose();
}


?>