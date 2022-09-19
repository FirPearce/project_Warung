<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Halaman Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/assets/img/logo.png">
    <!-- Pignose Calender -->
    <link href="<?= base_url(); ?>/assetsadmin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assetsadmin/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assetsadmin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url(); ?>/assetsadmin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assetsadmin/icons/font-awesome/css/font-awesome.min.css">
    <link href="<?= base_url(); ?>/assetsadmin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?= base_url('Admin/admin'); ?>">
                    <span class="brand-title">
                        <img src="<?= base_url(); ?>/assets/img/logo.png" alt="" style="margin-top: -24%; margin-left: -10%;">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <!-- <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="<?= base_url(); ?>/assetsadmin/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <!-- <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li> -->
                                        <hr class="my-2">
                                        <!-- <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li> -->
                                        <li><a href="<?= base_url('Login/logout'); ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/admin'); ?>">Home</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Fitur</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-calculator menu-icon"></i> <span class="nav-text">Kalkulator</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/daftarPendapatan'); ?>">Daftar Pendapatan</a></li>
                            <li><a href="<?= base_url('Admin/hitungbelanja'); ?>">Hitung Belanja</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Barang</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class='fas fa-box-open'></i><span class="nav-text">Produk</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/daftarproduk'); ?>">Daftar Produk</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Menu Lainnya</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <span class="nav-text">Informasi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/informasipelanggan'); ?>">Informasi Pelanggan</a></li>
                            <li><a href="<?= base_url('Admin/informasisupplier'); ?>">Informasi Supplier</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-file"></i> <span class="nav-text">Konten Website</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Admin/konten'); ?>">Konten Website</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <?= $this->renderSection('content') ?>


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/common/common.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/js/custom.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/js/settings.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/js/gleek.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/d3v3/index.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/topojson/topojson.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/chartist/js/chartist.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="<?= base_url(); ?>/assetsadmin/js/dashboard/dashboard-1.js"></script>

    <!-- datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- validation -->
    <script src="<?= base_url(); ?>/assetsadmin/plugins/validation/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>/assetsadmin/plugins/validation/jquery.validate-init.js"></script>

    <!-- include the library -->
    <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>

    <script>
        /* Dengan Rupiah */
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>

    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code scanned = ${decodedText}`, decodedResult);
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</body>

</html>