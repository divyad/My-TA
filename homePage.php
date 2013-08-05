<?php
   
   require_once('model/db_functions.php'); 
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
	require('header.php');
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
  

<ul class="thumbnails">
  <li class="span4">
    <div class="thumbnail">
      <img data-src="bootstrap/js/imsky-holder-5dcb7ab/holder.js/300x200" alt="">
      <center><h3>Registration and Fee</h3>
      <p align="justify">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="registration_form.php">Click Here &raquo;</a></p></center>
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
      <p><a class="btn btn-primary" href="result_home.php">Click Here &raquo;</a></p></center>
    </div>
  </li>

  </ul>
    
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/imsky-holder-5dcb7ab/holder.js"></script>
  </body>
</html>