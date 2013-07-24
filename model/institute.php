<?php

require_once ('db_functions.php');

class institute {

	public $instName;
	public $instId;
	public $instHead;
	public $InstAddress;
	public $InstMobile;
	public $InstEmail;
	public $currUser;

	public static function getInstituteList() {
		try {
			$dbh = db_connect();

			/*** echo a message saying we have connected ***/
			//echo 'Connected to database<br />';

			/*** The SQL SELECT statement ***/
			$sql = "SELECT institute_id,institute_name FROM institute";

			/*** fetch into an PDOStatement object ***/
			$stmt = $dbh -> query($sql);

			/*** echo number of columns ***/
			$result = $stmt -> fetchAll();

			/*** loop of the results
			 foreach ($instituteArr as $row) {
			 echo "for testing purpose in php file- " . $row['institute_id'] . $row['institute_name'] . '<br />';
			 }***/

			/*** close the database connection ***/
			$dbh = null;

			return $result;

		} catch(PDOException $e) {
			echo $e -> getMessage();
		}
	}

}
?>