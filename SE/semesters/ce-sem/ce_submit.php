<?php

	require_once("../init.php");
	
	session_start();
	if(!$_SESSION['se']){
      header("location: ../../index.php");
      die;
    }

    $se = $_SESSION['se'];
	$te = $_SESSION['te'];
	$ce_dept = $_SESSION['ce_dept'];
	$me_dept = $_SESSION['me_dept'];
	$co_dept = $_SESSION['co_dept'];
	$ee_dept = $_SESSION['ee_dept'];
	$extc_dept = $_SESSION['extc_dept'];
	$sem_III = $_SESSION['sem_III'];
	$sem_IV = $_SESSION['sem_IV'];
	$sem_V = $_SESSION['sem_V'];
	$sem_VI = $_SESSION['sem_VI'];
	$m3 = $_SESSION['m3'];
	$m4 = $_SESSION['m4'];

	if(isset($_POST['sem3'])) {

		$survey1 = $_POST['survey1'];
		$som = $_POST['som'];
		$bmc = $_POST['bmc'];
		$engg_geology = $_POST['engg_geology'];
		$fluid_mech1 = $_POST['fluid_mech1'];
		$db_info_retrieve_sys = $_POST['db_info_retrieve_sys'];

		$sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$m3')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

		$sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$survey1')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }
	    
	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$som')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$bmc')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$engg_geology')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$fluid_mech1')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_III','$db_info_retrieve_sys')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    header("location: ../ce_sem.php");
	}

	if(isset($_POST['sem4'])){

		$survey2 = $_POST['survey2'];
		$struc_analysis1 = $_POST['struc_analysis1'];
		$build_design_drawing1 = $_POST['build_design_drawing1'];
		$ct = $_POST['ct'];
		$fluid_mech2 = $_POST['fluid_mech2'];

		$sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_IV','$m4')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_IV','$survey2')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_IV','$struc_analysis1')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_IV','$ct')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    $sql = "insert into codes (year,department,semester,subject) values ('$se','$ce_dept','$sem_IV','$fluid_mech2')";

	    $result = mysqli_query($con, $sql);
	    if(!$result){
	    	echo "Error:".mysqli_error($con);
	    }

	    header("location: ../ce_sem.php");
	}
	
			if(isset($_POST['sem5'])){}
				if(isset($_POST['sem6'])){}

?>