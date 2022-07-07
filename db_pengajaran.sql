-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 13.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengajaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajaran`
--

CREATE TABLE `tbl_pengajaran` (
  `no_pengajaran` int(11) NOT NULL,
  `kode_mk` varchar(30) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `semester` int(3) NOT NULL,
  `bobot_sks` int(2) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `soal_ujian` mediumtext NOT NULL,
  `upload_rps` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengajaran`
--

INSERT INTO `tbl_pengajaran` (`no_pengajaran`, `kode_mk`, `mata_kuliah`, `semester`, `bobot_sks`, `nama_dosen`, `soal_ujian`, `upload_rps`) VALUES
(1, 'DT032', 'METODOLOGI PENELITIAN', 3, 2, 'Ria Andriani, M.Kom', '655-Article_Text-1297-1-10-20201005.pdf', '3370-9842-1-PB_(1).pdf'),
(3, 'DT090', 'BAHASA INDONESIA', 3, 2, 'Ikmah, M.Kom', 'Tugas_Jurnal_Cavita_Santi_20_01_4548.pdf', 'Kelompok_10_-_Tugas_1.pdf'),
(4, 'DT094', 'PENGOLAHAN BASISDATA', 3, 4, 'Erni Seniwati, S.Kom, M.Cs', 'Tugas1_20_01_4548.pdf', 'Tugas3_20_01_4548.pdf'),
(5, 'DT098', 'SUCCESS SKILL', 3, 2, 'Moch Farid Fauzi, M.Kom', 'komunikasi.docx', 'Tugas_8.pdf'),
(6, 'DT170', 'PERANCANGAN WEB 2', 3, 4, 'Firman Asharudin, S.Kom, M.Kom', 'CavitaSanti20_01_4548_Praktikum5.pdf', 'CavitaSanti20_01_4548_Praktikum3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pengajaran`
--
ALTER TABLE `tbl_pengajaran`
  ADD PRIMARY KEY (`no_pengajaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pengajaran`
--
ALTER TABLE `tbl_pengajaran`
  MODIFY `no_pengajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
