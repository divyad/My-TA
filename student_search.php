<?php session_start();

require_once ('/header.php');

require_once ('model/institute.php');

if (isset($_SESSION['studentSearchArr'])) {
	$studentSearchArr= $_SESSION['studentSearchArr'];
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

<form class="form-horizontal" action="controller/search_controller.php" method="post">
	<label><h2>
		<center>
			Student Search
		</center></h2></label>

	<?php
				if(isset($_SESSION['modifiedStatus'])){
					if($_SESSION['modifiedStatus'] == TRUE){
						unset($_SESSION['modifiedStatus']);
						unset($_SESSION['studentSearchArr']);
						unset($_SESSION['searchId']);
	?>
	<!--Success Alert Start -->
	<div class="alert alert-success">
		Modification done
	</div>

	<?php }} ?>

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

					echo '<option value="' . $row['institute_id'] . '">' . $row['institute_name'] . '</option>';

				}
				?>
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

			<?php if(isset($_SESSION['studentSearchArr'])){?>
			<table class="table table-striped">
			<tr>
			<th>
			Roll No
			</th>
			<th>
			Student Name
			</th>
			<th>
			Father Name
			</th>
			<th>
			Standard
			</th>
			<th>
			Address
			</th>
			<th>
			Mobile No
			</th>
			<th>
			Email id
			</th>
			<th>
			Institute
			</th>
			</tr>
			<?php
			foreach ($studentSearchArr as $row) {

				echo '<tr><td><a href="student_details.php?searchId='.$row['roll_num'].'">' . $row['roll_num'] . '</a></td><td>' . $row['student_name'] . '</td><td>' . $row['father_name'] . '</td><td>' . $row['standard'] . '</td><td>' . $row['address'] . '</td><td>' . $row['mobile_num'] . '</td><td>' . $row['email_id'] . '</td><td>' . institute::fetchInstName($row['institute']) . '</td><tr>';

			}
		?>
			</table>
<?php }else{}?>
			</body>
			</html>
