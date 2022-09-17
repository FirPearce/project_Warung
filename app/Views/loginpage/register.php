<?= $this->extend('loginpage/template/template') ?>

<?= $this->section('content') ?>

<div class="limiter">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="<?= base_url(); ?>/assets/img/logo.png" style="margin-left: 20%; margin-top: 40%;" alt="IMG">
                <p class="center" style="text-align: center; margin-left: 5%;">Sedia Barang Kebutuhan Anda</p>
            </div>
            <form action="<?= base_url('Login/prosesdaftar'); ?>" class="login100-form validate-form" method="POST">
                <span class="login100-form-title">
                    Mendaftar Pelanggan
                </span>

                <div class="wrap-input100 validate-input" data-validate="Masukkan Nama Lengkap dengan Benar!">
                    <input class="input100" type="text" name="fullname" placeholder="Nama Lengkap">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukkan Email dengan Benar!">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Masukkan Username dengan Benar!">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password yang dimasukkan Harus Sama!">
                    <input class="input100" type="password" name="pass" id="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password yang dimasukkan Harus Sama!">
                    <input class="input100" type="password" name="confirmpassword" id="confirmPassword" placeholder="Konfirmasi Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Daftar
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="<?= base_url('Login/login'); ?>">
                        Sudah memiliki akun? Masuk disini
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>