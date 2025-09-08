<!doctype html>
<html>
<head>
	<title>Webshop MVC</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui-1.9.1.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui-1.9.1.custom.css">
	<link rel="stylesheet" type="text/css" href="css/stilus.css">
	<script type="text/javascript" src="js/webshop.js"></script>
</head>

<body>
	<DIV class="banner_keret">
		<?php
		include("modulok/banner.php");
		?>
	</DIV>
	<DIV class="fotartalom">

		<div class="kategoriak_doboz">
		<!-- 	<div class="kategoria_item">
				<img src="images/glamour.webp" class="kategoria_ikon">
				<div class="kategoria_felirat">Glamour napok</div>
			</div>

			<div class="kategoria_item">
				<img src="images/jatek.svg" class="kategoria_ikon">
				<div class="kategoria_felirat">Játék</div>
			</div>-->
		</div>

		<div class="termekek_doboz"></div> 
	</DIV>
</body>
</html>