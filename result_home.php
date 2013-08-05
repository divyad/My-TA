<?php session_start();

require_once ('model/institute.php');

if (isset($_POST['name'])) { $name = $_POST['name'];
}

if (isset($_POST['inputFName'])) { $fName = $_POST['inputFName'];
}
if (isset($_POST['inputStd'])) { $inputStd = $_POST['inputStd'];
}
if (isset($_POST['inputAdd'])) { $inputAdd = $_POST['inputAdd'];
}
if (isset($_POST['inputMob'])) { $inputMob = $_POST['inputMob'];
}
if (isset($_POST['inputEmail'])) { $inputEmail = $_POST['inputEmail'];
}
if (isset($_POST['inputRoll'])) { $inputRoll = $_POST['inputRoll'];
}

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
				<a href="student_search.php">Search</a>
			</li>

		</ul>
		<!--Basic Nav Tabs END -->
		<label><h2>
			<center>
				Result Declaration Home
			</center></h2></label>
		<br />
		<br />
		<form class="form-inline" action="registration_confirm.php" method="post" >

			<select name="instituteDropdown">

				<?php
				foreach ($instituteArr as $row) {

					echo '<option value="' . $row['institute_id'] . '">' . $row['institute_name'] . '</option>';

				}
				?>
			</select>

			<input type="text" name="inputExamName" class="inputExamName" placeholder="Exam Name" required value="<?php
			if (isset($_GET['name'])) { echo $_GET['name'];
			}
			?>">

			<input type="text" name="inputSubject" placeholder="Subject" required value="<?php
			if (isset($_GET['fName'])) { echo $_GET['fName'];
			}
			?>">

			<input type="text" name="inputBatch" placeholder="Class or Batch name" required value="<?php
			if (isset($_GET['fName'])) { echo $_GET['fName'];
			}
			?>">

			<input type="number" min="8" max="12" name="inputStd" placeholder="Standard" required value="<?php
			if (isset($_GET['inputStd'])) { echo $_GET['inputStd'];
			}
			?>">
			<i class="icon-calendar"></i>
			<input type="number" min="8" max="12" name="inputExamDate" placeholder="Exam Date" required value="<?php
			if (isset($_GET['inputStd'])) { echo $_GET['inputStd'];
			}
			?>">

			<div class="form-actions">
				<button type="submit" class="btn btn-primary">
					Save & Enter Marks
				</button>
				<a class="btn" href="HomePage.php">Cancel</a>
			</div>
			
			
<table id="myTable" border="1">
  <tr>
    <td>cell 1</td>
    <td>cell 2</td>
  </tr>
  <tr>
    <td>cell 3</td>
    <td>cell 4</td>
  </tr>
</table>
		</form>

	</body>
</html>