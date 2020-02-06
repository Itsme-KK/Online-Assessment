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
			<label>Code For Surveying-I</label>
			<input type="text" name="survey1" required><br>
			<label>Code For Strength Of Materials</label>
			<input type="text" name="som" required><br>
			<label>Code For Building Materials and Construction</label>
			<input type="text" name="bmc" required><br>
			<label>Code For Engineering Geology</label>
			<input type="text" name="engg_geology" required><br>
			<label>Code For Fluid Mechanics-I</label>
			<input type="text" name="fluid_mech1" required><br>
			<label>Code For Database and Information Retrieval System</label>
			<input type="text" name="db_info_retrieve_sys" required>
			<br><br><button type="Submit" name="sem3" class="btn btn-default">Submit</button>
		</form>

	</div>

</body>
</html>