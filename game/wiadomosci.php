<div class="wiadomosciMain">
	<a href="?link=wiadomosci&oso=odebrane">Odebrane</a>
	<a href="?link=wiadomosci&oso=swiat">Wysłane</a>
	<a href="#">Kopie robocze</a>
	<a href="#">Archiwum</a>
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
