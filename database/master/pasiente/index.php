<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaPasiente" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body" style="font-size:13px;"> 
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Pasiente</th>
							<th>Naran Pasiente</th>
							<th>Sexo</th>
							<th>Fatin Moris</th>
							<th>Data Moris</th>
							<th>Idade</th>
							<th>Hela Fatin</th>
							<th>Telefone</th>
							<th>Observasaun</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_pasiente");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_pasiente'] ?></td>
								<td><?= $data['nrn_pasiente'] ?></td>
								<td><?= $data['sexo_pasiente'] ?></td>
								<td><?= $data['fatin_moris'] ?></td>
								<td><?= $data['data_moris'] ?></td>
								<td><?= $data['idade'] ?></td>
								<td><?= $data['h_fatin_pasiente'] ?></td>
								<td><?= $data['no_tlp_pasiente'] ?></td>
								<td><?= $data['obs_pasiente'] ?></td>
								<td>
									<a href="?page=hadiaPasiente&id=<?= $data['id_pasiente'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosPasiente&id=<?= $data['id_pasiente'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['nrn_pasiente']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>