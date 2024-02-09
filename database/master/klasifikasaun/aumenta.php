<?php 

if(isset($_POST['aumenta'])){

	$id_klasifikasaun = $_POST['id_klasifikasaun'];
	$nrn_klasifikasaun = $_POST['nrn_klasifikasaun'];
	$obs = $_POST['obs'];

	$insert = mq("INSERT INTO tb_klasifikasaun VALUES('$id_klasifikasaun', '$nrn_klasifikasaun', '$obs')");

	alert('aumenta', 'klasifikasaun', 'aumentaKlasifikasaun');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_klasifikasaun" value="<?= uniqueId('10', 'tb_klasifikasaun'); ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Klasifikasaun</label><input type="text" name="nrn_klasifikasaun" id="company" placeholder="Ketik Klasifikasaun" class="form-control"></div>

					<div class="form-group"><label for="folin" class=" form-control-label">Observasaun</label><input type="text" name="obs" id="folin" placeholder="Observasaun Klasifikasaun" class="form-control"></div>

					<div class="form-group">
						<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
						<a href="?page=klasifikasaun" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
					</div>
				</form>
			</div>
		</div>
	</div>