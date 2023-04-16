<header class="logo-out">

		<div class="logo-w1 p-2">
			<a id="baseindex" href="<?php echo URL;?>index.php">
				<img id="BHH" src="<?php echo URL;?>img/skynet1.png">
				<!-- <img width="50px" height="40px" src="/al/img/mm.png"> -->
			</a>
		</div>
		
		
		
		
		
	<nav class="mobile-menu">
	<label for="show-menu" class="show-menu">
	<img src="<?php echo URL;?>img/favicon.png" class="S-Skynet">
	</label>
	
	<input type="checkbox" id="show-menu">
		<ul id="menu">
		<li><div class="social-media-in">
					<a href="https://twitter.com/n_buchaj" target="_blank">
						<img src="<?php echo URL;?>img/social-media/twitter.png" class="socialmedia-hover" title="Twitter">
					</a>
			</div></li>
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
			
			
		</div></li>
	</ul>
</nav>



	
		
		

<?php
// isset($_SESSION) ?: session_start();

	if(isset($_SESSION['zalogowany'])){
		
	include('init.php');
	defined('URL') or define('URL', $http.'://'.$_SERVER['SERVER_NAME']. "/$page_name/");
	
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