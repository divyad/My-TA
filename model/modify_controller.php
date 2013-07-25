<?php

session_start();
require_once ('db_functions.php');
require_once ('student.php');

$updObj = new student($_POST['inputRoll'],$_POST['inputName'],$_POST['inputFName'],$_POST['inputStd'],$_POST['instituteDropdown'],$_POST['inputAdd'],$_POST['inputMob'],$_POST['inputEmail']);
if($updObj->updateStudentDetails($updObj)){
	$_SESSION['modifiedStatus'] = TRUE;
	Redirect('../student_search.php', false);
}



?>