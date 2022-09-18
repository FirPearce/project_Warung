<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_pembeli', 'tanggal_transaksi', 'keterangan', 'total', 'created_at', 'updated_at'];
}
