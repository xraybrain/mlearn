<?php
  session_start();
  if (isset($_SESSION['adm_user'])&&$_SESSION['adm_user']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$adm_user=$_SESSION['adm_user'];
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>M-Learning</title>
        <!-- Bootstrap -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../../assets/styles.css" rel="stylesheet" media="screen">
        <link href="../../assets/DT_bootstrap.css" rel="stylesheet" media="screen">
         <link rel="icon" type="image/png"  href="../../images/favicon.png">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="../../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $adm_user;?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="../account/index.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                     
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="../home.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        
                        <li  class="active">
                        <?php
                                    include '../../functions/connect.php';

                                    $result=mysqli_query($con,"SELECT count(*) as total from tbl_teacher");
                                    $data=mysqli_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                            <a href="../teacher/index.php"><span class="badge badge-success pull-right"><?php echo $percent;?></span> Lecturers</a>
                        </li>
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=mysqli_query($con, "SELECT count(*) as total from tbl_user");
                                    $data=mysqli_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                            <a href="../students/index.php"><span class="badge badge-success pull-right"><?php echo $percent;?></span> Students</a>
                        </li>

                        <li>
                          <?php
                                    include '../../functions/connect.php';

                                    $result=mysqli_query($con,"SELECT count(*) as total from tbl_category");
                                    $data=mysqli_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                            <a href="../category/index.php"><span class="badge badge-info pull-right"><?php echo $percent;?></span> Courses</a>
                        </li>
                        <li>
                        <?php
                                    include '../../functions/connect.php';

                                    $result=mysqli_query($con,"SELECT count(*) as total from tbl_contact");
                                    $data=mysqli_fetch_assoc($result);
                                    $percent = $data['total'];
                                    
                                    ?>
                            <a href="../message/index.php"><span class="badge badge-info pull-right"><?php echo $percent;?></span> Messages</a>
                        </li>
                     
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                 
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <ul class="breadcrumb">
                                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <li>
                                            <a href="../home.php">Dashboard</a> <span class="divider">/</span>    
                                        </li>
                                        <li class="active">Lecturers</li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
             <div class="row-fluid">
                     <div class="span6">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Lecturer</div>
                            </div>
                            <div class="block-content collapse in">
                           
                               <form method="POST"> 
                                   <label>First Name</label>
                                   <input type="text" class="form-control" name="fname" required>
                                   <label>Middle Name</label>
                                   <input type="text" class="form-control" name="mname" required>
                                   <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" required>
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required><br>
                                    <input type="submit" name="add"class="btn btn-primary" value="Add">
                               </form>
                            </div>
                            </div>
                            <?php
                     include "../../functions/connect.php";
                       extract($_POST);

                    if(isset($add)){
                      $fname = str_replace("'","`",$fname); 
                      $fname = mysqli_real_escape_string($con,$fname);
                      
                      $lname = str_replace("'","`",$lname); 
                      $lname = mysqli_real_escape_string($con,$lname); 
                              
                      $username = str_replace("'","`",$username); 
                      $username = mysqli_real_escape_string($con,$username); 

                      $password = str_replace("'","`",$password); 
                      $password = mysqli_real_escape_string($con,$password);
                     // $password = md5($password);

                       $sql ="INSERT INTO `tbl_teacher`(`fname`, `mname`, `lname`, `uname`, `pwd`) VALUES ('$fname','$mname','$lname','$username','$password')";
                       $run = mysqli_query($con,$sql);

                                        if($run==true)
                                  {
                                        echo '<script language="javascript">';
                                        echo 'alert("Successfully Added")';
                                        echo '</script>';
                                        echo '<meta http-equiv="refresh" content="0;url=add.php" />';
                                  }

                                  }

                        ?>
                        </div>
                        <!-- /block -->
                    </div>
                    </div>
               
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; <span id="year"></span></p>
            </footer>
        </div>
         <script src="../../vendors/jquery-1.9.1.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="../../assets/scripts.js"></script>
        <script src="../../assets/DT_bootstrap.js"></script>
       
        <script>
        $(function() {
            
        });
        </script>

    </body>

</html>
