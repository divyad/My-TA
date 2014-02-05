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

require_once('/header.php');

$instituteArr = institute::getInstituteList();

unset($_SESSION['modifiedStatus']);
unset($_SESSION['studentSearchArr']);
unset($_SESSION['searchId']);
?>



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

		<form class="form-horizontal" action="registration_confirm.php" method="post">
			<label><h2>
				<center>
					Registration Form
				</center></h2></label>
			<br />
			<br />
			<div class="control-group">
				<label class="control-label" for="inputRoll">Student</label>
				<div class="controls" >
					<label class="radio">
						<input type="radio" name="optionsRadios" id="inputRoll1" value="New" checked>
						New </label>
					<label class="radio">
						<input type="radio" name="optionsRadios" id="inputRoll2" value="Existing">
						Exists   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" class="search-query" placeholder="Search">
					</label>

				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<input type="text" name="inputName" placeholder="Name" required value="<?php
					if (isset($_GET['name'])) { echo $_GET['name'];
					}
					?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFName">Parent's Name</label>
				<div class="controls">
					<input type="text" name="inputFName" placeholder="Parent's Name" required value="<?php
					if (isset($_GET['fName'])) { echo $_GET['fName'];
					}
					?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Standard</label>
				<div class="controls">
					<input type="number" min="8" max="12" name="inputStd" placeholder="Standard" required value="<?php
					if (isset($_GET['inputStd'])) { echo $_GET['inputStd'];
					}
					?>">
				</div>
			</div>
			
			<div class="control-group">
		<label class="control-label" >Institute Name</label>
		<div class="controls">
			<select name="instituteDropdown">
				
				<?php 
				foreach ($instituteArr as $row) {
				
				echo '<option value="' . $row['institute_id'] . '">'. $row['institute_name'] .'</option>';
			
				}?>
			</select>
		</div>
	</div>
			
			<div class="control-group">
				<label class="control-label" for="inputAdd">Address</label>
				<div class="controls">
					<textarea rows="5" placeholder="Address" name="inputAdd" ><?php
					if (isset($_GET['inputAdd'])) { echo $_GET['inputAdd'];
					}
					 ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMob">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on">91</span>
						<input class="span2" name="inputMob" type="tel" required value="<?php
						if (isset($_GET['inputMob'])) { echo $_GET['inputMob'];
						}
						?>">
						</div>
						</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="inputEmail">Email Id</label>
						<div class="controls">
						<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span2" id="inputEmail" type="email" name="inputEmail" placeholder="test@abc.com" required value="<?php

						if (isset($_GET['inputEmail'])) { echo $_GET['inputEmail'];
						}
						?>">
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