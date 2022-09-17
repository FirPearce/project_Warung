<?= $this->extend('loginpage/template/template') ?>

<?= $this->section('content') ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url(); ?>/assets/img/logo.png" style="margin-left: 20%; margin-top: 20%;" alt="IMG">
                <p class="center" style="text-align: center; margin-left: 5%;">Sedia Barang Kebutuhan Anda</p>
            </div>
            <form action="<?= base_url('Login/proseslogin'); ?>" class="login100-form validate-form" method="POST">
                <span class="login100-form-title">
                    Masuk Warung
                </span>

                <div class="wrap-input100 validate-input" data-validate="Masukkan username yang valid">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Masuk
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Lupa
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="<?= base_url('Login/register'); ?>">
                        Daftar Akun Baru
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>