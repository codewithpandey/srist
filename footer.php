

<div class="footer">
	<div class="bottomLine">
		<p>&copy; Shree Ramkrishna Institute of Science and Technology</p>
	</div>
</div>

</body>
	
<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/slider-ap.min.js"></script>
<script>
	$(document).ready(function(){
		$('.menuToggle').click(function(){
			$(this).toggleClass("menuToggleVissible");
			$(this).find(".fa").toggleClass("fa-bars fa-times");
			$(".menu").toggleClass("menuVissible");
		});
		/*$('.menuToggle[state="hidden"]').click(function(){
			$(this).attr("state", "visible");
			$(".menu").attr("state", "visible");
		});*/
	});
</script>
</html>