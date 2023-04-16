<?php

if(!isset($_SESSION['zalogowany'])){
	echo 'Brak dostępu';
	exit;
}



// session_start();
	require ('database/db.php');
	$z = $db_PDO->prepare('SELECT * FROM `zamowienia` WHERE `id_user` =:id');
	$z->execute([ ':id' => $_SESSION['id']]);
	$ii = $z->rowCount();
		if($ii > 0){
			for($i=0; $i < $ii; $i++){
			$w = $z->fetch();
			$z1 = $db_PDO->prepare('SELECT * FROM `oferta` WHERE `id` =:ids');
			$z1->execute([ ':ids' => $w['nr_zamowienia'] ]);
			$iii = $z1->rowCount();

			if($iii > 0){
				for($i=0;$i < $iii; $i++){
					$w1 = $z1->fetch();
					return $w1['name'];
				}
			}
			

			}
		}else{
			echo 'Koszyk jest pusty';
		}
