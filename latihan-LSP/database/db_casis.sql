-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2022 pada 05.04
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_casis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `password`) VALUES
(14, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_casis`
--

CREATE TABLE `tbl_casis` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `ttl` varchar(250) NOT NULL,
  `tgllahir` varchar(250) NOT NULL,
  `wn` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `hp` varchar(250) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `ayah` varchar(250) NOT NULL,
  `ibu` varchar(250) NOT NULL,
  `penghasilan` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_casis`
--

INSERT INTO `tbl_casis` (`id`, `nama`, `ttl`, `tgllahir`, `wn`, `alamat`, `email`, `hp`, `asal`, `ayah`, `ibu`, `penghasilan`, `foto`) VALUES
(24, 'akil  m', 'bogor', '2021-12-29', 'Indonesia', 'cilebut', 'ndhfazhr@gmail.com', '089536516692', 'Smpn 1 Bojong Gedo', 'tatang', 'tuto', '10.000.000', '62048b999d64f.jpg'),
(27, 'akil  m', 'bogor', '2022-01-20', 'Indonesia', 'cilebut', 'ndhfazhr@gmail.com', '089536516692', 'Smpn 1 lewi', 'tatang', 'tatang', '7.000.000', '61f16c72aade4.jpeg'),
(28, 'dipsi', 'bogor', '2022-01-13', 'Indonesia', 'cilebut', 'ndhfazhr@gmail.com', '089536516692', 'Smpn 1 Bojong Gede', 'tatang', 'tuti', '100.000', '61f16c7db10c8.jpg'),
(29, 'tatang', 'bogor', '2022-02-04', 'Indonesia', 'cilebut', 'ndhfazhr@gmail.com', '089536516692', 'Smpn 1 lewi', 'teteng', 'nanang', '5.000.000', '61f16cf98150d.png'),
(30, 'faried', 'bogor', '2022-02-01', 'Indonesia', 'dramaga', 'faried@gmail.com', '0895365352432', 'Smpn 11 bogor', 'dadang', 'nanang', '14.000.000', '62048c265351f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_casis`
--
ALTER TABLE `tbl_casis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_casis`
--
ALTER TABLE `tbl_casis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
