<?php
session_start();
if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
}
else
{
	header("Location:../index.php");
}
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="free-educational-responsive-web-template-webEdu">
<meta name="author" content="webThemez.com">
<title>M-Learning</title>
<link rel="icon" type="image/png"  href="../images/favicon.png">
<link rel="stylesheet" media="screen" href="../http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css"> 
<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen"> 
<link rel="stylesheet" href="../css/style.css">
<link rel='stylesheet' id='camera-css'  href='../css/camera.css' type='text/css' media='all'> 
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../js/html5shiv.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header">
<!-- Button for smallest screens -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<a class="navbar-brand" href="home.php">
<img src="../images/logo.png" alt="Techro HTML5 template"></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav pull-right mainNav">
<li class="active"><a href="home.php">Home</a></li>

<li class="dropdown">
<a href="../#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?> <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="user-details.php">Profile</a></li>
<li><a href="../functions/user_logout.php">Logout</a></li>
</ul>
</li>


</ul>
</div>
<!--/.nav-collapse -->
</div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary">
<div class="container">
<h1>User Details</h1>
</div>
</header>


<div class="container">


</div>
<div id="courses">
<section class="container">
<h3>Update Account Information</h3>
<div class="row">
<div class="col-md-8">
<div class="featured-box"> 
<?php
include "../functions/connect.php";

$s = mysqli_query($con,"SELECT * FROM `tbl_user` WHERE `username`='$username'");
while($r = mysqli_fetch_array($s)){
	$Id = $r['user_Id'];
	$f = $r['fname'];
	$m = $r['mname'];
	$l = $r['lname'];
	$dob = $r['dob'];
	$g = $r['gender'];
	$crs = $r['course'];
	$y = $r['yrlvl'];
	$uname = $r['username'];
	$pwd = $r['password'];
	
}
extract($_POST);
if(isset($upt)){
	
	$e = mysqli_query($con,"UPDATE `tbl_user` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`dob`='$dob',`gender`='$gender',`course`='$course',`yrlvl`='$yrlvl',`username`='$username',`password`='$password' WHERE `username`='$username'");
	if($e==true)
	{
		echo '<script language="javascript">';
		echo 'alert("Successfully Updated")';
		echo '</script>';
		echo '<meta http-equiv="refresh" content="0;url=user-details.php" />';
	}
}

?>	
<form method="POST">
<label>First Name</label>
<input type="text"name="fname"  id="form" class="form-control"placeholder="First Name"  value=<?php echo $f;?> /><br>
<label>Middle Name</label>
<input type="text" name="mname" id="form" class="form-control"placeholder="Middle Name"  value=<?php echo $m;?> /><br>
<label>Last Name</label>
<input type="text" name="lname" id="form" class="form-control"placeholder="Last Name"  value=<?php echo $l;?> /><br>
<label>Date of birth</label>
<input type="date" name="dob" id="form"class="form-control"  value=<?php echo $dob;?> ><br>
<label>Gender</label>
<select name="gender" class="form-control"id="form"  >
<option><?php echo $g;?></option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br>
<label>Department</label>
<select name="course" class="form-control"id="form"  >
<option><?php echo $crs;?></option>
</select><br>
<label>Year level</label>
<select name="yrlvl"class="form-control" id="form"  >
<option value="ND1" <?php echo $y=="ND1"? "selected" : "";?>>ND1</option>
<option value="ND2" <?php echo $y=="ND2"? "selected" : "";?>>ND2</option>
<option value="HND1" <?php echo $y=="HND1"? "selected" : "";?>>HND1</option>
<option value="HND2" <?php echo $y=="HND2"? "selected" : "";?>>HND2</option>
</select><br>
<label>Username</label>
<input type="text" id="form" name="username"class="form-control" placeholder="Username"  value=<?php echo $uname;?> ><br>
<label>Password</label>
<input type="password" id="form" name="password" class="form-control"placeholder="Password"  value=<?php echo $pwd;?> ><br>
<input type="submit" value="Update" name="upt" class="btn btn-primary" />
</form>
</div>
</div>

</div>

</div>

</section>
</div>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="../js/modernizr-latest.js"></script> 
<script type='text/javascript' src='../js/jquery.min.js'></script>
<script type='text/javascript' src='../js/fancybox/jquery.fancybox.pack.js'></script>

<script type='text/javascript' src='../js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='../js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='../js/camera.min.js'></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/custom.js"></script>
<script>
jQuery(function(){
	
	jQuery('#camera_wrap_4').camera({
		transPeriod: 500,
		time: 3000,
		height: '600',
		loader: 'false',
		pagination: true,
		thumbnails: false,
		hover: false,
		playPause: false,
		navigation: false,
		opacityOnGrid: false,
		imagePath: 'images/'
	});
	
});

</script>

</body>
</html>
