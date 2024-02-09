<?php 

if(isset($_POST['aumenta'])){

	$id_pasiente = $_POST['id_pasiente'];
	$nrn_pasiente = $_POST['nrn_pasiente'];
	$sexo_pasiente = $_POST['sexo_pasiente'];
	$fatin_moris = $_POST['fatin_moris'];
	$data_moris = $_POST['data_moris'];
	$idade = $_POST['idade'];
	$h_fatin_pasiente = $_POST['h_fatin_pasiente'];
	$no_tlp = $_POST['no_tlp'];
	$obs_pasiente = $_POST['obs_pasiente'];

	$insert = mq("INSERT INTO tb_pasiente VALUES('$id_pasiente', '$nrn_pasiente', '$sexo_pasiente', '$fatin_moris', '$data_moris', '$idade', '$h_fatin_pasiente', '$no_tlp', '$obs_pasiente')");

	alert('aumenta', 'pasiente', 'aumentaPasiente');

}

?>


<!-- </head>
<body>
<p>Tanggal Lahir: <input type="date" id="datepicker"></p>
<p>Umur: <input type="text" id="umur"></p> -->

<div class="col-lg-6 col-md-12">
	<div class="card">
		<div class="card-body card-block">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" readonly class="form-control" name="id_pasiente" value="<?= uniqueId('50', 'tb_pasiente'); ?>">
				<div class="form-group"><label for="company" class=" form-control-label">Naran Kompletu</label><input type="text" name="nrn_pasiente" id="company" placeholder="Ketik Naran Kompletu" class="form-control"></div>

				<div class="form-group"><label class=" form-control-label">Sexo</label>
					<input type="radio" name="sexo_pasiente" value="Mane"> Mane
					<input type="radio" name="sexo_pasiente" value="Feto"> Feto
				</div>

				<div class="form-group"><label for="fatin_moris" class=" form-control-label">Fatin Moris</label><input type="text" name="fatin_moris" id="h_fatin" placeholder="Fatin Moris" class="form-control"></div>

				<div class="form-group"><label for="data_moris" class=" form-control-label">Data Moris</label><input type="date" name="data_moris" id="datepicker" class="form-control"></div>

				<div class="form-group"><label for="data_moris" class=" form-control-label">Idade</label><input type="text" name="idade" id="umur" placeholder="Idade" class="form-control"></div>
		</div>
	</div>
</div>

<div class="col-lg-6 col-md-12">	
	<div class="card">
		<div class="card-body card-block">
				<div class="form-group"><label for="h_fatin" class=" form-control-label">Hela Fatin</label><input type="text" name="h_fatin_pasiente" id="h_fatin" placeholder="Hela Fatin" class="form-control"></div>

				<div class="form-group"><label for="no_tlp" class=" form-control-label">Telefone</label><input type="text" name="no_tlp" id="folin" placeholder="Nu Telefone" class="form-control"></div>

				<div class="form-group"><label for="obs_pasiente" class=" form-control-label">Observasaun</label><input type="text" name="obs_pasiente" id="obs_pasiente" placeholder="Observasaun" class="form-control"></div>

				<div class="form-group">
					<button type="submit" name="aumenta" class="btn btn-success btn-sm"><i class="menu-icon fa fa-save"></i> Aumenta</button>
					<a href="?page=pasiente" class="btn btn-warning btn-sm"><i class="menu-icon fa fa-mail-reply-all"></i> Fila</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
$(function() {
$( "#datepicker" ).datepicker();
});

window.onload=function(){
$('#datepicker').on('change', function() {
var dob = new Date(this.value);
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
$('#umur').val(age);
});
}

</script>