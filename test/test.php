<?php 


	include ('../database/db.php');

	$log = 'nowe_haslo';
	$user = 'test';

	$zadanie = $db_PDO->prepare('UPDATE `Uzytkownicy` SET `haslo`= :haslo  WHERE `nazwa_uzytkownika` = :user');
	$zadanie->bindParam(':haslo', $log, PDO::PARAM_STR);
	$zadanie->bindParam(':user', $user, PDO::PARAM_STR);
	$zadanie->execute();



?>