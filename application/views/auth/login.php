<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/css/auth.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Log in</h1>
                <?= $this->session->flashdata('pesan') ?>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                    <form class="form-signin" method="post" action="<?= base_url('auth') ?>">
                        <input type="text" class="form-control" placeholder="Email" name="email" id="password" value="<?= set_value('email'); ?>">
                        <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        <?= form_error('password', ' <small class="text-danger">', '</small>'); ?>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>
                        <!-- <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
                    </form>
                </div>
                <a href="<?= base_url('auth/register') ?>" class="text-center new-account">Buat Akun Baru </a>
                <a href="<?= base_url('auth/forgotpassword') ?>" class="text-center new-account">Lupa Password </a>
            </div>
        </div>
    </div>
</body>

</html>