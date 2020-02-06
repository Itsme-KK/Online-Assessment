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
		<h3><label>Set codes for Electrical Semester VI Subjects.</label></h3>
		<br>
		<form action="ee_submit.php" method="POST">
			<label>Code For Power System Analysis</label>
			<input type="text" name="psa" required><br>
			<label>Code For Electrical Machines-III</label>
			<input type="text" name="em3" required><br>
			<label>Code For Utilization of Electrical Energy</label>
			<input type="text" name="uee" required><br>
			<label>Code For Control System-I</label>
			<input type="text" name="cs1" required><br>
			<label>Code For Microcontroller and its Applications</label>
			<input type="text" name="ma" required><br>
			<label>Code For Project Management</label>
			<input type="text" name="pm" required>
			<br><br><button type="Submit" name="sem6" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>