<?php
session_start();
require_once('student.php');

$stdName = $_POST['stdName'];
$instituteDropdown = $_POST['instituteDropdown'];
$std = $_POST['std'];
$rollNo = $_POST['rollNo'];

echo $stdName."=";
echo $instituteDropdown."=";
echo $std."=";
echo $rollNo."=";

if ($_POST['rollNo'] != null) {
	echo "inside if";
	$_SESSION['studentSearchArr'] = student::findByRollNo($_POST['rollNo']);
	Redirect('../student_search.php', false);
}
else if ($_POST['stdName'] != null and $_POST['std'] != null and $_POST['instituteDropdown'] != null ) {
	echo "inside elseif";
	$_SESSION['studentSearchArr'] = student::findByNameInstStd($_POST['stdName'],$_POST['std'],$_POST['instituteDropdown']);
	Redirect('../student_search.php', false);
}

?>