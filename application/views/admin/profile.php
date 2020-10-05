<div class="col-md-10">
    <div class="container mt-5">
        <h1 class="h3 mb-4 text-gray-800">Profile Saya</h1>
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/admin/') . $user['foto']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['nama']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>