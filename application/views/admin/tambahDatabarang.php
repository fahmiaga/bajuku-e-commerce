<div class="col md-4 mt-5">
	<div class="card float-left ml-5">
		<div class="card-header">
			Tambah Data Barang
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php endif; ?>
			<?= form_open_multipart('item/tambahdata'); ?>
			<div class="form-group">
				<label for="nama">Nama Barang</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>
			<div class="form-group">
				<label for="jenis">Jenis Barang</label>
				<select class="form-control" id="jenis" name="jenis">
					<option value="Kaos">Kaos</option>
					<option value="Kemeja">Kemeja</option>
					<option value="Jacket">Jacket</option>
				</select>
			</div>
			<div class="form-group">
				<label for="ukuran">Gender</label>
				<select class="form-control" id="gender" name="gender">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-group pt-2">
				<label for="stock">Stock Barang</label>
				<input type="text" class="form-control" id="stock" name="stock">
			</div>
			<div class="form-group">
				<label for="ukuran">Ukuran</label>
				<select class="form-control" id="ukuran" name="ukuran">
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
				</select>
			</div>
			<div class="form-group pt-2">
				<label for="Harga">Harga Barang</label>
				<input type="text" class="form-control" id="harga" name="harga">
			</div>
			<div class="form-group pt-2">
				<label for="gambar">gambar Barang 1</label>
				<input type="file" class="form-control" id="gambar" name="gambar">
			</div>
			<div class="form-group pt-2">
				<label for="gambar2">gambar Barang 2</label>
				<input type="file" class="form-control" id="gambar2" name="gambar2">
			</div>
			<button type="submit" class="btn btn-primary float-right">Tambah Data</button>
			<?= form_close(); ?>
		</div>
	</div>

</div>
</div>
