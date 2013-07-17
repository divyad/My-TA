<?php
   
   require_once('db_functions.php'); 
  session_start();
  
	if(isset($_POST['username'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
	try{
	login($username, $password) ;
	$_SESSION['valid_user'] = $username;
	}
	catch(Exception $e)  {
		 echo 'You could not be logged in.
          You must be logged in to view this page.';
		  exit();
	}
}
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 120px;
        padding-left: 90px;
        padding-bottom: 40px;
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
          <a class="brand" href="Landing.html">My TA</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="Landing.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              </ul>
            <form class="navbar-form pull-right" action="login.php">
              <label class="span2" ><font color="White">Logged in as 
              <ul class="nav nav-pills">
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">	
              	<?php  
              if (isset($_SESSION['valid_user']))  {
     				 echo  $_SESSION['valid_user'];
  				}
              ?>
              
          <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
    <a href="login.php"> Signout</a>
    </ul>
  </li>
</ul>     
              </font></label>
            </form>
          </div>
        </div>
      </div>
    </div>
    

<ul class="thumbnails">
  <li class="span4">
    <div class="thumbnail">
      <img data-src="bootstrap/js/imsky-holder-5dcb7ab/holder.js/300x200" alt="">
      <center><h3>Registration and Fee</h3>
      <p align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="RegistrationForm.php">Click Here &raquo;</a></p></center>
    </div>
  </li>

<li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <center><h3>Classroom Announcements</h3>
      <p align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#">Click Here &raquo;</a></p></center>
    </div>
  </li>
  
  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <center><h3>Result Declaration</h3>
      <p align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#">Click Here &raquo;</a></p></center>
    </div>
  </li>

  </ul>
    
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/imsky-holder-5dcb7ab/holder.js"></script>
  </body>
</html>