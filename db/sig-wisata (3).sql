-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 12:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig-wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data-fasilitas`
--

CREATE TABLE `data-fasilitas` (
  `id_fasilitas` varchar(64) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar2` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar3` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data-fasilitas`
--

INSERT INTO `data-fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar`, `gambar2`, `gambar3`, `alamat`, `deskripsi`, `longitude`, `latitude`) VALUES
('60c011187bf8f', 'RSBW', '60c011187bf8f.jpg', 'default.jpg', 'default.jpg', 'Pengajaran, North Teluk Betung, Bandar Lampung City, Lampung 35214', 'loremispum edit', '105.249413683317', '-5.41449366796094'),
('60e3019ddcf64', 'Perpustakaan Modern Provinsi Lampung', 'perpus.jpg', 'default.jpg', 'default.jpg', 'Labuhan Ratu, Kedaton, Bandar Lampung City, Lampung 35132', 'Perpustakaan Modern Provinsi Lampung', '105.25026694601517', '-5.3755320154262005'),
('60e30209e1fbc', 'Kantor Perpustakaan dan Arsip Daerah Kota Bandar Lampung', 'gg_hjg.jpg', 'default.jpg', 'default.jpg', 'Jl. Prof. M. Yamin, Rw. Laut, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35213', 'Kantor Perpustakaan dan Arsip Daerah Kota Bandar Lampung', '105.2676807400012', '-5.420107146614306'),
('60e3566802022', 'Taman Bacaan Ika Media', 'wqeqwe.JPG', 'default.jpg', 'default.jpg', ' Jl. P. Antasari No.46, Kedamaian, Kota Bandar Lampung, Lampung 35121', 'Fasilitas Umum Taman Bacaan untuk masyarakat', '105.271224671164', '-5.408299043367294'),
('60e3576ff38d7', 'Cinta Baca', 'screenshot-www_google_com-2021_07_06-02_05_10.png', 'screenshot-www_google_com-2021_07_06-02_06_16.png', 'default.jpg', 'Jl. Jend. Suprapto No.47, Palapa, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35157', 'Lembaga organisasi yang menyediakan bahan bacaan gratis untuk masyarakat', '105.25506198183155', '-5.415631266282216'),
('60e359825c0a5', 'Lampung Elephant Park', 'screenshot-www_google_com-2021_07_06-02_11_26.png', 'screenshot-www_google_com-2021_07_06-02_11_02.png', 'default.jpg', 'Jl. Jend. Sudirman No.17, Enggal, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35213', 'Taman urban dengan beragam kesenian, tersedianya berbagai lapangan untuk olahraga', '105.26019113629799', '-5.420626106746921'),
('60e35c6abfb52', 'Masjid Agung Al-Furqon Bandar Lampung', 'screenshot-www_google_com-2021_07_06-02_23_17.png', 'screenshot-www_google_com-2021_07_06-02_22_51.png', 'screenshot-www_google_com-2021_07_06-02_23_45.png', 'Jl. Diponegoro, Gulak Galik, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212', 'Masjid Agung Al-Furqon Bandar Lampung', '105.26022070307603', '-5.428469629327852'),
('60e35dfd9d892', 'Lapangan Kalpataru', 'screenshot-www_google_com-2021_07_06-02_29_40.png', 'screenshot-www_google_com-2021_07_06-02_30_03.png', 'screenshot-www_google_com-2021_07_06-02_30_33.png', 'Beringin Raya, Kec. Kemiling, Kota Bandar Lampung, Lampung 35155', 'Lapangan Olahraga dan Juga Taman', '105.20783275346862', '-5.399097231730367'),
('60e35ea95e7f6', 'Museum Lampung', 'screenshot-www_google_com-2021_07_06-02_32_25.png', 'screenshot-www_google_com-2021_07_06-02_32_51.png', 'default.jpg', 'Jl. ZA. Pagar Alam No.64, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141', 'Museum Lampung', '105.24074544760416', '-5.371498097881294'),
('60e35f701ebba', 'GOR Bulutangkis PB. Cempaka', 'screenshot-www_google_com-2021_07_06-02_36_20.png', 'screenshot-www_google_com-2021_07_06-02_36_50.png', 'default.jpg', 'Gg. Cemp. III, Way Kandis, Kec. Tj. Senang, Kota Bandar Lampung, Lampung 35131', 'GOR Bulutangkis PB. Cempaka', '105.28512681178778', '-5.3529796967857255');

-- --------------------------------------------------------

--
-- Table structure for table `data-sekolah`
--

CREATE TABLE `data-sekolah` (
  `id_sekolah` varchar(64) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data-sekolah`
--

INSERT INTO `data-sekolah` (`id_sekolah`, `nama_sekolah`, `gambar`, `alamat`, `deskripsi`, `latitude`, `longitude`) VALUES
('5d49e3c550889', 'SMK N 2 Bandar Lampung', '5d49e3c550889.jpg', 'Komplek Unila - Jl. Prof.Dr.Sumantri Brojonegoro. Bandar Lampung', 'SMK N 2 Bandar Lampung', '-5.364155', '105.245946'),
('5d49fdb15c1ad', 'SMK N 8 Bandar Lampung', '5d49fdb15c1ad.jpg', 'Jalan Imam Bonjol No.52 Kemiling Raya Kemiling, Kurungannyawa, Kec. Gedong Tataan, Kota Bandar Lampung, Lampung 35151', 'SMKN 8 Bandar Lampung', '-5.386797', '105.206569');

-- --------------------------------------------------------

--
-- Table structure for table `data-toko`
--

CREATE TABLE `data-toko` (
  `id_toko` varchar(64) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar2` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar3` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data-toko`
--

INSERT INTO `data-toko` (`id_toko`, `nama_toko`, `gambar`, `gambar2`, `gambar3`, `alamat`, `deskripsi`, `longitude`, `latitude`) VALUES
('60c000a828b80', 'Toko Keripik Pisang Shinta', '60c000a828b80.jpg', 'default.jpg', 'default.jpg', 'Jl. Pagar Alam, Segala Mider, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35111', 'test deskripsi edit', '105.239338382205', '-5.38815070555437'),
('60dee9352d8e9', 'Toko oleh oleh Aneka Rasa', 'dsfs.jpg', 'default.jpg', 'default.jpg', 'Jl. Raden Intan No.435, Gn. Sari, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35128', 'ANEKA SARI RASA adalah pusat produk oleh-oleh khas Lampung terbesar dan terlengkap di provinsi Lampung yang menyediakan ribuan produk oleh-oleh karya masyarakat Lampung, antara lain keripik pisang, lempok durian, manisan buah, kemplang, kopi, dan berbagai produk lainnya. ANEKA SARI RASA didirikan oleh Wilson Limas (anak pertama dari ibu Thung Siu Phin / Isabella) yang terletak di tengah kota, yaitu di seberang Wihara Thai Hin Bio, kecamatan Teluk Betung Selatan, kota Bandar Lampung.', '105.254974448375', '-5.39868974708125'),
('60deef8e87552', 'Toko Oleh Oleh Lampung Bona Outlet Raden Intan', 'Outlet_Bona_Cake.jpg', 'default.jpg', 'default.jpg', 'Jl. Wolter Monginsidi No.115, Pengajaran, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35215', 'Hadir dengan nuansa ramah lingkungan, oleh-oleh Lampung yang satu ini tampil dominan dengan warna atribut hijau. Mulai dari warna outlet, seragam seluruh karyawan, hingga kotak atau pembungkus Bona Cake semuanya berwarna hijau lembut atau hijau-hijau kekinian.', '105.266327194381', '-5.4284294535688'),
('60e362d93b47e', 'Singgah Pay', 'screenshot-www_google_com-2021_07_06-02_48_36.png', 'screenshot-www_google_com-2021_07_06-02_47_59.png', 'screenshot-www_google_com-2021_07_06-02_47_17.png', 'Jl. Kartini, Kaliawi, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127', 'Selain makanan, kamu juga bisa membawa pulang oleh-oleh kaos khas Lampung. Salah satu toko yang menyediakan berbagai macam produk souvenir khas Lampung adalah Singgah Pay. Disana terdapat kaos bergambar gajah, siger, batik Lampung, tapis, badik, dan aksara lampung.', '105.25556906778729', '-5.412432489331384'),
('60e363a989726', 'Pasar Bambu Kuning', 'screenshot-www_google_com-2021_07_06-02_54_18.png', 'default.jpg', 'default.jpg', 'Gunung Sari, Central Tanjung Karang, Bandar Lampung City, Lampung 35128', 'Selain mengunjungi pusat oleh-oleh yang hanya menjual produk khas Lampung, kamu juga bisa mengunjungi salah satu pasar populer di Bandar Lampung yaitu pasar Bambu Kuning. Pasar tradisional ini merupakan wisata belanja yang cukup populer di Bandar Lampung. Tetapi sekarang namanya berubah menjadi Bambu Kuning Trade Center.', '105.25480140106698', '-5.408393927150215');

-- --------------------------------------------------------

--
-- Table structure for table `data-wisata`
--

CREATE TABLE `data-wisata` (
  `id_wisata` varchar(64) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar2` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `gambar3` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data-wisata`
--

INSERT INTO `data-wisata` (`id_wisata`, `nama_wisata`, `gambar`, `gambar2`, `gambar3`, `alamat`, `deskripsi`, `longitude`, `latitude`) VALUES
('60bfe263a3e20', 'Puncak Mas', '60bfe263a3e20.JPG', 'default.jpg', 'default.jpg', 'Jl. PB. Marga, Sukadana Ham, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35215', 'Test Deskripsi1', '105.228456355569', '-5.41952170403298'),
('60bfe43f91b9b', 'Lembah Hijau', '60bfe43f91b9b.jpg', 'default.jpg', 'default.jpg', 'Jl. Raden Imba Kusuma Ratu Jl. Sukajadi No.21, Sukadana Ham, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 52473', 'test deskripsi', '105.230641069263', '-5.41459019516333'),
('60c457f4e3edc', 'Teropong Kota Bukit Sindy', '60c457f4e3edc.jpg', 'default.jpg', 'default.jpg', 'Jl. Tamin, Pasir Gintung, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121', 'Tempat Wisata', '105.253249653919', '-5.40341879803116'),
('60c4593e54279', 'Bumi Kedaton', '60c4593e54279.jpg', '3e0bf7ea27861e6ad5fbdfca7e983207.jpg', 'default.jpg', 'Jalan W.A Rahman Ni 1,2,3, Batu Putuk, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35238', 'Tempat rekreasi wisata dan waterpark', '105.226768069263', '-5.43403574503626'),
('60dedd054158c', 'Lampung Walk', 'lampung-walk_20160927_143806.jpg', 'Waterpark-Lampung-Walk_-Foto-Gmap-Rizki-Adhi-Wijaya.jpg', 'pxzrpudyswhgrjioqqo6.jpg', 'Way Halim Permai, Way Halim Bandar Lampung, Bandar Lampung City, Lampung 35133', 'Tempat Wisata dan Fasilitas Umum', '105.276789361327', '-5.38937476962788'),
('60dedf18948c6', 'Taman Wisata Alam & Cottage Wira Garden', 'Y997946001.jpg', 'dyyt.jpg', 'wira-garden-di-bandar-lampung_20171218_211457.jpg', 'Jl. Wan Abdurrahman, Batu Putuk, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35239', 'Wisata alam ini sangat cocok dijadikan sebagai tempat berkumpul ketika liburan bersama keluarga. Selain itu, banyak para pengunjung yang juga melakukan kegiatan lain di tempat ini seperti, gathering, outbound, acara kantor, berkemah, dan sebagainya, Suasana alam yang asri tersebut membuat para pengunjung betah berlama-lama di tempat wisata tersebut.\r\n\r\n', '105.229510084607', '-5.43492596778966'),
('60dedfe67babf', 'Taman Wisata Hutan Kera', 'selamatdatangtamanwisatahutankera.jpg', 'tamanwisatahutankera.jpg', 'default.jpg', 'Jalan Dr Cipto Mangunkusumo, Sumur Batu, Teluk Betung Utara, Sumur Batu, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212', 'Taman Hutan kera di Bandar Lampung menjadi salah satu wahana bermain anak yang asyik di pagi dan sore hari. Tempat wisata yang penuh sejarah dan legenda ini, berada tidak jauh dari pusat kota Bandar Lampung.', '105.269311338575', '-5.43167082197119'),
('60dee141c6e63', 'Gunung Perahu', 'unik-masuk-bukit-perahu-cukup-bayar-pakai-sampah-p_20191208213124.jpg', 'hshs.jpg', 'default.jpg', 'Sidodadi, Kedaton, Bandar Lampung City, Lampung', 'Bukit Perahu di Kelurahan Sidodi, Kecamatan Kedaton menjadi salah satu destinasi wisata alternatif di Kota Bandar Lampung. Menariknya, untuk masuk pengunjung cukup bayar pakai sampah plastik.\r\n\r\nWarga Kelurahan Sidodi, Kecamatan Kedaton, Bandar Lampung mampu berinovasi mengubah Bukit Perahu menjadi tempat wisata yang menarik untuk bisa berswafoto serta menikmati keindahan Kota Bandar Lampung dari atas bukit. ', '105.258144353487', '-5.38905138470204'),
('60dee29b9a1d7', 'Wisata Bendungan Sumur Putri', 'faohrkmufxdvd7v7u03h.jpg', 'bkaqmoctcztlylxf6kjj.jpg', 'default.jpg', 'Sumur Putri, North Teluk Betung, Bandar Lampung City, Lampung 35229', 'Menikmati Wisata Mata Air', '105.245754153919', '-5.43731886159928'),
('60dee44349b9d', 'Alam Wawai', 'harga-tiket-masuk-alam-wawai-lampung.jpg', 'alam-wawai-lampung.jpg', 'default.jpg', 'Jl. H. Hasan Rais, Sukadana Ham, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35116', 'pemandangan yang menyejukkan hati, di tempat ini juga terdapat banyak pepohonan yang rindang dan masih sangat asri.', '105.231722499951', '-5.42089725408572'),
('60dee56b777e9', 'Monumen Krakatau', 'dgssdfb.jpg', 'default.jpg', 'default.jpg', 'JL. WR. Supratman, Kangkung, 35224 Bandar Lampung, Indonesia, Talang, Telukbetung Selatan, Bandar Lampung City, Lampung 35224', 'Monumen ini sebenarnya adalah tugu pelampung mercusuar yang terlempar jauh saat letusan Gunung Krakatau. Konon lokasi monumen ini sama persis dengan titik jatuhnya pelampung tersebut. Areanya rindang karena menyatu dengan Taman Dipangga. Tidak dipungut biaya alias gratis.', '105.262215230639', '-5.44459861860076'),
('60dee64b6a8b4', 'Lengkung Langit', 'Wisata-Lengkung-Langit-ditonov-1606830400345.jpg', 'Wisata-Lengkung-Langit-kutaheriawan-1606830444247.jpg', 'Taman-Wisata-LengkungLangit-Kemiling-Bandar-Lampung-3.jpg', 'Pinang Jaya, Kemiling, Bandar Lampung City, Lampung 35153', 'Lengkung Langit adalah taman wisata keluarga yang memadukan wisata alam dan spot foto yang fotogenik. Berbagai fasilitas disediakan pengelola, selain tentu saja pemandangan alam yang cantik.', '105.190967873933', '-5.39528628492288'),
('60dee7a72ada3', 'Kampoeng Vietnam Kemiling', 'kampung-vietnam-lampung.jpg', 'default.jpg', 'default.jpg', 'Jl. Teuku Cik Ditiro, Sumber Agung, Kec. Kemiling, Kota Bandar Lampung, Lampung 35156', 'Ketika kamu berada di Kampung Vietnam kamu akan melihat keindahan hutan di bandar lampung yang masih terhampar hijau dan dikelilingi oleh bukit-bukit yang ada disekitarnya. Tempat ini sangat direkomendasikan buat yang ingin melepas penat dan Lelah dengan duduk santai sambil melihat hamparan pepohonan hijau.', '105.193245093189', '-5.41128074767245');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `pesan`) VALUES
('60ecb3bd8cdb6', 'dyoba', 'israqdyoba@gmail.com', 'test feedback');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
('1', 'admin', 'root'),
('5d4937342df88', 'root', 'toor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data-fasilitas`
--
ALTER TABLE `data-fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `data-sekolah`
--
ALTER TABLE `data-sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `data-toko`
--
ALTER TABLE `data-toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `data-wisata`
--
ALTER TABLE `data-wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
