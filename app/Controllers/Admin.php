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
use App\Models\CartsModel;

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
        $this->CartsModel = new CartsModel();
        $this->session = \Config\Services::session();
        $this->request = \Config\Services::request();
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
        } else {
            return redirect()->to(base_url('Login/login'));
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
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }

    public function hitungbelanja()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {
                $namapembeli = $this->PelangganModel->nama_pembeli();
                $listproduk = $this->BarangModel->listproduk();
                $data = [
                    'title' => 'Hitung Belanja',
                    'namapembeli' => $namapembeli,
                    'listproduk' => $listproduk,
                ];
                return view('admin/hitungBelanja', $data);
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }

    public function addcart()
    {
        $data = $this->request->isAJAX();
        if ($data) {
            $id_barang = $this->request->getVar('id_barang');
            $id_pembeli = $this->request->getVar('id_pembeli');
            $data = [
                'id_barang' => $id_barang,
                'id_pembeli' => $id_pembeli,
                'qty' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $berhasil = $this->CartsModel->insert($data);
            $msg = [
                'sukses' => 'Data Berhasil Ditambahkan',
            ];
            if ($berhasil) {
                echo json_encode($msg);
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function showcart()
    {
        $data = $this->request->isAJAX();
        if ($data) {
            $id_pembeli = $this->request->getVar('id_pembeli');
            $data = $this->CartsModel->item($id_pembeli);
            $no = 1;
            foreach ($data as $d) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $d['nama_barang'] . '</td>';
                echo '<td>' . '<input type="number" id="quantity" name="quantity" min="1" max="1000" value="' . $d['qty'] . '">' . '</td>';
                echo '<td>Rp.' . $d['harga'] * $d['qty'] . '</td>';
                echo '<td>' . '<a class="btn btn-danger" href="#"> Hapus </a>' . '</td>';
                echo '</tr>';
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function daftarproduk()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {

                return view('admin/daftarProduk');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }

    public function informasipelanggan()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {

                return view('admin/informasiPelanggan');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }

    public function informasisupplier()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {

                return view('admin/informasiSupplier');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }

    public function konten()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {

                return view('admin/konten');
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }
}
