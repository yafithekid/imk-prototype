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
	<li><a href="ViewAids.php"><span class="glyphicon glyphicon-th-list"></span> Daftar Bantuan</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-search"></span> Cari</a></li>
	<li class = "active"><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Bantuan Tidak Terdaftar</a></li>
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?= $head['title'] ? 'SIMBAT - ' . $head['title'] : 'SIMBAT' ?></title>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<title>View Aids</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top">
				<span class="sr-only">Hidupkan navigasi</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs" href="#">SIMBAT</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-top">
			<?php navbar_top() ?>
		</div>
	</div>
	</nav>
	
	<div class="container">

	<h2><i>Request </i>Bantuan</h2>
		<br><br>
	<div class = "col-xs-4 col-xs-offset-2">
	<form method="POST" action="ViewAids.php">
	  <label for="Nama Bantuan">Nama Bantuan:</label> <br>
      <input type="text" name="Nama Bantuan" class = "form-control"> <br>
      <label for="Jumlah">Jumlah:</label> <br>
      <input type="text" name="Jumlah" class = "form-control"> <br>
      <label for="Lokasi">Lokasi:</label> <br>
      <input type="text" name="Lokasi" class = "form-control"> <br>
      <label for="Penanggungjawab">Penanggungjawab:</label><br>
      <input type="text" name="Penanggungjawab" id="Penanggungjawab" class = "form-control"> <br>
      <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
	  
	  <input type="hidden" name="message" value="Request terkirim" >
	</form>
    </div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container-fluid">
	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-bottom">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<p class="navbar-text" href="#"><span id="currentDateTime"></span></p>
		</div>

		<div class="collapse navbar-collapse" id="navbar-bottom">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?= $bottom['user'] ?></a>
					<ul class="dropdown-menu" role="menu">
						<?php foreach ($bottom['user_menu'] as $text => $link): ?>
							<li><a href="<?= $link ?>"><?= $text ?></a></li>
						<?php endforeach ?>
					</ul>
				</li>
			</ul>
		</div>

	</div>
</nav>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
	var currentDateTime = document.getElementById('currentDateTime');
	function updateCurrentDateTime() {
		currentDateTime.innerHTML = new Date().toLocaleString();
	}
	updateCurrentDateTime();
	setInterval(updateCurrentDateTime, 1000);
</script>
</body>
</html>