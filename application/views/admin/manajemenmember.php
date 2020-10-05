		<div class="col-md-10">
			<div class="container mt-5">
				<h2 class="pb-5">Manajemen Member</h2>
				<small class="text-danger text-right">
					<p>* 1 = aktif, 0 = tidak aktif</p>
				</small>
				<table class="table table-striped table-dark pt-5">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Tanggal Daftar</th>
							<th scope="col">Status</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($member as $u) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $u['nama']; ?></td>
								<td><?= $u['email']; ?></td>
								<td><?= date('d F Y', $u['date_created']); ?></td>
								<td><?= $u['is_active']; ?></td>
								<td>
									<a href="<?= base_url() ?>admin/hapusUser/<?= $u['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda Yakin?')">Hapus</a>
									<a href="<?= base_url() ?>admin/aktif/<?= $u['id']; ?>" class="badge badge-success" onclick="return confirm('Anda Yakin?')">Aktifkan</a>
									<a href="<?= base_url() ?>admin/nonaktif/<?= $u['id']; ?>" class="badge badge-warning" onclick="return confirm('Anda Yakin?')">Non Aktifkan</a>
								</td>
							</tr>
							<?php $i++ ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

		</div>
		</div>