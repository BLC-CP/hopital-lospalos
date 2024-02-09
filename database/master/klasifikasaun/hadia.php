<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_klasifikasaun = $_POST['id_klasifikasaun'];
	$nrn_klasifikasaun = $_POST['nrn_klasifikasaun'];
	$obs = $_POST['obs'];

	$insert = mq("UPDATE tb_klasifikasaun SET
		id_klasifikasaun='$id_klasifikasaun', 
		nrn_klasifikasaun='$nrn_klasifikasaun', 
		obs_klasifikasaun='$obs'
		WHERE id_klasifikasaun='$id'
		");

	alert('hadia', 'klasifikasaun', 'klasifikasaun');

}

?>

<div class="col-lg-12 col-md-12">
	<div class="card">
		<div class="card-body card-block">

			<?php 
				$data = mfa(mq("SELECT * FROM tb_klasifikasaun WHERE id_klasifikasaun='$id' "));
			 ?>

			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" class="form-control" name="id_klasifikasaun" value="<?= $data['id_klasifikasaun'] ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Klasifikasaun</label><input type="text" name="nrn_klasifikasaun" id="company" value="<?= $data['nrn_klasifikasaun'] ?>" class="form-control"></div>

					<div class="form-group"><label for="folin" class=" form-control-label">Observasaun</label><input type="text" name="obs" id="folin" value="<?= $data['obs_klasifikasaun'] ?>" class="form-control"></div>

					<div class="form-group">
						<button type="submit" name="hadia" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Hadia</button>
						<a href="?page=klasifikasaun" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
					</div>
				</form>
			</div>
		</div>
	</div>