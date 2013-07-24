<?php session_start();

require_once ('/header.php');

require_once ('model/institute.php');

if (isset($_SESSION['studentObj'])) {
	echo "yeppie";
}

$instituteArr = institute::getInstituteList();

?>

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

<form class="form-horizontal" action="student_details.php" method="post">
	<div class="control-group">
		<label class="control-label" for="stdName">Student Name</label>
		<div class="controls">
			<input type="text" class="input-small" name="stdName" placeholder="Student name">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" >Institute Name</label>
		<div class="controls">
			<select name="instituteDropdown" >
				
				<?php 
				foreach ($instituteArr as $row) {
				
				echo '<option value="' . $row['institute_name'] . '">'. $row['institute_name'] .'</option>';
			
				}?>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="std">Class</label>
		<div class="controls">
			<input type="number" min="8" max="12 class="input-small" name="std" placeholder="Standard">
			</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="std">OR</label>
			</div>

			<div class="control-group">
			<label class="control-label" for="rollNo">Roll No </label>
			<div class="controls">
			<input type="text" class="input-small" name="rollNo" placeholder="Roll No">
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">
			Search
		</button>
		<a class="btn" href="HomePage.php">Cancel</a>
	</div>
</form>

</body>
</html>