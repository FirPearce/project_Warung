-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2022 pada 05.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `id_user`, `nama_admin`, `foto`, `created_at`, `updated_at`) VALUES
(1, 3, 'FirlyTaufikrr', '', '2022-09-18 08:26:28', '2022-09-18 08:26:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `kode_barang` text NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `id_supplier`, `kode_barang`, `nama_barang`, `stok`, `created_at`, `updated_at`) VALUES
(1, 1, '8993175538633', 'Nabati Rolis', 100, '2022-09-18 14:51:40', '2022-09-18 14:51:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_harga`
--

CREATE TABLE `tbl_harga` (
  `id_harga` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tipe` enum('Eceran','Warungan') NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_harga`
--

INSERT INTO `tbl_harga` (`id_harga`, `id_barang`, `tipe`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eceran', 2000, '2022-09-18 14:55:02', '2022-09-18 14:55:02'),
(2, 1, 'Warungan', 1800, '2022-09-18 14:55:25', '2022-09-18 14:55:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `metode` enum('tunai','transfer') NOT NULL DEFAULT 'tunai',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id_pembeli`, `id_user`, `nama_pembeli`, `no_telp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Firly Taufikurohman', NULL, 'firlycholeh@gmail.com', NULL, '2022-09-17 00:32:47', '2022-09-17 00:32:47'),
(2, 2, 'sheny', NULL, 'firlycholeh22@gmail.com', NULL, '2022-09-17 00:37:55', '2022-09-17 00:37:55'),
(3, 4, 'iniibubudi', NULL, 'inibudi@gmail.com', NULL, '2022-09-17 21:48:37', '2022-09-17 21:48:37'),
(4, 5, 'cobakaliye', NULL, 'cobakaliye@gmail.com', NULL, '2022-09-17 22:01:44', '2022-09-17 22:01:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `id_user`, `nama_supplier`, `no_telp`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 6, 'Supplier Nabati', NULL, 'suppliernabati@gmail.com', NULL, '2022-09-18 14:50:55', '2022-09-18 14:50:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) DEFAULT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL,
  `keterangan` enum('lunas','belum lunas') DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_barang`
--

CREATE TABLE `tbl_transaksi_barang` (
  `id_transaksi_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi_barang`
--

INSERT INTO `tbl_transaksi_barang` (`id_transaksi_barang`, `id_transaksi`, `id_barang`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20, '2022-09-18 15:04:18', '2022-09-18 15:04:18'),
(2, 1, 1, 30, '2022-09-18 15:04:52', '2022-09-18 15:04:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `role` enum('Pelanggan','Supplier','Admin') NOT NULL DEFAULT 'Pelanggan',
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Pelanggan', 'firpearce', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-17 00:32:46', '2022-09-17 00:32:46'),
(2, 'Pelanggan', 'komandanhanzip', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-17 00:37:55', '2022-09-17 00:37:55'),
(3, 'Admin', 'admin', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-18 08:25:53', '2022-09-18 08:25:53'),
(4, 'Pelanggan', 'coba', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-17 21:48:37', '2022-09-17 21:48:37'),
(5, 'Pelanggan', 'cobakaliye', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-17 22:01:44', '2022-09-17 22:01:44'),
(6, 'Supplier', 'supplier1', '$2y$10$TP6qTtVA./D9B5y9BOOxYOuxcUetWxzK6ILro1JMybYYeqSDyG9TS', '2022-09-18 14:50:19', '2022-09-18 14:50:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_harga`
--
ALTER TABLE `tbl_harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_transaksi_barang`
--
ALTER TABLE `tbl_transaksi_barang`
  ADD PRIMARY KEY (`id_transaksi_barang`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_harga`
--
ALTER TABLE `tbl_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_barang`
--
ALTER TABLE `tbl_transaksi_barang`
  MODIFY `id_transaksi_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
