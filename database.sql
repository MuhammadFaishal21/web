-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2024 pada 12.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `jenis_berkas` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `id_permohonan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `jenis_berkas`, `foto`, `id_permohonan`) VALUES
(29, 'Kartu Keluarga / Surat Pindah', 'kk_pindah1-14 jan.png', 1),
(30, 'KTP', 'ktp1-doc20230521_16030124.pdf', 1),
(31, 'AKTA KELAHIRAN', 'akta_lahir1-doc20230521_16030124.pdf', 1),
(32, 'AKTA NIKAH', 'akta_nikah1-doc20230521_16030124.pdf', 1),
(33, 'AKTA CERAI / KEMATIAN', 'cerai_mati1-14 jan.png', 1),
(34, 'IJAZAH', 'ijazah1-doc20230521_16030124.pdf', 1),
(35, 'PENGANTAR RT/RW', 'rt_rw1-doc20230521_16030124.pdf', 1),
(36, 'Kartu Keluarga / Surat Pindah', 'kk_pindah2-ce9bf8b85f6272d891fef3b932312c44.jpg', 2),
(37, 'KTP', 'ktp2-Tugas UAS.pdf', 2),
(38, 'AKTA KELAHIRAN', 'akta_lahir2-Tugas UAS.pdf', 2),
(39, 'AKTA NIKAH', 'akta_nikah2-Tugas UAS.pdf', 2),
(40, 'AKTA CERAI / KEMATIAN', 'cerai_mati2-Tugas UAS.pdf', 2),
(41, 'IJAZAH', 'ijazah2-Tugas UAS.pdf', 2),
(42, 'PENGANTAR RT/RW', 'rt_rw2-Tugas UAS.pdf', 2),
(43, 'Kartu Keluarga', 'kk3-unnamed.jpg', 3),
(44, 'KTP', 'ktp3-cara-mudah-cek-ktp-asli-atau-palsu-718x375.jpeg', 3),
(45, 'SURAT KETERANGAN PINDAH', 'pindah3-pindah_antar_desakelurahan_10200.jpg', 3),
(46, 'Kartu Keluarga / Surat Pindah', 'kk_pindah4-cara-mudah-cek-ktp-asli-atau-palsu-718x375.jpeg', 4),
(47, 'KTP', 'ktp4-IMG_0010.pdf', 4),
(48, 'AKTA KELAHIRAN', 'akta_lahir4-IMG_0017.pdf', 4),
(49, 'AKTA NIKAH', 'akta_nikah4-IMG_0011.pdf', 4),
(50, 'IJAZAH', 'ijazah4-IMG_0017.pdf', 4),
(51, 'PENGANTAR RT/RW', 'rt_rw4-IMG_0011.pdf', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lurah`
--

CREATE TABLE `lurah` (
  `id_lurah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lurah`
--

INSERT INTO `lurah` (`id_lurah`, `nama`, `email`, `no_hp`, `password`) VALUES
(1, 'Kasim Kurniawan', 'lurah@lurah.com', '0851545151', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `email`, `no_hp`, `password`) VALUES
(2, 'isal', 'isal@operator.com', '5160709641', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `shdk` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `nama`, `kota_lahir`, `tanggal_lahir`, `agama`, `status_nikah`, `shdk`, `pekerjaan`, `id_user`) VALUES
(14, '3273031712930002', 'Russter Vera Jesmy', 'Bandung', '1993-12-17', 'ISLAM', 'LAJANG', 'ANAK', 'Wiraswasta', 18),
(15, '3216457894561236', 'Russter Vera Jesmy', 'Jakarta', '1990-02-23', 'ISLAM', 'MENIKAH', 'KEPALA KELUARGA', 'Programmer', 19),
(16, '1212133212', 'Muhammad Faishal', 'sikui ', '2003-08-21', 'ISLAM', 'LAJANG', 'ANAK', 'mahasiswa', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `permohonan`
--

INSERT INTO `permohonan` (`id_permohonan`, `tanggal`, `jenis`, `status`, `keterangan`, `id_penduduk`) VALUES
(1, '2024-04-04', 'KARTU KELUARGA', 'SELESAI', '', 0),
(2, '2024-09-15', 'KARTU KELUARGA', 'SELESAI', '', 0),
(3, '2024-09-15', 'SURAT DATANG', 'SELESAI', '', 0),
(4, '2024-09-15', 'KARTU KELUARGA', 'SELESAI', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `no_hp`, `password`) VALUES
(18, 'me@russter.id', '081213604869', 'e8c6698601da41da393f63ced13d4161'),
(19, 'russter.jesmy@gmail.com', '087878877109', 'e8c6698601da41da393f63ced13d4161'),
(20, 'faishal@gmail.com', '882252173503', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_permohonan` (`id_permohonan`);

--
-- Indeks untuk tabel `lurah`
--
ALTER TABLE `lurah`
  ADD PRIMARY KEY (`id_lurah`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `lurah`
--
ALTER TABLE `lurah`
  MODIFY `id_lurah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
