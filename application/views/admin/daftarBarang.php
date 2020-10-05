		<div class="col-md-10">
			<div class="container mt-3 ">
				<?php if ($this->session->flashdata('pesan')) : ?>
					<div class="mt-3">
						<div class="col md-6">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								Data Item<strong> berhasil </strong> <?= $this->session->flashdata('pesan'); ?>.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<h2>DAFTAR BARANG</h2>

				<a href="<?= base_url('item/tambahData') ?>" type="button" class="btn btn-primary">Tambah data Barang</a>
				<form class="form-inline pt-3">
					<input class="form-control mr-sm-2" type="search" placeholder="Temukan Item...." aria-label="Search">
					<button class="btn btn-outline-dark " type="submit">Cari</button>
				</form>
				<table class="table table-hover table-dark mt-4">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Barang</th>
							<th scope="col">Jenis</th>
							<th scope="col">Gender</th>
							<th scope="col">Stock</th>
							<th scope="col">Ukuran</th>
							<th scope="col">Harga</th>
							<th scope="col">Gambar</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($item as $it) : ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $it['nama']; ?></td>
								<td><?= $it['jenis']; ?></td>
								<td><?= $it['gender']; ?></td>
								<td><?= $it['stock']; ?></td>
								<td><?= $it['ukuran']; ?></td>
								<td>Rp <?= number_format($it['harga'],0,',','.'); ?></td>
								<td>
									<img src="<?= base_url() . 'assets/img/' . $it['gambar']; ?>" width="50px" height="50px" alt="">
								</td>
								<td>
									<a href="<?= base_url() ?>item/ubahData/<?= $it['id'];?>" class="badge badge-primary">Ubah</a>
									<a href="<?= base_url() ?>item/hapusData/<?= $it['id'];?>" class="badge badge-danger" onclick="return confirm('Anda Yakin?')">Hapus</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>

				</table>
			</div>

		</div>
		</div>
