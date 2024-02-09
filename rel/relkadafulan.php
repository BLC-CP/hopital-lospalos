

<?php

$conn = new mysqli("localhost","root","","hospital");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

?> 
<button class="btn" onclick="printContent('div1')" style="cursor:pointer;">EMPRIME</button>
<hr>
<div id="div1">
	<?php include'header.php'; ?>

	<br>
	
	<table width="100%" border="1">
		<thead>
			<tr bgcolor="success">
				<th>Id Registu</th>
				<th>Doutor</th>
				<th>Tipu Pasiente</th>
				<th>Pasiente</th>
				<th>Moras</th>
				<th>altura</th>
				<th>Tensaun</th>
				<th>Data Registu</th>
				<th>temperatura</th>
				<th>Observasaun</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$fulan = $_POST['fulan'];
			$tinan = $_POST['tinan'];
			
			$a=$conn->query("select * FROM tb_registu_pasiente, tb_doutor, tb_tipu_pasiente, tb_pasiente, tb_moras, tb_klasifikasaun WHERE 

				tb_registu_pasiente.id_doutor=tb_doutor.id_doutor AND
				tb_registu_pasiente.id_tipu_pasiente=tb_tipu_pasiente.id_tipu_pasiente AND
				tb_registu_pasiente.id_pasiente=tb_pasiente.id_pasiente AND
				tb_registu_pasiente.id_moras=tb_moras.id_moras AND
				tb_moras.id_klasifikasaun=tb_klasifikasaun.id_klasifikasaun AND

				month(d_registu) = '$fulan' AND
				year(d_registu) = '$tinan' ");

			while($r=$a->fetch_array()){
				?>

				<tr>
					<td><?= $r['id_registu'] ?></td>
					<td><?= $r['nrn_doutor'] ?></td>
					<td><?= $r['moras_tipu_pasiente'] ?></td>
					<td><?= $r['nrn_pasiente'] ?></td>
					<td><?= $r['moras'] ?></td>
					<td><?= $r['altura'] ?></td>
					<td><?= $r['tensaun'] ?></td>
					<td><?= $r['d_registu'] ?></td>
					<td><?= $r['temperatura'] ?></td>
					<td><?= $r['obs_registu'] ?></td>
				</tr>
				<?php 
				
			}
			

			?>
		</tbody>
	</table> <br>
	<div class="assinatura" style="text-align:center; width:15%; margin: auto;">
			<p>Data : <?= $d_registu; ?></p> <br>
			<hr>
			<p>Dr. Beny Da Costa</p>
		</div>
</div>