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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


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

    <script>
        var e = document.getElementById("scanproduk");
        var pilihan1 = document.getElementById("pilihan1");
        var pilihan2 = document.getElementById("pilihan2");

        function onChange() {
            var value = e.value;
            var text = e.options[e.selectedIndex].text;
            if (value == "scanqr") {
                pilihan1.style.display = "block";
                pilihan2.style.display = "none";
            } else {
                pilihan1.style.display = "none";
                pilihan2.style.display = "block";
            }
        }
        e.onchange = onChange;
        onChange();
    </script>

    <script>
        var id_pembeli;
        var id_barang;
        $("#nama-barang").change(function() {
            id_barang = $(this).val();
            $.ajax({
                url: "<?= base_url('Admin/addcart'); ?>",
                method: "POST",
                data: {
                    id_pembeli: id_pembeli,
                    id_barang: id_barang
                },
                success: function(data) {
                    disabledoption(id_barang);
                    getAll();
                }
            });
        });

        function disabledoption(id_barang) {
            $("#nama-barang option[value=" + id_barang + "]").attr("disabled", true);
        }

        function getAll() {
            $.ajax({
                url: "<?= base_url('Admin/showcart'); ?>",
                method: "POST",
                data: {
                    id_pembeli: id_pembeli
                },
                success: function(data) {
                    $('#tabel').DataTable().destroy();
                    $('#tabel').find('tbody').empty();
                    $('#tabel').find('tbody').html(data);
                }
            });
        }
        $("#nama-pembeli").change(function() {
            id_pembeli = $(this).val();
            if (id_pembeli != "") {
                getAll();
            } else {
                $('#tabel').DataTable().destroy();
                $('#tabel').find('tbody').empty();
            }
        });
    </script>

    <script type="text/javascript">
        const arr = <?= $itemcartjson; ?>;
        for (var i = 0; i < arr.length; i++) {
            var obj = arr[i];

            function ubahangka(obj) {
                var id_produk = document.getElementsByName("id_barang" + obj)[0].value;
                var quantity = document.getElementsByName("quantity" + obj)[0].value;
                $.ajax({
                    url: "<?= base_url('Admin/ubahangka'); ?>",
                    method: "POST",
                    data: {
                        id_pembeli: id_pembeli,
                        id_produk: id_produk,
                        quantity: quantity

                    },
                    success: function(data) {
                        getAll();
                    }
                });
            }
        }
    </script>
    <script>
        $("#nama-pembeli").change(function() {
            id_pembeli = $(this).val();
            //disabled nama pembeli
            $("#nama-pembeli option[value=kosong]").attr("disabled", true);
            $("#nama-barang option").removeAttr("disabled");
            $.ajax({
                url: "<?= base_url('Admin/barangbypembeli'); ?>",
                method: "POST",
                data: {
                    id_pembeli: id_pembeli
                },
                success: function(data) {
                    var json = JSON.parse(data);
                    if (data != "[]") {
                        var html = '';
                        var i;

                        for (i = 0; i < json.length; i++) {
                            $("#nama-barang option[value=" + json[i].id_barang + "]").attr("disabled", true);
                        }
                    } else {
                        $('#nama-barang option').removeAttr('disabled');
                    }
                }
            });

            //ajax hitung total every 5 seconds
            setInterval(function() {
                $.ajax({
                    url: "<?= base_url('Admin/hitungtotal'); ?>",
                    method: "POST",
                    data: {
                        id_pembeli: id_pembeli
                    },
                    success: function(data) {
                        var json = JSON.parse(data);
                        if (json) {
                            var html = '';
                            var foot = document.getElementById("cartfoot");
                            foot.innerHTML = '<tr><td>Jumlah: <br>' + json['jumlahbarang']['id_barang'] + ' Barang</td><td>Nama Produk</td><td>Kuantitas: ' + json['totalbarang']['qty'] + '</td><td>Total:<br>Rp.' + json['totalharga']['harga'] + '</td><td>Hapus Semua</td></tr>';
                        }
                    }
                });
            }, 500);

        });
    </script>
    <script>
        for (var i = 0; i < arr.length; i++) {
            var obj2 = arr[i];

            function hapus(e, obj2) {
                e.preventDefault();

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    width: 550,
                    text: "Item akan dihapus dari keranjang!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var button = document.getElementsByName("hapusbutton" + obj2)[0];
                        var valuepembeli = button.getAttribute("data-value");
                        var valuebarang = button.getAttribute("value");
                        $.ajax({
                            url: "<?= base_url('Admin/hapusitem'); ?>",
                            method: "POST",
                            data: {
                                valuepembeli: valuepembeli,
                                valuebarang: valuebarang
                            },
                            success: function(data) {
                                getAll();
                                removebarang(valuebarang);
                                Swal.fire({
                                    icon: 'success',
                                    width: 550,
                                    title: 'Success',
                                    text: 'Item berhasil dihapus dari keranjang!',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }
                        });
                    }
                })
            }

            function removebarang(valuebarang) {
                $("#nama-barang option[value=" + valuebarang + "]").removeAttr("disabled");
                $("#nama-barang").val(null).trigger('change');
            }

        }
    </script>
</body>

</html>