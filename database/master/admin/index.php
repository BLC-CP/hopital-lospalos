<div class="col-md-12">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="?page=aumentaAdmin" class="btn btn-success btn-sm">Aumenta Dadus</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id</th>
							<th>Naran</th>
							<th>Telefone</th>
							<th>Foto</th>
							<th>Email</th>
							<!-- <th>Password</th> -->
							<th>Level</th>
							<th>Aksaun</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$query = mq("SELECT * FROM tb_admin");
						$no = 1;
						while ($data = mfa($query)) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['id_admin'] ?></td>
								<td><?= $data['nrn_admin'] ?></td>
								<td><?= $data['no_tlp'] ?></td>
								<td><img src="imgAdmin/<?= $data['foto'] ?>" width="50px"></td>
								<td><?= $data['email'] ?></td>
								<!-- <td><?= $data['password'] ?></td> -->
								<td><?= $data['level'] ?></td>
								<td>
									<a href="?page=hadiaAdmin&id=<?= $data['id_admin'] ?>" class="bg-success text-white btn-sm"><i class="menu-icon fa fa-edit"></i></a>

									<a href="?page=hamosAdmin&id=<?= $data['id_admin'] ?>" class="bg-danger text-white btn-sm" onclick="return confirm('Tebes atu hamos <?= $data['nrn_admin']; ?>');"><i class="menu-icon fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>