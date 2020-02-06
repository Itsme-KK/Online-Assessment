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
		<h3><label>Set codes for Electrical Semester V Subjects.</label></h3>
		<br>
		<form action="ee_submit.php" method="POST">
			<label>Code For Protection and Switchgear Engineering</label>
			<input type="text" name="pse" required><br>
			<label>Code For Electrical Machine-II</label>
			<input type="text" name="em2" required><br>
			<label>Code For Electromagnetic Fields and Waves</label>
			<input type="text" name="efw" required><br>
			<label>Code For Power Electronics</label>
			<input type="text" name="pe" required><br>
			<label>Code For Communication Engineering</label>
			<input type="text" name="ce" required><br>
			<label>Code For Business Communication and Ethics</label>
			<input type="text" name="bce" required>
			<br><br><button type="Submit" name="sem5" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>