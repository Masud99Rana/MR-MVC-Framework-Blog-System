<?php

/**
 * Login Model 
 */
class LoginModel extends DModel{
	
	function __construct() {
		parent::__construct();
	}
	public function userControl($table, $username, $password ) {
		$sql = "select * from $table where username=? and password=?";
		return $this->db->affectedRows($sql, $username, $password);

	}
	public function getUserData($table, $username, $password ) {
		$sql = "select * from $table where username=? and password=?";
		return $this->db->selectUser($sql, $username, $password);

	}

}

?>