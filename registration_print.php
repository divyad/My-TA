<?php 
require_once('model/registration.php');
session_start();

$name = $_POST['name'];
$fName = $_POST['inputFName'];
$inputStd = $_POST['inputStd'];
$inputAdd = $_POST['inputAdd'];
$inputMob = $_POST['inputMob'];
$inputEmail = $_POST['inputEmail'];
$inputRoll = $_POST['inputRoll'];
$instDropDown= $_POST['instituteDropdown'];
echo $instDropDown;

$regObj = new registration($inputRoll,$name,$fName,$inputStd,$instDropDown,$inputAdd,$inputMob,$inputEmail);
$regObj->registerStudent($regObj);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>My TA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	</head>
	<body>
		<!--Header start -->
		<!--Basic Nav Tabs START -->
<br />  <br />
		<ul class="nav nav-tabs">
			<li>
				<a href="homePage.php">Home</a>
			</li>
			<li class="active">
				<a href="#">Registration</a>
				</li>
			<li>
				<a href="student_search.php">Search</a>
			</li>

		</ul>
		<!--Basic Nav Tabs END -->

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="Landing.html">My TA</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active">
								<a href="Landing.html">Home</a>
							</li>
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
						<form class="navbar-form pull-right" action="login.php">
							<label class="span2" ><font color="White">Logged in as Divya</font></label>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!--Header End -->

		<!--Success Alert Start -->
		<div class="alert alert-success">
			Registration successful for the student
		</div>

		<!--Success Alert End-->

		<form class="form-horizontal" action="printRegistration.php" method="post" >
			<label><h2>
				<center>
					Print Confirmation Page
				</center></h2></label><br />
			<div class="control-group">
				<label class="control-label" for="inputRoll">Student:</label>
				<div class="controls">
					<label ><?php  echo $inputRoll;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name:</label>
				<div class="controls">
					<label ><?php echo $name; ?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFName">Father's Name:</label>
				<div class="controls">
					<label ><?php echo $fName; ?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Standard:</label>
				<div class="controls">
					<label ><?php echo $inputStd; ?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Institute:</label>
				<div class="controls">
					<label ><?php  echo $instDropDown;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputAdd">Address:</label>
				<div class="controls">
					<label ><?php echo $inputAdd; ?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMob">Mobile Number:</label>
				<div class="controls">
					
						<label ><?php echo $inputMob; ?></label>
					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email Id:</label>
				<div class="controls">
					<label ><?php  echo $inputEmail; ?></label>
				</div>
			</div>
			<div class="form-actions">
				<a class="btn btn-primary" href="javascript:window.print()">Print</a>
			</div>
			
			</form>
			
	</body>
</html>