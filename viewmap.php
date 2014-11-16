<?php

$head = array(
	'title' => 'Template',
);

$bottom = array(
	'user' => 'Asep',
	'user_menu' => array(
		'<span class="glyphicon glyphicon-search"></span> Buka Google' => 'http://www.google.com',
		'<span class="glyphicon glyphicon-plane"></span> Iseng' => 'http://www.nyaa.eu',
		'<span class="glyphicon glyphicon-off"></span> Log Out' => '#',
	),
);

function navbar_top() {
?>

<ul class="nav navbar-nav">
	<li class="active"><a href="Viewmap.php"><span class="glyphicon glyphicon-th-list"></span> Lihat kondisi</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-search"></span> Cari</a></li>
</ul>
<?php
}

?>

<!DOCTYPE html>
<html>
<head>
	<?php require 'parts/head.php' ?>

</head>
<body>
	<?php require 'parts/top.php' ?>
	<!--<iframe
		frameborder="0" style="border:0;height:720px;width:100%"
		src="https://www.google.com/maps/embed/v1/view?zoom=5&center=-6.1750,116.8283&key=AIzaSyCWMbQiZaicSm3SEr_-Po41C5QOgNCk6k0"
	>
	</iframe> -->
	<div class="container">
		<img src="https://maps.googleapis.com/maps/api/staticmap?center=-2,116.8283&size=640x294&zoom=4&scale=2&markers=color:yellow|-5.776426,104.968878&markers=color:yellow|-6.060548,105.968634&markers=color:red|-3.202780,107.616583" alt="map" width="100%" height="100%">
	</div>
	<?php require 'parts/bottom.php' ?>

	<?php require 'parts/foot.php' ?>
</body>
</html>