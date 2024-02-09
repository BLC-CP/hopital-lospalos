<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_admin = $_POST['id_admin'];
	$nrn_admin = $_POST['nrn_admin'];
	$no_tlp = $_POST['no_tlp'];

	if($_FILES['foto']['error'] === 4){
		$foto = $_POST['img'];
	}else{
		$foto = uploadFoto();
	}

	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$level = $_POST['level'];

	$insert = mq("UPDATE tb_admin SET
		id_admin='$id_admin',
		nrn_admin='$nrn_admin',
		no_tlp='$no_tlp',
		foto='$foto',
		email='$email',
		password='$password',
		level='$level'
		WHERE id_admin='$id'
	");

alert('hadia', 'admin', 'admin');

}

?>

<div class="col-lg-12 col-md-12">

	<?php 
	$data = mfa(mq("SELECT * FROM tb_admin WHERE id_admin='$id' "));
	?>

	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_admin" value="<?= $data['id_admin']; ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_admin" id="company" value="<?= $data['nrn_admin']; ?>" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="no_tlp" value="<?= $data['no_tlp']; ?>" class="form-control"></div>

				<div class="form-group"><label for="foto" class=" form-control-label">Foto</label>
					<input type="file" name="foto" value="<?= $data['foto']; ?>" id="foto" class="form-control">
					<input type="hidden" name="img" value="<?= $data['foto']; ?>">
				</div>

				<div class="form-group"><label for="email" class=" form-control-label">Email</label><input type="email" name="email" id="email" value="<?= $data['email']; ?>"class="form-control"></div>

				<!-- <div class="form-group"><label for="password" class=" form-control-label"></label> -->
					<input type="password" name="password" id="password"value="<?= $data['password']; ?>" class="form-control">
				<!-- </div> -->

				<!-- <div class="form-group"><label for="level" class=" form-control-label"></label> -->
					<input type="hidden" name="level" value="<?= $data['level']; ?>" id="level" class="form-control">
				<!-- </div> -->

				<div class="form-group">
					<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
					<a href="?page=admin" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>