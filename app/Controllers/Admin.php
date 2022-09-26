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
        //time zone
        date_default_timezone_set('Asia/Jakarta');
    }

    public function admin()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {
                $produkterjual = $this->TransaksiBarangModel->terjual();
                $pendapatan = $this->TransaksiModel->pendapatan();
                $totalpelanggan = $this->PelangganModel->totalpelanggan();
                $totalsupplier = $this->SupplierModel->totalsupplier();
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Dashboard',
                    'produkterjual' => $produkterjual,
                    'pendapatan' => $pendapatan,
                    'totalpelanggan' => $totalpelanggan,
                    'totalsupplier' => $totalsupplier,
                    'itemcartjson' => $itemcartjson,
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
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Daftar Pendapatan',
                    'itemcartjson' => $itemcartjson,
                ];
                return view('admin/daftarPendapatan', $data);
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
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Hitung Belanja',
                    'namapembeli' => $namapembeli,
                    'listproduk' => $listproduk,
                    'itemcartjson' => $itemcartjson,
                    'itemcart' => $itemcart,
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
        $datas = $this->request->isAJAX();
        $id_barang = $this->request->getVar('id_barang');
        $id_pembeli = $this->request->getVar('id_pembeli');
        $hargabarangnya = $this->HargaModel->hargabarang($id_barang, $id_pembeli);
        $carts = $this->CartsModel->item($id_pembeli);
        $no = 1;
        if ($datas) {
            $data = [
                'id_barang' => $id_barang,
                'id_pembeli' => $id_pembeli,
                'qty' => 1,
                'harga' => (int)$hargabarangnya['harga'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            $berhasil = $this->CartsModel->insert($data);
            if ($berhasil) {
                for ($i = 0; $i < count($carts); $i++) {
                    echo '<input type="hidden" id="id_produk" name="id_barang' . $carts[$i]['id_barang'] . '" value="' . $carts[$i]['id_barang'] . '">';
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $carts[$i]['nama_barang'] . '</td>';
                    echo '<td>' . '<input type="number" size="6" name="quantity' . $carts[$i]['id_barang'] . '" min="1" max="' . $carts[$i]['stok'] . '" value="' . $carts[$i]['qty'] . '"onchange="ubahangka(' . $carts[$i]['id_barang'] . ')">' . '</td>';
                    echo '<td>Rp.' . $carts[$i]['harga'] . '</td>';
                    echo '<td>' . '<a class="btn btn-danger" href="#"> Hapus </a>' . '</td>';
                    echo '</tr>';
                }
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
    public function showcart()
    {
        $datas = $this->request->isAJAX();
        $id_pembeli = $this->request->getVar('id_pembeli');
        $data = $this->CartsModel->item($id_pembeli);
        $no = 1;
        if ($datas) {
            for ($i = 0; $i < count($data); $i++) {
                echo '<input type="hidden" id="id_produk" name="id_barang' . $data[$i]['id_barang'] . '" value="' . $data[$i]['id_barang'] . '">';
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $data[$i]['nama_barang'] . '</td>';
                echo '<td>' . '<input type="number" size="6" name="quantity' . $data[$i]['id_barang'] . '" min="1" max="' . $data[$i]['stok'] . '" value="' . $data[$i]['qty'] . '"onchange="ubahangka(' . $data[$i]['id_barang'] . ')">' . '</td>';
                echo '<td>Rp.' . $data[$i]['harga'] . '</td>';
                echo '<td>' . '<a class="btn btn-danger" href="#"> Hapus </a>' . '</td>';
                echo '</tr>';
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function ubahangka()
    {
        $datas = $this->request->isAJAX();
        $id_pembeli = $this->request->getVar('id_pembeli');
        $id_produk = $this->request->getVar('id_produk');
        $quantity = $this->request->getVar('quantity');
        $hargabarangnya = $this->HargaModel->hargabarang($id_produk, $id_pembeli);
        $que = $this->CartsModel->item($id_pembeli);
        $no = 1;
        if ($datas) {
            $data = [
                'qty' => $quantity,
                'harga' => (int)$hargabarangnya['harga'] * $quantity,
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            //update carts model where
            $berhasil = $this->CartsModel->where('id_barang', $id_produk)->where('id_pembeli', $id_pembeli)->set($data)->update();
            if ($berhasil) {
                for ($i = 0; $i < count($que); $i++) {
                    echo '<input type="hidden" id="id_produk" name="id_barang' . $que[$i]['id_barang'] . '" value="' . $que[$i]['id_barang'] . '">';
                    echo '<tr>';
                    echo '<td>' . $no++ . '</td>';
                    echo '<td>' . $que[$i]['nama_barang'] . '</td>';
                    echo '<td>' . '<input type="number" size="6" name="quantity' . $que[$i]['id_barang'] . '" min="1" max="' . $que[$i]['stok'] . '" value="' . $que[$i]['qty'] . '"onchange="ubahangka(' . $que[$i]['id_barang'] . ')">' . '</td>';
                    echo '<td>Rp.' . $que[$i]['harga'] . '</td>';
                    echo '<td>' . '<a class="btn btn-danger" href="#"> Hapus </a>' . '</td>';
                    echo '</tr>';
                }
            }
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }

    public function barangbypembeli()
    {
        $datas = $this->request->isAJAX();
        $id_pembeli = $this->request->getVar('id_pembeli');
        $data = $this->BarangModel->listbyid($id_pembeli);
        if ($datas) {
            echo json_encode($data);
        }
    }

    public function daftarproduk()
    {
        if ($this->session->get('id_user') != null) {
            if ($this->session->get('role') == 'Admin') {
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Daftar Produk',
                    'itemcart' => $itemcartjson,
                ];
                return view('admin/daftarProduk', $data);
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
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Informasi Pelanggan',
                    'itemcart' => $itemcartjson,
                ];
                return view('admin/informasiPelanggan', $data);
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
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Informasi Supplier',
                    'itemcart' => $itemcartjson,
                ];
                return view('admin/informasiSupplier', $data);
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
                $itemcart = $this->CartsModel->allitem();
                $itemcartjson = json_encode($itemcart);
                $data = [
                    'title' => 'Konten',
                    'itemcart' => $itemcartjson,
                ];
                return view('admin/konten', $data);
            } else {
                return redirect()->to(base_url('Login/login'));
            }
        } else {
            return redirect()->to(base_url('Login/login'));
        }
    }
}
