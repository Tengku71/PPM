-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 02:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `buku_id` varchar(20) NOT NULL,
  `kategori` varchar(11) NOT NULL,
  `rak` varchar(11) NOT NULL,
  `sampul` int(50) DEFAULT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `isi` text DEFAULT NULL,
  `jumlah` int(50) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `buku_id`, `kategori`, `rak`, `sampul`, `isbn`, `lampiran`, `judul`, `penerbit`, `pengarang`, `tahun`, `isi`, `jumlah`, `tanggal_masuk`) VALUES
(1, 'UMUM049', '3', '11', 0, '132-123-234-231', '0', 'CARA MUDAH BELAJAR PEMROGRAMAN C++', 'INFORMATIKA BANDUNG', 'BUDI RAHARJO ', '2012', '', 23, '0000-00-00'),
(2, 'IPA007', '1', '4', 0, '', '', 'IPA Terpadu (VII)', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 16, '0000-00-00'),
(3, 'PKN007', '1', '4', 0, '', '', 'PKN (VII)', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 15, '0000-00-00'),
(4, 'MTK006', '1', '4', 0, '', '', 'Matematika', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 16, '0000-00-00'),
(5, 'ENG006', '1', '4', 0, '', '', 'Experience English ', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 16, '0000-00-00'),
(6, 'JAWA013', '1', '6', 0, '', '', 'Marsudi basa lan sastra jawa', 'Kurikulum 2013', 'Priyantono dkk', '2015', '', 15, '0000-00-00'),
(7, 'TIK006', '1', '4', 0, '', '', 'TIK', 'KTSP 2006', 'Fiska Kusumawati', '2015', '', 14, '0000-00-00'),
(8, 'INDO006', '1', '4', 0, '', '', 'Bahasa Indonesia', 'KTSP 2006', 'Nurhadi dkk', '2007', '', 21, '0000-00-00'),
(9, 'INDO006', '1', '4', 0, '', '', 'Bahasa Indonesia', 'KTSP 2006', 'Tim Mas media Buana', '2005', '', 16, '0000-00-00'),
(10, 'IPS006', '1', '4', 0, '', '', 'IPS Terpadu', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 5, '0000-00-00'),
(11, 'INDO008', '1', '4', 0, '', '', 'Bahasa Indonesia (VIII)', 'KTSP 2007', 'Nurhadi dkk', '2007', '', 10, '0000-00-00'),
(12, 'ENG008', '1', '4', 0, '', '', 'English IN focus (VIII)', 'BSE', 'Artono Wardinah dkk', '2008', '', 48, '0000-00-00'),
(13, 'PJOK001', '1', '4', 0, '', '', 'Pendidikan Jasmani dan Olahraga', 'BSE', 'Budi Sutrisno dkk', '2010', '', 38, '0000-00-00'),
(14, 'RDK001', '1', '4', 0, '', '', 'Raga dan Kesehatan', 'BSE', '', '2008', '', 48, '0000-00-00'),
(15, 'IPS008', '1', '4', 0, '', '', 'IPS (VIII)', 'BSE', 'Sutarto dkk', '2008', '', 25, '0000-00-00'),
(16, 'MTK001', '1', '4', 0, '', '', 'Matematika', 'BSE', 'Nur Aksin ', '2005', '', 45, '0000-00-00'),
(17, 'PAI008', '1', '4', 0, '', '', 'PAI (VIII)', 'BSE', 'Ika setiani dkk', '2010', '', 42, '0000-00-00'),
(18, 'PKN008', '1', '4', 0, '', '', 'PKN (VIII)', 'BSE', 'Dadang Sundawa dkk', '2008', '', 38, '0000-00-00'),
(19, 'IPA008', '1', '4', 0, '', '', 'IPA Terpadu (VIII)', 'KTSP 2006', 'Tim Mas media Buana', '2006', '', 10, '0000-00-00'),
(20, 'TIK008', '1', '4', 0, '', '', 'TIK (VIII)', 'BSE', 'Dwi Widiyanti dkk', '2010', '', 39, '0000-00-00'),
(21, 'IPS008', '1', '4', 0, '', '', 'Belajar IPA (VIII)', 'BSE', 'Seful Karim dkk', '2008', '', 14, '0000-00-00'),
(22, 'PKN008', '1', '4', 0, '', '', 'PKN (VIII)', 'KTSP 2006', 'Saptono', '2007', '', 8, '0000-00-00'),
(23, 'IPS008', '1', '4', 0, '', '', 'IPS (VIII)', 'KTSP 2006', 'Kuswandono', '2007', '', 4, '0000-00-00'),
(24, 'IPS008', '1', '4', 0, '', '', 'IPS (VIII)', 'KTSP 2006', 'K. Wardiatmoko', '2012', '', 9, '0000-00-00'),
(25, 'ENG006', '1', '4', 0, '', '', 'English on the sky', 'KTSP 2006', 'Mukaryo dkk', '2007', '', 9, '0000-00-00'),
(26, 'IPA008', '1', '4', 0, '', '', 'IPA Terpadu (VIII)', 'KTSP 2006', 'Tim Abdi Guru', '2007', '', 7, '0000-00-00'),
(27, 'INDO008', '1', '4', 0, '', '', 'Bahasa Indonesia (VIII)', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 10, '0000-00-00'),
(28, 'INDO009', '1', '4', 0, '', '', 'Bahasa Indonesia (IX)', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 9, '0000-00-00'),
(29, 'INDO009', '1', '4', 0, '', '', 'Bahasa Indonesia (IX)', 'KTSP 2006', 'Nurhadi dkk', '2007', '', 10, '0000-00-00'),
(30, 'JAWA001', '1', '4', 0, '', '', 'Marsudi basa lan sastra jawa', 'Erlangga', 'Sawufir dkk', '0000', '', 10, '0000-00-00'),
(31, 'SB009', '1', '4', 0, '', '', 'Seni Budaya (IX)', 'KTSP 2006', 'Tim Abdi Guru', '2007', '', 10, '0000-00-00'),
(32, 'ENG006', '1', '4', 0, '', '', 'English On the sky ', 'KTSP 2006', 'Mukarto dkk', '2007', '', 10, '0000-00-00'),
(33, 'IPA009', '1', '4', 0, '', '', 'IPA (IX)', 'KTSP 2006', 'Daroji dkk', '2015', '', 10, '0000-00-00'),
(34, 'MTK009', '1', '4', 0, '', '', 'Matematika (IX)', 'KTSP 2006', 'Umi Salam', '2015', '', 9, '0000-00-00'),
(35, 'MTK009', '1', '4', 0, '', '', 'Matematika (IX)', 'KTSP 2006', 'Sukino dkk', '2007', '', 9, '0000-00-00'),
(36, 'IPA009', '1', '4', 0, '', '', 'IPA Terpadu (IX)', 'KTSP 2006', 'Tim Abdi Guru', '2010', '', 8, '0000-00-00'),
(37, 'IPS009', '1', '4', 0, '', '', 'IPS (IX)', 'KTSP 2006', 'K. Wardiatmoko', '2010', '', 9, '0000-00-00'),
(38, 'IPS006', '1', '4', 0, '', '', 'IPS Terpadu', 'KTSP 2006', 'Tim Mas media Buana', '2015', '', 8, '0000-00-00'),
(39, 'ENS001', '2', '1', 0, '', '', 'Ensiklopedia Fisika Optika ', 'Interplus', 'Geraid Ensang Trimuda', '2008', '', 1, '0000-00-00'),
(40, 'ENS002', '2', '1', 0, '', '', 'Ensiklopedia Fisika Gaya', 'Interplus', 'Geraid Ensang Trimuda', '2008', '', 1, '0000-00-00'),
(41, 'ENS003', '2', '1', 0, '', '', 'Ensiklopedia Fisika Getaran', 'Interplus', 'Geraid Ensang Trimuda', '2008', '', 1, '0000-00-00'),
(42, 'ENS004', '2', '1', 0, '', '', 'Ensiklopedia IPA', 'Interplus', 'Drajat', '2008', '', 1, '0000-00-00'),
(43, 'ENS005', '2', '1', 0, '', '', 'Ensiklopedia IPA Air', 'Interplus', 'Drajat', '2008', '', 1, '0000-00-00'),
(44, 'ENS006', '2', '1', 0, '', '', 'Ensiklopedia IPA Alam Semesta', 'Interplus', 'Drajat', '2008', '', 1, '0000-00-00'),
(45, 'ENS007', '2', '1', 0, '', '', 'Ensiklopedia IPA Bumi', 'Interplus', 'Drajat', '2008', '', 1, '0000-00-00'),
(46, 'ENS008', '2', '1', 0, '', '', 'Ensiklopedia IPA Penemuan', 'Interplus', 'Drajat', '2008', '', 1, '0000-00-00'),
(47, 'ENS009', '2', '1', 0, '', '', 'Ensiklopedia IPA', 'Interplus', 'Drajat ', '2008', '', 1, '0000-00-00'),
(48, 'UMUM001', '3', '11', 0, '', '', 'Kisah Teladan 25 Nabi', 'Interplus', 'Kisah Teladan 25 Nabi', '2008', '', 1, '0000-00-00'),
(49, 'UMUM002', '3', '11', 0, '', '', 'Tata Cara Sholat', 'Interplus', 'Tata Cara Sholat', '2008', '', 10, '0000-00-00'),
(50, 'FIKSI001', '4', '11', 0, '', '', 'Cerita Rakyat Nusantara', 'Interplus', 'Gibran Maulana', '2008', '', 2, '0000-00-00'),
(51, 'FIKSI002', '4', '11', 0, '', '', 'Kumpulan Kisah Abu Nawas ', 'CV. Pustaka Agung', 'Ika Negara', '2010', '', 2, '0000-00-00'),
(52, 'UMUM003', '3', '11', 0, '', '', 'Kisah Walisongo', 'Dua Media', 'MB. Rahimsyah', '2019', '', 1, '0000-00-00'),
(53, 'KAM001', '5', '1', 0, '', '', 'Kamus 3 Bahasa', 'Lingkar Media', 'M. Ilyas', '2019', '', 5, '0000-00-00'),
(54, 'FIKSI003', '4', '11', 0, '', '', 'Kumpulan Kisah Abu Nawas ', 'PAH', 'Tim Penulis Gemar Baca', '2019', '', 4, '0000-00-00'),
(55, 'UMUM004', '3', '11', 0, '', '', 'Kisah 25 Nabi dan Rasul', 'Dua Media ', 'Cecep Ihsani, S.Ag', '2011', '', 1, '0000-00-00'),
(56, 'FIKSI004', '4', '11', 0, '', '', 'Legenda Malin Kundang', 'Lingkar Media', 'Arya Satya Ika Negara', '2019', '', 1, '0000-00-00'),
(57, 'FIKSI005', '4', '11', 0, '', '', 'Kumpulan Cerita Rakyat ', 'Lingkar Media', 'Yustitie Angelia', '2019', '', 1, '0000-00-00'),
(58, 'UMUM005', '3', '11', 0, '', '', 'Buku Pintar Ibadah', 'Mutiara Ilmu', 'Syeikh Muhammad N', '2019', '', 1, '0000-00-00'),
(59, 'UMUM006', '3', '11', 0, '', '', 'Kisah Raden Patah ', 'Putra Bintoro', 'Ahmad Shodikin', '2019', '', 1, '0000-00-00'),
(60, 'UMUM007', '3', '11', 0, '', '', 'MC dan Pidato', 'Apollo Lestari', 'Bambang Maryanto', '2019', '', 1, '0000-00-00'),
(61, 'UMUM008', '3', '11', 0, '', '', 'Sifat Dua Puluh', 'S. Alaydrus', 'Awalludin', '2019', '', 1, '0000-00-00'),
(62, 'UMUM009', '3', '11', 0, '', '', 'Menjadi Kalimat Syahadat', 'Tiga Ananda', 'Nurul Ikoma', '2019', '', 1, '0000-00-00'),
(63, 'UMUM010', '3', '11', 0, '', '', 'Implementasi Program', 'Mughni Sejahtera', 'Prof. Dr. H. Nursid S', '2005', '', 1, '0000-00-00'),
(64, 'UMUM011', '3', '11', 0, '', '', 'Buku Pintar dan Atlas', 'Lingkar Media', 'Yudistira I', '2010', '', 1, '0000-00-00'),
(65, 'PPKN007', '1', '7', 0, '', '', 'PPKn kelas VII', 'Kurikulum 2013', 'Lukman Surya S, dkk', '2017', '', 32, '0000-00-00'),
(66, 'IPA007', '1', '5', 0, '', '', 'IPA kelas VII smt 1', 'Kurikulum 2013', 'Wahono Widodo, dkk', '2017', '', 15, '0000-00-00'),
(67, 'INGG007', '1', '5', 0, '', '', 'B. Inggris kelas VII', 'Kurikulum 2013', 'Siti Wachidah, dkk', '2017', '', 11, '0000-00-00'),
(68, 'SB007', '1', '9', 0, '', '', 'Seni Budaya kelas VII', 'Kurikulum 2013', 'Eko Purnomo, dkk', '2017', '', 5, '0000-00-00'),
(69, 'PAI009', '1', '3', 0, '', '', 'PAI kelas IX', 'Kurikulum 2013', 'Muhammad Ahsan, dkk', '2018', '', 91, '0000-00-00'),
(70, 'IPA009', '1', '3', 0, '', '', 'IPA kelas IX smt 2', 'Kurikulum 2013', 'Siti Zubaidah, dkk', '2018', '', 91, '0000-00-00'),
(71, 'IPS009', '1', '3', 0, '', '', 'IPS kelas IX ', 'Kurikulum 2013', 'Iwan Setiawan, dkk', '2018', '', 91, '0000-00-00'),
(72, 'GPAI009', '1', '12', 0, '', '', 'Buku Guru PAI kelas IX', 'Kurikulum 2013', 'Muhammad Ahsan, dkk', '2018', '', 1, '0000-00-00'),
(73, 'GPPKN009', '1', '12', 0, '', '', 'Buku Guru PPKn kelas IX', 'Kurikulum 2013', 'Lukman Surya S, dkk', '2018', '', 1, '0000-00-00'),
(74, 'GINDO009', '1', '12', 0, '', '', 'Buku Guru B. Indonesia kelas IX', 'Kurikulum 2013', 'Agus Trianto, dkk', '2018', '', 1, '0000-00-00'),
(75, 'GSB009', '1', '12', 0, '', '', 'Buku Guru Seni Budaya kelas IX', 'Kurikulum 2013', 'Milasari, dkk', '2018', '', 1, '0000-00-00'),
(76, 'GMTK009', '1', '12', 0, '', '', 'Buku Guru MTK kelas IX', 'Kurikulum 2013', 'Subchan', '2018', '', 1, '0000-00-00'),
(77, 'GIPA009', '1', '12', 0, '', '', 'Buku Guru IPA kelas IX', 'Kurikulum 2013', 'Siti Zubaidah, dkk', '2018', '', 1, '0000-00-00'),
(78, 'GIPS009', '1', '12', 0, '', '', 'Buku Guru IPS kelas IX', 'Kurikulum 2013', 'Iwan Setiawan, dkk', '2018', '', 1, '0000-00-00'),
(79, 'GINGG009', '1', '12', 0, '', '', 'Buku Guru B. Inggris kelas IX', 'Kurikulum 2013', 'Siti Wachidah, dkk', '2018', '', 1, '0000-00-00'),
(80, 'GPJOK009', '1', '12', 0, '', '', 'Buku Guru PJOK kelas IX', 'Kurikulum 2013', 'Suherman', '2018', '', 1, '0000-00-00'),
(81, 'SB009', '1', '3', 0, '', '', 'Seni Budaya kelas IX', 'Kurikulum 2013', 'Milasari, dkk', '2018', '', 30, '0000-00-00'),
(82, 'IPA009', '1', '3', 0, '', '', 'IPA smt 1 kelas IX', 'Kurikulum 2013', 'Siti Zubaidah, dkk', '2018', '', 91, '0000-00-00'),
(83, 'IPA007', '1', '5', 0, '', '', 'IPA smt 2 kelas VII', 'Kurikulum 2013', 'Wahono Widodo, dkk', '2017', '', 32, '0000-00-00'),
(84, 'INDO009', '1', '3', 0, '', '', 'B. Indonesia kelas IX', 'Kurikulum 2013', 'Agus Trianto, dkk', '2018', '', 91, '0000-00-00'),
(85, 'MTK009', '1', '3', 0, '', '', 'Matematika kelas IX', 'Kurikulum 2013', 'Subchan, dkk', '2018', '', 91, '0000-00-00'),
(86, 'INGG009', '1', '3', 0, '', '', 'B. Inggris kelas IX', 'Kurikulum 2013', 'Siti Wachidah, dkk', '2018', '', 91, '0000-00-00'),
(87, 'PPKN009', '1', '3', 0, '', '', 'PPKn kelas IX', 'Kurikulum 2013', 'Ai tin Sumartini', '2018', '', 91, '0000-00-00'),
(88, 'INGG007', '1', '5', 0, '', '', 'B. Inggris kelas VII', 'Kurikulum 2013', 'Siti Wachidah, dkk', '2018', '', 21, '0000-00-00'),
(89, 'SB007', '1', '9', 0, '', '', 'Seni Budaya kelas VII', 'Kurikulum 2013', 'Eko Purnomo, dkk', '2017', '', 15, '0000-00-00'),
(90, 'INDO007', '1', '5', 0, '', '', 'B. Indonesia kelas VII', 'Kurikulum 2013', 'Titik Harsiati, dkk', '2017', '', 32, '0000-00-00'),
(91, 'FIKSI006', '4', '11', 0, '', '', 'Seribu Asa dari Negeri Sakura ', 'Kurikulum 2013', 'Junaidi W Tarmuloe', '2015', '', 1, '0000-00-00'),
(92, 'UMUM012', '3', '11', 0, '', '', 'Toponomi Kabupaten Tegal', 'Kurikulum 2013', 'Bidang Kebudayaan', '2018', '', 1, '0000-00-00'),
(93, 'UMUM013', '3', '11', 0, '', '', 'Toponomi Kabupaten Tegal', 'Kurikulum 2013', 'Bidang Kebudayaan', '2018', '', 1, '0000-00-00'),
(94, 'UMUM014', '3', '11', 0, '', '', 'Kenali Sejarah Kabupaten Tegal', 'Kurikulum 2013', 'Bidang Kebudayaan', '2018', '', 1, '0000-00-00'),
(95, 'UMUM015', '3', '11', 0, '', '', 'Mengenal Naskah Rambang', 'Kurikulum 2013', 'Prof. Dr. Singgih T. S.M.Hum', '2015', '', 1, '0000-00-00'),
(96, 'UMUM016', '3', '11', 0, '', '', 'Pengkajian Terjemahan', 'Kurikulum 2013', 'Dr. Yeti M.Si', '2015', '', 1, '0000-00-00'),
(97, 'IPA007', '1', '5', 0, '', '', 'IPA smt 1 kelas VII', 'Kurikulum 2013', 'Wahono Widodo, dkk', '2017', '', 17, '0000-00-00'),
(98, 'PAI007', '1', '8', 0, '', '', 'PAI kelas VII', 'Kurikulum 2013', 'Muhamad Ahsan, dkk', '2017', '', 32, '0000-00-00'),
(99, 'PJOK009', '1', '3', 0, '', '', 'PJOK kelas IX', 'Kurikulum 2013', 'Suherman', '2018', '', 30, '0000-00-00'),
(100, 'MTK007', '1', '6', 0, '', '', 'Matematika smt 1 kelas VII', 'Kurikulum 2013', 'Abdurrahman A, dkk', '2017', '', 20, '0000-00-00'),
(101, 'IPS007', '1', '3', 0, '', '', 'IPS kelas VII', 'Kurikulum 2013', 'Iwan Setiawan dkk', '2017', '', 32, '0000-00-00'),
(102, 'JAWA008', '1', '6', 0, '', '', 'Padha Bisa B. Jawa kelas VIII', 'Kurikulum 2013', 'Sudi Yatmana', '2016', '', 98, '2044-07-09'),
(103, 'UMUM050', '3', '1', 0, '', '', 'Arca Hindu', 'Dinas Kebudayaan', 'Laela Nurhayati, dkk', '2014', '', 1, '2044-07-09'),
(104, 'UMUM051', '3', '1', 0, '', '', 'Arca Buddha', 'Dinas Kebudayaan', 'Dra. Ufi Saraswati, dkk', '2015', '', 1, '2044-07-09'),
(105, 'PBO001', '1', '10', 0, '', '', 'Pemrograman Berorientasi Objek', 'Kurikulum 2013', 'Susanti Ning Astuti', '2020', '', 21, '2044-01-02'),
(106, 'ANIMASI001', '1', '10', 0, '', '', 'Animasi 2D dan 3D', 'Kurikulum 2013', 'Siswati, dkk', '2020', '', 12, '2044-01-06'),
(107, 'BD001', '1', '10', 0, '', '', 'Basis Data', 'Kurikulum 2013', 'Rudi Nurcahyono, S.Kom.', '2019', '', 18, '2044-01-06'),
(108, 'DDP001', '1', '10', 0, '', '', 'Desain Grafis Percetakan', 'Kurikulum 2013', 'Emiliana Santy S., dkk', '2020', '', 14, '2044-01-06'),
(109, 'PPL001', '1', '10', 0, '', '', 'Pemodelan Perangkat Lunak', 'Kurikulum 2013', 'Abdul Munif S.Pd., S.ST.', '2019', '', 19, '2044-01-06'),
(110, 'PAIBP010', '1', '10', 0, '', '', 'Pendidikan Agama Islam dan Budi Pekerti Kelas X', 'Kurikulum 2013', 'Nur Hasaniyah, S.Ag., M.A.', '2019', '', 60, '0000-00-00'),
(111, 'SINDO010', '1', '10', 0, '', '', 'Sejarah Indonesia Kelas X', 'Kurikulum 2013 Revisi', 'Nico Thamlend R.', '2019', '', 60, '0000-00-00'),
(112, 'SB010', '1', '10', 0, '', '', 'Seni Budaya Kelas X', 'Kurikulum 2013 Revisi', 'Rika Indrawati dan Kan Sur', '2020', '', 60, '0000-00-00'),
(113, 'PAIBP011', '1', '10', 0, '', '', 'Pendidikan Agama Islam dan Budi Pekerti Kelas XI', 'Kurikulum 2013 Revisi', 'Nur Hasaniyah, S.Ag., M.A.', '2020', '', 60, '0000-00-00'),
(114, 'PAIBP012', '1', '10', 0, '', '', 'Pendidikan Agama Islam dan Budi Pekerti Kelas XII', 'Kurikulum 2013 Revisi', 'Nur Hasaniyah, S.Ag., M.A.', '2020', '', 60, '0000-00-00'),
(115, 'INDO010', '1', '10', 0, '', '', 'Bahasa Indonesia Kelas X', 'Kurikulum 2013 Revisi', 'Suherli, dkk', '2018', '', 50, '0000-00-00'),
(116, 'INDO012', '1', '10', 0, '', '', 'Bahasa Indonesia Kelas XII', 'Kurikulum 2013 Revisi', 'Maman Suryaman, dkk', '2018', '', 50, '0000-00-00'),
(117, 'CCINDO010', '1', '10', 0, '', '', 'Cerdas Cergas Berbahasa dan Bersastra Indonesia Kelas X', 'Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi', 'Fadillah Tri Aulia dan Sefi Indra Gumilar', '2021', '', 33, '0000-00-00'),
(118, 'PPKN010', '1', '10', 0, '', '', 'Pendidikan Pancasila dan Kewarganegaraan Kelas X', 'Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi', 'Abdul Waidl, dkk', '2021', '', 33, '0000-00-00'),
(119, 'MTK010', '1', '10', 0, '', '', 'Matematika Kelas X', 'Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi', 'Dicky Susanto, dkk', '2021', '', 33, '0000-00-00'),
(120, 'SEJ010', '1', '10', 0, '', '', 'Sejarah Kelas X', 'Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi', 'Sari Oktafiana', '2021', '', 33, '0000-00-00'),
(121, 'SPPPKN010', '1', '10', 0, '', '', 'SPLASH PPKn Kelas X', 'Yudhistira', 'Dwi Winarno', '2022', '', 26, '0000-00-00'),
(122, 'SPINGG010', '1', '10', 0, '', '', 'SPLASH Bahasa Inggris Kelas X', 'Yudhistira', 'Priyono Darmanto dan Kenneth W. Ament', '2022', '', 25, '0000-00-00'),
(123, 'SPINDO010', '1', '10', 0, '', '', 'SPLASH Bahasa Indonesia Kelas X', 'Yudhistira', 'Irma Agustinalia', '2022', '', 26, '0000-00-00'),
(124, 'SPMTK010', '1', '10', 0, '', '', 'SPLASH Matematika Kelas X', 'Yudhistira', 'Priyanto', '2022', '', 26, '0000-00-00'),
(125, 'KIM010', '1', '10', 0, '', '', 'Kimia Kelas X', 'Yudhistira', 'Sudono', '2021', '', 33, '0000-00-00'),
(126, 'FIS010', '1', '10', 0, '', '', 'Fisika Kelas X', 'Yudhistira', 'Sutejo', '2021', '', 33, '0000-00-00'),
(127, 'PJOK010', '1', '10', 0, '', '', 'Penjasorkes Kelas X', 'Yudhistira', 'Agus Mukholid', '2020', '', 33, '0000-00-00'),
(128, 'PPKN011', '1', '10', 0, '', '', 'PPKn Kelas XI', 'Yudhistira', 'Nur Wahyu Rochmadi dan Siti Hanifah', '2021', '', 33, '0000-00-00'),
(129, 'INGG011', '1', '10', 0, '', '', 'English For 2 Kelas XI', 'Yudhistira', 'Lanny Kurniawan dan Kenneth W. Ament', '2019', '', 33, '0000-00-00'),
(130, 'MTKNT011', '1', '10', 0, '', '', 'Matematika Non Teknik Kelas XI', 'Yudhistira', 'S. N. Sharma, dkk', '2021', '', 33, '0000-00-00'),
(131, 'PKWU011', '1', '10', 0, '', '', 'Produk Kreatif & Kewirausahaan Pariwisata Kelas XI ', 'Yudhistira', 'Dody Kusmana', '2021', '', 33, '0000-00-00'),
(132, 'PKWU012', '1', '10', 0, '', '', 'Produk Kreatif & Kewirausahaan Kelas XII', 'Yudhistira', 'Dody Kusmana', '2021', '', 20, '0000-00-00'),
(133, 'PPKN012', '1', '10', 0, '', '', 'PPKn Kelas XII', 'Yudhistira', 'Nur Wahyu Rochmadi dan Tuti Tresnawati', '2020', '', 20, '0000-00-00'),
(134, 'INGG012', '1', '10', 0, '', '', 'English For 3 Kelas XII', 'Yudhistira', 'Lanny Kurniawan', '2021', '', 20, '0000-00-00'),
(135, 'MTKNT012', '1', '10', 0, '', '', 'Matematika Non Teknik Kelas XII', 'Yudhistira', 'S. N. Sharma, dkk', '2019', '', 20, '0000-00-00'),
(136, 'PKWU010', '1', '10', 0, '', '', 'Produk Kreatif & Kewirausahaan Kelas X', 'Yudhistira', 'Dody Kusmana', '2019', '', 20, '0000-00-00'),
(137, 'UMUM017', '3', '11', 0, '979-672-857-5', '', 'Berternak Ayam arab', 'KANISIUS', 'Bangun Triharyanto', '2001', '', 1, '0000-00-00'),
(138, 'UMUM018', '3', '11', 0, '978-979-29-2799-3', '', 'Sukses Melawak', 'ANDI Yogyagkarta', 'Tri Adi  Suwarko', '2010', '', 1, '0000-00-00'),
(139, 'UMUM019', '3', '11', 0, '', '', 'Buku Pintar Ibadah', 'Mutiara ilmu', 'Syaikh Muhammad Nawawi', '2012', '', 1, '0000-00-00'),
(140, 'UMUM020', '3', '11', 0, '978-602-365-012-5', '', 'Kisah teladan 25 nabi dan rasul', 'Lingkar Media', 'MB.Rahimsyah.AR', '0000', '', 2, '0000-00-00'),
(141, 'UMUM021', '3', '11', 0, '978-602-7881-26-6', '', 'Agnes Monica', 'Buku Pintar', 'Yani Sufriyani', '2013', '', 1, '0000-00-00'),
(142, 'UMUM022', '3', '11', 0, '398.209 598 1', '', 'Asal Nama Desa Taba Padang', 'Badan Pengembangan dan Pembinaan Bahasa', 'Hellen Astria', '2017', '', 2, '0000-00-00'),
(143, 'FIKSI007', '4', '11', 0, '978-602-437-370-2', '', 'Danau Raja Dan Putri Bunga', 'Badan Pengembangan dan Pembinaan Bahasa', 'Ahmad Ijazi', '2017', '', 2, '0000-00-00'),
(144, 'UMUM023', '3', '11', 0, '979-3259-03-5', '', 'Menggapai Langit Masa Depan Anak', 'Dr.Ali Qaimi', 'CAHAYA', '0000', '', 0, '0000-00-00'),
(145, 'UMUM024', '3', '11', 0, '978-602-19639-1-3', '', 'berbisnis dengan iman ', 'Anang sujana', 'ONBLOSS', '2012', '', 1, '0000-00-00'),
(146, 'UMUM025', '3', '11', 0, '979-97806-36-2', '', 'Pengantar Filsafat dakwah', 'Drs.Suisyanto,M.Pd', 'TERAS', '2006', '', 1, '0000-00-00'),
(147, 'UMUM026', '3', '11', 0, '978-602-97484-4-4', '', 'peristiwa penting dalam kehidupan nabi muhammad', 'prof.Dr.Sayyid muhammad Al-Maliki', 'basan publishing', '2013', '', 1, '0000-00-00'),
(148, 'UMUM027', '3', '11', 0, '978-979-071-047-4', '', 'Pedoman Budidaya Ikan Gurami', 'Tim Karya Tani Mandiri', 'CV Nuansa Aulia', '2009', '', 1, '0000-00-00'),
(149, 'UMUM028', '3', '11', 0, '979-9742-12-9', '', 'Biografi Muhammad', 'Barnaby Rogerson', 'Diglossia', '2005', '', 1, '0000-00-00'),
(150, 'UMUM029', '3', '11', 0, '978-602-290-038-2', '', 'Merobek Sumatra', 'Fatris MF', 'Serambi Ilmu Semesta', '2015', '', 1, '0000-00-00'),
(151, 'UMUM030', '3', '12', 0, '978-602-99690-0-9', '', 'Tafsir Pembebasan', 'Ahmala Arifin, M.Ag', 'AURA pustaka', '2015', '', 1, '0000-00-00'),
(152, 'UMUM031', '3', '12', 0, '978-9792-4233-4-1', '', 'Agar Selalu DiTolong Allah', 'Hendra Setiawan', 'JABAL', '2020', '', 1, '0000-00-00'),
(153, 'FIKSI008', '4', '12', 0, '978-602-03-2478-4', '', 'Hujan', 'PT. Gramedia Pustaka Utama', 'Tere Liye', '2016', '', 1, '0000-00-00'),
(154, 'UMUM032', '3', '12', 0, '', '', 'Biografi Ali Bin Abu Thalib RA.', 'Aulia', 'Achmad Sunarto', '2015', '', 1, '0000-00-00'),
(155, 'UMUM033', '3', '12', 0, '', '', 'Ornamen Mantengan', 'Dinas Kebudayaan dan Pariwisata', 'Dra. Siti Maziyah', '2015', '', 1, '0000-00-00'),
(156, 'FIKSI009', '4', '12', 0, '', '', 'Cerita Rakyat Nusantara 33 Provinsi', 'Serba Jaya Surabaya', 'MB.Rahimsyah.AR', '0000', '', 1, '0000-00-00'),
(157, 'UMUM034', '3', '12', 0, '979-692-932-5', '', 'Filsafat Bahasa dan Pendidikan', 'PT Remaja Rosdakarya', 'Prof.Dr.A. Chaedar Alwasilah', '2008', '', 1, '0000-00-00'),
(158, 'UMUM035', '3', '12', 0, '979-321-026-5', '', 'Zikir Berjamaah Sunnah Atau Bi\'ah', 'Republika', 'K.H. Ahmad Dimyathi Badruzzaman, M.A', '0000', '', 1, '0000-00-00'),
(159, 'FIKSI010', '4', '12', 0, '979-360-402-6', '', 'Ayat-Ayat Cinta', 'Republika', 'Habiburrahman El Shirazi', '2008', '', 1, '0000-00-00'),
(160, 'UMUM036', '3', '12', 0, '602-98471-9-8', '', 'Hidup di Empat Alam', 'Basmallah', 'Muslim Nurdin', '2011', '', 1, '0000-00-00'),
(161, 'UMUM037', '3', '12', 0, '602-218-903-9', '', 'Anakku dengarlah Nasehatku ini', 'Bintang Indonesia', 'S. TABRANI', '2011', '', 1, '0000-00-00'),
(162, 'FIKSI011', '4', '12', 0, '', '', 'JILBAB', 'Espe Press ', 'Mullhandy Ibn. Haj', '1998', '', 1, '0000-00-00'),
(163, 'FIKSI012', '4', '12', 0, '978-979-22-5376-4', '', 'Spring in London', 'PT Gramedia Pustaka Utama', 'Ilana Tan', '2010', '', 1, '0000-00-00'),
(164, 'UMUM038', '3', '12', 0, '978-602-455-392-0', '', 'Bicara Itu Ada Seninya', 'Bhuana Ilmu Populer', 'Oh Su Hyang', '2016', '', 1, '0000-00-00'),
(165, 'UMUM039', '3', '12', 0, '', '', 'Arca Hindu Koleksi Museum Jawa Tengah', 'Dinas Kebudayaan dan Pariwisata', 'Susilo Widodo, dkk', '2014', '', 1, '0000-00-00'),
(166, 'UMUM040', '3', '12', 0, '978 602 8517 18-8', '', 'Kawruh Basa Jawa', 'Widya Karya', 'Sugeng Haryo Raharjo', '2018', '', 1, '0000-00-00'),
(167, 'UMUM041', '3', '12', 0, ' 978-602-7602-48-9', '', 'Khasiat&Keajaiban Air Putih', 'Dunia Sehat', 'Koko Handoyo', '2014', '', 1, '0000-00-00'),
(168, 'UMUM042', '3', '12', 0, ' 602-289-527-8', '', 'Komunikasi Kelompok', 'Alfabeta', 'Dr.Ir. Ajat Jatnika, M.Sc', '2019', '', 1, '0000-00-00'),
(169, 'UMUM043', '3', '12', 0, '', '', 'Kita Beribadah Hanya Kepada Allah', 'Tebar Buku Dakwah Anak', 'Nasser ibn Najam', '2018', '', 1, '0000-00-00'),
(170, 'FIKSI013', '4', '12', 0, '978-602-437-036-7', '', 'legenda putri cermin cina', 'badan pengembangan dan pembinaan bahasa', 'ilsa dewita putri soraya', '2017', '', 1, '0000-00-00'),
(171, 'FIKSI014', '4', '12', 0, '978-602-9172-29-4', '', 'cahaya untuk bonar', 'balai bahasa sumatera utara', 'rosintan hasibuan', '2017', '', 1, '0000-00-00'),
(172, 'UMUM044', '3', '12', 0, '978-602-437-257-6', '', 'jembatan ratapan ibu', 'badan Pengembangan dan Pembinaan Bahasa', 'zulfltra', '2017', '', 2, '0000-00-00'),
(173, 'UMUM045', '3', '12', 0, '978-979-063-900-3', '', 'dahsyatnya shalat sunah', 'zikrul hakim', 'ust.yusuf mansur', '2013', '', 1, '0000-00-00'),
(174, 'UMUM046', '3', '12', 0, '978-602-71893-2-4', '', 'santri manjawab keraguan vaksin', 'PT bio farma', '', '2016', '', 1, '0000-00-00'),
(175, 'UMUM047', '3', '12', 0, '979-8482-95-6', '', 'ilmu sharaf', 'anwar', 'kh moch anwar', '1996', '', 1, '0000-00-00'),
(176, 'UMUM048', '3', '12', 0, '978-602-18826-2-7', '', 'matahari kehidupan', 'santri press', 'H.M sulchan', '2012', '', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `kelas`, `gender`) VALUES
(1, 'AHMAD HALIMI', '235', 'X PPLG', 1),
(2, 'AKHMAD RAFLY HAKIM KEITIKAREN', '236', 'X PPLG', 1),
(3, 'ALFAN DWI PASHA MUZAQI', '237', 'X PPLG', 1),
(4, 'AMRINA ROSYADA', '238', 'X PPLG', 0),
(5, 'ANANDA FITRA KIRANA ANDJANI', '239', 'X PPLG', 0),
(6, 'AURA ELYSIA RAMADHANI', '240', 'X PPLG', 0),
(7, 'AURELYA AZAHWA PUTRI', '241', 'X PPLG', 0),
(8, 'AZRA AZQIYAH MAULIDDINA', '242', 'X PPLG', 0),
(9, 'EKA AYU OKTAVIANI', '243', 'X PPLG', 0),
(10, 'FIRDA MAULINA', '244', 'X PPLG', 0),
(11, 'HANI NUR SALSABILA', '245', 'X PPLG', 0),
(12, 'KALIA LAURA ANASTASYA', '246', 'X PPLG', 0),
(13, 'MUHAMMAD FAHMI AZIZ', '247', 'X PPLG', 1),
(14, 'MAULANA JAFAR SHIDIQ SANTOSO', '249', 'X PPLG', 1),
(15, 'MOHAMMAD FAHRI MUSTOFA', '250', 'X PPLG', 1),
(16, 'MUHAMMAD HAFIS ZULFI', '251', 'X PPLG', 1),
(17, 'NADIRA APRILIANI', '252', 'X PPLG', 0),
(18, 'RENATA NADA SALAWAH', '253', 'X PPLG', 0),
(19, 'RIRIN DWIANISA', '254', 'X PPLG', 0),
(20, 'RIZQI FATIH PRASETIYO', '256', 'X PPLG', 1),
(21, 'SALSABILA RAMADHANI', '258', 'X PPLG', 0),
(22, 'SATRIA NABIL ULINNUHA', '259', 'X PPLG', 1),
(23, 'SAFINA ZAKIYATUS ZAHRA', '260', 'X PPLG', 0),
(24, 'SHARLIZ MAHRIN MEHERUNNISA', '261', 'X PPLG', 0),
(25, 'SILFI NURAZIZATUNNISA', '262', 'X PPLG', 0),
(26, 'ZAHRA MAULIDATUL ATQIYA', '265', 'X PPLG', 0),
(27, 'ZHARIFAH RANA RAHMAWATI', '266', 'X PPLG', 0),
(28, 'RAYHAN SOPHIAN NUGROHO', '295', 'X PPLG', 1),
(29, 'ABDILLAH ZIRMA AFFAN', '267', 'X DKV', 1),
(30, 'AKHMAD ABAY FAIRUZ', '268', 'X DKV', 1),
(31, 'ANIS FAUZIYAH', '269', 'X DKV', 0),
(32, 'ARYO NARENDRA', '270', 'X DKV', 1),
(33, 'ASYELIA ZAHRA RAMADHON', '271', 'X DKV', 0),
(34, 'AZKIA RAMADANI', '272', 'X DKV', 0),
(35, 'DINDA NERVITYA ASHYARI', '274', 'X DKV', 0),
(36, 'FUJI KURNIAWAN', '275', 'X DKV', 1),
(37, 'KAYLA AMARA QURROTU\'AIN', '276', 'X DKV', 0),
(38, 'KESYA AULIA SALSABILA', '277', 'X DKV', 0),
(39, 'KHAFIED AL FAKHRIE', '278', 'X DKV', 1),
(40, 'LENI NUR CHAFIFAH', '279', 'X DKV', 0),
(41, 'LUTFIANA DEWI', '280', 'X DKV', 0),
(42, 'M. TAKMILUL ILMI', '281', 'X DKV', 1),
(43, 'MARSEL SETIAWAN', '282', 'X DKV', 1),
(44, 'MEDINA NINDYA WIYANTO', '283', 'X DKV', 0),
(45, 'MUHAMMAD ILHAM', '284', 'X DKV', 1),
(46, 'PANDU DWI ASMARA', '287', 'X DKV', 1),
(47, 'RINDIKA NAZWA DWI FEBRIYANTI', '288', 'X DKV', 0),
(48, 'TYA FEBRIYANA', '290', 'X DKV', 0),
(49, 'ZASKIA ADZRA HUSNIYAH', '292', 'X DKV', 0),
(50, 'RAHMA DWI AULIA', '293', 'X DKV', 0),
(51, 'AHMAD MUSYAFA', '294', 'X DKV', 1),
(52, 'ADINDA HESTI RAMADHANI', '109', 'XII PPLG', 0),
(53, 'AKH. FADHILAH AKBAR', '111', 'XII PPLG', 1),
(54, 'AKHMAD DWI FATIAN FIKRI', '112', 'XII PPLG', 1),
(55, 'FADIL ARIETA FIRMANSYAH', '121', 'XII PPLG', 1),
(56, 'ILHAM NAJMU ZAMAN', '124', 'XII PPLG', 1),
(57, 'KHILMI RISA LATULAILI', '125', 'XII PPLG', 1),
(58, 'MUCH. NUR REVOLUSI DIKTI', '130', 'XII PPLG', 1),
(59, 'MUHAMMAD ARIF HIDAYAT', '135', 'XII PPLG', 1),
(60, 'MUZDALIFAH', '136', 'XII PPLG', 0),
(61, 'NADYN AULYA PUTRI', '137 ', 'XII PPLG', 0),
(62, 'NAISYA WAHYU MAGHRIBAH', '158', 'XII PPLG', 0),
(63, 'NAJIB SYAUQI ZAIDAN', '139', 'XII PPLG', 1),
(64, 'NANDYA AYU SALSABILA', '140', 'XII PPLG', 0),
(65, 'NITA SETIANINGSIH', '143', 'XII PPLG', 0),
(66, 'RENDI AHMAD ALI', '147', 'XII PPLG', 1),
(67, 'SABILATUL KARIMAH', '149', 'XII PPLG', 0),
(68, 'SALMAN ALFARISI', '150', 'XII PPLG', 1),
(69, 'SAZKIA NUR AENI', '151', 'XII PPLG', 0),
(70, 'ZHILAN ANSADILA SAVANAH', '156', 'XII PPLG', 1),
(71, 'DEFI AZZAHRA SEPTI PRATIWI', '159', 'XII PPLG', 0),
(72, 'ADINDA LINTANG ISYATI', '109', 'XII DKV', 0),
(73, 'AHMAD DENIS ZIDNI', '112', 'XII DKV', 1),
(74, 'ANINDYA BATARI PUTRI', '115', 'XII DKV', 0),
(75, 'DESI WULAN APITA', '118', 'XII DKV', 0),
(76, 'DITA AYU PURWANTI', '119', 'XII DKV', 0),
(77, 'ESA ALI PERTIWI', '120', 'XII DKV', 0),
(78, 'HAWA HERLINDA AGUSTIN', '122', 'XII DKV', 0),
(79, 'HUMAM MAJID AQIL', '123', 'XII DKV', 1),
(80, 'M. HIDAYAT RIZKY', '127', 'XII DKV', 1),
(81, 'M. ZHAVA AMBIYA', '129', 'XII DKV', 1),
(82, 'MUHAMAD KHAYATUL AKBAR', '132', 'XII DKV', 1),
(83, 'MUH.FATIKHUL BIRRI', '131', 'XII DKV', 1),
(84, 'MUHAMAD KHOERUL ALWAN', '133', 'XII DKV', 1),
(85, 'NAILATUN NADZIFAH', '138', 'XII DKV', 0),
(86, 'NESA SANTIKA PUTRI', '141', 'XII DKV', 0),
(87, 'NIDYA POETRI NABILA', '142', 'XII DKV', 0),
(88, 'PUTRA AZIDNA MOOVIC', '145', 'XII DKV', 1),
(89, 'REZA ABDUL AZIZ', '148', 'XII DKV', 1),
(90, 'UMMI FADHILAH', '155', 'XII DKV', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
