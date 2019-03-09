<?php
require 'header.php';


if(!isset($_SESSION['username']))
	header("Location:index.php");
else if($_SESSION['question'] == 5)
	header("Location:result.php");

if(isset($_SESSION['question']))
	$_SESSION['question'] = $_SESSION['question'] + 1;
else 
	$_SESSION['question'] = 1;

# Check if the page load was for a question submit or is it a new quiz 
if(isset($_POST['submit'])){
	
	# This is an answer submit.

    $competency = $_SESSION["competency"];
    //echo("compt".$competency."</br>");
    $available_ids = $_SESSION["available_ids"];
    //echo("ids".$available_ids."</br>");	

	# Segregating answer_id and is_correct from form post variable
	$answer = explode( '|', $_POST["selected_answer"]);

    $answer_id = $answer[0];
    //echo("ans id".$answer_id."</br>");

    $is_correct = $answer[1];
    //echo("is core".$is_correct."</br>");

    //$is_correct = ($is_correct === chr(0x01));
    //echo('is core chr'.$is_correct."</br>");

	# Calculating the new competency based on the algo mentioned in readme.md
   	if($is_correct==1)
   		$competency = $competency + $_SESSION["previous_question_score"];
   	else{
   		$competency = $competency - (1 - $_SESSION["previous_question_score"]);
   		//$is_correct = 0;
       }		
       
    //echo("compt".$competency.'is cor'.$is_correct."</br>");

	# Adding the previous question's answer to the database

	$pk=$_SESSION["user_id"];
	$qid=$_SESSION["previous_question_id"];
	//echo('user id '.$_SESSION['user_id']);
	//echo('pk'.$pk);
	//echo ('qid'.$qid);
	//echo('aid'.$answer_id);
	echo('is'.$is_correct);



  $sql="INSERT INTO `user_answers`(`user_id`,`question_id`,`answer_id`,`is_correct`) VALUES ('$pk','$qid','$answer_id','$is_correct')";

	$insert=mysqli_query($link,$sql);

	if($competency < 1)
		$competency = 1;

	if($competency < 2)
		$level = 1;
	else if($competency < 3)
		$level = 2;
	else
        $level = 3;
    //echo("</br>".$level."level");

} else {

	# Starting a new quiz;

	# Calculating total number of questions
	$result=mysqli_query($link,"SELECT count(*) as total from questions where is_deleted = 0");
	$data=mysqli_fetch_assoc($result);
	$num_of_questions = $data['total'];

	$available_ids = range(1, $num_of_questions);

	$competency = $level = 1;

}	
	$_SESSION["competency"] = $competency;

	$available_ids_list = implode( ', ', $available_ids);

	# Randomly selecting questions for the calculated level
	$sql = "SELECT * FROM `questions` WHERE `id` IN ($available_ids_list) AND `level` = $level AND is_deleted = 0 ORDER BY rand()";

	$result = mysqli_query($link,$sql);

	$question = mysqli_fetch_assoc($result);

	$answers = mysqli_query($link, "SELECT * FROM `answers` WHERE `question_id` = " . $question['id']);

	# removing the fetched question's ids from available ids
	# so that this question is not presented to the user again
	if (($key = array_search($question['id'], $available_ids)) !== false) {
	    unset($available_ids[$key]);
	}

	# Setting required session variables for use in next question and storing data
	$_SESSION["available_ids"] = $available_ids;
	$_SESSION["previous_question_score"] = $question['score'];
	$_SESSION["previous_question_id"] = $question['id'];

?>

<div class="col-md-3">
</div>
<div class="col-md-6">
	<div class="panel panel-default question-box">
	  <div class="panel-heading">
        <h3 class="panel-title question"><?php echo ("QUESTION : ".$question["question"]);
        echo("<br>MARKS : ".$competency);?></h3>
	    <h3 class="panel-title info"><?php echo $_SESSION["question"]?> off 8</h3>
			<h3 class="panel-title info"></br>LEVEL : <?php echo ($level); ?></h3>
	  </div>
	  <div class="panel-body">
	  	<form action="quiz.php" method="post">
	  		<div class="form-group" id="answers-group">

	   			<?php while($row = mysqli_fetch_assoc($answers)) { ?>

	  				<span class="radio col-md-6">
						<input class="radio_buttons optional" id="answer<?php echo $row['id'] ?>" name="selected_answer" type="radio" value="<?php echo $row['id'] . '|' . $row['is_correct'] ?>"> <?php echo $row['answer'] ?>
		  			</span>
	 
			    <?php } ?> 
	  		</div>
	  		<button class="btn btn-default" type="submit" name="submit" id="submit-answer">
	  			Submit
	  		</button>
	  	</form>
	  </div>
	</div>
</div>
<div class="col-md-3">
</div>

<?php
require 'footer.php';
?>