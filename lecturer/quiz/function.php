<?php


function dbcon(){
	$host = "us-cdbr-east-02.cleardb.com";
	$user = "b37a8abc52df42";
	$pwd = "017b786c";
	$db = "heroku_008a42196f61275";
	
	global $con;
	$con = mysqli_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");
	
	$sel = mysqli_select_db($con,$db);
}

function dbclose(){
	$host = "us-cdbr-east-02.cleardb.com";
	$user = "b37a8abc52df42";
	$pwd = "017b786c";
	$db = "heroku_008a42196f61275";
	
	$con = mysqli_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");
	
	$sel = mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	mysqli_close($con);
}

function topic(){
	dbcon();
	global $con;
	$sel = mysqli_query($con,"SELECT * from tbl_topic") or die(mysqli_error($con));
	
	if($sel==true){
		while($row=mysqli_fetch_assoc($sel)){
			extract($row);
			echo '<option value='.$topic_Id.'>'.$name.'</option>';
		}
	}
	
	
	dbclose();
}

?>