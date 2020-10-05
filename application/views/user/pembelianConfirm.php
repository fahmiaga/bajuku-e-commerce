<div class="container mt-5 mb-5 pb-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 pt-5 pb-5">
            <div class="alert alert-success" role="alert">
                Silahkan Cek Email Anda Untuk Melihat OTP
            </div>
            <?= $this->session->flashdata('pesan') ?>
            <form action="<?= base_url('produk/pembelianConfirm') ?>" method="post">

                <div class="col">
                    <input type="text" class="form-control" placeholder="Masukkan Nomor OTP anda" name="otp" id="otp">
                </div>
                <div class="col pt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>
        <div class="col-md-8"></div>
    </div>
</div>