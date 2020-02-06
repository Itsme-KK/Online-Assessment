<!DOCTYPE html>
<html>
<head>
	<?php session_start();?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/index_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<img class="img-responsive" src="../../images/KTC.jpg" alt="AIKTC" width="100%" height="auto">
		<br><br>
		<h3><label>Set codes for Civil Semester III Subjects.</label></h3>
		<br>
		<form action="ce_submit.php" method="POST">
			<label>Code For Surveying-II</label>
			<input type="text" name="survey2" required><br>
			<label>Code For Structural Analysis-I</label>
			<input type="text" name="struc_analysis1" required><br>
			<label>Code For Building Design and Drawing-I</label>
			<input type="text" name="build_design_drawing1" required><br>
			<label>Code For Concrete Technology</label>
			<input type="text" name="ct" required><br>
			<label>Code For Fluid Mechanics-II</label>
			<input type="text" name="fluid_mech2" required>
			<br><br><button type="submit" name="sem4" class="btn btn-default">Submit</button>
		</form>
	</div>
		
</body>
</html>