<?php 
include ('../init.php');
defined('URL') or define('URL', $http.'://'.$_SERVER['SERVER_NAME']. "/$page_name/");

	// session_start();
	// if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true){
		// header('Location: '.URL.'index.php');
	// }
	
	include('../header.php');
	include('../logo.php');
	
	if(isset($_SESSION['alert'])) echo $_SESSION['alert']; 
		unset($_SESSION['alert']);
	
	$L777 					= md5(microtime(true).mt_Rand());
	$_SESSION['token'] 		= password_hash($L777, PASSWORD_DEFAULT);
	
?>
<div id="formularz-logowania">
	<form action="zaloguj.php" method="POST">
		<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
		<div id="logowanie-s">
			<div id="name">
			<i class="material-icons prefix cwhite">apps</i>
				<input type="text" id="first" autocomplete="off" autofocus="On" name="user" placeholder="Login" value="" class="w100" required>
			</div>
					
			<div id="pass">
			<i class="material-icons prefix cwhite">lock</i>
				<input type="password" id="second" autocomplete="off" name="pass" placeholder="Hasło" value=""  class="w100" required>
			</div>
			
			<div id="btn-log-in">
			
			
			
			<div class="wrapper">
				<div class="box">
					<button type="submit" class="log-in" id="sub">Sign In</button>
				</div>
			</div>
	
	
	
	
	
				
			</div>
		</div>
	</form>
</div>
	
<?php require('../footer.php');?>

<script>

</script>