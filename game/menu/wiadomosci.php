<div class="wiadomosciMain">
	<a href="?link=wiadomosci&oso=polska">Polska</a>
	<a href="?link=wiadomosci&oso=swiat">Świat</a>
	<a href="#">Lokalne</a>
	<a href="#">Biznes</a>
	<a href="#">Nauka</a>
	<a href="#">Rozrywka</a>
	<a href="#">Sport</a>
</div>


<div>

<?php 
if(array_key_exists('oso',$_GET)){
					
	$module = $_GET ['oso'];
	$moduleDIR = "content/" . $module .  '.php';

	switch($module){
	case "$module":
	include($moduleDIR);


	}	
}

?>
</div>
