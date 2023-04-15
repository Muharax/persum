<?php

if(!isset($_SESSION['zalogowany'])){
	echo 'Brak dostępu';
	exit;
}




	require ('database/db.php');
	$z = $db_PDO->prepare('SELECT * FROM `koszyk` WHERE `id_user` =:id');
	$z->execute([ ':id' => $_SESSION['id'] ]);
	$ii = $z->rowCount();
		if($ii > 0){
			$w = $z->fetch();
			echo 'Koszt '.$w['koszyk_koszt'];
		}else{
			echo 'Koszyk jest pusty';
		}
