<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_pasiente = $_POST['id_pasiente'];
	$nrn_pasiente = $_POST['nrn_pasiente'];
	$sexo_pasiente = $_POST['sexo_pasiente'];
	$fatin_moris = $_POST['fatin_moris'];
	$data_moris = $_POST['data_moris'];
	$idade = $_POST['idade'];
	$h_fatin_pasiente = $_POST['h_fatin_pasiente'];
	$no_tlp = $_POST['no_tlp'];
	$obs_pasiente = $_POST['obs_pasiente'];

	$insert = mq("UPDATE tb_pasiente SET
		id_pasiente='$id_pasiente',
		nrn_pasiente='$nrn_pasiente',
		sexo_pasiente='$sexo_pasiente',
		fatin_moris='$fatin_moris',
		data_moris='$data_moris',
		idade='$idade',
		h_fatin_pasiente='$h_fatin_pasiente',
		no_tlp_pasiente='$no_tlp',
		obs_pasiente='$obs_pasiente'
		WHERE id_pasiente='$id'
		");

	alert('hadia', 'pasiente', 'pasiente');

}

?>

<div class="col-lg-6 col-md-12">

	<?php 
	$data = mfa(mq("SELECT * FROM tb_pasiente WHERE id_pasiente='$id' "));
	?>

	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_pasiente" value="<?= $data['id_pasiente']; ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_pasiente" id="company" value="<?= $data['nrn_pasiente']; ?>" class="form-control"></div>

				<div class="form-group"><label class=" form-control-label">Sexo</label>
					<input type="radio" name="sexo_pasiente" <?= $data['sexo_pasiente'] == 'mane' ? 'checked' : null ?> value="Mane"> Mane
					<input type="radio" name="sexo_pasiente" <?= $data['sexo_pasiente'] == 'feto' ? 'checked' : null ?> value="Feto"> Feto
				</div>

				<div class="form-group"><label for="fatin_moris" class=" form-control-label">Fatin Moris</label><input type="text" name="fatin_moris" id="h_fatin" value="<?= $data['fatin_moris']; ?>" class="form-control"></div>

				<div class="form-group"><label for="data_moris" class=" form-control-label">Data Moris</label><input type="date" value="<?= $data['data_moris']; ?>" name="data_moris" id="data_moris" class="form-control"></div>

				<div class="form-group"><label for="data_moris" class=" form-control-label">Idade</label><input type="text" name="idade" value="<?= $data['idade']; ?>" id="data_moris" placeholder="Idade" class="form-control"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-12">	
		<div class="card">
			<div class="card-body card-block">
				<div class="form-group"><label for="h_fatin" class=" form-control-label">Hela Fatin</label><input type="text" name="h_fatin_pasiente" id="h_fatin" value="<?= $data['h_fatin_pasiente']; ?>" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="folin" value="<?= $data['no_tlp_pasiente']; ?>"class="form-control"></div>

				<div class="form-group"><label for="obs_pasiente" class=" form-control-label">Observasaun</label><input type="text" name="obs_pasiente" id="obs_pasiente" value="<?= $data['obs_pasiente']; ?>" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
					<a href="?page=pasiente" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>