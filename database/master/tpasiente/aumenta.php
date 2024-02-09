<?php 

if(isset($_POST['aumenta'])){

	$id_pasiente = $_POST['id_pasiente'];
	$nrn_pasiente = $_POST['nrn_pasiente'];
	$tipu_pasiente = $_POST['tipu_pasiente'];
	$obs = $_POST['obs'];

	$insert = mq("INSERT INTO tb_tipu_pasiente VALUES('$id_pasiente', '$nrn_pasiente', '$tipu_pasiente', '$obs')");

	alert('aumenta', 'tpasiente', 'aumentapasiente');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_pasiente" value="<?= uniqueId('20', 'tb_tipu_pasiente'); ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Pasiente</label><input type="text" name="nrn_pasiente" id="company" placeholder="Ketik Pasiente" class="form-control"></div>

					<div class="form-group"><label for="tipu_pasiente" class=" form-control-label">Tipu Pasiente</label><input type="text" name="tipu_pasiente" id="tipu_pasiente" placeholder="Tipu Pasiente" class="form-control"></div>

					<div class="form-group"><label for="folin" class=" form-control-label">Observasaun</label><input type="text" name="obs" id="folin" placeholder="Observasaun Pasiente" class="form-control"></div>

					<div class="form-group">
						<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
						<a href="?page=tpasiente" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
					</div>
				</form>
			</div>
		</div>
	</div>