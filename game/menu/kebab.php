<?php 
	function buildings (){
    require ('database/db.php');
	$z = $db_PDO->prepare('SELECT * FROM `kebab`');
	$z->execute();
    $ii = $z->rowCount();
		if($ii > 0){
			for ($i=0; $i < $ii; $i++){
            $w = $z->fetch();
				echo '
				<div class="buildings-main-card">
					<div class="buildings-main" id="'.$w['id'].'">
						<img class="buildings-img" src="game/buildings/'.$w['path_img'].'">
					</div>
					<div class="buildings-name">'.$w['name'].'</div>
					<div class="buildings-options"> Cena: '.$w['cost'].' PLN</div>
					<div class="buildings-options"> Waga mięsa: '.$w['waga_miesa'].' g</div>
					<div class="buildings-options-btn"><a href="#">Dodaj do koszyka</a></div>
				</div>
				';
			}
        }
    }
	
	
?>
<div class="buildings-site">
	<?php buildings();?>
</div>