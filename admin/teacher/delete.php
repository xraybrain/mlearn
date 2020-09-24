<?php
include "../../functions/connect.php";
if($_GET['teacher_Id'])
{
$id=$_GET['teacher_Id'];
 $sql = "DELETE FROM tbl_teacher WHERE teacher_Id='$id'";
 mysqli_query($con,$sql);
}

?>