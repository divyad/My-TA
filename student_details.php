<?php
require_once ('model/institute.php');

session_start();

if (isset($_SESSION['studentSearchArr'])) {
	foreach ($_SESSION['studentSearchArr'] as $row) {

		$inputRoll = $row['roll_num'];
		$name = $row['student_name'];
		$fName = $row['father_name'];
		$inputStd = $row['standard'];
		$instDropDown = institute::fetchInstName($row['institute']);
		$inputAdd = $row['address'];
		$inputMob = $row['mobile_num'];
		$inputEmail = $row['email_id'];
		
		if($_GET['searchId'] == $inputRoll){
			$_SESSION['searchId']=$_GET['searchId'];
			break;
		}
	}
}
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

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="landing_page.php">My TA</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li class="active">
<a href="landing_page.php">Home</a>
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

<!--Basic Nav Tabs START -->
<br />
<br />
<ul class="nav nav-tabs">
<li>
<a href="homePage.php">Home</a>
</li>
<li >
<a href="registration_form.php">Registration</a>
</li>
<li class="active">
<a href="#">Search</a>
</li>

</ul>
<!--Basic Nav Tabs END -->

<form class="form-horizontal" action="printRegistration.php" method="post" >
<label><h2>
<center>
Student Details
</center></h2></label><br />
<div class="control-group">
<label class="control-label" for="inputRoll">Student:</label>
<div class="controls">
<label ><?php echo $inputRoll; ?></label>
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
<label ><?php echo $instDropDown; ?></label>
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
<a class="btn btn-primary" href="modify_details.php">Modify Details&raquo;</a>
<a class="btn" href="student_search.php">Back</a>
</div>

<input type="hidden" name="name" id="name" value=<?php echo $name; ?>>
<input type="hidden" name="inputFName" id="inputFName" value=<?php echo $fName; ?>>
<input type="hidden" name="inputStd" id="inputStd" value=<?php echo $inputStd; ?>>
<input type="hidden" name="inputAdd" id="inputAdd" value=<?php echo $inputAdd; ?>>
<input type="hidden" name="inputMob" id="inputMob" value=<?php echo $inputMob; ?>>
<input type="hidden" name="inputEmail" id="inputEmail"value=<?php echo $inputEmail; ?>>
<input type="hidden" name="inputRoll" id="inputRoll" value=<?php  echo $inputRoll; ?>>

</form>

</body>
</html>
