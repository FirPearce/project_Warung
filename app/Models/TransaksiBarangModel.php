<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiBarangModel extends Model
{
    protected $table = 'tbl_transaksi_barang';
    protected $primaryKey = 'id_transaksi_barang';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_transaksi', 'id_barang', 'qty', 'created_at', 'updated_at'];

    public function terjual()
    {
        $data = $this->selectSum('qty')->get()->getRowArray();
        if ($data == null) {
            return 0;
        } else {
            return $data['qty'];
        }
    }
}
