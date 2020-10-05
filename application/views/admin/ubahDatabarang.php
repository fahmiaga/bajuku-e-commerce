<div class="col md-4 mt-5">
	<div class="card float-left ml-5">
		<div class="card-header">
			Ubah Data Barang
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php endif; ?>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" id="id" value="<?= $item['id']; ?>">
				<div class="form-group">
					<label for="nama">Nama Barang</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $item['nama']; ?>">
				</div>
				<div class="form-group">
					<label for="jenis">Jenis Barang</label>
					<select class="form-control" id="jenis" name="jenis">
						<?php foreach ($jenis as $j) : ?>
							<?php if ($j == $item['jenis']) : ?>
								<option value="<?= $j; ?>" selected> <?= $j; ?>
								</option>
							<?php else : ?>
								<option value="<?= $j; ?>"> <?= $j; ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="ukuran">Gender</label>
					<select class="form-control" id="gender" name="gender">
						<?php foreach ($gender as $g) : ?>
							<?php if ($g == $item['gender']) : ?>
								<option value="<?= $g; ?>" selected> <?= $g; ?>
								</option>
							<?php else : ?>
								<option value="<?= $g; ?>"> <?= $g; ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group pt-2">
					<label for="stock">Stock Barang</label>
					<input type="text" class="form-control" id="stock" name="stock" value="<?= $item['stock']; ?>">
				</div>
				<div class="form-group">
					<label for="ukuran">Ukuran</label>
					<select class="form-control" id="ukuran" name="ukuran" value="<?= $item['ukuran']; ?>">
						<?php foreach ($ukuran as $u) : ?>
							<?php if ($u == $item['ukuran']) : ?>
								<option value="<?= $u; ?>" selected> <?= $u; ?>
								</option>
							<?php else : ?>
								<option value="<?= $u; ?>"> <?= $u; ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group pt-2">
					<label for="Harga">Harga Barang</label>
					<input type="text" class="form-control" id="harga" name="harga" value="<?= $item['harga']; ?>">
				</div>
				<div class="form-group pt-2">
					<label for="gambar">gambar Barang 1</label>
					<input type="file" class="form-control" id="gambar" name="gambar" value="<?= $item['gambar']; ?>">
					<img src="<?= base_url() . 'assets/img/' . $item['gambar']; ?>" width="50px" height="50px" alt="">
				</div>
				<div class="form-group pt-2">
					<label for="gambar2">gambar Barang 2</label>
					<input type="file" class="form-control" id="gambar2" name="gambar2" value="<?= $item['gambar2']; ?>">
					<img src="<?= base_url() . 'assets/img/' . $item['gambar2']; ?>" width="50px" height="50px" alt="">
				</div>
				<button type="submit" class="btn btn-primary float-right">Ubah Data</button>
			</form>
		</div>
	</div>

</div>
</div>
