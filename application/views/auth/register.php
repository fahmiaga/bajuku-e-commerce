<html>

<head>
    <meta charset="UTF-8">
    <title>Daftar Akun Baru</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/auth.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Daftar Akun Baru</h1>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                    <form class="form-signin" method="post" action="<?= base_url('auth/register') ?>">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', ' <small class="text-danger">', '</small>'); ?>
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                        <input type="password" class="form-control" placeholder="Buat Password" name="password1" id="password1">
                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                        <input type="password" class="form-control" placeholder="Ulangi Password" name="password2" id="password2">

                        <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
                        <!-- <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                    </form>
                </div>
                <a href="<?= base_url('auth') ?>" class="text-center new-account">Sudah Punya Akun?</a>
            </div>
        </div>
    </div>
</body>

</html>