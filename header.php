<?php  
	require ('init.php');
?>
	
<!DOCTYPE HTML>
<html lang="pl-PL">
    <head>
		<meta charset="utf-8" />
		<meta name="description" content=""/>
		<meta name="keywords" content="SKYNET"/>
		<meta name="author" content="" />
		<meta name="copyright" content="" />
		<meta name="robots" content="follow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta name="theme-color" content="#009578"/>
		
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="cache-control" content="no-cache"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Pragma" content="no-cache">
		
		
<!------------------------------------------ Service Worker --------------------------------------------------->
		<script type="text/javascript" src="<?php echo URL;?>sw.js"></script>
		<link rel="manifest" href="<?php echo URL;?>manifest.json"/>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL;?>img/favicon.png" />

<!--------------------------- ICO ------------------------------------->
	<link rel="icon" href="<?php echo URL;?>img/favicon.png" sizes="16x16">
<!--------------------------- CSS ------------------------------------->
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/style.css">

<!--------------------------- jQuery ------------------------------------->
	<script type="text/javascript" src="<?php echo URL;?>js/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>js/bootstrap/bootstrap.css">
	<script type="text/javascript" src="<?php echo URL;?>js/bootstrap/bootstrap.js"></script>
	

	
	<title>Persum</title>
			 			
</head>


<body>

<script>

$(document).on("click", '#add_T', function() {	
	var id = $(this).val();
	var token = $('#token-k').val();

		$.ajax({
			type: "POST",
			url: "game/core/dodaj-do-koszyka.php",
			data: {"id":id, "token":token},
			dataType:'text',
			success: function(msg){
				// $(".pasek-2-zalogujsie").html(msg);
				console.log(msg);
				
			},
		});
	
});





$(document).ready(function(){
	$('#dropDown').click(function(event){
		$('.drop-down').toggleClass('drop-down--active');
		event.stopPropagation();
	});
	$(document).click(function(event) {
		if (!$(event.target).hasClass('drop-down--active')) {
			$(".drop-down").removeClass("drop-down--active");
		}
	});
});

</script>