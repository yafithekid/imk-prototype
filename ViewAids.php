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
      <h2>Daftar Bantuan</h2>
	  <?php 
	if (isset($_POST["message"]))
		echo "<span class='glyphicon glyphicon-ok'></span> " .$_POST["message"];
?>
	  <div class = "col-xs-8 col-xs-offset-2">
      <div class="table-responsive"> 

    <table class="table table-striped">
         <thead>
           <tr>
             <th>No.</th> <th>Nama Bantuan</th> <th>Stock</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>1</td> <td>Mie instan</td> <td>1000 Dus</td> <td><a href="Form.php">Request</a></td>
           </tr>
           <tr>
             <td>2</td> <td>Tenda</td> <td>20 tenda</td> <td><a href="Form.php">Request</a></td>
           </tr>
           <tr>
             <td>3</td> <td>Susu bayi</td> <td>120 kotak</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>4</td> <td>Beras</td> <td>150 kg</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>5</td> <td>Selimut</td> <td>50 selimut</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>6</td> <td>Obat diare</td> <td>40 tablet</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>7</td> <td>Biskuit</td> <td>300 bungkus</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>8</td> <td>Sandal</td> <td>30 pasang</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   <tr>
             <td>9</td> <td>Roti</td> <td>98 bungkus</td> <td><a href="Form.php">Request</a></td>
           </tr>
		   
         </tbody>
       </table>

      </div>
	<ul class = "pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="ViewAids.php">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
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