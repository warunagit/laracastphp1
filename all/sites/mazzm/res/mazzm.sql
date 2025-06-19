-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2024 at 04:20 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazzm`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `bgcolor` varchar(7) DEFAULT NULL,
  `fcolor` varchar(7) DEFAULT NULL,
  `mhcolor` varchar(7) DEFAULT NULL,
  `btncolor` varchar(7) DEFAULT NULL,
  `btnfcolor` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `bgcolor`, `fcolor`, `mhcolor`, `btncolor`, `btnfcolor`) VALUES
(1, '#ffffff', '#171717', '#ccc20b', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `key` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `key`) VALUES
(1, '992b805b2a4f71c931f2002f3803be34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl1_mazzm`
--

CREATE TABLE `tbl1_mazzm` (
  `id` int(11) NOT NULL,
  `title1` varchar(20) DEFAULT NULL,
  `title2` varchar(60) DEFAULT NULL,
  `text1` varchar(400) DEFAULT NULL,
  `text2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl1_mazzm`
--

INSERT INTO `tbl1_mazzm` (`id`, `title1`, `title2`, `text1`, `text2`) VALUES
(1, 'I\'m Assam Nizam', 'Digital Imaging Technician (DIT)  & Assistant Camera ', 'I am an extensively skilled and technically astute Assistant Camera and Digital Imaging Technician (DIT) certified and trained by Arri Academy Germany, based in Dubai, United Arab Emirates. And passionate about both the equipment for which I am responsible and the creative craft for which it is employed,', 'In Addition enjoys a strong desire to continue learning by exploring and pushing the boundaries of creativity through constant innovation.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl2_1_assistant_camera`
--

CREATE TABLE `tbl2_1_assistant_camera` (
  `id` int(11) NOT NULL,
  `text1` varchar(600) DEFAULT NULL,
  `text2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl2_1_assistant_camera`
--

INSERT INTO `tbl2_1_assistant_camera` (`id`, `text1`, `text2`) VALUES
(1, 'I\'m a United Arab Emirates & Sri Lanka based Digital Imaging Technician (DIT), Digital Loader & Camera Assistant  Have experience more than 14 years of experience in Film Productions and been worked as an Assistant Camera for thousands of TV Commercials in the Middle East and a Number of Features, Wed & Tv Series, Short Films & Documentaryâ€™s', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl2_2_works`
--

CREATE TABLE `tbl2_2_works` (
  `id` int(11) NOT NULL,
  `position` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl2_2_works`
--

INSERT INTO `tbl2_2_works` (`id`, `position`, `description`, `rank`) VALUES
(13, '2nd Assistant Camera', 'Corporate film 2012 - Oryx Engineering Solution.                                                                                                ', 1),
(14, '1st Assistant Camera', 'Living in Qatar Documentary -Sidra Medical and Research Centre.                         ', 2),
(15, '1st Assistant Camera', 'Be Assuming Corporate film â€“ Qatar Museums Authority.                         ', 3),
(16, '1st Assistant Camera', 'Alain Robert Documentary - For Guinnes world Records.                        ', 4),
(17, '2nd Assistant Camera', 'Qatar Olympic 2020 Bid Promo Video.                        ', 5),
(18, '1st Assistant Camera', 'Promo Video (Al-Fursaa) - Childhood Cultural Centre Qatar.                        ', 6),
(19, '1st Assistant Camera', 'Promo Video â€“ QNB Mainstream Campaign.                         ', 7),
(20, '1st Assistant Camera', 'Ramadan TVC- Vodafone Qatar                        ', 8),
(21, '1st Assistant Camera', 'Red TVC â€“ Vodafone Qatar                        ', 9),
(22, '2nd Assistant Camera', 'Documentary - Al- Shaqab International equestrian Competition 2014.                        ', 10),
(23, '2nd Assistant Camera', 'Cooking Show - Blue Rubicon cooking with an Olympian.                        ', 11),
(24, '2nd Assistant Camera', 'HIA Corporate and Landing Film - For Hamad International Airport.                        ', 12),
(25, '2nd Assistant Camera', 'TVC Hand Ball World Cup 2015.                         ', 13),
(26, '1st Assistant Camera', 'Promo TVC - Banana Island Qatar.                         ', 14),
(27, '2nd Assistant Camera', 'Short Film - Double Apple - (film By - Waheed Khan).                         ', 15),
(29, '2nd Assistant Camera', 'Documentary by Spanishâ€™s TV Channel - Rafa Nadal Tennis player.                         ', 16),
(30, '2nd Assistant Camera', 'TVC for Ramadan - AL Fardanâ€™s Jewellery 60th Anniversary.                                                                                                ', 17),
(31, '2nd Assistant Camera ', 'Ramadan Kareem from Kiri (TVC)                        ', 24),
(32, '2nd Assistant Camera', 'Qasr Al-Hosn Festival Corporate Video                         ', 23),
(33, '2nd Assistant Camera ', 'TwoFour54 Marketing (TVC)                        ', 21),
(34, '2nd Assistant Camera ', 'Averda Abu-Dhabi (TVC)                        ', 22),
(35, '2nd Assistant Camera', 'Ken Blockâ€™s Gymkhana Eight ultimate exotic playground Dubai (YouTube video)                        ', 20),
(36, '2nd Assistant Camera ', 'Al-Ain Water UAE (TVC)                        ', 19),
(38, '2nd Assistant Camera', 'Star Trek 2016 Feature Film -VFX Department                        ', 18),
(39, '2nd Assistant Camera', 'Jotun Woodspiration TVC', 25),
(40, '2nd Assistant Camera', 'GMC Acadia 2016 TVC', 26),
(41, '2nd Assistant Camera', 'Lenova Yveterb Gaming TVC', 27),
(42, '2nd Assistant Camera', 'Shell Dubai TVC	', 28),
(43, '2nd Assistant Camera', 'Saudi Telecom Company TVC', 29),
(44, '1st Assistant Camera', 'Lest we forget â€“ EMIRATI ADORNMENT Documentary', 30),
(45, '2nd Assistant Camera', 'Habtoor -Cooperate Video ', 31),
(46, '2nd Assistant Camera', 'Dubai Parks and Resorts TVC ', 32),
(47, '2nd Assistant Camera', 'Positivity Pump â€“ Chevrolet TVC', 33),
(48, '2nd Assistant Camera', 'Dubai Parks and Resorts TVC ', 34),
(49, '2nd Assistant Camera', 'Wrigley TVC 2016', 35),
(50, '2nd Assistant Camera', 'The UAE Remembers TVC', 36),
(51, '2nd Assistant Camera', 'Pepsi Football Pride KSA - TVC                         ', 37),
(52, '2nd Assistant Camera', 'Cleveland clinic Abu Dhabi TVC', 38),
(53, '2nd Assistant Camera', 'Sky Clinic 2016 TVC', 39),
(54, '1st Assistant Camera', 'Lest we forget â€“ EMIRATI ADORNMENT Documentary', 40),
(55, '2nd Assistant Camera', 'Saudi Telecom Company TVC -Football ', 41),
(56, '2nd Assistant Camera', 'Keeping up with the Kim Kardashians 2017 Dubai episode', 42),
(57, '2nd Assistant Camera', 'JA- Hotels and Resorts TVC 2017', 43),
(58, '2nd Assistant Camera', 'The New 2017 Chevrolet Malibu 250HP â€“ Online Video', 44),
(59, '2nd Assistant Camera', 'UAE Tourism TVC 2017', 45),
(60, '2nd Assistant Camera', 'Dubai Tourism online TVC 2017', 46),
(61, '2nd Assistant Camera', 'Jaquar lighting Dubai TVC 2017', 47),
(62, '2nd Assistant Camera', 'Uber KSA TVC 2017', 48),
(63, '2nd Assistant Camera', 'Toyota Camry TVC -[2nd Camera]', 49),
(64, '2nd Assistant Camera', 'Cinthol Cool Soap 2017 -  TVC India ', 50),
(65, '2nd Assistant Camera', 'Volkswagen Golf GTI 2017 TVC - UAE', 51),
(66, '2nd Assistant Camera', 'HSBC Corporate Video 2017', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl3_1_filmography`
--

CREATE TABLE `tbl3_1_filmography` (
  `id` int(11) NOT NULL,
  `text1` varchar(600) DEFAULT NULL,
  `text2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl3_2_works`
--

CREATE TABLE `tbl3_2_works` (
  `id` int(11) NOT NULL,
  `project` varchar(100) DEFAULT NULL,
  `roll` varchar(100) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl3_2_works`
--

INSERT INTO `tbl3_2_works` (`id`, `project`, `roll`, `date`, `rank`) VALUES
(16, 'Documentary by Spanishâ€™s TV Channel - Rafa Nadal Tennis player.', '1st Assistant Camera', '2015 - January', 32),
(17, 'Short Film - Double Apple - (film By - Waheed Khan).', '2nd Assistant Camera', '2015 - January', 31),
(18, 'Promo TVC - Banana Island Qatar.', '1st Assistant Camera', '2014 - December', 30),
(19, 'TVC Airwick USA.', 'Fixer', '2014 - November', 5),
(20, 'Light and Sound Short Film.', 'Assistant Camera', '2014 - October', 29),
(21, 'TVC Hand Ball World Cup 2015.', '2nd Assistant Camera', '2014 - June', 28),
(22, 'Event - Souq Waqif Spring Festival 2014.', 'Camera Operator', '2014 - June', 27),
(23, 'Six Short films of Students â€“ for DFI Ajyal youth Film Festival 2014.', '2nd Assistant Camera', '', 26),
(24, 'HIA Corporate and Landing Film - For Hamad International Airport.', 'Cameraman', '2014 - May', 25),
(25, 'Documentary - for QFA Players in Qatar playing for Qatar Amateur League 2014.', '', '2014 - April', 24),
(26, 'Cooking Show - Blue Rubicon cooking with an Olympian.', '2nd Camera Operator', '2014 - March', 23),
(27, 'Documentary - Al- Shaqab International equestrian Competition 2014.', '2nd Cameraman', '2014 - March', 22),
(28, 'Red TVC â€“ Vodafone Qatar', '1st Assistant Camera', '2014 - January', 21),
(29, 'Ramadan TVC- Vodafone Qatar', '1st Assistant Camera', '', 20),
(30, 'Music Video \'Rathu Kaha Kola\'', 'Director of Photography', '2013 - September', 19),
(31, 'Feature Documentary - Al- Shama for Al-Rayyan Satellite Channel DOHA.', 'Assistant Camera/ Camera Operator', '2013 - September', 18),
(32, 'Promo Video â€“ QNB Mainstream Campaign.', '1st Assistant Camera', '', 17),
(33, '30 Second Countdown Promo Video - Jeem TV Qatar', 'Cameraman', '', 16),
(34, 'Feature Documentary - Ma-Al- Shaghar (Thavaso) 13-Episodes.', 'Cameraman / Assistant- DoP', '', 15),
(35, 'Feature Documentary - Barwa BAYTNA (The Green Building Experiment).', 'Cameraman', '', 14),
(36, 'Promo Video (Al-Fursaa) - Childhood Cultural Centre Qatar.', '1st Assistant Camera', '', 13),
(37, 'Documentary Disney on Ice Qatar - Jeem TV Qatar.', 'Camera Operator / Assistant Camera', '', 12),
(38, 'Music Video - American Rapper Kanye West & Kid Cudi.', 'Assistant Digital Imaging Technician (DIT)', '', 11),
(39, 'Ramadan TVC - Qatari Diar.', 'Production Assistant', '', 4),
(40, 'Qatar Olympic 2020 Bid Promo Video.', '2nd Assistant Camera', '', 10),
(41, 'Alain Robert Documentary - For Guinnes world Records.', '1st Assistant Camera / Fixer', '', 9),
(42, 'Corporate film Interviews - Exxon Mobile Qatar.', 'Assistant Camera/Camera Operator', '', 8),
(43, 'Vision Statement Film â€“ Qatar Museums Authority.', 'Production Assistant', '', 3),
(44, 'Be Assuming Corporate film - Qatar Museums Authority.', '1st Assistant Camera', '', 7),
(45, 'Achievementâ€™s Film - Supreme Education Council.', 'Production Assistant', '', 2),
(46, '\'Living in Qatar\' Documentary - Sidra Medical and Research Centre.', '1st Assistant Camera', '', 32),
(47, 'Corporate film 2012 - Oryx Engineering Solution.', '2nd Assistant Camera', '2011 - November', 6),
(48, 'Aspire Graduation Ceremony (Aspire Academy Qatar).', 'Production Assistant', '2010 -', 1),
(50, 'TVC for Ramadan - AL Fardanâ€™s Jewellery 60th Anniversary.', '2nd Assistant Camera', '2015 - June', 33),
(51, 'Star Trek Beyond 2016 Feature Film -VFX Department', '2nd Assistant Camera', '2015 - October ', 34),
(52, 'Al-Ain Water UAE (TVC)', '2nd Assistant Camera', '2015 - October ', 35),
(53, 'Ken Blockâ€™s Gymkhana Eight ultimate exotic playground Dubai (YouTube video)', '2nd Assistant Camera', '2015 - November ', 36),
(54, 'Averda Abu-Dhabi (TVC)', '2nd Assistant Camera', '2015 - December  ', 37),
(55, 'TwoFour54 Marketing (TVC)', '2nd Assistant Camera', '2015 - December', 38),
(56, 'Qasr Al-Hosn Festival Corporate Video ', '2nd Assistant Camera', '2016 - January', 39),
(57, 'Ramadan Kareem from Kiri (TVC)', '2nd Assistant Camera', '2016 - June', 40),
(58, 'Jotun Woodspiration TVC', '2nd Assistant Camera', '2016 - June', 41),
(59, 'GMC Acadia 2016 TVC	', '2nd Assistant Camera	', '2016 - June', 42),
(60, 'Lenova Yveterb Gaming TVC\r\n', '2nd Assistant Camera', '2016 - July', 43),
(61, 'Shell Dubai TVC	', '2nd Assistant Camera	', '2016 - July', 44),
(62, 'Saudi Telecom Company TVC	', '2nd Assistant Camera', '2016 â€“ August ', 45),
(63, 'Lest we forget â€“ EMIRATI ADORNMENT Documentary					', '1st Assistant Camera', '2016 - August', 46),
(64, 'Habtoor -Cooperate Video 								', '2nd Assistant Camera', '2016 - August', 47),
(65, 'Dubai Parks and Resorts TVC 							', '2nd Assistant Camera	', '2016 â€“ September ', 48),
(66, 'Positivity Pump â€“ Chevrolet TVC							', '2nd Assistant Camera	', '2016 â€“ September ', 49),
(67, 'Dubai Parks and Resorts TVC 						', '2nd Assistant Camera', '2016 â€“ October ', 50),
(68, 'Wrigley TVC 2016									', '2nd Assistant Camera', '2016 - October', 51),
(69, 'The UAE Remembers TVC								', '2nd Assistant Camera', '2016 - October', 52),
(70, 'Pepsi Football Pride KSA TVC 							', '2nd Assistant Camera	', '2016 â€“ December  ', 53),
(71, 'Cleveland clinic Abu Dhabi TVC						 		', '2nd Assistant Camera', '2016 - December', 54),
(72, 'Sky Clinic 2016 TVC									', '2nd Assistant Camera', '2016 - December', 55),
(73, 'Lest we forget â€“ EMIRATI ADORNMENT Documentary 					', '1st Assistant Camera', '2017 - January', 56),
(74, 'Saudi Telecom Company TVC -Football 							', '2nd Assistant Camera', '2017 - January', 57),
(75, 'Keeping up with the Kim Kardashians 2017 Dubai episode				', '2nd Assistant Camera', '2017 - January', 58),
(76, 'JA- Hotels and Resorts TVC 2017							', '2nd Assistant Camera', '2017 - January', 59),
(77, 'The New 2017 Chevrolet Malibu 250HP â€“ Online Video					', '2nd Assistant Camera', '2017 - January', 60),
(78, 'UAE Tourism TVC 2017									', '2nd Assistant Camera', '2017 - February', 61),
(79, 'Dubai Tourism online TVC 2017', '2nd Assistant Camera', '2017 - March', 62),
(80, 'Jaquar lighting Dubai TVC 2017							', '2nd Assistant Camera	', '2017 - March', 63),
(81, 'Uber KSA TVC 2017', '2nd Assistant Camera', '2017 - March', 64),
(82, 'Toyota Camry TVC -[2nd Camera]								', '2nd Assistant Camera', '2017 - March', 65),
(83, 'Cinthol Cool Soap TVC India', '2nd Assistant Camera', '2017 - April ', 66),
(84, 'Volkswagen Golf GTI 2017 TVC - UAE', '2nd Assistant Camera', '2017 - May', 67),
(85, 'HSBC Corporate Video 2017', '2nd Assistant Camera', '2017 - May', 68),
(86, 'Babyshop UAE 2017 TVC				', '2nd Assistant Camera', '2017 - May', 69),
(87, 'Puck Arabia YouTube Channel (Rami and his mum best recipes)', '2nd Assistant Camera', '2017 - June', 70),
(88, 'Sun & Sand Sports presents School\'s Got Talent (Promo Video)', '2nd Assistant Camera', '2017- July', 71),
(89, 'Toyota UAE Toyota Corolla Sport 2018			', '2nd Assistant Camera', '2017- August', 72),
(90, 'Department of Tourism and Commerce Marketing Dubai-EP05 - (Promo Video)', 'Data Wrangler', '2017- October', 73),
(91, 'Dubai Tv â€“ Horse Racing 							', 'Digital Imaging Technician (DIT)', '2017- October', 74),
(92, 'Souq.com (Promo Video)									', 'Data Wrangler', '2017- November', 75),
(93, 'Department of Tourism and Commerce Marketing Dubai- EP06 - (Promo Video)				', 'Data Wrangler', '2017- November', 76),
(94, 'Home Centre TVC (UAE/KSA) 								', '2nd Assistant Camera', '2017- November', 77),
(95, 'Department of Tourism and Commerce Marketing Dubai-EP07- (Promo Video)				', 'Data Wrangler', '2017- December', 78),
(96, 'KFC Chicken Twister Sandwich TVC							', '2nd Assistant Camera', '2017- December', 79),
(97, 'ABBOTT Milk TVC ', 'Data Wrangler', '2017- December', 80),
(98, 'Department of Tourism and Commerce Marketing Dubai (BE MY GUEST Promo Video)			', '2nd Assistant Camera', '2018- January', 81),
(99, 'Department of Tourism and Commerce Marketing Dubai - (Stop-Over Promo Video)', 'Data Wrangler', '2018- February', 82),
(100, 'Johnson Birthtime Classics TVC 2018				', 'Data Wrangler', '2018- February', 83),
(101, 'Jumeriah Luxury Living 2018 TVC 		', '2nd Assistant Camera', '2018- February', 84),
(102, 'Renault Megane UAE TVC 2018								', '2nd Assistant Camera', '2018- March', 85),
(103, 'Special Olympics Host City Film 2018						', 'Digital Imaging Technician (DIT)', '2018- March', 86),
(104, 'DU - Hybrid TVC 2018				', '2nd Assistant Camera', '2018- March', 87),
(105, 'Dvlgari Viper V05 - Promo Video', 'Data Wrangler', '2018- April ', 88),
(106, 'Chevrolet Tohoe â€“ Midnight Society Video						', '2nd Assistant Camera', '2018- April', 89),
(107, 'Zayed Memorial Opening Film 2018								', 'Data Wrangler', '2018- April', 90),
(108, 'Sheikh Zayed Book Award Opening Film 2018', 'Digital Imaging Technician (DIT)	', '2018- April', 91),
(109, 'The Amazing Race Reality TV Series (Seasons 31) - EP5 â€“ 2019', '2nd Assistant Camera', '2018 - June', 92),
(110, 'Sacred Games Netflix - Tv Show (Promo Interviews)					', '1st Assistant Camera', '2018 - June', 93),
(111, 'Volkswagen Middle East (The New Volkswagen Teramont TVC 2018)		', '2nd Assistant Camera', '2018 - July', 94),
(112, 'Saudi Airlines TVC 2018 (Saudia Sky Team)', '2nd Assistant Camera', '2018 - August ', 95),
(113, 'Dubai Properties TVC 2018', '2nd Assistant Camera', '2018 - August', 96),
(114, 'Project Safe Etisalat MOI TVC 2018			', '2nd Assistant Camera', '2018 - September', 97),
(115, 'Dubai Tourism (BE MY GUEST 3 Shah Rukh Khanâ€™s TVC 2019)				', '2nd Assistant Camera', '2018 - October', 98),
(116, '100%â€ film from our series The Stay, captured at The Ritz-Carlton	', '2nd Assistant Camera', '2018 - October', 99),
(117, 'Marriott - Surprise 2018 TVC								 ', '2nd Assistant Camera', '2018 - November', 100),
(118, 'Six Underground - Netflix Original films By: Michael Bay					', '2nd Assistant Camera', '2018 - November ', 101),
(119, 'Dubai Holding - Madinat Jumeirah Living TVC with Gabriel Macht', '2nd Assistant Camera', '2018 - December', 102),
(120, 'Sunrise Spots TVC with Roger Federer 2018	', '2nd Assistant Camera', '2018 - December', 103),
(121, 'Honda UAE â€“ SUV TVC 2019', '2nd Assistant Camera', '2019 - January', 104),
(122, 'Masafi Drinking Water TVC 2019', '2nd Assistant Camera', '2019 - January', 105),
(123, 'Visa UAE - Apple Pay TVC 2019	', '2nd Assistant Camera', '2019 - January', 106),
(124, 'Etihad Special Olympics 2019 Promo film						', '2nd Assistant Camera', '2019 - January', 107),
(125, 'Gillette - Fusion 5 TVC 2019								', '2nd Assistant Camera', '2019 - February', 108),
(126, 'Kuwait National Day 2019 TVC 2019						', 'Digital Imaging Technician (DIT)', '2018 - February', 109);

-- --------------------------------------------------------

--
-- Table structure for table `tbl4_cinematography`
--

CREATE TABLE `tbl4_cinematography` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobroll` varchar(100) DEFAULT NULL,
  `distribution` varchar(300) DEFAULT NULL,
  `mainlink` varchar(100) DEFAULT NULL,
  `sublinks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl4_cinematography`
--

INSERT INTO `tbl4_cinematography` (`id`, `title`, `jobroll`, `distribution`, `mainlink`, `sublinks`) VALUES
(33, 'AL-Samaha Documentary program for Al-Rayyan Satellite channel Doha-Qatar.', 'Assistant Camera/Camera Operator - QATAR', 'AL-Samaha Documentary program (thirteen Episodes) for Al-Rayyan Satellite channel Doha-Qatar. (Itâ€™s a Red Dot Film Doha Qatar Production) I have been worked for this Project as a camera assistant/camera operator which filmed only in Qatar.', 'https://www.youtube.com/embed/N1raoWkDkGk?feature=player_detailpage', ''),
(34, 'MA-Al-Shaghar (THAVASO) a feature Documentary program for Al-Rayyan Satellite channel Doha-Qatar.', 'Assistant DOP / Cameraman', 'MA-Al-Shaghar (THAVASO) a feature Documentary program (thirteen Episodes) for Al-Rayyan Satellite channel Doha-Qatar. (Itâ€™s a Red Dot Film Doha-Qatar Production) Worked as a assistant DoP / Cameraman.', 'https://www.youtube.com/embed/QcjgRO_IfOM?feature=player_detailpage', ''),
(35, 'Barwa - BAYTNA (The Green Building Experiment) feature Documentary.', 'Cameraman', 'Barwa - BAYTNA (The Green Building Experiment) feature Documentary. Worked as a Cameraman. This Film is the Short version of the feature Documentary.', 'https://www.youtube.com/embed/yJXfohV23Kg?feature=player_detailpage', ''),
(36, 'Disney on Ice', 'Cameraman', 'Documentary on Disney on Ice in Qatar- (Jeem TV Qatar) Worked as a cameraman / Camera Assistant. The full version of the Documentary is under post-Productions.', 'https://www.youtube.com/embed/SwIB_QKGxeU?feature=player_detailpage', ''),
(37, 'Mage Ware | Music Video | By Sri Lanka Rap Artists Slim-Killer |', 'Cameraman', 'The Game | Westside Story ft.50 Cent (Dirty) Cover Song | Mage Ware | Original Track | NOTE: Its Shoot with A Zero Budget and we didn\'t use any light or reflectors. we only used natural light and its shot on handheld with a canon eos 7D.', 'https://www.youtube.com/embed/EocqiCXZp4I?rel=0&controls=0&showinfo=0', ''),
(38, '\'Rathu Kaha Kola Music Video\' | By: Eranga Gunawardhane', 'Video Director | Director of Photography', 'Itâ€™s a productions of Lava Bird Entertainments / Koo Cinemedia Creations. This is a very very low budget music video. Its cost as like below 100$ we shot on a canon eos 7D and we used two stage led lights', 'https://www.youtube.com/embed/144dthyj9WI?feature=player_detailpage', ''),
(40, 'Wisira Yavee (Dusted Variation Video) By Next Infinity  | Making of Video ', 'Cameraman', 'It\'s a making of video of the soundtrack\r\n\r\nMusic Produced By Kanishka Indrajith | Lyrics - Eranga Gunawardhane | Rap - Mayura Madawa | Performed By Mayura, Eranga  & Bhakthi Geemal\r\n| Video Editor by Chandana Dassanayake | Camera by Assam Nizam |\r\n\r\n\r\n', 'https://www.youtube.com/embed/fI6WJcdYBps?rel=0&controls=0&showinfo=0', ''),
(41, 'Atheethawarjanaya | Next Infinity Ft. Slim Killer & Vinthy ', 'Cameraman', 'ITS SHOOT WITH A ZERO BUDGET VIDEO | SHOT WITH CANON EOS 7D NOT USED ANY VIDEO LIGHTS SHOT THIS VIDEO USING ONLY HOUSE LIGHTS AND TACTICAL LED FLASHLIGHT | Music Arranged & Produced by Kanishka Indrajith | Camera by Assam Nizam | Edited by Kanishka & Waruna Yasantha |', 'https://www.youtube.com/embed/RPc9-tU9Kbw?rel=0&showinfo=0', ''),
(42, 'KELABILLA REWATILLA | MUSIC VIDEO | Next Infinity ft. Slim Killer & Bhakthi Geemal', 'Cameraman | Video Edit', 'ITS SHOOT WITH A ZERO BUDGET VIDEO AND ITS SHOT WITH DSLR AND USED ONLY AMBIENT LIGHTS | A Productions of Lava Bird Entertainments/Next Infinity | Music by Kanishka | Performed by Slim & Bhakthi | Lyrics by Slim (Rap) & Bhakthi | Camera and Video Edit by Assam Nizam | Special Thanks to Waruna ', 'https://www.youtube.com/embed/kNF5yZDOrbw', ''),
(44, 'Mazda CX-5 ', 'Cameraman | Video Edit', 'This video have been shoot by my Self  in 2013 for a online promo.\r\n\r\nBut never used this shots or promo due to production problems Cannot complete the video.\r\n\r\nJust edit it for fun ', 'https://www.youtube.com/embed/rUGRi9W9hRo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl1_mazzm`
--
ALTER TABLE `tbl1_mazzm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl2_1_assistant_camera`
--
ALTER TABLE `tbl2_1_assistant_camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl2_2_works`
--
ALTER TABLE `tbl2_2_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl3_1_filmography`
--
ALTER TABLE `tbl3_1_filmography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl3_2_works`
--
ALTER TABLE `tbl3_2_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl4_cinematography`
--
ALTER TABLE `tbl4_cinematography`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl1_mazzm`
--
ALTER TABLE `tbl1_mazzm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl2_1_assistant_camera`
--
ALTER TABLE `tbl2_1_assistant_camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl2_2_works`
--
ALTER TABLE `tbl2_2_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl3_1_filmography`
--
ALTER TABLE `tbl3_1_filmography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl3_2_works`
--
ALTER TABLE `tbl3_2_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `tbl4_cinematography`
--
ALTER TABLE `tbl4_cinematography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
