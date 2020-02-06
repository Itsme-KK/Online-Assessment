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
		<form action="#" method="POST">
			<label>Code For Structural Analysis-II</label>
			<input type="text" name="struc_analysis2" required><br>
			<label>Code For Geotechnical Engineering-I</label>
			<input type="text" name="geo_tech1" required><br>
			<label>Code For Building Design and Drawing-II</label>
			<input type="text" name="build_design_drawing2" required><br>
			<label>Code For Applied Hydraulics-I</label>
			<input type="text" name="applied_hydro1" required><br>
			<label>Code For Transportaion Engineering-I</label>
			<input type="text" name="trans_engg1" required><br>
			<label>Code For Employment and Corporate Skills</label>
			<input type="text" name="emp_corpo_skills" required>
			<br><br><button type="button" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
</html>