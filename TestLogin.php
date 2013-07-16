<?php
    
    $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "test";
	
	mysqli_connect($host,$user,$pass);
	mysql_select_db($db);
	
	if(isset($_POST['username'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
	
	
	$sql= "select * from users where username = '".$username."' and password = '".$password."' limit 1";
	echo $sql;
	$res = mysql_query($sql);
	echo $res;
	
	if(mysql_num_rows($res) == 1){
		echo "you have successfully logged in.";
		exit();
	}else{
		echo "Invalid Login";
	}
	}
?>

<!DOCTYPE >
<html>
	<head>
		<title>My Login Page</title>
	</head>
	
	<body>
	<form method="post" action="TestLogin.php">
	Username: <input type="text" name="username" /><br /><br />
	Password: <input type="password"  name="password"/><br/><br />
	<input type="submit" name="submit" value="Log In"/>		
	</form>	
		
	</body>
</html>