<?php
		include "../functions/connect.php";
        $comment = mysqli_real_escape_string($con,$_POST['comment']);
        $userid = $_POST['userid'];
        $postid = $_POST['postid'];
        date_default_timezone_set("Africa/Lagos");
        $datetime=date("Y-m-d h:i:sa");
        $comment = mysqli_query($con,"Insert into tbl_comment (comment,sub_Id,user_Id,datetime) values ('$comment','$postid','$userid','$datetime') ");
        $sql = mysqli_query($con,"SELECT * from tbl_comment as c join tbl_user as u on c.user_Id=u.user_Id where sub_Id='$postid' and c.user_Id='$userid' 
        					and c.datetime='$datetime'");

	 while($row=mysqli_fetch_assoc($sql)){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }



              ?>