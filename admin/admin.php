<?php include 'get_data.php'; ?>



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>  Admin </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                   
		                
                        
                       
                        <div class="col-sm-3"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>ADMIN PAGE         <a href="../index.html">Log Out </a></h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				 <form role="form" action="" method="post" class="registration-form">
				                    	
										
                      <div class="form-group">
                      
                        <label class="sr-only " for="category">Category</label>
                        
                          <select id="company" class="form-control" name="cat">
                            <option>Apti</option>
                            <option>Maths</option>
                            
                          </select> 
                        
                        </div>
                      <div class="form-group">
                        <label class="sr-only " for="Level">Level</label>
                        
                          <select id="company" class="form-control" name="level">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select> 
                        
                        </div>
                        <div class="form-group">
				                        	<label class="sr-only" for="form-question">Question</label>
				                        	<input type="text" name="question" placeholder="Question" class="form-email form-control" id="form-email">
                        <div class="form-group">
				                        	<label class="sr-only" for="form-correct">Score</label>
				                        	<input type="int" name="score" placeholder="Score" class="form-email form-control" id="form-email">
										</div>
										</div>
				                       
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-correct">Correct Option</label>
				                        	<input type="text" name="answer0" placeholder="Correct Option" class="form-email form-control" id="form-email">
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="form-option">Option 1</label>
				                        	<input type="text" name="answer1" placeholder="Option 1" class="form-email form-control" id="form-email">
										</div>
										<div class="form-group">
												<label class="sr-only" for="form-branch">Option 2</label>
												<input type="text" name="answer2" placeholder="Option 2" class="form-branch form-control" id="form-branch">
											</div>
											
				                        
				                        <button type="submit" class="btn">Submit</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>