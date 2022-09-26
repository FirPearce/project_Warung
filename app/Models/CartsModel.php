<?php

namespace App\Models;

use CodeIgniter\Model;

class CartsModel extends Model
{
    protected $table = 'tbl_carts';
    protected $primaryKey = 'id_carts';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_pembeli', 'id_barang', 'qty', 'harga', 'created_at', 'updated_at'];

    public function item($id_pembeli)
    {
        $data = $this->select('tbl_carts.*, tbl_barang.nama_barang, tbl_barang.stok')
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

    public function allitem()
    {
        $data = $this->select('tbl_carts.id_barang')
            ->get()->getResultArray();
        return $data;
    }

    public function total($id_pembeli)
    {
        $result = [
            'totalbarang' => 0,
            'totalharga' => 0,
            'jumlahbarang' => 0
        ];
        $result['totalharga'] = $this->selectSum('tbl_carts.harga')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_carts.id_pembeli')
            ->where([
                'tbl_carts.id_pembeli' => $id_pembeli,
            ])->get()->getRowArray();
        $result['totalbarang'] = $this->selectSum('tbl_carts.qty')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_carts.id_pembeli')
            ->where([
                'tbl_carts.id_pembeli' => $id_pembeli,
            ])->get()->getRowArray();
        $result['jumlahbarang'] = $this->selectCount('tbl_carts.id_barang')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_carts.id_pembeli')
            ->where([
                'tbl_carts.id_pembeli' => $id_pembeli,
            ])->get()->getRowArray();
        return $result;
    }
}
