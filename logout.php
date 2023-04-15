<?php
	include('init.php');
	include('alert.php');
	defined('URL') or define('URL', $http.'://'.$_SERVER['SERVER_NAME']. "/$page_name/");
	
	session_start();
	session_unset();
	session_destroy();
	
	// session_start();
	// alert('Wylogowano poprawnie', 1);
	header('Location: '.URL.'index.php');
	
	exit(0);

?>