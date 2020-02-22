<?php
/**
 * Class Database
 */
class Database extends PDO {
	
	function __construct($dsn, $user, $pass) {

		//$db = new PDO($dsn,$user,$pass);

		parent::__construct($dsn, $user, $pass);

	}

	public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC) {
		$stmt = $this->prepare($sql);

		foreach ($data as $key => $value) {
			$stmt->bindParam($key, $value);
		}
		
		$stmt->execute();
		return $stmt->fetchAll($fetchStyle);

	}
	
	public function insert($table, $data){
		
		$keys 	= implode(",",array_keys($data));
		$values = ":".implode(", :",array_keys($data));
		$sql = "insert into $table($keys) values($values)";

		//$sql = "insert into $table(name, title) values(:name, :title)";
		

		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$stmt->bindValue(":".$key, $value);
		}
		
		return $stmt->execute();
	}

	public function update($table, $data, $cond) {
		$updateKeys = NULL;
		foreach ($data as $key => $value) {
			$updateKeys .= "$key=:$key,";
		}
		$updateKeys = rtrim($updateKeys, ",");

		$sql = "update $table set $updateKeys where $cond";
		
		//$sql = "update $table set title=:title, name=:name where $cond";
		$stmt = $this->prepare($sql);

		foreach ($data as $key => $value) {
			$stmt->bindValue(":".$key, $value);
		}
		
		return $stmt->execute();
	}

	public function delete($table, $cond, $limit=1){
		$sql = "delete from $table where $cond LIMIT $limit";
		return $this->exec($sql);
	}

	public function affectedRows($sql, $username, $password) {
		$stmt = $this->prepare($sql);
		$stmt->execute(array($username,$password));
		return $stmt ->rowCount();
	}

	public function selectUser($sql, $username, $password) {
		$stmt = $this->prepare($sql);
		$stmt->execute(array($username,$password));
		return $stmt->fetchAll(PDO::FETCH_ASSOC); 
	}


}









 ?>