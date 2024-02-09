<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_doutor = $_POST['id_doutor'];
	$nrn_doutor = $_POST['nrn_doutor'];
	$sexo_doutor = $_POST['sexo_doutor'];
	$h_fatin = $_POST['h_fatin'];
	$no_tlp = $_POST['no_tlp'];

	$insert = mq("UPDATE tb_doutor SET
		id_doutor='$id_doutor',
		nrn_doutor='$nrn_doutor',
		sexo_doutor='$sexo_doutor',
		h_fatin='$h_fatin',
		no_tlp='$no_tlp'
		WHERE id_doutor='$id'
		");


	alert('hadia', 'doutor', 'hadiaDoutor');

}

?>

<div class="col-lg-12 col-md-12">

	<?php 
	$data = mfa(mq("SELECT * FROM tb_doutor WHERE id_doutor='$id' "));
	?>

	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_doutor" value="<?= $data['id_doutor']; ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_doutor" id="company" value="<?= $data['nrn_doutor']; ?>" class="form-control"></div>

				<div class="form-group"><label class=" form-control-label">Sexo</label>
					<input type="radio" name="sexo_doutor" value="mane" <?= $data['sexo_doutor'] == 'mane' ? 'checked' : null ?> > Mane
					<input type="radio" name="sexo_doutor_doutor" value="feto" <?= $data['sexo_doutor'] == 'feto' ? 'checked' : null ?> > Feto
				</div>

				<div class="form-group"><label for="h_fatin" class=" form-control-label">Hela Fatin</label><input type="text" name="h_fatin" id="h_fatin" value="<?= $data['h_fatin']; ?>" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="folin" value="<?= $data['no_tlp']; ?>" class="form-control"></div>
				
				<div class="form-group">
					<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
					<a href="?page=doutor" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>