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
		<h3><label>Set codes for Computer Semester III Subjects.</label></h3>
		<br>
		<form action="co_submit.php" method="POST">
			
			<br><br><button type="Submit" name="sem3" class="btn btn-default">Submit</button>
		</form>
	</div>

</body>
</html>