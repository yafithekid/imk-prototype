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
	<li class="active"><a href="ViewAids.php"><span class="glyphicon glyphicon-th-list"></span> Daftar Bantuan</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-search"></span> Cari</a></li>
	<li><a href="FormTakTersedia.php"><span class="glyphicon glyphicon-question-sign"></span> Bantuan Tidak Terdaftar</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">Sandang</a></li>
			<li><a href="Pangan.php">Pangan</a></li>
			<li><a href="#">Logistik</a></li>
			<li><a href="#">Obat-obatan</a></li>
			<li><a href="#">SDM</a></li>
			<li><a href="#">Sembako</a></li>
			<li><a href="#"></a></li>
		</ul>
	</li>
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
	
	<iframe
		frameborder="0" style="border:0;height:720px;width:100%"
		src="https://www.google.com/maps/embed/v1/view?zoom=5&center=-6.1750,116.8283&key=AIzaSyCWMbQiZaicSm3SEr_-Po41C5QOgNCk6k0"
		>
	</iframe>

	<?php require 'parts/bottom.php' ?>

	<?php require 'parts/foot.php' ?>
</body>
</html>