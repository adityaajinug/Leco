-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2020 pada 13.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leco`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_praktikum`
--

CREATE TABLE `alat_praktikum` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tgl_pinjam` varchar(255) NOT NULL,
  `tgl_kembali` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_praktikum`
--

INSERT INTO `alat_praktikum` (`id`, `id_mahasiswa`, `nama`, `nim`, `nama_barang`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(2, 2, 'Nico Fernades', 'A22.2019.02756', 'RM-08856 | Tensi Meter ( Tersedia )', '06/20/2020', '06/20/2020', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id` int(11) NOT NULL,
  `id_pesan` int(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bimbingan`
--

INSERT INTO `bimbingan` (`id`, `id_pesan`, `nama_dosen`, `home`, `status`) VALUES
(1, 1012, 'Bpk Muslih, M.Psi', ' F.Kesehatan', 1),
(2, 1121, 'Ibu Risa M, M.Psi', 'F.Bahasa', 1),
(3, 1432, 'Ibu Kania S, M.Psi', 'Fakultas Ekonomi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL,
  `date_created` int(255) NOT NULL,
  `baca` int(2) NOT NULL,
  `id_pesan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `id_mahasiswa`, `nama`, `pesan`, `date_created`, `baca`, `id_pesan`) VALUES
(1, 2, 'Nico F', 'Hallo Gaes !!!', 1594296680, 0, 1),
(2, 3, 'Bagus', 'Gimana?', 1594296680, 0, 1),
(3, 2, 'Nico Fernades', 'Gak papa', 1596023155, 0, 1),
(4, 2, 'Nico Fernades', '', 1596044386, 0, 0),
(5, 2, 'Nico Fernades', 'Hallo', 1596044415, 0, 1),
(8, 2, 'Nico Fernades', 'Hoii', 1596203743, 0, 2),
(9, 3, 'Bagus Cahya', 'Gimana?', 1596204046, 0, 2),
(10, 2, 'Nico Fernades', 'Ndak papa', 1596204180, 0, 2),
(11, 3, 'Bagus Cahya', 'Gimana tooo', 1596204195, 0, 2),
(12, 2, 'Nico Fernades', 'canda mas', 1596204201, 0, 2),
(13, 2, 'Nico Fernades', 'Malam bu', 1596207482, 0, 0),
(14, 2, 'Nico Fernades', 'Hallo', 1596207719, 0, 1012),
(15, 4, 'Kania, M.Spi', 'Anak-anak', 1596268640, 0, 1),
(16, 4, 'Kania, M.Spi', 'Haiii Kakak', 1596275663, 0, 1012),
(17, 4, 'Kania, M.Spi', 'Ada yang bisa dibantu?', 1596275689, 0, 1012),
(18, 1, 'Admin Leco', 'Saya admin', 1596276853, 0, 1012),
(19, 3, 'Bagus Cahya', 'Saya Bagus', 1596282863, 0, 1012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id_pesan` int(255) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pembuat` varchar(255) NOT NULL,
  `date_created` int(255) NOT NULL,
  `date_end` int(255) NOT NULL,
  `id_sesi` int(2) NOT NULL,
  `keterangan` enum('Diluar Mata Kuliah','Sesuai Mata Kuliah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_pesan`, `id_jurusan`, `nama`, `pembuat`, `date_created`, `date_end`, `id_sesi`, `keterangan`) VALUES
(1, 1, 'Diskusi Tiktok Dalam Dunia IT', 'Edi Sugiarto, M.Kom', 1594296680, 1994296680, 1, 'Sesuai Mata Kuliah'),
(2, 1, 'Membahas Data Spasial', 'Nico Fernades', 1594296680, 1694296680, 2, 'Diluar Mata Kuliah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id`, `kode`, `nama`, `alamat`, `jadwal`, `keterangan`, `status`, `url`) VALUES
(1, 'MA028432', 'PT Gojek Indonesia', 'Jakarta', 'Senin - Jumat | 08.00 - 17.00 WIB', ' Lead, Product Management - GoPay, Online', 1, 'https://career.gojek.com/job/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `magang`
--

CREATE TABLE `magang` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `dosbim` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `magang`
--

INSERT INTO `magang` (`id`, `kode`, `nama`, `alamat`, `jadwal`, `dosbim`, `keterangan`, `url`) VALUES
(1, 'MA399920', 'PT MabaKampus', 'Jl Banyumanik semarang', 'Senin - Jumat | 08.00 - 17.00 WIB', 'Bpk Novi, M.Kom', ' Lead, Product Management - Development', 'https://karir.bca.co.id/peluang-karir/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `id_materi` int(255) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `podcast`
--

CREATE TABLE `podcast` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `jenis` enum('MATERI','UMUM') NOT NULL,
  `nama_pembuat` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date_created` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `podcast`
--

INSERT INTO `podcast` (`id`, `id_jurusan`, `jenis`, `nama_pembuat`, `tema`, `file`, `date_created`) VALUES
(3, 1, 'MATERI', 'Kania, M.Spi', 'Memahami Kuantitas', 'y2mate_com_-_Panduan_Ujian_Kebugaran_ZLo144kr-2w.mp3', 1596275168),
(4, 1, 'UMUM', 'Kania, M.Spi', 'Bincang Main Tiktok', 'web21.mp3', 1596275367);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_mahasiswa` int(11) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `verify` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_mahasiswa`, `id_jurusan`, `nama`, `email`, `password`, `id_kelas`, `role_id`, `verify`) VALUES
(1, 0, 'Admin Leco', 'admin@leco.com', '$2y$10$lbs8z6RNothmogBFSCcCp.yIin/OjBH2HFzWZFDDf3WPwhHIPK44m', 0, 1, 1),
(2, 1, 'Nico Fernades', 'nico@leco.com', '$2y$10$q946Rmj8oXsSRN3EEgIdpu/ZMQN0P0CyHz8i.vFYRtBNAlM89t1aG', 1, 2, 1),
(3, 1, 'Bagus Cahya', 'bagus@leco.com', '$2y$10$HkQZrMtylHNzh8MB8XvGieL7Y5.s8YOP/T84nbA5GkxBp93hlVbmu', 1, 2, 1),
(4, 1, 'Kania, M.Spi', 'kania@leco.com', '$2y$10$gPimCK92Rv.9rbtmwCZj9.MlFZ00vww0Sf9xXZSHsjFsSzbVHSkw2', 1, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_praktikum`
--
ALTER TABLE `alat_praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_praktikum`
--
ALTER TABLE `alat_praktikum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id_pesan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `magang`
--
ALTER TABLE `magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
