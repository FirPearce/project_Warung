<?= $this->extend('admin/template/template') ?>

<?= $this->section('content') ?>
<!--**********************************

            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Rekap Pendapatan</h4>
                        <form class="form-valide" action="#" method="post">
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control" id="tahun" name="tahun">
                                        <option value="">Pilih Tahun</option>
                                        <option value="html">HTML</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id="bulan" name="bulan">
                                        <option value="">Pilih Bulan</option>
                                        <option value="">CONTOH BULAN</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id="tanggal" name="tanggal">
                                        <option value="">Pilih Tanggal</option>
                                        <option value="">CONTOH TANGGAL</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary btn-lg ">Cari</button>
                                </div>
                            </div>
                        </form>


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pembeli</th>
                                        <th>Total Transaksi</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Detail</a>
                                            <a href="" class="btn btn-danger ">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pembeli</th>
                                        <th>Total Transaksi</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>