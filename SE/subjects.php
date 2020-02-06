<!DOCTYPE html>
<html>
<head>
	<?php session_start();
	if(!$_SESSION['se']){
      header("location: code_generator.php");
      die;
    }
    ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<img class="img-responsive" src="images/KTC.jpg" alt="AIKTC" width="100%" height="auto">
		<hr>
		<h3 style="text-align: center;">Now Set Codes For Subjects. According to their Department...</h3>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<h2><label><a href="semesters/ce_sem.php" style="text-decoration:none">Civil Engineering</a></label></h2>
			</div>
			<div class="col-sm-4">
				<h2><label><a href="semesters/co_sem.php" style="text-decoration:none">Computer Engineering</a></label></h2>
			</div>
			<div class="col-sm-4">
				<h2><label><a href="semesters/extc_sem.php" style="text-decoration:none">Electronics & Telecommunication Engineering</label></a></h2>
			</div>			
		</div>
		<div class="row">
			<div class="col-sm-4">
				<h2><label><a href="semesters/ee_sem.php" style="text-decoration:none">Electrical Engineering</a></label></h2>
			</div>
			<div class="col-sm-4">
				<h2><label><a href="semesters/me_sem.php" style="text-decoration:none">Mechanical Engineering</label></a></h2>
			</div>
		</div>
	</div>
</body>
</html>