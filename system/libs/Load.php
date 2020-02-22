<?php
/**
 * Class Load
 */
class Load {
	
	function __construct()
	{
		# code...
	}
	public function view($fileName, $data= false) {
		if ($data == true) {
			extract($data);
		} 
		
		include 'app/views/'.$fileName.'.php';
	}

	public function model($modelName) {
		include 'app/models/'.$modelName.'.php';
		return new $modelName();
	}

	public function validation($valid) {
		include 'app/validation/'.$valid.'.php';
		return new $valid();
	}
}
?>