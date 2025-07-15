-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 11:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'venesse', '21330007', 'Venesse Kaylasha');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabel berita';

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`) VALUES
(1, 'Cara mengobati asam urat secara alami', '-Minum banyak air. \r\nOrang yang terkena serangan asam urat berisiko mengalami pembengkakan dan peradangan di area sendi yang sakit. Salah satu cara untuk mengobati kondisi ini yaitu dengan minum banyak air.\r\n\r\n-Kompres es batu \r\nKita juga bisa mengompres '),
(3, 'Cara Olahraga dan Aktivitas Fisik Bantu Kinerja Otak\r\n\r\n', 'orang yang sehat dengan aktif beraktivitas fisik dan berolahraga di masa kecil akan memiliki tingkat kognitif paling tinggi secara global di masa dewasa. Oleh karena itu, kebiasaan aktif bergerak dan olahraga ini sebaiknya ditanamkan pada anak sejak kecil'),
(4, '5 Kelebihan Operasi ERACS untuk Melahirkan, Beneran Gak Sakit dan Cepat Pulih?', '1. Mempersingkat Waktu Puasa\r\n2. Dapat Bergerak Bebas Lebih Cepat\r\n3. Mengurangi Risiko Pasca Operasi');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`Nama`, `Email`, `Subjek`, `Pesan`) VALUES
('Sasha', 'kayla@gmail.com', 'Web', 'Lebih ditambahak untuk fitur-fitur nya');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `tarif` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Yogyakarta', 10000),
(2, 'Jakarta', 15000),
(3, 'Solo', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'kayla@gmail.com', '250903', 'Sasha', '081904034038', ''),
(3, 'ory@gmail.com', '123', 'Niory', '087736282999', 'jl salak');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(10, 14, 'Venesse', 'BRI', 22000, '2023-01-19', '20230119085030download.jpg'),
(11, 15, 'sasha', 'BRI', 26000, '2023-01-19', '20230119091156demo-image-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(13, 1, 1, '2023-01-18', 16000, 'Yogyakarta', 10000, 'JL.Rotowijayan no 24 Kraton, Yogyakarta', 'pending', ''),
(14, 1, 1, '2023-01-18', 22000, 'Yogyakarta', 10000, 'JL.Rotowijayan no 24 Kraton, Yogyakarta', 'barang dikirim', '12346'),
(15, 1, 1, '2023-01-19', 26000, 'Yogyakarta', 10000, 'JL.Rotowijayan no 24 Kraton, Yogyakarta', 'barang dikirim', '123'),
(16, 3, 1, '2023-01-19', 27000, 'Yogyakarta', 10000, 'jl kenanga', 'pending', ''),
(17, 3, 1, '2023-01-19', 16000, 'Yogyakarta', 10000, 'jl kenanga', 'pending', ''),
(18, 3, 1, '2023-01-19', 16000, 'Yogyakarta', 10000, 'jl kenanga', 'pending', ''),
(19, 1, 1, '2023-01-23', 16000, 'Yogyakarta', 10000, 'JL. ROTOWIJAYAN NO 24 KRATON, YOGYAKARTA', 'pending', ''),
(20, 1, 1, '2023-01-23', 22000, 'Yogyakarta', 10000, 'JL. ROTOWIJAYAN NO 24 KRATON, YOGYAKARTA', 'pending', ''),
(21, 1, 2, '2023-01-24', 27000, 'Jakarta', 15000, 'JL.Rotowijayan no 24 Kraton, Yogyakarta', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `berat` int(11) NOT NULL,
  `subharga` int(15) NOT NULL,
  `subberat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subharga`, `subberat`) VALUES
(19, 13, 8, 1, 'Demacolin', 6000, 10, 6000, 10),
(20, 14, 8, 2, 'Demacolin', 6000, 10, 12000, 20),
(21, 15, 8, 1, 'Demacolin', 6000, 10, 6000, 10),
(22, 15, 9, 2, 'Paracetamol', 5000, 10, 10000, 20),
(23, 16, 8, 2, 'Demacolin', 6000, 10, 12000, 20),
(24, 16, 9, 1, 'Paracetamol', 5000, 10, 5000, 10),
(25, 17, 8, 1, 'Demacolin', 6000, 10, 6000, 10),
(26, 18, 8, 1, 'Demacolin', 6000, 10, 6000, 10),
(27, 19, 8, 1, 'Demacolin', 6000, 10, 6000, 10),
(28, 20, 8, 2, 'Demacolin', 6000, 10, 12000, 20),
(29, 21, 8, 2, 'Demacolin', 6000, 10, 12000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi_produk`) VALUES
(8, 'Demacolin', 6000, 10, '459d85a2f7cd230c3c00f56269833e44.jpg', '                        Obat untuk flu dan demam        '),
(9, 'Paracetamol', 5000, 10, 'ed8e7947-ae0e-4f6b-92c1-0bf9af87b3fb.jpg', 'Obat penurun panas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
