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
$bantuan = [
	[
		'nama' => 'Munir',
		'bantuan' => 'Pakaian',
		'jumlah' => '36',
	],

	[
		'nama' => 'Riska',
		'bantuan' => 'Mi Instan',
		'jumlah' => '120',
	],
		[
		'nama' => 'Viktor',
		'bantuan' => 'Pakaian',
		'jumlah' => '12',
	],
];
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
				<div class="col-xs-offset-2">
				Daerah Tujuan
				<select class="form-control">
				  <option>Bandung</option>
				  <option>Jakarta</option>
				  <option>Medan</option>
				  <option>Lampung</option>
				  <option>Aceh</option>
				</select>
				<a href="addbantuan.php" type="button" class="btn btn-default">Add</a>
				</div>
			</form>
			<br>
		</div>
		
		<div class="container-fluid table-responsive">
			<div class="col-xs-8 col-xs-offset-2">
				<table class="table table-striped">
					<thead>
				        <tr>
				        	<th data-field="no">No</th>
				            <th data-field="nama"><a href ="#">Nama Pengirim</a></th>
				            <th data-field="bantuan"><a href ="#">Bantuan</a></th>
				            <th data-field="jumlah"><a href ="#">Jumlah</a></th>
				            <th data-field="action"><a href ="#">Action</a></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<tr id="tr1" class="tr-class-1">
							<?php $id = 0;
							foreach ($bantuan as $bantuan) : $id++;?>
							<tr id="column-<?=$id;?>">
								<td><?=$id;?></td>
								<td><?=$bantuan['nama'];?></td>
								<td><?=$bantuan['bantuan'];?></td>
								<td><?=$bantuan['jumlah'];?></td>
								<td>
									<a href='bantuan-edit.php'><span class='glyphicon glyphicon-pencil'></span></a>
									<a href='#' class='delete' rel="<?=$id?>"><span class='glyphicon glyphicon-trash'></span></a>
								</td>
							</tr>
							<tr id="pop-delete-<?=$id;?>" style="display:none">
								<td></td>
								<td></td>
								<td></td>
								<td>Hapus bantuan ?</td>
								<td>
								<button class='btn btn-danger confirm-delete' rel='<?=$id;?>'>Ya</button>
								<button class='btn btn-primary reject-delete' rel='<?=$id;?>'>Tidak</button>
								</td>
							</tr>
							<?php endforeach; ?>
				    	</tr>
				    </tbody>
				</table>
			</div>
		</div>

		<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit</h4>
		      </div>
		      <div class="modal-body">
		        <div class="container-fluid">
					<br>
					<form class="form-horizontal" role="form"> 
						<div class="form-group">
							<label for="inputNama" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-5">
			      				<input type="Nama" class="form-control" id="inputNama">
			    			</div>
						</div>
						<div class="form-group">
							<label for="inputBantuan" class="col-sm-2 control-label">Bantuan</label>
							<div class="col-sm-5">
			      				<input type="Bantuan" class="form-control" id="inputBantuan">
			    			</div>
						</div>
						<div class="form-group">
							<label for="inputJumlah" class="col-sm-2 control-label">Jumlah</label>
							<div class="col-sm-5">
			      				<input type="Jumlah" class="form-control" id="inputJumlah">
			    			</div>
						</div>
					</form>
					<br>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Hapus Bantuan</h4>
		      </div>
		      <div class="modal-body">
		        Yakin ingin menghapus ?
		      </div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-danger">Yes</button>
		        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
		      </div>
		    </div>
		  </div>
		</div>		
		<?php include 'parts/bottom.php' ?>

		<?php include 'parts/foot.php' ?>
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
