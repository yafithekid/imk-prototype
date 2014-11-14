<?php

$head = array(
	'title' => 'Template',
);

$bottom = array(
	'user' => 'Munir',
	'user_menu' => array(
		'<span class="glyphicon glyphicon-search"></span> Buka Google' => 'http://www.google.com',
		'<span class="glyphicon glyphicon-plane"></span> Iseng' => 'http://www.nyaa.eu',
		'<span class="glyphicon glyphicon-off"></span> Log Out' => 'login.php',
	),
);

function navbar_top() {
?>
<ul class="nav navbar-nav">
	<li class='active'><a href="user-add.php"><span class="glyphicon glyphicon-user"></span> Tambah Pengguna</a></li>
	<li><a href="user-index.php"><span class="glyphicon glyphicon-th-list"></span> Daftar Pengguna</a></li>
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

<html>
<head>
	<?php require "parts/head.php"; ?>
	
	<title></title>
</head>
<body>
<?php require "parts/top.php"; ?>
<div class="container">
	<h1>Tambah Pengguna</h1>

	<div class="col-xs-6 col-xs-offset-3">
		<center>
		<form action="user-index.php" method="POST">
			<div class="input-group">
				<span class="input-group-addon"><span class='glyphicon glyphicon-user'></span></span>
				<input name='username' type='text' placeholder='username' class='form-control'/>
			</div>
			<br>
			
			<div class="input-group">
				<span class="input-group-addon"><span class='glyphicon glyphicon-lock'></span></span>
				<input name='password' type='password' placeholder='password' class='form-control'/>
			</div>
			<br>

			<div class="input-group">
				<span class="input-group-addon"><span class='glyphicon glyphicon-lock'></span></span>
				<input name='repeat_password' type='password' placeholder='ulangi password' class='form-control'/>
			</div>
			<br>
			
			<div class="input-group">
				<span class="input-group-addon"><span class='glyphicon glyphicon-tag'></span></span>
				<input name='nama' type='text' placeholder='nama' class='form-control'>
			</div>
			<br>

			<div class="input-group">
				<span class="input-group-addon"><span class='glyphicon glyphicon-list'></span></span>
				<select class='form-control' placeholder='peran'>
					<option label="admin">Admin</option>
					<option label="organisasi">Organisasi</option>
				</select>
			</div>
			<br>

			<button class='btn btn-primary' type='submit'>Tambah</button>
			
			
		</form>
		</center>
	</div>
</div>


<?php require "parts/bottom.php"; ?>
<?php require "parts/foot.php"; ?>
</body>
</html>
