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


<?php 
$data = [
	[
		'username' => 'admin',
		'nama' => 'Administrator',
		'peran' => 'Admin',
	],

	[
		'username' => 'riska',
		'nama' => 'Riska',
		'peran' => 'Organisasi',
	],
		[
		'username' => 'viktor',
		'nama' => 'Viktor',
		'peran' => 'Pemerintahan',
	],
];
?>
<html>
<head>
	<?php require "parts/head.php"; ?>
</head>
<body>
	<?php require "parts/top.php"; ?>
<div class="container">
	<h1>Daftar Pengguna</h1><br>
	<div class="col-xs-8 col-xs-offset-2">
		<table class='table table-striped'>
			<tr>
				<th>No</th>
				<th><a href='#'>Username</a></th>
				<th><a href='#'>Nama</a></th>
				<th><a href='#'>Peran</a></th>
				<th><a href='#'>Aksi</a></th>
			</tr>
			<?php $id = 0;
			foreach ($data as $user) : $id++;?>
			<tr id="column-<?=$id;?>">
				<td><?=$id;?></td>
				<td><?=$user['username'];?></td>
				<td><?=$user['nama'];?></td>
				<td><?=$user['peran'];?></td>
				<td>
					<a href='user-edit.php'><span class='glyphicon glyphicon-pencil'></span></a>
					<a href='#' class='delete' rel="<?=$id?>"><span class='glyphicon glyphicon-trash'></span></a>
				</td>
			</tr>
			<tr id="pop-delete-<?=$id;?>" style="display:none">
				<td></td>
				<td></td>
				<td></td>
				<td>Hapus pengguna?</td>
				<td>
				<button class='btn btn-danger confirm-delete' rel='<?=$id;?>'>Ya</button>
				<button class='btn btn-primary reject-delete' rel='<?=$id;?>'>Tidak</button>
				</td>
			</tr>
			<?php endforeach; ?>
			
		</table>
	</div>
</div>


<?php require "parts/bottom.php"; ?>
<?php require "parts/foot.php"; ?>
</body>
<script type="text/javascript">
	$(".delete").click(function(){
		var id = $(this).attr('rel');
		$("#pop-delete-"+id).show();
	});

	$(".confirm-delete").click(function(){
		var id = $(this).attr('rel');
		
		$("#column-"+id).hide();
		$("#pop-delete-"+id).hide();
	});

	$(".reject-delete").click(function(){
		var id = $(this).attr('rel');
		$("#pop-delete-"+id).hide();
	});
</script>
</html>