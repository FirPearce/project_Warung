<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'tbl_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_transaksi', 'metode', 'created_at', 'updated_at'];
}
