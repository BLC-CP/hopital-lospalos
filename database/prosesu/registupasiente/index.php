<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaRegistuPasiente" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body" style="font-size:13px;"> 
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<!-- <th>Id Registu</th> -->
							<th>Doutor</th>
							<th>Tipu Pasiente</th>
							<th>Pasiente</th>
							<th>Moras</th>
							<th>altura</th>
							<th>Tensaun</th>
							<th>Data Registu</th>
							<th>temperatura</th>
							<th>Observasaun</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_registu_pasiente, tb_doutor, tb_tipu_pasiente, tb_pasiente, tb_moras WHERE 

							tb_registu_pasiente.id_doutor=tb_doutor.id_doutor AND
							tb_registu_pasiente.id_tipu_pasiente=tb_tipu_pasiente.id_tipu_pasiente AND
							tb_registu_pasiente.id_pasiente=tb_pasiente.id_pasiente AND
							tb_registu_pasiente.id_moras=tb_moras.id_moras

							");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<!-- <td><?= $data['id_registu'] ?></td> -->
								<td><?= $data['nrn_doutor'] ?></td>
								<td><?= $data['moras_tipu_pasiente'] ?></td>
								<td><?= $data['nrn_pasiente'] ?></td>
								<td><?= $data['moras'] ?></td>
								<td><?= $data['altura'] ?></td>
								<td><?= $data['tensaun'] ?></td>
								<td><?= $data['d_registu'] ?></td>
								<td><?= $data['temperatura'] ?></td>
								<td><?= $data['obs_registu'] ?></td>
								<td>
									<a href="?page=hadiaRegistuPasiente&id=<?= $data['id_registu'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosRegistuPasiente&id=<?= $data['id_registu'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['nrn_pasiente']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>