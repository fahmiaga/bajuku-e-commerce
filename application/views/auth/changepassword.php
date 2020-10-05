<html>

<head>
    <meta charset="UTF-8">
    <title>Ganti Password</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/auth.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Ganti Password</h1>
                <h6 class="text-center text-muted"><?= $this->session->userdata('reset_email'); ?></h6>
                <?= $this->session->flashdata('pesan') ?>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                    <form class="form-signin" method="post" action="<?= base_url('auth/changepassword') ?>">
                        <input type="password" class="form-control" placeholder="Password Baru Anda" name="password1" id="password1">
                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                        <input type="password" class="form-control" placeholder="Ulangi password Anda" name="password2" id="password2">
                        <?= form_error('password2', ' <small class="text-danger">', '</small>'); ?>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Ubah Password</button>
                        <!-- <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>