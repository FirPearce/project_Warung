<?php

namespace App\Models;

use CodeIgniter\Model;

class HargaModel extends Model
{
    protected $table = 'tbl_harga';
    protected $primaryKey = 'id_harga';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_barang', 'tipe', 'harga', 'created_at', 'updated_at'];
}
