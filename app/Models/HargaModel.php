<?php

namespace App\Models;

use CodeIgniter\Model;

class HargaModel extends Model
{
    protected $table = 'tbl_harga';
    protected $primaryKey = 'id_harga';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_barang', 'tipe', 'harga', 'created_at', 'updated_at'];

    public function hargabarang($id_barang, $id_pembeli)
    {
        $tipepembeli = $this->db->table('tbl_pembeli')->where('id_pembeli', $id_pembeli)->get()->getRowArray()['tipe'];
        $data = $this->db->table('tbl_harga')
            ->where([
                'id_barang' => $id_barang,
                'tipe' => $tipepembeli
            ])->get()->getRowArray();
        return $data;
    }
}
