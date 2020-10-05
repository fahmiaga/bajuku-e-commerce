		<div class="col-md-10">
		    <div class="container mt-5">
		        <h2>Invoice</h2>
		        <table class="table table-striped table-dark">
		            <thead>
		                <tr>
		                    <th scope="col">No</th>
		                    <th scope="col">Id</th>
		                    <th scope="col">Nama Barang</th>
		                    <th scope="col">Jumlah</th>
		                    <th scope="col">Harga</th>
		                    <th scope="col">Sub Total</th>
		                </tr>
		            </thead>
		            <tbody>
		                <?php $i = 1; ?>
		                <?php
                        $total = 0;
                        foreach ($pesanan as $pesan) :
                            $subtotal = $pesan['jumlah'] * $pesan['harga'];
                            $total += $subtotal;
                            ?>
		                    <tr>
		                        <th scope="row"><?= $i; ?></th>
		                        <td><?= $pesan['id_brg']; ?></td>
		                        <td><?= $pesan['nama_brg']; ?></td>
		                        <td><?= $pesan['jumlah']; ?></td>
		                        <td><?= number_format($pesan['harga'], 2, ', ', '.'); ?></td>
		                        <td><?= number_format($subtotal, 2, ', ', '.'); ?></td>
		                    </tr>
		                    <?php $i++; ?>
		                <?php endforeach; ?>
		            </tbody>
		        </table>
		    </div>

		</div>
		</div>