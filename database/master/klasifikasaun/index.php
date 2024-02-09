<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaKlasifikasaun" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Klasifikasaun</th>
							<th>Klasifikasaun</th>
							<th>Observasaun</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_klasifikasaun
							");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_klasifikasaun'] ?></td>
								<td><?= $data['nrn_klasifikasaun'] ?></td>
								<td><?= $data['obs_klasifikasaun'] ?></td>
								<td>
									<a href="?page=hadiaKlasifikasaun&id=<?= $data['id_klasifikasaun'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>



									<a href="?page=hamosKlasifikasaun&id=<?= $data['id_klasifikasaun'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['nrn_klasifikasaun']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>