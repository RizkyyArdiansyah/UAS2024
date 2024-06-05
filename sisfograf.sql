-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:47 AM
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
-- Database: `sisfograf`
--

-- --------------------------------------------------------

--
-- Table structure for table `fauna`
--

CREATE TABLE `fauna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fauna`
--

INSERT INTO `fauna` (`id`, `nama`, `kategori`, `deskripsi`, `lat`, `lon`, `img`) VALUES
(1, 'Komodo', 'Reptil', 'Komodo adalah kadal terbesar di dunia yang hanya ditemukan di Kepulauan Komodo, Nusa Tenggara Timur. Mereka terkenal dengan ukurannya yang besar, mencapai 3 meter dan berat hingga 70 kg. Komodo merupakan predator puncak dengan gigitan berbisa dan kemampuan berburu yang luar biasa.', -8.5662, 119.4888, NULL),
(2, 'Kura-kura Leher Ular Rote', 'Reptil', 'Kura-kura dengan leher panjang yang hanya ditemukan di Pulau Rote, Nusa Tenggara Timur. Satwa ini hidup di perairan tawar dan termasuk spesies yang terancam punah karena perusakan habitat dan perdagangan ilegal.', -10.7401, 123.0725, NULL),
(3, 'Kadal Timor', 'Reptil', 'Kadal yang ditemukan di Timor dan beberapa pulau kecil di sekitarnya. Mereka dikenal dengan tubuh yang ramping dan kemampuan beradaptasi di berbagai habitat, mulai dari hutan hingga area berbatu. Kadal ini juga sering dijadikan hewan peliharaan.', -9.245, 124.9632, NULL),
(4, 'Pit Viper Hijau Sunda', 'Reptil', 'Pit Viper Hijau Sunda adalah ular berbisa yang ditemukan di hutan-hutan Sumatera dan Jawa. Ular ini memiliki warna hijau mencolok yang membantu mereka berkamuflase di pepohonan. Gigitan ular ini sangat berbisa dan dapat menyebabkan efek serius pada manusia.', -1, 102, NULL),
(5, 'Bunglon Jawa', 'Reptil', 'Bunglon Jawa adalah spesies bunglon endemik yang ditemukan di hutan-hutan Jawa. Mereka terkenal dengan kemampuan mengubah warna kulit untuk berkamuflase dan berkomunikasi. Bunglon ini memiliki ekor panjang dan mata yang dapat bergerak secara independen.', -7.6145, 110.7122, NULL),
(6, 'Anoa', 'Mamalia', 'Mamalia kecil mirip kerbau yang hidup di Sulawesi. Anoa adalah hewan herbivora yang menghabiskan sebagian besar waktunya di hutan-hutan dataran tinggi dan rendah. Mereka terancam oleh perburuan dan hilangnya habitat akibat deforestasi.', -1.4239, 120.0091, NULL),
(7, 'Badak Jawa', 'Mamalia', 'Salah satu spesies badak paling langka di dunia, tinggal di Taman Nasional Ujung Kulon, Jawa Barat. Badak Jawa adalah spesies terancam kritis dengan populasi yang sangat kecil. Upaya konservasi intensif dilakukan untuk melindungi mereka.', -6.7568, 105.4205, NULL),
(8, 'Babirusa', 'Mamalia', 'Babi liar dengan gading melengkung ke belakang, ditemukan di Sulawesi dan beberapa pulau kecil di sekitarnya. Babirusa dikenal dengan gigi taring jantan yang mencolok dan perilaku unik mereka. Mereka adalah spesies terancam.', -1.4333, 121.4456, NULL),
(9, 'Macan Tutul Jawa', 'Mamalia', 'Subspesies macan tutul yang hanya ditemukan di pulau Jawa. Macan Tutul Jawa adalah predator puncak yang sangat terancam akibat hilangnya habitat dan perburuan. Mereka memiliki pola bulu yang khas dan berperan penting dalam ekosistem.', -7.0256, 106.0283, NULL),
(10, 'Kuskus Beruang Talaud', 'Mamalia', 'Marsupial endemik di Kepulauan Talaud. Kuskus Beruang Talaud memiliki bulu yang lebat dan ekor yang kuat untuk membantu mereka bergerak di pohon. Mereka adalah spesies yang terancam akibat deforestasi dan perburuan.', 4.2615, 126.8469, NULL),
(11, 'Kijang Bawean', 'Mamalia', 'Rusa kecil yang hanya ditemukan di Pulau Bawean, Jawa Timur. Kijang Bawean adalah spesies terancam yang hidup di hutan-hutan dan lahan basah. Mereka terkenal dengan tanduk kecil dan pola hidup soliter.', -5.75, 112.6333, NULL),
(12, 'Orangutan Sumatera', 'Primata', 'Orangutan Sumatera adalah primata yang hanya hidup di hutan-hutan Sumatera. Mereka adalah spesies terancam punah karena deforestasi dan perburuan. Orangutan ini dikenal dengan rambut merah-coklat panjang dan kehidupan arboreal yang menghabiskan sebagian besar waktunya di pohon.', 3.4224, 98.5653, NULL),
(13, 'Orangutan Kalimantan', 'Primata', 'Orangutan Kalimantan adalah primata besar yang ditemukan di hutan-hutan Kalimantan. Mereka memiliki ciri khas rambut panjang berwarna coklat dan kehidupan soliter. Orangutan Kalimantan adalah spesies terancam punah akibat hilangnya habitat dan perburuan ilegal.', 1.4842, 113.4806, NULL),
(14, 'Siamang', 'Primata', 'Siamang adalah primata yang hidup di Sumatera dan Semenanjung Malaysia. Mereka memiliki warna hitam pekat dan dikenal dengan kantung suara besar yang memungkinkan mereka menghasilkan panggilan nyaring. Siamang adalah pemakan buah dan daun yang sangat sosial.', -2.5479, 102.4167, NULL),
(15, 'Monyet Hitam Sulawesi', 'Primata', 'Monyet Hitam Sulawesi, juga dikenal sebagai yaki, adalah primata dengan bulu hitam pekat yang hidup di Sulawesi Utara. Mereka memiliki jambul khas di kepala dan merupakan spesies terancam punah karena kehilangan habitat dan perburuan.', 1.4185, 125.0166, NULL),
(16, 'Bekantan', 'Primata', 'Bekantan adalah monyet berhidung panjang yang ditemukan di Kalimantan. Mereka dikenal dengan hidung besar pada jantan yang digunakan untuk menarik pasangan. Bekantan adalah spesies terancam akibat perusakan habitat mangrove tempat mereka tinggal.', 3.3012, 114.5908, NULL),
(17, 'Kukang Jawa', 'Primata', 'Kukang Jawa adalah primata nokturnal yang hanya ditemukan di pulau Jawa. Mereka memiliki mata besar yang membantu penglihatan malam hari dan racun yang dikeluarkan dari kelenjar di lengan mereka. Kukang ini terancam oleh perdagangan hewan peliharaan.', -7.45, 110, NULL),
(18, 'Tarsius Tarsier', 'Primata', 'Tarsius Tarsier adalah primata kecil dengan mata besar yang hidup di Sulawesi. Mereka adalah hewan nokturnal dan karnivora yang berburu serangga dan hewan kecil lainnya. Tarsius dikenal karena kemampuan mereka melompat jauh antara pepohonan.', 1.3697, 124.7405, NULL),
(19, 'Lutung Jawa', 'Primata', 'Lutung Jawa adalah primata yang ditemukan di hutan-hutan Jawa. Mereka memiliki bulu hitam atau keemasan tergantung pada usia dan status sosial. Lutung ini hidup dalam kelompok sosial yang kompleks dan menghabiskan sebagian besar waktu mereka di pohon.', -7.6145, 110.7122, NULL),
(20, 'Burung Cenderawasih', 'Burung', 'Burung Cenderawasih terkenal dengan bulu indahnya yang berwarna-warni. Mereka ditemukan di Papua dan Maluku. Burung ini sering disebut \"bird of paradise\" karena tarian kawin yang memukau. Sayangnya, mereka terancam oleh perusakan habitat dan perburuan.', -4.2699, 138.0803, NULL),
(21, 'Elang Jawa', 'Burung', 'Elang Jawa adalah burung pemangsa yang hanya ditemukan di pulau Jawa. Mereka memiliki ciri khas bulu hitam dan putih serta kemampuan terbang yang luar biasa. Elang ini adalah simbol satwa langka Indonesia dan sangat terancam oleh deforestasi.', -7.6145, 110.7122, NULL),
(22, 'Jalak Bali', 'Burung', 'Jalak Bali adalah burung endemik Bali yang terkenal dengan bulu putih bersih dan garis biru di sekitar mata. Burung ini sangat terancam punah akibat perburuan dan perdagangan ilegal. Jalak Bali adalah salah satu spesies yang paling diupayakan konservasinya.', -8.4095, 115.1889, NULL),
(23, 'Maleo', 'Burung', 'Maleo adalah burung besar yang hanya ditemukan di Sulawesi. Mereka dikenal dengan kebiasaan unik mengubur telur mereka di pasir vulkanik atau panas bumi untuk menetaskannya. Maleo adalah spesies terancam karena kehilangan habitat dan perburuan telur.', -0.9192, 121.3918, NULL),
(24, 'Nuri Raja Ambon', 'Burung', 'Nuri Raja Ambon adalah burung berwarna cerah yang ditemukan di Kepulauan Maluku. Mereka memiliki bulu merah dan hijau yang mencolok serta paruh besar. Nuri ini adalah spesies yang terancam akibat perusakan habitat dan perdagangan ilegal.', -3.6545, 128.19, NULL),
(25, 'Cekakak Jawa', 'Burung', 'Cekakak Jawa adalah burung kecil berwarna cerah yang ditemukan di Jawa dan Bali. Mereka dikenal dengan suara khas dan kebiasaan berburu serangga dan hewan kecil lainnya. Burung ini sering ditemukan di hutan dan area dekat air.', -7.6145, 110.7122, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flora`
--

CREATE TABLE `flora` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flora`
--

INSERT INTO `flora` (`id`, `nama`, `kategori`, `deskripsi`, `lat`, `lon`, `img`) VALUES
(1, 'Rafflesia Arnoldii', 'Bunga', 'Rafflesia Arnoldii adalah bunga terbesar di dunia yang tumbuh di hutan hujan Sumatera dan Kalimantan. Bunga ini terkenal dengan bau busuknya yang menarik serangga penyerbuk. Rafflesia Arnoldii adalah bunga parasit yang tumbuh di dalam akar tumbuhan inang.', -2.9761, 101.4476, 'https://example.com/rafflesia2.jpg'),
(2, 'Anggrek Bulan', 'Tanaman', 'Anggrek Bulan adalah salah satu jenis anggrek tercantik yang tumbuh di hutan-hutan pegunungan Indonesia. Bunga anggrek bulan berwarna putih bersih dengan aroma yang harum. Mereka sering dipelihara sebagai tanaman hias.', -7.1026, 107.0891, 'https://example.com/anggrek2.jpg'),
(3, 'Bunga Kenanga', 'Bunga', 'Bunga Kenanga adalah jenis bunga yang terkenal dengan aroma yang khas. Mereka tumbuh di daerah tropis dan sering digunakan dalam minyak wangi dan bahan masakan. Bunga kenanga memiliki bunga berwarna kuning muda dan daun yang hijau gelap.', -7.4292, 112.42, 'https://example.com/kenanga.jpg'),
(4, 'Bunga Melati', 'Tanaman', 'Bunga Melati adalah jenis tanaman yang terkenal dengan aroma harumnya. Mereka tumbuh di seluruh Indonesia dan sering digunakan dalam upacara keagamaan dan perayaan. Bunga melati memiliki bunga kecil yang putih dan daun yang hijau kegelapan.', -7.8034, 110.3393, 'https://example.com/melati.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fauna`
--
ALTER TABLE `fauna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `flora`
--
ALTER TABLE `flora`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
