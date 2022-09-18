<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id_admin';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_user', 'nama_admin', 'foto', 'created_at', 'updated_at'];
}
