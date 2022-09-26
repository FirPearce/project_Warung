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
                        <h4 class="card-title">Transaksi Hari ini</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="icon-plus"></i> Tambah Transaksi</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered datatables">
                                <thead>
                                    <tr>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pembeli</th>
                                        <th>Total Transaksi</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaksi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" name="hitungform" method="POST">
                        <div class="form-group">
                            <label for="nama-pembeli" class="col-form-label">Nama Pembeli</label>
                            <select class="selectpicker show-tick" data-live-search="true" data-width="100%" id="nama-pembeli">
                                <option value="kosong">Pilih Pembeli</option>
                                <option data-divider="true"></option>
                                <?php foreach ($namapembeli as $d) : ?>
                                    <option data-tokens="<?= $d['nama_pembeli']; ?>" value="<?= $d['id_pembeli']; ?>">(>-->) <?= $d['nama_pembeli']; ?> : <?= $d['tipe']; ?></option>
                                <?php endforeach; ?>
                                <!-- <option data-tokens="" data-divider="true" value="">Pilih Pembeli</option>
                                <option data-tokens="" value="tambah">(+)(Tambah Pembeli Baru)</option> -->
                            </select>
                        </div>
                        <!-- <div class="form-group" id="tambah_pembeli">
                            <label for="tambah_pembeli" class="col-form-label">Tambah Nama Pembeli Baru</label>
                            <input type="text" class="form-control" name="tambah_pembeli" placeholder="Nama Pembeli Baru">
                        </div> -->
                        <!-- <div class="form-group" id="pembeli_baru">
                            <label for="nama-produk" class="col-form-label">Tipe pembeli</label>
                            <select class="selectpicker show-tick" data-width="100%" id="tipe_pembeli">
                                <option value="Warungan">Warungan</option>
                                <option value="Eceran">Eceran</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="nama-produk" class="col-form-label">Produk</label>
                            <select class="selectpicker show-tick" data-width="100%" id="scanproduk">
                                <option value="manual">Manual</option>
                                <option value="scanqr">SCAN QR</option>
                            </select>
                        </div>
                        <div class="form-group" id="pilihan1">
                            <label for="produk" class="col-form-label">SCAN QR</label>
                            <div id="qr-reader" style="width:100%;"></div>
                        </div>
                        <div class="form-group" id="pilihan2">
                            <label for="produk" class="col-form-label">Cari Produk</label>
                            <select class="selectpicker" data-live-search="true" data-width="100%" multiple data-selected-text-format="count" id="nama-barang">
                                <?php foreach ($listproduk as $d) : ?>
                                    <option value="<?= $d['id_barang']; ?>"><?= $d['nama_barang']; ?> : Stok <?= $d['stok']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label" id="coba">Produk Dipilih</label>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Kuantitas</th>
                                            <th>Harga</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="carttable">

                                    </tbody>
                                    <tfoot id="cartfoot" style="text-align: center;">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Total Produk</th>
                                            <th>Nilai harga</th>
                                            <th>Hapus Semua</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Checkout</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection() ?>