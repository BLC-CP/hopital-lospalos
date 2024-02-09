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
		<table width="100%" border="1">

			<tbody>
				<tr>

					<td class="text-center">
						Relatoriu Geral 
					</td>

				</tr>
			</tbody>

		</table>
		<HR>

		<table width="100%" border="1">
			<thead>
				<tr bgcolor="success">
					<th>Id Registu</th>
					<th>Doutor</th>
					<th>Tipu Pasiente</th>
					<th>Pasiente</th>
					<th>Moras</th>
					<th>Klasifikasaun</th>
					<th>altura</th>
					<th>Tensaun</th>
					<th>Data Registu</th>
					<th>temperatura</th>
					<th>Observasaun</th>
					<!-- <th>Emprime</th> -->
				</tr>
			</thead>
			<tbody>

				<?php 
				$a=$conn->query("SELECT * FROM tb_registu_pasiente, tb_doutor, tb_tipu_pasiente, tb_pasiente, tb_moras,  tb_klasifikasaun WHERE 

					tb_registu_pasiente.id_doutor=tb_doutor.id_doutor AND
					tb_registu_pasiente.id_tipu_pasiente=tb_tipu_pasiente.id_tipu_pasiente AND
					tb_registu_pasiente.id_pasiente=tb_pasiente.id_pasiente AND
					tb_moras.id_klasifikasaun=tb_klasifikasaun.id_klasifikasaun AND
					tb_registu_pasiente.id_moras=tb_moras.id_moras

					");
				while($r=$a->fetch_array()){
					?>


					<tr>
						<td><?= $r['id_registu'] ?></td>
						<td><?= $r['nrn_doutor'] ?></td>
						<td><?= $r['moras_tipu_pasiente'] ?></td>
						<td><?= $r['nrn_pasiente'] ?></td>
						<td><?= $r['moras'] ?></td>
						<td><?= $r['nrn_klasifikasaun'] ?></td>
						<td><?= $r['altura'] ?></td>
						<td><?= $r['tensaun'] ?></td>
						<td><?= $r['d_registu'] ?></td>
						<td><?= $r['temperatura'] ?></td>
						<td><?= $r['obs_registu'] ?></td>
						<!-- <td class="btn" onclick="printContent('div1')" style="cursor:pointer;"><a style="text-decoration: none; color: black;" href="?page=relperiodo&id_registu=<?= $r['id_registu'] ?>" target="my-iframe">PRINT</a></td> -->
					</tr>
				<?php } ?>
			</tbody> 
		</table> <br>
		<div class="assinatura" style="text-align:center; width:15%; margin: auto;">
			<p>Data : <?= $d_registu; ?></p> <br>
			<hr>
			<p>Dr. Beny Da Costa</p>
		</div>
	</div>