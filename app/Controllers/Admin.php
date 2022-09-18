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
        $this->session = \Config\Services::session();
    }

    public function admin()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {
                return view('admin/home');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        }
    }
}
