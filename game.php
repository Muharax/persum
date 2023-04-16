<?php 

	class koszyk {
		
	}
// if(!isset($_SESSION['zalogowany'])){
	// echo 'Brak dostępu';
	// exit;
// }
// session_start();
function kasa(){
	require_once ('database/db.php');
	$zadanie = $db_PDO->prepare('SELECT * FROM `zamowienia` WHERE `id_user`=:id LIMIT 1');
	$zadanie->execute([ ':id' => $_SESSION['id']]);
	$ile = $zadanie->rowCount();
	if($ile > 0){
		$wiersz = $zadanie->fetch();
		return $wiersz['gold'].' PLN';
	}else{
		return "0 PLN";
	}
}





function zalogowany(){
	if(isset($_SESSION['zalogowany'])){
return '<div class="m1">
		<div class="pasek-2">
			<div class="pasek-2-name">Saldo </div><div class="pasek-2-wartosc">'.kasa().'</div>
			<div class="pasek-2-koszyk" style="margin-left:10px;"><a href="?link=koszyk">Koszyk</a></div>
		</div>
	</div>';
		exit;
	}else{
		return '<div class="m1">
		<div class="pasek-2">
			<div class="pasek-2-zalogujsie" style="margin-left:10px;"><a href="'.URL.'logowanie/logowanie.php">Zaloguj się aby żłożyć zamówienie</a></div>
		</div>
	</div>';
		exit;
	}
}






?>

<div class="main">

	<?php echo zalogowany();?>
	
	<div class="m2">

		<div class="main_menu">
			<div><a class="mma" href='?link=strona-glowna'>Strona Głowna</a></div>
			<hr>
			<div><a class="mma" href='?link=kebab'>Kebab</a></div>
			<div><a class="mma" href='?link=sniadania'>Śniadania</a></div>
			<div><a class="mma" href='?link=obiady'>Obiady</a></div>
			<hr>
			<div><a class="mma" href='?link=sklep'>Sklep</a></div>
			<hr>
			
			<div><a class="mma" href='?link=stworz-wlasnego-kebaba'>Stwórz własnego Kebaba <i style="color:red;">Nowość</i></a></div>
			<div><a class="mma" href='?link=katering'>Katering</a></div>
			<hr>
			<div><a class="mma" href='?link=o-nas'>o Nas</a></div>
		</div>
			

		<div class="root">
	<?php 
						
				
				if(!isset($_GET['link'])){
					include ('game/menu/strona-glowna.php');
					exit;
				}
				
				if(array_key_exists('link',$_GET)){
					$module = $_GET ['link'];
					$moduleDIR = 'game/menu/'.$module . '.php';
					if(!file_exists($moduleDIR)){
						echo 'Nie kombinuj';
						exit;
					}

					switch($module){
						case "$module":
							include_once($moduleDIR);
						break;
					}
				
				}else{
					echo 'Zgubiłeś się?';
				}
						
	?>	
		</div>
		
	</div>
	</div>
	
	
<?php
	require('footer.php');
?>