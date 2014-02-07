<?php session_start();

require_once ('model/institute.php');

require_once ('/header.php');

$instituteArr = institute::getInstituteList();

unset($_SESSION['modifiedStatus']);
unset($_SESSION['studentSearchArr']);
unset($_SESSION['searchId']);
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
			.form-signin {
				max-width: 300px;
				padding: 19px 29px 29px;
				margin: 0 auto 20px;
				background-color: #fff;
				border: 1px solid #e5e5e5;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
			}
		</style>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

		<script type="text/javascript">
			$('.inputExamName').typeahead([{
				name : 'planets',
				local : ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"]
			}]);

		</script>

	</head>
	<body>
		<!--Basic Nav Tabs START -->
		<br />
		<br />
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
		<div class="container">
		<label><h2>
			<center>
				Result Declaration Home
			</center></h2></label>
		<br />
		<br />
		<form class="form-signin" action="result_filldetails.php" method="post" >
			<center>
				
				    <input type="text" name="inputExamName" class="inputExamName" placeholder="Exam Name" required ><br /><br />
				
			
				    <input type="text" name="inputSubject" placeholder="Subject" required ><br /><br />
				    
				   
					<input type="text" name="inputBatch" placeholder="Class or Batch name" required ><br /><br />
					
					<select name="inputStd" required >
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option></select><br /><br />
					
					<input type="date" name="inputExamDate" required ><br /><br />
			</center>
					
			<div class="form-actions">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-primary">
					Save & Enter Marks
				</button>
				<a class="btn" href="HomePage.php">Cancel</a>
				
			</div>
		</form>
		<div class="container">
    </body>
</html>