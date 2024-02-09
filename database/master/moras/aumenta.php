<?php 

if(isset($_POST['aumenta'])){

	$id_moras = $_POST['id_moras'];
	$id_klasifikasaun = $_POST['id_klasifikasaun'];
	$moras = $_POST['moras'];
	$obs_moras = $_POST['obs_moras'];

	$insert = mq("INSERT INTO tb_moras VALUES('$id_moras', '$id_klasifikasaun', '$moras', '$obs_moras')");

	alert('aumenta', 'moras', 'aumentamoras');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_moras" value="<?= uniqueId('40', 'tb_moras'); ?>">

				<div class="form-group mt-4">
					<label class=" form-control-label">Hili Klasifikasaun</label>
					<select name="id_klasifikasaun" class="form-control form-control-sm select2" data-placeholder="Hili Klasifikasaun..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Klasifikasaun ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_klasifikasaun");
						while ($klasifikasaun = mfa($query)) {
							?>

							<option class="form-control" value="<?= $klasifikasaun['id_klasifikasaun'] ?>"><?= $klasifikasaun['nrn_klasifikasaun'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group"><label for="moras" class=" form-control-label">Moras</label><input type="text" name="moras" id="moras" placeholder="Moras" class="form-control"></div>

				<div class="form-group"><label for="Observasaun" class=" form-control-label">Observasaun</label><input type="text" name="obs_moras" id="Observasaun" placeholder="Observasaun Moras" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
					<a href="?page=moras" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>