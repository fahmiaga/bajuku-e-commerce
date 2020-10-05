<div class="container mt-5 pt-5">
    <div class="row pt-5 ">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <a href="#gambar-1">
                    <img src="<?= base_url() . 'assets/img/' . $item['gambar']; ?>" class="card-img-top" alt="...">
                </a>
            </div>
            <div class="overlay" id="gambar-1">
                <a href="#" class="close text-light">
                    <h3>X</h3>
                </a>

                <img src="<?= base_url() . 'assets/img/' . $item['gambar']; ?>" alt="">
                <a href="#gambar-2" class="next">next</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <a href="#gambar-2">
                    <img src="<?= base_url() . 'assets/img/' . $item['gambar2']; ?>" class="card-img-top" alt="...">
                </a>
            </div>
            <div class="overlay" id="gambar-2">
                <a href="#" class="close text-light">
                    <h3>X</h3>
                </a>
                <a href="#gambar-1" class="prev">prev</a>
                <img src="<?= base_url() . 'assets/img/' . $item['gambar2']; ?>" alt="">

            </div>
        </div>

        <div class="col-md-4 pb-5">
            <div class="card-body">
                <h6 class="card-title pt-3 pb-3"><?= $item['nama']; ?></h6>
                <p class="card-text"><?= $item['jenis']; ?></p>
                <p class="card-text"><?= $item['gender']; ?></p>
                <p class="card-text"><?= $item['stock']; ?></p>
                <p class="card-text"><?= $item['ukuran']; ?></p>
                <h6 class="card-text text-muted">Rp <?= number_format($item['harga'], '2', ',', '.'); ?></h6><br>
                <a href="<?= base_url(); ?>produk/tambahKeKeranjang/<?= $item['id']; ?>" class="btn btn-dark">Tambahkan ke Keranjang</a>
            </div>
        </div>
    </div>
    <a href="<?= base_url('home/tampilkanitem'); ?>" class="btn btn-dark">Kembali</a>
</div>