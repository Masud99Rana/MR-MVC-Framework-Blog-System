<?php 
	// include_once "system/libs/Main.php"; 
	// include_once "system/libs/DController.php"; 
	// include_once "system/libs/DModel.php"; 
	// include_once "system/libs/Database.php"; 
	// include_once "system/libs/Load.php";
	spl_autoload_register(function($class){

		include_once "system/libs/".$class.".php";
	});
	include_once "app/config/config.php";

	$main = new Main();
	
	


?>