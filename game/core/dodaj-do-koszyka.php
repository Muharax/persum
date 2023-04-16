<?php 
error_reporting(E_ALL);
	$id = htmlentities($_POST['id']);
	$token = $_POST['token'];
	
	session_start();
	
	if(isset($_SESSION['zalogowany'])){
		
		require_once ('../../database/db.php');
		$zadanie = $db_PDO->prepare('SELECT * FROM `oferta` WHERE `id`=:id LIMIT 1');
		$zadanie->execute([ ':id' => $id ]);
		$wiersz = $zadanie->fetch();
		echo $wiersz['name'];
		
		
		$z2 = $db_PDO->prepare('INSERT INTO `zamowienia`(
											`id_user`,
											`nr_zamowienia`
										)
										VALUES(
											:user,
											:nr_zamowienia
										)');
		$z2->execute([ ':user' => $_SESSION['id'], ':nr_zamowienia' => $id ]);
		echo 'OWA';
		
	}else{
		echo 'ZALOGUJ SIĘ ABY ZŁOŻYĆ ZAMÓWIENIE';
		exit;
	}
	
?>


