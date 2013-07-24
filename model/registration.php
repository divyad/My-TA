<?php
require_once ('db_functions.php');
include 'ChromePhp.php';
ChromePhp::log('Hello console!');
ChromePhp::log($_SERVER);
ChromePhp::warn('something went wrong!');

class registration {

	public $studentName;
	public $fatherName;
	public $standard;
	public $address;
	public $mobile;
	public $email;
	public $institute;
	public $studentType;
	public $currUser;

	function __construct($inputRoll, $name, $fName, $inputStd,$instDropDown, $inputAdd, $inputMob, $inputEmail) {
		$this -> studentName = $name;
		$this -> fatherName = $fName;
		$this -> standard = $inputStd;
		$this -> institute = $instDropDown;
		$this -> address = $inputAdd;
		$this -> mobile = $inputMob;
		$this -> email = $inputEmail;
		$this -> studentType = $inputRoll;
		$this -> currUser = $_SESSION['valid_user'];
	}

	/** this method will insert a record in registration table**/
	public function registerStudent($regObj) {

		if ($this -> validateRegFormData($regObj)) {
			//echo "Validation of form data successful";
			if ($this -> insertStudent($regObj)) {
				//echo 'Data entered successfully<br />';
				$this -> insertRegistration($regObj);
			}
		}

	}

	public function insertStudent($regObj) {

		//echo 'inside insertStudent';

		try {
			$conn = db_connect();

			/*** set the PDO error mode to exception ***/
			$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			/*** begin the transaction ***/
			$conn -> beginTransaction();

			$stmt = $conn -> prepare("insert into students(roll_num,stu_name,f_name,std,address,mob_num,email_id,institute,created_by) values (:inputRoll, :name, :fName, :inputStd, :inputAdd, :inputMob, :inputEmail,:institute, :currUser)");

			/*** bind the paramaters ***/
			$stmt -> bindParam(':inputRoll', $regObj -> studentType, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':name', $regObj -> studentName, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':fName', $regObj -> fatherName, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':inputStd', $regObj -> standard, PDO::PARAM_INT);
			$stmt -> bindParam(':institute', $regObj -> institute, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':inputAdd', $regObj -> address, PDO::PARAM_LOB, 5);
			$stmt -> bindParam(':inputMob', $regObj -> mobile, PDO::PARAM_INT);
			$stmt -> bindParam(':inputEmail', $regObj -> email, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':currUser', $regObj -> currUser, PDO::PARAM_STR, 255);

			/*** execute the prepared statement ***/
			$stmt -> execute();

			/*** commit the transaction ***/
			$conn -> commit();

			return TRUE;

		} catch(PDOException $e) {
			echo $e -> getMessage();
			return FALSE;
		}
	}

	public function insertRegistration($regObj) {

		//echo 'inside insertRegistration';

		try {
			$conn = db_connect();

			/*** set the PDO error mode to exception ***/
			$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			/*** begin the transaction ***/
			$conn -> beginTransaction();

			$stmt = $conn -> prepare("insert into registration(student_name,standard,institute_name,admin_name) values (:name,:inputStd,:institute, :currUser)");

			/*** bind the paramaters ***/
			$stmt -> bindParam(':name', $regObj -> studentName, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':inputStd', $regObj -> standard, PDO::PARAM_INT);
			$stmt -> bindParam(':institute', $regObj -> institute, PDO::PARAM_STR, 255);
			$stmt -> bindParam(':currUser', $regObj -> currUser, PDO::PARAM_STR, 255);

			/*** execute the prepared statement ***/
			$stmt -> execute();

			/*** commit the transaction ***/
			$conn -> commit();

			return TRUE;

		} catch(PDOException $e) {
			echo $e -> getMessage();
			return FALSE;
		}
	}

	public function validateRegFormData($regObj) {
		//echo "inside validateRegFormData";
		return TRUE;
	}

	/** Getter Setter for studentName **/
	public function getStudentName() {
		return $this -> studentName;
	}

	public function setStudentName($x) {
		$this -> studentName = $x;
	}

	/** Getter Setter for fatherName **/
	public function getFatherName() {
		return $this -> fatherName;
	}

	public function setFatherName($x) {
		$this -> fatherName = $x;
	}

	/** Getter Setter for standard **/
	public function getStandard() {
		return $this -> standard;
	}

	public function setStandard($x) {
		$this -> standard = $x;
	}

	/** Getter Setter for address **/
	public function getAddress() {
		return $this -> address;
	}

	public function setAddress($x) {
		$this -> address = $x;
	}

	/** Getter Setter for mobile **/
	public function getMobile() {
		return $this -> mobile;
	}

	public function setMobile($x) {
		$this -> mobile = $x;
	}

	/** Getter Setter for email **/
	public function getEmail() {
		return $this -> email;
	}

	public function setEmail($x) {
		$this -> email = $x;
	}

	/** Getter Setter for studentType **/
	public function getStudentType() {
		return $this -> studentType;
	}

	public function setStudentType($x) {
		$this -> studentType = $x;
	}

}
?>