<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'tbl_pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_user', 'nama_pembeli', 'no_telp', 'email', 'alamat', 'created_at', 'updated_at'];

    public function totalpelanggan()
    {
        $data = $this->selectCount('id_pembeli')->get()->getRowArray();
        return $data['id_pembeli'];
    }

    public function nama_pembeli()
    {
        $data = $this->select('tbl_pembeli.*')->findAll();
        return $data;
    }
}
