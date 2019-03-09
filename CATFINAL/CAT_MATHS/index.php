<?php
require 'header.php';

?>

	<div class="container">

	<form class="form-signin" method="post" action="start_quiz.php" style="margin-top:70px;">
		
		<?php
			if(!isset($_SESSION['username'])){
				echo '<h1 style="font-size:30px;" class="form-signin-heading text-danger"> We need a user! </h1>';
				echo '<label  for="username" style="font-size:30px !important;" class="sr-only">Username</label>';
				echo '<input name="username" style="font-size:20px; !important;" type="input" id="username" class="form-control text-primary" placeholder="Username" required autofocus>';
			}
			else
				echo '<h2 class="form-signin-heading"> Welcome ' . $_SESSION['username'] . '!</h2>';
		?>
		<button class="btn btn-lg btn-primary btn-block" style="font-size:20px; !important;" type="submit">Start</button>
	</form>

    </div>

<?php
require 'footer.php';
?>