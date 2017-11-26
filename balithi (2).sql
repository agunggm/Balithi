-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 29. Juli 2017 jam 06:27
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `balithi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksi`
--

CREATE TABLE IF NOT EXISTS `koleksi` (
  `id_koleksi` varchar(60) NOT NULL,
  `genus` varchar(100) NOT NULL,
  `spesies` varchar(100) NOT NULL,
  `kolektor` varchar(100) NOT NULL,
  `status_materi` int(11) NOT NULL,
  `gambar` varchar(54) NOT NULL,
  PRIMARY KEY (`id_koleksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koleksi`
--

INSERT INTO `koleksi` (`id_koleksi`, `genus`, `spesies`, `kolektor`, `status_materi`, `gambar`) VALUES
('KSI000010', 'Alpinia Purpurata', 'Amorina', 'Debora Herlina, Nurmalinda, E. Dwi Sulistya Nugroho, S', 0, 'file_1500995404.jpg'),
('KSI000013', 'Sedap Malam', 'Dian Arum', '-', 1, 'file_1501148203.jpg'),
('KSI000014', 'Anggrek Phalaenopsis', 'Ayu Larasati', 'Dedeh Siti Badriah, Risna Sri Rahayu dan Erlina Setiawati', 0, 'file_1501152425.jpg'),
('KSI000015', 'Anggrek Spathoglottis', 'Ani Bambang Yudhoyono', 'Suskandari Kartiningrum, Yoyo Sulyo, Laily Qodriah Suparmin dkk', 1, 'file_1501152529.jpg'),
('KSI000016', 'Anggrek Spathoglottis', 'Puspa Enay', 'Suskandari Kartiningrum, Nur Qomariah H, Sri Rianawati, Istianah P. Siregar, Suparmin.', 0, 'file_1501152572.jpg'),
('KSI000017', 'Anggrek Spathoglottis', 'Sutera Ungu', 'Suskandari Kartiningrum, Nur Qomariah H, Sri Rianawati, Istianah P. Siregar, Suparmin.', 1, 'file_1501152615.jpg'),
('KSI000018', 'Anggrek Spathoglottis', 'Anitah', 'Suskandari Kartiningrum, Sri Rianawati, Suryanah, Istianah P. Siregar, Suparmin', 0, 'file_1501152772.jpg'),
('KSI000019', 'Krisan', 'Azzura', 'Kurnia Yuniarto ,Rika Meilasari, Riswan Aang Solihin.', 1, 'file_1501152908.jpg'),
('KSI000020', 'Gladiol', 'Nurlaila', '-', 0, 'file_1501148632.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(70) NOT NULL,
  `alamat` varchar(53) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama_instansi`, `alamat`, `no_telp`, `email`, `username`, `password`, `status`, `level`) VALUES
(2, 'Arlan Hernawan', 'Cipanas', '08234158689', 'arlanhernawan@gmail.com', 'admin', 'admin', 1, 1),
(4, 'AGM', 'Mayak', '1234', 'agm@gmail.com', 'agm', 'agm', 1, 0),
(5, 'Tia Sarah', 'Cipanas', '0838-1806-7138', 'tiasarah2936@gmail.com', 'tia', 'tias', 1, 0),
(6, 'Admin2', 'Ciherang', '08237657568', 'admin@gmail.com', 'adm', 'adm', 1, 1),
(7, 'Balai Konservasi Tumbuhan Kebun Raya Cibodas - LIPI', 'Sindanglaya, Cipanas, Kabupaten Cianjur Jawa Barat 43', '0263-520-448', 'jasin.kcrcibodas@mail.lipi.go.', 'lipi', 'lipi', 0, 0),
(8, 'Taman Bunga Nusantara', 'Jalan Mariwati KM, 7, Kawungluwuk, Sukaresmi, Kabupat', '0263-581617', 'tamanbunganusantara@yahoo.co.i', 'tbn', 'tbn', 0, 0),
(9, 'unsur', 'cianjur', '896060', 'unur@gmai.com', 'unsur', 'unsur', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyerahan_materi`
--

CREATE TABLE IF NOT EXISTS `penyerahan_materi` (
  `id_penyerahan` varchar(60) NOT NULL,
  `tgl_serah` date NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `genus` varchar(100) NOT NULL,
  `spesies` varchar(100) NOT NULL,
  `kolektor` varchar(54) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan_serah` text NOT NULL,
  `status_serah` int(50) NOT NULL,
  PRIMARY KEY (`id_penyerahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyerahan_materi`
--

INSERT INTO `penyerahan_materi` (`id_penyerahan`, `tgl_serah`, `id_user`, `genus`, `spesies`, `kolektor`, `gambar`, `keterangan_serah`, `status_serah`) VALUES
('000001', '2017-07-25', '5', 'Krisan', 'Azzura', '-', 'file_1500983107.jpg', 'dari taman bunga nusantara untuk dibudidayakan', 1),
('000002', '2017-07-25', '5', 'Anthurium', 'Jamrud', 'Dedeh Kurniasih, Yoyo Sulyo, Kurniawan Budiarto, Laily', 'file_1500995309.jpg', '', 1),
('000003', '2017-07-25', '5', 'Alpinia Purpurata', 'Amorina', 'Debora Herlina, Nurmalinda, E. Dwi Sulistya Nugroho, S', 'file_1500995404.jpg', '', 1),
('000004', '2017-07-26', '5', 'Lili', 'Arum Sari', '-', 'file_1501054250.jpg', 'Dari Taman Bunga Nusantara untuk menambah koleksi', 0),
('000005', '2017-07-27', '5', 'Sedap Malam', 'Dian Arum', '-', 'file_1501148203.jpg', 'Untuk kepeluan koleksi', 1),
('000006', '2017-07-27', '4', 'Gladiol', 'Nurlaila', '-', 'file_1501148632.jpg', 'dari peneliti untuk diperbanyak', 1),
('000007', '2017-07-28', '9', 'Krisan', 'gjhfhj', 'jhjkghj', 'file_1501211400.jpg', 'spesies terbaru untuk di teliti', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_materi`
--

CREATE TABLE IF NOT EXISTS `permintaan_materi` (
  `id_permintaan` varchar(60) NOT NULL,
  `id_user` varchar(32) NOT NULL,
  `id_koleksi` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `status_minta` int(11) NOT NULL,
  PRIMARY KEY (`id_permintaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan_materi`
--

INSERT INTO `permintaan_materi` (`id_permintaan`, `id_user`, `id_koleksi`, `tanggal`, `keterangan`, `status_minta`) VALUES
('000001 ', '3', 'KSI000006 ', '2017-07-25', 'sdasd', 1),
('000002 ', '5', 'KSI000006 ', '2017-07-25', 'untuk penelitian', 0),
('000003 ', '5', 'KSI000009', '2017-07-25', 'Untuk koleksi di taman bunga nusantara', 1),
('000004 ', '4', 'KSI000011 ', '2017-07-27', 'untuk di budidayakan', 1),
('000005 ', '4', 'KSI000013', '2017-07-27', 'Untuk di budidayakan', 1),
('000006 ', '5', 'KSI000015', '2017-07-27', 'untuk penelitian ', 1),
('000007 ', '9', 'KSI000013', '2017-07-28', 'untuk koleksi di kebun raya cibodas', 1),
('000008 ', '5', 'KSI000013', '2017-07-29', 'untuk penelitian', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userr`
--

CREATE TABLE IF NOT EXISTS `userr` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userr`
--

INSERT INTO `userr` (`id`, `nama_instansi`, `username`, `password`, `email`) VALUES
(1, 'pt agrowisata', 'agro', '12345', 'al@gmail.com'),
(2, 'asasd', 'admin', 'admin', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
