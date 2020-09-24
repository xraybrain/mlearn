<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>M-Learning</title>

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../css/style.css">
	<link rel='stylesheet' id='camera-css' href='../css/camera.css' type='text/css' media='all'>
	<link rel="icon" type="image/png" href="../images/favicon.png">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
						class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="../images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="../admin/index.php">Administrator</a></li>
							<li><a href="../lecturer/index.php">Lecturer</a></li>
							<li><a href="../student/index.php">Student</a></li>
						</ul>
					</li>
					<li class="active"><a href="contact.php">Contact</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


	<header id="head" class="secondary">
		<div class="container">
			<h1>Contact Us</h1>
			<p>Random Visitors of the website can send message to the admin!</p>
		</div>
	</header>


	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 centered">
				<h3 class="section-title">Your Message</h3>
				<p>
					Fill-out the forms provided below in order to send message to the administrator
				</p>

				<form class="form-light mt-20" role="form" method="POST" action="process-contact.php">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" placeholder="Your name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email address">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" placeholder="Phone number">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input type="text" class="form-control" name="subject" placeholder="Subject">
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" id="message" name="message" placeholder="Write you message here..."
							style="height:100px;"></textarea>
					</div>
					<button type="submit" class="btn btn-two">Send message</button>
					<p><br /></p>
				</form>
			</div>
		</div>
	</div>
	<!-- /container -->
	<div class="social text-center">
		<a href="#"><i class="fa fa-twitter text-info"></i></a>
		<a href="#"><i class="fa fa-facebook text-primary"></i></a>
		<a href="#"><i class="fa fa-instagram text-danger"></i></a>
		<a href="#"><i class="fa fa-youtube text-danger"></i></a>
	</div>

	<div class="clear"></div>
	<!--CLEAR FLOATS-->
	</div>
	<div class="footer2">
		<div class="container">
			<div class="row">

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="simplenav">
							<a href="../index.php">Home</a> |
							<a href="about.php">About</a> |
							<a href="courses.php">Courses</a> |
							<a href="contact.php">Contact</a>
						</p>
					</div>
				</div>

				<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="text-right">
							Copyright &copy; 2020.
						</p>
					</div>
				</div>

			</div>
			<!-- /row of panels -->
		</div>
	</div>
	</footer>

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
		jQuery(function () {

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