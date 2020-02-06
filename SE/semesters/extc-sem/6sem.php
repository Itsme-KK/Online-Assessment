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
		<h3><label>Set codes for Electronics & Telecommunication Semester VI Subjects.</label></h3>
		<br>
		<form action="extc_submit.php" method="POST">
			<label>Code For Digital Communication</label>
			<input type="text" name="dc" required><br>
			<label>Code For Discrete Time Signal Processing</label>
			<input type="text" name="dtsp" required><br>
			<label>Code For Computer Communication and Telecom Networks</label>
			<input type="text" name="cctn" required><br>
			<label>Code For Television Engineering</label>
			<input type="text" name="tve" required><br>
			<label>Code For Operating Systems</label>
			<input type="text" name="os" required><br>
			<label>Code For VLSI Design</label>
			<input type="text" name="vlsi" required><br>
			<label>Code For Communication Engineering Laboratory-III</label>
			<input type="text" name="celab3" required><br>
			<label>Code For Communication Engineering Laboratory-IV</label>
			<input type="text" name="celab4" required><br>
			<label>Code For Mini Project-II</label>
			<input type="text" name="miniproj2" required>
			<br><br><button type="Submit" name="sem6" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>