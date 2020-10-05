<div class="container">
    <form action="" method="post" class="form-inline pt-5">
        <input class="form-control mr-sm-2" type="search" placeholder="Temukan Item...." aria-label="Search" name="keyword" autocomplete="off" autofocus>
        <input class="btn btn-outline-dark " type="submit" name="submit"></input>
    </form>
    <div class="row pt-5">
        <?php foreach ($item as $it) : ?>
            <div class="col-md-3 pt-5">
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
    <?= $this->pagination->create_links(); ?>
</div>