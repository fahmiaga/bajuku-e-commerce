		<div class="col-md-10">
			<div class="container mt-5">
				<h2>Invoice</h2>
				<table class="table table-striped table-dark">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Id</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Alamat</th>
							<th scope="col">Tanggal Pemesanan</th>
							<th scope="col">Batas Pembayaran</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($invoice as $inv) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $inv['id']; ?></td>
								<td><?= $inv['nama']; ?></td>
								<td><?= $inv['email']; ?></td>
								<td><?= $inv['alamat']; ?></td>
								<td><?= $inv['tgl_pesan']; ?></td>
								<td><?= $inv['batas_bayar']; ?></td>
								<td><a href="<?= base_url() ?>Invoice/detail/<?= $inv['id']; ?>" class="badge badge-info">Detail</a></td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

		</div>
		</div>