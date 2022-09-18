<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiBarangModel extends Model
{
    protected $table = 'tbl_transaksi_barang';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_transaksi', 'id_barang', 'qty', 'created_at', 'updated_at'];
}
