<header class="logo-out">
	<div class="logo-w1 p-2">
		<a id="baseindex" href="<?php echo URL;?>">
			<img id="BHH" src="<?php echo URL;?>img/skynet1.png">
		</a>
	</div>	
<!-- ====================================================================== -->	
<nav class="mobile-menu">
	<label for="show-menu" class="show-menu">
		<img src="<?php echo URL;?>img/favicon.png" class="S-Skynet">
	</label>
	
	<input type="checkbox" id="show-menu">
	<ul id="menu">
		<li>
			<div class="social-media-in">
				<a href="https://twitter.com/n_buchaj" target="_blank">
					<img src="<?php echo URL;?>img/social-media/twitter.png" class="socialmedia-hover" title="Twitter">
				</a>
			</div>
		</li>
		<li>
		<div class="social-media-in">
			<a href="mailto:adriangajda88@gmail.com">
				<img src="<?php echo URL;?>img/social-media/email.png" class="socialmedia-hover" title="E-mail">
			</a>
		</div>	
		</li>
		<li>
		<div class="social-media-in">
			<a href="https://github.com/Muharax" target="_blank">
				<img src="<?php echo URL;?>img/social-media/github2.png" class="socialmedia-hover" title="Github">
			</a>
		</div>	
		</li>
		<li>
		<div class="social-media-in">
			<a href="https://www.pexels.com/pl-pl/@aleksander-depre-296478516/" target="_blank">
				<img src="<?php echo URL;?>img/social-media/pixel.png" class="socialmedia-hover" title="Pixels">
			</a>
		</div>	
		</li>
		<li>
			<div class="social-media-in">
				<a href="https://sprzedajemy.pl/oferty-uzytkownika-8743210" target="_blank">
					<img src="<?php echo URL;?>img/social-media/sell.png" class="socialmedia-hover"  title="Sprzedajemy.pl">
				</a>
			</div>
		</li>
	</ul>
</nav>


<!-- ====================================================================== -->
<label class="switch">
	<span class="modeMode">Dark</span>
	<input type="checkbox" id="mode">
	<span class="slider round"></span>
</label>
<!-- ====================================================================== -->
<script>
	// localStorage.setItem("mode", "darkMode");
	
	let mode = localStorage.getItem("mode");
	let cBox = localStorage.getItem("cBox");
	
	console.log(mode);
	
	
	if (localStorage.getItem("mode") === null) {
		localStorage.setItem("mode", "darkMode");
	}

	console.log(mode);
	
	if(localStorage.getItem("mode") === 'darkMode'){
		$('#mode').prop('checked', true);
		$('body').removeClass('whiteMode');
		$('body').addClass('darkMode');
		// $('.root').addClass('rootDark');
	}else{
		$('#mode').prop('checked', false);
		$('body').removeClass('darkMode');
		$('body').addClass('whiteMode');
		// $('.root').addClass('rootWhite');
		
	}
	
	

	
	checkBox = document.getElementById('mode').addEventListener('click', event => {
	if(event.target.checked) {
		console.log("Zaznaczono");
		$('body').removeClass('whiteMode');
		$('body').addClass('darkMode');
		// $('.root').addClass('rootDark');
		localStorage.removeItem("mode");
		localStorage.setItem("mode", "darkMode");
	}else{
		console.log("Odznaczono");
		$('body').removeClass('darkMode');
		$('body').addClass('whiteMode');
		// $('.root').addClass('rootWhite');
		localStorage.removeItem("mode");
		localStorage.setItem("mode", "whiteMode");
	}
	});
</script>
<?php
	if(isset($_SESSION['zalogowany'])){
		
	include('init.php');
	
	echo '<div id="dane">
			<div class="table_center">
				<div class="drop-down">
					<div id="dropDown" class="drop-down__button">
						<span class="drop-down__name">'.$_SESSION['imie'].' '.$_SESSION['nazwisko'].'</span>
					</div>
					<div class="drop-down__menu-box">
						<ul class="drop-down__menu">';
										
						if($_SESSION['uprawnienia'] === 1 ){
							echo '<li data-name="dashboard" class="drop-down__item">
									<a href="'.URL.'admin/admin.php">Administracja</a>
								</li>
								
								<li data-name="dashboard" class="drop-down__item">
									<a href="'.URL.'user/profil.php">Twój profil</a>
								</li>
									 
								<li data-name="dashboard" class="drop-down__item">
									<a href="'.URL.'test/test.php" target="_blank">TEST</a>
								</li>';
						}else{
							echo '<li data-name="dashboard" class="drop-down__item">
									<a href="'.URL.'test/test.php" target="_blank">TEST</a>
								</li>';
						}
										
						echo '<li data-name="activity" class="drop-down__item Log-out">
								<a href="'.URL.'logout.php">
									<button class="btn">
										<span id="SignOut">Sign out</span>
									</button>
								</a>
							</li>
							</ul>
						</div>
					</div>
				</div>';
	}else{

		echo '<div id="dane"><div class="table_center">
					<div class="drop-down">
						<div id="dropDown" class="drop-down__button">
							<span class="drop-down__name"><a class="Log-in" href="'.URL.'logowanie/logowanie.php">Sign in</a></span>
						</div>
					</div>
			</div>';
		
				

	
	}
?>
</header>			
</div>