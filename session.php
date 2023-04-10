<?php
include('init.php');


defined('URL') or define('URL', $http.'://'.$_SERVER['SERVER_NAME']. "/$page_name/");

	if(isset($_SESSION['zalogowany'])){
		$L777 					= md5(microtime(true).mt_Rand());
		$_SESSION['token'] 		= password_hash($L777, PASSWORD_DEFAULT);
	}else{
		session_start();
		// header('Location: '.URL.'index.php');
	}

if(isset($_SESSION['alert'])) echo $_SESSION['alert']; 
		unset($_SESSION['alert']);

	
	

?>
