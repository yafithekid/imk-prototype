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
			<form class="form-inline" role="form"> 
				Daerah Tujuan
				<select class="form-control">
				  <option>Bandung</option>
				  <option>Jakarta</option>
				  <option>Medan</option>
				  <option>Lampung</option>
				  <option>Aceh</option>
				</select>
				<a href="addbantuan.php" type="button" class="btn btn-default">Add</a>
				<button type="button" class="btn btn-default">Delete</button>
			</form>
			<br>
		</div>
		
		<div class="container-fluid table-responsive">
			<table class="table table-hover">
				<thead>
			        <tr>
			            <th data-field="nama">Nama Pengirim</th>
			            <th data-field="bantuan">Bantuan</th>
			            <th data-field="jumlah">Jumlah</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr id="tr1" class="tr-class-1">
			    		<td>Munir</td>
			    		<td>Pakaian</td>
			    		<td>36</td>
			    	</tr>
			    </tbody>
			</table>
		</div>

		
		<?php include 'parts/bottom.php' ?>

		<?php include 'parts/foot.php' ?>
	</body>
</html>
