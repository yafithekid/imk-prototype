<?php
	if (isset($_POST['username'])){
		$username = $_POST['username'];
		if ($username == 'admin'){
			header("location:user-add.php");
		}
	}
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

<html lang="id">
	<head>
		<?php require 'parts/head.php' ?>
	</head>
	<body>
		<?php require 'parts/top.php' ?>


	<div class="container">
	<center>
		<div class="col-xs-6">
			
			<form action="login.php" method="POST">
				<div class='row'>
					<label for='username'>username</label>
					<input name='username' type='text' placeholder='username' class='form-control'/>
				</div>

				<div class='row'>
				<label for='password'>password</label>
				<input name='password' type='password' placeholder='password' class='form-control'/>
				
				</div>
				<br>	
				<button type='submit' class='btn btn-primary'>Login</button>
			</form>	
		</div>
	</center>
	</div>


		<?php require 'parts/bottom.php' ?>

		<?php require 'parts/foot.php' ?>
</body>
</html>