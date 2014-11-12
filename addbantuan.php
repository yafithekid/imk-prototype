<?php

$head = array(
	'title' => 'Template',
);

$bottom = array(
	'user' => 'Munir',
	'user_menu' => array(
		'<span class="glyphicon glyphicon-search"></span> Buka Google' => 'http://www.google.com',
		'<span class="glyphicon glyphicon-plane"></span> Iseng' => 'http://www.nyaa.eu',
		'<span class="glyphicon glyphicon-off"></span> Log Out' => '#',
	),
);

function navbar_top() {
?>
<ul class="nav navbar-nav">
	<li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> Peta</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-search"></span> Cari</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-th-list"></span> <i>Tracking</i> Bantuan</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li><a href="#">Link</a></li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</li>
</ul>
<?php
}

?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<?php include 'parts/head.php' ?>
	</head>
	<body>
	
		<?php include 'parts/top.php' ?>
		<div class="container-fluid">
			<br>
			<form class="form-horizontal" role="form"> 
				<div class="form-group">
					<label for="inputNama" class="col-sm-2 control-label">Nama Pengirim</label>
					<div class="col-sm-3">
	      				<input type="Nama" class="form-control" id="inputNama">
	    			</div>
				</div>
				<div class="form-group">
					<label for="inputBantuan" class="col-sm-2 control-label">Bantuan</label>
					<div class="col-sm-3">
	      				<input type="Bantuan" class="form-control" id="inputBantuan">
	    			</div>
				</div>
				<div class="form-group">
					<label for="inputJumlah" class="col-sm-2 control-label">Jumlah</label>
					<div class="col-sm-3">
	      				<input type="Jumlah" class="form-control" id="inputJumlah">
	    			</div>
				</div>
				<div class="form-group">
					<label for="inputDaerah" class="col-sm-2 control-label">Daerah Tujuan</label>
					<div class="col-sm-3">
						<select class="form-control">
						  <option>Bandung</option>
						  <option>Jakarta</option>
						  <option>Medan</option>
						  <option>Lampung</option>
						  <option>Aceh</option>
						</select>
	    			</div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    	<a href="bantuan.php" type="button" class="btn btn-default">Add</a>
					</div>
				</div>
			</form>
			<br>
		</div>
		
		<?php include 'parts/bottom.php' ?>

		<?php include 'parts/foot.php' ?>
	</body>
</html>
