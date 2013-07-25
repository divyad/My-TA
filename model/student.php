<?php
require_once ('db_functions.php' );

	class student {

	public $studentType;
	public $rollNo;
	public $studentName;
	public $fatherName;
	public $standard;
	public $address;
	public $mobile;
	public $email;
	public $institute;

	function __construct($inputRoll, $name, $fName, $inputStd,$instDropDown, $inputAdd, $inputMob, $inputEmail) {
	$this -> studentName = $name;
	$this -> fatherName = $fName;
	$this -> standard = $inputStd;
	$this -> institute = $instDropDown;
	$this -> address = $inputAdd;
	$this -> mobile = $inputMob;
	$this -> email = $inputEmail;
	$this -> rollNo = $inputRoll;

	}

	static function findByRollNo($rollNo) {

	$dbh = db_connect();

	/*** set the PDO error mode to exception ***/

		$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		/*** The SQL SELECT statement ***/
		$sql = "SELECT * FROM students where roll_num = :rollNo";

		/*** fetch into an PDOStatement object ***/
		$stmt = $dbh -> prepare($sql);

		/*** bind the paramaters ***/
		$stmt -> bindParam(':rollNo', $rollNo, PDO::PARAM_STR, 255);

		/*** execute the prepared statement ***/
		$stmt -> execute();

		/*** echo number of columns ***/
			$result = $stmt -> fetchAll();
		/*** loop of the results***/
		
		 foreach ($result as $row) {
		// echo "for testing purpose in php file- " . $row['roll_num'] . $row['student_name'] . '<br />';
		 }

		/*** close the database connection ***/
		$dbh = null;

		return $result;
	}
	
	static function findByNameInstStd($name,$inputStd,$instDropDown) {

	$dbh = db_connect();

	/*** set the PDO error mode to exception ***/

		$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		/*** The SQL SELECT statement ***/
		$sql = "SELECT * FROM students where student_name = :name and standard= :inputStd and institute = :institute";

		/*** fetch into an PDOStatement object ***/
		$stmt = $dbh -> prepare($sql);

		/*** bind the paramaters ***/
		$stmt -> bindParam(':name', $name, PDO::PARAM_STR, 255);
		$stmt -> bindParam(':inputStd', $inputStd, PDO::PARAM_INT);
		$stmt -> bindParam(':institute', $instDropDown, PDO::PARAM_STR, 255);
		
		/*** execute the prepared statement ***/
		$stmt -> execute();

		/*** echo number of columns ***/
			$result = $stmt -> fetchAll();
		/*** loop of the results***/
		
		 foreach ($result as $row) {
		 echo "for testing purpose in php file- " . $row['roll_num'] . $row['student_name'] . '<br />';
		 }

		/*** close the database connection ***/
		$dbh = null;

		return $result;
	}

	public function updateStudentDetails($updObj){
		
		try {
			$conn = db_connect();

			/*** set the PDO error mode to exception ***/
			$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			/*** begin the transaction ***/
			$conn -> beginTransaction();

			$stmt = $conn -> prepare("update students set student_name = :name ,father_name = :fName ,standard = :inputStd ,address = :inputAdd ,mobile_num = :inputMob ,email_id = :inputEmail, institute =:institute where roll_num= :inputRoll");

			/*** bind the paramaters ***/
			$stmt -> bindParam(':inputRoll', $updObj -> rollNo, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':name', $updObj -> studentName, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':fName', $updObj -> fatherName, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':inputStd', $updObj -> standard, PDO::PARAM_INT);
			$stmt -> bindParam(':institute', $updObj -> institute, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':inputAdd', $updObj -> address, PDO::PARAM_LOB, 5);
			$stmt -> bindParam(':inputMob', $updObj -> mobile, PDO::PARAM_INT);
			$stmt -> bindParam(':inputEmail', $updObj -> email, PDO::PARAM_STR, 255);

			/*** execute the prepared statement ***/
			$stmt -> execute();

			/*** commit the transaction ***/
			$conn -> commit();
			
			echo "updated successfully";

			return TRUE;

		} catch(PDOException $e) {
			echo $e -> getMessage();
			return FALSE;
		}
	}

}
?>