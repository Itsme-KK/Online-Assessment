<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once('../semesters/init.php');
		$sql = "SELECT * FROM codes";
		$result = mysqli_query($con,$sql);
  		while($row = mysqli_fetch_assoc($result)){}
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#drop_year').change(function(){
				var curYear = $('#drop_year').val();

				if(curYear == "year2"){
					$('#drop_dept').empty();
					$('#drop_sem').empty();

					$('#drop_dept').append('<option value="empty_sub">Select Department</option>'+
						'<option value="ce">Civil Engineering</option>'+
						'<option value="co">Computer Engineering</option>'+
						'<option value="me">Mechanical Engineering</option>'+
						'<option value="extc">Electronics and Telecommunication Engineering</option>'+
						'<option value="ee">Electrical Engineering</option>');

					$('#drop_sem').append('<option value="empty_sem">Select Semester</option>'+
						'<option value="sem3">Third Semester</option>'+
						'<option value="sem4">Fourth Semester</option>');

					$('#drop_sem').change(function(){
						var curSem = $('#drop_sem').val();
						var curDept = $('#drop_dept').val();

						if (curDept == "ce" && curSem == "sem3"){
							$('#drop_subject').empty();
							$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
								'<option value="m3">Mathematics-III</option>'+
								'<option value="survey1">Surveying-I</option>'+
								'<option value="som">Strength Of Materials</option>'+
								'<option value="bmc">Building Materials and Construction</option>'+
								'<option value="engg_geology">Engineering Geology</option>'+
								'<option value="fluid_mech1">Fluid Mechanics-I</option>'+
								'<option value="db_info_retrieve_sys">Database and Information Retrieval System</option>');
						} else if{curDept == "ce" && curSem == "sem"}{
							$('#drop_subject').empty();
							$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
								'<option value="m4">Mathematics-IV</option>'+
								'<option value="survey2">Surveying-II</option>'+
								'<option value="struc_analysis1">Structural Analysis-I</option>'+
								'<option value="build_design_drawing1">Building Design and Drawing-I</option>'+
								'<option value="ct">Concrete Technology</option>'+
								'<option value="fluid_mech2">Fluid Mechanics-II</option>');
						}
					// 	else if(curDept == "co" && curSem == "sem3"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m3">Mathematics-III</option>');
					// 	} else if(curDept == "co" && curSem == "sem4"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m3">Mathematics-III</option>');
					// 	}
					// 	else if(curDept == "ee" && curSem == "sem3"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m3">Mathematics-III</option>'+
					// 			'<option value="edc">Electronic Devices and Circuits</option>'+
					// 			'<option value="cncpg">Conventional and Non-conventional Power Generation</option>'+
					// 			'<option value="en">Electrical Networks</option>'+
					// 			'<option value="eem">Electrical and Electronic Measurements</option>'+
					// 			'<option value="oopm">Object Oriented Programming and Methodology</option>');
					// 	} else if(curDept == "ee" && curSem == "sem4"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m4">Mathematics-IV</option>'+
					// 			'<option value="eps">Elements of Power System</option>'+
					// 			'<option value="em1">Electrical Machines-I</option>'+
					// 			'<option value="sp">Signal Processing</option>'+
					// 			'<option value="adic">Analog and Digital Integrated Circuits</option>'+
					// 			'<option value="nmot">Numerical Methods and Optimization Techniques</option>');
					// 	}
					// 	else if(curDept == "extc" && curSem == "sem3"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m3">Mathematics-III</option>'+
					// 			'<option value="ae1">Analog Electronics-I</option>'+
					// 			'<option value="de">Digital Electronics</option>'+
					// 			'<option value="ctl">Circuits and Transmission Lines</option>'+
					// 			'<option value="eim">Electronic Instruments and Measurements</option>'+
					// 			'<option value="cmlab">Circuits and Measurement Laboratory</option>');
					// 	} else if(curDept == "extc" && curSem == "sem4"){
					// 			$('#drop_subject').empty();
					// 			$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 				'<option value="m4">Mathematics-IV</option>'+
					// 				'<option value="ae2">Analog Electronics-II</option>'+
					// 				'<option value="mp">Microprocessor and Peripherals</option>'+
					// 				'<option value="wtp">Wave Theory and Propagation</option>'+
					// 				'<option value="cs">Control Systems</option>'+
					// 				'<option value="sswlab">SSW Laboratory</option>');
					// 		}
					// 	else if(curDept == "me" && curSem == "sem3"){
					// 		$('#drop_subject').empty();
					// 		$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 			'<option value="m3">Mathematics-III</option>');
					// 	} else if(curDept == "me" && curSem == "sem4"){
					// 			$('#drop_subject').empty();
					// 			$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
					// 				'<option value="m4">Mathematics-IV</option>');
					// 	}
					});

				} else if(curYear == "year3"){
					$('#drop_dept').empty();
					$('#drop_sem').empty();
					$('#drop_dept').append('<option value="empty_sub">Select Department</option>'+
						'<option value="ce">Civil Engineering</option>'+
						'<option value="co">Computer Engineering</option>'+
						'<option value="me">Mechanical Engineering</option>'+
						'<option value="extc">Electronics and Telecommunication Engineering</option>'+
						'<option value="ee">Electrical Engineering</option>');

					$('#drop_sem').append('<option value="empty_sem">Select Semester</option>'+
						'<option value="sem5">Fifth Semester</option>'+
						'<option value="sem6">Sixth Semester</option>');

					$('#drop_sem').change(function(){
						var curSem = $('#drop_sem').val();

						if (curSem == "sem5") {
							$('#drop_subject').empty();
							$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
								'<option value="mp">MicroProcessor</option>');

						} else if (curSem == "sem6") {
							$('#drop_subject').empty();
							$('#drop_subject').append('<option value="empty_sub">Select Subject</option>'+
								'<option value="m6">Mobile Communication & Computing</option>');
						}
					});
				}
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<img class="img-responsive" src="../images/KTC.jpg" alt="AIKTC" width="100%" height="auto">
		<hr>
		<select id="drop_year">
			<option value="year">Select Year</option>
			<option value="year2">2nd Year</option>
			<option value="year3">3rd Year</option>
		</select>
		<select id="drop_dept">
			<option value="dept">Select Department</option>
		</select>
		<select id="drop_sem">
			<option value="sem">Select Semester</option>
		</select>
		<select id="drop_subject">
			<option value="sem">Select Subject</option>
		</select>
	</div>
</body>
</html>