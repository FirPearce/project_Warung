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
            ->where('stok >', 0)
            ->get()->getResultArray();
        return $data;
    }

    public function listbyid($id_pembeli)
    {
        $data = $this->db->table('tbl_barang')
            ->join('tbl_supplier', 'tbl_supplier.id_supplier = tbl_barang.id_supplier')
            ->join('tbl_carts', 'tbl_carts.id_barang = tbl_barang.id_barang')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_carts.id_pembeli')
            ->where([
                'tbl_barang.stok >' => 0,
                'tbl_carts.id_pembeli' => $id_pembeli
            ])
            ->get()->getResultArray();
        return $data;
    }
}
