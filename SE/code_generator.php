<!DOCTYPE html>
<html>
<head>
	<?php session_start(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<img class="img-responsive" src="images/KTC.jpg" alt="AIKTC" width="100%" height="auto">
		<div class="topnav" id="myTopnav">
			<a href="index.php">Home</a>
			<a href="code_generator.php" class="active">Code generator</a>
			<a href="#">Help</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
		<hr>
	  	<div class="panel-group" id="accordion">
	    	<div class="panel panel-default">
	      		<div class="panel-heading" style="background-color: lightskyblue;">
	        		<h4 class="panel-title">
	          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Change Code For Year.</a>
	        		</h4>
	      		</div>
	      		<div id="collapse1" class="panel-collapse collapse in">
	        		<div class="panel-body">
	        			<form action="codes.php" method="POST">
	        			<label>Code For Second Year.</label>
	        			<input type="text" name="se_class" required>
	        			<label>Code For Third Year.</label>
	        			<input type="text" name="te_class" required>
	        		</div>
	      		</div>
	    	</div>
	    	<div class="panel panel-default">
	      		<div class="panel-heading" style="background-color: lightskyblue;">
	        		<h4 class="panel-title">
	          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Change Code For Department.</a>
	        		</h4>
	      		</div>
	      		<div id="collapse2" class="panel-collapse collapse in">
	        		<div class="panel-body">
	        			<label>Code For Civil Department.</label>
	        			<input type="text" name="ce_dept" required>
	        			<label>Code For Computer Department.</label>
	        			<input type="text" name="co_dept" required>
	        			<label>Code For Electrical Department.</label>
	        			<input type="text" name="ee_dept" required>
	        			<label>Code For Mechanical Department.</label>
	        			<input type="text" name="me_dept" required>
	        			<label>Code For Electronics & Telecommunications Department.</label>
	        			<input type="text" name="extc_dept" required>
	        		</div>
	      		</div>
	    	</div>
	    	<div class="panel panel-default">
	      		<div class="panel-heading" style="background-color: lightskyblue;">
	        		<h4 class="panel-title">
	          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Change Code For Semester.</a>
	        		</h4>
	      		</div>
	      		<div id="collapse3" class="panel-collapse collapse in">
	        		<div class="panel-body">
	        			<label>Code For Third Semester.</label>
	        			<input type="text" name="sem_III" required>
	        			<label>Code For Fourth Semester.</label>
	        			<input type="text" name="sem_IV" required>
	        			<label>Code For Fifth Semester.</label>
	        			<input type="text" name="sem_V" required>
	        			<label>Code For Sixth Semester.</label>
	        			<input type="text" name="sem_VI" required>
	        		</div>
	      		</div>
	    	</div>
	    	<div class="panel panel-default">
	      		<div class="panel-heading" style="background-color: lightskyblue;">
	        		<h4 class="panel-title">
	          		<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Change Code For Subject.</a>
	        		</h4>
	      		</div>
	      		<div id="collapse4" class="panel-collapse collapse in">
	        		<div class="panel-body">
		                <h4><label>For Mathematics</label></h4>
		                <br><label>Code For Mathematics-III</label>
		                <input type="text" name="m3" required>
		                <label>Code For Mathematics-IV</label>
		                <input type="text" name="m4" required>
		            	<hr>
		                <button type="submit" name="submit" class="btn btn-primary">Submit Codes</button><br><br>
		                </form>
		              	<br>
	        		</div>
	      		</div>
	    	</div>
	  	</div>
	  	<form action="encoding.php" method="POST">
	  		<label>ENTER THE SUBJECT NAME : </label>
	  		<input type="text" name="subjectName"><br>
	  		<label>ENTER THE DEPARTMENT NAME : </label>
	    	<input type="text" name="dept_name"><br>
	  		<label>ENTER THE NUMBER OF STUDENTS APPEARED FOR THIS SUBJECT : </label>
	  		<input type="text" name="numberOfStudents">
	  		<BUTTON type = "submit" name = "submit">Pass It</BUTTON><br>
	  		<p><b>Note:</b> If you wanted to submit the data about subjects which are common between departments then specify the department also. Ignore if not the case.</p>
	  	</form>
	</div>

	<script>
		function myFunction() {
		    var x = document.getElementById("myTopnav");
		    if (x.className === "topnav") {
		        x.className += " responsive";
		    } else {
		        x.className = "topnav";
		    }
		}
	</script>

</body>
</html>