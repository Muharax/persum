

				<input type="text" id="login">

				<input type="password" id="pass">

				<button type="button" id="sign">Sign In</button>
				
				<div id="info">

	
	
				
			</div>
		</div>
	</form>
</div>
	
<?php require('../footer.php');?>

<script>
	function validate_user(login){
		let x = document.querySelector(login).value;
		console.log(x);
	}
	
	validate_user('#login');
	
	let x = document.querySelector('#login').value;
	console.log(x);
</script>