-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2018 pada 20.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpk_bpjs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daerah`
--

CREATE TABLE `tb_daerah` (
  `id_daerah` int(5) NOT NULL,
  `nama_daerah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daerah`
--

INSERT INTO `tb_daerah` (`id_daerah`, `nama_daerah`) VALUES
(1, 'Kota Pekanbaru'),
(2, 'Kab Kampar'),
(3, 'Kab Pelalawan'),
(4, 'Kab Rokan Hulu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_faskes`
--

CREATE TABLE `tb_faskes` (
  `kode_faskes` varchar(10) NOT NULL,
  `nama_faskes` varchar(50) NOT NULL,
  `id_daerah` int(5) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_faskes`
--

INSERT INTO `tb_faskes` (`kode_faskes`, `nama_faskes`, `id_daerah`, `alamat`) VALUES
('00600002', 'Klinik Polres Pelalawan', 3, 'ARYA GUNA NO.1'),
('00600003', 'Puskesmas Pangkalan Kuras II', 3, 'LINTAS TIMUR TERANTANG MANUK'),
('0060B016', 'Klinik Harapan Bunda', 3, 'JL. AKASIA NO. 129'),
('0060B017', 'Klinik Town Site 1 RAPP', 3, 'KOMPLEK RAPP TOWN SITE 1'),
('0060B018', 'Estate Pelalawan North RAPP', 3, 'KOMPLEK RAPP ESTATE PELALAWAN'),
('0060B019', 'Klinik Asian Agri Sehat', 3, 'JL LINTAS TIMUR KM 65'),
('0060B020', 'Klinik Tiffany Medika', 3, 'JL. LINTAS TIMUR KM. 39'),
('0060B021', 'Klinik Sari Lembah Subur', 3, 'JL. EKSTAN DESA GENDUANG'),
('0060B022', 'Klinik dr. Andan Dewi', 3, 'LINTAS TIMUR KM. 34'),
('0060B023', 'Klinik Avicenna', 3, 'JL. PEMDA'),
('0060B024', 'Klinik Nafisa', 3, 'MAHARAJA INDRA'),
('0060B025', 'Klinik Kasih Ibu', 3, 'POROS BTN LAMA LAGO PERMAI 158'),
('0060B026', 'Klinik Medicare Sorek', 3, 'JL. LINTAS TIMUR'),
('0060B027', 'Klinik Nurul Medika', 3, 'KOMP PT. ADEI PLANTATION INDUS'),
('0060B028', 'Klinik Rara', 3, 'DESA LALANG KABUNG'),
('0060B029', 'Klinik Dinda', 3, 'Jl. Lintas Timur KM 118'),
('0060G001', 'drg. Rosmita Rasyid', 3, 'JL LINTAS TIMUR DESA KUALA'),
('0060G002', 'drg. Suhaeri', 3, 'JL. AKASIA PKL KERINCI'),
('0060G003', 'drg. Pramono Rendro Pangarso', 3, 'LINTAS TIMUR'),
('0060R003', 'RS EFARINA', 3, 'Jl. Lintas Timur No.1'),
('0060R004', 'RS AMALIA MEDIKA', 3, 'Jl. Maharaja Indra No. 433'),
('0060R006', 'RS Medicare Sorek', 3, 'Jl. Datuk Laksamana Sorek Satu'),
('0060U002', 'Klinik Karya Medika', 3, 'JL MAHARAJA INDRA'),
('0060U005', 'Klinik Budi Mulya', 3, 'JL LINTAS TIMUR NO 145'),
('0060U007', 'dr. Rachmad Suryawan', 3, 'JL. LINTAS TIMUR'),
('0060U010', 'dr. Dahwiana', 3, 'KOMPLEK PUSKESMAS LANGGAM'),
('0060U011', 'Klinik Fidya', 3, 'JL. LINTAS TIMUR PUNCAK INDAH'),
('0060U014', 'dr. Irna', 3, 'JL. AKASIA'),
('0060U015', 'dr. Desri Marlina', 3, 'LINTAS TIMUR PASAR BARU'),
('00620001', 'Puskesmas Salo', 2, 'JL. HKH. NURMAHYUDDIN SIPUNGGU'),
('00620002', 'Kampar Utara', 2, 'JL. SAWAH'),
('00620003', 'Puskesman Tapung II', 2, 'DESA SUKA RAMAI'),
('00620004', 'Puskesmas Kampar Kiri Hulu II', 2, 'DESA BATU SASAK'),
('00620005', 'Puskesmas Gunung Sahilan I', 2, 'JL. UTAMA KEBUN DURIAN-GUNUNG'),
('00620006', 'Siak Hulu III', 2, 'JL. RAYA PANGKALAN BARU'),
('00620007', 'Puskesmas Perhentian Raja', 2, 'JL. RAYA PKU-TALUK KUANTAN KM2'),
('00620009', 'Puskesmas Tapung Hilir II', 2, 'DESA TANAH TINGGI'),
('00620010', 'Puskesmas Tapung Hulu II', 2, 'JL. DATUK BANDARO'),
('00620011', 'POSKES 01.10.12 Bangkinang', 2, 'JL. JENDERAL SUDIRMAN'),
('00620012', 'SIKES KIKAVSERDAM I/BB', 2, 'JL. RAYA PASIR PUTIH KM 8'),
('00620013', 'SIKES YONIF 132 / BS', 2, 'JL. DR. PROF. M YAMIN'),
('00620014', 'Klinik Polres Kampar', 2, 'PROF .M.YAMIN SH NO. 455'),
('00620104', 'Puskesmas Gunung Sahilan II', 2, 'DESA GUNUNG SARI'),
('00620105', 'Puskesmas Tapung', 2, 'PETAPAHAN'),
('00620903', 'Puskesmas Koto Kampar Hulu', 2, 'Sibiruang, Kec.XIII Koto Kampar'),
('0062B027', 'Klinik Citra Bunda', 2, 'JL. SUKARAMAI KM. 68'),
('0062B028', 'Klinik Syahira', 2, 'DUSUN IV LABUH BASAH DESA SIMA'),
('0062B055', 'Klinik RI Lipat Kain', 2, 'JL. HR. SOEBRANTAS RAYA NO.479'),
('0062B056', 'Klinik dr. Junaidi', 2, 'JL. RAYA PEKANBARU-BANGKINANG'),
('0062B057', 'Klinik Daffa Medika', 2, 'JL. PROF M YAMIN NO 83'),
('0062B058', 'Klinik SAM', 2, 'KEBUN PT. SAM I'),
('0062B059', 'Klinik Famela Jaya Medika', 2, 'JL. KUBANG RAYA'),
('0062B060', 'Klinik Pelita Hati', 2, 'JL. RAYA TALUK KUANTAN'),
('0062B061', 'Poliklinik Kebun Koto Kampar', 2, 'KOTO KAMPAR HULU'),
('0062B062', 'Klinik Kualu', 2, 'JL. SUKA KARYA UJUNG'),
('0062B063', 'Klinik Emplasment Terantam', 2, 'PTPN V KEBUN TERANTAM'),
('0062B064', 'Klinik Emplasment Sei Lindai', 2, 'PTPN V KEBUN SEI LINDAI'),
('0062B065', 'Klinik Emplasment Sei Galuh', 2, 'PTPN V KEBUN SEI GALUH'),
('0062B066', 'Klinik Keluarga Sakinah', 2, 'JL. KUBANG RAYA'),
('0062B067', 'Klinik dr. Amelia', 2, 'JL. PASIR PUTIH NO. 001'),
('0062B068', 'Klinik dr. Harry Barma', 2, 'RAYA PEKANBARU BANGKINANG KM39'),
('0062B069', 'Klinik Rumah Sehat Carissa', 2, 'DUSUN II SUNGAI PINANG'),
('0062B070', 'Klinik Trans Husada', 2, 'DUSUN PUTARAN UTAMA'),
('0062B071', 'Klinik dr. Bobby', 2, 'DESA KOTA GARO'),
('0062B072', 'Klinik dr. Herli', 2, 'KHATULISTIWA DESA LIPAT KAIN'),
('0062B073', 'Klinik Kampar Medical Center', 2, 'JL. SIALANG KUBANG'),
('0062B074', 'Klinik dr. Ria', 2, 'JL. SUKA KARYA'),
('0062B075', 'Klinik Kubang Raya Medika', 2, 'JL. RAYA PEKANBARU-KUBANG'),
('0062B076', 'Klinik Nashah Husada', 2, 'DUSUN II KASIKAN'),
('0062B077', 'Klinik Jaya Medika', 2, 'JL. RAYA PKU-TELUK KUANTAN'),
('0062B078', 'Klinik Eka Pratama', 2, 'JL. RAYA PKU-BANGKINANG KM 28'),
('0062B079', 'Klinik dr. Alex Kurniawan', 2, 'Jl. Raya PKU-Bangkinang KM 49'),
('0062B080', 'Klinik Pandau Sehat Medika', 2, 'Jl. Lembah Damai'),
('0062B081', 'Klinik dr. Eli Susanti', 2, 'Desa Petapahan'),
('0062G002', 'drg. Devitri', 2, 'JL. JEND SUDIRMAN'),
('0062R006', 'RSIA BUNDA ANISYAH', 2, 'Jl Raya PKU-BKN Km 50'),
('0062R008', 'RS TANDUN', 2, 'Komp. PT. Perkebunan Nusantara'),
('0062R009', 'RS MESRA', 2, 'Jl. Pasir Putih No. 3A-B'),
('0062R010', 'RSIA Husada Bunda', 2, 'Jl. Prof. M. Yamin, SH'),
('0062R011', 'RSIA NORFA HUSADA', 2, 'Jl. Mayor Ali Rasyid No. 17ABCD'),
('0062U004', 'dr. Ali Mora', 2, 'JL.PROF M.YAMIN NO 400'),
('0062U053', 'dr. Hasanul Arifin Lubis', 2, 'SIMPANG IV GUNUNG SARI'),
('0062U054', 'Klinik Di Batas Kota', 2, 'JL. RAYA PEKANBARU BKN KM. 16'),
('0062U055', 'dr. Margaretta Teter', 2, 'POROS DS KIJANG JAYA'),
('00630001', 'Puskesmas Tambusai Utara II', 4, 'JL. LINTAS DALU DALU, MAHATO'),
('00630002', 'Puskesmas Kepenuhan Hulu', 4, 'JL. TENGKU SULAIMAN NO. 2'),
('00630004', 'Klinik Polres Rohul', 4, 'DIPONEGORO NO.767'),
('00630903', 'Puskesmas Rokan IV Koto II', 4, 'JL. BANJAR DATAR'),
('0063B002', 'Poliklinik Kebun Kalianta Satu', 4, 'DESA KABUN ROKAN HULU'),
('0063B003', 'Poliklinik Kebun Kalianta Dua', 4, 'DESA KABUN ROKAN HULU'),
('0063B004', 'Poliklinik Kebun PT. SAI', 4, 'EMPLASMENT PKS PT. SAI'),
('0063B005', 'Klinik Amanah Insani', 4, 'DIPONEGORO NO. 307 LINTAS KM 6'),
('0063B006', 'Poliklinik Kebun PT. Eka Dura', 4, 'KOTA LAMA KUNTO DARUSALAM'),
('0063B007', 'Klinik Ziva Medika', 4, 'DESA MUARA MUSU'),
('0063B008', 'Klinik Mitra Medical Estu', 4, 'JL. JEND SUDIRMAN'),
('0063B009', 'Klinik PISP', 4, 'SEI AIR HITAM PT. PISP'),
('0063B010', 'Klinik Pratiwi Medika', 4, 'Desa Bangun Jaya'),
('0063G001', 'drg. Nurhijriati', 4, 'JL.TAMBUSAI NO 379 PASIR PUTIH'),
('0063G002', 'drg. Dewi Maya Riyanti', 4, 'JL. TUANKU TAMBUSAI ROHUL'),
('0063G003', 'drg. Haiya Aini Zaili', 4, 'JL. JEND. SUDIRMAN NO. 377A'),
('0063R002', 'RS AWAL BROS UJUNG BATU', 4, 'JL SUDIRMAN NO 314'),
('0063R003', 'RS SURYA INSANI', 4, 'Jl. Diponegoro KM. 4'),
('0063U004', 'dr. Parlin Sijabat', 4, 'JL. TUANKU TAMBUSAI'),
('0063U005', 'Klinik Faisal Harahap', 4, 'JL. T. PAHLAWAN PASAR BARU'),
('0063U006', 'Klinik Panji Husada', 4, 'JL. RAYA KABUN'),
('0063U007', 'Dr. Bambang Triono', 4, 'JL.TUANKU TAMBUSAI PASIR PUTIH'),
('0063U008', 'dr. Iin Rosmita Saridewi', 4, 'SIMPANG NGASO UJUNG BATU'),
('0063U009', 'dr. Yasni', 4, 'JL. JEND SUDIRMAN,PASAR KOTO T'),
('0063U010', 'dr. Rudi Hartono', 4, 'JL. LINTAS PASIR PENGARAIAN'),
('0063U011', 'dr. Indah Sri Nurmiati', 4, 'Jl. Lintas Rohul-Rohil'),
('0063U012', 'dr. Tessi Widyastuti', 4, 'Kabun'),
('00690001', 'Puskesmas Simpang Baru', 1, 'Jl. Flamboyan No. 100 '),
('00690002', 'POLI REM 031 / WB', 1, 'JL. HANG TUAH'),
('00690004', 'SIKES YONARHANUDSE 13', 1, 'JL. KAHARUDDIN NST'),
('00690005', 'Poliklinik LANUD RUSMIN N', 1, 'JL. ADI SUCIPTO SIMPANG TIGA'),
('00690008', 'Klinik Polresta Pekanbaru', 1, '  JL. AHMAD YANI NO. 11'),
('00690009', 'Klinik SAT BRIMOBDA Riau', 1, 'KH.AHMAD DAHLAN'),
('00690010', 'Klinik SPN Pekanbaru', 1, 'PATIMURA NO. 13'),
('00690011', 'POLDA RIAU', 1, 'SUDIRMAN NO.235'),
('00691001', 'Puskesmas RI Muara Fajar', 1, 'JL. YOSUDARSO RUMBAI'),
('00691002', 'Puskesmas Rumbai Bukit', 1, 'Jl. RUMBAI BUKIT'),
('0069B027', 'Klinik Uwa Medika', 1, 'JL.HR.SOEBRANTAS NO. 92 PANAM'),
('0069B028', 'Klinik Elliya Husada', 1, 'JL. DELIMA NO. 138 PANAM'),
('0069B029', 'Klinik Labuh Baru', 1, 'JL. DURIAN NO. 21 D'),
('0069B031', 'Klinik Fellita', 1, 'KAHARUDDIN NASUTION NO. 149'),
('0069B032', 'Klinik Raudah', 1, 'ADI SUCIPTO NO. 293A'),
('0069B033', 'Klinik Sari Husada', 1, 'JL. TANJUNG DATUK NO. 141 i'),
('0069B034', 'Klinik dr. Misbah RMC', 1, 'Jl. Sembilang No.53 Rumbai'),
('0069B035', 'Klinik Paus Medika Sigunggung', 1, 'JL. DHARMA BAKTI NO. 26B'),
('0069B036', 'Klinik Nayaka Husada', 1, 'JL. H. IMAM MUNANDAR NO. 12'),
('0069B040', 'Klinik Sejahtera', 1, 'JL. BHAKTI PERMAI I NO. 27 PKU'),
('0069B041', 'Klinik Kartika Utama', 1, 'JLN AHMAD YANI NO. 58 A'),
('0069B042', 'Klinik Bertuah Medika', 1, 'JLN PUYUH MAS NO. 2 E'),
('0069B043', 'Klinik Pramuka', 1, 'JL. PRAMUKA NO. 38'),
('0069B044', 'Klinik Doktor Bastian', 1, 'JL. GARUDA SAKTI KM. 2'),
('0069B045', 'Klinik Selvia Medika', 1, 'JL. HR SOEBRANTAS NO 76'),
('0069B046', 'Klinik Alvaroberth Medica', 1, 'JL. SEKOLAH NO. 76 C RUMBAI'),
('0069B047', 'Klinik Hangtuah Medika', 1, 'JL. HANGTUAH'),
('0069B048', 'Klinik Annisa Medika 2', 1, 'JL. HR SOEBRANTAS NO. 173'),
('0069B062', 'Klinik Seicho Medika', 1, 'JL KARTAMA'),
('0069B063', 'Klinik Syarita Medica', 1, 'JL. UTAMA GG. RAMBAH JAYA NO 1'),
('0069B064', 'Klinik Indi Medika', 1, 'JL. KH NASUTION NO 98 C'),
('0069B065', 'Klinik Dilla', 1, 'JL. KARTAMA NO 51'),
('0069B066', 'Klinik Mitra Keluarga', 1, 'JL HANGTUAH NO 2'),
('0069B067', 'Klinik Ummi Medika', 1, 'JL GARUDA SAKTI KM 3'),
('0069B068', 'Klinik Bintang Jaya', 1, 'JL. KAHARUDDIN NASUTION NO.99C'),
('0069B069', 'Klinik dr. Rendy', 1, 'JL. PANGLIMA UNDAN NO. 37'),
('0069B070', 'Klinik Marpoyan Medika', 1, 'JL. KAHARUDDIN NASUTION'),
('0069B071', 'Klinik Bunda Medical Centre', 1, 'JL. PAUS/PATTIMURA NO. 32F'),
('0069B072', 'Klinik Indo Sehat', 1, 'KAHARUDDIN NASUTION PEKANBARU'),
('0069B074', 'Klinik Mulya', 1, 'H. IMAM MUNANDAR NO. 320N '),
('0069B075', 'Klinik Mercy', 1, 'HR. SOEBRANTAS NO. 24 '),
('0069B076', 'Klinik Cahaya Amanah Medika', 1, 'JL. HANGTUAH, KAVLING NO. 1'),
('0069B077', 'Klinik Nadin Medika', 1, 'HR SOEBRANTAS UJUNG PEKANBARU'),
('0069B079', 'Klinik Narita', 1, '  GABUS RAYA NO. A2 RUMBAI'),
('0069B081', 'Klinik Syarifah Medika', 1, 'UKA PER. GRAHA GARUDA PERMAI 3'),
('0069B083', 'Klinik Medika Salsabila', 1, 'MELUR NO. 57 B'),
('0069B084', 'Klinik Alya Medika', 1, 'GARUDA SAKTI KM. 2'),
('0069B085', 'Klinik Siaga Medika', 1, 'JL. HARAPAN RAYA NO. 114 B '),
('0069B086', 'Klinik Tsabita', 1, 'HR SOEBRANTAS UJUNG PEKANBARU'),
('0069B087', 'Klinik dr. Edo', 1, 'SUKA KARYA PERUM MANDIRI 5 B-7'),
('0069B088', 'Klinik Darel Medika', 1, 'SOEKARNO HATTA NO. 8C'),
('0069B089', 'Mulya Medica Clinic', 1, 'PEMUDA UJUNG NO. 82'),
('0069B090', 'Klinik Kimia Farma', 1, '  TUANKU TAMBUSAI NO. 59A'),
('0069B091', 'Klinik Hasanah', 1, 'PANGERAN HIDAYAT NO. 32 PKU'),
('0069B093', 'Klinik dr. Ridha', 1, 'TANJUNG DATUK NO. 141'),
('0069B094', 'Klinik Sarinah', 1, 'SUKA KARYA NO. 155 PANAM'),
('0069B095', 'Klinik Palas Medika', 1, 'SIAK II NO. 5'),
('0069B096', 'Klinik Sentral Medika Utama', 1, 'JL. DURIAN-PKU'),
('0069B097', 'Klinik Jambu Mawar', 1, 'JL. PEMUDA/JAMBU MAWAR nO. 9'),
('0069B098', 'Klinik Bakti', 1, 'JL. BAKTI NO. 05 SIGUNGGUNG'),
('0069B099', 'Klinik YLPI', 1, 'JL. KAHARUDDIN NASUTION NO.113'),
('0069B100', 'Klinik Mitra Medika', 1, '  Jl. Bukit Barisan No. 4B'),
('0069B101', 'Klinik Amanah Ayah Bunda', 1, 'Jl. Soekarno Hatta No. 99 C,D '),
('0069B102', 'Klinik Amanah', 1, 'JL. SUKA KARYA NO. 124 PANAM'),
('0069B103', 'Klinik Permata Ibu', 1, 'JL. LINTAS TIMUR KM 12,5'),
('0069B104', 'Klinik dr. Marlina', 1, 'JL. SUKA KARYA '),
('0069B105', 'Klinik Deliana', 1, 'JL. SOEKARNO HATTA NO. 363'),
('0069B106', 'Klinik Dewi Sehat', 1, '  JL DURIAN PEKANBARU'),
('0069B107', 'Klinik Yahya Medika', 1, 'JL. BUKIT BARISAN '),
('0069B108', 'Klinik Lampas Malem Medika', 1, 'JL. BERINGIN NO. 88 C'),
('0069B109', 'Klinik UMRI', 1, 'Jl. T. Tambusai Ujung No. 1'),
('0069B110', 'Klinik Saffanah Medika', 1, 'Jl. Kapur No. 05'),
('0069B111', 'Klinik dr. Abdullah Qayyum', 1, 'Jl. Gatot Subroto No. 24 '),
('0069B112', 'Klinik dr. Sarni', 1, 'Jl. Darma Bakti No. 149 A '),
('0069B113', 'Klinik Anzani', 1, 'Jl. Utama/ Nenas No. 23 '),
('0069B114', 'Klinik Tab Medika', 1, 'Jl. Sepakat No. 08 Pekanbaru'),
('0069B115', 'Klinik Keluargaku', 1, 'Jl. Srikandi Perum Wadya Graha'),
('0069G001', 'drg. Rina Aryati Sitompul', 1, 'Jalan Dahlia Ujung No. 105'),
('0069G032', 'drg. Riza Andayani', 1, 'Jl. Nenas No. 28'),
('0069G035', 'drg. Yerlina', 1, 'JL. HANGTUAH UJUNG'),
('0069G036', 'drg. Tensy Tambunan', 1, 'JL. AHMAD YANI NO. 111C'),
('0069G037', 'drg. Sri Asih Gahayu', 1, 'JL. BALAM NO. 24C PEKANBARU'),
('0069G038', 'drg. Adhyasari', 1, 'POROS PANDAU NO. 5 PEKANBARU'),
('0069G040', 'drg. Elpi Sumiarni', 1, 'JL. MELATI INDAH KOMPLEK GMP'),
('0069G041', 'drg. Silvia Adnan', 1, 'JL TULIP NO 06 SUKAJADI'),
('0069R008', 'RS AWAL BROS', 1, 'Jl. Jend Sudirman No.177'),
('0069R011', 'RS IBNU SINA PEKANBARU', 1, 'Jl. Melati No. 60'),
('0069R032', 'RSIA ZAINAB', 1, 'Ronggo Warsito I No.1'),
('0069R033', 'RS PROF. DR. TABRANI', 1, 'Jend Sudirman No.410'),
('0069R034', 'RS PEKANBARU MEDICAL CENTRE', 1, 'Lembaga Permasyarakatan No.25'),
('0069R035', 'RSUD PETALA BUMI', 1, 'Soetomo PKU'),
('0069R036', 'RS SYAFIRA', 1, 'JL. JEND SUDIRMAN No.134'),
('0069R037', 'RS AWAL BROS PANAM', 1, 'JL. HR SUBRANTAS '),
('0069R038', 'RS BINA KASIH', 1, 'Jl Saman Hudi No. 3-5'),
('0069R043', 'RS EKA HOSPITAL PEKANBARU', 1, 'Jl. Soekarno Hatta Km 6.5'),
('0069R045', 'RS SANSANI', 1, 'Jl. Soekarno Hatta Atas'),
('0069R046', 'RS BERSALIN ANNISA', 1, 'Jl. Garuda No. 66'),
('0069R048', 'RS MATA SMEC', 1, 'Jl. Arifin Ahmad No. 92'),
('0069R049', 'RS AULIA HOSPITAL', 1, 'JL. HR SUBRANTAS No.63'),
('0069R052', 'RS AWAL BROS A. YANI', 1, 'Jl. Jend A.Yani No.73'),
('0069R053', 'RS Mata Pekanbaru Eye Center', 1, 'Jl. Soekarno Hatta No.236'),
('0069R054', 'RS Lancang Kuning', 1, 'Jl. Roggowasito No. 5A'),
('0069R055', 'RS PRIMA PEKANBARU', 1, 'Jl. Bima No. 1'),
('0069S001', 'KLINIK UTAMA HD CEMPAKA', 1, 'JL CEMPAKA NO 68'),
('0069S002', 'Klinik Utama Bukit Raya', 1, 'Jln. Hangtuah Ujung No.89'),
('0069S003', 'Klinik Utama Nusa Lima', 1, 'Jln Ronggowarsito No.40 '),
('0069S004', 'KLINIK UTAMA AMANDA', 1, 'jl. Kartini NO.31'),
('0069U007', 'Klinik Rumbai Sehat', 1, 'Jl. Sekolah No 130 D RUMBAI'),
('0069U008', 'Klinik Cendana Husada', 1, 'Jl.Jati No. 76'),
('0069U009', 'dr. Miharza', 1, 'JL DAHLIA UJUNG NO 105 B'),
('0069U010', 'Klinik Paus Medika', 1, 'JL. PAUS NO. 2 D'),
('0069U011', 'Klinik Anugrah Medika', 1, 'JL.KH NASUTION NO. 120'),
('0069U012', 'dr. Zaini Rizaldi Saragih', 1, 'JL NENAS NO 28'),
('0069U015', 'Klinik Harapan Medika', 1, 'JL. H. IMAM MUNANDAR NO.38'),
('0069U017', 'Klinik Aisyiyah', 1, 'JL. K.H.AHMAD DAHLAN NO.82'),
('0069U018', 'Klinik Annisa Medika', 1, 'JL.GARUDA NO 66'),
('0069U019', 'Klinik Salsa', 1, 'JL.IMAM MUNANDAR NO 451'),
('0069U020', 'Klinik Sansani', 1, 'JL.HR SOEBRANTAS'),
('0069U021', 'dr. Luise Santhy Clara S', 1, 'JL HANG TUAH NO. 250'),
('0069U022', 'Klinik Tiga Permata', 1, 'JL. GABUS RAYA NO 4 A'),
('0069U026', 'dr. Timbul Martua Sinaga', 1, 'JL. KARTIKA SARI NO 20 U.SARI'),
('0069U052', 'dr. Iryun Netti', 1, 'JL KAHARUDDIN NASUTION NO 99C'),
('0069U053', 'dr. Silvia Indriani', 1, 'JL. RAJAWALI PERTOKOAN RATOS '),
('0069U058', 'Klinik dr. Dadan Ropian', 1, 'JL. SM. AMIN'),
('0069U059', 'Klinik Daffa', 1, 'JL. PAUS NO.99B'),
('0069U060', 'dr. Grace Simanjuntak', 1, 'JL FAJAR PERUM NUANSA FAJAR'),
('0069U061', 'Klinik Pekanbaru Sehat', 1, 'JL. SOEBRANTAS NO. 501 PANAM'),
('0069U066', 'dr. Eka Juniarti Napitupulu', 1, 'YOS SUDARSO NO. 30 '),
('0069U067', 'dr. Yenni Nolita', 1, 'BUKIT BARISAN NO. 24 PEKANBARU'),
('0069U068', 'dr. Noorchalis Asnawi', 1, 'CEMPAKA NO. 85'),
('0069U069', 'dr. Cecep Deni Kuswendi', 1, 'BUKIT BATABUH NO. 18'),
('0069U070', 'dr. Ahmad Tarmizy', 1, 'PURWODADY NO. 21D '),
('0069U071', 'dr. Erna Ariyani', 1, '  JL. TENGKU BEY NO. 150 C'),
('0069U072', 'dr. Octarina Hasan', 1, 'JL. SEPAKAT NO. 114 D'),
('0069U073', 'dr. Muhammad Ridha Zuhri', 1, '  SUKAJADI'),
('0069U074', 'dr. Lasma E.R. Panggabean', 1, 'Jl. Lokomotif No. 25C'),
('0069U075', 'dr. Jemmy Fandri', 1, 'Jl. Harapan No. 5 A'),
('04010101', 'Puskesmas Langsat', 1, 'Jl. Langsat No. 1 '),
('04010102', 'Puskesmas Melur', 1, 'JL. MELUR NO. 103'),
('04010201', 'Puskesmas Senapelan', 1, 'JL.JATI PEKANBARU'),
('04010301', 'Puskesmas Rumbai', 1, 'JL. SEKOLAH NO. 52 RUMBAI'),
('04010302', 'Puskesmas Umban Sari', 1, 'JL PURNAMA SARI NO 2'),
('04010303', 'Puskesmas Karya Wanita', 1, 'JLGABUS RAYA'),
('04010401', 'Puskesmas Pekanbaru Kota', 1, 'JL. TENGKU UMAR'),
('04010501', 'Puskesmas Limapuluh', 1, 'JL. SUMBERSARI NO.116'),
('04010601', 'Puskesmas Sail', 1, 'JL. HANG JEBAT NO 16'),
('04010701', 'Puskesmas Simpang Tiga', 1, 'JL KAHARUDIN NASUTION'),
('04010702', 'Puskesmas Rejosari', 1, 'Jl Hangtuah Ujung Tenayan Raya'),
('04010703', 'Puskesmas Harapan Raya', 1, 'Jl. Imam Munandar No. 40 '),
('04010704', 'Puskesmas Garuda', 1, 'JL.GARUDA NO.12 A PEKANBARU'),
('04010705', 'Puskesmas Tenayan Raya', 1, 'JL BUDI LUHUR'),
('04010801', 'Puskesmas Payung Sekaki', 1, 'JL. FAJAR NO. 21'),
('04010802', 'Puskesmas Sidomulyo', 1, 'Jl. HR. Soebrantas Panam '),
('04010803', 'Puskesmas RI Sidomulyo', 1, 'JL DELIMA TAMPAN'),
('0401R001', 'RS JIWA TAMPAN PROVINSI RIAU', 1, 'JL. RAYA PEKANBARU-BANGKINANG'),
('0401R002', 'RS BHAYANGKARAPOLDA PEKANBARU', 1, 'Jl. Kartini No.14'),
('0401R004', 'RS TK IV 01.07.04', 1, 'Jl. Kesehatan No.2'),
('0401R006', 'RSUD ARIFIN ACHMAD', 1, 'JL. DIPONEGORO No. 1'),
('0401R007', 'RS LANUD SIMPANG TIGA', 1, 'Komp AURI Simpang Tiga'),
('0401R031', 'RSIA ERIA BUNDA', 1, 'Jl. KH Ahmad Dahlan No. 163'),
('0401U014', 'dr. Rini Hermiyati', 1, 'JL. KEMBANG HARAPAN NO. 2'),
('04020101', 'Puskesmas Bangkinang Kota', 2, 'JL. MERDEKA NO. 3'),
('04020102', 'Puskesmas Bangkinang', 2, 'JL. RAYA PETAPAHAN-BANGKINANG\\'),
('04020201', 'Puskesmas  Kuok', 2, 'JL. PROF M YAMIN SH NO. 044'),
('04020301', 'Puskesmas Kampar', 2, 'JL.RAYA PEKANBARU-BANGKINANG'),
('04020302', 'Puskesmas Rumbio Jaya', 2, 'GUNUNG BUNGSU'),
('04020303', 'Puskesmas Kampar Timur', 2, 'JL. RAYA PEKANBARU-BANGKINANG'),
('04020401', 'Puskesmas Kampar Kiri', 2, 'JL. HR SUBRANTAS NO. 441'),
('04020501', 'Puskesmas Kampar Kiri Hulu', 2, 'Ds. Gema, Kec. Kampar Kiri Hul'),
('04020601', 'Puskesmas Siak Hulu I', 2, 'Siak Hulu I'),
('04020602', 'Puskesmas Siak Hulu II', 2, 'DESA KUBANG JAYA'),
('04020701', 'Puskesmas XIII Koto Kampar I', 2, 'JL. CANDI MUARA TAKUS'),
('04020702', 'Puskesmas  XIII Koto Kampar II', 2, 'Ds. Gunung Bungsu'),
('04020703', 'Puskesmas XIII Koto Kampar III', 2, 'DESA KOTO MESJID'),
('04020801', 'Puskesmas Tambang', 2, 'JL. RAYA PKU-BANGKINANG KM 28'),
('04020901', 'Puskesmas Tapung I', 2, 'JL. PETAPAHAN-PANTAI CERMIN'),
('04021001', 'Puskesmas Tapung Hulu I', 2, 'Ds. Suka Ramai'),
('04021101', 'Puskesmas Tapung Hilir', 2, 'KOTA GARO'),
('04021102', 'Puskesmas Kampar Kiri Tengah', 2, 'JL.RAYA PKU-TALUK KUANTAN KM42'),
('04021201', 'Puskesmas Kampar Kiri Hilir', 2, 'Ds. Sungai Pagar, Kec. Kampar'),
('0402R001', 'RSUD BANGKINANG', 2, 'Jl. Lingkar Batu Belah'),
('0402U019', 'dr. Afitra', 2, 'JL.PROF M.YAMIN NO. 151'),
('0402U020', 'dr. Harris', 2, 'JL. PROF.M.YAMIN SH NO. 115 F'),
('0402U021', 'dr. Elvi Azrianti', 2, 'JL. RAYA PEKANBARU-BANGKINANG'),
('0402U050', 'dr. Marliswati Gusmali', 2, 'JL. JEND SUDIRMAN NO. 100'),
('04090101', 'Puskesmas Pangkalan Kerinci', 3, 'Jl. Kamboja No. 06'),
('04090102', 'Puskesmas Sikijang', 3, 'JL LINTAS TIMUR KM 30'),
('04090201', 'Puskesmas Langgam', 3, 'JL JEND SUDIRMAN NO 1'),
('04090301', 'Puskesmas  Bunut', 3, 'Jl.Pamong Praja No.2'),
('04090401', 'Puskesmas Pangkalan Kuras', 3, 'Jl. Lintas Timur, Sorek I'),
('04090501', 'Puskesmas Ukui', 3, 'JL. LINTAS TIMUR'),
('04090601', 'Puskesmas Kuala Kampar', 3, 'Jl.Imam Tahar Teluk Dalam'),
('04090701', 'Puskesmas Kerumutan', 3, 'Jl. Kesehatan No. 1'),
('04090801', 'Puskesmas Pangkalan Lesung', 3, 'Jl. Panglo'),
('04090901', 'Puskesmas Teluk Meranti', 3, 'Jl. Rambutan Teluk Meranti'),
('04091001', 'Puskesmas  Pelalawan', 3, 'Jl. Tengku Said Harun'),
('04091101', 'Puskesmas Bandar Petalangan', 3, 'BDR. PETALANGAN'),
('0409R001', 'RSUD SELASIH', 3, 'Jl. Rumah Sakit No. 1 Pangkalan Kerinci'),
('04100101', 'Puskesmas Rambah', 4, 'Jl. KH Dewantara No. 108'),
('04100201', 'Puskesmas Rambah Hilir II', 4, 'Jl. Poros Muda Rt. 26 Rw. 01'),
('04100202', 'Puskesmas Rambah Hilir I', 4, 'JL. DIPONEGORO MUARA RUMBAI'),
('04100301', 'Puskesmas Rambah Samo II', 4, 'JL. DIPONEGORO'),
('04100302', 'Puskesmas Rambah Samo I', 4, 'JL. LINTAS PASIR PENGARAIAN'),
('04100401', 'Puskesmas Kepenuhan', 4, 'JL. SYECH ABDUL WAHAB ROKAN'),
('04100501', 'Puskesmas Tambusai', 4, 'JL. TUANKU TAMBUSAI'),
('04100601', 'Puskesmas Tambusai Utara I', 4, 'Jl. Dr. Sutomo RT, 01 Rw 01'),
('04100701', 'Puskesmas Rokan IV Koto', 4, 'JL. KESEHATAN NO. 1'),
('04100801', 'Puskesmas Kunto Darussalam', 4, 'Jl.Taman Pahlawan Rt 02 Rw 02'),
('04100901', 'Puskesmas Ujung Batu', 4, 'JL. SUDIRMAN NO. 217'),
('04100902', 'Puskesmas Tandun II', 4, 'JL. DANAU BUKIT SULIGI KM 7'),
('04101001', 'Puskesmas Bangun Purba', 4, 'Jl. Kesehatan No. 1 Tangun'),
('04101101', 'Puskesmas Bonai Darussalam', 4, 'JL. LINTAS PROVINSI-SONTANG'),
('04101201', 'Puskesmas Pagaran Tapah Darussalam', 4, 'Jl. Pahlawan Pagaran Tapah'),
('04101301', 'Puskesmas Tandun I', 4, 'JL. RAYA TANDUN'),
('04101401', 'Puskesmas Kabun', 4, 'JL. GOA TUJUH SERANGKAI'),
('0410R001', 'RSUD ROKAN HULU', 4, 'Jl. Syech Ismail Pasir Pengaraian'),
('0410U001', 'dr. Finaldy Nazir', 4, 'Jl. Diponegoro No. 236 A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fpkone`
--

CREATE TABLE `tb_fpkone` (
  `id_fpkone` int(110) NOT NULL,
  `kode_faskes` varchar(10) DEFAULT NULL,
  `nama_faskes` varchar(50) DEFAULT NULL,
  `bulan_pelayanan` varchar(25) DEFAULT NULL,
  `jenis_pelayanan` varchar(25) DEFAULT NULL,
  `uraian_prog` varchar(25) NOT NULL,
  `nama_program` varchar(50) DEFAULT NULL,
  `kode_program` varchar(25) DEFAULT NULL,
  `kode_akun` varchar(25) DEFAULT NULL,
  `tgl_masuk` varchar(20) DEFAULT NULL,
  `noreg_masuk` varchar(25) DEFAULT NULL,
  `tgl_yankes` varchar(20) DEFAULT NULL,
  `noreg_yankes` varchar(25) DEFAULT NULL,
  `kasus_ajukan` varchar(5) NOT NULL,
  `jumlah_ajukan` varchar(25) NOT NULL,
  `kasus_setuju` varchar(5) NOT NULL,
  `jumlah_setuju` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fpkone`
--

INSERT INTO `tb_fpkone` (`id_fpkone`, `kode_faskes`, `nama_faskes`, `bulan_pelayanan`, `jenis_pelayanan`, `uraian_prog`, `nama_program`, `kode_program`, `kode_akun`, `tgl_masuk`, `noreg_masuk`, `tgl_yankes`, `noreg_yankes`, `kasus_ajukan`, `jumlah_ajukan`, `kasus_setuju`, `jumlah_setuju`) VALUES
(160, '0062B074', 'Klinik dr. Ria', 'Juni 2017', 'RJTP', 'Kb', 'Pelayanan Persalinan Tingkat Pertama', '206.2.007.2', '7.10.01.01.1', '10/05/2018', 'P112-18', '17/05/2018', 'L998776', '2', '30000', '1', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fpktwo`
--

CREATE TABLE `tb_fpktwo` (
  `id_fpktwo` int(110) NOT NULL,
  `kode_faskes` varchar(10) DEFAULT NULL,
  `nama_faskes` varchar(50) DEFAULT NULL,
  `bulan_pelayanan` varchar(25) DEFAULT NULL,
  `jenis_pelayanan` varchar(25) DEFAULT NULL,
  `nama_jejaring` varchar(50) DEFAULT NULL,
  `norek` varchar(50) NOT NULL,
  `nonpwp` varchar(50) NOT NULL,
  `uraian_prog` varchar(25) NOT NULL,
  `nama_program` varchar(50) DEFAULT NULL,
  `kode_program` varchar(25) DEFAULT NULL,
  `kode_akun` varchar(25) DEFAULT NULL,
  `tgl_masuk` varchar(10) DEFAULT NULL,
  `noreg_masuk` varchar(25) DEFAULT NULL,
  `tgl_yankes` varchar(10) DEFAULT NULL,
  `noreg_yankes` varchar(25) DEFAULT NULL,
  `kasus_ajukan` varchar(5) NOT NULL,
  `jumlah_ajukan` decimal(25,0) NOT NULL,
  `kasus_setuju` varchar(5) NOT NULL,
  `jumlah_setuju` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fpktwo`
--

INSERT INTO `tb_fpktwo` (`id_fpktwo`, `kode_faskes`, `nama_faskes`, `bulan_pelayanan`, `jenis_pelayanan`, `nama_jejaring`, `norek`, `nonpwp`, `uraian_prog`, `nama_program`, `kode_program`, `kode_akun`, `tgl_masuk`, `noreg_masuk`, `tgl_yankes`, `noreg_yankes`, `kasus_ajukan`, `jumlah_ajukan`, `kasus_setuju`, `jumlah_setuju`) VALUES
(14, '0069U019', 'Klinik Salsa', 'Mei 2018', 'RJTP', 'Bidan Suarda', '9999', '888', 'Kb', 'Pelayanan Persalinan Tingkat Pertama', '206.2.007.2', '7.10.01.01.1', '11/05/2018', 'P112-18', '12/05/2018', 'P0982346456', '2', '30000', '1', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_groups`
--

CREATE TABLE `tb_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_groups`
--

INSERT INTO `tb_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jejaring`
--

CREATE TABLE `tb_jejaring` (
  `id_jejaring` int(225) NOT NULL,
  `nama_jejaring` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL,
  `nonpwp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jejaring`
--

INSERT INTO `tb_jejaring` (`id_jejaring`, `nama_jejaring`, `norek`, `nonpwp`) VALUES
(2, 'Bidan Syaflina Fitri', '108-00-1410663-8 MANDIRI', '69.838.749.5-221.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login_attempts`
--

CREATE TABLE `tb_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(30) NOT NULL,
  `parent` int(11) NOT NULL,
  `role` enum('Administrator','Admin') DEFAULT 'Admin',
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `icon`, `link`, `parent`, `role`, `aktif`) VALUES
(1, 'Dashboard', 'fa fa-home', 'dashboard', 0, 'Admin', 'Y'),
(2, 'FASKES', 'fa fa-suitcase', '#', 0, 'Admin', 'Y'),
(4, 'Pekanbaru', 'fa fa-medkit text-aqua', 'pekanbaru', 2, 'Admin', 'Y'),
(5, 'Kampar', 'fa fa-medkit text-aqua', 'kampar', 2, 'Admin', 'Y'),
(6, 'Pelalawan', 'fa fa-medkit text-aqua', 'pelalawan', 2, 'Admin', 'Y'),
(7, 'Rokan Hulu', 'fa fa-medkit text-aqua', 'rohul', 2, 'Admin', 'Y'),
(13, 'Program', 'fa fa-th-list', '#', 0, 'Admin', 'Y'),
(14, 'FPK', 'fa fa-sticky-note-o ', '#', 0, 'Admin', 'Y'),
(15, 'RITP', 'fa fa-minus-square  text-aqua', 'ritp', 13, 'Admin', 'Y'),
(16, 'RJTP', 'fa fa-minus-square text-aqua', 'rjtp', 13, 'Admin', 'Y'),
(22, 'Seting', 'fa fa-gears', '#', 0, 'Administrator', 'Y'),
(23, 'Menu seting', 'fa  fa-bars text-aqua', 'menu', 22, 'Administrator', 'Y'),
(24, 'User Seting', 'fa fa-users text-aqua', 'auth/member', 22, 'Administrator', 'Y'),
(26, 'Group Member', 'fa  fa-bars text-aqua', 'groups', 22, 'Admin', 'Y'),
(27, 'About Us', 'fa fa-info', 'about', 0, 'Admin', 'Y'),
(28, 'FPK Non Jejaring', 'fa fa-sticky-note-o text-aqua', 'fpkone', 14, 'Admin', 'Y'),
(29, 'Pegawai', 'fa fa-user text-aqua', 'pegawai', 22, 'Admin', 'Y'),
(30, 'FPK Jejaring', 'fa fa-sticky-note-o text-aqua', 'fpktwo', 14, 'Admin', 'Y'),
(31, 'Jejaring', 'fa fa-medkit text-aqua', 'jejaring', 2, 'Admin', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `jabatan`) VALUES
(1, 'Rahmad Asri Ritonga', 'Kepala Cabang Pekanbaru'),
(2, 'Darmayanti Utami', 'Koordinator Pra Verifikasi'),
(3, 'Fitria Maya Sari', 'Staff Bidang Keuangan'),
(4, 'Anggi Pramana', 'Pemerinci / Verifikator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `id_pelayanan` varchar(10) NOT NULL,
  `jenis_pelayanan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id_pelayanan`, `jenis_pelayanan`) VALUES
('1', 'RITP'),
('2', 'RJTP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(255) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `noka` varchar(20) DEFAULT NULL,
  `tanggal_masuk` varchar(10) NOT NULL,
  `tanggal_keluar` varchar(10) NOT NULL,
  `diajukan` decimal(10,0) NOT NULL,
  `disetujui` decimal(10,0) DEFAULT NULL,
  `selisih` decimal(10,0) DEFAULT NULL,
  `uraian` varchar(30) DEFAULT NULL,
  `id_fpk` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `noka`, `tanggal_masuk`, `tanggal_keluar`, `diajukan`, `disetujui`, `selisih`, `uraian`, `id_fpk`) VALUES
(19, 'GG', '', '2018-04-05', '2018-04-05', '900000', '500000', '400000', 'Setuju', 150),
(20, 'LL', '', '2018-04-05', '2018-04-05', '900000', '400000', '500000', '', 150),
(21, 'RR', '', '2018-04-05', '2018-04-05', '900000', '500000', '400000', 'Kb', 150),
(22, 'NN', '', '2018-04-05', '2018-04-05', '800000', '300000', '500000', '', 150),
(23, 'JJ', '', '2018-04-05', '2018-04-05', '500000', '500000', '0', 'Sunat', 150),
(24, 'Sutrisno', '', '2018-04-04', '2018-04-04', '1000000', '1000000', '0', 'Setuju', 1),
(25, 'Gias', '', '2018-04-04', '2018-04-04', '1000000', '1000000', '0', 'setuju', 1),
(26, 'Scania', '', '2018-04-04', '2018-04-04', '1000000', '500000', '500000', 'duplikat', 1),
(27, 'Love birsd', '', '2018-04-04', '2018-04-04', '1000000', '1000000', '0', 'setuju', 1),
(28, 'imam', '', '2018-04-04', '2018-04-27', '15000', '15000', '0', 'Kb', 151),
(29, 'adil', '', '2018-04-04', '2018-04-27', '15000', '15000', '0', 'Kb', 151),
(30, 'rini', '', '2018-04-04', '2018-04-01', '700', '700', '0', '', 152),
(31, 'nadin', '', '2018-04-25', '2018-04-27', '700', '0', '700', '', 152),
(32, 'Adinni', '', '2018-04-05', '2018-04-06', '700', '700', '0', '', 153),
(33, 'raitin', '', '2018-04-04', '2018-04-23', '700', '0', '700', '', 153),
(34, 'erna', '', '2018-04-26', '2018-04-18', '700000', '700000', '0', '', 154),
(35, 'arni', '', '2018-04-04', '2018-04-04', '700000', '0', '700000', '', 154),
(36, 'rini', '', '2018-04-04', '2018-04-26', '700000', '700000', '0', '', 155),
(37, 'Scania', '', '2018-04-04', '2018-04-04', '700000', '0', '700000', '', 155),
(38, 'lll', '', '2018-04-01', '2018-04-04', '700000', '700000', '0', '', 156),
(39, 'fff', '', '2018-04-04', '2018-04-04', '700000', '0', '700000', '', 156),
(40, 'nnn', '', '2018-04-07', '2018-04-04', '7000000', '700000', '0', '', 157),
(41, 'llll', '', '2018-04-05', '2018-04-05', '700000', '0', '700000', '', 157),
(42, 'andini', '', '2018-04-12', '2018-04-26', '700000', '0', '700000', '', 158),
(43, 'nina', '', '2018-04-04', '2018-04-04', '700000', '700000', '0', '', 158),
(44, '', '', '', '', '0', '0', '0', '', 159),
(45, 'indah', '986597', '02/05/2018', '02/05/2018', '15000', '15000', '0', 'Setuju', 160),
(46, 'Nadia', '9869969', '02/05/2018', '02/05/2018', '15000', '0', '15000', 'Tidak Setuju', 160);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesertatwo`
--

CREATE TABLE `tb_pesertatwo` (
  `id_peserta` int(255) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `noka` varchar(20) DEFAULT NULL,
  `tanggal_masuk` varchar(10) NOT NULL,
  `tanggal_keluar` varchar(10) NOT NULL,
  `diajukan` decimal(10,0) NOT NULL,
  `disetujui` decimal(10,0) DEFAULT NULL,
  `selisih` decimal(10,0) DEFAULT NULL,
  `uraian` varchar(30) DEFAULT NULL,
  `id_fpk` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesertatwo`
--

INSERT INTO `tb_pesertatwo` (`id_peserta`, `nama_peserta`, `noka`, `tanggal_masuk`, `tanggal_keluar`, `diajukan`, `disetujui`, `selisih`, `uraian`, `id_fpk`) VALUES
(1, 'Surtini', '150812348588', '2018-04-05', '2018-04-09', '700000', '700000', '0', 'Disetujui', 3),
(2, 'Andini', '846780038479', '2018-04-09', '2018-04-12', '700000', '0', '700000', '', 3),
(3, 'Nina BOBO', '1789736485923', '2018-04-12', '2018-04-14', '700000', '700000', '0', 'Disetujui', 3),
(4, '', '', '0000-00-00', '0000-00-00', '0', '0', '0', '', 4),
(5, 'nnn', '986', '2018-04-11', '2018-04-21', '700000', '0', '700000', '', 5),
(6, 'lll', '65733', '2018-04-11', '2018-04-11', '700000', '700000', '0', '', 5),
(7, 'indri', '87589', '2018-04-04', '2018-04-13', '700000', '700000', '0', '', 6),
(8, 'andini', '764986', '2018-04-04', '2018-04-04', '700000', '0', '700000', '', 6),
(9, '', '', '0000-00-00', '0000-00-00', '0', '0', '0', '', 7),
(10, 'indri', '43666', '04/04/2018', '07/04/2018', '700000', '700000', '0', 'Setuju', 8),
(11, 'indah', '09787876467476', '05/04/2018', '13/04/2018', '700000', '700000', '0', 'Setuju', 9),
(12, 'Andini', '8758686868', '05/04/2018', '15/04/2018', '700000', '0', '700000', 'batal', 9),
(13, 'Andini', '097707', '10/05/2018', '11/05/2018', '700000', '0', '700000', 'tidak Setuju', 10),
(14, 'Risna', 'q4235231', '10/05/2018', '10/05/2018', '700000', '700000', '0', 'Setuju', 10),
(15, '', '', '', '', '0', '0', '0', '', 11),
(16, 'indah', '8789', '01/05/2018', '01/05/2018', '15000', '15000', '0', 'Setuju', 12),
(17, 'Andini', '98699', '01/05/2018', '01/05/2018', '15000', '0', '15000', 'Tidak Setuju', 12),
(18, '', '', '', '', '0', '0', '0', '', 13),
(19, 'qori', '869966', '02/05/2018', '02/05/2018', '15000', '0', '15000', 'setuju', 14),
(20, 'nina', '87686', '02/05/2018', '02/05/2018', '15000', '15000', '0', 'Setuju', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_program`
--

CREATE TABLE `tb_program` (
  `id` int(255) NOT NULL,
  `kode_program` varchar(20) NOT NULL,
  `nama_program` varchar(50) NOT NULL,
  `uraian` varchar(25) NOT NULL,
  `kode_akun` varchar(20) NOT NULL,
  `pel` varchar(10) NOT NULL,
  `id_pelayanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_program`
--

INSERT INTO `tb_program` (`id`, `kode_program`, `nama_program`, `uraian`, `kode_akun`, `pel`, `id_pelayanan`) VALUES
(13, '206.2.005.2', 'Alat Bantu Kesehatan', 'Prothesa Gigi', '7.10.01.01.1', 'RJTP', 2),
(14, '206.2.004.2', 'Ambulan/Evakuasi Medis', 'Ambulan', '7.10.01.01.1', 'RJTP', 2),
(15, '206.2.007.2', 'Pelayanan Persalinan Tingkat Pertama', 'ANC', '7.10.01.01.1', 'RJTP', 2),
(16, '206.2.007.2', 'Pelayanan Persalinan Tingkat Pertama', 'PNC', '7.10.01.01.1', 'RJTP', 2),
(17, '206.2.007.2', 'Pelayanan Persalinan Tingkat Pertama', 'KB', '7.10.01.01.1', 'RJTP', 2),
(18, '206.2.007.2', 'Pelayanan Persalinan Tingkat Pertama', 'Persalinan', '7.10.01.02.1', 'RITP', 1),
(19, '206.2.005.2', 'Pelayanan Persalinan Tingkat Pertama', 'Rawat Inap', '7.10.01.02.1', 'RITP', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$Kpso52jO/ld.bHeDSE5hPO2x9qsIdnVhEVlgFqrZ3c8TIq6zuNLze', '', 'admin@admin.com', '86ed629d0fc67b65fa78a1f7b776dd9c56032abb', NULL, NULL, 'kwGTk8SqJGHoWDXzB9OnVO', '0000-00-00 00:00:00', '2018-05-04 18:43:06', 1, 'Administrator', 'utama', 'BPJS Kesehatan', '0'),
(11, '::1', 'anggipramana', '$2y$08$NkHIMdNX4.HL6C1IGoXMbOXLcxsJ7jUVHFt1zp7MdMI5SpT9eHqBW', NULL, 'anggi@bpjs.com', NULL, NULL, NULL, NULL, '2018-03-13 16:59:06', '2018-05-01 19:21:26', 1, 'Anggi', 'Pramana', 'BPJS Kesehatan', NULL),
(12, '::1', 'Kurniawan', '$2y$08$5rcWKG8TqIJUu6pWwVspWewO9RprkhEp2DMQ4oPA4LFpA0KvjaQCK', NULL, 'kurni@bpjs.com', NULL, NULL, NULL, NULL, '2018-04-04 15:05:36', '2018-04-06 18:06:02', 1, 'Kurni', 'Awan', 'BPJS Kesehatan', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users_groups`
--

CREATE TABLE `tb_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_users_groups`
--

INSERT INTO `tb_users_groups` (`id`, `user_id`, `group_id`) VALUES
(37, 1, 1),
(38, 1, 2),
(42, 11, 2),
(43, 12, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daerah`
--
ALTER TABLE `tb_daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD PRIMARY KEY (`kode_faskes`);

--
-- Indexes for table `tb_fpkone`
--
ALTER TABLE `tb_fpkone`
  ADD PRIMARY KEY (`id_fpkone`);

--
-- Indexes for table `tb_fpktwo`
--
ALTER TABLE `tb_fpktwo`
  ADD PRIMARY KEY (`id_fpktwo`);

--
-- Indexes for table `tb_groups`
--
ALTER TABLE `tb_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jejaring`
--
ALTER TABLE `tb_jejaring`
  ADD PRIMARY KEY (`id_jejaring`);

--
-- Indexes for table `tb_login_attempts`
--
ALTER TABLE `tb_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_pesertatwo`
--
ALTER TABLE `tb_pesertatwo`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_users_groups`
--
ALTER TABLE `tb_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fpkone`
--
ALTER TABLE `tb_fpkone`
  MODIFY `id_fpkone` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `tb_fpktwo`
--
ALTER TABLE `tb_fpktwo`
  MODIFY `id_fpktwo` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_groups`
--
ALTER TABLE `tb_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jejaring`
--
ALTER TABLE `tb_jejaring`
  MODIFY `id_jejaring` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_login_attempts`
--
ALTER TABLE `tb_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tb_pesertatwo`
--
ALTER TABLE `tb_pesertatwo`
  MODIFY `id_peserta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_users_groups`
--
ALTER TABLE `tb_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_users_groups`
--
ALTER TABLE `tb_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `tb_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
