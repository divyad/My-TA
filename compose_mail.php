<?php session_start();

require_once ('/header.php');

require_once ('model/institute.php');

if (isset($_SESSION['studentSearchArr'])) {
	$studentSearchArr = $_SESSION['studentSearchArr'];
}

$instituteArr = institute::getInstituteList();

if (isset($_GET['subject'])) { $subject = $_GET['subject']; }

if (isset($_GET['message'])) { $message = $_GET['message'];}
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
		<form class="form-signin" action="homePage.php" method="post">

			<input type="text" id="recipientsTxt" name="recipients" class="input-block-level" placeholder="Recipients" required rel="popover" data-content=" replace $xyz$ (if any) with respective content"  data-original-title="Note">
			<br />
			<input type="text" id="subjectTxt" name="subject" class="input-block-level" placeholder="Subject" required rel="popover" data-content="Please replace $xyz$ (if any) with respective content"  data-original-title="Note" value="<?php  echo $subject; ?>">
			<textarea rows="15" style="width: 635px;" placeholder="Message" id="messageTxt" rel="popover" data-content="Please replace $xyz$ (if any) with respective content"  data-original-title="Note"><?php  echo $message; ?></textarea>
<br />			<center>
				<button id="sendBtn" class="btn btn-large btn-primary" type="submit" rel="popover" data-content="Once message send cannot be undone" data-original-title="Note">
					Send
				</button>
			</center>
		</form>

	</div>
	<!-- /container -->

	</body>
</html>
