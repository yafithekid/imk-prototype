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
	),
);

function navbar_top() {
?>
<ul class="nav navbar-nav">
</ul>
<ul class="nav navbar-nav navbar-right">
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
		<div class="col-xs-6 col-xs-offset-3">
			<h1>Login</h1><br><br>
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