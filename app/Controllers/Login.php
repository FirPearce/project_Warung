<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PelangganModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->PelangganModel = new PelangganModel();
    }
    public function login()
    {
        return view('loginpage/login');
    }

    public function register()
    {
        return view('loginpage/register');
    }

    public function proseslogin()
    {
        $data = $this->request->getPost();
        dd($data);
    }

    public function prosesdaftar()
    {
        $data = $this->request->getPost();
        if ($data) {
            $input = [
                'role' => 'Pelanggan',
                'username' => $data['username'],
                'password' => password_hash($data['pass'], PASSWORD_BCRYPT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $kirim = $this->UserModel->insert($input);
            if ($kirim) {
                $id_user = $this->UserModel->insertID();
                $input = [
                    'id_user' => $id_user,
                    'nama_pembeli' => $data['fullname'],
                    'email' => $data['email'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $send = $this->PelangganModel->insert($input);
                if ($send) {
                    session()->setFlashdata('pesan', 'Berhasil Mendaftar');
                    return redirect()->to(base_url('Login/login'));
                } else {
                    session()->setFlashdata('pesan', 'Gagal Mendaftar Periksa Kembali data yang dimasukkan');
                    return redirect()->to(base_url('Login/register'));
                }
            } else {
                session()->setFlashdata('pesan', 'Gagal Mendaftar Periksa Kembali data yang dimasukkan');
                return redirect()->to(base_url('Login/register'));
            }
        }
    }
}
