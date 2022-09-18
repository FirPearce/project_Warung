<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PelangganModel;
use App\Models\AdminModel;
use App\Models\SupplierModel;
use App\Models\BarangModel;
use App\Models\HargaModel;
use App\Models\TransaksiBarangModel;
use App\Models\TransaksiModel;
use App\Models\PembayaranModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->PelangganModel = new PelangganModel();
        $this->AdminModel = new AdminModel();
        $this->SupplierModel = new SupplierModel();
        $this->BarangModel = new BarangModel();
        $this->HargaModel = new HargaModel();
        $this->TransaksiBarangModel = new TransaksiBarangModel();
        $this->TransaksiModel = new TransaksiModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->session = \Config\Services::session();
    }

    public function admin()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {
                $produkterjual = $this->TransaksiBarangModel->terjual();
                $pendapatan = $this->TransaksiModel->pendapatan();
                $totalpelanggan = $this->PelangganModel->totalpelanggan();
                $totalsupplier = $this->SupplierModel->totalsupplier();
                $data = [
                    'title' => 'Dashboard',
                    'produkterjual' => $produkterjual,
                    'pendapatan' => $pendapatan,
                    'totalpelanggan' => $totalpelanggan,
                    'totalsupplier' => $totalsupplier,
                ];
                return view('admin/home', $data);
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        }
    }
    public function daftarPendapatan()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {

                return view('admin/daftarPendapatan');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        }
    }
}
