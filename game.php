<?php 

function zalogowany(){
	if(isset($_SESSION['zalogowany'])){
return '<div class="m1">
		<div class="pasek-2">
			<div class="pasek-2-name">Saldo </div><div class="pasek-2-wartosc"></div>
			<div class="pasek-2-koszyk" style="margin-left:10px;"><a href="?link=koszyk">Koszyk</a></div>
		</div>
	</div>';
		exit;
	}else{
		return '<div class="m1">
		<div class="pasek-2">
			<div class="pasek-2-zalogujsie" style="margin-left:10px;"><a href="'.URL.'logowanie/logowanie.php">Zaloguj się aby przeglądać bez ograniczeń</a></div>
		</div>
	</div>';
		exit;
	}
}
?>

<div class="main">

	<?php echo zalogowany();?>
	<div class="centerRoot">
		<div class="m2">

			<div class="main_menu">
				<div><a class="mma" href='?link=home'>Home</a></div>
				<hr>
				<div><a class="mma" href='?link=wiadomosci'>Wiadomości</a></div>
				<div><a class="mma" href='?link=memy'>Memy</a></div>
				<div><a class="mma" href='?link=kanaly'>Kanały</a></div>
				<hr>
				<div><a class="mma" href='?link=poczekalnia'>Poczekalnia</a></div>
				<hr>
				
				<div><a class="mma" href='?link=stworz-wlasnego-kebaba'> Dodaj matriał <i style="color:red;">Nowość</i></a></div>
				<div><a class="mma" href='?link=katering'>Opinia</a></div>
				<hr>
				<div><a class="mma" href='?link=o-nas'>o Nas</a></div>
			</div>
		</div>

		<div class="root">
		<?php 
							
					
					if(!isset($_GET['link'])){
						include ('game/menu/home.php');
					}
					
					if(array_key_exists('link',$_GET)){
						$module = $_GET ['link'];
						$moduleDIR = 'game/menu/'.$module . '.php';
						if(!file_exists($moduleDIR)){
							echo 'Nie kombinuj';
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
