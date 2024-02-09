<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaTPasiente" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Pasiente</th>
							<th>Moras Tipu Pasiente</th>
							<th>Tipu Pasiente</th>
							<th>Obsevasaun</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_tipu_pasiente");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_tipu_pasiente'] ?></td>
								<td><?= $data['moras_tipu_pasiente'] ?></td>
								<td><?= $data['tipu_pasiente'] ?></td>
								<td><?= $data['obs_tipu_pasiente'] ?></td>
								<td>
									<a href="?page=hadiaTPasiente&id=<?= $data['id_tipu_pasiente'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosTPasiente&id=<?= $data['id_tipu_pasiente'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['tipu_pasiente']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>