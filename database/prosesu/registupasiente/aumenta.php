<?php 

if(isset($_POST['aumenta'])){

	$id_registu_pasiente = $_POST['id_registu_pasiente'];
	$id_doutor = $_POST['id_doutor'];
	$id_tipu_pasiente = $_POST['id_tipu_pasiente'];
	$id_pasiente = $_POST['id_pasiente'];
	$id_moras = $_POST['id_moras'];
	$altura = $_POST['altura'];
	$tensaun = $_POST['tensaun'];
	$d_registu = $_POST['d_registu'];
	$temperatura = $_POST['temperatura'];
	$obs_registu = $_POST['obs_registu'];

	$insert = mq("INSERT INTO tb_registu_pasiente VALUES('$id_registu_pasiente', '$id_doutor', '$id_tipu_pasiente', '$id_pasiente', '$id_moras', '$altura', '$tensaun', '$d_registu', '$temperatura', '$obs_registu')");

	alert('aumenta', 'registupasiente', 'aumentaRegistuPasiente');

}

?>

<div class="col-lg-6 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_registu_pasiente" value="<?= uniqueId('60', 'tb_registu_pasiente'); ?>">

				<div class="form-group mt-2">
					<label class=" form-control-label">Hili Doutor</label>
					<select name="id_doutor" class="form-control form-control-sm select2" data-placeholder="Hili Doutor..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Doutor ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_doutor");
						while ($doutor = mfa($query)) {
							?>

							<option class="form-control" value="<?= $doutor['id_doutor'] ?>"><?= $doutor['nrn_doutor'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group mt-2">
					<label class=" form-control-label">Hili Tipu Pasiente</label>
					<select name="id_tipu_pasiente" class="form-control form-control-sm select2" data-placeholder="Hili Tipu Pasiente..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Tipu Pasiente ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_tipu_pasiente");
						while ($tipu_pasiente = mfa($query)) {
							?>

							<option class="form-control" value="<?= $tipu_pasiente['id_tipu_pasiente'] ?>"><?= $tipu_pasiente['moras_tipu_pasiente'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group mt-2">
					<label class=" form-control-label">Hili Pasiente</label>
					<select name="id_pasiente" class="form-control form-control-sm select2" data-placeholder="Hili Pasiente..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Pasiente ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_pasiente");
						while ($id_pasiente = mfa($query)) {
							?>

							<option class="form-control" value="<?= $id_pasiente['id_pasiente'] ?>"><?= $id_pasiente['nrn_pasiente'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group mt-2">
					<label class=" form-control-label">Hili Moras</label>
					<select name="id_moras" class="form-control form-control-sm select2" data-placeholder="Hili Moras..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Moras ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_moras");
						while ($id_moras = mfa($query)) {
							?>

							<option class="form-control" value="<?= $id_moras['id_moras'] ?>"><?= $id_moras['moras'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group"><label for="altura" class=" form-control-label">Altura</label><input type="number" name="altura" id="altura" placeholder="Altura" class="form-control"></div>

		</div>
	</div>
</div>

<div class="col-lg-6 col-md-12">	
	<div class="card">
		<div class="card-body card-block">

				<div class="form-group"><label for="tensaun" class=" form-control-label">Tensaun</label><input type="text" name="tensaun" id="tensaun" placeholder="Tensaun" class="form-control"></div>

				

				<div class="form-group"><label for="d_registu" class=" form-control-label">Data Registu</label><input type="date" name="d_registu" id="d_registu" class="form-control"></div>

				<div class="form-group"><label for="temperatura" class=" form-control-label">Temperatura</label><input type="text" name="temperatura" id="temperatura" class="form-control"></div>

				<div class="form-group"><label for="obs_registu" class=" form-control-label">Observasaun</label><input type="text" name="obs_registu" id="obs_registu" placeholder="Observasaun" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
					<a href="?page=registupasiente" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>