<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'tbl_supplier';
    protected $primaryKey = 'id_supplier';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_user', 'nama_supplier', 'no_telp', 'email', 'alamat', 'created_at', 'updated_at'];

    public function totalSupplier()
    {
        $data = $this->selectCount('id_supplier')->get()->getRowArray();
        return $data['id_supplier'];
    }
}
