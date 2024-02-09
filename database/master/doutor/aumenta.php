<?php 

if(isset($_POST['aumenta'])){

	$id_doutor = $_POST['id_doutor'];
	$nrn_doutor = $_POST['nrn_doutor'];
	$sexo_doutor = $_POST['sexo_doutor'];
	$h_fatin = $_POST['h_fatin'];
	$no_tlp = $_POST['no_tlp'];

	$insert = mq("INSERT INTO tb_doutor VALUES('$id_doutor', '$nrn_doutor', '$sexo_doutor', '$h_fatin', '$no_tlp')");

	alert('aumenta', 'doutor', 'aumentaDoutor');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_doutor" value="<?= uniqueId('30', 'tb_doutor'); ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_doutor" id="company" placeholder="Ketik Naran Kompletu" class="form-control"></div>

				<div class="form-group"><label class=" form-control-label">Sexo</label>
					<input type="radio" name="sexo_doutor" value="Mane"> Mane
					<input type="radio" name="sexo_doutor" value="Feto"> Feto
				</div>

				<div class="form-group"><label for="h_fatin" class=" form-control-label">Hela Fatin</label><input type="text" name="h_fatin" id="h_fatin" placeholder="Hela Fatin" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="folin" placeholder="Nu Telefone" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
					<a href="?page=doutor" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>