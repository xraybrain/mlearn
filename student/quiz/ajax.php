<?php
require_once '../../functions/connect.php';

$response=mysqli_query($con,"select quiz_Id,question_name,answer from tbl_quiz");
	 $i=1;
	 $right_answer=0;
	 $wrong_answer=0;
	 $unanswered=0;
//var_dump($_POST);
	 while($result=mysqli_fetch_array($response)){ 
	 	
	       if($result['answer']==$_POST["answer_" . $result['quiz_Id']]){
		       $right_answer++;
		   }else if($_POST["answer_" . $result['quiz_Id']]==""){
		       $unanswered++;
		   }
		   else{
		       $wrong_answer++;
		   }
		   $i++;
	 }
	
	 echo "<div id='answer' class='well'>";
	 echo "<table class='table table-striped table-responsive'>";
	 echo "<caption>Practice Report Sheet</caption>";
	 echo "<tr><th>Right Answer</th><td>". $right_answer. "</td></tr>";
	 echo "<tr><th>Wrong Answer</th><td>". $wrong_answer. "</td></tr>";
	 echo "<tr><th>Unanswered Question</th><td>". $unanswered. "</td></tr>";
	 echo "</table>";
	 echo "</div>";




/*$limit=$_POST['question_num'];
//$limit1=$limit+1;
$response=mysqli_query("select * from questions");


$data=array();
$data1=array();
while($result=mysqli_fetch_array($response)){
$data['question_name']=$result['question_name'];
$data['answer1']=$result['answer1'];
$data['answer2']=$result['answer2'];
$data['answer3']=$result['answer3'];
$data['answer4']=$result['answer4'];
$data['answer']=$result['answer'];
$data['id']=$result['id'];
array_push($data1, $data);
$data="";
}
$a=json_encode($data1);
echo $a;*/
?>