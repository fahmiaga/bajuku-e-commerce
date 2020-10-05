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
                <a class="nav-item nav-link active page-scroll" href="<?= base_url('produk'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link page-scroll" href="<?= base_url('produk/men'); ?>">Pria</a>
                <a class="nav-item nav-link page-scroll" href="<?= base_url('produk/women'); ?>">Wanita</a>
            </div>
        </div>
        <div class="container">
            <ul class="nav justify-content-end">
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
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
</nav>