-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2020 pada 23.26
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spkpsb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(2) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `id_user` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `Nama`, `id_user`) VALUES
(1, 'Administrator', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id_bobot` int(2) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `bobot` float NOT NULL,
  `kepentingan` enum('benefit','cost') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `kriteria`, `bobot`, `kepentingan`) VALUES
(1, 'Rata-Rata Nilai Semester 1', 20, 'benefit'),
(2, 'Rata-Rata Nilai Semester 2', 20, 'benefit'),
(3, 'Prestasi Kecamatan', 5, 'benefit'),
(4, 'Prestasi Kota', 10, 'benefit'),
(5, 'Prestasi Nasional', 15, 'benefit'),
(6, 'Keaktifan Organisasi', 10, 'benefit'),
(7, 'Keikutsertaan Ekstrakurikuler', 10, 'benefit'),
(8, 'Kredit Poin Tingkah Laku', 10, 'cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakurikuler`
--

CREATE TABLE IF NOT EXISTS `ekstrakurikuler` (
`id_ekstrakurikuler` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `ekstrakurikuler` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id_ekstrakurikuler`, `id_siswa`, `ekstrakurikuler`) VALUES
(2, 2, 'Baca Tulis Alquran'),
(3, 1, 'Baca Tulis Alquran'),
(4, 3, 'Paskibraka'),
(5, 3, 'Seni Hadrah'),
(6, 3, 'KIR'),
(7, 6, 'KIR'),
(8, 9, 'Paskibraka'),
(9, 9, 'Bela Diri'),
(10, 9, 'Seni Hadrah'),
(12, 10, 'Baca Tulis Alquran'),
(13, 12, 'Paskibraka'),
(14, 12, 'Bela Diri'),
(15, 13, 'KIR'),
(16, 14, 'Paskibraka'),
(17, 14, 'Baca Tulis Alquran'),
(18, 14, 'KIR'),
(19, 17, 'KIR'),
(20, 19, 'Paskibraka'),
(21, 25, 'Paskibraka'),
(22, 25, 'KIR'),
(23, 26, 'Paskibraka'),
(24, 26, 'KIR'),
(25, 27, 'Paskibraka'),
(26, 28, 'Basket'),
(27, 38, 'Basket'),
(28, 42, 'Basket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(255) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kelas` varchar(2) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `NIP`, `Nama`, `Kelas`, `id_user`) VALUES
(1, '195806141986031013', 'SUGIYANTO, S.Pd.', '7A', 3),
(2, '197002182005011004', 'ANDRIAS PRAYITNO, S.Pd.', '7B', 5),
(3, '196812271995122006', 'Dra. UMI MARWIYATI', '7C', 6),
(4, '196611101995122002', 'Dra. SRI MULYATI, M.Hum.', '7D', 7),
(5, '196010081983022004', 'NURYEKTI SULISTYAWATI, S.Pd.', '7E', 8),
(6, '196110221986031016', 'Drs. BAMBANG SURYADI', '7F', 9),
(7, '197807032009021002', 'JUJUK ARFIANTO, S.Pd.', '7G', 10),
(8, '195908151987031012', 'SUTRISNO, S.Pd.', '8A', 11),
(9, '196501101989112001', 'SITI NURJANAH, S.Pd.', '8B', 12),
(10, '196412201987032006', 'INDRIYATI, S.Pd.', '8C', 13),
(11, '196707071994122005', 'Dra. ENDANG LESTARI', '8D', 14),
(12, '196002101986031015', 'DWI JOKO PURNOMO, S.Pd.', '8E', 15),
(13, '197002042007012024', 'RETNO SURYANINGRUM, S.Pd.', '8F', 16),
(14, '195905251986032010', 'Dra. HASTUTI DIYAH ESTI', '8G', 17),
(15, '196102011984031008', 'JUWANDI, S.Pd.', '9A', 18),
(16, '198103312014062001', 'IDA NURJANNAH, S.Pd.', '9B', 19),
(17, '196011071983011002', 'AMIR SUHADAK, S.Pd., M.Pd.', '9C', 20),
(18, '196701171990032008', 'DEWI SUNARTI, S.Pd.', '9D', 21),
(19, '196403151984122008', 'SUPRIHATIN, S.Pd.', '9E', 22),
(20, '196807242007012011', 'Dra. MARDIJAH RAHMAWATI', '9F', 23),
(21, '196208231986092001', 'JUMIATI, S.Pd.', '9G', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`id_hasil` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `positif` float NOT NULL,
  `negatif` float NOT NULL,
  `preferensi` float NOT NULL,
  `peringkat` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_siswa`, `positif`, `negatif`, `preferensi`, `peringkat`) VALUES
(1, 2, 0.129925, 0.0185764, 0.125092, 16),
(2, 1, 0.129852, 0.0382148, 0.227378, 8),
(3, 3, 0.114255, 0.0665001, 0.367901, 4),
(4, 4, 0.133643, 0.035553, 0.210129, 9),
(5, 5, 0.138249, 0.00269629, 0.0191301, 39),
(6, 6, 0.134581, 0.0144412, 0.0969063, 17),
(7, 7, 0.138244, 0.00368025, 0.025931, 33),
(8, 8, 0.138257, 0.00217975, 0.0155212, 42),
(9, 9, 0.114978, 0.060402, 0.344406, 5),
(10, 10, 0.126198, 0.0273946, 0.178358, 14),
(11, 11, 0.138243, 0.00317534, 0.0224536, 35),
(12, 12, 0.115787, 0.0515223, 0.307947, 6),
(13, 13, 0.129928, 0.0287042, 0.180948, 11),
(14, 14, 0.12861, 0.0443811, 0.256551, 7),
(15, 15, 0.138257, 0.00271927, 0.0192889, 38),
(16, 16, 0.138243, 0.00317534, 0.0224536, 34),
(17, 17, 0.131687, 0.0191386, 0.126892, 15),
(18, 18, 0.138246, 0.00301373, 0.0213346, 36),
(19, 19, 0.129928, 0.0287135, 0.180996, 10),
(20, 20, 0.138249, 0.00264614, 0.0187809, 40),
(21, 21, 0.138246, 0.00301373, 0.0213346, 37),
(22, 22, 0.138253, 0.00239506, 0.0170288, 41),
(23, 23, 0.138237, 0.00426442, 0.0299255, 32),
(24, 24, 0.135436, 0.0127644, 0.0861293, 27),
(25, 25, 0.0382862, 0.129845, 0.772284, 1),
(26, 26, 0.113326, 0.0661882, 0.368708, 3),
(27, 27, 0.129978, 0.0285598, 0.180145, 12),
(28, 28, 0.129995, 0.0285549, 0.1801, 13),
(29, 29, 0.135426, 0.0131062, 0.0882379, 20),
(30, 30, 0.135432, 0.0128139, 0.0864365, 23),
(31, 31, 0.135432, 0.0128139, 0.0864365, 24),
(32, 32, 0.135428, 0.0130462, 0.0878689, 21),
(33, 33, 0.135436, 0.0127644, 0.0861293, 26),
(34, 34, 0.13544, 0.0127257, 0.0858883, 29),
(35, 35, 0.0887008, 0.106079, 0.54461, 2),
(36, 36, 0.135435, 0.0127429, 0.0859977, 28),
(37, 37, 0.135447, 0.0125936, 0.0850686, 31),
(38, 38, 0.134609, 0.0142257, 0.0955803, 19),
(39, 39, 0.135432, 0.0128139, 0.0864365, 25),
(40, 40, 0.135428, 0.0129551, 0.0873082, 22),
(41, 41, 0.135438, 0.0126826, 0.0856234, 30),
(42, 42, 0.134592, 0.0142997, 0.0960407, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE IF NOT EXISTS `kepsek` (
`id_kepsek` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`id_kepsek`, `Nama`, `id_user`) VALUES
(1, 'Kepala Sekolah', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matrik`
--

CREATE TABLE IF NOT EXISTS `matrik` (
`id_matrik` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nilai_sem1` float NOT NULL,
  `nilai_sem2` float NOT NULL,
  `prestasi_kecamatan` float NOT NULL,
  `prestasi_kota` float NOT NULL,
  `prestasi_nasional` float NOT NULL,
  `organisasi` float NOT NULL,
  `ekstrakurikuler` float NOT NULL,
  `kredit_poin` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matrik`
--

INSERT INTO `matrik` (`id_matrik`, `id_siswa`, `nilai_sem1`, `nilai_sem2`, `prestasi_kecamatan`, `prestasi_kota`, `prestasi_nasional`, `organisasi`, `ekstrakurikuler`, `kredit_poin`) VALUES
(1, 2, 84, 81, 0, 0.3, 0, 0, 1, 1),
(2, 1, 82, 85, 0.2, 0, 0, 0, 1, 1),
(3, 3, 80, 83, 0, 0.9, 0, 3, 3, 1),
(4, 4, 83, 86, 0.2, 0, 0, 0, 0, 1),
(5, 5, 83, 82, 0, 0, 0, 0, 0, 1),
(6, 6, 82, 84, 0, 0, 0, 0, 1, 1),
(7, 7, 86, 82, 0, 0, 0, 0, 0, 1),
(8, 8, 82, 81, 0, 0, 0, 0, 0, 1),
(9, 9, 77, 79, 0, 0.9, 0, 2, 3, 1),
(10, 10, 80, 81, 0, 0.6, 0, 0, 1, 1),
(11, 11, 83, 84, 0, 0, 0, 0, 0, 1),
(12, 12, 83, 81, 0, 0.9, 0, 2, 2, 1),
(13, 13, 82, 84, 0, 0, 0, 2, 1, 1),
(14, 14, 84, 86, 0, 0, 0, 1, 3, 1),
(15, 15, 84, 80, 0, 0, 0, 0, 0, 1),
(16, 16, 83, 84, 0, 0, 0, 0, 0, 1),
(17, 17, 85, 83, 0, 0, 0, 1, 1, 1),
(18, 18, 84, 82, 0, 0, 0, 0, 0, 1),
(19, 19, 84, 82, 0, 0, 0, 2, 1, 1),
(20, 20, 82, 83, 0, 0, 0, 0, 0, 1),
(21, 21, 84, 82, 0, 0, 0, 0, 0, 1),
(22, 22, 82, 82, 0, 0, 0, 0, 0, 1),
(23, 23, 86, 85, 0, 0, 0, 0, 0, 1),
(24, 24, 84, 82, 0, 0, 0, 1, 0, 1),
(25, 25, 79, 78, 0, 1.5, 0.4, 3, 2, 1),
(26, 26, 81, 82, 0, 1.2, 0, 3, 2, 1),
(27, 27, 78, 79, 0, 0, 0, 2, 1, 1),
(28, 28, 77, 78, 0, 0, 0, 2, 1, 1),
(29, 29, 85, 86, 0, 0, 0, 1, 0, 1),
(30, 30, 84, 83, 0, 0, 0, 1, 0, 1),
(31, 31, 84, 83, 0, 0, 0, 1, 0, 1),
(32, 32, 86, 84, 0, 0, 0, 1, 0, 1),
(33, 33, 84, 82, 0, 0, 0, 1, 0, 1),
(34, 34, 84, 81, 0, 0, 0, 1, 0, 1),
(35, 35, 81, 80, 0, 0, 0.4, 0, 0, 1),
(36, 36, 83, 83, 0, 0, 0, 1, 0, 1),
(37, 37, 82, 81, 0, 0, 0, 1, 0, 1),
(38, 38, 81, 79, 0, 0, 0, 0, 1, 1),
(39, 39, 84, 83, 0, 0, 0, 1, 0, 1),
(40, 40, 85, 84, 0, 0, 0, 1, 0, 1),
(41, 41, 82, 83, 0, 0, 0, 1, 0, 1),
(42, 42, 81, 82, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasi`
--

CREATE TABLE IF NOT EXISTS `normalisasi` (
`id_normalisasi` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nilai_sem1` float NOT NULL,
  `nilai_sem2` float NOT NULL,
  `prestasi_kecamatan` float NOT NULL,
  `prestasi_kota` float NOT NULL,
  `prestasi_nasional` float NOT NULL,
  `organisasi` float NOT NULL,
  `ekstrakurikuler` float NOT NULL,
  `kredit_poin` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_siswa`, `nilai_sem1`, `nilai_sem2`, `prestasi_kecamatan`, `prestasi_kota`, `prestasi_nasional`, `organisasi`, `ekstrakurikuler`, `kredit_poin`) VALUES
(1, 2, 0.156828, 0.151891, 0, 0.117041, 0, 0, 0.141421, 0.154303),
(2, 1, 0.153094, 0.159392, 0.707107, 0, 0, 0, 0.141421, 0.154303),
(3, 3, 0.14936, 0.155642, 0, 0.351123, 0, 0.372104, 0.424264, 0.154303),
(4, 4, 0.154961, 0.161267, 0.707107, 0, 0, 0, 0, 0.154303),
(5, 5, 0.154961, 0.153767, 0, 0, 0, 0, 0, 0.154303),
(6, 6, 0.153094, 0.157517, 0, 0, 0, 0, 0.141421, 0.154303),
(7, 7, 0.160562, 0.153767, 0, 0, 0, 0, 0, 0.154303),
(8, 8, 0.153094, 0.151891, 0, 0, 0, 0, 0, 0.154303),
(9, 9, 0.143759, 0.148141, 0, 0.351123, 0, 0.248069, 0.424264, 0.154303),
(10, 10, 0.14936, 0.151891, 0, 0.234082, 0, 0, 0.141421, 0.154303),
(11, 11, 0.154961, 0.157517, 0, 0, 0, 0, 0, 0.154303),
(12, 12, 0.154961, 0.151891, 0, 0.351123, 0, 0.248069, 0.282843, 0.154303),
(13, 13, 0.153094, 0.157517, 0, 0, 0, 0.248069, 0.141421, 0.154303),
(14, 14, 0.156828, 0.161267, 0, 0, 0, 0.124035, 0.424264, 0.154303),
(15, 15, 0.156828, 0.150016, 0, 0, 0, 0, 0, 0.154303),
(16, 16, 0.154961, 0.157517, 0, 0, 0, 0, 0, 0.154303),
(17, 17, 0.158695, 0.155642, 0, 0, 0, 0.124035, 0.141421, 0.154303),
(18, 18, 0.156828, 0.153767, 0, 0, 0, 0, 0, 0.154303),
(19, 19, 0.156828, 0.153767, 0, 0, 0, 0.248069, 0.141421, 0.154303),
(20, 20, 0.153094, 0.155642, 0, 0, 0, 0, 0, 0.154303),
(21, 21, 0.156828, 0.153767, 0, 0, 0, 0, 0, 0.154303),
(22, 22, 0.153094, 0.153767, 0, 0, 0, 0, 0, 0.154303),
(23, 23, 0.160562, 0.159392, 0, 0, 0, 0, 0, 0.154303),
(24, 24, 0.156828, 0.153767, 0, 0, 0, 0.124035, 0, 0.154303),
(25, 25, 0.147493, 0.146266, 0, 0.585206, 0.707107, 0.372104, 0.282843, 0.154303),
(26, 26, 0.151227, 0.153767, 0, 0.468165, 0, 0.372104, 0.282843, 0.154303),
(27, 27, 0.145626, 0.148141, 0, 0, 0, 0.248069, 0.141421, 0.154303),
(28, 28, 0.143759, 0.146266, 0, 0, 0, 0.248069, 0.141421, 0.154303),
(29, 29, 0.158695, 0.161267, 0, 0, 0, 0.124035, 0, 0.154303),
(30, 30, 0.156828, 0.155642, 0, 0, 0, 0.124035, 0, 0.154303),
(31, 31, 0.156828, 0.155642, 0, 0, 0, 0.124035, 0, 0.154303),
(32, 32, 0.160562, 0.157517, 0, 0, 0, 0.124035, 0, 0.154303),
(33, 33, 0.156828, 0.153767, 0, 0, 0, 0.124035, 0, 0.154303),
(34, 34, 0.156828, 0.151891, 0, 0, 0, 0.124035, 0, 0.154303),
(35, 35, 0.151227, 0.150016, 0, 0, 0.707107, 0, 0, 0.154303),
(36, 36, 0.154961, 0.155642, 0, 0, 0, 0.124035, 0, 0.154303),
(37, 37, 0.153094, 0.151891, 0, 0, 0, 0.124035, 0, 0.154303),
(38, 38, 0.151227, 0.148141, 0, 0, 0, 0, 0.141421, 0.154303),
(39, 39, 0.156828, 0.155642, 0, 0, 0, 0.124035, 0, 0.154303),
(40, 40, 0.158695, 0.157517, 0, 0, 0, 0.124035, 0, 0.154303),
(41, 41, 0.153094, 0.155642, 0, 0, 0, 0.124035, 0, 0.154303),
(42, 42, 0.151227, 0.153767, 0, 0, 0, 0, 0.141421, 0.154303);

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasi_terbobot`
--

CREATE TABLE IF NOT EXISTS `normalisasi_terbobot` (
`id_normalisasi_terbobot` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nilai_sem1` float NOT NULL,
  `nilai_sem2` float NOT NULL,
  `prestasi_kecamatan` float NOT NULL,
  `prestasi_kota` float NOT NULL,
  `prestasi_nasional` float NOT NULL,
  `organisasi` float NOT NULL,
  `ekstrakurikuler` float NOT NULL,
  `kredit_poin` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normalisasi_terbobot`
--

INSERT INTO `normalisasi_terbobot` (`id_normalisasi_terbobot`, `id_siswa`, `nilai_sem1`, `nilai_sem2`, `prestasi_kecamatan`, `prestasi_kota`, `prestasi_nasional`, `organisasi`, `ekstrakurikuler`, `kredit_poin`) VALUES
(1, 2, 0.0313656, 0.0303782, 0, 0.0117041, 0, 0, 0.0141421, 0.0154303),
(2, 1, 0.0306188, 0.0318784, 0.0353553, 0, 0, 0, 0.0141421, 0.0154303),
(3, 3, 0.029872, 0.0311284, 0, 0.0351123, 0, 0.0372104, 0.0424264, 0.0154303),
(4, 4, 0.0309922, 0.0322534, 0.0353553, 0, 0, 0, 0, 0.0154303),
(5, 5, 0.0309922, 0.0307534, 0, 0, 0, 0, 0, 0.0154303),
(6, 6, 0.0306188, 0.0315034, 0, 0, 0, 0, 0.0141421, 0.0154303),
(7, 7, 0.0321124, 0.0307534, 0, 0, 0, 0, 0, 0.0154303),
(8, 8, 0.0306188, 0.0303782, 0, 0, 0, 0, 0, 0.0154303),
(9, 9, 0.0287518, 0.0296282, 0, 0.0351123, 0, 0.0248069, 0.0424264, 0.0154303),
(10, 10, 0.029872, 0.0303782, 0, 0.0234082, 0, 0, 0.0141421, 0.0154303),
(11, 11, 0.0309922, 0.0315034, 0, 0, 0, 0, 0, 0.0154303),
(12, 12, 0.0309922, 0.0303782, 0, 0.0351123, 0, 0.0248069, 0.0282843, 0.0154303),
(13, 13, 0.0306188, 0.0315034, 0, 0, 0, 0.0248069, 0.0141421, 0.0154303),
(14, 14, 0.0313656, 0.0322534, 0, 0, 0, 0.0124035, 0.0424264, 0.0154303),
(15, 15, 0.0313656, 0.0300032, 0, 0, 0, 0, 0, 0.0154303),
(16, 16, 0.0309922, 0.0315034, 0, 0, 0, 0, 0, 0.0154303),
(17, 17, 0.031739, 0.0311284, 0, 0, 0, 0.0124035, 0.0141421, 0.0154303),
(18, 18, 0.0313656, 0.0307534, 0, 0, 0, 0, 0, 0.0154303),
(19, 19, 0.0313656, 0.0307534, 0, 0, 0, 0.0248069, 0.0141421, 0.0154303),
(20, 20, 0.0306188, 0.0311284, 0, 0, 0, 0, 0, 0.0154303),
(21, 21, 0.0313656, 0.0307534, 0, 0, 0, 0, 0, 0.0154303),
(22, 22, 0.0306188, 0.0307534, 0, 0, 0, 0, 0, 0.0154303),
(23, 23, 0.0321124, 0.0318784, 0, 0, 0, 0, 0, 0.0154303),
(24, 24, 0.0313656, 0.0307534, 0, 0, 0, 0.0124035, 0, 0.0154303),
(25, 25, 0.0294986, 0.0292532, 0, 0.0585206, 0.106066, 0.0372104, 0.0282843, 0.0154303),
(26, 26, 0.0302454, 0.0307534, 0, 0.0468165, 0, 0.0372104, 0.0282843, 0.0154303),
(27, 27, 0.0291252, 0.0296282, 0, 0, 0, 0.0248069, 0.0141421, 0.0154303),
(28, 28, 0.0287518, 0.0292532, 0, 0, 0, 0.0248069, 0.0141421, 0.0154303),
(29, 29, 0.031739, 0.0322534, 0, 0, 0, 0.0124035, 0, 0.0154303),
(30, 30, 0.0313656, 0.0311284, 0, 0, 0, 0.0124035, 0, 0.0154303),
(31, 31, 0.0313656, 0.0311284, 0, 0, 0, 0.0124035, 0, 0.0154303),
(32, 32, 0.0321124, 0.0315034, 0, 0, 0, 0.0124035, 0, 0.0154303),
(33, 33, 0.0313656, 0.0307534, 0, 0, 0, 0.0124035, 0, 0.0154303),
(34, 34, 0.0313656, 0.0303782, 0, 0, 0, 0.0124035, 0, 0.0154303),
(35, 35, 0.0302454, 0.0300032, 0, 0, 0.106066, 0, 0, 0.0154303),
(36, 36, 0.0309922, 0.0311284, 0, 0, 0, 0.0124035, 0, 0.0154303),
(37, 37, 0.0306188, 0.0303782, 0, 0, 0, 0.0124035, 0, 0.0154303),
(38, 38, 0.0302454, 0.0296282, 0, 0, 0, 0, 0.0141421, 0.0154303),
(39, 39, 0.0313656, 0.0311284, 0, 0, 0, 0.0124035, 0, 0.0154303),
(40, 40, 0.031739, 0.0315034, 0, 0, 0, 0.0124035, 0, 0.0154303),
(41, 41, 0.0306188, 0.0311284, 0, 0, 0, 0.0124035, 0, 0.0154303),
(42, 42, 0.0302454, 0.0307534, 0, 0, 0, 0, 0.0141421, 0.0154303);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE IF NOT EXISTS `organisasi` (
`id_organisasi` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_siswa`, `organisasi`) VALUES
(2, 3, 'Pengurus OSIS'),
(3, 3, 'Pengurus Pramuka'),
(4, 3, 'Pengurus ROHIS'),
(5, 9, 'Pengurus OSIS'),
(6, 9, 'Pengurus Pramuka'),
(7, 12, 'Pengurus OSIS'),
(8, 12, 'Pengurus Pramuka'),
(9, 13, 'Pengurus Pramuka'),
(10, 13, 'Pengurus ROHIS'),
(11, 14, 'Pengurus OSIS'),
(12, 17, 'Pengurus ROHIS'),
(13, 19, 'Pengurus OSIS'),
(14, 19, 'Pengurus Pramuka'),
(15, 24, 'Pengurus OSIS'),
(16, 25, 'Pengurus OSIS'),
(17, 25, 'Pengurus Pramuka'),
(18, 25, 'Pengurus ROHIS'),
(19, 26, 'Pengurus OSIS'),
(20, 26, 'Pengurus Pramuka'),
(21, 26, 'Pengurus ROHIS'),
(22, 27, 'Pengurus OSIS'),
(23, 27, 'Pengurus Pramuka'),
(24, 28, 'Pengurus OSIS'),
(25, 28, 'Pengurus ROHIS'),
(26, 29, 'Pengurus OSIS'),
(27, 30, 'Pengurus OSIS'),
(28, 31, 'Pengurus OSIS'),
(29, 32, 'Pengurus OSIS'),
(30, 33, 'Pengurus OSIS'),
(31, 34, 'Pengurus OSIS'),
(32, 36, 'Pengurus OSIS'),
(33, 37, 'Pengurus OSIS'),
(34, 39, 'Pengurus OSIS'),
(35, 40, 'Pengurus OSIS'),
(36, 41, 'Pengurus OSIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `preskec`
--

CREATE TABLE IF NOT EXISTS `preskec` (
`id_preskec` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nama_preskec` varchar(255) NOT NULL,
  `foto_preskec` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `preskec`
--

INSERT INTO `preskec` (`id_preskec`, `id_siswa`, `nama_preskec`, `foto_preskec`) VALUES
(1, 1, 'Juara III Tartil Quran Kecamatan Serengan', 'no-image.png'),
(2, 4, 'Juara Harapan I Tartil Quran Tingkat Kecamatan Serengan', 'no-image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `preskot`
--

CREATE TABLE IF NOT EXISTS `preskot` (
`id_preskot` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nama_preskot` varchar(255) NOT NULL,
  `foto_preskot` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `preskot`
--

INSERT INTO `preskot` (`id_preskot`, `id_siswa`, `nama_preskot`, `foto_preskot`) VALUES
(1, 2, 'Juara I Tilawah Quran Tingkat Kota Surakarta', 'no-image.png'),
(2, 3, 'Juara III Sandi LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(3, 3, 'Juara III KIM LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(4, 3, 'Juara II Essay LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(5, 9, 'Juara III Sandi LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(6, 9, 'Juara III KIM LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(7, 9, 'Juara I Hasta Karya LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(8, 10, 'Juara Harapan II Hafidz Quran', 'no-image.png'),
(9, 10, 'Juara Harapan II Tartil Quran', 'no-image.png'),
(10, 12, 'Juara III Sandi LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(11, 12, 'Juara III KIM LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(12, 12, 'Juara I Hasta Karya LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(13, 25, 'Finalis Lomba Roket Air Tingkat Kota Surakarta', 'no-image.png'),
(14, 25, 'Juara I Lomba Hasta Karya Tingkat Kota Surakarta', 'no-image.png'),
(15, 25, 'Juara II Lomba Essay Bela Negara Tingkat Kota Surakarta', 'no-image.png'),
(16, 25, 'Juara III Lomba KIM LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(17, 25, 'Juara III Lomba Sandi LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(18, 26, 'Juara I Lomba Hasta Karya Tingkat Kota Surakarta', 'no-image.png'),
(19, 26, 'Juara II Lomba Essay Bela Negara Tingkat Kota Surakarta', 'no-image.png'),
(20, 26, 'Juara III Sandi LP 3 Tingkat Kota Surakarta', 'no-image.png'),
(21, 26, 'Juara III KIM LP 3 Tingkat Kota Surakarta', 'no-image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presnas`
--

CREATE TABLE IF NOT EXISTS `presnas` (
`id_presnas` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nama_presnas` varchar(255) NOT NULL,
  `foto_presnas` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presnas`
--

INSERT INTO `presnas` (`id_presnas`, `id_siswa`, `nama_presnas`, `foto_presnas`) VALUES
(1, 25, 'Juara I Lomba Penelitian Siswa Tingkat Nasional', 'no-image.png'),
(2, 35, 'Juara III POPDA Bulutangkis', 'no-image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
`id_prestasi` int(255) NOT NULL,
  `id_siswa` int(255) NOT NULL,
  `nilai_sem1` float NOT NULL,
  `nilai_sem2` float NOT NULL,
  `prestasi_kecamatan` int(2) NOT NULL,
  `prestasi_kota` int(2) NOT NULL,
  `prestasi_nasional` int(2) NOT NULL,
  `organisasi` int(2) NOT NULL,
  `ekstrakurikuler` int(2) NOT NULL,
  `kredit_poin` int(3) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `id_siswa`, `nilai_sem1`, `nilai_sem2`, `prestasi_kecamatan`, `prestasi_kota`, `prestasi_nasional`, `organisasi`, `ekstrakurikuler`, `kredit_poin`, `status`) VALUES
(1, 2, 84, 81, 0, 1, 0, 0, 1, 0, 1),
(2, 1, 82, 85, 1, 0, 0, 0, 1, 0, 1),
(3, 3, 80, 83, 0, 3, 0, 3, 3, 0, 1),
(4, 4, 83, 86, 1, 0, 0, 0, 0, 0, 1),
(5, 5, 83, 82, 0, 0, 0, 0, 0, 0, 1),
(6, 6, 82, 84, 0, 0, 0, 0, 1, 0, 1),
(7, 7, 86, 82, 0, 0, 0, 0, 0, 0, 1),
(8, 8, 82, 81, 0, 0, 0, 0, 0, 0, 1),
(9, 9, 77, 79, 0, 3, 0, 2, 3, 0, 1),
(10, 10, 80, 81, 0, 2, 0, 0, 1, 0, 1),
(11, 11, 83, 84, 0, 0, 0, 0, 0, 0, 1),
(12, 12, 83, 81, 0, 3, 0, 2, 2, 0, 1),
(13, 13, 82, 84, 0, 0, 0, 2, 1, 0, 1),
(14, 14, 84, 86, 0, 0, 0, 1, 3, 0, 1),
(15, 15, 84, 80, 0, 0, 0, 0, 0, 0, 1),
(16, 16, 83, 84, 0, 0, 0, 0, 0, 0, 1),
(17, 17, 85, 83, 0, 0, 0, 1, 1, 0, 1),
(18, 18, 84, 82, 0, 0, 0, 0, 0, 0, 1),
(19, 19, 84, 82, 0, 0, 0, 2, 1, 0, 1),
(20, 20, 82, 83, 0, 0, 0, 0, 0, 0, 1),
(21, 21, 84, 82, 0, 0, 0, 0, 0, 0, 1),
(22, 22, 82, 82, 0, 0, 0, 0, 0, 0, 1),
(23, 23, 86, 85, 0, 0, 0, 0, 0, 0, 1),
(24, 24, 84, 82, 0, 0, 0, 1, 0, 0, 1),
(25, 25, 79, 78, 0, 5, 1, 3, 2, 0, 1),
(26, 26, 81, 82, 0, 4, 0, 3, 2, 0, 1),
(27, 27, 78, 79, 0, 0, 0, 2, 1, 0, 1),
(28, 28, 77, 78, 0, 0, 0, 2, 1, 0, 1),
(29, 29, 85, 86, 0, 0, 0, 1, 0, 0, 1),
(30, 30, 84, 83, 0, 0, 0, 1, 0, 0, 1),
(31, 31, 84, 83, 0, 0, 0, 1, 0, 0, 1),
(32, 32, 86, 84, 0, 0, 0, 1, 0, 0, 1),
(33, 33, 84, 82, 0, 0, 0, 1, 0, 0, 1),
(34, 34, 84, 81, 0, 0, 0, 1, 0, 0, 1),
(35, 35, 81, 80, 0, 0, 1, 0, 0, 0, 1),
(36, 36, 83, 83, 0, 0, 0, 1, 0, 0, 1),
(37, 37, 82, 81, 0, 0, 0, 1, 0, 0, 1),
(38, 38, 81, 79, 0, 0, 0, 0, 1, 0, 1),
(39, 39, 84, 83, 0, 0, 0, 1, 0, 0, 1),
(40, 40, 85, 84, 0, 0, 0, 1, 0, 0, 1),
(41, 41, 82, 83, 0, 0, 0, 1, 0, 0, 1),
(42, 42, 81, 82, 0, 0, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(255) NOT NULL,
  `NIS` int(20) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kelas` varchar(2) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `NIS`, `Nama`, `Kelas`, `id_user`) VALUES
(1, 6542, 'MUHAMMAD ANWAR ISLAMUDIN', '7A', 4),
(2, 6535, 'BIMANTARA GALIH NUGRAHA', '7A', 25),
(3, 6573, 'JUANDITO IRFAN NIKOLA', '7B', 26),
(4, 6574, 'LATIFA IMROATUS', '7B', 27),
(5, 6593, 'ADHIESTI NUR YULIANTI', '7C', 28),
(6, 6599, 'DANI SAPUTRA', '7C', 29),
(7, 6624, 'AFIFAH NUR EFFENDI', '7D', 30),
(8, 6617, 'BAGUS DIDI PRASETYO', '7D', 31),
(9, 6660, 'DHIEVA ADITYAS SURYAWAN', '7E', 32),
(10, 6673, 'SAFIRA NUR ARDIANI', '7E', 33),
(11, 6678, 'AFIFAH RAHMA PRATIWI', '7F', 34),
(12, 6672, 'RIZKI BAGUS PUTRA PAMUNGKAS', '7F', 35),
(13, 6707, 'AMELIA SYAHBANI YUKI ARISANDI', '7G', 36),
(14, 6709, 'ANANDA PUTRI WIDI RACHMAWATI', '7G', 37),
(15, 6312, 'NIKOLAS PRAMUPUTRO', '8A', 38),
(16, 6491, 'YULIA PUTRI HARDIANTI', '8A', 39),
(17, 6359, 'LULUK KURNIA DAMAYANTI', '8B', 40),
(18, 6381, 'ELSA ALFIFIANA FAYZA', '8B', 41),
(19, 6343, 'CANDRA SUKMA AJI', '8C', 42),
(20, 6346, 'PEGI SEPTIAWATI', '8C', 43),
(21, 6331, 'NATHASIA TEFFANY PUTRI', '8D', 44),
(22, 6330, 'NANDA HERAWATI', '8D', 45),
(23, 6382, 'FEBRIANA KUSUMANINGRUM', '8E', 46),
(24, 6335, 'RISMA WAHYU ARVIANI', '8E', 47),
(25, 6410, 'ARGO BIMA WAICAKSONO', '8F', 48),
(26, 6414, 'DIMAS BAGUS ROZAK SHOFAWI', '8F', 49),
(27, 6439, 'ANITA RACHMA NUR AFISA', '8G', 50),
(28, 6350, 'AMANDA PUTRI SETIAWAN', '8G', 51),
(29, 6176, 'NUR SALSABILA', '9A', 52),
(30, 6134, 'RISAI NUNGGAL LAKSONO', '9A', 53),
(31, 6105, 'WULAN SEPTIYANI', '9B', 54),
(32, 6188, 'YURIKE SISKA WIDYASTUTI', '9B', 55),
(33, 6145, 'GILANG HERYANTO', '9C', 56),
(34, 6293, 'LINDA OKTAVIANI', '9C', 57),
(35, 6189, 'ANISSA VIKA DAMAYANTI', '9D', 58),
(36, 6264, 'NADILA MUSTIKAWATI', '9D', 59),
(37, 6114, 'FRENGKY PONCO BUWONO', '9E', 60),
(38, 6205, 'NABILA DELLA ROESITA', '9E', 61),
(39, 6136, 'ALFIAN', '9F', 62),
(40, 6172, 'LABIB TAMIRROHMAN', '9F', 63),
(41, 6184, 'SEPTINA NUR QASANAH', '9G', 64),
(42, 6268, 'NUR DINDA HARJANTI', '9G', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_level` smallint(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`, `image`, `id_level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'aktif', 'admin.jpg', 1),
(2, 'kepalasekolah', '8708c8ff0cc3a95adea6ac528b6358f4', 'aktif', 'kepsek.jpg', 4),
(3, '195806141986031013', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(4, '6542', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(5, '197002182005011004', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(6, '196812271995122006', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(7, '196611101995122002', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(8, '196010081983022004', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(9, '196110221986031016', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(10, '197807032009021002', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(11, '195908151987031012', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(12, '196501101989112001', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(13, '196412201987032006', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(14, '196707071994122005', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(15, '196002101986031015', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(16, '197002042007012024', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(17, '195905251986032010', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(18, '196102011984031008', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(19, '198103312014062001', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(20, '196011071983011002', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(21, '196701171990032008', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(22, '196403151984122008', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(23, '196807242007012011', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(24, '196208231986092001', 'b47c6e71ca3a5e23cab99c2e9da03046', 'aktif', 'guru.jpg', 2),
(25, '6535', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(26, '6573', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(27, '6574', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(28, '6593', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(29, '6599', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(30, '6624', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(31, '6617', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(32, '6660', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(33, '6673', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(34, '6678', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(35, '6672', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(36, '6707', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(37, '6709', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(38, '6312', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(39, '6491', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(40, '6359', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(41, '6381', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(42, '6343', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(43, '6346', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(44, '6331', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(45, '6330', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(46, '6382', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(47, '6335', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(48, '6410', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(49, '6414', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(50, '6439', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(51, '6350', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(52, '6176', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(53, '6134', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(54, '6105', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(55, '6188', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(56, '6145', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(57, '6293', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(58, '6189', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(59, '6264', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(60, '6114', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(61, '6205', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(62, '6136', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(63, '6172', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(64, '6184', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3),
(65, '6268', '3afa0d81296a4f17d477ec823261b1ec', 'aktif', 'siswa.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
`id_level` smallint(2) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_level`
--

INSERT INTO `user_level` (`id_level`, `level`) VALUES
(1, 'administrator'),
(2, 'guru'),
(3, 'siswa'),
(4, 'kepala sekolah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
 ADD PRIMARY KEY (`id_ekstrakurikuler`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
 ADD PRIMARY KEY (`id_kepsek`);

--
-- Indexes for table `matrik`
--
ALTER TABLE `matrik`
 ADD PRIMARY KEY (`id_matrik`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
 ADD PRIMARY KEY (`id_normalisasi`);

--
-- Indexes for table `normalisasi_terbobot`
--
ALTER TABLE `normalisasi_terbobot`
 ADD PRIMARY KEY (`id_normalisasi_terbobot`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
 ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `preskec`
--
ALTER TABLE `preskec`
 ADD PRIMARY KEY (`id_preskec`);

--
-- Indexes for table `preskot`
--
ALTER TABLE `preskot`
 ADD PRIMARY KEY (`id_preskot`);

--
-- Indexes for table `presnas`
--
ALTER TABLE `presnas`
 ADD PRIMARY KEY (`id_presnas`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
 ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
 ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id_bobot` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
MODIFY `id_ekstrakurikuler` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `id_hasil` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
MODIFY `id_kepsek` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `matrik`
--
ALTER TABLE `matrik`
MODIFY `id_matrik` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
MODIFY `id_normalisasi` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `normalisasi_terbobot`
--
ALTER TABLE `normalisasi_terbobot`
MODIFY `id_normalisasi_terbobot` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
MODIFY `id_organisasi` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `preskec`
--
ALTER TABLE `preskec`
MODIFY `id_preskec` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `preskot`
--
ALTER TABLE `preskot`
MODIFY `id_preskot` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `presnas`
--
ALTER TABLE `presnas`
MODIFY `id_presnas` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
MODIFY `id_prestasi` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
MODIFY `id_level` smallint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
