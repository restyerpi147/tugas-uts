-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2020 pada 16.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `id_user`, `judul`, `penulis`, `isi`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tanaman Hias di Pameran Urban Garden', 'Salma Rosita Shafira', 'Tangerang, Kompasiana - Wabah virus Corona atau COVID-19 ternyata membawa tren tanaman hias kembali booming. Masyarakat yang banyak berkerja dirumah mulai membangun hobi dengan memelihara tanaman. Tren mengoleksi dan merawat tanaman hias ini pun popular dikalangan kaum urban.\r\n\r\nBanyaknya waktu yang dihabiskan dirumah menjadi salah satu faktor hobi tanaman hias kembali populer, dan digandrungi masyarakat untuk mengisi waktu luang. Halaman atau taman rumah pun dipercantik dengan ragam tanaman hias.\r\n\r\nAnda yang ingin mempercantik taman rumah dengan tanaman hias bisa mengunjungi Pameran Urban Garden di Summarecon Mall Serpong. Pameran ini diselenggarakan mulai dari tanggal 19 November - 29 November 2020 tepatnya di Atrium Circle. Di pameran ini, ada sejumlah stand tanaman seperti Primaflora Vertical, Philomenaplant, Tani Hub, tanaman Hidroponik, dan tanaman Microgreen.\r\nNamun tidak hanya itu, ada juga rangkaian acara seperti Workshop & Share, Urban Farming, Ornamental Plants, Home Styling, Farm to Table, dan Live Instagram & Photo Contest dengan total hadiah sebesar Rp10 juta. \r\nUntuk menjaga keamanan dan kenyamanan pengunjung, penyelenggara pameran menerapkan protokol kesehatan yang ketat, seperti mengecek suhu badan, wajib mengunakan masker, menyediakan hand sanitizer di dalam area pameran, pengaturan jaga jarak, hingga fasilitas pembayaran non tunai.', 1, '2020-11-29 15:12:02', '2020-11-29 15:12:02'),
(2, 1, 'Manfaat Ayam Kalkun, Benarkah Lebih Sehat dari Ayam Biasa?', 'Nina Hertiwi', 'Di Indonesia sendiri, konsumsi ayam kalkun belum begitu populer. Selain karena jarang dijual di pasaran, harganya yang cenderung lebih mahal dibanding ayam membuat orang belum berpaling ke sumber protein ini.\r\nNamun sekarang, dengan meningkatnya gaya hidup sehat, tren mengonsumsi daging ayam kalkun juga ikut menanjak. Sebab, daging ayam kalkun yang cenderung lebih rendah lemak dinilai lebih sehat dibanding ayam biasa. Benarkah?\r\nManfaat ayam kalkun untuk kesehatan\r\nAda banyak manfaat yang bisa didapatkan apabila Anda sering mengonsumsi ayam kalkun, seperti:\r\n1. Memperoleh sumber protein yang sehat\r\nAyam kalkun kaya akan kandungan protein, nutrisi yang penting untuk menjaga dan memperbaiki fungsi otot, tulang, tulang rawan, kulit, peredaran darah, dan jaringan lainnya. Karena tubuh tidak bisa menyimpan protein, Anda perlu mengonsumsinya setiap hari.\r\nSelain ayam kalkun, ayam biasa, telur, ikan, hingga daging sapi juga bisa dijadikan sumber protein yang baik untuk tubuh.\r\n2. Mengurangi risiko kanker\r\nAyam kalkun juga mengandung selenium, yang dinilai bisa mengurangi risiko beberapa jenis kanker, seperti kanker payudara, kanker saluran kemih, kanker lambung, dan kanker paru-paru.\r\n3. Baik untuk pengidap diabetes\r\nDaging ayam kalkun adalah salah satu jenis makanan dengan indeks glikemik rendah, sehingga baik untuk dikonsumsi pengidap diabetes. Indeks glikemik adalah kemampuan suatu makanan atau minuman dalam meningkatkan kadar gula darah setelah dikonsumsi.\r\nSemakin rendah indeks glikemik suatu makanan, maka akan semakin baik untuk para pengidap diabetes.\r\n4. Menyehatkan jantung\r\nDaging ayam kalkun adalah satu dari sedikit sumber protein yang rendah garam dan kalori, sehingga baik untuk jantung. Manfaat yang satu ini akan semakin terasa apabila Anda mengolahnya dengan tepat dan menyingkirkan bagian kulitnya.\r\nAyam kalkun juga kaya akan asam amino jenis arginine yang dapat membantu menjaga arteri atau pembuluh darah jantung terbuka, sehingga aliran darah dari dan menuju jantung, bisa berjalan lancar.\r\n5. Mencegah Alzheimer\r\nMengonsumsi daging ayam kalkun maupun unggas lainnya setidaknya dua kali dalam seminggu, dinilai dapat membantu mengurangi risiko penyakit degeneratif seperti Alzheimer dan demensia.\r\nKandungan nutrisi yang ada di dalam ayam kalkun mampu membantu menjaga daya ingat dan kemampuan berpikir yang akan berkurang seiring bertambahnya usia.\r\n6. Menyehatkan otot\r\nSeiring pertambahan usia, massa otot semakin lama akan semakin berkurang dan membuat kita jadi semakin rentan akan cedera. Agar massa otot bisa tetap terjaga, konsumsi protein harus dipenuhi dengan baik setiap harinya.\r\nDaging ayam kalkun adalah sumber protein yang sangat baik untuk tubuh, terutama bagian dadanya.\r\nSecara umum, Anda disarankan untuk mengonsumsi setidaknya 4-5 porsi dalam seminggu daging rendah lemak baik itu dada ayam kalkun, ayam biasa, maupun daging sapi tanpa lemak, untuk tetap menjaga massa otot.\r\nAyam kalkun vs ayam biasa, lebih sehat mana?\r\nMeski sama-sama disebut ayam, tapi banyak orang mengklaim bahwa daging ayam kalkun lebih sehat dibandingkan dengan ayam biasa. Pada kenyataannya, kedua jenis protein ini sama sehatnya.\r\nSebab jika dilihat secara rinci dari kandungan proteinnya, dalam sekitar 30 gram dada ayam kalkun, terkandung 8 gram protein. Sementara itu, pada berat yang sama, dada ayam biasa mengandung 9 gram protein.\r\nDaging paha bawah ayam kalkun dan ayam biasa juga memiliki jumlah protein yang sama. Lalu untuk daging paha atas, daging ayam kalkun memiliki sedikit lebih banyak protein dibanding ayam biasa.\r\nDengan demikian bisa disimpulkan bahwa baik ayam kalkun maupun ayam biasa, sama-sama bisa menjadi pilihan sumber protein yang sehat.', 2, '2020-11-29 15:12:04', '2020-11-29 15:12:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Blog Tanaman', '2020-11-29 13:39:50', '2020-11-29 06:39:50'),
(2, 'Blog Makanan', '2020-11-29 13:39:59', '2020-11-29 06:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_blog`, `nama`, `email`, `isi`, `created_at`, `updated_at`) VALUES
(1, 2, 'eni', 'eni@gmail.com', 'Wahh keren sangat membantu sekali, akhirnya dengan ini saya bisa mendapat beberapa pengetahuan yaitu :\r\n1. Tentang khasiat ayam kalkun,\r\n2. Tentang bagaimana cara pengolahannya\r\n3. Tentang bagaimana cara menjaga pola hidup sehat', '2020-11-29 08:11:30', '2020-11-29 08:11:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Erpi Resty Utari', 'erpiresty', 'erpiresty@gmail.com', '$2y$10$z/R/hA1PO.3LLueZvfOateD0QLPttJOTn7PVBm4oLX.91ij875G92', NULL, '2020-11-17 06:08:35', '2020-11-17 06:08:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 1, '+62896435336', '2020-11-29 15:14:10', '2020-11-29 15:14:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
