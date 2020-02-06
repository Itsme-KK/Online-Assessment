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
		<h3><label>Set codes for Electronics & Telecommunication Semester V Subjects.</label></h3>
		<br>
		<form action="extc_submit.php" method="POST">
			<label>Code For Microcontrollers and Applications</label>
			<input type="text" name="ma" required><br>
			<label>Code For Analog Communication</label>
			<input type="text" name="ac" required><br>
			<label>Code For Random Signal Analysis</label>
			<input type="text" name="rsa" required><br>
			<label>Code For RF Modeling and Antennas</label>
			<input type="text" name="rfma" required><br>
			<label>Code For Integrated Circuits</label>
			<input type="text" name="ic" required><br>
			<label>Code For Business Communication and Ethics</label>
			<input type="text" name="bce" required><br>
			<label>Code For Communication Engineering Laboratory-I</label>
			<input type="text" name="celab1" required><br>
			<label>Code For Communication Engineering Laboratory-II</label>
			<input type="text" name="celab2" required><br>
			<label>Code For Mini Project-I</label>
			<input type="text" name="miniproj1" required>
			<br><br><button type="Submit" name="sem5" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>