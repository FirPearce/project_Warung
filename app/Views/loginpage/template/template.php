<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login atau Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assetslogin/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <?= $this->renderSection('content') ?>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/assetslogin/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/assetslogin/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/assetslogin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/assetslogin/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/assetslogin/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/assetslogin/js/main.js"></script>
    <script src="<?= base_url(); ?>/assets/package/dist/sweetalert2.all.min.js"></script>

    <script>
        const flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire({
                title: 'Login',
                text: 'Anda Berhasil Login',
                icon: 'success'
            });
        }
    </script>
</body>

</html>