<?php

function db_connect() {

	$odb = new PDO("mysql:host=" . "localhost" . ";dbname=" . "myta_database", "root", "");
	if (!$odb) {
		throw new Exception('Could not connect to database server');
	} else {
		return $odb;
	}
}

function login($username, $password) {

	$odb = db_connect();

	//$query= "select * from users where username = '".$username."' and password = '".$password."' limit 1";
	$result = $odb -> query("select * from users where username = '" . $username . "' and password = '" . $password . "' limit 1");

	if (!$result) {
		throw new Exception('Could not log you in.');
	}

	if ($result -> rowCount() == 1) {
		return TRUE;
	} else {
		throw new Exception('Could not log you in.');
	}
}

/*function registerStudent($inputRoll, $name, $fName, $inputStd, $inputAdd, $inputMob, $inputEmail) {

	if (!validateRegFormData()) {
		throw new Exception('Validation failed for form data');

	} else {
		try {
			$conn = db_connect();
			$curr_user = $_SESSION['valid_user'];

			$result = $conn -> query("insert into students(roll_num,stu_name,f_name,std,address,mob_num,email_id,created_by) values
                         ('" . $inputRoll . "', '" . $name . "', '" . $fName . "', '" . $inputStd . "', '" . $inputAdd . "', '" . $inputMob . "', '" . $inputEmail . "', '" . $curr_user . "')");
			if (!$result) {
				throw new Exception('Could not register you in database - please try again later.');
			}

			return true;
		} catch(PDOException $e) {
			echo $e -> getMessage();
		}
	}
}*/

function validateRegFormData(){
	
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

?>
