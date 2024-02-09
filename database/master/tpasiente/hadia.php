<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_tpasiente = $_POST['id_pasiente'];
	$nrn_pasiente = $_POST['nrn_pasiente'];
	$tipu_pasiente = $_POST['tipu_pasiente'];
	$obs = $_POST['obs'];

	$insert = mq("UPDATE tb_tipu_pasiente SET
		id_tipu_pasiente='$id_tpasiente',
		moras_tipu_pasiente='$nrn_pasiente',
		tipu_pasiente='$tipu_pasiente',
		obs_tipu_pasiente='$obs'
		WHERE id_tipu_pasiente='$id'
		");

	alert('hadia', 'tpasiente', 'tpasiente');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">

			<?php 
				$data = mfa(mq("SELECT * FROM tb_tipu_pasiente WHERE id_tipu_pasiente='$id' "));
			 ?>

			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_pasiente" value="<?= $data['id_tipu_pasiente']; ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Pasiente</label><input type="text" name="nrn_pasiente" id="company" value="<?= $data['moras_tipu_pasiente']; ?>" class="form-control"></div>

					<div class="form-group"><label for="tipu_pasiente" class=" form-control-label">Tipu Pasiente</label><input type="text" name="tipu_pasiente" id="tipu_pasiente" value="<?= $data['tipu_pasiente']; ?>" class="form-control"></div>

					<div class="form-group"><label for="folin" class=" form-control-label">Observasaun</label><input type="text" name="obs" id="folin" value="<?= $data['obs_tipu_pasiente']; ?>" class="form-control"></div>

					<div class="form-group">
						<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
						<a href="?page=tpasiente" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
					</div>
				</form>
			</div>
		</div>
	</div>