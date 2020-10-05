<div class="container mt-5 mb-5 pb-5">
    <div class="row pt-5 pb-4">
        <h4>Keranjang Belanja Anda</h4>
    </div>
    <div class="col-md-2">
        <?= $this->session->flashdata('pesan') ?>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Item</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Sub-total</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($this->cart->contents() as $it) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $it['name']; ?></td>
                    <td><?= $it['qty']; ?></td>
                    <td>Rp <?= number_format($it['price'], 2, ',', '.'); ?></td>
                    <td>Rp <?= number_format($it['subtotal'], 2, ',', '.'); ?></td>
                    <td><a href="<?= base_url(); ?>produk/deletecart/<?= $it['rowid']; ?>"><i class="fas fa-minus-square text-danger"></i></a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"><strong> Total Item </strong> </td>
                <td><strong>Rp <?= number_format($this->cart->total(), 2, ',', '.'); ?></strong></td>
            </tr>
        </tbody>
    </table>
    <div>
        <a href="<?= base_url('produk/hapuskeranjang') ?>" class="btn btn-danger">Hapus Keranjang</a>
        <a href="<?= base_url('home/tampilkanitem') ?>" class="btn btn-primary">Lanjutkan Belanja</a>
        <a href="<?= base_url('produk/pembayaran') ?>" class="btn btn-success">Pembayaran</a>
    </div>
</div>