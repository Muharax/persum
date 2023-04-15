<?php
	require ('header.php');
	require ('session.php');
	require ('logo.php');
?>
<div class="container">
	<?php 
	
	// if(isset($_SESSION['zalogowany'])){
		include('game.php');
	// }else{
		// echo 'Zaloguj się';
	// }
	
	?>
	
</div>

<?php
	require('footer.php');
?>

