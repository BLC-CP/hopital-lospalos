<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<!-- <a href="?page=aumentaMoras" class="btn btn-success btn-sm">Aumenta Dadus</a> -->
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Moras</th>
							<th>Klasifikasaun</th>
							<th>Moras</th>
							<th>Obsevasaun</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_moras
							JOIN tb_klasifikasaun ON tb_moras.id_klasifikasaun=tb_klasifikasaun.id_klasifikasaun
							");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_moras'] ?></td>
								<td><?= $data['nrn_klasifikasaun'] ?></td>
								<td><?= $data['moras'] ?></td>
								<td><?= $data['obs_moras'] ?></td>
								<td>
									<a href="?page=hadiaMoras&id=<?= $data['id_moras'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosMoras&id=<?= $data['id_moras'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['moras']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>