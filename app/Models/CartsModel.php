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
        $data = $this->select('tbl_carts.*, tbl_barang.nama_barang, tbl_harga.harga')
            ->join('tbl_barang', 'tbl_barang.id_barang = tbl_carts.id_barang')
            ->join('tbl_harga', 'tbl_harga.id_barang = tbl_carts.id_barang')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_carts.id_pembeli')
            //where table pembeli.tipe == table harga.tipe
            ->where([
                'tbl_carts.id_pembeli' => $id_pembeli,
                'tbl_harga.tipe' => $this->db->table('tbl_pembeli')->where('id_pembeli', $id_pembeli)->get()->getRowArray()['tipe']
            ])
            ->get()->getResultArray();
        return $data;
    }
}
