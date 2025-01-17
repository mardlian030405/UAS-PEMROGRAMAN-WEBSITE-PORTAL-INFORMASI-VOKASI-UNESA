-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2025 pada 14.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ardli', '$2y$10$9nadTveIhQRye.vP0UeaoebEK2UjP9ZpMJ4qZYWyORFenSfkB2/Ui', '2025-01-09 01:07:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `headline`, `content`, `image`) VALUES
(1, 'Mahasiswa D4 Manajemen Informatika Raih Juara 2 di PIMNAS 37 Kategori Poster PKM-VGK', 'Tim mahasiswa Universitas Negeri Surabaya berhasil mengukir prestasi gemilang dengan meraih Juara 2 dalam kategori poster Program Kreativitas Mahasiswa Video Gagasan Konstruktif (PKM-VGK) pada ajang Pekan Ilmiah Mahasiswa Nasional (PIMNAS) ke-37.\r\n\r\nAnggota tim terdiri dari :\r\n\r\n1. Karna Abadi, S1 Pendidikan Biologi\r\n\r\n2. Akbar Wildhanata, S1 Tenik Elektro\r\n\r\n3. Roy Nurfaza, D4 Manajemen Informatika\r\n\r\n4. May Trheya Kasih, S1 Ilmu Administrasi Negara\r\n\r\nPencapaian ini menjadi bukti nyata komitmen Universitas Negeri Surabaya dalam mendukung pengembangan kreativitas dan ide-ide baru mahasiswanya. Prestasi ini diharapkan dapat memotivasi mahasiswa lainnya untuk terus berkarya, berinovasi, dan membanggakan almamater di level nasional. Selamat kepada tim yang telah mengharumkan nama kampus, semoga sukses ini membawa inspirasi dan motivasi bagi generasi berikutnya.', 'post 3.jpg'),
(2, 'Dosen Manajemen Informatika Universitas Negeri Surabaya Gelar Pengabdian Masyarakat: Implementasi Scratch Sebagai Media Pembelajaran Interaktif di SDN Hangtuah 7 Surabaya', 'Dalam rangka mendukung inovasi pembelajaran berbasis teknologi, dosen manajemen informatika dari Universitas Negeri Surabaya mengadakan kegiatan pengabdian kepada masyarakat di SDN Hangtuah 7 Surabaya. Kegiatan ini bertemakan “Implementasi Scratch sebagai Media Pembelajaran Interaktif” dan bertujuan memperkenalkan teknologi pembelajaran berbasis pemrograman visual kepada guru dan siswa. Program ini berlangsung dengan penuh antusiasme, melibatkan berbagai elemen sekolah, termasuk guru, siswa, dan tenaga kependidikan.\r\n\r\nScratch, sebuah perangkat lunak pemrograman visual yang mudah digunakan sebagai alat inovatif dalam mendukung proses pembelajaran. Melalui pelatihan ini, para guru diajarkan cara memanfaatkan Scratch untuk membuat media pembelajaran yang interaktif dan menarik. Dengan fitur-fitur seperti animasi, pembuatan permainan, hingga simulasi, Scratch diharapkan mampu meningkatkan minat siswa dalam belajar sekaligus mengasah kemampuan berpikir logis dan kreatif mereka.\r\n\r\nKegiatan ini menjadi pengalaman baru yang menyenangkan bagi para siswa. Mereka diajak langsung untuk menggunakan Scratch dalam membuat proyek sederhana seperti animasi bergerak atau permainan interaktif. Melalui praktik ini, siswa belajar bagaimana menghubungkan konsep-konsep yang dipelajari di kelas dengan teknologi digital. Hal ini tidak hanya memperkaya pemahaman mereka tetapi juga menumbuhkan rasa percaya diri dalam menggunakan teknologi.\r\n\r\nKegiatan ini merupakan bagian dari komitmen UNESA untuk berperan aktif dalam mencerdaskan kehidupan bangsa melalui inovasi pendidikan. Dosen yang terlibat dalam pengabdian ini juga berharap dapat memberikan dampak yang berkelanjutan di mana teknologi seperti Scratch dapat menjadi bagian dari kurikulum dan pembelajaran sehari-hari di sekolah.\r\n\r\nDengan pelaksanaan kegiatan ini diharapkan tidak hanya guru dan siswa yang mendapatkan manfaat tetapi juga dunia pendidikan secara umum. Inovasi seperti ini menjadi langkah strategis dalam mempersiapkan generasi muda yang melek teknologi dan mampu bersaing di era digital. Ke depan, UNESA berkomitmen untuk terus mendukung kegiatan serupa di berbagai sekolah lainnya.', 'foto 1.jpg'),
(3, 'Eksplorasi Teknologi AR dan VR: Manajemen Informatika Unesa Kunjungi PT. Molca Teknologi Nusantara', 'Surabaya, 31 Oktober 2024 – Himpunan Mahasiswa Manajemen Informatika (Himafortic) Universitas Negeri Surabaya (Unesa) menyelenggarakan Company Visit di PT. Molca Teknologi Nusantara, sebuah perusahaan yang bergerak di bidang jasa Augmented Reality (AR), Virtual Reality (VR), dan digitalisasi. Berlokasi di Jalan Dharmahusada Indah Barat V AA No.30A, Mojo, Kec. Gubeng, Surabaya, kegiatan ini bertujuan memberikan pengalaman langsung kepada mahasiswa mengenai penerapan teknologi inovatif di dunia industri.\r\n\r\nKunjungan ini disambut hangat oleh pihak perusahaan. Peserta yang sebagian besar merupakan mahasiswa manajemen informatika unesa mendapatkan pemaparan langsung tentang bagaimana teknologi AR dan VR diterapkan dalam berbagai proyek serta bagaimana digitalisasi menjadi kunci transformasi di berbagai sektor. Selain itu, mahasiswa juga berkesempatan untuk berdiskusi dengan para praktisi profesional serta menambah wawasan terkait peluang dan tantangan di industri teknologi.\r\n\r\nTidak hanya mahasiswa, kegiatan ini juga dihadiri oleh Kepala Program Studi dan sejumlah dosen dari D4 Manajemen Informatika. Kehadiran mereka bertujuan untuk mendampingi mahasiswa sekaligus memperkuat sinergi antara institusi pendidikan dan dunia industri. \"Kegiatan seperti ini sangat penting untuk memperluas wawasan mahasiswa dan menghubungkan teori akademik dengan praktik di lapangan,\" ujar salah satu dosen yang hadir.\r\n\r\nDengan adanya Company Visit ini kita berharap dapat terus memotivasi mahasiswa untuk mengembangkan kemampuan mereka di bidang teknologi sehingga siap menghadapi tantangan di dunia kerja. PT. Molca Teknologi Nusantara sendiri juga memberikan apresiasi terhadap antusiasme mahasiswa dan membuka peluang kolaborasi lebih lanjut dengan Unesa di masa depan.', 'foto psw2.jpg'),
(4, 'Kolaborasi Inovasi Dosen Unesa, UNY, dan UNP: Pembelajaran Fisika melalui Permainan Tradisional Berbasis Virtual Reality di Konaspi 2024', 'Surabaya, 8 Oktober 2024 — Pada Konvensi Nasional Pendidikan Indonesia (Konaspi) XI yang diadakan di Universitas Negeri Surabaya (Unesa), para dosen dari Program Studi Sarjana Terapan Manajemen Informatika Unesa berkolaborasi dengan Universitas Negeri Yogyakarta (UNY) dan Universitas Negeri Padang (UNP) untuk mempresentasikan hasil penelitian inovatif dalam pembelajaran fisika berbasis teknologi. Penelitian ini difasilitasi oleh Direktorat Inovasi Unesa dengan tujuan mengadaptasi permainan tradisional lato-lato, tong gelundung, dan kerapan sapi ke dalam teknologi virtual reality (VR) sebagai media pembelajaran interaktif.\r\n\r\nMelalui penelitian ini, teknologi VR diterapkan untuk membantu siswa memahami konsep-konsep fisika, seperti gaya, energi, dan momentum dengan cara yang lebih menarik dan interaktif. Misalnya, dalam permainan lato-lato dengan konsep getaran dapat disimulasikan sedangkan kerapan sapi dapat menunjukkan prinsip percepatan dan gaya gesekan. Pendekatan ini diharapkan dapat memperkuat pemahaman siswa dengan menghadirkan suasana belajar yang menyenangkan dan mudah dipahami.\r\n\r\nInisiatif ini juga bertujuan untuk melestarikan budaya lokal dengan mengintegrasikannya ke dalam pembelajaran sains melalui teknologi modern. Di pameran Konaspi 2024, para pengunjung dapat mencoba simulasi VR dari ketiga permainan ini yang tidak hanya memperkenalkan konsep fisika secara langsung tetapi juga mengajak pengguna untuk mengapresiasi kearifan lokal.\r\n\r\nPara dosen dari ketiga institusi berharap bahwa inovasi ini dapat meningkatkan antusiasme siswa terhadap fisika sekaligus mengenalkan budaya melalui pendekatan teknologi. Mereka juga optimis bahwa metode ini dapat diadaptasi lebih luas untuk memperkaya metode pengajaran mata pelajaran sains di tingkat sekolah menengah dan perguruan tinggi di Indonesia.', 'post 3 o.jpg'),
(5, 'Web 3.0: Teknologi yang Akan Mengubah Cara Kita Berinteraksi dengan Internet', 'Apa Itu Web 3?\r\nWeb 3.0 adalah generasi ketiga dari World Wide Web, yang saat ini sedang dalam proses pengembangan. Web 3.0 akan menjadi lebih cerdas dan responsif, dengan kemampuan untuk memahami dan memproses informasi dengan cara yang lebih mirip dengan manusia.\r\n\r\nSejarah Web\r\nWeb telah berkembang melalui beberapa generasi:\r\n\r\nWeb 1.0 (1989-2005): Web statis, dengan konten yang dibuat oleh beberapa orang dan tidak ada interaksi antara pengguna.\r\nWeb 2.0 (2005-sekarang): Web dinamis, dengan konten yang dibuat oleh pengguna dan interaksi antara pengguna.\r\nWeb 3.0 (masa depan): Web yang lebih cerdas dan responsif, dengan kemampuan untuk memahami dan memproses informasi dengan cara yang lebih mirip dengan manusia.\r\nFitur Utama Web 3.0\r\n\r\n\r\nBeberapa fitur utama Web 3.0 adalah:\r\n\r\nDesentralisasi: Web 3.0 akan menggunakan teknologi blockchain untuk memungkinkan desentralisasi data dan aplikasi.\r\nKecerdasan Buatan (AI): Web 3.0 akan menggunakan AI untuk memproses dan memahami informasi dengan cara yang lebih mirip dengan manusia.\r\nPembelajaran Mesin (ML): Web 3.0 akan menggunakan ML untuk memungkinkan aplikasi belajar dari data dan meningkatkan kinerja.\r\nBlockchain: Web 3.0 akan menggunakan blockchain untuk memungkinkan desentralisasi data dan aplikasi.\r\nManfaat Web 3.0\r\nBeberapa manfaat Web 3.0 adalah:\r\n\r\nLebih banyak kontrol atas data pribadi: Web 3.0 akan memungkinkan pengguna memiliki lebih banyak kontrol atas data pribadi mereka.\r\nLebih banyak keamanan: Web 3.0 akan menggunakan teknologi blockchain untuk memungkinkan keamanan yang lebih baik.\r\nLebih banyak kemampuan: Web 3.0 akan memungkinkan aplikasi yang lebih cerdas dan responsif.\r\nContoh Aplikasi Web 3.0\r\nBeberapa contoh aplikasi Web 3.0 adalah:\r\n\r\nSiri: Asisten virtual yang menggunakan AI untuk memproses dan memahami perintah suara.\r\n        \r\nWolfram Alpha: Mesin pencari yang menggunakan AI untuk memproses dan memahami perintah suara.\r\n     \r\nBrave Browser: Browser yang menggunakan teknologi blockchain untuk memungkinkan desentralisasi data dan aplikasi.\r\n\r\nKesimpulan\r\nWeb 3.0 adalah generasi ketiga dari World Wide Web, yang saat ini sedang dalam proses pengembangan. Web 3.0 akan menjadi lebih cerdas dan responsif, dengan kemampuan untuk memahami dan memproses informasi dengan cara yang lebih mirip dengan manusia.\r\n\r\nWeb 3.0 akan memiliki dampak besar pada cara kita berinteraksi dengan internet dan teknologi. Dengan kemampuan untuk memahami dan memproses informasi dengan cara yang lebih mirip dengan manusia, Web 3.0 akan memungkinkan aplikasi yang lebih cerdas dan responsif.', 'post 5 p.jpg'),
(6, 'Jelajahi Dunia Digital: Mengapa Literasi Digital Penting untuk Semua Orang?', 'Di era teknologi saat ini, literasi digital sudah menjadi keterampilan penting yang harus dimiliki setiap orang. Literasi digital adalah kemampuan untuk mengakses, memahami, dan menggunakan informasi dari sumber digital secara bermakna. Keterampilan tersebut sangat penting tidak hanya untuk pekerjaan, tetapi juga untuk kehidupan sehari-hari, seperti mengakses layanan publik, berkomunikasi di media sosial, dan melindungi data pribadi.\r\nMenurut laporan UNESCO, hanya 23% populasi dunia yang memiliki keterampilan digital yang memadai. Hal ini menunjukkan masih banyak masyarakat yang perlu meningkatkan pemahamannya terhadap teknologi digital.\r\nMengapa kemampuan digital itu penting?\r\nAkses terhadap informasi dan layanan\r\nBanyak layanan kini tersedia secara digital, mulai dari layanan medis hingga layanan perbankan. Literasi digital memungkinkan masyarakat mengakses layanan tersebut dengan mudah dan cepat tanpa harus pergi ke lokasi fisik.\r\nMenghindari penipuan dan kejahatan dunia maya\r\nAncaman digital seperti penipuan online dan pencurian data sedang meningkat dan memerlukan peningkatan kewaspadaan. Literasi digital membantu individu melindungi informasi pribadi mereka dan menghindari risiko kejahatan dunia maya.\r\nPeluang Karir\r\nKeterampilan digital merupakan kebutuhan utama dalam dunia kerja. Pekerjaan menjadi  semakin bergantung pada teknologi, dan memiliki keterampilan digital yang kuat dapat membuka peluang karir yang lebih luas.\r\nPenyaringan Informasi\r\nInternet penuh dengan berbagai informasi yang belum tentu benar. Literasi digital membantu individu membedakan informasi  valid dan berita palsu agar tidak mudah terpengaruh oleh berita palsu.\r\nCara Meningkatkan Literasi Digital\r\nAda beberapa langkah yang dapat Anda lakukan untuk meningkatkan literasi digital Anda, Seperti :\r\nIkuti kursus online  teknologi digital atau keamanan siber.\r\nMembaca buku dan artikel tentang perkembangan teknologi dan keamanan digital.\r\nLatih keterampilan digital Anda menggunakan aplikasi, perangkat lunak, atau fitur keamanan terbaru.\r\nTantangan dalam meningkatkan literasi digital\r\nWalaupun manfaat literasi digital sangat besar, ada beberapa tantangan yang dihadapi masyarakat. Akses terhadap teknologi masih menjadi masalah di banyak wilayah, terutama di daerah terpencil yang belum memiliki infrastruktur internet yang memadai. Selain itu, perubahan teknologi yang sangat cepat juga membuat banyak orang kesulitan untuk terus memperbarui keterampilan digital mereka.\r\nOleh karena itu, diperlukan kerja sama antara pemerintah, sektor swasta, dan institusi pendidikan untuk memberikan akses yang lebih luas kepada teknologi dan pelatihan digital. Ini akan memastikan bahwa tidak ada individu atau kelompok yang tertinggal dalam perkembangan digital yang cepat ini.', 'post 9l.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
