-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2020 pada 15.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `email`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(4, 'galihnabil02@gmail.com', 'Reza Habibi', 'Jl Bunga No.30', '2019-12-02 20:38:39', '2019-12-03 20:38:39'),
(35, 'fahmiagaaditya@gmail.com', 'Achmad Fariz', 'Jl. Baru No.3', '2019-12-05 14:51:56', '2019-12-06 14:51:56'),
(36, 'fahmiagaaditya@gmail.com', 'Achmad Fariz', 'Jl. Baru No.3', '2019-12-24 17:31:28', '2019-12-25 17:31:28'),
(37, 'fahmiagaaditya@gmail.com', 'Achmad Fariz', 'Jl Bunga No.39, medan', '2020-03-02 09:24:07', '2020-03-03 09:24:07'),
(38, 'fahmiagaaditya@gmail.com', 'Achmad Fariz', 'jln. Pinus no.45', '2020-03-02 10:56:27', '2020-03-03 10:56:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stock` int(128) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `harga` int(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `nama`, `jenis`, `gender`, `stock`, `ukuran`, `harga`, `gambar`, `gambar2`) VALUES
(1, 'Kemeja Atasan Wanita Panjang', 'Kemeja', 'Perempuan', 100, 'M', 60000, '42d4f781e99ed438963aa138f2381fdb.jpg', 'images_(2).jpg'),
(2, 'Billabong Yellow Shirt', 'Kaos', 'Laki-laki', 100, 'S', 300000, '11677788_fpx1.jpg', '11677788_fpx.jpg'),
(3, 'Jaket Cotton Polos', 'Jacket', 'Perempuan', 80, 'S', 150000, 'JAKET_CARDINAL_CEWEK.jpg', '337020_3e4d0cb4-60dd-4b95-9cfb-06ad194dc61a.jpg'),
(4, 'Jaket Kupluk putih', 'Jacket', 'Laki-laki', 20, 'S', 200000, 'a.jpg', '1214610856.g_0-w_g.jpg'),
(5, 'Black Bird', 'Kaos', 'Laki-laki', 100, 'S', 100000, 'b.jpg', 'back.jpg'),
(6, 'Kemeja Pria', 'Kemeja', 'Laki-laki', 100, 'S', 150000, 'desain-baju-kemeja-pria-lengan-panjang-terbaru-3_(1).jpg', 'desain-baju-kemeja-pria-lengan-panjang-terbaru-3.jpg'),
(7, 'Kaos Wanita ', 'Kaos', 'Perempuan', 80, 'S', 70000, 'aa808aa4dd32f7a4fb3bb7fb7efba713.jpg', 'ec1fd95cabcb25c3e50d4dac0133dc44.jpg'),
(8, 'Kemeja Lengan Panjang Motif Cantik', 'Kemeja', 'Perempuan', 100, 'M', 150000, 'd085083d766bd9e678abb8bb8c0a8385.jpg', 'aa.jpg'),
(9, 'Sweater Putih Tebal', 'Jacket', 'Perempuan', 10, 'M', 150000, '1d1177599215afcda53a4d3d5406bb67.jpg', '7e2e4b2e5e4d51e396459d1a54fc622d.jpg'),
(10, 'Kemeja Atasan Wanita Corak keren', 'Kemeja', 'Perempuan', 50, 'M', 60000, '5f70180be13145fa5fb09426cb1f7971.jpg', 'c1312f561b68052d0dfb2a65f1ff20e6.jpg'),
(11, 'Kemeja Panjang Wanita Dingin', 'Kemeja', 'Perempuan', 100, 'M', 60000, '6f13ae68b6d4788a632815549dcd3805.jpg', 'd36d2eeb1d37e4a1fd8e1a990ab72522.jpg'),
(12, 'Kaos Pink Wanita', 'Kaos', 'Perempuan', 80, 'S', 50000, '57a4d77a7f96f510c2242c84e4f563f4.jpg', '5095109_5e2ba828-82fa-4c3b-8c17-11fe1bbc1d5d_1080_1080.jpg'),
(13, 'Jaket Musim Dingin Kulit', 'Jacket', 'Perempuan', 20, 'M', 500000, '4415f629585851d3dedf8bba55802cc9.jpg', 'Jaket-kulit-wanita-gcw18-mocca.jpg'),
(14, 'Sweater Hodie Wanita', 'Jacket', 'Perempuan', 80, 'M', 200000, '49129c9722548ac8622b6e5066356c3b.jpg', '13637242_8d98516d-8376-40ff-8987-5d1da926fd17_800_800.jpg'),
(15, 'Kemeja Pria Dragon ', 'Kemeja', 'Laki-laki', 50, 'S', 100000, '67782d637e5269f7c6b164e25b68d0a4.jpg', 'Baju_Kemeja_Pria_Dragon_X_Black__Kemeja_Cowok_Corak_Dan_mode.jpg'),
(16, 'Kemeja Kerja Pria', 'Kemeja', 'Laki-laki', 80, 'S', 80000, '240277_216a3436-e489-4746-9dcc-0f8221b0a145.jpg', 'kemeja_abu_motif_putih.jpg'),
(17, 'Kemeja Kerja Pria Motif Simpel', 'Kemeja', 'Laki-laki', 80, 'L', 80000, '4337227_808b84d3-5abd-4aec-93b5-61e46e534b7a.jpg', 'Alonzo_abu_kemeja_pria_katun_stretch.jpg'),
(18, 'Jaket Varsity Night Black', 'Jacket', 'Laki-laki', 20, 'S', 450000, '11211932_B.jpg', 'JAKET_VARSITY_NIGHT_BLACK__SK_34_.jpg'),
(19, 'Kaos Oblong Pria', 'Kaos', 'Laki-laki', 80, 'XL', 50000, '47166891_11fd227a-4a05-43ab-97fb-797cc9cd34e4_975_1200.jpg', 'KAOS_PHILLIP_PLEIN_P.jpg'),
(20, 'Baju Panjang Wanita Warni', 'Kemeja', 'Perempuan', 80, 'M', 150000, 'Baju-wanita-murah-KMJ04.jpg', 'c27e082d303746c5ade6ba1099bfea7f.jpg'),
(21, 'Kaos Sayyidina Umar Bin Khattab', 'Kaos', 'Laki-Laki', 20, 'M', 150000, '3c95a18cac1895f5778578658c647657.jpg', 'de7775899c79077e2fc0ef6a09f7bf24.jpg'),
(22, 'Jaket Pria Musim Dingin', 'Kemeja', 'Laki-laki', 50, 'M', 1000000, 'Highlight_jenis-macam-model-koleksi-jaket-pria-cowok-trendy-fashionable-terbaru-branded_11.jpg', 'murah_Jaket_Pria_keren_Kece_baday_berkualitas.jpg'),
(23, 'Kaos Wanita Musim Panas', 'Kaos', 'Perempuan', 3, 'S', 10000, 'hitam-seksi-musim-panas-lengan-pendek-t-shirt-jahe-kuning-0152-07222364-2824742a65e59840f3c5827d79afdac3-product.jpg', 'versi-korea-dari-katun-pullover-slim-t-shirt-bottoming-kemeja-kuning-leher-0830-60822564-46811ae1ea8675b26027ca9a973fbfff-produc'),
(24, 'Jaket Motor Pria Terlaris', 'Jacket', 'Laki-laki', 80, 'M', 250000, 'Jaket_Pria_Terbaru_Terlaris_.jpg', 'murah_Jaket_Pria_keren_Kece_baday_berkualitas.jpg'),
(25, 'Kemeja Polo Country Original', 'Kemeja', 'Laki-laki', 80, 'M', 400000, 'magentaroom-polo-country-kemeja-pria-lengan-panjang-biru.jpg', 'POLO_COUNTRY_C27_12_Original_Kemeja_Pria_Polos_Panjang_Abu_T.jpg'),
(26, 'Kaos hitam', 'Kaos', 'Laki-Laki', 100, 'S', 150000, 'kabel_primer.jpg', 'KSATRIA_BAJA_HITAM_RX_ROBO_SATRIA_BAJA_HITAM_RX_ROBO.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `user_otp` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(6, 3, 25, 'Kemeja Polo Country Original', 1, 400000, ''),
(7, 3, 23, 'Kaos Wanita Musim Panas', 1, 10000, ''),
(8, 3, 22, 'Jaket Pria Musim Dingin', 1, 1000000, ''),
(9, 4, 22, 'Jaket Pria Musim Dingin', 1, 1000000, ''),
(10, 4, 19, 'Kaos Oblong Pria', 1, 50000, ''),
(11, 4, 2, 'Billabong Yellow Shirt', 1, 300000, ''),
(12, 4, 21, 'Kaos Sayyidina Umar Bin Khattab', 1, 150000, ''),
(27, 34, 25, 'Kemeja Polo Country Original', 1, 400000, ''),
(28, 35, 24, 'Jaket Motor Pria Terlaris', 1, 250000, ''),
(29, 36, 25, 'Kemeja Polo Country Original', 1, 400000, ''),
(30, 37, 25, 'Kemeja Polo Country Original', 1, 400000, ''),
(31, 37, 24, 'Jaket Motor Pria Terlaris', 1, 250000, ''),
(32, 37, 23, 'Kaos Wanita Musim Panas', 1, 10000, ''),
(33, 38, 25, 'Kemeja Polo Country Original', 1, 400000, ''),
(34, 38, 23, 'Kaos Wanita Musim Panas', 1, 10000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `foto`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Fahmi Aga Aditya', 'fahmi.aga@gmail.com', 'kamen-rider-shadow-moon.jpg', '$2y$10$qU..TdFQ1FL.sx6UVbxSvunhuQY0dGYYJ1kSFI8cRCPbdPzRCvpB6', 1, 1, 1574910093),
(17, 'Reza Habibi', 'galihnabil02@gmail.com', '61351301_441092916463287_735660335698598908_n.jpg', '$2y$10$ocjy2ALmTZNxVfNo5f/6Cu5EsKcbER3PHY3lXGqJWKpnTnKEGjPzq', 2, 1, 1575083882),
(18, 'Achmad Fariz', 'fahmiagaaditya@gmail.com', 'KSATRIA_BAJA_HITAM_RX_ROBO_SATRIA_BAJA_HITAM_RX_ROBO1.jpg', '$2y$10$9fyU4iw.6XSeiazsTjPM6OB2ZeOO0nT3jPNMJEcbDgNtoUIoVMjk6', 2, 1, 1575514017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(15, 'galihnabil02@gmail.com', 'mNCaMNzPpjzp51+LIK7ix29uIolm7pkHAmd3xPDsA60=', 1575083882),
(17, 'fahmiagaaditya@gmail.com', 'CXNXajeDKdWJZyDZSxzGyMTAAcQKZuT7N++y6RCREZw=', 1575514807),
(18, 'fahmiagaaditya@gmail.com', 'CuwV4OEtOqusJw5fbYnc3an1j5WIYcm2gQsdY6vXE1g=', 1583115748),
(19, 'fahmi.aga@gmail.com', 'Yvx3zVaXjcWJ4gHbX8I3NnrU2F2/CHzZ5uWb25DQE8E=', 1583115890);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
