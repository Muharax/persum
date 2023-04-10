<?php
	include ('../session.php');
	include ('../header.php');
	include ('../logo.php');
	
echo '<div class="container-admin">
	<div class="container-admin-0">
	<div class="admin-menu-main">
		<div class="p-2"><a href="dane.php">Moje dane</a></div>
		<div class="p-2"><a href="admin.php">Zmień hasło</a></div>
	</div>
	
	<div class="zmien-haslo-label">
		Zmień hasło
	</div>
	
	
<form method="post" action="core/change_pass.php">
	<input type="hidden" name="token" value="'.$_SESSION['token'].'">
	<table>
		<tbody>
			<tr>
				<td class="table_td0">Stare hasło</td><td class="table_td"><input type="password" class="w100" name="old_pass" value="" autocomplete="new-password" required></td>
			</tr>
			<tr>
				<td class="table_td0">Nowe hasło</td><td class="table_td"><input type="password" class="w100 ww" name="new_pass1" value="" autocomplete="new-password" required></td>
			</tr>
			<tr>
				<td class="table_td0">Powtórz hasło</td><td class="table_td"><input type="password" class="w100 ww" name="new_pass2" value="" autocomplete="new-password" required></td>
			</tr>
		</tbody>
	</table>
	<div class="ca-0">
			<div><button type="button" class="btn-1">Zmień hasło</button></div>
			<div class="alerto"></div>
	</div>
</form>
	
	
	</div>
	</div>
	
	';
	
	require ('../footer.php');
?>


<script>
	$(document).on("click", '.btn-1', function() {
		var old_pass 	= $('[name="old_pass"]').val();
		var pass1 		= $('[name="new_pass1"]').val();
		var pass2 		= $('[name="new_pass2"]').val();
		var token 		= $('[name="token"]').val();

				$.ajax({
					type: "POST",
					url: "core/change_pass.php",
					data: {"old_pass":old_pass, "pass1":pass1,"pass2":pass2, "token":token},
					dataType:'text',
					success: function(data){
						
						$(".alerto").html(data);
					},
				});
	});
	
	
	// $(document).on("click", '.btn-1', function() {
		
		// var leng = 2;
		
		// var old_pass 	= $('[name="old_pass"]').val();
		// var pass1 		= $('[name="new_pass1"]').val();
		// var pass2 		= $('[name="new_pass2"]').val();
		
		// if(old_pass.length >= leng && pass1.length >= leng && pass2.length >= leng){
			// if(pass1 === pass2){
				// $( ".alerto" ).css("color", "green").text( "OK" );
				
				// $.ajax({
					// type: "POST",
					// url: "core/change_pass.php",
					// data: {"old_pass":old_pass, "pass1":pass1,"pass2":pass2},
					// dataType:'text',
					// success: function(data){
						
						// $(".alerto").html(data);
					// },
				// });
			// }else{
				// $( ".alerto" ).css("color", "orange").text( "Hasła muszą być takie same" );
			// }
		// }else{
			// $( ".alerto" ).css("color", "orange").text( "Hasła musi być dłuższe niż "+leng+" znaki" );
			
		// }
	// });
		
		
	
	
</script>
