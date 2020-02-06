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
		<h3><label>Set codes for Electrical Semester III Subjects.</label></h3>
		<br>
		<form action="ee_submit.php" method="POST">
			<label>Code For Electronic Devices and Circuits</label>
			<input type="text" name="edc" required><br>
			<label>Code For Conventional and Non-conventional Power Generation</label>
			<input type="text" name="cncpg" required><br>
			<label>Code For Electrical Networks</label>
			<input type="text" name="en" required><br>
			<label>Code For Electrical and Electronic Measurements</label>
			<input type="text" name="eem" required><br>
			<label>Code For Object Oriented Programming and Methodology</label>
			<input type="text" name="oopm" required><br>
			<br><br><button type="Submit" name="sem3" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>