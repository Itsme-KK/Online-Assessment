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
		<h3><label>Set codes for Electronics & Telecommunication Semester IV Subjects.</label></h3>
		<br>
		<form action="extc_submit.php" method="POST">
			<label>Code For Analog Electronics-II</label>
			<input type="text" name="ae2" required><br>
			<label>Code For Microprocessor and Peripherals</label>
			<input type="text" name="mp" required><br>
			<label>Code For Wave Theory and Propagation</label>
			<input type="text" name="wtp" required><br>
			<label>Code For Signals and Systems</label>
			<input type="text" name="ss" required><br>
			<label>Code For Control Systems</label>
			<input type="text" name="cs" required><br>
			<label>Code For SSW Laboratory</label>
			<input type="text" name="sswlab" required><br>
			<br><br><button type="Submit" name="sem4" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>