<?php
require 'header.php';

?>

<?php

	$sql = "select count(*) as total from `user_answers` where `user_id` = " . $_SESSION['user_id'] . " AND is_correct = (1)";
	
	$result = mysqli_query($link,$sql);

	$data=mysqli_fetch_assoc($result);
	$num_of_questions = $data['total'];

	$num_correct_answers = $num_of_questions;

?>

<div class="col-md-3">
</div>

<div class="col-md-6">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title question">Result</h3>
	  </div>
	  <div class="panel-body">

	  		<h3>
	   			<?php echo $num_correct_answers . ' correct answers!' ?>
	  		</h3>
			  <a href="../../dashboard/dashboard.php">Return To dashboard</a>
	  </div>
	</div>
</div>

<div class="col-md-3">
</div>

<?php
require 'footer.php';
?>