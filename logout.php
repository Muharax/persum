<?php
	include('init.php');
	include('alert.php');
	
	session_start();
	session_destroy();
	
	// session_start();
	// alert('Wylogowano poprawnie', 1);
	header('Location: '.URL.'index.php');
	
	exit(0);

?>