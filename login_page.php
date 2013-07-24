<?php

require_once('/header.php');
session_start();

unset($_SESSION['valid_user']);
if(isset($_SESSION['valid_user']))
{
	echo "yeppie";
}
else {
	echo "Nopes";
}
$result_dest = session_destroy();

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
				padding-top: 150px;
				padding-bottom: 40px;
				background-color: #f5f5f5;
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
			.form-signin .form-signin-heading, .form-signin .checkbox {
				margin-bottom: 10px;
			}
			.form-signin input[type="text"], .form-signin input[type="password"] {
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
			}

		</style>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	</head>

	

		<div class="container">

			<form class="form-signin" action="homePage.php" method="post">
				<h3 class="form-signin-heading">Sign in</h3>
				<input type="text" name="username" class="input-block-level" placeholder="Username" required>
				<input type="password" name="password" class="input-block-level" placeholder="Password" required>
				<label class="checkbox">
					<input type="checkbox" value="remember-me">
					Remember me </label>
				<button class="btn btn-large btn-primary" type="submit">
					Sign in
				</button>
			</form>

		</div>
		<!-- /container -->
		
		
	</body>
</html>
