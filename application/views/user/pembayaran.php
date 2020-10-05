<div class="container mt-5 mb-5 pb-5">
    <div class="row pt-5">
        <div class="col-md-9 pt-3">
            <h5 class="pb-5">Masukkan Alamat Pengiriman dan Pembayaran</h5>

            <form action="<?= base_url('produk/pembayaran'); ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Pengiriman</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <?= form_error('alamat', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="noHp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="noHp" name="noHp">
                        <?= form_error('noHp', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jasa">Jasa Pengiriman</label>
                        <select id="jasa" name="jasa" class="form-control">
                            <option selected>JNE</option>
                            <option>TIKI</option>
                            <option>Ninja</option>
                            <option>Pos Indonesia</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rekening">Metode Pembayaran</label>
                        <select id="rekening" name="rekening" class="form-control">
                            <option selected>Mandiri</option>
                            <option>BCA</option>
                            <option>BRI</option>
                            <option>BNI</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Proses</button>
            </form>
        </div>
        <div class="col-md-3 pt-5">
            <?php if (!empty($this->cart->total())) : ?>
                <p class="btn btn-success">Total Belanja : Rp <?= number_format($this->cart->total(), 2, ',', '.'); ?></p>
            <?php else :
                echo '<p class = "btn btn-danger">Keranjang Belanja Anda Kosong !</p>';
                ?>
            <?php endif; ?>

        </div>
    </div>
</div>