<?php

namespace App\Models;

use CodeIgniter\Model;

class CartsModel extends Model
{
    protected $table = 'tbl_carts';
    protected $primaryKey = 'id_carts';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_pembeli', 'id_barang', 'qty', 'created_at', 'updated_at'];

    public function item($id_pembeli)
    {
        $data = $this->select('tbl_carts.*, tbl_barang.nama_barang')
            ->join('tbl_barang', 'tbl_barang.id_barang = tbl_carts.id_barang')
            ->where('id_pembeli', $id_pembeli)
            ->get()->getResultArray();
        return $data;
    }
}
