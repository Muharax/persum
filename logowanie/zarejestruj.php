<?php

	$A = $_POST['new_login'];
	$B = $_POST['new_pass1'];
	$C = $_POST['new_pass2'];
	$D = $_POST['new_email'];
	$E = $_POST['new_plec'];
	
	
	if(!isset($_POST['new_login'])&&!isset($_POST['new_pass1'])&&!isset($_POST['new_pass2'])&&!isset($_POST['new_email'])&&!isset($_POST['new_plec'])){
		echo 'Coś nie ustawione';
	}else{
		echo 'Wszystko OK';
	}
	
	
	echo '<br>';
	
	if(!empty($_POST['new_login'])&&!empty($_POST['new_pass1'])&&!empty($_POST['new_pass2'])&&!empty($_POST['new_email'])&&!empty($_POST['new_plec'])){
		echo 'Nie jest pusty';
	}else{
		echo 'Coś jest puste';
	}
	
	
	echo $A;
	echo $B;
	echo $C;
	echo $D;
	echo $E;
	
	
	// class rejestracja{
		// function user_only($x){
			
		// }
		
		// function user($u,$p1,$p2,$e,$p){
			// if(!isset($u) && !isset($p1) && !isset($p2) && !isset($e) && !isset($p)){
				// return true;
				// exit;
			// }else{
				// return false;
				// exit;
			// }
		// }
		
		// function usunHTML($x){
			// $y = htmlentities($x);
			// return $y;
		// }
		
		// function sprawdz_usera($x){
			// require_once('../database/db.php');
			// $zadanie = $db_PDO->prepare('SELECT `user` FROM `users` WHERE `user`=:login');
			// $zadanie->execute(['login' => $x]);
			// echo 'GOOOO';
		// }
		
		// function dodaj_do_bazy($user, $pass, $email, $plec){
			
		// }
	// }
	
	
	// $user = new rejestracja();
	// $user->user($_POST['new_login'],$_POST['new_pass1'], $_POST['new_pass2'], $_POST['new_email'], $_POST['new_plec']);
	// $user->usunHTML($_POST['new_login']);
	// $user->usunHTML($_POST['new_pass1']);
	// $user->usunHTML($_POST['new_pass2']);
	// $user->usunHTML($_POST['new_email']);
	// $user->usunHTML($_POST['new_plec']);
	// $user->sprawdz_usera($_POST['new_login']);

?>