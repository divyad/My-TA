<?php session_start();

require_once ('/header.php');

require_once ('model/institute.php');

if (isset($_SESSION['studentSearchArr'])) {
	$studentSearchArr = $_SESSION['studentSearchArr'];
}

$instituteArr = institute::getInstituteList();

if (isset($_GET['subject'])) { $subject = $_GET['subject']; } else { $subject="";}

if (isset($_GET['message'])) { $message = $_GET['message'];} else { $message="";}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign in &middot; Twitter Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}

			.form-signin {
				max-width: 650px;
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
			$(function() {
				$("#sendBtn").popover();
				$("#recipientsTxt").popover({placement:'right'});
				$("#subjectTxt").popover({placement:'right'});
				$("#messageTxt").popover({placement:'right'});
				
				$("#recipientsTxt").select2({
                tags:["red", "green", "blue"],
                maximumInputLength: 10
            });
			});

		</script>
	</head>

	<!--Basic Nav Tabs START -->
	<br />
	<br />
	<ul class="nav nav-tabs">
		<li>
			<a href="homePage.php">Home</a>
		</li>
		<li class="active">
			<a href="#">Compose</a>
		</li>
		<li >
			<a href="templates.php">Templates</a>
		</li>

	</ul>
	<!--Basic Nav Tabs END -->

	<div class="container">
		<label><h2>
			<center>
				Compose Email
			</center></h2></label>
		<br />
		<br />
		<form class="form-signin" action="https://www.google.co.in" method="post" >

			<input type="text" id="recipientsTxt" name="recipients" class="input-block-level" placeholder="Recipients" required rel="popover" >
			<br />
			<input type="text" id="subjectTxt" name="subject" class="input-block-level" placeholder="Subject" required rel="popover"  value="<?php  echo $subject; ?>">
			Schedule Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                     <input type="date" name="bday" required >
			<textarea rows="15" style="width: 635px;" placeholder="Message" id="messageTxt" rel="popover" data-content="Please replace $xyz$ (if any) with respective content"  data-original-title="Note"><?php  echo $message; ?></textarea>
<br />			<center>
				<a id="sendBtn" class="btn btn-primary btn-large" href="homePage.php" data-content="Once message send cannot be undone" data-original-title="Note" rel="popover">Send</a>	
			</center>
		</form>

	</div>
	<!-- /container -->

	</body>
</html>
