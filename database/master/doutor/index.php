<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaDoutor" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Doutor</th>
							<th>Naran Doutor</th>
							<th>Sexo</th>
							<th>Hela Fatin</th>
							<th>Telefone</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_doutor");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_doutor'] ?></td>
								<td><?= $data['nrn_doutor'] ?></td>
								<td><?= $data['sexo_doutor'] ?></td>
								<td><?= $data['h_fatin'] ?></td>
								<td><?= $data['no_tlp'] ?></td>
								<td>
									<a href="?page=hadiaDoutor&id=<?= $data['id_doutor'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosDoutor&id=<?= $data['id_doutor'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['nrn_doutor']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>