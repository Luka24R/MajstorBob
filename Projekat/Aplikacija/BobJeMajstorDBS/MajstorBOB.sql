-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2018 at 09:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probabetavr1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `imejl` varchar(15) NOT NULL,
  `lozinka` varchar(15) DEFAULT NULL,
  `ime` varchar(15) DEFAULT NULL,
  `prezime` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`imejl`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`imejl`, `lozinka`, `ime`, `prezime`) VALUES
('admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaj`
--

DROP TABLE IF EXISTS `dogadjaj`;
CREATE TABLE IF NOT EXISTS `dogadjaj` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `emailKorisnika` varchar(200) NOT NULL,
  `vreme` varchar(100) NOT NULL,
  `nazivDogadjaja` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogadjaj`
--

INSERT INTO `dogadjaj` (`id`, `datum`, `emailKorisnika`, `vreme`, `nazivDogadjaja`) VALUES
(1, '2018-06-20', 'a@gmail.com', '10:00-12:00', 'Obaveze'),
(3, '2018-06-21', 'a@gmail.com', '19:00-20:00', 'Koncert'),
(4, '2018-06-25', 'a@gmail.com', '11:45-12:00', 'Lična karta'),
(9, '2018-06-23', 'a@gmail.com', '00:00-23:59', 'Odmor'),
(6, '2018-06-19', 'a@gmail.com', '00:00-23:59', 'Prošlost'),
(10, '2018-06-22', 'pete@gmail.com', '20:00-21:00', 'petak'),
(12, '2018-06-28', 'a@gmail.com', '08:00-16:00', 'Zidanje');

-- --------------------------------------------------------

--
-- Table structure for table `fajl_u_bazi`
--

DROP TABLE IF EXISTS `fajl_u_bazi`;
CREATE TABLE IF NOT EXISTS `fajl_u_bazi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(300) NOT NULL,
  `tip` varchar(30) NOT NULL,
  `velicina` int(11) NOT NULL,
  `putanja` varchar(255) NOT NULL,
  `redni_broj` int(11) NOT NULL,
  `email_korisnika` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fajl_u_bazi`
--

INSERT INTO `fajl_u_bazi` (`id`, `naziv`, `tip`, `velicina`, `putanja`, `redni_broj`, `email_korisnika`) VALUES
(1, 'Picture1.png', 'image/png', 38591, 'slikeslike\\1_Picture1.png', 1, ''),
(6, 'klasni.png', 'image/png', 71014, 'slikeslike\\1_klasni.png', 1, ''),
(8, 'klasninovi.png', 'image/png', 73065, 'slikeslike\\1_klasninovi.png', 1, ''),
(12, 'karirr.jpg', 'image/jpeg', 495314, 'slikeslike\\karirr.jpg', 1, 'pete@gmail.com'),
(13, 'IMG_20180408_102956.jpg', 'image/jpeg', 1546561, 'slikeslike\\1_IMG_20180408_102956.jpg', 1, 'maza@gmail.com'),
(14, 'Screenshot_3.png', 'image/png', 103641, 'slikeslike\\1_Screenshot_3.png', 1, 'fff'),
(20, 'andrew.jpg', 'image/jpeg', 61504, 'slikeslike\\1_andrew.jpg', 1, 'a@gmail.com'),
(21, 'mdelisi.jpg', 'image/jpeg', 36929, 'slikeslike\\1_mdelisi.jpg', 1, 'mihajlo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

DROP TABLE IF EXISTS `kategorija`;
CREATE TABLE IF NOT EXISTS `kategorija` (
  `naziv` varchar(100) DEFAULT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`naziv`, `id`) VALUES
('Građevinski radovi', 1),
('Održavanje automobila', 2),
('Obrada materijala', 3),
('Garderoba i nakit', 4),
('Cevne instalacije', 5),
('Elektrika', 6),
('Ostalo', 7);

-- --------------------------------------------------------

--
-- Table structure for table `lokacija`
--

DROP TABLE IF EXISTS `lokacija`;
CREATE TABLE IF NOT EXISTS `lokacija` (
  `mesto` varchar(25) NOT NULL,
  PRIMARY KEY (`mesto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokacija`
--

INSERT INTO `lokacija` (`mesto`) VALUES
('Beograd'),
('Cacak'),
('Jagodina'),
('Kosovska Mitrovica'),
('Kragujevac'),
('Kraljevo'),
('Krusevac'),
('Leskovac'),
('Loznica'),
('Nis'),
('Novi Pazar'),
('Novi Sad'),
('Pancevo'),
('Pirot'),
('Pozarevac'),
('Sabac'),
('Smederevo'),
('Sombor'),
('Subotica'),
('Užice'),
('Zajecar'),
('Zrenjanin');

-- --------------------------------------------------------

--
-- Table structure for table `majstor`
--

DROP TABLE IF EXISTS `majstor`;
CREATE TABLE IF NOT EXISTS `majstor` (
  `majstor_Email` varchar(50) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `ime` varchar(15) DEFAULT NULL,
  `prezime` varchar(20) DEFAULT NULL,
  `kontakt` varchar(30) DEFAULT NULL,
  `kvalifikacije` varchar(200) DEFAULT NULL,
  `vreme_radni_dan` varchar(15) DEFAULT NULL,
  `vreme_subota` varchar(15) DEFAULT NULL,
  `vreme_nedelja` varchar(15) DEFAULT NULL,
  `adresa` varchar(20) DEFAULT NULL,
  `majstor_hint_pitanje` varchar(200) DEFAULT NULL,
  `majstor_hint_odgovor` varchar(50) DEFAULT NULL,
  `izlazak_na_teren` varchar(5) DEFAULT NULL,
  `dostupnost_za_rad` varchar(5) DEFAULT NULL,
  `online` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`majstor_Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majstor`
--

INSERT INTO `majstor` (`majstor_Email`, `password`, `ime`, `prezime`, `kontakt`, `kvalifikacije`, `vreme_radni_dan`, `vreme_subota`, `vreme_nedelja`, `adresa`, `majstor_hint_pitanje`, `majstor_hint_odgovor`, `izlazak_na_teren`, `dostupnost_za_rad`, `online`) VALUES
('mihajlo@gmail.com', 'mihajlo@gmail.com', 'Mihajlo Boss', 'MihajloviÄ‡', '06278', 'Diploma ', '09:00-17:00', '09:00-15:00', '09:00-12:00', 'Palilula', 'Ime psa', 'Reks', 'DA', 'DA', 'DA'),
('a@gmail.com', 'a@gmail.com', 'Andrija', 'AleksiÄ‡', '+3816500', '8 godina iskustva', '09:00-17:00', '09:00-15:00', '09:00-12:00', 'Nemanjiceva', 'Omiljeno pivo', 'nisko', 'DA', 'DA', 'NE'),
('peka@gmail.com', '789789', 'Peka', 'Pekic', '78999', 'Godine iskustva', '09:00-17:00', '09:00-16:00', '', 'gf Graddd', 'Broj cipela', '43', 'DA', 'DA', 'DA'),
('jovan@gmail.com', '123123', 'Jovan', 'JociÄ‡', '063333333', '10 godina iskustva, diploma neke Å¡kole kao', '09:00-20:00', '09:00-15:00', '09:00-12:00', 'Bulevar Novi Sad', 'Omiljena pesma', 'La isla bonita', 'DA', 'DA', 'DA'),
('beba@gmail.com', 'beba', 'ana', 'bebic', '100', 'ekstra pevam', '09:00-17:00', '', '', 'beba beba', 'ko', 'ja', 'DA', 'DA', 'DA'),
('lili@gmail.com', 'lll', 'Lili', 'Lilic', '123', 'nema', '09:00-17:00', '', '', 'ajak', 'sdojkl', 'oko', 'DA', 'DA', 'DA'),
('proba@gmail.com', 'proba', 'proba', 'proba', '999', 'proba', '09:00-17:00', '09:00-15:00', '09:00-12:00', 'proba', 'proba', 'proba', 'DA', 'DA', 'DA'),
('petar@gmail.com', 'petar', 'Petar', 'PetroviÄ‡', '78999', 'Neke ', '09:00-17:00', '', '', 'ObrenoviÄ‡eva', 'ko', 'ja', 'DA', 'DA', 'DA'),
('pete@gmail.com', 'pete', 'Pete', 'Baker', '79', 'King', '09:00-16:00', '09:00-11:00', '', 'Blah', 'who', 'I', 'DA', 'DA', 'DA'),
('fff', 'ff', 'h', 'h', 'hh', 'ff', '09:00-17:00', '', '', 'hh', 'ff', 'ff', 'DA', 'DA', 'DA');

-- --------------------------------------------------------

--
-- Table structure for table `musterija`
--

DROP TABLE IF EXISTS `musterija`;
CREATE TABLE IF NOT EXISTS `musterija` (
  `musterija_Email` varchar(50) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `ime` varchar(15) DEFAULT NULL,
  `prezime` varchar(20) DEFAULT NULL,
  `kontakt` varchar(30) DEFAULT NULL,
  `lokacija` varchar(20) DEFAULT NULL,
  `musterija_hint_pitanje` varchar(200) DEFAULT NULL,
  `musterija_hint_odgovor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`musterija_Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musterija`
--

INSERT INTO `musterija` (`musterija_Email`, `password`, `ime`, `prezime`, `kontakt`, `lokacija`, `musterija_hint_pitanje`, `musterija_hint_odgovor`) VALUES
('m@gmail.com', 'm@gmail.com', 'Stefan', 'Stefanovic', '+38160000', 'Nis,Somborska', 'Rodjenan', '15'),
('mmm@gmail.com', '789789', 'Mika', 'Mikic', '069', 'Ulica,broj NiÅ¡', 'Hobi', 'Pecanje'),
('maki@gmail.com', '456456', 'Maki', 'Mikicc', '123', 'Neka adr BG', 'Omiljena filmski zanr', 'Triler'),
('olk', 'njk', 'A', 'kj', 'lk', 'lk .lk', 'l.', 'ml'),
('angie@gmail.com', 'angie', 'AnÄ‘elaaa', 'RanÄ‘eloviÄ‡', '757', 'Palilula NiÅ¡', 'Prvi poljubac', 'Davno zaboravljen'),
('maza@gmail.com', 'loz', 'Maza', 'MaziÄ‡', '23', 'adr gr', 'pitanje', 'odgovor');

-- --------------------------------------------------------

--
-- Table structure for table `ocenjuje`
--

DROP TABLE IF EXISTS `ocenjuje`;
CREATE TABLE IF NOT EXISTS `ocenjuje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `musterija_Email1` varchar(50) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `musterija_Email1_FK` (`musterija_Email1`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocenjuje`
--

INSERT INTO `ocenjuje` (`id`, `majstor_Email0`, `musterija_Email1`, `ocena`) VALUES
(2, 'a@gmail.com', 'n@gmail.com', 10),
(4, 'a@gmail.com', 'n@gmail.com', 9),
(7, 'a@gmail.com', 'n@gmail.com', 10),
(8, 'beba@gmail.com', 'n@gmail.com', 7),
(10, 'jovan@gmail.com', 'n@gmail.com', 5),
(13, 'a@gmail.com', 'angie@gmail.com', 10),
(14, 'peka@gmail.com', 'angie@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `oglas`
--

DROP TABLE IF EXISTS `oglas`;
CREATE TABLE IF NOT EXISTS `oglas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tekst_oglasa` varchar(100) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `adresa` varchar(15) DEFAULT NULL,
  `vrsta_posla_zanata` varchar(15) DEFAULT NULL,
  `majstor_koji_radi_email` varchar(50) DEFAULT NULL,
  `musterija_Email5` varchar(50) DEFAULT NULL,
  `mesto6` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `musterija_Email5_FK` (`musterija_Email5`),
  KEY `mesto6_FK` (`mesto6`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oglas`
--

INSERT INTO `oglas` (`id`, `tekst_oglasa`, `datum`, `adresa`, `vrsta_posla_zanata`, `majstor_koji_radi_email`, `musterija_Email5`, `mesto6`) VALUES
(1, 'Kvar na bojleru', '2018-06-08', 'Bulevar', 'Elektricar', 'a@gmail.com', 'm@gmail.com', 'Nis'),
(2, 'Stolarija', '2018-06-12', 'Nis', 'Stolar', NULL, 'm@gmail.com', 'Nis'),
(3, 'Kvar na automobilu', '2018-06-15', 'Zvezdara', 'Automehanicar', 'pete@gmail.com', 'm@gmail.com', 'Beograd'),
(11, 'Gradi se kuÄ‡a negde tamo. Potrebno je svaÅ¡ta neÅ¡to... Ovo se radi ono se radi ', '2018-06-20', 'Neki deo grada', 'Gradjevinar', NULL, 'dejan@gmail.com', 'Jagodina'),
(12, 'Potreban automehaniÄar', '2018-06-20', 'Palilula', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(13, 'Opet automehanicar', '2018-06-20', 'Palilula', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(14, 'NeÅ¡to', '2018-06-20', 'TroÅ¡arina', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(15, 'NeÅ¡to', '2018-06-20', 'TroÅ¡arina', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(16, 'NeÅ¡to', '2018-06-20', 'TroÅ¡arina', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(17, 'NeÅ¡to', '2018-06-20', 'TroÅ¡arina', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(18, 'NeÅ¡to', '2018-06-20', 'Palilula', 'Automehanicar', NULL, 'angie@gmail.com', 'Nis'),
(19, 'Potreban elektriÄar', '2018-06-20', 'Slavija', 'Elektricar', NULL, 'angie@gmail.com', 'Beograd'),
(20, 'Potreban stolar za pravljenje drvenog kreveta.', '2018-06-20', 'Petra Kocica', 'Stolar', NULL, 'angie@gmail.com', 'Beograd');

-- --------------------------------------------------------

--
-- Table structure for table `ostavljanje_komentara`
--

DROP TABLE IF EXISTS `ostavljanje_komentara`;
CREATE TABLE IF NOT EXISTS `ostavljanje_komentara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musterija_Email0` varchar(200) DEFAULT NULL,
  `majstor_Email1` varchar(200) DEFAULT NULL,
  `komentar_poz_tekst` varchar(100) DEFAULT NULL,
  `komentar_neg_tekst` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `musterija_Email0_FK` (`musterija_Email0`),
  KEY `majstor_Email1_FK` (`majstor_Email1`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ostavljanje_komentara`
--

INSERT INTO `ostavljanje_komentara` (`id`, `musterija_Email0`, `majstor_Email1`, `komentar_poz_tekst`, `komentar_neg_tekst`) VALUES
(1, 'n@gmail.com', 'a@gmail.com', 'Dobar i efikasan majstor', 'Malo skup'),
(3, 'neko', 'a@gmail.com', 'Sve super', 'Nemam zamerki'),
(15, 'angie@gmail.com', 'a@gmail.com', 'Veoma sam zadovoljna.', 'Skoro da nema zamerki!'),
(10, 'n@gmail.com', 'beba@gmail.com', 'Veoma lepa', 'Veoma skupa'),
(12, 'n@gmail.com', 'jovan@gmail.com', 'Kakvo ime', 'Takav i majstor'),
(16, 'angie@gmail.com', 'peka@gmail.com', 'Skoro sve super', 'Malo je kasnio'),
(18, 'Mile', 'peka@gmail.com', 'Najbolji', 'Nista'),
(19, 'Momcilo', 'a@gmail.com', 'Odlican majstor', 'Nema zamerki');

-- --------------------------------------------------------

--
-- Table structure for table `poseduje_zanate`
--

DROP TABLE IF EXISTS `poseduje_zanate`;
CREATE TABLE IF NOT EXISTS `poseduje_zanate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `tip1` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `tip1_FK` (`tip1`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poseduje_zanate`
--

INSERT INTO `poseduje_zanate` (`id`, `majstor_Email0`, `tip1`) VALUES
(12, 'jovan@gmail.com', 'Vodoinstalater'),
(11, 'jovan@gmail.com', 'Gradjevinar'),
(9, 'peka@gmail.com', 'Bravar'),
(10, 'peka@gmail.com', 'Elektricar'),
(13, 'beba@gmail.com', 'Elektricar'),
(43, 'kml,.', 'Gradjevinar'),
(51, 'petar@gmail.com', 'Automehanicar'),
(76, 'mihajlo@gmail.com', 'Gradjevinar'),
(75, 'mihajlo@gmail.com', 'Bravar'),
(31, 'proba@gmail.com', 'Automehanicar'),
(30, 'lili@gmail.com', 'Elektricar'),
(32, 'proba@gmail.com', 'Bravar'),
(33, 'proba@gmail.com', 'Elektricar'),
(34, 'proba@gmail.com', 'Gradjevinar'),
(35, 'proba@gmail.com', 'Stolar'),
(36, 'proba@gmail.com', 'Vodoinstalater'),
(69, 'a@gmail.com', 'Automehanicar'),
(61, 'fff', 'Elektricar'),
(60, 'pete@gmail.com', 'Automehanicar');

-- --------------------------------------------------------

--
-- Table structure for table `prijava_nepozeljnih__oglasa`
--

DROP TABLE IF EXISTS `prijava_nepozeljnih__oglasa`;
CREATE TABLE IF NOT EXISTS `prijava_nepozeljnih__oglasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `datum1` date DEFAULT NULL,
  `adresa2` varchar(50) DEFAULT NULL,
  `vrsta_posla_zanata3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `datum1_FK` (`datum1`,`adresa2`,`vrsta_posla_zanata3`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prijava_nepozeljnih__oglasa`
--

INSERT INTO `prijava_nepozeljnih__oglasa` (`id`, `majstor_Email0`, `datum1`, `adresa2`, `vrsta_posla_zanata3`) VALUES
(17, '3', NULL, NULL, 'zato');

-- --------------------------------------------------------

--
-- Table structure for table `prijava_nezeljenih_profila`
--

DROP TABLE IF EXISTS `prijava_nezeljenih_profila`;
CREATE TABLE IF NOT EXISTS `prijava_nezeljenih_profila` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `musterija_Email1` varchar(50) DEFAULT NULL,
  `prijavljeni_profil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `musterija_Email1_FK` (`musterija_Email1`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prijava_nezeljenih_profila`
--

INSERT INTO `prijava_nezeljenih_profila` (`id`, `majstor_Email0`, `musterija_Email1`, `prijavljeni_profil`) VALUES
(1, 'a@gmail.com', 'n@gmail.com', 'a@gmail.com'),
(3, NULL, NULL, 'ani@gmail.com'),
(4, NULL, NULL, 'm@gmail.com'),
(5, NULL, NULL, 'ani@gmail.com'),
(6, 'ne znam', NULL, '10'),
(7, '$razlog', NULL, '$id');

-- --------------------------------------------------------

--
-- Table structure for table `prijava_za_posao`
--

DROP TABLE IF EXISTS `prijava_za_posao`;
CREATE TABLE IF NOT EXISTS `prijava_za_posao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musterija_Email5` varchar(50) DEFAULT NULL,
  `datum0` date DEFAULT NULL,
  `adresa1` varchar(15) DEFAULT NULL,
  `vrsta_posla_zanata2` varchar(15) DEFAULT NULL,
  `majstor_Email3` varchar(50) DEFAULT NULL,
  `idOglasa` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `datum0_FK` (`datum0`,`adresa1`,`vrsta_posla_zanata2`),
  KEY `majstor_Email3_FK` (`majstor_Email3`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prijava_za_posao`
--

INSERT INTO `prijava_za_posao` (`id`, `musterija_Email5`, `datum0`, `adresa1`, `vrsta_posla_zanata2`, `majstor_Email3`, `idOglasa`) VALUES
(1, 'm@gmail.com', '2018-08-08', 'Bulevar', 'Elektrika', 'a@gmail.com', 1),
(4, 'm@gmail.com', '2018-06-15', 'Zvezdara', 'Automehanicar', 'a@gmail.com', 3),
(9, 'm@gmail.com', '2018-06-15', 'Zvezdara', 'Automehanicar', 'pete@gmail.com', 3),
(12, 'm@gmail.com', '2018-06-12', 'Nis', 'Stolar', 'mihajlo@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `radi_na`
--

DROP TABLE IF EXISTS `radi_na`;
CREATE TABLE IF NOT EXISTS `radi_na` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `mesto1` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `mesto1_FK` (`mesto1`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radi_na`
--

INSERT INTO `radi_na` (`id`, `majstor_Email0`, `mesto1`) VALUES
(35, 'mihajlo@gmail.com', 'Nis'),
(32, 'a@gmail.com', 'Nis'),
(31, 'a@gmail.com', 'Jagodina'),
(7, 'proba@gmail.com', 'Novi Sad'),
(6, 'lili@gmail.com', 'Beograd'),
(10, 'petar@gmail.com', 'Jagodina'),
(11, 'petar@gmail.com', 'Nis'),
(12, 'petar@gmail.com', 'Novi Sad'),
(21, 'pete@gmail.com', 'Nis'),
(23, 'fff', 'Nis'),
(38, 'peka@gmail.com', 'Beograd'),
(39, 'beba@gmail.com', 'Pirot'),
(40, 'jovan@gmail.com', 'Zajecar');

-- --------------------------------------------------------

--
-- Table structure for table `razmena_poruka`
--

DROP TABLE IF EXISTS `razmena_poruka`;
CREATE TABLE IF NOT EXISTS `razmena_poruka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `majstor_Email0` varchar(50) DEFAULT NULL,
  `musterija_Email1` varchar(50) DEFAULT NULL,
  `datum_slanja_poruke` datetime DEFAULT NULL,
  `tekst_poruke` varchar(200) DEFAULT NULL,
  `posiljaoc` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `majstor_Email0_FK` (`majstor_Email0`),
  KEY `musterija_Email1_FK` (`musterija_Email1`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razmena_poruka`
--

INSERT INTO `razmena_poruka` (`id`, `majstor_Email0`, `musterija_Email1`, `datum_slanja_poruke`, `tekst_poruke`, `posiljaoc`) VALUES
(32, 'pete@gmail.com', 'm@gmail.com', '2018-06-18 19:05:15', 'AUTOMATSKA PORUKA: musterija:m@gmail.comVas je angaÅ¾ovao za posao Automehanicar Kvar na automobilu Beograd. ', 'musterija'),
(30, 'a@gmail.com', 'm@gmail.com', '2018-06-18 17:38:29', 'hej hoÄ‡u da radim na tvom oglasu', 'majstor'),
(31, 'pete@gmail.com', 'm@gmail.com', '2018-06-18 19:00:12', 'AUTOMATSKA PORUKA: majstor:pete@gmail.comje prijavljen za oglas Automehanicar Kvar na automobilu Beograd. ', 'majstor'),
(52, 'a@gmail.com', 'm@gmail.com', '2018-06-20 17:29:32', 'Jos jedna poruka', 'majstor'),
(37, 'mihajlo@gmail.com', 'm@gmail.com', '2018-06-19 00:13:44', 'AUTOMATSKA PORUKA: majstor:mihajlo@gmail.com je prijavljen za oglas Stolar Stolarija Nis. ', 'majstor'),
(38, 'peka@gmail.com', 'angie@gmail.com', '2018-06-19 01:14:20', 'Hej, moÅ¾e broj?', 'musterija'),
(49, 'a@gmail.com', 'm@gmail.com', '2018-06-20 16:33:09', 'nova poruka', 'majstor'),
(50, 'a@gmail.com', 'm@gmail.com', '2018-06-20 17:28:48', 'Jos jedna poruka', 'majstor'),
(51, 'a@gmail.com', 'm@gmail.com', '2018-06-20 17:29:18', 'Jos jedna poruka', 'majstor'),
(48, 'a@gmail.com', 'm@gmail.com', '2018-06-20 11:16:33', 'U redu', 'majstor'),
(45, 'a@gmail.com', 'm@gmail.com', '2018-06-20 01:20:23', 'Ispravljene poruke', 'majstor'),
(46, 'a@gmail.com', 'm@gmail.com', '2018-06-20 10:46:19', 'Proba poruke', 'majstor'),
(47, 'a@gmail.com', 'm@gmail.com', '2018-06-20 10:55:47', 'Odgovor', 'musterija');

-- --------------------------------------------------------

--
-- Table structure for table `zanat`
--

DROP TABLE IF EXISTS `zanat`;
CREATE TABLE IF NOT EXISTS `zanat` (
  `tip` varchar(30) NOT NULL,
  PRIMARY KEY (`tip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zanat`
--

INSERT INTO `zanat` (`tip`) VALUES
('Automehanicar'),
('Bravar'),
('Elektricar'),
('Gradjevinar'),
('Grejanje'),
('Keramicar'),
('Krojac'),
('Limar'),
('Moler'),
('Parketar'),
('Staklorezac'),
('Stolar'),
('Varilac'),
('Vodoinstalater');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
