<?php 

require ('database/db.php');

$query = 'SELECT * FROM `nowosci_home` ORDER BY `n_id` DESC LIMIT 5';
$z=$db_PDO->prepare($query);
$z->execute();

$ile = $z->rowCount();

for ($i=0; $i < $ile; $i++){
	$w = $z->fetch();
	
	echo '
		<div class="sg-info">
			<h3>'.$w['n_temat'].'</h3>
			
			<hr>
			
			'.$w['n_tresc'].'
			
			<div class="post_stopka">
			<div class="post_author">Dodano '.$w['n_data'].' przez '.$w['n_user'].'</div>
			</div>
		</div>
	';
	
}


?>
