-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 12:43 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pami_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_code` varchar(8) NOT NULL,
  `bank_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_code`, `bank_name`) VALUES
('NAIDJA', 'PT. BANK CENTRAL ASIA / BCA, TBK'),
('BMRIIDJA', 'PT. BANK MANDIRI (PERSERO), TBK'),
('BSMDIDJA', 'PT. BANK SYARIAH MANDIRI'),
('BDINIDJA', 'PT. BANK DANAMON INDONESIA, TBK'),
('BNIAIDJA', 'PT. BANK CIMB NIAGA'),
('BBBAIDJA', 'PT. BANK PERMATA, TBK'),
('BRINIDJA', 'PT. BANK RAKYAT INDONESIA / BRI (PERSERO), TBK'),
('BNINIDJA', 'PT. BANK NEGARA INDONESIA / BNI (PERSERO), TBK'),
('SYCAIDJ1', 'PT. BANK BCA SYARIAH'),
('MEGAIDJA', 'PT. BANK MEGA, TBK'),
('BBUKIDJA', 'PT. BANK BUKOPIN, TBK'),
('DJARIDJ1', 'PT. BANK SYARIAH BRI'),
('SBJKIDJA', 'PT. BANK SINARMAS, TBK'),
('SCBLIDJX', 'STANDARD CHARTERED BANK'),
('SDOBIDJ1', 'PT. BANK SYARIAH BUKOPIN'),
('SIHBIDJ1', 'PT. BANK MANDIRI TASPEN POS'),
('CITIIDJX', 'CITIBANK, N.A.'),
('ABALIDBS', 'PT. BPD BALI'),
('ABNAIDJA', 'THE ROYAL BANK OF SCOTLAND N.V.'),
('AGSSIDJA', 'PT. BANK AGRIS'),
('AGTBIDJA', 'PT. BANK RAKYAT INDONESIA AGRONIAGA, TBK'),
('ANTDIDJD', 'PT. BANK ANTARDAERAH'),
('ANZBIDJX', 'PT. BANK ANZ INDONESIA '),
('ARFAIDJ1', 'PT. BANK PANIN DUBAI SYARIAH'),
('ARTGIDJA', 'PT. BANK ARTHA GRAHA INTERNASIONAL, TBK'),
('ATJSIDJ2', 'PT. ARTAJASA PEMBAYARAN ELEKTRONIK'),
('ATOSIDJ1', 'PT. BANK ARTOS INDONESIA'),
('AWANIDJA', 'PT. BANK QNB INDONESIA, TBK'),
('BBAIIDJA', 'PT. BANK BUMI ARTA'),
('BBIJIDJA', 'PT. BANK UOB INDONESIA'),
('BCIAIDJA', 'PT. BANK CAPITAL INDONESIA'),
('BDIPIDJ1', 'PT. BANK SAHABAT SAMPOERNA'),
('BDKIIDJ1', 'PT. BPD DKI'),
('BICNIDJA', 'PT. BANK COMMONWEALTH'),
('BIDXIDJA', 'PT. BANK INDEX SELINDO'),
('BKCHIDJA', 'BANK OF CHINA LIMITED'),
('BKKBIDJA', 'BANGKOK BANK PUBLIC, CO. LTD.'),
('BNPAIDJA', 'PT. BANK BNP PARIBAS INDONESIA'),
('BOFAID2X', 'BANK OF AMERICA, N.A.'),
('BOTKIDJX', 'THE BOT MITSUBISHI UFJ, LTD.'),
('BPIAIDJA', 'PT. BANK RESONA PERDANIA'),
('BSDRIDJA', 'PT. BANK WOORI SAUDARA INDONESIA 1906, TBK'),
('BSSPIDSP', 'PT. BPD SUMATERA SELATAN DAN BANGKA BELITUNG'),
('BTANIDJA', 'PT. BANK TABUNGAN NEGARA (PERSERO), TBK'),
('SUNIIDJA', 'PT. BANK TABUNGAN PENSIUNAN NASIONAL'),
('BUMIIDJA', 'PT. BANK MNC INTERNASIONAL, TBK'),
('BUSTIDJ1', 'PT. BANK BISNIS INTERNASIONAL'),
('BUTGIDJ1', 'PT. BANK MEGA SYARIAH'),
('CHASIDJX', 'JPMORGAN CHASE BANK, N.A.'),
('CICTIDJA', 'PT. BANK JTRUST INDONESIA, TBK'),
('CNBAIDJ1', 'PT. CENTRATAMA NASIONAL BANK'),
('CTCBIDJA', 'PT. BANK CTBC INDONESIA'),
('DBSBIDJA', 'PT. BANK DBS INDONESIA'),
('DEUTIDJA', 'DEUTSCHE BANK, A.G.'),
('HSBCIDJA', 'PT. Bank HSBC Indonesia, Tbk.'),
('EKSTIDJ1', 'PT. Bank Pembangunan Daerah Banten, Tbk.'),
('FAMAIDJ1', 'PT. BANK FAMA INTERNASIONAL'),
('FINTIDJ1', 'PT. FINNET INDONESIA'),
('GNESIDJA', 'PT. BANK GANESHA'),
('HNBNIDJA', 'PT. BANK KEB HANA INDONESIA'),
('HRDAIDJ1', 'PT. BANK HARDA INTERNASIONAL'),
('HSHKIDJ1', 'THE HONGKONG AND SHANGHAI BANK'),
('IBBKIDJA', 'PT. BANK MAYBANK INDONESIA, TBK'),
('ICBKIDJA', 'PT. BANK ICBC INDONESIA'),
('IDMOIDJ1', 'PT. BANK SBI INDONESIA'),
('INPBIDJ1', 'PT. BANK INA PERDANA'),
('JSABIDJ1', 'PT. BANK JASA JAKARTA'),
('KSEBIDJ1', 'PT. BANK KESEJAHTERAAN EKONOMI'),
('KSEIIDJ1', 'PT. KUSTODIAN SENTRAL EFEK INDONESIA'),
('LFIBIDJ1', 'PT. BANK NATIONALNOBU'),
('LMANIDJ1', 'PT. BANK DINAR INDONESIA'),
('LOMAIDJ1', 'PT. BANK AMAR INDONESIA'),
('LPEIIDJ1', 'INDONESIA EXIMBANK'),
('MASBIDJ1', 'PT. BANK MULTI ARTA SENTOSA'),
('MASDIDJ1', 'PT. BANK MASPION INDONESIA'),
('MAYAIDJA', 'PT. BANK MAYAPADA INTERNASIONAL, TBK'),
('MAYOIDJA', 'PT. BANK MAYORA'),
('MBBEIDJA', 'PT. BANK MAYBANK SYARIAH INDONESIA'),
('MCORIDJA', 'PT. BANK WINDU KENTJANA INTERNASIONAL, TBK'),
('MEDHIDS1', 'PT. BANK MESTIKA DHARMA'),
('MEEKIDJ1', 'PT. BANK SHINHAN INDONESIA'),
('MGABIDJ1', 'PT. BANK MITRA NIAGA'),
('MHCCIDJA', 'PT. BANK MIZUHO INDONESIA'),
('MUABIDJA', 'PT. BANK MUAMALAT INDONESIA, TBK'),
('NISPIDJA', 'PT. BANK OCBC NISP, TBK'),
('NUPAIDJ6', 'PT. BANK NUSANTARA PARAHYANGAN'),
('PDACIDJ1', 'PT. BPD ACEH'),
('PDBKIDJ1', 'PT. BPD BENGKULU'),
('PDIJIDJ1', 'PT. BPD PAPUA'),
('PDJBIDJA', 'PT. BANK JABAR BANTEN, TBK'),
('PDJGIDJ1', 'PT. BPD JAWA TENGAH'),
('PDJMIDJ1', 'PT. BPD JAMBI'),
('PDJTIDJ1', 'PT. BPD JAWA TIMUR'),
('PDKBIDJ1', 'PT. BPD KALIMANTAN BARAT'),
('PDKGIDJ1', 'PT. BPD KALIMANTAN TENGAH'),
('PDKSIDJ1', 'PT. BPD KALIMANTAN SELATAN'),
('PDKTIDJ1', 'PT. BPD KALIMANTAN TIMUR'),
('PDLPIDJ1', 'PT. BPD LAMPUNG'),
('PDMLIDJ1', 'PT. BPD MALUKU'),
('PDNBIDJ1', 'PT. BPD NUSA TENGGARA BARAT'),
('PDNTIDJ1', 'PT. BPD NUSA TENGGARA TIMUR'),
('PDRIIDJA', 'PT. BPD RIAU KEPRI'),
('PDSBIDJ1', 'PT. BPD SUMATERA BARAT'),
('PDSUIDJ1', 'PT. BPD SUMATERA UTARA'),
('PDWGIDJ1', 'PT. BPD SULAWESI TENGAH'),
('PDWRIDJ1', 'PT. BPD SULAWESI TENGGARA'),
('PDWSIDJ1', 'PT. BPD SULAWESI SELATAN DAN SULAWESI BARAT'),
('PDWUIDJ1', 'PT. BPD SULAWESI UTARA'),
('PDYKIDJ1', 'PT. BPD YOGYAKARTA'),
('PINBIDJA', 'PT. PAN INDONESIA BANK'),
('PMASIDJ1', 'PT. BANK PRIMA MASTER'),
('PUBAIDJ1', 'PT. BANK TABUNGAN PENSIUNAN NASIONAL SYARIAH'),
('RABOIDJA', 'PT. BANK RABOBANK INTERNASIONAL INDONESIA'),
('RIPAIDJ1', 'PT. BANK ANDARA'),
('ROYBIDJ1', 'PT. BANK ROYAL INDONESIA'),
('SWAGIDJ1', 'PT. BANK VICTORIA SYARIAH'),
('SWBAIDJ1', 'PT. BANK OF INDIA INDONESIA, TBK'),
('SYACIDJ1', 'PT. BANK ACEH SYARIAH'),
('SYBBIDJ1', 'PT. BANK PERMATA, TBK UNIT USAHA SYARIAH'),
('SYBDIDJ1', 'PT. BANK DANAMON INDONESIA UNIT USAHA SYARIAH'),
('SYBKIDJ1', 'PT. BANK MAYBANK INDONESIA, TBK UNIT USAHA SYARIAH'),
('SYBTIDJ1', 'PT. BANK TABUNGAN NEGARA (PERSERO) UNIT USAHA SYARIAH'),
('SYDKIDJ1', 'PT. BPD DKI UNIT USAHA SYARIAH'),
('SYJBIDJ1', 'PT. BANK JABAR BANTEN SYARIAH'),
('SYJGIDJ1', 'PT. BPD JAWA TENGAH UNIT USAHA SYARIAH'),
('SYJMIDJ1', 'PT. BPD JAMBI UNIT USAHA SYARIAH'),
('SYJTIDJ1', 'PT. BPD JAWA TIMUR UNIT USAHA SYARIAH'),
('SYKBIDJ1', 'PT. BPD KALIMANTAN BARAT UNIT USAHA SYARIAH'),
('SYKSIDJ1', 'PT. BPD KALIMANTAN SELATAN UNIT USAHA SYARIAH'),
('SYKTIDJ1', 'PT. BPD KALIMANTAN TIMUR UNIT USAHA SYARIAH'),
('SYNAIDJ1', 'PT. BANK CIMB NIAGA, TBK UNIT USAHA SYARIAH'),
('SYNBIDJ1', 'PT. BPD NUSA TENGGARA BARAT UNIT USAHA SYARIAH'),
('SYNIIDJ1', 'PT. BANK NEGARA INDONESIA SYARIAH'),
('SYONIDJ1', 'PT. BANK OCBC NISP, TBK UNIT USAHA SYARIAH'),
('SYRIIDJ1', 'PT. BPD RIAU UNIT USAHA SYARIAH'),
('SYSBIDJ1', 'PT. BPD SUMATERA BARAT UNIT USAHA SYARIAH'),
('SYSSIDJ1', 'PT. BPD SUMATERA SELATAN DAN BANGKA BELITUNG UNIT USAHA SYARIAH'),
('SYSUIDJ1', 'PT. BPD SUMATERA UTARA UNIT USAHA SYARIAH'),
('SYTBIDJ1', 'PT. BANK SINARMAS UNIT USAHA SYARIAH'),
('SYWSIDJ1', 'PT. BPD SULAWESI SELATAN DAN SULAWESI BARAT UNIT USAHA SYARIAH'),
('SYYKIDJ1', 'PT. BPD YOGYAKARTA UNIT USAHA SYARIAH'),
('VICTIDJ1', 'PT. BANK VICTORIA INTERNASIONAL'),
('YUDBIDJ1', 'PT. BANK YUDHA BHAKTI');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id_kota` int(4) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_kota`, `nama_kota`) VALUES
(1101, 'ACEH SELATAN (KAB.)'),
(1102, 'ACEH TENGGARA (KAB.)'),
(1103, 'ACEH TIMUR (KAB.)'),
(1104, 'ACEH TENGAH (KAB.)'),
(1105, 'ACEH BARAT (KAB.)'),
(1106, 'ACEH BESAR (KAB.)'),
(1107, 'PIDIE (KAB.)'),
(1108, 'ACEH UTARA (KAB.)'),
(1109, 'SIMEULUE (KAB.)'),
(1110, 'ACEH SINGKIL (KAB.)'),
(1111, 'BIREUEN (KAB.)'),
(1112, 'ACEH BARAT DAYA (KAB.)'),
(1113, 'GAYO LUES (KAB.)'),
(1114, 'ACEH JAYA (KAB.)'),
(1115, 'NAGAN RAYA (KAB.)'),
(1116, 'ACEH TAMIANG (KAB.)'),
(1117, 'BENER MERIAH (KAB.)'),
(1118, 'PIDIE JAYA (KAB.)'),
(1171, 'BANDA ACEH (KOTA)'),
(1172, 'SABANG (KOTA)'),
(1173, 'LHOKSEUMAWE (KOTA)'),
(1174, 'LANGSA (KOTA)'),
(1175, 'SUBULUSSALAM (KOTA)'),
(1201, 'TAPANULI TENGAH (KAB.)'),
(1202, 'TAPANULI UTARA (KAB.)'),
(1203, 'TAPANULI SELATAN (KAB.)'),
(1204, 'NIAS (KAB.)'),
(1205, 'LANGKAT (KAB.)'),
(1206, 'KARO (KAB.)'),
(1207, 'DELI SERDANG (KAB.)'),
(1208, 'SIMALUNGUN (KAB.)'),
(1209, 'ASAHAN (KAB.)'),
(1210, 'LABUHAN BATU (KAB.)'),
(1211, 'DAIRI (KAB.)'),
(1212, 'TOBA SAMOSIR (KAB.)'),
(1213, 'MANDAILING NATAL (KAB.)'),
(1214, 'NIAS SELATAN (KAB.)'),
(1215, 'PAKPAK BHARAT (KAB.)'),
(1216, 'HUMBANG HASUNDUTAN (KAB.)'),
(1217, 'SAMOSIR (KAB.)'),
(1218, 'SERDANG BEDAGAI (KAB.)'),
(1219, 'BATU BARA (KAB.)'),
(1220, 'PADANG LAWAS UTARA (KAB.)'),
(1221, 'PADANG LAWAS (KAB.)'),
(1222, 'LABUHANBATU SELATAN'),
(1223, 'LABUHANBATU UTARA'),
(1224, 'NIAS UTARA'),
(1225, 'NIAS BARAT'),
(1271, 'MEDAN (KOTA)'),
(1272, 'PEMATANG SIANTAR (KOTA)'),
(1273, 'SIBOLGA (KOTA)'),
(1274, 'TANJUNG BALAI (KOTA)'),
(1275, 'BINJAI (KOTA)'),
(1276, 'TEBING TINGGI (KOTA)'),
(1277, 'PADANG SIDEMPUAN (KOTA)'),
(1278, 'KOTA GUNUNGSITOLI'),
(1301, 'PESISIR SELATAN (KAB.)'),
(1302, 'SOLOK (KAB.)'),
(1303, 'SW.LUNTO/SIJUNJUNG (KAB.)'),
(1304, 'TANAH DATAR (KAB.)'),
(1305, 'PADANG PARIAMAN (KAB.)'),
(1306, 'AGAM (KAB.)'),
(1307, 'LIMA PULUH KOTA (KAB.)'),
(1308, 'PASAMAN (KAB.)'),
(1309, 'KEPULAUAN MENTAWAI (KAB.)'),
(1310, 'DHARMASRAYA (KAB.)'),
(1311, 'SOLOK SELATAN (KAB.)'),
(1312, 'PASAMAN BARAT (KAB.)'),
(1371, 'PADANG (KOTA)'),
(1372, 'SOLOK (KOTA)'),
(1373, 'SAWAHLUNTO (KOTA)'),
(1374, 'PADANG PANJANG (KOTA)'),
(1375, 'BUKITTINGGI (KOTA)'),
(1376, 'PAYAKUMBUH (KOTA)'),
(1377, 'PARIAMAN (KOTA)'),
(1401, 'KAMPAR (KAB.)'),
(1402, 'INDRAGIRI HULU (KAB.)'),
(1403, 'BENGKALIS (KAB.)'),
(1404, 'INDRAGIRI HILIR (KAB.)'),
(1405, 'PELALAWAN (KAB.)'),
(1406, 'ROKAN HULU (KAB.)'),
(1407, 'ROKAN HILIR (KAB.)'),
(1408, 'SIAK (KAB.)'),
(1409, 'KUANTAN SINGINGI (KAB.)'),
(1410, 'KEPULAUAN MERANTI'),
(1471, 'PEKANBARU (KOTA)'),
(1472, 'DUMAI (KOTA)'),
(1501, 'KERINCI (KAB.)'),
(1502, 'MERANGIN (KAB.)'),
(1503, 'SAROLANGUN (KAB.)'),
(1504, 'BATANGHARI (KAB.)'),
(1505, 'MUARO JAMBI (KAB.)'),
(1506, 'TANJUNG JABUNG BARAT (KAB.)'),
(1507, 'TANJUNG JABUNG TIMUR (KAB.)'),
(1508, 'BUNGO (KAB.)'),
(1509, 'TEBO (KAB.)'),
(1571, 'JAMBI (KOTA)'),
(1572, 'KOTA SUNGAI PENUH'),
(1601, 'OGAN KOMERING ULU (KAB.)'),
(1602, 'OGAN KOMERING ILIR (KAB.)'),
(1603, 'MUARA ENIM (KAB.)'),
(1604, 'LAHAT (KAB.)'),
(1605, 'MUSI RAWAS (KAB.)'),
(1606, 'MUSI BANYUASIN (KAB.)'),
(1607, 'BANYUASIN (KAB.)'),
(1608, 'OKU TIMUR (KAB.)'),
(1609, 'OKU SELATAN (KAB.)'),
(1610, 'OGAN ILIR (KAB.)'),
(1611, 'EMPAT LAWANG (KAB.)'),
(1612, 'PENUKAL ABAB LEMATANG ILIR'),
(1613, 'MUSI RAWAS UTARA'),
(1671, 'PALEMBANG (KOTA)'),
(1672, 'PAGAR ALAM (KOTA)'),
(1673, 'LUBUK LINGGAU (KOTA)'),
(1674, 'PRABUMULIH (KOTA)'),
(1701, 'BENGKULU SELATAN (KAB.)'),
(1702, 'REJANG LEBONG (KAB.)'),
(1703, 'BENGKULU UTARA (KAB.)'),
(1704, 'KAUR (KAB.)'),
(1705, 'SELUMA (KAB.)'),
(1706, 'MUKO MUKO (KAB.)'),
(1707, 'LEBONG (KAB.)'),
(1708, 'KEPAHIANG (KAB.)'),
(1709, 'BENGKULU TENGAH'),
(1771, 'BENGKULU (KOTA)'),
(1801, 'LAMPUNG SELATAN (KAB.)'),
(1802, 'LAMPUNG TENGAH (KAB.)'),
(1803, 'LAMPUNG UTARA (KAB.)'),
(1804, 'LAMPUNG BARAT (KAB.)'),
(1805, 'TULANG BAWANG (KAB.)'),
(1806, 'TANGGAMUS (KAB.)'),
(1807, 'LAMPUNG TIMUR (KAB.)'),
(1808, 'WAY KANAN (KAB.)'),
(1809, 'PESAWARAN (KAB.)'),
(1810, 'PRINGSEWU'),
(1811, 'MESUJI'),
(1812, 'TULANG BAWANG BARAT'),
(1813, 'PESISIR BARAT'),
(1871, 'BANDAR LAMPUNG (KOTA)'),
(1872, 'METRO (KOTA)'),
(1901, 'BANGKA (KAB.)'),
(1902, 'BELITUNG (KAB.)'),
(1903, 'BANGKA SELATAN (KAB.)'),
(1904, 'BANGKA TENGAH (KAB.)'),
(1905, 'BANGKA BARAT (KAB.)'),
(1906, 'BELITUNG TIMUR (KAB.)'),
(1971, 'PANGKAL PINANG (KOTA)'),
(2101, 'BINTAN (KAB.)'),
(2102, 'KARIMUN (KAB.)'),
(2103, 'NATUNA (KAB.)'),
(2104, 'LINGGA (KAB.)'),
(2105, 'KEPULAUAN ANAMBAS'),
(2171, 'BATAM (KOTA)'),
(2172, 'TANJUNG PINANG (KOTA)'),
(3101, 'ADM. KEP. SERIBU (KAB.)'),
(3171, 'JAKARTA PUSAT (KODYA)'),
(3172, 'JAKARTA UTARA (KODYA)'),
(3173, 'JAKARTA BARAT (KODYA)'),
(3174, 'JAKARTA SELATAN (KODYA)'),
(3175, 'JAKARTA TIMUR (KODYA)'),
(3201, 'BOGOR (KAB.)'),
(3202, 'SUKABUMI (KAB.)'),
(3203, 'CIANJUR (KAB.)'),
(3204, 'BANDUNG (KAB.)'),
(3205, 'GARUT (KAB.)'),
(3206, 'TASIKMALAYA (KAB.)'),
(3207, 'CIAMIS (KAB.)'),
(3208, 'KUNINGAN (KAB.)'),
(3209, 'CIREBON (KAB.)'),
(3210, 'MAJALENGKA (KAB.)'),
(3211, 'SUMEDANG (KAB.)'),
(3212, 'INDRAMAYU (KAB.)'),
(3213, 'SUBANG (KAB.)'),
(3214, 'PURWAKARTA (KAB.)'),
(3215, 'KARAWANG (KAB.)'),
(3216, 'BEKASI (KAB.)'),
(3217, 'BANDUNG BARAT (KAB.)'),
(3218, 'PANGANDARAN'),
(3271, 'BOGOR (KOTA)'),
(3272, 'SUKABUMI (KOTA)'),
(3273, 'BANDUNG (KOTA)'),
(3274, 'CIREBON (KOTA)'),
(3275, 'BEKASI (KOTA)'),
(3276, 'DEPOK (KOTA)'),
(3277, 'CIMAHI (KOTA)'),
(3278, 'TASIKMALAYA (KOTA)'),
(3279, 'BANJAR (KOTA)'),
(3301, 'CILACAP (KAB.)'),
(3302, 'BANYUMAS (KAB.)'),
(3303, 'PURBALINGGA (KAB.)'),
(3304, 'BANJARNEGARA (KAB.)'),
(3305, 'KEBUMEN (KAB.)'),
(3306, 'PURWOREJO (KAB.)'),
(3307, 'WONOSOBO (KAB.)'),
(3308, 'MAGELANG (KAB.)'),
(3309, 'BOYOLALI (KAB.)'),
(3310, 'KLATEN (KAB.)'),
(3311, 'SUKOHARJO (KAB.)'),
(3312, 'WONOGIRI (KAB.)'),
(3313, 'KARANGANYAR (KAB.)'),
(3314, 'SRAGEN (KAB.)'),
(3315, 'GROBOGAN (KAB.)'),
(3316, 'BLORA (KAB.)'),
(3317, 'REMBANG (KAB.)'),
(3318, 'PATI (KAB.)'),
(3319, 'KUDUS (KAB.)'),
(3320, 'JEPARA (KAB.)'),
(3321, 'DEMAK (KAB.)'),
(3322, 'SEMARANG (KAB.)'),
(3323, 'TEMANGGUNG (KAB.)'),
(3324, 'KENDAL (KAB.)'),
(3325, 'BATANG (KAB.)'),
(3326, 'PEKALONGAN (KAB.)'),
(3327, 'PEMALANG (KAB.)'),
(3328, 'TEGAL (KAB.)'),
(3329, 'BREBES (KAB.)'),
(3371, 'MAGELANG (KOTA)'),
(3372, 'SURAKARTA (KOTA)'),
(3373, 'SALATIGA (KOTA)'),
(3374, 'SEMARANG (KOTA)'),
(3375, 'PEKALONGAN (KOTA)'),
(3376, 'TEGAL (KOTA)'),
(3401, 'KULON PROGO (KAB.)'),
(3402, 'BANTUL (KAB.)'),
(3403, 'GUNUNG KIDUL (KAB.)'),
(3404, 'SLEMAN (KAB.)'),
(3471, 'YOGYAKARTA (KOTA)'),
(3501, 'PACITAN (KAB.)'),
(3502, 'PONOROGO (KAB.)'),
(3503, 'TRENGGALEK (KAB.)'),
(3504, 'TULUNGAGUNG (KAB.)'),
(3505, 'BLITAR (KAB.)'),
(3506, 'KEDIRI (KAB.)'),
(3507, 'MALANG (KAB.)'),
(3508, 'LUMAJANG (KAB.)'),
(3509, 'JEMBER (KAB.)'),
(3510, 'BANYUWANGI (KAB.)'),
(3511, 'BONDOWOSO (KAB.)'),
(3512, 'SITUBONDO (KAB.)'),
(3513, 'PROBOLINGGO (KAB.)'),
(3514, 'PASURUAN (KAB.)'),
(3515, 'SIDOARJO (KAB.)'),
(3516, 'MOJOKERTO (KAB.)'),
(3517, 'JOMBANG (KAB.)'),
(3518, 'NGANJUK (KAB.)'),
(3519, 'MADIUN (KAB.)'),
(3520, 'MAGETAN (KAB.)'),
(3521, 'NGAWI (KAB.)'),
(3522, 'BOJONEGORO (KAB.)'),
(3523, 'TUBAN (KAB.)'),
(3524, 'LAMONGAN (KAB.)'),
(3525, 'GRESIK (KAB.)'),
(3526, 'BANGKALAN (KAB.)'),
(3527, 'SAMPANG (KAB.)'),
(3528, 'PAMEKASAN (KAB.)'),
(3529, 'SUMENEP (KAB.)'),
(3571, 'KEDIRI (KOTA)'),
(3572, 'BLITAR (KOTA)'),
(3573, 'MALANG (KOTA)'),
(3574, 'PROBOLINGGO (KOTA)'),
(3575, 'PASURUAN (KOTA)'),
(3576, 'MOJOKERTO (KOTA)'),
(3577, 'MADIUN (KOTA)'),
(3578, 'SURABAYA (KOTA)'),
(3579, 'BATU (KOTA)'),
(3601, 'PANDEGLANG (KAB.)'),
(3602, 'LEBAK (KAB.)'),
(3603, 'TANGERANG (KAB.)'),
(3604, 'SERANG (KAB.)'),
(3671, 'TANGERANG (KOTA)'),
(3672, 'CILEGON (KOTA)'),
(3673, 'SERANG (KOTA)'),
(3674, 'KOTA TANGERANG SELATAN'),
(5101, 'JEMBRANA (KAB.)'),
(5102, 'TABANAN (KAB.)'),
(5103, 'BADUNG (KAB.)'),
(5104, 'GIANYAR (KAB.)'),
(5105, 'KLUNGKUNG (KAB.)'),
(5106, 'BANGLI (KAB.)'),
(5107, 'KARANGASEM (KAB.)'),
(5108, 'BULELENG (KAB.)'),
(5171, 'DENPASAR (KOTA)'),
(5201, 'LOMBOK BARAT (KAB.)'),
(5202, 'LOMBOK TENGAH (KAB.)'),
(5203, 'LOMBOK TIMUR (KAB.)'),
(5204, 'SUMBAWA (KAB.)'),
(5205, 'DOMPU (KAB.)'),
(5206, 'BIMA (KAB.)'),
(5207, 'SUMBAWA BARAT (KAB.)'),
(5208, 'LOMBOK UTARA'),
(5271, 'MATARAM (KOTA)'),
(5272, 'BIMA (KOTA)'),
(5301, 'KUPANG (KAB.)'),
(5302, 'TIMOR TENGAH SELATAN (KAB.)'),
(5303, 'TIMOR TENGAH UTARA (KAB.)'),
(5304, 'BELU (KAB.)'),
(5305, 'ALOR (KAB.)'),
(5306, 'FLORES TIMUR (KAB.)'),
(5307, 'SIKKA (KAB.)'),
(5308, 'ENDE (KAB.)'),
(5309, 'NGADA (KAB.)'),
(5310, 'MANGGARAI (KAB.)'),
(5311, 'SUMBA TIMUR (KAB.)'),
(5312, 'SUMBA BARAT (KAB.)'),
(5313, 'LEMBATA (KAB.)'),
(5314, 'ROTE NDAO (KAB.)'),
(5315, 'MANGGARAI BARAT (KAB.)'),
(5316, 'NAGEKEO (KAB.)'),
(5317, 'SUMBA TENGAH (KAB.)'),
(5318, 'SUMBA BARAT DAYA (KAB.)'),
(5319, 'MANGGARAI TIMUR (KAB.)'),
(5320, 'SABU RAIJUA'),
(5321, 'MALAKA'),
(5371, 'KUPANG (KOTA)'),
(6101, 'SAMBAS (KAB.)'),
(6102, 'PONTIANAK (KAB.)'),
(6103, 'SANGGAU (KAB.)'),
(6104, 'KETAPANG (KAB.)'),
(6105, 'SINTANG (KAB.)'),
(6106, 'KAPUAS HULU (KAB.)'),
(6107, 'BENGKAYANG (KAB.)'),
(6108, 'LANDAK (KAB.)'),
(6109, 'SEKADAU (KAB.)'),
(6110, 'MELAWI (KAB.)'),
(6111, 'KAYONG UTARA (KAB.)'),
(6112, 'KUBU RAYA (KAB.)'),
(6171, 'PONTIANAK (KOTA)'),
(6172, 'SINGKAWANG (KOTA)'),
(6201, 'KOTAWARINGIN BARAT (KAB.)'),
(6202, 'KOTAWARINGIN TIMUR (KAB.)'),
(6203, 'KAPUAS (KAB.)'),
(6204, 'BARITO SELATAN (KAB.)'),
(6205, 'BARITO UTARA (KAB.)'),
(6206, 'KATINGAN (KAB.)'),
(6207, 'SERUYAN (KAB.)'),
(6208, 'SUKAMARA (KAB.)'),
(6209, 'LAMANDAU (KAB.)'),
(6210, 'GUNUNG MAS (KAB.)'),
(6211, 'PULANG PISAU (KAB.)'),
(6212, 'MURUNG RAYA (KAB.)'),
(6213, 'BARITO TIMUR (KAB.)'),
(6271, 'PALANGKARAYA (KOTA)'),
(6301, 'TANAH LAUT (KAB.)'),
(6302, 'KOTABARU (KAB.)'),
(6303, 'BANJAR (KAB.)'),
(6304, 'BARITO KUALA (KAB.)'),
(6305, 'TAPIN (KAB.)'),
(6306, 'HULU SUNGAI SELATAN (KAB.)'),
(6307, 'HULU SUNGAI TENGAH (KAB.)'),
(6308, 'HULU SUNGAI UTARA (KAB.)'),
(6309, 'TABALONG (KAB.)'),
(6310, 'TANAH BUMBU (KAB.)'),
(6311, 'BALANGAN (KAB.)'),
(6371, 'BANJARMASIN (KOTA)'),
(6372, 'BANJARBARU (KOTA)'),
(6401, 'PASER (KAB.)'),
(6402, 'KUTAI KERTANEGARA (KAB.)'),
(6403, 'BERAU (KAB.)'),
(6407, 'KUTAI BARAT (KAB.)'),
(6408, 'KUTAI TIMUR (KAB.)'),
(6409, 'PENAJAM PASER UTARA (KAB.)'),
(6411, 'MAHAKAM ULU'),
(6471, 'BALIKPAPAN (KOTA)'),
(6472, 'SAMARINDA (KOTA)'),
(6474, 'BONTANG (KOTA)'),
(6501, 'BULUNGAN'),
(6502, 'MALINAU'),
(6503, 'NUNUKAN'),
(6504, 'TANA TIDUNG'),
(6571, 'KOTA TARAKAN'),
(7101, 'BOLAANG MONGONDOW (KAB.)'),
(7102, 'MINAHASA (KAB.)'),
(7103, 'KEPULAUAN SANGIHE (KAB.)'),
(7104, 'KEPULAUAN TALAUD (KAB.)'),
(7105, 'MINAHASA SELATAN (KAB.)'),
(7106, 'MINAHASA UTARA (KAB.)'),
(7107, 'MINAHASA TENGGARA (KAB.)'),
(7108, 'BOLMONG UTARA (KAB.)'),
(7109, 'KEP. SITARO (KAB.)'),
(7110, 'BOLAANG MONGONDOW TIMUR'),
(7111, 'BOLAANG MONGONDOW SELATAN'),
(7171, 'MANADO (KOTA)'),
(7172, 'BITUNG (KOTA)'),
(7173, 'TOMOHON (KOTA)'),
(7174, 'KOTAMOBAGU (KOTA)'),
(7201, 'BANGGAI (KAB.)'),
(7202, 'POSO (KAB.)'),
(7203, 'DONGGALA (KAB.)'),
(7204, 'TOLI TOLI (KAB.)'),
(7205, 'BUOL (KAB.)'),
(7206, 'MOROWALI (KAB.)'),
(7207, 'BANGGAI KEPULAUAN (KAB.)'),
(7208, 'PARIGI MOUTONG (KAB.)'),
(7209, 'TOJO UNA UNA (KAB.)'),
(7210, 'SIGI'),
(7211, 'BANGGAI LAUT'),
(7212, 'MOROWALI UTARA'),
(7271, 'PALU (KOTA)'),
(7301, 'SELAYAR (KAB.)'),
(7302, 'BULUKUMBA (KAB.)'),
(7303, 'BANTAENG (KAB.)'),
(7304, 'JENEPONTO (KAB.)'),
(7305, 'TAKALAR (KAB.)'),
(7306, 'GOWA (KAB.)'),
(7307, 'SINJAI (KAB.)'),
(7308, 'BONE (KAB.)'),
(7309, 'MAROS (KAB.)'),
(7310, 'PANGKAJENE KEP. (KAB.)'),
(7311, 'BARRU (KAB.)'),
(7312, 'SOPPENG (KAB.)'),
(7313, 'WAJO (KAB.)'),
(7314, 'SIDENRENG RAPANG (KAB.)'),
(7315, 'PINRANG (KAB.)'),
(7316, 'ENREKANG (KAB.)'),
(7317, 'LUWU (KAB.)'),
(7318, 'TANA TORAJA (KAB.)'),
(7322, 'LUWU UTARA (KAB.)'),
(7324, 'LUWU TIMUR (KAB.)'),
(7326, 'TORAJA UTARA'),
(7371, 'MAKASAR (KOTA)'),
(7372, 'PARE PARE (KOTA)'),
(7373, 'PALOPO (KOTA)'),
(7401, 'KOLAKA (KAB.)'),
(7402, 'KONAWE (KAB.)'),
(7403, 'MUNA (KAB.)'),
(7404, 'BUTON (KAB.)'),
(7405, 'KONAWE SELATAN (KAB.)'),
(7406, 'BOMBANA (KAB.)'),
(7407, 'WAKATOBI (KAB.)'),
(7408, 'KOLAKA UTARA (KAB.)'),
(7409, 'KONAWE UTARA (KAB.)'),
(7410, 'BUTON UTARA (KAB.)'),
(7411, 'KOLAKA TIMUR'),
(7412, 'KONAWE KEPULAUAN'),
(7413, 'MUNA BARAT'),
(7414, 'BUTON TENGAH'),
(7415, 'BUTON SELATAN'),
(7471, 'KENDARI (KOTA)'),
(7472, 'BAU BAU (KOTA)'),
(7501, 'GORONTALO (KAB.)'),
(7502, 'BOALEMO (KAB.)'),
(7503, 'BONE BOLANGO (KAB.)'),
(7504, 'PAHUWATO (KAB.)'),
(7505, 'GORONTALO UTARA (KAB.)'),
(7571, 'GORONTALO (KOTA)'),
(7601, 'MAMUJU UTARA (KAB.)'),
(7602, 'MAMUJU (KAB.)'),
(7603, 'MAMASA (KAB.)'),
(7604, 'POLEWALI MAMASA (KAB.)'),
(7605, 'MAJENE (KAB.)'),
(7606, 'MAMUJU TENGAH'),
(8101, 'MALUKU TENGAH (KAB.)'),
(8102, 'MALUKU TENGGARA (KAB.)'),
(8103, 'MALUKU TENGGARA BRT (KAB.)'),
(8104, 'BURU (KAB.)'),
(8105, 'SERAM BAGIAN TIMUR (KAB.)'),
(8106, 'SERAM BAGIAN BARAT (KAB.)'),
(8107, 'KEPULAUAN ARU (KAB.)'),
(8108, 'MALUKU BARAT DAYA'),
(8109, 'BURU SELATAN'),
(8171, 'AMBON (KOTA)'),
(8172, 'TUAL (KOTA)'),
(8201, 'HALMAHERA BARAT (KAB.)'),
(8202, 'HALMAHERA TENGAH (KAB.)'),
(8203, 'HALMAHERA UTARA (KAB.)'),
(8204, 'HALMAHERA SELATAN (KAB.)'),
(8205, 'KEPULAUAN SULA (KAB.)'),
(8206, 'HALMAHERA TIMUR (KAB.)'),
(8207, 'PULAU MOROTAI'),
(8208, 'PULAU TALIABU'),
(8271, 'TERNATE (KOTA)'),
(8272, 'TIDORE KEPULAUAN (KOTA)'),
(9101, 'MERAUKE (KAB.)'),
(9102, 'JAYAWIJAYA (KAB.)'),
(9103, 'JAYAPURA (KAB.)'),
(9104, 'NABIRE (KAB.)'),
(9105, 'YAPEN WAROPEN (KAB.)'),
(9106, 'BIAK NUMFOR (KAB.)'),
(9107, 'PUNCAK JAYA (KAB.)'),
(9108, 'PANIAI (KAB.)'),
(9109, 'MIMIKA (KAB.)'),
(9110, 'SARMI (KAB.)'),
(9111, 'KEEROM (KAB.)'),
(9112, 'PEGUNUNGAN BINTANG (KAB.)'),
(9113, 'YAHUKIMO (KAB.)'),
(9114, 'TOLIKARA (KAB.)'),
(9115, 'WAROPEN (KAB.)'),
(9116, 'BOVEN DIGOEL (KAB.)'),
(9117, 'MAPPI (KAB.)'),
(9118, 'ASMAT (KAB.)'),
(9119, 'SUPIORI (KAB.)'),
(9120, 'MAMBERAMO RAYA (KAB.)'),
(9121, 'MAMBERAMO TENGAH'),
(9122, 'YALIMO'),
(9123, 'LANNY JAYA'),
(9124, 'NDUGA'),
(9125, 'PUNCAK'),
(9126, 'DOGIYAI'),
(9127, 'INTAN JAYA'),
(9128, 'DEIYAI'),
(9171, 'JAYAPURA (KOTA)'),
(9201, 'SORONG (KAB.)'),
(9202, 'MANOKWARI (KAB.)'),
(9203, 'FAK FAK (KAB.)'),
(9204, 'SORONG SELATAN (KAB.)'),
(9205, 'RAJA AMPAT (KAB.)'),
(9206, 'TELUK BENTUNI (KAB.)'),
(9207, 'TELUK WONDAMA (KAB.)'),
(9208, 'KAIMANA (KAB.)'),
(9209, 'TAMBRAUW'),
(9210, 'MAYBRAT'),
(9211, 'MANOKWARI SELATAN'),
(9212, 'PEGUNUNGAN ARFAK'),
(9271, 'SORONG (KOTA)'),
(9999, 'LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `seq_id` int(11) NOT NULL,
  `nama_file` varchar(50) DEFAULT NULL,
  `unique_id` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`seq_id`, `nama_file`, `unique_id`, `update_date`) VALUES
(3, 'smayliki_emocii_1730.gif', '0.3057722595704879', '2019-03-30 15:58:57'),
(4, 'WIN_20180526_14_45_24_Pro.jpg', '0.2829287209099842', '2019-03-30 16:50:48'),
(5, 'password.png', '0.9780563109225455', '2019-03-30 21:25:45'),
(6, 'phew-smiley-emoticon.gif', '0.2828330298767062', '2019-03-30 22:14:37'),
(7, '59.png', '0.14000809565549444', '2019-04-02 15:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `gross_income`
--

CREATE TABLE `gross_income` (
  `seq_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gross_income`
--

INSERT INTO `gross_income` (`seq_id`, `name`) VALUES
(1, '10 juta / tahun'),
(2, '10 – 50 juta / tahun'),
(3, '50 – 100 juta / tahun'),
(4, '100 – 500 juta / tahun'),
(5, '500 juta – 1 milyar / tahun'),
(6, '1 milyar / tahun');

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `occupation_id` int(2) NOT NULL,
  `occupation_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`occupation_id`, `occupation_name`) VALUES
(1, 'Pelajar/Mahasiswa'),
(2, 'Ibu Rumah Tangga'),
(3, 'Wiraswasta'),
(4, 'Pegawai Negeri'),
(5, 'TNI/POLRI'),
(6, 'Pensiunan'),
(7, 'Dosen/Guru'),
(8, 'Pegawai Swasta'),
(9, 'Lainnya'),
(10, 'Aparatur Sipil Negara'),
(11, 'BUMN/BUMD');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(122) UNSIGNED NOT NULL,
  `user_type` varchar(250) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `user_type`, `data`) VALUES
(1, 'Member', '{\"users\":{\"own_create\":\"1\",\"own_read\":\"1\",\"own_update\":\"1\",\"own_delete\":\"1\"}}'),
(2, 'admin', '{\"users\":{\"own_create\":\"1\",\"own_read\":\"1\",\"own_update\":\"1\",\"own_delete\":\"1\",\"all_create\":\"1\",\"all_read\":\"1\",\"all_update\":\"1\",\"all_delete\":\"1\"}}'),
(3, 'Manager', '{\"users\":{\"own_create\":\"1\",\"own_read\":\"1\",\"own_update\":\"1\",\"own_delete\":\"1\",\"all_read\":\"1\",\"all_update\":\"1\",\"all_delete\":\"1\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `risk_level` varchar(20) DEFAULT NULL,
  `performance` decimal(10,2) DEFAULT NULL,
  `total_asset` varchar(15) DEFAULT NULL,
  `logo` varchar(35) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `type`, `risk_level`, `performance`, `total_asset`, `logo`, `status`) VALUES
(20001, 'Post Indo Money Market Fund', 'Deposito', 'Rendah', '3.60', '5.5T', 'product.png', 1),
(20002, 'Post Indo Kombinasi', 'Tabungan', 'Tinggi', '2.75', '4.6T', 'product.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(122) UNSIGNED NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `keys`, `value`) VALUES
(1, 'website', 'User Login and Management'),
(2, 'logo', 'logo.png'),
(3, 'favicon', 'favicon.ico'),
(4, 'SMTP_EMAIL', ''),
(5, 'HOST', ''),
(6, 'PORT', ''),
(7, 'SMTP_SECURE', ''),
(8, 'SMTP_PASSWORD', ''),
(9, 'mail_setting', 'simple_mail'),
(10, 'company_name', 'Company Name'),
(11, 'crud_list', 'users,User'),
(12, 'EMAIL', ''),
(13, 'UserModules', 'yes'),
(14, 'register_allowed', '1'),
(15, 'email_invitation', '1'),
(16, 'admin_approval', '0'),
(17, 'user_type', '[\"Member\"]');

-- --------------------------------------------------------

--
-- Table structure for table `source_of_fund`
--

CREATE TABLE `source_of_fund` (
  `fund_id` int(2) DEFAULT NULL,
  `fund_desc` varchar(29) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `source_of_fund`
--

INSERT INTO `source_of_fund` (`fund_id`, `fund_desc`) VALUES
(2, 'Keuntungan Bisnis'),
(3, 'Bunga Tabungan'),
(4, 'Warisan'),
(5, 'Dana dari orang tua atau anak'),
(6, 'Hibah'),
(7, 'Dana dari suami atau istri'),
(8, 'Undian'),
(9, 'Keuntungan Investasi'),
(10, 'Lainnya'),
(1, 'Pendapatan');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(121) UNSIGNED NOT NULL,
  `module` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `html` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `module`, `code`, `template_name`, `html`) VALUES
(1, 'forgot_pass', 'forgot_password', 'Forgot password', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head>\r\n  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n  <style type=\"text/css\" rel=\"stylesheet\" media=\"all\">\r\n    /* Base ------------------------------ */\r\n    *:not(br):not(tr):not(html) {\r\n      font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;\r\n      -webkit-box-sizing: border-box;\r\n      box-sizing: border-box;\r\n    }\r\n    body {\r\n      \r\n    }\r\n    a {\r\n      color: #3869D4;\r\n    }\r\n\r\n\r\n    /* Masthead ----------------------- */\r\n    .email-masthead {\r\n      padding: 25px 0;\r\n      text-align: center;\r\n    }\r\n    .email-masthead_logo {\r\n      max-width: 400px;\r\n      border: 0;\r\n    }\r\n    .email-footer {\r\n      width: 570px;\r\n      margin: 0 auto;\r\n      padding: 0;\r\n      text-align: center;\r\n    }\r\n    .email-footer p {\r\n      color: #AEAEAE;\r\n    }\r\n  \r\n    .content-cell {\r\n      padding: 35px;\r\n    }\r\n    .align-right {\r\n      text-align: right;\r\n    }\r\n\r\n    /* Type ------------------------------ */\r\n    h1 {\r\n      margin-top: 0;\r\n      color: #2F3133;\r\n      font-size: 19px;\r\n      font-weight: bold;\r\n      text-align: left;\r\n    }\r\n    h2 {\r\n      margin-top: 0;\r\n      color: #2F3133;\r\n      font-size: 16px;\r\n      font-weight: bold;\r\n      text-align: left;\r\n    }\r\n    h3 {\r\n      margin-top: 0;\r\n      color: #2F3133;\r\n      font-size: 14px;\r\n      font-weight: bold;\r\n      text-align: left;\r\n    }\r\n    p {\r\n      margin-top: 0;\r\n      color: #74787E;\r\n      font-size: 16px;\r\n      line-height: 1.5em;\r\n      text-align: left;\r\n    }\r\n    p.sub {\r\n      font-size: 12px;\r\n    }\r\n    p.center {\r\n      text-align: center;\r\n    }\r\n\r\n    /* Buttons ------------------------------ */\r\n    .button {\r\n      display: inline-block;\r\n      width: 200px;\r\n      background-color: #3869D4;\r\n      border-radius: 3px;\r\n      color: #ffffff;\r\n      font-size: 15px;\r\n      line-height: 45px;\r\n      text-align: center;\r\n      text-decoration: none;\r\n      -webkit-text-size-adjust: none;\r\n      mso-hide: all;\r\n    }\r\n    .button--green {\r\n      background-color: #22BC66;\r\n    }\r\n    .button--red {\r\n      background-color: #dc4d2f;\r\n    }\r\n    .button--blue {\r\n      background-color: #3869D4;\r\n    }\r\n  </style>\r\n</head>\r\n<body style=\"width: 100% !important;\r\n      height: 100%;\r\n      margin: 0;\r\n      line-height: 1.4;\r\n      background-color: #F2F4F6;\r\n      color: #74787E;\r\n      -webkit-text-size-adjust: none;\">\r\n  <table class=\"email-wrapper\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"\r\n    width: 100%;\r\n    margin: 0;\r\n    padding: 0;\">\r\n    <tbody><tr>\r\n      <td align=\"center\">\r\n        <table class=\"email-content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\r\n      margin: 0;\r\n      padding: 0;\">\r\n          <!-- Logo -->\r\n\r\n          <tbody>\r\n          <!-- Email Body -->\r\n          <tr>\r\n            <td class=\"email-body\" width=\"100%\" style=\"width: 100%;\r\n    margin: 0;\r\n    padding: 0;\r\n    border-top: 1px solid #edeef2;\r\n    border-bottom: 1px solid #edeef2;\r\n    background-color: #edeef2;\">\r\n              <table class=\"email-body_inner\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\" style=\" width: 570px;\r\n    margin:  14px auto;\r\n    background: #fff;\r\n    padding: 0;\r\n    border: 1px outset rgba(136, 131, 131, 0.26);\r\n    box-shadow: 0px 6px 38px rgb(0, 0, 0);\r\n       \">\r\n                <!-- Body content -->\r\n                <thead style=\"background: #3869d4;\"><tr><th><div align=\"center\" style=\"padding: 15px; color: #000;\"><a href=\"{var_action_url}\" class=\"email-masthead_name\" style=\"font-size: 16px;\r\n      font-weight: bold;\r\n      color: #bbbfc3;\r\n      text-decoration: none;\r\n      text-shadow: 0 1px 0 white;\">{var_sender_name}</a></div></th></tr>\r\n                </thead>\r\n                <tbody><tr>\r\n                  <td class=\"content-cell\" style=\"padding: 35px;\">\r\n                    <h1>Hi {var_user_name},</h1>\r\n                    <p>You recently requested to reset your password for your {var_website_name} account. Click the button below to reset it.</p>\r\n                    <!-- Action -->\r\n                    <table class=\"body-action\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"\r\n      width: 100%;\r\n      margin: 30px auto;\r\n      padding: 0;\r\n      text-align: center;\">\r\n                      <tbody><tr>\r\n                        <td align=\"center\">\r\n                          <div>\r\n                            <!--[if mso]><v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\" href=\"{{var_action_url}}\" style=\"height:45px;v-text-anchor:middle;width:200px;\" arcsize=\"7%\" stroke=\"f\" fill=\"t\">\r\n                              <v:fill type=\"tile\" color=\"#dc4d2f\" />\r\n                              <w:anchorlock/>\r\n                              <center style=\"color:#ffffff;font-family:sans-serif;font-size:15px;\">Reset your password</center>\r\n                            </v:roundrect><![endif]-->\r\n                            <a href=\"{var_varification_link}\" class=\"button button--red\" style=\"background-color: #dc4d2f;display: inline-block;\r\n      width: 200px;\r\n      background-color: #3869D4;\r\n      border-radius: 3px;\r\n      color: #ffffff;\r\n      font-size: 15px;\r\n      line-height: 45px;\r\n      text-align: center;\r\n      text-decoration: none;\r\n      -webkit-text-size-adjust: none;\r\n      mso-hide: all;\">Reset your password</a>\r\n                          </div>\r\n                        </td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                    <p>If you did not request a password reset, please ignore this email or reply to let us know.</p>\r\n                    <p>Thanks,<br>{var_sender_name} and the {var_website_name} Team</p>\r\n                   <!-- Sub copy -->\r\n                    <table class=\"body-sub\" style=\"margin-top: 25px;\r\n      padding-top: 25px;\r\n      border-top: 1px solid #EDEFF2;\">\r\n                      <tbody><tr>\r\n                        <td> \r\n                          <p class=\"sub\" style=\"font-size:12px;\">If you are having trouble clicking the password reset button, copy and paste the URL below into your web browser.</p>\r\n                          <p class=\"sub\"  style=\"font-size:12px;\"><a href=\"{var_varification_link}\">{var_varification_link}</a></p>\r\n                        </td>\r\n                      </tr>\r\n                    </tbody></table>\r\n                  </td>\r\n                </tr>\r\n              </tbody></table>\r\n            </td>\r\n          </tr>\r\n        </tbody></table>\r\n      </td>\r\n    </tr>\r\n  </tbody></table>\r\n\r\n\r\n</body></html>'),
(3, 'users', 'invitation', 'Invitation', '<p>Hello <strong>{var_user_email}</strong></p>\r\n\r\n<p>Click below link to register&nbsp;<br />\r\n{var_inviation_link}</p>\r\n\r\n<p>Thanks&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `trans_code` int(2) NOT NULL,
  `trans_unit` double NOT NULL,
  `trans_status` int(2) NOT NULL,
  `remarks` varchar(10) NOT NULL,
  `trans_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(121) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `var_key` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_id`, `var_key`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`) VALUES
(1, '1', '$2y$10$VGcp0mni.wPZx6xLZzL69.QPMIRk/aco.HX4bYT7ZDhjgNwGpSab2', 'active', '0', 'admin', '$2y$10$KbFi5ET36yNuzTMX/YwY4.BDr2TAzaY246lBIpRMhAySx/B7.M0bK', 'ridhoanggoro@rocketmail.com', 'emoticon1_1553961178.gif', 'admin'),
(2, '1', '$2y$10$L4HZEDtqv4UDxE2yI3OVj.ok49/6XYf5SFPcuDA59Zr2rxmeMXaOu', 'active', '0', 'JOni', '$2y$10$/eDVT6JUbgO63ugIPV9VCeCjZKoX6c5OvaoEYb2h8LdNLVAXD1yjO', 'makhluktuhanpalingkeren@gmail.com', 'user4-128x128.jpg', 'Member'),
(3, '1', '$2y$10$lFxgP6uQpobutDM6Qi4xHOCYDtaRfYmeB.JcvNW2zI/.Y6y.Jr0D.', 'active', '0', 'Roy Aja', '$2y$10$WSGz5hJQdzRMTVPGUxfS5uQJ14Rn.lxvlR5/C7Sm8MpC/JADD0bjy', 'ridhoanggoro@hotmail.com', '3_1553356103.PNG', 'Member'),
(4, '1', NULL, 'active', '0', 'Je', '$2y$10$u9BJ4vdkni9Nly9nFE/9n.ayqGXRHIQEico3KbhysBt/3WtrDCfd6', 'jeje@ymail.com', 'user.png', 'Member'),
(5, '1', NULL, 'active', '0', 'Ridho Anggoro', '$2y$10$lkdHgp.OwsKDE.Q9936aieb90bIf7NIhZX05BpYLHsMNmvwqX/Ji.', 'admin@admin.com', 'user.png', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_info`
--

CREATE TABLE `user_account_info` (
  `seq_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `ifua_no` varchar(16) DEFAULT NULL,
  `e_ktp_no` varchar(16) DEFAULT NULL,
  `e_ktp_foto` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `status_kawin` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `penghasilan_per_tahun` varchar(30) DEFAULT NULL,
  `sumber_dana` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(35) DEFAULT NULL,
  `kode_pos` int(5) DEFAULT NULL,
  `rekening_bank_code` varchar(20) DEFAULT NULL,
  `rekening_bank_no` varchar(20) DEFAULT NULL,
  `ttd` longtext,
  `account_status` int(2) NOT NULL,
  `update_user` varchar(25) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='user_account_info';

--
-- Dumping data for table `user_account_info`
--

INSERT INTO `user_account_info` (`seq_id`, `users_id`, `ifua_no`, `e_ktp_no`, `e_ktp_foto`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_kawin`, `pendidikan_terakhir`, `agama`, `no_hp`, `pekerjaan`, `penghasilan_per_tahun`, `sumber_dana`, `alamat`, `kota`, `kode_pos`, `rekening_bank_code`, `rekening_bank_no`, `ttd`, `account_status`, `update_user`, `update_date`) VALUES
(6, 3, 'YP0690406xxxxxxx', '454212124545454', NULL, 'Jakarta', '1986-09-11', NULL, '', '', '', '', '', '', '', 'Kavling Central Niaga VI, Blok SN 6-8 No.11, Jalan Harapan Indah Boulevard, RT.10/RW.8, Pusaka Rakyat, Tarumajaya, RT.10/RW.8, Pusaka Rakyat, Tarumajaya, Bekasi, Jawa Barat 17214, Indonesia', '', 0, '', '75540000014', '', 3, 'admin', '2019-04-10 02:08:55'),
(16, 1, 'YP0648112xxxxxxx', '5214456785210000', NULL, 'Bogor', '1989-01-29', NULL, '', '', '', '', '', '', '', 'Jl. Raya Joglo Komp. DPR. RI Pribadi Kembangan Jakarta Barat 4 8, Joglo, Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640, Indonesia', '', 0, '', '', '', 0, 'admin', '2019-04-10 08:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_info_hist`
--

CREATE TABLE `user_account_info_hist` (
  `seq_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `ifua_no` varchar(16) DEFAULT NULL,
  `e_ktp_no` varchar(16) DEFAULT NULL,
  `e_ktp_foto` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `status_kawin` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `penghasilan_per_tahun` varchar(30) DEFAULT NULL,
  `sumber_dana` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(35) DEFAULT NULL,
  `kode_pos` int(5) DEFAULT NULL,
  `rekening_bank_code` varchar(20) DEFAULT NULL,
  `rekening_bank_no` varchar(20) DEFAULT NULL,
  `ttd` longtext,
  `account_status` int(2) NOT NULL,
  `update_user` varchar(25) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='user_account_info';

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_detail`
--

CREATE TABLE `user_bank_detail` (
  `rekening_bank_code` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `bank_id` varchar(35) NOT NULL,
  `no_rekening` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `seq_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `balance` int(11) NOT NULL,
  `last_update` datetime NOT NULL,
  `user_update` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`seq_id`);

--
-- Indexes for table `gross_income`
--
ALTER TABLE `gross_income`
  ADD PRIMARY KEY (`seq_id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`occupation_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `user_account_info`
--
ALTER TABLE `user_account_info`
  ADD PRIMARY KEY (`seq_id`);

--
-- Indexes for table `user_account_info_hist`
--
ALTER TABLE `user_account_info_hist`
  ADD PRIMARY KEY (`seq_id`);

--
-- Indexes for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  ADD PRIMARY KEY (`rekening_bank_code`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD PRIMARY KEY (`seq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(122) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(121) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_account_info`
--
ALTER TABLE `user_account_info`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  MODIFY `rekening_bank_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_product`
--
ALTER TABLE `user_product`
  MODIFY `seq_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
