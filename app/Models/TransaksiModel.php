<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_pembeli', 'tanggal_transaksi', 'keterangan', 'total', 'created_at', 'updated_at'];

    public function pendapatan()
    {
        $data = $this->selectSum('total')->get()->getRowArray();
        if ($data == null) {
            return 0;
        } else {
            return $data['total'];
        }
    }

    public function daftartransaksi()
    {
        $data = $this->select('tbl_transaksi.*, tbl_pembeli.nama_pembeli')
            ->join('tbl_pembeli', 'tbl_pembeli.id_pembeli = tbl_transaksi.id_pembeli')
            ->orderBy('tbl_transaksi.id_transaksi', 'DESC')
            ->findAll();
        return $data;
    }
}
