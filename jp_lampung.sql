-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 07:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jp_lampung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `visi`, `misi`) VALUES
(2, '<p><span style=\"color:#333333\"><strong>Menjadi Perusahaan Asuransi Terkemuka di Indonesia.</strong><br />\r\n<em>To be the Foremost Insurance Company in Indonesia</em></span></p>\r\n', '<p><span style=\"color:#222222\"><strong>Menyediakan Produk Tepat Guna dengan Pelayanan Prima</strong><br />\r\n<em>To Provide Appropiate Products With Excellent Service</em></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_astor`
--

CREATE TABLE `tbl_astor` (
  `id_astor` int(11) NOT NULL,
  `foto_astor` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subjudul` varchar(255) DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `lingkup` text DEFAULT NULL,
  `jaminan` text DEFAULT NULL,
  `tidak_jaminan` text DEFAULT NULL,
  `jenis_jaminan` text DEFAULT NULL,
  `berkas1` text DEFAULT NULL,
  `berkas2` text DEFAULT NULL,
  `berkas3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(1, 'a', 'a', 'k', 'kk', '2023-01-23 03:01:35', 1),
(2, 'kkk', '', '<p>kkkkkkkkkkk</p>\r\n', 'Tak_berjudul63_20221217082520.png', '2023-01-22 17:00:00', NULL),
(3, 'k m l m', 'k-m-l-m', '<p>kkkkkkkkkkkkkkkk</p>\r\n\r\n<p>llllllllllll</p>\r\n\r\n<p>lllllllllll</p>\r\n', 'Tak_berjudul61_20221217074240.png', '2023-01-22 17:00:00', NULL),
(5, 'dd', 'dd', '<p>dd</p>\r\n', 'Untitled160_20221222182047.png', '2023-01-22 17:00:00', 1),
(6, 'dd', 'dd', '<ul>\r\n	<li>kklll</li>\r\n	<li>hhhhhh</li>\r\n	<li>ggggggg</li>\r\n</ul>\r\n', 'Tak_berjudul63_202212170825201.png', '2023-01-27 17:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `id_carousel` int(11) NOT NULL,
  `foto_carousel` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`id_carousel`, `foto_carousel`, `keterangan`) VALUES
(1, 'crs.png', '<p>foto 1</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jpaspri`
--

CREATE TABLE `tbl_jpaspri` (
  `id_jpAspri` int(11) NOT NULL,
  `foto_jpAspri` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subjudul` varchar(255) DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `kelebihan` text DEFAULT NULL,
  `tidak_jaminan` text DEFAULT NULL,
  `berkas1` text DEFAULT NULL,
  `berkas2` text DEFAULT NULL,
  `berkas3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jpaspri`
--

INSERT INTO `tbl_jpaspri` (`id_jpAspri`, `foto_jpAspri`, `judul`, `subjudul`, `desc1`, `desc2`, `kelebihan`, `tidak_jaminan`, `berkas1`, `berkas2`, `berkas3`) VALUES
(1, 'download_(3).png', 'JP-ASPRI', 'Asuransi Kecelakaan Diri', '<p><span style=\"color:#444444\">JP-ASPRI adalah solusi yang tepat untuk memberikan perlindungan pribadi bagi Anda, orang-orang yang Anda sayangi.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\">Kecelakaan, dapat terjadi dimana saja, dan bersifat tiba-tiba. Tidak hanya di jalan raya tapi juga di rumah, di tempat kerja, pusat keramaian atau banyak tempat lainnya. Anda tidak akan pernah menduga apa yang akan terjadi.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\"><span style=\"background-color:#ffffff\">JP-ASPRI adalah solusi yang tepat untuk memberikan perlindungan bagi Anda, orang-orang yang Anda sayangi, karyawan Anda ataupun rekan-rekan Anda dari risiko kecelakaan, karena JP-ASPRI tidak hanya melindungi di tempat kerja atau di sekolah, tetapi selama 24 jam dimana saja berada. Jangan menunggu waktu percayakan sepenuhnya perlindungan asuransi kecelakaan pribadi pada JP-ASPRI, produk asuransi terpercaya dari JRP-INSURANCE.</span></span></p>\r\n', '<ul style=\"list-style-type:square\">\r\n	<li><span style=\"color:#ffffff\">Proses PERMOHONAN SANTUNAN SEDERHANA</span></li>\r\n	<li><span style=\"color:#ffffff\">Mendapat JAMINAN GANDA, bila kecelakaan yang terjadi juga dalam ruang lingkup Jaminan kecelakaan Lalu Lintas Jalan sesuai UU No. 33 &amp; 34 Tahun 1964.</span></li>\r\n	<li><span style=\"color:#ffffff\">SANTUNAN DITERIMA LEBIH DARU SATU KALI, selama kartu peserta masih berlaku</span></li>\r\n	<li><span style=\"color:#ffffff\">Identitas KARTU PESERTA ASURANSI EKSKLUSIF</span></li>\r\n</ul>\r\n', '<ul style=\"list-style-type:square\">\r\n	<li><span style=\"color:#ffffff\">Tertanggung turut serta dalam kegiatan olahraga berbahaya seperti tinju, Gulat, Karate, Judo, Arung Jeram, Diving, Snorkeling, Terjun Payung, Mendaki Gunung, Berburu, turut serta dalam perlombaan/ketangkasan.</span></li>\r\n	<li><span style=\"color:#ffffff\">Tertanggung dengan sengaja melakukan kejahatan atau turut serta dalam kejahatan, huruhara, penggunaan obat terlarang, mabok,bunuh diri.</span></li>\r\n	<li><span style=\"color:#ffffff\">Tertanggung bertindak sebagai pengemudi kendaraan bermotor tanpa memiliki SIM (surat izin mengemudi) yang sah.</span></li>\r\n	<li><span style=\"color:#ffffff\">Mengikuti Latihan Militer.</span></li>\r\n	<li><span style=\"color:#ffffff\">Menggunakan obat-obatan terlarang, Narkotika, dan Obat sejenis yang dapat mengakibatkan kematian</span></li>\r\n	<li><span style=\"color:#ffffff\">Penyakit Covid19</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><span style=\"color:#444444\">Tertanggung sesegera mungkin melaporkan/menyampaikan keterangan tertulis mengenai kerugian yang terjadi dengan tidak merubah/merusak objek yang mengalami kerugian.</span></li>\r\n	<li><span style=\"color:#444444\">Pengajuan klaim dilakukan dengan: - Mengisi formulir Laporan Klaim Asuransi Kecelakaan Diri (LK1)<br />\r\n	- Melampirkan kwitansi biaya pengobatan<br />\r\n	- Melampirkan surat kematian, copy Kartu Keluarga dan KTP khusus untuk meninggal dunia<br />\r\n	- Untuk korban cacat tetap dilengkapi dengan laporan kesehatan terakhir dari dokter.<br />\r\n	- Dokumen pendukung lainnya yang diperlukan</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n	<p>Surat keterangan tentang kecelakaan dan penghentian pencarian dari pihak yang berwenang.</p>\r\n	</li>\r\n	<li>\r\n	<p>Surat pernyataan dari ahli waris akan mengembalikan santunan apabila Tertanggung diketemukan kembali dalam keadaan hidup.</p>\r\n	</li>\r\n	<li>\r\n	<p>Asli dan fotocopy terlegalisir Sertifikat Kematian dari Dinas Kependudukan dan Cacatan Sipil setempat, dalam hal pengajuan klaim Pengantian Biaya Pengurusan Sertifikat Kematian.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sertifikat Kematian asli akan dikembalikan kepada ahli waris setelah proses verifikasi penyelesaian klaim.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>7. &nbsp; Dalam hal Tertanggung mengalami cacat tetap,</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Surat keterangan pemeriksaan (Visum) dari Dokter yang melakukan perawatan atau pengobatan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Surat keterangan para saksi.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kwitansi asli atau fotocopy kwitansi yang telah dilegalisir dari dokter, rumah sakit, laboratorium, apotik, dalam hal Tertangggung menjalani perawatan atau pengobatan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kuitansi asli yang berkaitan dengan biaya sewa ambulance/kendaraan pengangkut untuk transportasi Tertanggung ke atau dari rumah sakit, dalam hal pengajuan klaim Pengantian biaya ambulance.</p>\r\n	</li>\r\n</ul>\r\n', '<p>8. &nbsp; Dalam hal pengajuan klaim Santunan Biaya Evakuasi Jenazah:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Asli surat keterangan meninggal dunia dari Lurah setempat, atau</p>\r\n	</li>\r\n	<li>\r\n	<p>Fotocopy Sertifikat Kematian yang telah dilegalisir dari Dinas Kependudukan dan Cacatan Sipil setempat.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>9. &nbsp; Dalam hal pengajuan klaim Santunan Santunan Manfaat Tunai Biaya Rawat Inap:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Asli surat keterangan rawat inap dari rumah sakit yang merawat Tertanggung, atau</p>\r\n	</li>\r\n	<li>\r\n	<p>Asli kuitansi biaya rawat inap atau fotocopy kwitansi biaya rawat inap yang telah dilegalisir dari rumah sakit yang menunjukan jumlah hari Tertanggung dirawat dirumah sakit tersebut.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>10. Dokumen lain yang relevan, wajar dan patut diminta oleh Penanggung sehubungan dengan penyelesaian klaim.</p>\r\n\r\n<p>11. Dokumen pendukung klaim lainnya disesuaikan dengan ketentuan yang ada dalam Perjanjian Kerjasama</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jpastor`
--

CREATE TABLE `tbl_jpastor` (
  `id_jpAstor` int(11) NOT NULL,
  `foto_jpAstor` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subjudul` varchar(255) DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `lingkup` text DEFAULT NULL,
  `jaminan` text DEFAULT NULL,
  `tidak_jaminan` text DEFAULT NULL,
  `jenis` text DEFAULT NULL,
  `berkas1` text DEFAULT NULL,
  `berkas2` text DEFAULT NULL,
  `berkas3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jpastor`
--

INSERT INTO `tbl_jpastor` (`id_jpAstor`, `foto_jpAstor`, `judul`, `subjudul`, `desc1`, `desc2`, `lingkup`, `jaminan`, `tidak_jaminan`, `jenis`, `berkas1`, `berkas2`, `berkas3`) VALUES
(2, 'download_(3).png', 'JP-ASTOR', 'Asuransi Kendaraan Bermotor', '<p><span style=\"color:#555555\">JP-ASTOR adalah asuransi kendaraan yang dapat menjamin resiko kerusakan dan atau kehilangan kendaraan.</span></p>\r\n', '<p><span style=\"color:#555555\">Kendaraan Anda, adalah teman setia yang selalu mengantar kemanapun Anda pergi. Namun saat ini risiko kecelakaan akibat tabrakan, perbuatan jahat orang lain, kebakaran atau bahkan risiko akibat kendaraan Anda menabrak pihak ketiga dapat terjadi kapan saja.</span></p>\r\n\r\n<p><span style=\"color:#555555\">JP-ASTOR dapat menjamin risiko-risiko kerusakan dan atau kehilangan dari kendaraan itu sendiri, Assesories kendaraan, Tanggung Jawab Hukum kepada pihak ke III (apabila kendaraan Anda menabrak pihak lain). Risiko Kecelakaan pada penumpang, pengemudi atau Tanggung Jawab Hukum kepada penumpang.</span></p>\r\n\r\n<p><span style=\"color:#555555\">Mungkin anda sudah berhati-hati, tetapi orang lain belum tentu. Untuk itu jangan pernah mengambil risiko, percayakan asuransi anda pada JP-ASTOR, Asuransi Kendaraan Bermotor dari JRP-INSURANCE. Ingat Asuransi Kendaraan bermotor ingat JP-ASTOR.</span></p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#444444\"><span style=\"font-size:14px\"><strong>Total Loss Only (TLO)</strong></span><br />\r\nJenis pertanggungan ini memberikan perlindungan dari risiko pencurian kendaraan atau risiko-risiko kerusakan akibat kecelakaan yang biaya perbaikannya memerlukan biaya sama atau lebih dari 75% dari harga kendaraan yang sebenarnya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\"><span style=\"font-size:14px\"><strong>Comprehensive / All Risk</strong></span><br />\r\nJenis pertanggungan ini menjamin risiko yang lebih luas karena disamping risiko-risiko TLO di atas juga menjamin kerugian / kerusakan sebagian/partial akibat peristiwa-peristiwa yang dijamin dalam polis.</span></p>\r\n', '<p><span style=\"color:#555555\">Kerugian / kerusakan kendaraan yang dipertanggungkan yang disebabkan oleh tabrakan, benturan, terbalik, tergelincir dari jalan, perbuatan jahat orang lain, pencurian kendaraan atau perlengkapan standar, kebakaran dan sambaran petir.</span></p>\r\n', '<p><span style=\"color:#555555\">Hilangnya keuntungan/berkurangnya nilai keuangan, pencurian perlengkapan non standar, kerusakan atau kerugian akibat penggelapan, kerugian akibat perbuatan jahat isteri /suami/keluarga/suruhan/orang yang bekerja pada tertanggung, untuk perlombaan, dikemudikan oleh orang yang tidak memiliki SIM, memasuki daerah tertutup/terlarang, pencemaran radioaktif, gempa bumi, letusan gunung berapi, angin topan, badai, banjir, perang, terorisme, kekerasan, kerusuhan, pemogokan, aus.</span></p>\r\n', '<p><span style=\"color:#444444\">Menambahkan jaminan-jaminan sebagai berikut :</span></p>\r\n\r\n<ol>\r\n	<li><span style=\"color:#444444\">Huru-Hara</span></li>\r\n	<li><span style=\"color:#444444\">Terorisme dan Sabotase</span></li>\r\n	<li><span style=\"color:#444444\">Banjir, Angin Topan, Badai, Tanah Longsor</span></li>\r\n	<li><span style=\"color:#444444\">Gempa Bumi, Tsunami dan Letusan Gunung Berapi</span></li>\r\n	<li><span style=\"color:#444444\">Tanggung Jawab Hukum Kepada Pihak III</span></li>\r\n	<li><span style=\"color:#444444\">Tanggung Jawab Hukum Kepada Penumpang</span></li>\r\n	<li><span style=\"color:#444444\">Kecelakaan Diri Penumpang</span></li>\r\n	<li><span style=\"color:#444444\">Kecelakaan Diri Pengemudi</span></li>\r\n</ol>\r\n', '<ul style=\"list-style-type:square\">\r\n	<li><span style=\"color:#444444\">Surat Tuntutan Kerugian dari Tertanggung ditanda tangani oleh yang berhak, untuk perusahaan dicap.</span></li>\r\n	<li><span style=\"color:#444444\">Formulir Klaim yang telah diisi dan ditanda tangani Tertanggung.</span></li>\r\n	<li><span style=\"color:#444444\">Copy Polis berikut lampiran-lampiran Endorsementnya, jika ada.</span></li>\r\n	<li><span style=\"color:#444444\">Foto seluruh bagian kendaraan yang rusak.</span></li>\r\n	<li><span style=\"color:#444444\">Laporan survey petugas berikut asli foto kerusakan kendaraan.</span></li>\r\n	<li><span style=\"color:#444444\">Laporan Inspeksi (Checklist Kerusakan Kendaraan)</span></li>\r\n	<li><span style=\"color:#444444\">Copy STNK dan SIM&nbsp; pengendara.</span></li>\r\n	<li><span style=\"color:#444444\">Surat keterangan/tanda lapor kejadian/laporan Polisi (kecelakaan yang dianggap besar dan melibatkan TJH III).</span></li>\r\n	<li><span style=\"color:#444444\">Estimasi biaya perbaikan bengkel (untuk kerugian yang diperkirakan mencapai kewenangan pusat dan Total Loss dilengkapi dengan lebih dari satu bengkel) .</span></li>\r\n	<li><span style=\"color:#444444\">Surat keterangan perusahaan tentang si pembawa kendaraan (untuk Polis atas nama badan hukum yang menyatakan si pembawa adalah benar sebagai karyawan perusahaan tersebut).</span></li>\r\n	<li><span style=\"color:#444444\">Surat kuasa mengurus klaim (apabila klaim diajukan secara reimbursement).</span></li>\r\n	<li><span style=\"color:#444444\">Bukti pelunasan Premi.</span></li>\r\n	<li><span style=\"color:#444444\">Surat pernyataan puas dari Tertanggung atas perbaikan kendaraan.</span></li>\r\n</ul>\r\n', '<ul style=\"list-style-type:square\">\r\n	<li><span style=\"color:#444444\">Surat Tuntutan Kerugian dari Pihak III kepada Tertanggung.</span></li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Laporan kepolisian.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Fotocopy SIM/KTP Pihak III.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Fotocopy STNK kendaraan Pihak III.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Estimasi perbaikan kendaraan dan Rincian kerugian Pihak III selain kendaraan bermotor (jika ada).</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Kwitansi biaya perawatan/surat kematian/kwitansi perbaikan kerusakan properti.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli foto kerugian / kerusakan dari Pihak III.</span></p>\r\n	</li>\r\n</ul>\r\n', '<ul style=\"list-style-type:square\">\r\n	<li><span style=\"color:#444444\">Surat Tuntutan Kerugian dari Pihak III kepada Tertanggung.</span></li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Laporan kepolisian.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Fotocopy SIM/KTP Pihak III.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Fotocopy STNK kendaraan Pihak III.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Estimasi perbaikan kendaraan dan Rincian kerugian Pihak III selain kendaraan bermotor (jika ada).</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Kwitansi biaya perawatan/surat kematian/kwitansi perbaikan kerusakan properti.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli foto kerugian / kerusakan dari Pihak III.</span></p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jpbonding`
--

CREATE TABLE `tbl_jpbonding` (
  `id_jpBonding` int(11) NOT NULL,
  `foto_jpBonding` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subjudul` text DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `berkas1` text DEFAULT NULL,
  `berkas2` text DEFAULT NULL,
  `berkas3` text DEFAULT NULL,
  `berkas4` text DEFAULT NULL,
  `berkas5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jpbonding`
--

INSERT INTO `tbl_jpbonding` (`id_jpBonding`, `foto_jpBonding`, `judul`, `subjudul`, `desc1`, `desc2`, `berkas1`, `berkas2`, `berkas3`, `berkas4`, `berkas5`) VALUES
(1, 'download_(3).png', 'JP-BONDING', 'PENJAMIN PROYEK ANDA TERLAKSANA SESUAI RENCANA', '<p>JP-BONDING Pelopor Surety Bond yang memberikan jaminan dengan standar kualitas internasional bersertifikasi ISO 9001:2000.</p>\r\n', '<p><span style=\"color:#444444\">JP-BONDING memberikan jaminan perlindungan akan resiko yang dapat terjadi disaat persiapan, pelaksanaan, dan penyelesaian proyek sehingga berjalan sesuai dengan rencana dan harapan.</span></p>\r\n', '<ul style=\"list-style-type:circle\">\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Tuntutan Pencairan Jaminan dari Obligee/Bank</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Pengumuman pemenang Tender (untuk Bid Bond)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Bukti Pengunduran Diri</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli jaminan</span></p>\r\n	</li>\r\n</ul>\r\n', '<ul style=\"list-style-type:circle\">\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Tuntutan Pencairan Jaminan dari Obligee/Bank</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Berita Acara Serah Terima Pekerjaan Pertama</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Teguran dari Obligee</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Berita Acara Pemeriksaan Hasil Pemeliharaan</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Biaya &nbsp;Perbaikan</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli Jaminan</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '<ul style=\"list-style-type:circle\">\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Tuntutan Pencairan Jaminan dari Obligee/Bank</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Peringatan dari Obligee (apabila ada/diatur dikontrak)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Pemutusan Kontrak dari Obligee</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Berita Acara Hasil Pekerjaan Akhir (Progress Report)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli Jaminan</span></p>\r\n	</li>\r\n</ul>\r\n', '<ul style=\"list-style-type:circle\">\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Tuntutan Pencairan Jaminan dari Obligee/Bank</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Peringatan dari Obligee (apabila ada/diatur dikontrak)</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Pemutusan Kontrak dari Obligee</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Bukti pembayaran uang muka Obligee ke Principal</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Bukti pembayaran termyn Obligee ke Principal</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Berita Acara Hasil Pekerjaan Akhir (Progress Report) dan perhitungan sisa uang muka sekurang-kurangnya ditandatangani olek Konsultan independen</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli Jaminan</span></p>\r\n	</li>\r\n</ul>\r\n', '<ul style=\"list-style-type:circle\">\r\n	<li>\r\n	<p><span style=\"color:#444444\">Surat Tuntutan Pencairan Jaminan dari Bea &amp;Cukai</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Bukti Pengeluaran dan penerimaan barang Pabean</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Bukti Tunggakan pembayaran Pajak</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#444444\">Asli Jaminan</span></p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jpgraha`
--

CREATE TABLE `tbl_jpgraha` (
  `id_jpGraha` int(11) NOT NULL,
  `foto_jpGraha` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `subjudul` text DEFAULT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `bangunan` text DEFAULT NULL,
  `harta` text DEFAULT NULL,
  `lingkup` text DEFAULT NULL,
  `jaminan1` text DEFAULT NULL,
  `jaminan2` text DEFAULT NULL,
  `jaminan3` text DEFAULT NULL,
  `jaminan4` text DEFAULT NULL,
  `jaminan5` text DEFAULT NULL,
  `berkas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jpgraha`
--

INSERT INTO `tbl_jpgraha` (`id_jpGraha`, `foto_jpGraha`, `judul`, `subjudul`, `desc1`, `desc2`, `bangunan`, `harta`, `lingkup`, `jaminan1`, `jaminan2`, `jaminan3`, `jaminan4`, `jaminan5`, `berkas`) VALUES
(1, 'download_(3).png', 'JP GRAHA', 'ASURANSI KEBAKARAN (PROPERTI)', '<p><span style=\"color:#444444\">JP-GRAHA adalah asuransi yang tepat untuk melindungi asset bangunan Anda dan harta benda didalamnya dari kerugian dan kerusakan akibat kebakaran atau peristiwa lain yang dijamin oleh pollis dan perluasannya. Apapun asset Anda baik itu rumah tinggal, tempat usaha, kantor maupun pabrik, besar maupun kecil. Jangan menunggu waktu, percayakan sepenuhnya pada JP-GRAHA, produk terpercaya dari JRP-INSURANCE.</span></p>\r\n', '<p><span style=\"color:#444444\">Bangunan merupakan aset berharga bagi setiap penghuninya, namun begitu rentan sebuah bangunan apabila tanpa ada perlindungan, karena resiko dapat terjadi setiap saat. JP-GRAHA melindungi aset bangunan Anda beserta isinya mulai dari rumah tinggal, toko, apartmen, pabrik, dan aset lainnya.</span></p>\r\n\r\n<p><span style=\"color:#444444\">​Kami yakin bahwa Anda tidak ingin kehilangan asset berharga karena musibah yang dapat terjadi sewaktu-waktu. Untuk itu lindungi harta dan bangunan Anda dengan JP-GRAHA.</span></p>\r\n', '<p><span style=\"color:#444444\">JP-GRAHA melindungi seluruh asset Anda baik itu bangunan rumah tinggal, kantor, gudang, hotel, sekolah, rumah sakit, apartemen, toko, pabrik dan bangunan lainnya.</span></p>\r\n', '<p><span style=\"color:#444444\">JP-GRAHA tidak hanya melindungi bangunan Anda tapi juga harta benda didalamnya seperti Perabot, Mesin, Stok dan isinya.</span></p>\r\n', '<p><span style=\"color:#444444\">Anda dapat leluasa memilih pembayaran premi sesuai keinginan, mulai dari yang Standar sampai dengan tambahan perluasan jaminan yang anda kehendaki, seperti Asuransi Kebakaran dengan Jaminan Standar.<br />\r\nDengan jaminan ini, bangunan serta harta benda didalamnya dan atau kepentingan lainnya akan terjamin dari risiko keuangan yang disebabkan kebakaran, sambaran petir, ledakan, kejatuhan pesawat terbang, dan akibat asap.</span></p>\r\n', '<p><span style=\"color:#444444\">​Bangunan dan Harta Benda serta kepentingan yang dipertanggungkan akan terjamin dari kerusakan yang diakibatkan langsung oleh terjadinya banjir</span></p>\r\n', '<p><span style=\"color:#444444\">Bangunan dan Harta benda serta kepentingan yang dipertanggungan akan terjamin dari kerusakan dan kerugian financial yang disebabkan oleh salah satu atau lebih dari risiko-risiko akibat terorisme, sabotase dan atau penjarahan selama berlangsungnya terorisme dan sabotase</span></p>\r\n', '<p><span style=\"color:#444444\">Bangunan dan Harta benda serta kepentingan yang dipertanggungkan akan terjamin dari risiko-risiko kerugian financial yang secara langsung diakibatkan oleh Gempa Bumi, Letusan Gunung Berapi, Kebakaran &amp; Ledakan yang mengikuti terjadinya gempa bumi dan atau letusan gunung berapi serta Tsunami.</span></p>\r\n', '<p><span style=\"color:#444444\">Bangunan dan harta benda serta kepentingan yang dipertanggungkan akan terjamin dari risiko-risiko kerugian yang dilakukan dengan pembongkaran atau pencurian yang secara langsung diakibatkan pencurian financial dengan kekerasan / perampokan</span></p>\r\n', '<p><span style=\"color:#444444\">Dengan polis ini, bangunan dan harta benda serta kepentingan yang dipertanggungkan akan terjamin dari risiko-risiko seperti kebakaran, ledakan, banjir, kerusuhan, huru-hara, kebongkaran dan risiko lainnya yang tidak dikecualikan dalam polis.</span></p>\r\n', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Surat Tuntutan Kerugian dari Tertanggung ditandatangani oleh yang berhak (untuk perusahaan dicap).</p>\r\n	</li>\r\n	<li>\r\n	<p>Copy Polis atau Asli (untuk Kerugian Total) berikut lampiran dan semua endorsement (jika ada).</p>\r\n	</li>\r\n	<li>\r\n	<p>Formulir Laporan Kerugian yang telah diisi dan ditandatangani.</p>\r\n	</li>\r\n	<li>\r\n	<p>Laporan survey berikut foto asli kerusakan.</p>\r\n	</li>\r\n	<li>\r\n	<p>Fotocopy KTP/identitas diri Tertanggung.</p>\r\n	</li>\r\n	<li>\r\n	<p>Fotocopy PBB (Pajak Bumi dan Bangunan) (jika ada).</p>\r\n	</li>\r\n	<li>\r\n	<p>Laporan BMKG (jika diperlukan).</p>\r\n	</li>\r\n	<li>\r\n	<p>Surat Keterangan dari Kepolisian setempat/lurah.</p>\r\n	</li>\r\n	<li>\r\n	<p>Bukti-bukti kerugian</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Bangunan</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Layout Bangunan (berskala bila memungkinkan).</p>\r\n	</li>\r\n	<li>\r\n	<p>Perincian Biaya Perbaikan Bangunan dari kontraktor.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Mesin&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Invoice/Proforma Invoice untuk mesin-mesin yang Total Loss.</p>\r\n	</li>\r\n	<li>\r\n	<p>Penawaran Biaya Perbaikan untuk mesin-mesin yang bersifat Repairable.</p>\r\n	</li>\r\n	<li>\r\n	<p>Daftar Mesin dan Harga untuk mengetahui sesuai/tidaknya Jumlah Pertanggungan.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Stock</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Daftar Stock yang rusak dan tidak rusak (Stock Card).</p>\r\n	</li>\r\n	<li>\r\n	<p>Nilai Stock yang didukung dengan daftar harga pembelian, dll.</p>\r\n	</li>\r\n	<li>\r\n	<p>Fotocopy Rekening Koran untuk 6 bulan terakhir.</p>\r\n	</li>\r\n	<li>\r\n	<p>Laporan Penjualan Stock 3 bulan terakhir.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Perabotan/Perlengkapan</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Daftar perabotan (rusak dan tidak rusak) beserta nilainya.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kwitansi/Faktur Pembelian, dll.</p>\r\n	</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id_profil` int(5) NOT NULL,
  `nama_profil` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto_profil` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id_profil`, `nama_profil`, `jabatan`, `foto_profil`) VALUES
(1, 'aa', 'aa', 'foto'),
(2, 'bb', 'bb', 'foo'),
(6, 'kkl', 'kkkkll', 'Tak_berjudul63_20221217082520.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `desc1` text DEFAULT NULL,
  `desc2` text DEFAULT NULL,
  `foto_sejarah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`id_sejarah`, `desc1`, `desc2`, `foto_sejarah`) VALUES
(5, '<p style=\"text-align:justify\"><span style=\"color:#444444\">Berdiri pada tahun 1993, PT Asuransi Jasaraharja Putera atau JRP-INSURANCE yang merupakan Anak Usaha PT Jasa Raharja dalam waktu yang relatif singkat tumbuh menjadi salah satu perusahaan asuransi terkemuka di Indonesia. Hal ini tak lepas dari kuatnya kepercayaan yang diberikan stakeholder dan shareholder kepada Perseroan. Untuk itu JRP-INSURANCE&nbsp;senantiasa berkomitmen untuk menjaga kepercayaan dengan melakukan peningkatan kualitas pelayanan kepada para&nbsp;<em>customer.</em></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\">Saat ini, layanan JRP-INSURANCE dapat dinikmati di seluruh Indonesia melalui 111 Jaringan Pelayanan yang terdiri dari 25 Kantor Cabang yang berada di daerah tingkat I provinsi, 27 Kantor Pemasaran yang berada di daerah tingkat II Kabupaten/Kota dan 59 Kantor Unit Layanan&nbsp;yang berada di daerah Kabupaten/Kota.&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\">JRP-INSURANCE memberikan beragam solusi untuk Asuransi Umum Konvensional (Asuransi Non Jiwa Konvensional), Unit Syariah Asuransi Umum, Penjaminan Konvensional (Suretyship), Reasuransi Konvensional dan&nbsp;Portal web dan/atau&nbsp;<em>platform</em>&nbsp;digital dengan tujuan komersial sesuai dengan Nomor Induk Berusaha (NIB) Nomor :&nbsp;1235000211076 dan Akta Perusahaan,&nbsp;layanan yang beragam tersebut mencerminkan tekad&nbsp;JRP-INSURANCE&nbsp;untuk menjadi&nbsp;<em>one stop insurance service company.</em></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '<p style=\"text-align:justify\"><span style=\"color:#444444\">Komitmen&nbsp; JRP-INSURANCE&nbsp;&nbsp; dalam&nbsp;&nbsp; menjaga&nbsp;&nbsp; reputasinya sebagai perusahaan asuransi yang terpercaya tercermin dalam melakukan Tata Kelola Perusahaan Perasuransian yang Baik sesuai dengan nilai-nilai&nbsp;<em>Good Corporate Governance</em>&nbsp;(GCG) serta melakukan pernerapan ISO 370001-2016&nbsp; Sistem Manajemen Anti Penyuapan (SMAP) dan secara rutin melakukan pemeringkatan dengan meraih rating&nbsp;<strong>idAA-&nbsp;</strong>(<em>Double A minus Stable Outlook</em>).&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\">JRP-INSURANCE sebagai afiliasi Indonesia Financial Group (IFG) menerapkan&nbsp;<em>Core Value</em>&nbsp;<strong>AKHLAK&nbsp;</strong>yaitu&nbsp;<strong>Amanah, Kompeten, Harmonis, Loyal, Adaptif dan Kolaboratif&nbsp;</strong>sesuai dengan<strong>&nbsp;Keputusan Direksi No. SKEP/111/XI/2020 Tanggal 30 November 2020 Tentang Penetapan AKHLAK Sebagai Budaya di PT Jasaraharja Putera.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#444444\">Dengan melakukan penerapan Tata Kelola Perusahaan Perasuransian yang baik serta implementasi&nbsp;<em>Core Value</em>&nbsp;<strong>AKHLAK</strong>, kami yakin JRP-INSURANCE semakin mendapat kepercayaan dari para nasabah dan mitra bisnis, sehingga mampu mengibarkan diri menjadi perusahaan asuransi terkemuka di Indonesia sesuai dengan Visi Perusahaan.</span></p>\r\n', 'download_(3)1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_struktur`
--

CREATE TABLE `tbl_struktur` (
  `id_struktur` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `struktur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_struktur`
--

INSERT INTO `tbl_struktur` (`id_struktur`, `nama`, `struktur`) VALUES
(1, NULL, 'a'),
(3, 'Yuliaaa', 'intermediet.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Jasa Raharja Putera Lampung', 'jrp', 'jrp', 1),
(2, 'lpg', 'lpg', 'lpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_astor`
--
ALTER TABLE `tbl_astor`
  ADD PRIMARY KEY (`id_astor`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `tbl_jpaspri`
--
ALTER TABLE `tbl_jpaspri`
  ADD PRIMARY KEY (`id_jpAspri`);

--
-- Indexes for table `tbl_jpastor`
--
ALTER TABLE `tbl_jpastor`
  ADD PRIMARY KEY (`id_jpAstor`);

--
-- Indexes for table `tbl_jpbonding`
--
ALTER TABLE `tbl_jpbonding`
  ADD PRIMARY KEY (`id_jpBonding`);

--
-- Indexes for table `tbl_jpgraha`
--
ALTER TABLE `tbl_jpgraha`
  ADD PRIMARY KEY (`id_jpGraha`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_astor`
--
ALTER TABLE `tbl_astor`
  MODIFY `id_astor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jpaspri`
--
ALTER TABLE `tbl_jpaspri`
  MODIFY `id_jpAspri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jpastor`
--
ALTER TABLE `tbl_jpastor`
  MODIFY `id_jpAstor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jpbonding`
--
ALTER TABLE `tbl_jpbonding`
  MODIFY `id_jpBonding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jpgraha`
--
ALTER TABLE `tbl_jpgraha`
  MODIFY `id_jpGraha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id_profil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_struktur`
--
ALTER TABLE `tbl_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
