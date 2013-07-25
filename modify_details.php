<?php session_start();

require_once('/header.php');

require_once ('model/institute.php');
$instituteArr = institute::getInstituteList();

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
		
		if($_SESSION['searchId'] == $inputRoll){
			break;
		}

	}
}

?>


		<!--Basic Nav Tabs START -->
<br />  <br />
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

		<form class="form-horizontal" action="model/modify_controller.php" method="post">
			<label><h2>
				<center>
					Modify Details
				</center></h2></label>
			<br />
			<br />
			<div class="control-group">
					<label class="control-label" for="inputRoll">Roll No</label>
				<div class="controls">
					<input type="text" name="inputRoll" placeholder="Name"  disabled="disabled" required value="<?php
					if (isset($inputRoll)) { echo $inputRoll;
					}
					?>">
				</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName">Name</label>
				<div class="controls">
					<input type="text" name="inputName" placeholder="Name" required value="<?php
					if (isset($name)) { echo $name;
					}
					?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputFName">Father's Name</label>
				<div class="controls">
					<input type="text" name="inputFName" placeholder="Father's Name" required value="<?php
					if (isset($fName)) { echo $fName;
					}
					?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputStd">Standard</label>
				<div class="controls">
					<input type="number" min="8" max="12" name="inputStd" placeholder="Standard" required value="<?php
					if (isset($inputStd)) { echo $inputStd;
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
					<textarea rows="5" name="inputAdd" ><?php
					if (isset($inputAdd)) { echo $inputAdd;
					}
					 ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMob">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on">91</span>
						<input class="span2" name="inputMob" type="number"  Mobile Number" required value="<?php
						if (isset($inputMob)) { echo $inputMob;
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

						if (isset($inputEmail)) { echo $inputEmail;
						}
						?>">
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">
					Modify
				</button>
				<a class="btn" href="HomePage.php">Cancel</a>
			</div>
			
			<input type="hidden" name="inputRoll" id="inputRoll" value=<?php  echo $inputRoll;?>>
		</form>

	</body>
</html>