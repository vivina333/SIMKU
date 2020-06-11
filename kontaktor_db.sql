-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 14.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontaktor_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan`
--

CREATE TABLE `tb_bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `id_projek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jmlbiaya`
--

CREATE TABLE `tb_jmlbiaya` (
  `id_jmlbiaya` int(11) NOT NULL,
  `id_projek` int(11) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `volume` int(11) NOT NULL,
  `luas` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jmlbiaya`
--

INSERT INTO `tb_jmlbiaya` (`id_jmlbiaya`, `id_projek`, `uraian`, `volume`, `luas`, `harga_satuan`, `harga_total`) VALUES
(22, 2, 'abcd', 2, 10, 1000, 10000),
(25, 1, 'bgd', 3, 10, 200, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `PASSWORD`, `level`) VALUES
(1, 'soviah', '12345', 'admin'),
(2, 'marshel', '2302', 'user'),
(3, 'renita', '1212', 'user'),
(4, 'aldy', '1402', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proses`
--

CREATE TABLE `tb_proses` (
  `id_proses` int(11) NOT NULL,
  `nama_mandor` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `ket` text NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `id_mandor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_proyek`
--

CREATE TABLE `tb_proyek` (
  `id_projek` int(11) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `nama_mandor` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `luas` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_proyek`
--

INSERT INTO `tb_proyek` (`id_projek`, `nama_proyek`, `nama_mandor`, `lokasi`, `luas`, `tanggal`, `id_login`) VALUES
(1, 'Gedung serbaguna', 'marshel', 'Jl. Jember Utara No.21 Kabupaten Jember', 500, '2020-01-15', 1),
(2, 'gedung karoke', 'rafif', 'jl.jember gajah mada', 1000, '2020-01-15', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `id_proyek` (`id_projek`);

--
-- Indeks untuk tabel `tb_jmlbiaya`
--
ALTER TABLE `tb_jmlbiaya`
  ADD PRIMARY KEY (`id_jmlbiaya`),
  ADD KEY `id_projek` (`id_projek`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD PRIMARY KEY (`id_proses`),
  ADD KEY `id_mandor` (`id_mandor`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indeks untuk tabel `tb_proyek`
--
ALTER TABLE `tb_proyek`
  ADD PRIMARY KEY (`id_projek`),
  ADD KEY `id_login` (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_jmlbiaya`
--
ALTER TABLE `tb_jmlbiaya`
  MODIFY `id_jmlbiaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  MODIFY `id_proses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_proyek`
--
ALTER TABLE `tb_proyek`
  MODIFY `id_projek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_bahan`
--
ALTER TABLE `tb_bahan`
  ADD CONSTRAINT `tb_bahan_ibfk_1` FOREIGN KEY (`id_projek`) REFERENCES `tb_proyek` (`id_projek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jmlbiaya`
--
ALTER TABLE `tb_jmlbiaya`
  ADD CONSTRAINT `tb_jmlbiaya_ibfk_1` FOREIGN KEY (`id_projek`) REFERENCES `tb_proyek` (`id_projek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD CONSTRAINT `tb_proses_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `tb_proyek` (`id_projek`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_proyek`
--
ALTER TABLE `tb_proyek`
  ADD CONSTRAINT `tb_proyek_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `tb_login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
