<?php
require 'conf/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>ONLINE ADAPTIVE TEST</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="../../assets/js/html5shiv.js"></script>
	<script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
      	<li><h1 style="font-size:50px;color:violet;">Smart Test</h1><h2>An Adaptive Assesment System</h2></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      	<?php
      		if(isset($_SESSION['username'])){
      			echo '
      				<li style="font-size:20px;" class="dropdown">
          				<a href="#" style="color:blue;" class="dropdown-toggle  text-succcess" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          				' . $_SESSION["username"] . '
      						
          				</a>
          			    <ul class="dropdown-menu">
            				<li><a href="sign-out.php" class="text-primary" >Sign out</a></li>
            			</ul>
        			</li>
      			';
      		}
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>