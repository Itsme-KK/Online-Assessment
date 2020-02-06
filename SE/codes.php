<?php

	session_start();
	
	$se = $_POST['se_class'];
	$te = $_POST['te_class'];

	$ce_dept = $_POST['ce_dept'];
	$co_dept = $_POST['co_dept'];
	$me_dept = $_POST['me_dept'];
	$ee_dept = $_POST['ee_dept'];
	$extc_dept = $_POST['extc_dept'];

	$sem_III = $_POST['sem_III'];
	$sem_IV = $_POST['sem_IV'];
	$sem_V = $_POST['sem_V'];
	$sem_VI = $_POST['sem_VI'];

	$m3 = $_POST['m3'];
	$m4 = $_POST['m4'];

	$_SESSION['se'] = $se;
	$_SESSION['te'] = $te;
	$_SESSION['ce_dept'] = $ce_dept;
	$_SESSION['co_dept'] = $co_dept;
	$_SESSION['me_dept'] = $me_dept;
	$_SESSION['ee_dept'] = $ee_dept;
	$_SESSION['extc_dept'] = $extc_dept;
	$_SESSION['sem_III'] = $sem_III;
	$_SESSION['sem_IV'] = $sem_IV;
	$_SESSION['sem_V'] = $sem_V;
	$_SESSION['sem_VI'] = $sem_VI;
	$_SESSION['m3'] = $m3;
	$_SESSION['m4'] = $m4;

	header("location: subjects.php");
?>