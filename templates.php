<?php session_start();

require_once ('/header.php');

require_once ('model/institute.php');

if (isset($_SESSION['studentSearchArr'])) {
	$studentSearchArr = $_SESSION['studentSearchArr'];
}

$instituteArr = institute::getInstituteList();
?>

<!--Basic Nav Tabs START --><br />
<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}

			.form-signin {
				max-width: 850px;
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
<br />
<br />
<ul class="nav nav-tabs">
	<li>
		<a href="homePage.php">Home</a>
	</li>
	<li >
		<a href="compose_mail.php">Compose</a>
	</li>
	<li class="active">
		<a href="#">Templates</a>
	</li>

</ul>
<!--Basic Nav Tabs END -->
<label><h2>
		<center>
			Email Templates
		</center></h2></label>
	<br />
	<br />


<form class="form-signin" action="controller/search_controller.php" method="post">
	
	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Class Cancelled </a>
			</div>
			<div id="collapseOne" class="accordion-body collapse in">
				<div class="accordion-inner">
					The $class/batch name$ is cancelled on $date$ due to $reason$ <center><a class="btn btn-primary" onclick="this.href='compose_mail.php?subject=Class Cancelled &message=The $class/batch name$ is cancelled on $date$ due to $reason$.'" >Use</a></center>
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Test Scheduled</a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
				<div class="accordion-inner">
					The $test name$ test is scheduled on $date$ at $time$.<center><a class="btn btn-primary" onclick="this.href='compose_mail.php?subject=Test Scheduled &message=The $test name$ test is scheduled on $date$ at $time$.'">Use</a></center>
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> Result Declared </a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">
					The result for the $test name$ test held on $date$ at $time$ is declared.<center><a class="btn btn-primary" onclick="this.href='compose_mail.php?subject=Result Declared &message=The result for the $test name$ test held on $date$ at $time$ is declared.'">Use</a></center>
				</div>
			</div>
		</div>
	</div>

	</body>
	</html>
