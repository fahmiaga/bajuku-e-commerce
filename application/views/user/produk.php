<!doctype html>
<html lang="en" id="home">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/user/css/animate.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/user/fontawesome-free-5.11.2-web/css/all.min.css">

	<title><?= $judul; ?></title>
</head>

<body class="mt-5">

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<nav class="navbar ">
			<a class="navbar-brand page-scroll ml-4" href="#home">
				<img src="<?= base_url() ?>assets/img/logo/logo.png" width="50" height="40" class="d-inline-block align-top" alt="">
			</a>
		</nav>
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link page-scroll" href="#portfolio">Produk</a>
					<a class="nav-item nav-link page-scroll" href="#pilihan">Pilihan</a>
					<a class="nav-item nav-link page-scroll" href="#klien">Partners</a>
					<a class="nav-item nav-link page-scroll" href="#contact">Contact</a>
				</div>
			</div>
			<div class="container">
				<ul class="nav justify-content-end">
					<!-- <li class="nav-item cart">
						<h4><i class="fas fa-fw fa-cart-plus text-white">:</i> </h4>
					</li> -->
					<li class="nav-item dropdown">
						<a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<?php if (!empty($this->cart->total_items())) : ?>
								<h5 class="badge badge-danger"><?= $this->cart->total_items() ?></h5>
							<?php endif; ?>
						</a>
						<div class="dropdown-menu">
							<?php foreach ($this->cart->contents() as $it) : ?>
								<p class="p-1"><?= word_limiter($it['name'], 3); ?> [<?= $it['qty']; ?>]</p>
							<?php endforeach; ?>
							<p class="text-center"><a href="<?= base_url('produk/detailkeranjang') ?>">Keranjang Belanja</a> </p>
						</div>

					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#"><img class="rounded-circle" src="<?= base_url('assets/img/user/') . $user['foto']; ?>" width="40px" height="40px" alt="">
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url('home/profile'); ?>">Lihat Profile</a>
							<a class="dropdown-item" href="<?= base_url('home/editprofile'); ?>">Edit Profile</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
						</div>
					</li>
				</ul>
			</div>
	</nav>


	<!-- Slider -->

	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url() ?>assets/user/img/slider/slide1.jpg" class="d-block w-100" alt="...">
				<div class="caption text-left animated slideInLeft">
					<h1>This is our big Tagline!</h1>
					<h3 class="text-light ">Here's our small slogan.</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url() ?>assets/user/img/slider/slide2.jpg" class="d-block w-100" alt="...">
				<div class="caption text-center animated slideInDown">
					<h1>This is our big Tagline!</h1>
					<h3 class="text-light ">Here's our small slogan.</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url() ?>assets/user/img/slider/slide3.jpg" class="d-block w-100" alt="...">
				<div class="caption  text-right animated slideInRight">
					<h1>This is our big Tagline!</h1>
					<h3 class="text-light ">Here's our small slogan.</h3>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<section id="portfolio" class="portfolio bg-light pb-4 mt-4">
		<div class="container">
			<div class="row mb-4 pt-4">
				<div class="col pb-5">
					<h4>Produk Terbaru</h4>
				</div>
			</div>

			<div class="row mb-4">
				<?php foreach ($item as $it) : ?>
					<div class="col-md-3">
						<a href="<?= base_url(); ?>produk/detailitem/<?= $it['id']; ?>">
							<div class="card isi">
								<img src="<?= base_url() . 'assets/img/' . $it['gambar']; ?>" width="200px" height="250px" class="card-img-top fahmi" alt="...">
								<div class="card-body">
									<p class="card-text pb-2 text-dark"><?= word_limiter($it['nama'], 3); ?></p>
									<p class="card-text text-muted pb-2"><?= $it['gender']; ?></p>
									<p class="card-text text-muted pb-2">Rp <?= number_format($it['harga'], '2', ',', '.'); ?></p>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>

		</div>
		<div class="col text-center pt-4">
			<h6><a href="<?= base_url('home/tampilkanitem') ?>" class="text-dark">
					Lihat Semua Item
				</a></h6>
		</div>
		</div>
	</section>

	<section id="pilihan" class="pilihan bg-light pb-4 mt-5">
		<div class="container">
			<div class="row mb-4 pt-4">
				<div class="col pb-5">
					<h4>Pilihan</h4>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col md-6">

					<div class="card" style="width: 33rem;">
						<a href="<?= base_url('produk/men'); ?>">
							<img src="<?= base_url() ?>assets/img/logo/men.jpg" class="card-img-top" alt="...">
						</a>
						<div class="card-body">
							<p class="card-text text-dark">Pria</p>
						</div>
					</div>

				</div>
				<div class="col md-6">
					<div class="card" style="width: 33rem;">
						<a href="<?= base_url('produk/women'); ?>">
							<img src="<?= base_url() ?>assets/img/logo/women.jpg"" class=" card-img-top" alt="...">
						</a>
						<div class="card-body">
							<p class="card-text text-dark">Wanita</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="about" class="class mt-4">
		<div class="container">
			<div class="row mb-4">
				<div class="col text-center">
					<h2>About</h2>
				</div>
			</div>
			<div class="row justify-content-center ">
				<div class="col-md-5 text-justify">
					<p class="pkiri">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque delectus eum repellendus nam veritatis nesciunt beatae quibusdam placeat libero eos! Natus tempora quae deserunt dolore dignissimos non quam, cum dolores.</p>
				</div>
				<div class="col-md-5 text-justify">
					<p class="pkanan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero placeat debitis alias tempora aliquam ipsa molestias maxime! Perferendis rem quas quos aut hic quod autem, provident eaque architecto error qui!</p>
				</div>
			</div>
		</div>
	</section> -->


	<!-- Jumbotron -->

	<div class="paralax" id="klien">
		<div class="container">
			<h4>Partners</h4>
			<img src="<?= base_url() ?>assets/img/clients/gojek.png" alt="">
			<img src="<?= base_url() ?>assets/img/clients/traveloka.png" alt="">
			<img src="<?= base_url() ?>assets/img/clients/tokopedia.png" alt="">
		</div>
	</div>




	<section id="contact" class="contact mb-5">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>Contact Us</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="card text-white bg-secondary mb-3 text-center">
						<div class="card-body">
							<h5 class="card-title">Contact Us</h5>
							<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, ratione.
								content.</p>
						</div>
					</div>
					<ul class="list-group">
						<li class="list-group-item">
							<h1>Location</h1>
						</li>
						<li class="list-group-item">Our Office</li>
						<li class="list-group-item">Jl. Setia Budi No.298</li>
						<li class="list-group-item">Sumatera Utara, Indonesia</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<form>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="email" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="pesan">Pesan</label>
							<textarea name="pesan" class="form-control" id="pesan" aria-describedby="emailHelp"></textarea>>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Kirim Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>

	<footer class="bg-dark text-white">
		<div class="container">
			<div class="row pt-3">
				<div class="col text-center">
					<p>Develop by Me. Copyright 2019.</p>
				</div>
			</div>
		</div>

	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url() ?>assets/user/js/jquery-3.4.1.min.js"></script>
	<script src="<?= base_url() ?>assets/user/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>assets/user/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>