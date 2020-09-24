<?php
include "../../functions/connect.php";
if($_GET['user_Id'])
{
  $id=$_GET['user_Id'];
  $sql = "DELETE FROM tbl_user WHERE user_Id='$id'";
  mysqli_query( $con,$sql);
}

?>