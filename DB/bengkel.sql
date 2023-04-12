-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2023 at 02:58 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon_url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Brakes', 'brakes', 'img/sparepart/Brake.svg', 'Find good brakes', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(2, 'Suspension', 'suspension', 'img/sparepart/Shock Absorber2.svg', 'Dampen various vibrations generated from the road surface', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(3, 'Drivetrain', 'drivetrain', 'img/sparepart/Gearbox3.svg', 'Dampen various vibrations generated from the road surface', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(4, 'Electronics', 'electronics', 'img/sparepart/Input-Component4.svg', 'Help to keep your car running at its full potential', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(5, 'Exhaust', 'exhaust', 'img/sparepart/Exhaust-Pipe5.svg', 'Find all kinds of exhaust', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(6, 'Oil', 'oil', 'img/sparepart/Engine-Oil6.svg', 'Find perfect oil for your car', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(7, 'Wheels', 'wheels', 'img/sparepart/Wheel7.svg', 'To help you choose, wheels and tyres', '2022-08-29 20:50:03', '2022-08-29 20:50:03'),
(8, 'Tools', 'tools', 'img/sparepart/Toolbox8.svg', 'Tools for repairing and maintenance your car', '2022-08-29 20:50:03', '2022-08-29 20:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `spec` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `user_id`, `name`, `slug`, `brand`, `desc`, `spec`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Disk Brake Tdr Wr Motor', 'brakes', 'TDR', '<p> Fitur : <br> - Anti karat.<br> - Piringan jenis Floating. <br>- Diameter lebih besar dari bawaan motor. <br>- Hanya untuk piringan cakram bagian depan.<br>- Sudah termasuk baut dan braket dudukan.<br>Pilihan Warna : Gold / Hitam<br>Dapat digunakan langsung (Plug and Play) pada Yamaha XMAX <p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: TDR </p>', 'product_image/1.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(2, 1, 2, 'Brake Disc Rotor Toyota Yaris XP90 GAIA 0D090 Original', 'brakes', 'GAIA Brake System', '<p>Aplikasi untuk kendaraaan : Toyota Yarsi XP90<br>Gaia Part Number : TYT 0D090<br>OEM Part Number : 43512-0D090', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: GAIA </p>', 'product_image/2.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(3, 1, 2, 'PIRINGAN CAKRAM DEPAN DISC BRAKE MOTOR HONDA CB 150 R ', 'brakes', 'Honda ', '<p>Piringan cakram depan honda CB150r CBR150r CB150r new LED</p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/3.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(4, 1, 2, 'PIRINGAN CAKRAM DEPAN DISC BRAKE MOTOR MATIC HONDA VARIO 150 ', 'brakes', 'Honda', '<p>Piringan Cakram untuk Vario 150 New<br>Merk Ishima<br>Diameter luar 18,9 cm<br>Diameter dalam 10 cm<br>Bahan terbuat dari Baja<br>Kualitas Terbaik</p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/4.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(5, 1, 2, 'Brake Disc Rotor Brio GAIA (SR3.A10) Original', 'brakes', 'Cyclo', '<p>Brake Disc Rotor Brio GAIA (SR3.A10) Original<br>Harga adalah harga PER SET (2pc)<br>Aplikasi untuk kendaraaan : Brio<br>Gaia Part Number : HON SH00-A00<br>OEM Part Number : 45251-SR3-A10</p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/5.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(6, 1, 2, 'Disc brake CB150 piringan cakram depan Honda CB150R LED CBR150R LED original ', 'brakes', 'Honda ', '<p>Disc Piringan Cakram Depan Honda New CB 150 R   CBR 150 R Led StreetFire Original AHM K15G K45 <br>- Kondisi Bekas Copotan Motor <br>- Mulus Normal Tinggal Pasang <br>- Kelengkapan Sesuai Foto', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Cyclo </p>', 'product_image/6.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(7, 1, 2, 'piringan cakram depan Honda gtr', 'brakes', 'Honda', '<p>Piringan cakram depan honda gtr<br>Grade A class<br>Anti karat sunstar</p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/7.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(8, 1, 2, 'Piringan cakram belakang Tiger PnP Cb150r Cbr 150 Supra gtr 150 ', 'brakes', 'Honda', '<p>PIRINGAN CAKRAM RACINGBOY SUPRA GTR 150 DEPAN<br>UKURAN STD 256MM<br>ORIGINAL</p>', '<p>Kategori: Brakes<br>Berat: 1 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/8.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(9, 2, 2, 'SHOK BLAKANG REVO SUPRAFIT SUPRAX125 ORI ', 'suspension', 'Honda', '<p>Shockbreaker belakang untuk motor Supra / Supra x / Supra Fit merk Federal<br>Kualitas produk tidak perlu diragukan</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/9.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(10, 2, 2, 'shockbreaker belakang supra x 125 revo 100 supra fit', 'suspension', 'Honda', '<p>Shockbreaker belakang untuk motor Supra / Supra x / Supra Fit merk Federal<br>Kualitas produk tidak perlu diragukan</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/10.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(11, 2, 2, 'Shock belakang Ori Mio Soul', 'suspension', 'Yamaha', '<p>shock ktc racing<br>ukuran 305mm<br>ukuran 325mm<br>warna : merah,kuning,titanium<br>stock ready ya bosku silahkan dipilih sesuai selera<br>shock ktc</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/11.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(12, 2, 2, 'Shock belakang ori yamaha mio', 'suspension', 'Yamaha', '<p>NAMA BARANG: SHOCK ABSORBER, SHOCK BREAKER BELAKANG (PEREDAM KEJUT)<br>PRODUK INI BISA DIGUNAKAN OLEH MOTOR:<br>FINO FI, FINO FI PREMIUM, FINO 125, FINO GRANDE<br>KODE PART: 1YD-F2210-00 (WARNA SILVER)<br>100% BARANG BARU<br>100% ASLI ORIGINAL GENUINE PARTS YAMAHA<br>STOCK TERBATAS</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/12.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(13, 2, 2, 'Shock breaker belakang mio lama/ sporty /soul', 'suspension', 'Aspira', '<p>UKURAN MATIC 310MM<br>SERI 05-T<br>ALL SIZE MOTOR MATIC<br>PEMASANGAN PLUG AND PLAY (PNP)</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/13.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(14, 2, 2, 'Shock belakang federal ADA 3 KODE', 'suspension', 'Federal Parts', '<p>Shockbreaker belakang untuk motor Supra / Supra x / Supra Fit merk Federal<br>Kualitas produk tidak perlu diragukan</p>', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/14.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(15, 2, 2, 'Shockbreaker shock sok breaker BEAT KARBU/ FI/ VARIO 125 Techno /125 led / 150 led ORIGINAL ', 'suspension', 'Honda', '-', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/15.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(16, 2, 2, 'Shockbreaker belakang YAMAHA Matic mio j s z m3 gt xeon rc 125 fino fi carbu SOUL GT', 'suspension', 'Yamaha', '-', '<p>Kategori: Suspension<br>Berat: 1,6 kilogram<br>Asal Barang: Lokal<br>Brand: Honda </p>', 'product_image/16.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(17, 3, 2, 'RANTAI GOLD 415 / RANTAI GOLD TIPIS/RANTAI GOLD TDH 415 130/RANTAI GOLD ', 'drivetrain', 'TDH', '<p>RANTE 415 HSB 130 L SSS ORIGINAL GOLD RANTAI 415HSB 130L GOLD SSS CHAIN 415 130 HSB TIPIS HEAVYDUTY<br>GS415HSB 130L<br>GOLD<br>415=TIPIS<br>ENHANCED DURABILITY HEAVYDUTY CHAIN<br>100% ORIGINAL SSS</p>', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/17.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(18, 3, 2, 'Rantai Roda Motor Merk Ukuran 420-104', 'drivetrain', 'Federal', '<p>Ini Merupakan Rantai Standard untuk Motor<br>-) Supra X 125<br>-) Karisma<br>-) New Blade<br>-) Revo Fit<br>-) Athlete<br>-) Edge<br>-) V80<br>-) FR80</p>', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/18.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(19, 3, 2, 'RANTAI RODA 428H SUPRA LAMA  ASTREA GRAND JUPITER Z  ', 'drivetrain', '123Plus', '-', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/19.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(20, 3, 2, 'VANBELT V-BELT HONDA KZL KUALITAS ASLI ORIGINAL HONDA ', 'drivetrain', 'Honda', '<p>VANBELT HONDA KZL<br>KUALITAS ASLI ORIGINAL HONDA AHM PRESISI ANTI SELIP AWET DAN DIJAMIN MANTAP<br>UNTUK MOTOR :<br>BEAT FI<br>SCOOPY FI<br>SPACY FI<br>VARIO 110 FI</p>', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/20.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(21, 3, 2, 'Van Belt V Belt Beat Street Pop K44 ', 'drivetrain', 'Honda', '-', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/21.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(22, 3, 2, 'V-BELT VSUPER TERSEDIA UNTUK SEMUA MOTOR MATIC', 'drivetrain', 'VSuper', '-', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(23, 3, 2, 'RANTAI 428H - 112L JUPITER MX ', 'drivetrain', 'BMB', '-', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/23.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(24, 3, 2, 'Vanbelt / V-belt Scooter Matic ', 'drivetrain', 'XWZ', '-', '<p>Kategori: Drivetrain<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/24.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(25, 4, 2, 'SWING AC 20BYJ48 BERKUALITAS', 'electronics', 'One Cool', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/25.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(26, 4, 2, 'KAPASITOR STARTING 56-72 UF 250V', 'electronics', 'One Cool', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/26.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(27, 4, 2, 'Kapasitor 600 UF Wipro', 'electronics', 'WIPRO', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/27.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(28, 4, 2, 'KAPASITOR STARTING 400 Uf MFD Mikro 250V San-Ei SOKET Kondensor SANEI 400UF', 'electronics', 'SAN-Ei', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(29, 4, 2, 'DINAMO KIPAS SEKAI AS PENDEK', 'electronics', 'RES', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(30, 4, 2, 'Dinamo Elektro Motor Maestro  ', 'electronics', 'Maestro', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(31, 4, 2, 'RS795 Dinamo dc 795 12V 16000rpm DC Motor', 'electronics', 'beeze', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(32, 4, 2, 'Electric Motor Single Phase 1/3 HP atau 0,25 KW', 'electronics', 'X-Trim ', '-', '<p>Kategori: Electronics<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(33, 5, 2, ' knalpot racing CLD MONSTER untuk semua motor  matic HONDA', 'exhaust', 'CLD', '<p>Knalpot Racing Motor CLD Racing Suzuki Satria F150 C2 Monster<br>Bahan Stainless Steel<br>Untuk Suzuki Satria F150/ Satria FU<br>Type Monster<br>Kelengkapan<br>Satu set knalpot ( Full System exhaust)</p>', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/33.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(34, 5, 2, 'knalpot Rcb racing slencer black karbon beat dan scoopy all series', 'exhaust', 'RCB', '<p>Knalpot Racing R9 Misano SS Black Series<br>Untuk motor :<br>Honda :<br>- Beat Fi / Beat EsP / Beat Pop<br>- Scoopy Fi </p>', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/34.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(35, 5, 2, 'knalpot TSUKIGI RCB matic BEAT.MIO.SCOOPY.VARIO ', 'exhaust', 'RCB', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/35.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(36, 5, 2, 'KNALPOT TSUKIGI WRC MBER BASS PADAT  MATIC', 'exhaust', 'WRC', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/36.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(37, 5, 2, 'knalpot racing SC PROJECT untuk semua motor MATIC BEAT ALL SERIES ', 'exhaust', 'SC Project', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(38, 5, 2, 'KNALPOT TSUKIGI RCB / WRC MBER MATIC MIO BEAT VARIO ', 'exhaust', 'WRC', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(39, 5, 2, 'KNALPOT RACING KAWAHARA MATIC MIO ', 'exhaust', 'KAWAHARA', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(40, 5, 2, 'KNALPOT PROLINER RACING MATIC MIO SPORTY BEAT MIO', 'exhaust', 'PROLINER', '-', '<p>Kategori: Exhaust<br>Berat: 3 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(41, 6, 2, 'Yamalube Motor Oil mesin Matic', 'oil', 'Yamalube', '<p>OIL OLI MESIN MOTOR 4T YAMALUBE SILVER 20W-40 800ML 0.8L</p>', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(42, 6, 2, 'OLI MPX 2 ', 'oil', 'Honda', '<p>Oli MPX2 untuk motor matic honda<br>Untuk Matic (Spesifikasi SAE:10W-30, API-SL, JASO:MB) Diformulasikan oleh Honda R&D Japan dengan performa lubrikasi andal untuk melindungi sepeda motor Honda menjadi lebih irit namun bertenaga. Sangat hemat dengan penggantian yang lebih lama dan sekaligus mengurangi dampak pencemaran lingkungan.</p>', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/42.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(43, 6, 2, 'Oli Motor Shell Advance AX7 Matic 1L CKD', 'oil', 'Shell', '<p>Oli pelumas Shell 0.8L dengan formula Shell Active Cleansing Technology yang berguna untuk membantu mencegah penggumpalan partikel kotoran yang membentuk endapan di mesin motor. Membuat mesin lebih bertenaga & responsif, memperhalus suara mesin & mengurangi getaran pada mesin, serta dapat melindungi & memperpanjang usia mesin Motor Anda</p>', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/43.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(44, 6, 2, 'Oli Motor Shell Advance AX5 4T 1L CKD', 'oil', 'Shell', '-', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/44.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(45, 6, 2, 'Federal Oil Ultratec 800ml', 'oil', 'Federal', '-', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/45.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(46, 6, 2, 'Oli Yamalube Sport 1L', 'oil', 'Yamalube', '-', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(47, 6, 2, 'Oli MPX 1 (Bebek Dan Sport) 800ml', 'oil', 'AHM Oil', '-', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(48, 6, 2, 'Oli Yamalube Silver  800ml', 'oil', 'Yamalube', '-', '<p>Kategori: Oil<br>Berat: 900 gram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(49, 7, 2, 'ban motor seken tubles merek federal uk 90/90-14', 'wheels', 'Federal', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/49.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(50, 7, 2, 'BAN BELAKANG METIC VARIO BEAT MIO DLL UKURAN 100/80-14', 'wheels', 'FDR', '<p>Ban Tubles Motor Matic ring 14<br>Ring 14 bisa digunakan untuk motor matic :<br>- Honda Vario<br>- Honda Beat<br>- Yamaha Mio<br>- Spacy<br>- soul GT </p>', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/50.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(51, 7, 2, 'Ban Motor Matic Batikan, Merk IRC Depan ukuran 70/90 -14', 'wheels', 'IRC', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/51.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(52, 7, 2, 'Ban matic tubles belakang merk fdr ukuran 100/80 ring 14', 'wheels', 'FDR', '<p>Ban Tubles Motor Matic ring 14<br>Ring 14 bisa digunakan untuk motor matic :<br>- Honda Vario<br>- Honda Beat<br>- Yamaha Mio<br>- Spacy<br>- soul GT </p>', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/52.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(53, 7, 2, 'BAN DEPAN METIC BEAT VARIO MIO DLL UKURAN 80/90-14', 'wheels', 'Federal', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(54, 7, 2, 'Sepasang Ban Tubles Motor Matic Beat Vario Mio Spacy', 'wheels', 'EPR', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(55, 7, 2, 'Sepasang Ban Tubless Motor Matic Beat Mio Vario Spacy Ukuran 80/90', 'wheels', 'RCX', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(56, 7, 2, 'Ban Motor Luar Matic Beat Vario Mio Spacy (Pilihan Ukuran 80/90 , 90/90 Ring 14) ', 'wheels', 'RCA', '-', '<p>Kategori: Wheels<br>Berat: 6 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', NULL, '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(57, 8, 2, 'Kunci SOK 46 PC Set Socket (1/4 \") Full Lengkap Socket Tool Kit Pas Ring L Motor Mobil ', 'tools', '-', '<p>Pegangan obeng dapat memenuhi kepala batch (kata lintas kata T plum blossom socket kepala hex batang ekstensi universal joint dapat menerima bending bar)</p>', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/57.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(58, 8, 2, 'toolkit motor sonic', 'tools', '-', '-', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/58.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(59, 8, 2, 'Kenmaster 38pcs', 'tools', 'Kenmaster', '-', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/59.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(60, 8, 2, 'Tekiro 21 pcs', 'tools', 'Tekiro', '<p>Pegangan obeng dapat memenuhi kepala batch (kata lintas kata T plum blossom socket kepala hex batang ekstensi universal joint dapat menerima bending bar)</p>', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/60.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(61, 8, 2, 'Lippro 21 pcs', 'tools', 'Lippro', '-', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/61.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(62, 8, 2, 'Kunci shock Lipat mini ', 'tools', 'Ruvo', '-', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/62.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(63, 8, 2, 'Kunci SOK 46 PC Set Socket (1/4 \")  Full Lengkap Socket Tool Kit Pas Ring L Motor Mobil ', 'tools', 'Bonkyo', '<p>Kelengkapan Produk :<br>- 14 buah mata sok 1/4\" ukuran mm 4 - 4,5 - 5 - 5,5 - 6 - 6,5 - 7 - 8 - 9 - 10 - 11 - 12 - 13 - 14 mm<br>- 2 buah sambungan sok ukuran 1/4\" panjang 2\" dan 4\"<br>- 1 buah sambungan sok fleksibel ukuran 1/4\"<br>- 1 buah gagang sok yang dapat digeser ukuran 1/4\"<br>- 1 buah gagang ratchet bolak balik ukuran 1/4\"<br>- 1 buah gagang sok obeng ukuran 1/4\" panjang 6\" </p>', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/63.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04'),
(64, 8, 2, 'Kunci Busi Flexible 21mm', 'tools', 'Welpro', '-', '<p>Kategori: Tools<br>Berat: 4 kilogram<br>Asal Barang: Lokal<br>Brand: Lainya </p>', 'product_image/64.jpg', '2022-08-29 20:50:04', '2022-08-29 20:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `item_store`
--

CREATE TABLE `item_store` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_store`
--

INSERT INTO `item_store` (`item_id`, `store_id`, `price`) VALUES
(1, 2, 324000),
(2, 2, 1125000),
(3, 2, 175600),
(4, 2, 88900),
(5, 2, 1010000),
(6, 2, 238000),
(7, 2, 94500),
(8, 2, 85000),
(9, 2, 175000),
(10, 2, 170000),
(11, 2, 85000),
(12, 2, 90000),
(13, 2, 135000),
(14, 2, 160000),
(15, 2, 280000),
(16, 2, 158000),
(17, 2, 140000),
(18, 2, 58800),
(19, 2, 53000),
(20, 2, 109000),
(21, 2, 34500),
(22, 2, 45000),
(23, 2, 50500),
(24, 2, 120000),
(25, 2, 35000),
(26, 2, 44000),
(27, 2, 90000),
(28, 2, 75000),
(29, 2, 130000),
(30, 2, 726000),
(31, 2, 120000),
(32, 2, 520000),
(33, 2, 70000),
(34, 2, 100000),
(35, 2, 87000),
(36, 2, 120000),
(37, 2, 110000),
(38, 2, 110000),
(39, 2, 70000),
(40, 2, 90000),
(41, 2, 40000),
(42, 2, 40000),
(43, 2, 38000),
(44, 2, 38800),
(45, 2, 30000),
(46, 2, 33500),
(47, 2, 30000),
(48, 2, 30500),
(49, 2, 40500),
(50, 2, 36500),
(51, 2, 20000),
(52, 2, 40000),
(53, 2, 20000),
(54, 2, 99000),
(55, 2, 210000),
(56, 2, 65000),
(57, 2, 160000),
(58, 2, 32000),
(59, 2, 162500),
(60, 2, 398250),
(61, 2, 330000),
(62, 2, 15000),
(63, 2, 90000),
(64, 2, 23000),
(1, 3, 339000),
(2, 3, 1140000),
(3, 3, 190600),
(4, 3, 103900),
(5, 3, 1025000),
(6, 3, 253000),
(7, 3, 109500),
(8, 3, 100000),
(9, 3, 190000),
(10, 3, 185000),
(11, 3, 100000),
(12, 3, 105000),
(13, 3, 150000),
(14, 3, 175000),
(15, 3, 295000),
(16, 3, 173000),
(17, 3, 155000),
(18, 3, 73800),
(19, 3, 68000),
(20, 3, 124000),
(21, 3, 49500),
(22, 3, 60000),
(23, 3, 65500),
(24, 3, 135000),
(25, 3, 50000),
(26, 3, 59000),
(27, 3, 105000),
(28, 3, 90000),
(29, 3, 145000),
(30, 3, 741000),
(31, 3, 135000),
(32, 3, 535000),
(33, 3, 85000),
(34, 3, 115000),
(35, 3, 102000),
(36, 3, 135000),
(37, 3, 125000),
(38, 3, 125000),
(39, 3, 85000),
(40, 3, 105000),
(41, 3, 55000),
(42, 3, 55000),
(43, 3, 53000),
(44, 3, 53800),
(45, 3, 45000),
(46, 3, 48500),
(47, 3, 45000),
(48, 3, 45500),
(49, 3, 55500),
(50, 3, 51500),
(51, 3, 35000),
(52, 3, 55000),
(53, 3, 35000),
(54, 3, 114000),
(55, 3, 225000),
(56, 3, 80000),
(57, 3, 175000),
(58, 3, 47000),
(59, 3, 177500),
(60, 3, 413250),
(61, 3, 345000),
(62, 3, 30000),
(63, 3, 105000),
(64, 3, 38000),
(1, 6, 301000),
(2, 6, 1102000),
(3, 6, 152600),
(4, 6, 65900),
(5, 6, 987000),
(6, 6, 215000),
(7, 6, 71500),
(8, 6, 62000),
(9, 6, 152000),
(10, 6, 147000),
(11, 6, 62000),
(12, 6, 67000),
(13, 6, 112000),
(14, 6, 137000),
(15, 6, 257000),
(16, 6, 135000),
(17, 6, 117000),
(18, 6, 35800),
(19, 6, 30000),
(20, 6, 86000),
(21, 6, 11500),
(22, 6, 22000),
(23, 6, 27500),
(24, 6, 97000),
(25, 6, 12000),
(26, 6, 21000),
(27, 6, 67000),
(28, 6, 52000),
(29, 6, 107000),
(30, 6, 703000),
(31, 6, 97000),
(32, 6, 497000),
(33, 6, 47000),
(34, 6, 77000),
(35, 6, 64000),
(36, 6, 97000),
(37, 6, 87000),
(38, 6, 87000),
(39, 6, 47000),
(40, 6, 67000),
(41, 6, 17000),
(42, 6, 17000),
(43, 6, 15000),
(44, 6, 15800),
(45, 6, 7000),
(46, 6, 10500),
(47, 6, 7000),
(48, 6, 7500),
(49, 6, 17500),
(50, 6, 13500),
(51, 6, 37000),
(52, 6, 17000),
(53, 6, 37000),
(54, 6, 76000),
(55, 6, 187000),
(56, 6, 42000),
(57, 6, 137000),
(58, 6, 9000),
(59, 6, 139500),
(60, 6, 375250),
(61, 6, 307000),
(62, 6, 52000),
(63, 6, 67000),
(64, 6, 62000),
(1, 11, 338000),
(2, 11, 1139000),
(3, 11, 189600),
(4, 11, 102900),
(5, 11, 1024000),
(6, 11, 252000),
(7, 11, 108500),
(8, 11, 99000),
(9, 11, 189000),
(10, 11, 184000),
(11, 11, 99000),
(12, 11, 104000),
(13, 11, 149000),
(14, 11, 174000),
(15, 11, 294000),
(16, 11, 172000),
(17, 11, 154000),
(18, 11, 72800),
(19, 11, 67000),
(20, 11, 123000),
(21, 11, 48500),
(22, 11, 59000),
(23, 11, 64500),
(24, 11, 134000),
(25, 11, 49000),
(26, 11, 58000),
(27, 11, 104000),
(28, 11, 89000),
(29, 11, 144000),
(30, 11, 740000),
(31, 11, 134000),
(32, 11, 534000),
(33, 11, 84000),
(34, 11, 114000),
(35, 11, 101000),
(36, 11, 134000),
(37, 11, 124000),
(38, 11, 124000),
(39, 11, 84000),
(40, 11, 104000),
(41, 11, 54000),
(42, 11, 54000),
(43, 11, 52000),
(44, 11, 52800),
(45, 11, 44000),
(46, 11, 47500),
(47, 11, 44000),
(48, 11, 44500),
(49, 11, 54500),
(50, 11, 50500),
(51, 11, 34000),
(52, 11, 54000),
(53, 11, 34000),
(54, 11, 113000),
(55, 11, 224000),
(56, 11, 79000),
(57, 11, 174000),
(58, 11, 46000),
(59, 11, 176500),
(60, 11, 412250),
(61, 11, 344000),
(62, 11, 29000),
(63, 11, 104000),
(64, 11, 37000);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `name`, `kota_id`) VALUES
(1, 'Jebres', 1),
(2, 'Banjarsari', 1),
(3, 'Laweyan', 1),
(4, 'Pasar Kliwon', 1),
(5, 'Serengan', 1),
(6, 'Baki', 2),
(7, 'Bendosari', 2),
(8, 'Bulu', 2),
(9, 'Gatak', 2),
(10, 'Grogol', 2),
(11, 'Kartasura', 2),
(12, 'Mojolaban', 2),
(13, 'Nguter', 2),
(14, 'Polokarto', 2),
(15, 'Sukoharjo', 2),
(16, 'Tawangsari', 2),
(17, 'Weru', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `name`) VALUES
(1, 'Surakarta'),
(2, 'Sukoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_26_163808_laratrust_setup_tables', 1),
(7, '2022_03_28_075337_create_sessions_table', 1),
(8, '2022_04_08_154110_create_kota_table', 1),
(9, '2022_04_09_154314_create_kecamatan_table', 1),
(10, '2022_04_10_060156_create_stores_table', 1),
(11, '2022_04_10_060302_create_categories_table', 1),
(12, '2022_04_10_060304_create_items_table', 1),
(13, '2022_04_10_070841_item_store', 1),
(14, '2022_04_14_144709_create_notifications_table', 1),
(15, '2022_06_06_082131_create_reservasi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-08-29 20:50:02', '2022-08-29 20:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(9, 2),
(10, 2),
(9, 3),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', 'Superadmin', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(2, 'employee', 'Employee', 'Employee', '2022-08-29 20:50:02', '2022-08-29 20:50:02'),
(3, 'mitra', 'Mitra', 'Mitra', '2022-08-29 20:50:02', '2022-08-29 20:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(3, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(3, 5, 'App\\Models\\User'),
(3, 6, 'App\\Models\\User'),
(3, 7, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1whNaiWgIzw5Q2FG2xyzTNuILX1xXaTCo9zjTT4C', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUhPOXJ1WURrcnh3TTcwOU5BeXU2bDdkZFNBTWxqSHE3NGFIV09hciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1663136672),
('G0vhnpvpG4UPjRV6o25rd1eWCmTg09G7pcZuMySa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFJzaHFXMHB6YzFFZzRIVHV2dzRSSTBudVdTUnBOZTZXUWdqRzFzRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=', 1661834617),
('Tz5Q4sCkEugw0Xjxm7wCHosF7KGJ7wBUNWQcJws7', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia2FJQzNHZDlQcXNDbGZ6ejd4czA0UzExRkxjYVVzaWxqTWpQYUhkZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGg4eFUxWVZqMUpTcm8wbW1BQnVMdmVxcS41THFZaFZMWEZETkFmVlhGb0VIVWtZSnhiVXJtIjt9', 1662352189);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_store` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_activation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `store_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `open`, `close`, `address`, `phone_store`, `status_activation`, `id_mitra`, `id_kecamatan`, `store_image`, `lat`, `long`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Bengkel Nathan Abadi', '03:50:03', '03:50:03', 'Solo', '928389123', '1', 2, 1, '2dawdw', '-7.564549075372528', '110.84062825432814', NULL, '2022-08-29 20:50:03', NULL),
(2, 'Bengkel Makmur Sentosa', '03:50:03', '03:50:03', 'Solo', '928389103', '2', 3, 1, '3dawdw', '-7.561835732657607', '110.84882803103476', 'Belum memenuhi  syarat', '2022-08-29 20:50:03', '2022-08-29 21:18:29'),
(3, 'Bengkel Motor CB Bapak Minggu', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 5, 1, '3dawdw', '-7.568935368631211', '110.85218329741204', NULL, '2022-08-29 20:50:03', NULL),
(4, 'Bengkel Motor Ncing Pasroom', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 7, 1, '3dawdw', '-7.565149165062955', '110.86647410687202', NULL, '2022-08-29 20:50:03', NULL),
(5, 'Bengkel River Side (Pinggir Kali)', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 6, 1, '3dawdw', '-7.554811383797767', '110.84209819171498', NULL, '2022-08-29 20:50:03', NULL),
(6, 'Bengkel Pak Bero', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 6, 1, '3dawdw', '-7.562851901788904', '110.85132499065892', NULL, '2022-08-29 20:50:03', NULL),
(7, 'Bengkel Purwoloyo', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 3, 1, '3dawdw', '-7.5660000002422025', '110.85085292196567', NULL, '2022-08-29 20:50:03', NULL),
(8, 'Bengkel Vespa Buyung', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 2, 1, '3dawdw', '-7.5612778438635715', '110.84917922351124', NULL, '2022-08-29 20:50:03', NULL),
(9, 'Bengkel Mertua', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 5, 1, '3dawdw', '-7.564443104694164', '110.84062224071869', NULL, '2022-08-29 20:50:03', NULL),
(10, 'Solusi Motor 45', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 3, 1, '3dawdw', '-7.566576638302655', '110.85621644418637', NULL, '2022-08-29 20:50:03', NULL),
(11, 'Bengkel Sebelas Maret', '03:50:03', '03:50:03', 'Solo', '928389103', '1', 7, 1, '3dawdw', '-7.557863136921388', '110.85658100439962', NULL, '2022-08-29 20:50:03', NULL),
(13, 'Bengkel Paksi', '08:34:00', '20:34:00', 'Di depan RS moewardi', '0821345666788', '2', 3, 1, '1661834087_macosmontereywallpaper-1.jpg', NULL, NULL, 'tdk memenuhi', '2022-08-29 21:34:47', '2022-08-29 21:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nik`, `npwp`, `ktp`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'super@test.test', '1609546070815536', '291152507267080', 'qmWyfMs5EE', '2022-08-29 20:50:02', '$2y$10$ocy1E50EkxaxtO1gM/SiGegRF5rT3alW8MLmY8XlZOv8qApoXEl7G', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:02', NULL),
(2, 'Mitra', 'mitra@test.test', '7568146465303834', '791058809999479', 'IBX4fdbh3J', '2022-08-29 20:50:02', '$2y$10$8nB0GXhYsTivKA9z0zLPAe9IcuWnQ8gvgS9rKgfgKKJafZeiIuaiy', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL),
(3, 'Mitra2', 'mitra2@test.test', '7593605970491775', '698989707289993', 'aulUYvB48l', '2022-08-29 20:50:03', '$2y$10$h8xU1YVj1JSro0mmABuLveqq.5LqYhVLXFDNAfVXFoEHUkYJxbUrm', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL),
(4, 'employee', 'employee@test.test', '304019863340187', '777625004747175', 'zBsq3cBgC1', '2022-08-29 20:50:03', '$2y$10$IfA9ktiYiDo8X8zP3R8SP.U4L5CvHVKf/UOAWRucDFkhzPa8f9T3W', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL),
(5, 'Muhammad Santoas', 'mitra3@test.test', '4083336356717309', '865399394955236', 'FAPRrFd7N4', '2022-08-29 20:50:03', '$2y$10$nTtnNo77SpG3yG4Yf/e5a.0PJtMj/0ONKudHF5YJDP9meiq.XkFl2', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL),
(6, 'Sammuel Sitorus', 'mitra4@test.test', '7769621901700799', '494332489832038', 'zlCFIXgXsy', '2022-08-29 20:50:03', '$2y$10$5ALF9XnLenhY1bSdYtTk.OGoxgg/ii11LJwlf49qx9hVBAGhhmTXS', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL),
(7, 'Tutus Stompson', 'mitra5@test.test', '176225582783514', '630711509049724', '9QMNu1Mtl8', '2022-08-29 20:50:03', '$2y$10$oGxnVvC2A4vV3uJajcigge/rn4eAQg8Xb1GhGsxDdXT4t5GB.H9t.', NULL, NULL, NULL, NULL, NULL, '2022-08-29 20:50:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`),
  ADD KEY `items_user_id_foreign` (`user_id`);
ALTER TABLE `items` ADD FULLTEXT KEY `fulltext_index` (`name`);

--
-- Indexes for table `item_store`
--
ALTER TABLE `item_store`
  ADD KEY `item_store_item_id_foreign` (`item_id`),
  ADD KEY `item_store_store_id_foreign` (`store_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_kota_id_foreign` (`kota_id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_id_mitra_foreign` (`id_mitra`),
  ADD KEY `stores_id_kecamatan_foreign` (`id_kecamatan`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_store`
--
ALTER TABLE `item_store`
  ADD CONSTRAINT `item_store_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_store_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_kota_id_foreign` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stores_id_mitra_foreign` FOREIGN KEY (`id_mitra`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
