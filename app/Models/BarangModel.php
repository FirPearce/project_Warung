<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'tbl_barang';
    protected $primaryKey = 'id_barang';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_supplier', 'kode_barang', 'nama_barang', 'stok', 'created_at', 'updated_at'];

    function listproduk()
    {
        $data = $this->db->table('tbl_barang')
            ->join('tbl_supplier', 'tbl_supplier.id_supplier = tbl_barang.id_supplier')
            ->join('tbl_harga', 'tbl_harga.id_barang = tbl_barang.id_barang')
            ->get()->getResultArray();
        return $data;
    }
}
