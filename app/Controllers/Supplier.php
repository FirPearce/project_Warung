<?php

namespace App\Controllers;

use App\Models\UserModel;

class Supplier extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('supplier/index');
    }
}
