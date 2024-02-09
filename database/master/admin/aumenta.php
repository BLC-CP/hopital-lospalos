<?php 

if(isset($_POST['aumenta'])){

	$id_admin = $_POST['id_admin'];
	$nrn_admin = $_POST['nrn_admin'];
	$no_tlp = $_POST['no_tlp'];
	$foto = uploadFoto();
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	$insert = mq("INSERT INTO tb_admin VALUES('$id_admin', '$nrn_admin','$no_tlp', '$foto', '$email', '$password', '$level' )");

	alert('aumenta', 'admin', 'aumentaAdmin');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_admin" value="<?= uniqueId('70', 'tb_admin'); ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_admin" id="company" placeholder="Ketik Naran Kompletu" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="folin" placeholder="Nu Telefone" class="form-control"></div>

				<div class="form-group"><label for="foto" class=" form-control-label">Foto</label><input type="file" name="foto" id="foto" class="form-control"></div>

				<div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" name="email" id="email" placeholder="Prinse Email" class="form-control"></div>

				<div class="form-group"><label for="password" class=" form-control-label">Password</label><input type="password" name="password" id="password" placeholder="Prinse Password Email" class="form-control"></div>

				<input type="hidden" name="level" value="admin" id="level" class="form-control">

				<div class="form-group">
					<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
					<a href="?page=admin" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>