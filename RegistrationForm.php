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

		<form class="form-horizontal" action="confirmRegistration.php" method="post">
			<label><h2>
				<center>
					Registration Form
				</center></h2></label>
			<br />
			<br />
			<div class="control-group">
				<label class="control-label" for="inputRoll">Roll No</label>
				<div class="controls" >
					<label class="radio">
						<input type="radio" name="optionsRadios" id="inputRoll1" value="New Student" checked>
						New Student </label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="inputRoll2" value="Existing Student">
						Existing Student </label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<input type="text" name="inputName" placeholder="Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFName">Father's Name</label>
				<div class="controls">
					<input type="text" name="inputFName" placeholder="Father's Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Standard</label>
				<div class="controls">
					<input type="text" name="inputStd" placeholder="Standard" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputAdd">Address</label>
				<div class="controls">
					<textarea rows="5" name="inputAdd"></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMob">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on">91</span>
						<input class="span2" name="inputMob" type="text" placeholder="Mobile Number" required>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Email Id</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span2" id="inputEmail" type="email" name="inputEmail" placeholder="test@abc.com" required>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">
					Register
				</button>
				<a class="btn" href="HomePage.php">Cancel</a>
			</div>
		</form>

	</body>
</html>