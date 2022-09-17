<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PelangganModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->PelangganModel = new PelangganModel();
    }

    public function admin()
    {
        return view('admin/home');
    }
}
