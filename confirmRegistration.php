<?php $name = $_POST['inputName'];
$fName = $_POST['inputFName'];
$inputStd = $_POST['inputStd'];
$inputAdd = $_POST['inputAdd'];
$inputMob = $_POST['inputMob'];
$inputEmail = $_POST['inputEmail'];
$inputRoll = $_POST['optionsRadios'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
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

		<form class="form-horizontal" action="printRegistration.php" method="post" >
			<label><h2>
				<center>
					Registration Confirmation Page
				</center></h2></label>
			<br />
			<br />
			<div class="control-group">
				<label class="control-label" for="inputRoll">Roll No:</label>
				<div class="controls">
					<label ><?php  echo $inputRoll;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name:</label>
				<div class="controls">
					<label ><?php  echo $name;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFName">Father's Name:</label>
				<div class="controls">
					<label ><?php  echo $fName;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Standard:</label>
				<div class="controls">
					<label ><?php  echo $inputStd;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputAdd">Address:</label>
				<div class="controls">
					<label ><?php  echo $inputAdd;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMob">Mobile Number:</label>
				<div class="controls">
					<div class="input-prepend">
						<label ><?php  echo $inputMob;?></label>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email Id:</label>
				<div class="controls">
					<label ><?php  echo $inputEmail;?></label>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">
					Confirm Registration
				</button>
				<a class="btn" href="RegistrationForm.php">Modify Details&raquo;</a>
			</div>
			
			<input type="hidden" name="name" value=<?php  echo $name;?>>
			<input type="hidden" name="inputFName" value=<?php  echo $fName;?>>
			<input type="hidden" name="inputStd" value=<?php  echo $inputStd;?>>
			<input type="hidden" name="inputAdd" value=<?php  echo $inputAdd;?>>
			<input type="hidden" name="inputMob" value=<?php  echo $inputMob;?>>
			<input type="hidden" name="inputEmail" value=<?php  echo $inputEmail;?>>
			<input type="hidden" name="inputRoll" value=<?php  echo $inputRoll;?>>
			
		</form>
	</body>
</html>