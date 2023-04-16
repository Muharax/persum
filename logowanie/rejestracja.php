<?php 
include ('../init.php');
defined('URL') or define('URL', $http.'://'.$_SERVER['SERVER_NAME']. "/$page_name/");

	if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true){
		
	}else{
		session_start();
		$L777 					= md5(microtime(true).mt_Rand());
		$_SESSION['token'] 		= password_hash($L777, PASSWORD_DEFAULT);
	}
	
	include('../header.php');
	include('../logo.php');
	
	if(isset($_SESSION['alert'])) echo $_SESSION['alert']; 
		unset($_SESSION['alert']);
?>
<div class="rejestracja-main">

<div id="formularz-rejestracji">
	<form action="zarejestruj.php" method="POST">
		<div id="logowanie-s">
			<div class="passo">
				<div>Login</div>
				<input autocomplete="off" type="text" placeholder="Login" name="new_login" class="w100" value="zxcvbnm">
			</div>
					
			<div class="passo">
				<div>Hasło</div>
				<input autocomplete="off" type="password" placeholder="Hasło" name="new_pass1" class="w100" value="zaq12wsx">
			</div>
			
			<div class="passo">
				<div>Powtórz hasło</div>
				<input autocomplete="off" type="password" placeholder="Powtórz hasło" name="new_pass2" class="w100" value="zaq12wsx">
			</div>
			
			<div class="passo">
				<div>E-mail</div>
				<input autocomplete="off" type="email" placeholder="email" name="new_email" class="w100" value="admin@admin.pl">
			</div>
			
			<div class="passo">
				<div>Płeć</div>
				<label>
				<div class="labelll">
					<input type="radio" id="xc1" name="new_plec" value="Kobieta" >
					<label for="xc1">Kobieta</label>
				</div>
				</label>
				<label>
				<div class="labelll">
					<input type="radio" id="xc2" name="new_plec" value="Mężczyzna">
					<label for="xc2">Mężczyzna</label>
				</div>
				</label>
			</div>
			
			<div id="btn-log-in">
			
			
			
			<div class="wrapper">
				<div class="box">
					<button type="submit" class="log-in" id="sub">Rejestruj</button>
				</div>
			</div>
			</div>
		</div>
	</form>
</div>



</div>