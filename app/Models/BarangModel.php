<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'tbl_barang';
    protected $primaryKey = 'id_barang';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_supplier', 'kode_barang', 'nama_barang', 'stok', 'created_at', 'updated_at'];
}
