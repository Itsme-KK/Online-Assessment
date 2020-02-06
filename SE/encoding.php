<!DOCTYPE html>
<html>
<head>

	<?php
		require_once("semesters/init.php");

		if(!empty($_POST['dept_name'])) {
			$dept_name = $_POST['dept_name'];
			$subjectName = $_POST['subjectName'];
			$numberOfStudents = $_POST['numberOfStudents']; 
		}else{
			$subjectName = $_POST['subjectName'];
			$numberOfStudents = $_POST['numberOfStudents'];
		}
	?>

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
		<br>

		<?php

			if ($dept_name) {
				$sql = "SELECT * FROM codes where department = '$dept_name' AND subject = '$subjectName'";
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_assoc($result)){
					$year = $row['year'];
					$department = $row['department'];
					$semester = $row['semester'];
					$subject = $row['subject'];
				}
				for($i = 1; $i <= $numberOfStudents; $i++){
					$sql = "INSERT INTO studentCodes (year,department,semester,subject,serial_number) VALUES ('$year','$department','$semester','$subject','$i')";
					$result = mysqli_query($con, $sql);
					if(!$result){
						echo "Error:".mysqli_error($con);
					}
				}

				$sql1 = "SELECT * FROM studentCodes where subject = '$subjectName'";
				$result = mysqli_query($con,$sql1);
				while($row = mysqli_fetch_assoc($result)){
					echo "<br>".$row["year"].$row["department"].$row["semester"].$row["subject"].$row["serial_number"]."<br>";
				}
			}else{
				$sql = "SELECT * FROM codes where subject = '$subjectName'";
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_assoc($result)){
					$year = $row['year'];
					$department = $row['department'];
					$semester = $row['semester'];
					$subject = $row['subject'];
				}
				for($i = 1; $i <= $numberOfStudents; $i++){
					$sql = "INSERT INTO studentCodes (year,department,semester,subject,serial_number) VALUES ('$year','$department','$semester','$subject','$i')";
					$result = mysqli_query($con, $sql);
					if(!$result){
						echo "Error:".mysqli_error($con);
					}
				}

				$sql1 = "SELECT * FROM studentCodes where subject = '$subjectName'";
				$result = mysqli_query($con,$sql1);
				while($row = mysqli_fetch_assoc($result)){
					echo "<br>".$row["year"].$row["department"].$row["semester"].$row["subject"].$row["serial_number"]."<br>";
				}
			}
		?>

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


<!-- <!DOCTYPE html>
<html>
<body>

<p>Creating a JavaScript Object.</p>

<p id="demo"></p>

<script>
var info = {
SubjectName : "m3",
numberOfStudents  : "60"
};

document.getElementById("demo").innerHTML =
info.numberOfStudents + " has applied for " + info.SubjectName;
</script>

</body>
</html> -->