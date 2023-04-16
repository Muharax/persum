<?php
	class rejestracja{
		function user_only($x){
			
		}
		
		function user($u,$p1,$p2,$e,$p){
			if(!isset($u) && !isset($p1) && !isset($p2) && !isset($e) && !isset($p)){
				return true;
				exit;
			}else{
				return false;
				exit;
			}
		}
		
		function usunHTML($x){
			$y = htmlentities($x);
			return $y;
		}
		
		function sprawdz_usera($x){
			require_once('../database/db.php');
			$zadanie = $db_PDO->prepare('SELECT `user` FROM `users` WHERE `user`=:login');
			$zadanie->execute(['login' => $x]);
			echo 'GOOOO';
		}
		
		function dodaj_do_bazy($user, $pass, $email, $plec){
			
		}
	}
	
	
	$user = new rejestracja();
	$user->user($_POST['new_login'],$_POST['new_pass1'], $_POST['new_pass2'], $_POST['new_email'], $_POST['new_plec']);
	$user->usunHTML($_POST['new_login']);
	$user->usunHTML($_POST['new_pass1']);
	$user->usunHTML($_POST['new_pass2']);
	$user->usunHTML($_POST['new_email']);
	$user->usunHTML($_POST['new_plec']);
	$user->sprawdz_usera($_POST['new_login']);

?>