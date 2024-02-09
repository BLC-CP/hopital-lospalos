<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_moras = $_POST['id_moras'];
	$id_klasifikasaun = $_POST['id_klasifikasaun'];
	$moras = $_POST['moras'];
	$obs_moras = $_POST['obs_moras'];

	$insert = mq("UPDATE tb_moras SET
		id_moras='$id_moras',
		id_klasifikasaun='$id_klasifikasaun',
		moras='$moras',
		obs_moras='$obs_moras'
		WHERE id_moras='$id'
		");

	alert('hadia', 'moras', 'moras');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">

			<?php 
				$data = mfa(mq("SELECT * FROM tb_moras WHERE id_moras='$id' "));
			 ?>

			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_moras" value="<?= $data['id_moras']; ?>">

				<div class="form-group mt-4">
					<label class=" form-control-label">Hili Klasifikasaun</label>
					<select name="id_klasifikasaun" class="form-control form-control-sm select2" data-placeholder="Hili Klasifikasaun..." class="standardSelect" tabindex="1">
						<option class="form-control">Hili Klasifikasaun ...</option>

						<?php 
						$query = mq("SELECT * FROM tb_klasifikasaun");
						while ($klasifikasaun = mfa($query)) {
							?>

							<option <?php if($data['id_klasifikasaun'] == $klasifikasaun['id_klasifikasaun']) echo "selected"; ?> class="form-control" value="<?= $klasifikasaun['id_klasifikasaun'] ?>"><?= $klasifikasaun['nrn_klasifikasaun'] ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group"><label for="moras" class=" form-control-label">Moras</label><input type="text" name="moras" id="moras" value="<?= $data['moras']; ?>" class="form-control"></div>

				<div class="form-group"><label for="Observasaun" class=" form-control-label">Observasaun</label><input type="text" name="obs_moras" id="Observasaun" value="<?= $data['obs_moras']; ?>" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
					<a href="?page=moras" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>