<?php 
	$L777 					= md5(microtime(true).mt_Rand());
	$_SESSION['token'] 		= password_hash($L777, PASSWORD_DEFAULT);
	
	
	function buildings (){
    require ('database/db.php');
	$z = $db_PDO->prepare('SELECT * FROM `oferta` WHERE `kategoria`=:kategoria');
	$z->execute([ ':kategoria' => "kebab" ]);
    $ii = $z->rowCount();
		if($ii > 0){
			for ($i=0; $i < $ii; $i++){
            $w = $z->fetch();
				echo '
				<div class="buildings-main-card">
					<input type="hidden" id="token-k" value="'.$_SESSION['token'].'">
					<div class="buildings-main" id="'.$w['id'].'">
						<img class="buildings-img" src="game/buildings/'.$w['path_img'].'">
					</div>
					<div class="buildings-name">'.$w['name'].'</div>
					<div class="buildings-options"> Cena: '.$w['cost'].' PLN</div>
					<div class="buildings-options"> Waga mięsa: '.$w['waga_miesa'].' g</div>';
					
					if(isset($_SESSION['zalogowany'])){
						echo '<div class="buildings-options-btn"><button id="add_T" value="'.$w['id'].'">Dodaj do koszyka</button></div>';
					}
					
				echo '</div>';
			}
        }
    }
	
	
?>
<div class="buildings-site">
	<?php buildings();?>
</div>