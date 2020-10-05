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
                <a class="nav-item nav-link active page-scroll" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link page-scroll" href="#portfolio">Pria</a>
                <a class="nav-item nav-link page-scroll" href="#pilihan">Wanita</a>
            </div>
        </div>
        <div class="container">
            <ul class="nav justify-content-end">
                <!-- <li class="nav-item cart">
						<h4><i class="fas fa-fw fa-cart-plus text-white">:</i> </h4>
					</li> -->
                <li class="nav-item dropdown">
                    <a href="<?= base_url('auth'); ?>" class="btn btn-dark">Login</a>
                </li>
            </ul>
        </div>
</nav>
<div class="container">
    <form action="" method="post" class="form-inline pt-5">
        <input class="form-control mr-sm-2" type="search" placeholder="Temukan Item...." aria-label="Search" name="keyword" autocomplete="off" autofocus>
        <input class="btn btn-outline-dark " type="submit" name="submit"></input>
    </form>
    <div class="row pt-5">
        <?php foreach ($item as $it) : ?>
            <div class="col-md-3 pt-5">
                <a href="" data-toggle="modal" data-target="#homeModal">
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
    <?= $this->pagination->create_links(); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="homeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title pt-3" id="exampleModalLabel">Anda Harus Login Dahulu !</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="<?= base_url('auth') ?>">Klik Untuk Login</a>
            </div>
        </div>
    </div>
</div>