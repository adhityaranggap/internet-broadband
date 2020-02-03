
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 20, 2020 at 02:26 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: internet-broadband
--

-- --------------------------------------------------------

--
-- Table structure for table akses_group
--

CREATE TABLE akses_group (
  id bigint(20) UNSIGNED NOT NULL,
  hak_akses varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table akses_group
--

INSERT INTO akses_group (`id`, hak_akses, created_at, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table bank_account
--

CREATE TABLE bank_account (
  id bigint(20) UNSIGNED NOT NULL,
  nama varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  logo varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  account_number varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  account_owner varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table customers
--

CREATE TABLE customers (
  id bigint(20) UNSIGNED NOT NULL,
  username varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  nama varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  contact_person varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  alamat varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  router_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table customers
--

INSERT INTO customers (`id`, username, nama, contact_person, alamat, router_id, created_at, `updated_at`) VALUES
(5, 'rahmi95', 'Zulaikha Wijayanti', '0387 4160 7344', 'Ki. Karel S. Tubun No. 483, Administrasi Jakarta Selatan 33036, Bengkulu', 1, NULL, NULL),
(6, 'latupono.kasiyah', 'Opung Cengkal Dongoran', '(+62) 416 9254 066', 'Psr. Siliwangi No. 728, Tangerang Selatan 64031, Maluku', 1, NULL, NULL),
(7, 'agus.maryati', 'Gawati Wulandari', '(+62) 661 5005 257', 'Ki. Kyai Gede No. 645, Bitung 43882, Lampung', 1, NULL, NULL),
(8, 'viman.andriani', 'Sadina Pudjiastuti', '0274 0043 9256', 'Jln. Baranangsiang No. 727, Pematangsiantar 12990, Jambi', 1, NULL, NULL),
(9, 'wijaya.garan', 'Unggul Sitorus', '(+62) 844 1578 217', 'Ds. Villa No. 654, Administrasi Jakarta Pusat 87305, SulUt', 1, NULL, NULL),
(10, 'vfujiati', 'Dacin Iswahyudi S.Farm', '(+62) 294 8843 567', 'Jln. Raya Ujungberung No. 601, Bengkulu 71323, JaTim', 1, NULL, NULL),
(11, 'prima.gunarto', 'Ibun Santoso', '(+62) 974 7366 1870', 'Psr. Baranang Siang No. 472, Langsa 48702, JaTeng', 1, NULL, NULL),
(12, 'cindy74', 'Karen Rahimah S.E.I', '025 9923 733', 'Psr. Merdeka No. 680, Binjai 33829, Jambi', 1, NULL, NULL),
(13, 'rahimah.almira', 'Bambang Setiawan', '0434 4915 210', 'Psr. Yosodipuro No. 91, Padangsidempuan 57840, Bali', 1, NULL, NULL),
(14, 'vanya.wijaya', 'Lanang Harimurti Saptono S.Kom', '0274 4850 151', 'Ki. Padma No. 188, Sukabumi 44087, SulBar', 1, NULL, NULL),
(15, 'qnuraini', 'Alika Haryanti', '024 2685 8639', 'Jln. Kali No. 996, Bima 55802, KalUt', 1, NULL, NULL),
(16, 'mila04', 'Ayu Ilsa Mulyani S.Kom', '(+62) 927 8873 8775', 'Jr. Baik No. 404, Bandung 37606, Bali', 1, NULL, NULL),
(17, 'hastuti.edward', 'Gina Hariyah', '0234 6418 697', 'Dk. BKR No. 214, Pariaman 31322, JaTim', 1, NULL, NULL),
(18, 'pnajmudin', 'Galar Prasetya', '0692 1460 8192', 'Kpg. Dipenogoro No. 414, Pangkal Pinang 63415, KepR', 1, NULL, NULL),
(19, 'tantri06', '
phpMyAdmin contributors
[Photo]
Lintang Victoria Sudiati', '0690 5357 6176', 'Ki. Baranangsiang No. 872, Jambi 65870, SumSel', 1, NULL, NULL),
(20, 'bakda05', 'Mahfud Simbolon', '0309 3099 1641', 'Ds. Lada No. 443, Surabaya 25188, Gorontalo', 1, NULL, NULL),
(21, 'vanya.sinaga', 'Tiara Yuliarti', '0477 6049 708', 'Kpg. Baan No. 445, Administrasi Jakarta Barat 15966, SumBar', 1, NULL, NULL),
(22, 'tnatsir', 'Suci Tami Mardhiyah S.Pt', '(+62) 577 6970 371', 'Kpg. Nanas No. 143, Denpasar 82688, SulSel', 1, NULL, NULL),
(23, 'xardianto', 'Karma Emas Santoso', '0301 7733 2277', 'Gg. Bakti No. 305, Administrasi Jakarta Timur 58425, Bengkulu', 1, NULL, NULL),
(24, 'tari40', 'Dewi Permata', '0205 6124 808', 'Psr. Casablanca No. 628, Kotamobagu 79828, JaTeng', 1, NULL, NULL),
(25, 'harsaya.namaga', 'Winda Purnawati', '0351 4469 937', 'Ki. Jamika No. 997, Denpasar 86342, JaTeng', 1, NULL, NULL),
(26, 'ajimin.mustofa', 'Ismail Lazuardi', '(+62) 918 1138 8058', 'Ds. Bakhita No. 805, Tarakan 50276, Papua', 1, NULL, NULL),
(27, 'usyi22', 'Bakijan Jaiman Mandala', '(+62) 204 5676 796', 'Ds. Aceh No. 952, Tangerang 74799, SulTra', 1, NULL, NULL),
(28, 'olatupono', 'Ian Sitorus', '(+62) 986 4013 721', 'Jr. Orang No. 704, Padangpanjang 53718, BaBel', 1, NULL, NULL),
(29, 'lwidiastuti', 'Harjasa Maryadi M.Ak', '0527 7950 812', 'Jln. Bakit  No. 573, Semarang 64188, DIY', 1, NULL, NULL),
(30, 'cinthia61', 'Cager Januar', '(+62) 936 3703 2697', 'Dk. Bambon No. 329, Sukabumi 10263, Papua', 1, NULL, NULL),
(31, 'ganjaran.kuswoyo', 'Indra Olga Zulkarnain S.Gz', '023 3693 8849', 'Ki. Teuku Umar No. 976, Palangka Raya 26278, PapBar', 1, NULL, NULL),
(32, 'anggriawan.legawa', 'Cindy Wastuti', '0454 7073 994', 'Jln. Kusmanto No. 480, Batam 27710, Banten', 1, NULL, NULL),
(33, 'thartati', 'Shakila Hassanah', '(+62) 722 9325 9261', 'Ki. Gardujati No. 466, Pontianak 70907, KalSel', 1, NULL, NULL),
(34, 'luluh97', 'Gawati Safitri', '0329 1801 3348', 'Ki. Babadan No. 576, Pagar Alam 77728, JaBar', 1, NULL, NULL),
(35, 'galih.maulana', 'Hilda Hartati', '(+62) 653 3881 168', 'Dk. Krakatau No. 453, Bogor 23175, SulUt', 1, NULL, NULL),
(36, 'saputra.kacung', 'Perkasa Utama', '0641 9086 952', 'Jr. Ters. Pasir Koja No. 242, Salatiga 93410, NTB', 1, NULL, NULL),
(37, 'ade79', 'Asmadi Saefullah', '(+62) 233 8271 9474', 'Dk. Urip Sumoharjo No. 856, Pangkal Pinang 65242, JaBar', 1, NULL, NULL),
(38, 'palastri.lalita', 'Usman Tampubolon', '(+62) 873 128 370', 'Psr. Baan No. 358, Banjarmasin 10182, Lampung', 1, NULL, NULL),
(39, 'maryati.febi', 'Ulya Dina Yuniar', '(+62) 311 2894 4732', 'Gg. Pasir Koja No. 729, Kupang 72306, PapBar', 1, NULL, NULL),
(40, 'galih55', 'Digdaya Narpati', '0341 2666 681', 'Jr. Acordion No. 677, Sukabumi 51110, NTB', 1, NULL, NULL),
(41, 'ciaobella.prasetyo', 'Rachel Anggraini S.Farm', '0612 3625 928', 'Jr. Cihampelas No. 354, Balikpapan 21665, SulBar', 1, NULL, NULL),
(42, 'kartika.dabukke', 'Ade Suwarno', '(+62) 504 2349 364', 'Jr. B.Agam 1 No. 512, Tasikmalaya 29267, Banten', 1, NULL, NULL),
(43, 'dodo72', 'Perkasa Mariadi Gunarto', '0319 5753 926', 'Psr. Bakin No. 340, Parepare 44228, DIY', 1, NULL, NULL),
(44, 'mutia42', 'Eman Utama', '0208 4708 904', 'Psr. Kiaracondong No. 977, Makassar 75893, JaBar', 1, NULL, NULL),
(45, 'lintang23', 'Malika Hastuti S.IP', '0946 5002 520', 'Psr. Dipenogoro No. 431, Bima 28914, DIY', 1, NULL, NULL),
(46, 'simon.anggraini', 'Siti Uyainah S.E.I', '0759 3243 530', 'Kpg. Baranang Siang No. 82, Sorong 91858, Papua', 1, NULL, NULL),
(47, 'xusada', 'Daryani Gandi Salahudin', '0851 5485 8663', 'Ki. Juanda No. 875, Mataram 75361, SulSel', 1, NULL, NULL),
(48, 'iharyanti', 'Laksana Permadi', '(+62) 23 4681 404', 'Ds. Moch. Yamin No. 59, Palembang 38137, SumSel', 1, NULL, NULL),
(49, 'fyolanda', 'Mursinin Wardi Kusumo', '0737 4231 711', 'Ki. Imam Bonjol No. 341, Malang 54729, KalTim', 1, NULL, NULL),
(50, 'eko49', 'Gambira Luwar Prasasta M.Kom.', '(+62) 409 2399 503', 'Kpg. Basuki No. 24, Banjarmasin 22529, KalBar', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers_has_pa
ckages`
--

CREATE TABLE customers_has_packages (
  id bigint(20) UNSIGNED NOT NULL,
  customer_id varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  packages_id varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table customers_has_packages
--

INSERT INTO customers_has_packages (`id`, customer_id, packages_id, created_at, `updated_at`) VALUES
(1, '16', '2', NULL, NULL),
(2, '20', '2', NULL, NULL),
(3, '11', '2', NULL, NULL),
(4, '12', '3', NULL, NULL),
(5, '14', '2', NULL, NULL),
(6, '15', '2', NULL, NULL),
(7, '2', '2', NULL, NULL),
(8, '21', '1', NULL, NULL),
(9, '20', '3', NULL, NULL),
(10, '11', '1', NULL, NULL),
(11, '15', '4', NULL, NULL),
(12, '18', '4', NULL, NULL),
(13, '21', '4', NULL, NULL),
(14, '4', '4', NULL, NULL),
(15, '5', '4', NULL, NULL),
(16, '13', '2', NULL, NULL),
(17, '21', '2', NULL, NULL),
(18, '18', '2', NULL, NULL),
(19, '5', '1', NULL, NULL),
(20, '28', '1', NULL, NULL),
(21, '3', '1', NULL, NULL),
(22, '5', '1', NULL, NULL),
(23, '24', '2', NULL, NULL),
(24, '21', '3', NULL, NULL),
(25, '17', '2', NULL, NULL),
(26, '16', '1', NULL, NULL),
(27, '7', '2', NULL, NULL),
(28, '4', '4', NULL, NULL),
(29, '8', '2', NULL, NULL),
(30, '5', '1', NULL, NULL),
(31, '29', '1', NULL, NULL),
(32, '6', '4', NULL, NULL),
(33, '20', '3', NULL, NULL),
(34, '2', '3', NULL, NULL),
(35, '4', '2', NULL, NULL),
(36, '21', '1', NULL, NULL),
(37, '1', '2', NULL, NULL),
(38, '29', '2', NULL, NULL),
(39, '17', '2', NULL, NULL),
(40, '14', '2', NULL, NULL),
(41, '13', '2', NULL, NULL),
(42, '6', '2', NULL, NULL),
(43, '29', '3', NULL, NULL),
(44, '26', '1', NULL, NULL),
(45, '1', '4', NULL, NULL),
(46, '17', '3', NULL, NULL),
(47, '10', '1', NULL, NULL),
(48, '24', '2', NULL, NULL),
(49, '8', '3', NULL, NULL),
(50, '14', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table invoice
--

CREATE TABLE invoice (
  id bigint(20) UNSIGNED NOT NULL,
  code varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  tgl_invoice date NOT NULL,
  jumlah_tagihan varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  status varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  user_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table member_type
--

CREATE TABLE member_type (
  id bigint(20) UNSIGNED NOT NULL,
  nama_type varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table migrations
--

CREATE TABLE migrations (
  id int(10) UNSIGNED NOT NULL,
  migration varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  batch int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table migrations
--

INSERT INTO migrations (`id`, migration, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_16_154843_create_akses_group_table', 1),
(4, '2019_11_16_154848_create_router_table', 1),
(5, '2019_11_16_154855_create_ticket_table', 1),
(6, '2019_11_16_154912_create_server_core_table', 1),
(7, '2019_11_16_154918_create_invoice_table', 1),
(8, '2019_11_16_154925_create_pembayaran_table', 1),
(9, '2019_11_16_154931_create_bank_account_table', 1),
(10, '2019_11_16_154959_create_member_type_table', 1),
(11, '2019_12_06_172732_create_orders_table', 1),
(12, '2019_12_06_173035_create_payments_table', 1),
(13, '2019_12_06_173307_create_packages_table', 1),
(14, '2019_12_11_153348_crea
te_customers_table', 1),
(15, '2019_12_21_175032_create_customers_has_packages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table orders
--

CREATE TABLE orders (
  id bigint(20) UNSIGNED NOT NULL,
  payment_id varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  customer_has_package_id varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  period varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  multiplier int(11) NOT NULL,
  status varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  notes varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table orders
--

INSERT INTO orders (`id`, payment_id, customer_has_package_id, period, multiplier, status, notes, created_at, `updated_at`) VALUES
(1, '1', '5', '1970-07', 1, 'aktif', '-', NULL, NULL),
(2, '2', '6', '2020-01', 1, 'aktif', '-', NULL, NULL),
(3, '3', '7', '2020-01', 1, 'aktif', '-', NULL, NULL),
(4, '4', '5', '2020-01', 1, 'aktif', '-', NULL, NULL),
(5, '5', '1', '2020-04', 1, 'aktif', '-', NULL, NULL),
(6, '6', '6', '2020-02', 1, 'aktif', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table packages
--

CREATE TABLE packages (
  id bigint(20) UNSIGNED NOT NULL,
  nama_paket varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  kec_internet varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  harga_paket varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table packages
--

INSERT INTO packages (`id`, nama_paket, kec_internet, harga_paket, created_at, `updated_at`) VALUES
(1, '100K 2M/2M', '2 Mbps', '100000', NULL, NULL),
(2, '150K 4M/4M', '4 Mbps', '150000', NULL, NULL),
(3, '200K 8M/8M', '8 Mbps', '200000', NULL, NULL),
(4, '300K 10M/10M', '10 Mbps', '300000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table password_resets
--

CREATE TABLE password_resets (
  email varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  token varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table payments
--

CREATE TABLE payments (
  id bigint(20) UNSIGNED NOT NULL,
  type varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  paymentdate date NOT NULL,
  file varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table payments
--

INSERT INTO payments (`id`, type, paymentdate, file, created_at, `updated_at`) VALUES
(1, 'GOPAY', '2017-04-12', '/private/var/folders/y8/3_xbt7n11l5fw8d2jtqcgj600000gn/T/php23XBwX', NULL, NULL),
(2, 'BCA', '2020-01-01', '/private/var/folders/y8/3_xbt7n11l5fw8d2jtqcgj600000gn/T/phpTbJYxc', NULL, NULL),
(3, 'BCA', '2020-01-01', 'payment/payment__5e10c30c466f4.jpg', NULL, NULL),
(4, 'BCA', '2020-01-01', 'payment/payment__5e10c582548ff.jpg', NULL, NULL),
(5, 'BCA', '2020-01-01', 'payment/payment__5e128eeb5cad7.jpeg', NULL, NULL),
(6, 'BCA', '2020-01-01', 'payment/payment__5e128f9a1ff7b.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table pembayaran
--

CREATE TABLE pembayaran (
  id bigint(20) UNSIGNED NOT NULL,
  jenis_pembayaran varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  kategori_pembayaran varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  lampiran varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi
` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  bank_account_id varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  user_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table router
--

CREATE TABLE router (
  id bigint(20) UNSIGNED NOT NULL,
  SN_router varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  merk_router varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  tipe_router varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  mac_address varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  customer_id int(10) UNSIGNED NOT NULL,
  remember_token varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table server_core
--

CREATE TABLE server_core (
  id bigint(20) UNSIGNED NOT NULL,
  nama_server varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  type_server varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  JML_user_active varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  bw_router varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table ticket
--

CREATE TABLE ticket (
  id bigint(20) UNSIGNED NOT NULL,
  code varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  jenisticket varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  deskripsiticket varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  berkascustomer varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  status varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  noteadmin varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  berkas_admin varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  customer_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id bigint(20) UNSIGNED NOT NULL,
  name varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  username varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  contact_person varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  password text COLLATE utf8_unicode_ci NOT NULL,
  alamat varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  akses_group_id int(10) UNSIGNED DEFAULT '0',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table users
--

INSERT INTO users (`id`, name, username, contact_person, password, alamat, akses_group_id, created_at, `updated_at`) VALUES
(1, 'adit', 'adit', NULL, '$2y$10$a23zTL3nPMo.3P72iWeJqeSqTeZ/RujSNYoxn0Ptau274nM3l4I0q', NULL, 0, '2020-01-13 04:37:44', '2020-01-13 04:37:44'),
(3, 'asd', 'asd', NULL, '$2y$10$BgdMgytuosuOBedn/5.GjOz8.QV99EoCYRE9vVH3eJtTZUJ4Nlp8O', NULL, 0, '2020-01-19 01:29:54', '2020-01-19 01:29:54'),
(4, 'Adhitya Rangga Putra', 'cloudsample', NULL, '$2y$10$340vy/nnBtey0KzF2kNXy.9B72/WhT3avvryegSEy3cR5AaMw8kcK', NULL, 0, '2020-01-19 01:30:31', '2020-01-19 01:30:31'),
(5, 'bryan', 'bryan', NULL, '$2y$10$pgVzXXujtulooo.CNjcO3ON6uDJxLvh7h/RTAVSTZWK/zW3EH914O', NULL, 1, '2020-01-19 04:21:05', '2020-01-19 04:21:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table akses_group
--
ALTER TABLE akses_group
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table bank_account
--
ALTER TABLE
bank_account
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table customers
--
ALTER TABLE customers
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table customers_has_packages
--
ALTER TABLE customers_has_packages
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table invoice
--
ALTER TABLE invoice
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY invoice_code_unique (`code`);

--
-- Indexes for table member_type
--
ALTER TABLE member_type
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table migrations
--
ALTER TABLE migrations
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table orders
--
ALTER TABLE orders
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table packages
--
ALTER TABLE packages
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table password_resets
--
ALTER TABLE password_resets
  ADD KEY password_resets_email_index (`email`);

--
-- Indexes for table payments
--
ALTER TABLE payments
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table pembayaran
--
ALTER TABLE pembayaran
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table router
--
ALTER TABLE router
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY router_sn_router_unique (`SN_router`);

--
-- Indexes for table server_core
--
ALTER TABLE server_core
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table ticket
--
ALTER TABLE ticket
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY ticket_code_unique (`code`);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table akses_group
--
ALTER TABLE akses_group
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table bank_account
--
ALTER TABLE bank_account
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table customers
--
ALTER TABLE customers
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table customers_has_packages
--
ALTER TABLE customers_has_packages
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table invoice
--
ALTER TABLE invoice
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table member_type
--
ALTER TABLE member_type
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table migrations
--
ALTER TABLE migrations
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table orders
--
ALTER TABLE orders
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table packages
--
ALTER TABLE packages
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table payments
--
ALTER TABLE payments
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table pembayaran
--
ALTER TABLE pembayaran
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table router
--
ALTER TABLE router
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table server_core
--
ALTER TABLE server_core
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table ticket
--
ALTER TABLE ticket
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;