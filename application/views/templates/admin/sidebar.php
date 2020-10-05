<div class="row no-gutters">
	<div class="col-md-2 bg-dark pr-3 pt-4 " id="sidebar">
		<ul class="nav flex-column ml-3 mb-5">
			<li>
				<h3 class="text-white  mb-3"><i class="fas fa-tshirt mr-2 pb-5"></i>BAJUKU</h3>
			</li>
			<li>
					<img class="rounded-circle" width="150px" src="<?= base_url('assets/img/admin/default.jpg')?>">
					<p class="text-white pl-3 pt-1">Fahmi Aga Aditya</p>
			</li>
			<li class="nav-item pt-4">
				<a class="nav-link active text-white" href="<?= base_url('item') ?>"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
				<hr class="bg-secondary">
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('item/daftarBarang') ?>"><i class="fas fa-tshirt mr-2"></i>Daftar Barang</a>
				<hr class="bg-secondary">
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('item/user') ?>"><i class="fas fa-user-edit mr-2"></i> User</a>
				<hr class="bg-secondary">
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="<?= base_url('item/invoice') ?>"><i class="fas fa-file-invoice-dollar mr-3"></i>Invoice</a>
				<hr class="bg-secondary">
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie mr-2 "></i>Profile</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Lihat Profile</a>
					<a class="dropdown-item" href="#">Edit Profile</a>
					<a class="dropdown-item" href="#">Logout</a>

				</div>
			</li>
		</ul>
	</div>
