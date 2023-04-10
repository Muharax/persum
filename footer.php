<div class="footer-out">
	
	<div class="footer-w2">
	<img width="250px" height="20px" src="<?php echo URL;?>img/skynet-division.jpg"><br>
	
	</div>
	
</div>

<div id="overlay">
	<div class="cv-spinner">
		<span class="spinner"></span>
	</div>
</div>

</body>
</html>

<script>
$(document).on("click", '.btn-close', function() {
	$('.orange').remove();
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

	var pathname = window.location.pathname; // Returns path only (/path/example.html)
	var url      = window.location.href;     // Returns full URL (https://example.com/path/example.html)
	var origin   = window.location.origin;   // Returns base URL (https://example.com)
	var URL		 = window.location.origin+'/all/';   // Returns base URL (https://example.com)
	
	
</script>
