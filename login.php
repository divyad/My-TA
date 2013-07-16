
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

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">My TA</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active">
								<a href="Landing.html">Home</a>
							</li>
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
						<form class="navbar-form pull-right">
							<label class="span2" ><font color="White">Not a member? </font><a class="span2" href="#">Click Here</a></label>
							<button type="submit" class="btn">
								Member Sign in
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<form class="form-signin" action="HomePage.php" method="post">
				<h2 class="form-signin-heading">Please sign in</h2>
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
