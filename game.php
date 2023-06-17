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
				<div><a class="mma" href='?link=home'>Strona główna</a></div>
				<hr>
				<div><a class="mma" href='?link=memy'>Nowośći w branży</a></div>
				<div><a class="mma" href='?link=programowanie'>Programowanie</a></div>
				<div><a class="mma" href='?link=wiadomosci'>Wiadomośći</a></div>
				<hr>
				<div><a class="mma" href='?link=poczekalnia'>Poczekalnia</a></div>
				<hr>
				<div><a class="mma" href='?link=dodaj_material'> Dodaj matriał <i style="color:red;">Nowość</i></a></div>
				<div><a class="mma" href='?link=katering'>Opinia</a></div>
				<hr>
				<div><a class="mma" href='?link=odebrane'>Wiadomości</a></div>
				<div><a class="mma" href='?link=o-nas'>o Nas</a></div>
			</div>
		</div>

		<div class="root">
		<?php 
							
		function ABC (){
			if(!isset($_GET['link'])){
				include ('game/home/home.php');
			}else{
				if(array_key_exists('link',$_GET)){
					$module = $_GET ['link'];
					$moduleDIR = 'game/'.$module.'/'.$module . '.php';
					if(!file_exists($moduleDIR)){
						return 'Nie kombinuj';					
					}

					switch($module){
						case "$module":
							include_once($moduleDIR);
						break;
					}
		
				}else{
					return 'Zgubiłeś się?';
				}
			}
		}
		
		echo ABC();	
		?>	
		</div>
	</div>	
</div>
