<?php require_once '../../functions/connect.php';?>
<!DOCTYPE html>
<html>
<head>
<title>M-Learning</title>
<meta charset='utf-8'>
<link rel='stylesheet' href='../../css/bootstrap.min.css'/>
<link rel='stylesheet' href='css/style.css'/>
 <link rel="icon" type="image/png"  href="../../images/favicon.png">
 <script>
//This script is to disable copy and paste.
  function disableCopy(e){
    return false
  }
   
  function reEnable(){
    return true
  }
   
  //document.onselectstart=new Function ("return false")
  // if (window.sidebar){
  //   document.onmousedown=disableCopy
  //   document.onclick=reEnable
  // }
</script>
</head>

<body >

	<div class="container">
		<a href="../home.php" class="btn btn-default" style="margin-top: 5px;">Back to home</a>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel">

	<div class="panel-body">
		<h1>Practice what you have learn!</h1>

		<?php $response=mysql_query("select * from tbl_quiz");?>

		<form method='post' id='quiz_form' class="well">
		<?php 
		$i = 1;
		while($result=mysql_fetch_array($response)){ ?>
		<div id="question_<?php echo $i;?>" class='questions'>
		<h4 id="question_<?php echo $i;?>"><?php echo $i.".".$result['question_name'];?></h4>
		<div class='align'>
		<input type="radio" value="<?php echo $result['answer1'];?>" id='radio1_<?php echo $result['quiz_Id'];?>' name='answer_<?php echo $result['quiz_Id'];?>'>
		<label id='ans1_<?php echo $result['quiz_Id'];?>' for='1'><?php echo $result['answer1'];?></label>
		<br/>
		<input type="radio" value="<?php echo $result['answer2'];?>" id='radio2_<?php echo $result['id'];?>' name='answer_<?php echo $result['quiz_Id'];?>'>
		<label id='ans2_<?php echo $result['quiz_Id'];?>' for='1'><?php echo $result['answer2'];?></label>
		<br/>
		<input type="radio" value="<?php echo $result['answe3'];?>" id='radio3_<?php echo $result['quiz_Id'];?>' name='answer_<?php echo $result['quiz_Id'];?>'>
		<label id='ans3_<?php echo $result['quiz_Id'];?>' for='1'><?php echo $result['answe3'];?></label>
		<br/>
		<input type="radio" value="<?php echo $result['answer4'];?>" id='radio4_<?php echo $result['quiz_Id'];?>' name='answer_<?php echo $result['quiz_Id'];?>'>
		<label id='ans4_<?php echo $result['quiz_Id'];?>' for='1'><?php echo $result['answer4'];?></label>
		<input type="radio" checked='checked' value="" style='display:none' id='radio4_<?php echo $result['quiz_Id'];?>' name='answer_<?php echo $result['quiz_Id'];?>'>
		</div>
		<br/>
		<input type="button" id='next<?php echo $i;?>' value='Next!' name='question' class='butt'/>
		</div>
		<?php 
				$i++; 
			}
		?>
		</form>
			<div id='result' class="mx-auto text-center">
				<img src='results.jpg' alt='Results' class="img-responsive mx-auto" width="200" />
				<br/>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>


<div id="demo1" class="demo" style="text-align:center;font-size: 25px;">00:00:00</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/watch.js"></script>
<script>
$(document).ready(function(){
	$('#demo1').stopwatch().stopwatch('start');
	var steps = $('form').find(".questions");
	var count = steps.size();
	steps.each(function(i){
		hider=i+2;
		if (i == 0) { 	
    		$("#question_" + hider).hide();
    		createNextButton(i);
        }
		else if(count==i+1){
			var step=i + 1;
			//$("#next"+step).attr('type','submit');
            $("#next"+step).on('click',function(){
				clearTimeout(sessionId);
			   submit();
                
            });
	    }
		else{
			$("#question_" + hider).hide();
			createNextButton(i);
		}
		
	});
    function submit(){
	     $.ajax({
						type: "POST",
						url: "ajax.php",
						data: $('form').serialize(),
						success: function(msg) {
						  $("#quiz_form,#demo1").addClass("hide");
						  $('#result').show();
						  $('#result').append(msg);
						}
	     });
	
	}
	function createNextButton(i){
		console.log("here");
		var step = i + 1;
		var step1 = i + 2;
        $('#next'+step).on('click',function(){
        	$("#question_" + step).hide();
        	$("#question_" + step1).show();
        });
	}
	var sessionId = setTimeout(function() {
	      submit();
	}, 50000);
});
</script>
</body>
</html>