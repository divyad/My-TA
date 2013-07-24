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

	</head>
	<body>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="landing_page.php">My TA</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li>
								<a href="About.html">About</a>
							</li>
							<li>
								<a href="Contact.html">Contact</a>
							</li>
						</ul>
						<form class="navbar-form pull-right" action="login_page.php">
							<label class="span2" ><font color="White">
								<?php  
              if (isset($_SESSION['valid_user']))  {
              	?>
              Logged in as 
              <ul class="nav nav-pills">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
              
              <?php echo  $_SESSION['valid_user'];          	?>
              	
              	   <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
    <a href="login_page.php"> Signout</a>
    </ul>
  </li>
</ul>     
              </font></label>
              	
              <?php } else{ ?>	
								
								Not a member? </font><a class="span2" href="#">Click Here</a></label>
							<button type="submit" class="btn" >
								Member Sign in
							</button>
							
					<?php } ?>		
							
							
						</form>
					</div>
				</div>
			</div>
		</div>