<?php
session_start();
require_once('../db_functions.php');

$stdName = $_POST['stdName'];
$instituteDropdown = $_POST['instituteDropdown'];
$std = $_POST['std'];
$rollNo = $_POST['rollNo'];

if (isset($_POST['rollNo'])) {
	$_SESSION['studentObj'] = findStudentByRoll($_POST['rollNo']);
}


?>