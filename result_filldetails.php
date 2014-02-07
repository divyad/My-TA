<?php 

$exName = $_POST['inputExamName'];
$sub = $_POST['inputSubject'];
$batch = $_POST['inputBatch'];
$std = $_POST['inputStd'];
$exDate = $_POST['inputExamDate'];

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
<br />  <br />
		<ul class="nav nav-tabs">
			<li>
				<a href="homePage.php">Home</a>
			</li>
			<li class="active">
				<a href="#">Result Home</a>
			</li>
			<li>
				<a href="result_search.php">Search</a>
			</li>
		</ul>
		<!--Basic Nav Tabs END -->

			<label><h2>
				<center>
					Fill Result Details
				</center></h2></label>
			<br />
			<br />
			<form class="form-inline" action="registration_print.php" method="post" >
			<table class="table table-bordered" style="width: 750px;" align="center">
				<thead>
					<tr >
						<th style='text-align:center;vertical-align:middle'>Exam Name</th>
						<th style='text-align:center;vertical-align:middle'>Subject</th>
						<th style='text-align:center;vertical-align:middle'>Batch</th>
						<th style='text-align:center;vertical-align:middle'>Standard</th>
						<th style='text-align:center;vertical-align:middle'>Exam Date</th>
					</tr>
				</thead>
				<tbody>
					<tr >
						<td style='text-align:center;vertical-align:middle'><?php  echo $exName;?></td>
						<td style='text-align:center;vertical-align:middle'><?php  echo $sub;?></td>
						<td style='text-align:center;vertical-align:middle'><?php  echo $batch;?></td>
						<td style='text-align:center;vertical-align:middle'><?php  echo $std;?></td>
						<td style='text-align:center;vertical-align:middle'><?php  echo $exDate;?></td>
					</tr>
				</tbody>
			</table>
				
			<div class="form-actions">
				<center>
				<button type="submit" class="btn btn-primary">
					Modify Exam Details
				</button>
				</center>
			</div>
			
		</form>
	</body>
</html>