<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('landingpage/landing');
    }

    public function product()
    {
        return view('landingpage/product');
    }

    public function admin()
    {
        return view('admin/home');
    }
}
