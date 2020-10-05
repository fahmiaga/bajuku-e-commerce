<div class="container mt-5 mb-5 pt-5">
    <div class="row">
        <?php foreach ($produk as $pr) : ?>
            <div class="col-md-3 pb-3">
                <a href="<?= base_url(); ?>produk/detailitem/<?= $pr['id']; ?>">
                    <div class="card isi">
                        <img src="<?= base_url() . 'assets/img/' . $pr['gambar']; ?>" width="200px" height="250px" class="card-img-top fahmi" alt="...">
                        <div class="card-body">
                            <p class="card-text pb-2 text-dark"><?= word_limiter($pr['nama'], 3); ?></p>
                            <p class="card-text text-muted pb-2"><?= $pr['gender']; ?></p>
                            <p class="card-text text-muted pb-2">Rp <?= number_format($pr['harga'], '2', ',', '.'); ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>