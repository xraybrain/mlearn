<?php 

session_start();

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$pwd = md5($password);

$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$pwd'";
$result = mysqli_query($con,$query) or die ("Verification error");
$array = mysqli_fetch_array($result);

if ($array['username'] == $username){
    $_SESSION['username'] = $username;
    $_SESSION['fname'] = $array['fname'];
    $_SESSION['lname'] = $array['lname'];
    $_SESSION['user_Id'] = $array['user_Id'];
    header("Location: ../student/home.php");
}

else{
    echo '<script language="javascript">';
    echo 'alert("Incorrect username or password")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content="0;url=../student/index.php" />';
}

?>