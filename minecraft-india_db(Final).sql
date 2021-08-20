-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 08:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minecraft-india_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `phonecode`, `currency`) VALUES
(1, 'Afghanistan', '93', 'AFN'),
(2, 'Aland Islands', '+358-18', 'EUR'),
(3, 'Albania', '355', 'ALL'),
(4, 'Algeria', '213', 'DZD'),
(5, 'American Samoa', '+1-684', 'USD'),
(6, 'Andorra', '376', 'EUR'),
(7, 'Angola', '244', 'AOA'),
(8, 'Anguilla', '+1-264', 'XCD'),
(9, 'Antarctica', '', ''),
(10, 'Antigua And Barbuda', '+1-268', 'XCD'),
(11, 'Argentina', '54', 'ARS'),
(12, 'Armenia', '374', 'AMD'),
(13, 'Aruba', '297', 'AWG'),
(14, 'Australia', '61', 'AUD'),
(15, 'Austria', '43', 'EUR'),
(16, 'Azerbaijan', '994', 'AZN'),
(17, 'Bahamas The', '+1-242', 'BSD'),
(18, 'Bahrain', '973', 'BHD'),
(19, 'Bangladesh', '880', 'BDT'),
(20, 'Barbados', '+1-246', 'BBD'),
(21, 'Belarus', '375', 'BYR'),
(22, 'Belgium', '32', 'EUR'),
(23, 'Belize', '501', 'BZD'),
(24, 'Benin', '229', 'XOF'),
(25, 'Bermuda', '+1-441', 'BMD'),
(26, 'Bhutan', '975', 'BTN'),
(27, 'Bolivia', '591', 'BOB'),
(28, 'Bosnia and Herzegovina', '387', 'BAM'),
(29, 'Botswana', '267', 'BWP'),
(30, 'Bouvet Island', '', 'NOK'),
(31, 'Brazil', '55', 'BRL'),
(32, 'British Indian Ocean Territory', '246', 'USD'),
(33, 'Brunei', '673', 'BND'),
(34, 'Bulgaria', '359', 'BGN'),
(35, 'Burkina Faso', '226', 'XOF'),
(36, 'Burundi', '257', 'BIF'),
(37, 'Cambodia', '855', 'KHR'),
(38, 'Cameroon', '237', 'XAF'),
(39, 'Canada', '1', 'CAD'),
(40, 'Cape Verde', '238', 'CVE'),
(41, 'Cayman Islands', '+1-345', 'KYD'),
(42, 'Central African Republic', '236', 'XAF'),
(43, 'Chad', '235', 'XAF'),
(44, 'Chile', '56', 'CLP'),
(45, 'China', '86', 'CNY'),
(46, 'Christmas Island', '61', 'AUD'),
(47, 'Cocos (Keeling) Islands', '61', 'AUD'),
(48, 'Colombia', '57', 'COP'),
(49, 'Comoros', '269', 'KMF'),
(50, 'Congo', '242', 'XAF'),
(51, 'Congo The Democratic Republic Of The', '243', 'CDF'),
(52, 'Cook Islands', '682', 'NZD'),
(53, 'Costa Rica', '506', 'CRC'),
(54, 'Cote D\'Ivoire (Ivory Coast)', '225', 'XOF'),
(55, 'Croatia (Hrvatska)', '385', 'HRK'),
(56, 'Cuba', '53', 'CUP'),
(57, 'Cyprus', '357', 'EUR'),
(58, 'Czech Republic', '420', 'CZK'),
(59, 'Denmark', '45', 'DKK'),
(60, 'Djibouti', '253', 'DJF'),
(61, 'Dominica', '+1-767', 'XCD'),
(62, 'Dominican Republic', '+1-809 and 1-829', 'DOP'),
(63, 'East Timor', '670', 'USD'),
(64, 'Ecuador', '593', 'USD'),
(65, 'Egypt', '20', 'EGP'),
(66, 'El Salvador', '503', 'USD'),
(67, 'Equatorial Guinea', '240', 'XAF'),
(68, 'Eritrea', '291', 'ERN'),
(69, 'Estonia', '372', 'EUR'),
(70, 'Ethiopia', '251', 'ETB'),
(71, 'Falkland Islands', '500', 'FKP'),
(72, 'Faroe Islands', '298', 'DKK'),
(73, 'Fiji Islands', '679', 'FJD'),
(74, 'Finland', '358', 'EUR'),
(75, 'France', '33', 'EUR'),
(76, 'French Guiana', '594', 'EUR'),
(77, 'French Polynesia', '689', 'XPF'),
(78, 'French Southern Territories', '', 'EUR'),
(79, 'Gabon', '241', 'XAF'),
(80, 'Gambia The', '220', 'GMD'),
(81, 'Georgia', '995', 'GEL'),
(82, 'Germany', '49', 'EUR'),
(83, 'Ghana', '233', 'GHS'),
(84, 'Gibraltar', '350', 'GIP'),
(85, 'Greece', '30', 'EUR'),
(86, 'Greenland', '299', 'DKK'),
(87, 'Grenada', '+1-473', 'XCD'),
(88, 'Guadeloupe', '590', 'EUR'),
(89, 'Guam', '+1-671', 'USD'),
(90, 'Guatemala', '502', 'GTQ'),
(91, 'Guernsey and Alderney', '+44-1481', 'GBP'),
(92, 'Guinea', '224', 'GNF'),
(93, 'Guinea-Bissau', '245', 'XOF'),
(94, 'Guyana', '592', 'GYD'),
(95, 'Haiti', '509', 'HTG'),
(96, 'Heard and McDonald Islands', ' ', 'AUD'),
(97, 'Honduras', '504', 'HNL'),
(98, 'Hong Kong S.A.R.', '852', 'HKD'),
(99, 'Hungary', '36', 'HUF'),
(100, 'Iceland', '354', 'ISK'),
(101, 'India', '91', 'INR'),
(102, 'Indonesia', '62', 'IDR'),
(103, 'Iran', '98', 'IRR'),
(104, 'Iraq', '964', 'IQD'),
(105, 'Ireland', '353', 'EUR'),
(106, 'Israel', '972', 'ILS'),
(107, 'Italy', '39', 'EUR'),
(108, 'Jamaica', '+1-876', 'JMD'),
(109, 'Japan', '81', 'JPY'),
(110, 'Jersey', '+44-1534', 'GBP'),
(111, 'Jordan', '962', 'JOD'),
(112, 'Kazakhstan', '7', 'KZT'),
(113, 'Kenya', '254', 'KES'),
(114, 'Kiribati', '686', 'AUD'),
(115, 'Korea North', '850', 'KPW'),
(116, 'Korea South', '82', 'KRW'),
(117, 'Kuwait', '965', 'KWD'),
(118, 'Kyrgyzstan', '996', 'KGS'),
(119, 'Laos', '856', 'LAK'),
(120, 'Latvia', '371', 'EUR'),
(121, 'Lebanon', '961', 'LBP'),
(122, 'Lesotho', '266', 'LSL'),
(123, 'Liberia', '231', 'LRD'),
(124, 'Libya', '218', 'LYD'),
(125, 'Liechtenstein', '423', 'CHF'),
(126, 'Lithuania', '370', 'LTL'),
(127, 'Luxembourg', '352', 'EUR'),
(128, 'Macau S.A.R.', '853', 'MOP'),
(129, 'Macedonia', '389', 'MKD'),
(130, 'Madagascar', '261', 'MGA'),
(131, 'Malawi', '265', 'MWK'),
(132, 'Malaysia', '60', 'MYR'),
(133, 'Maldives', '960', 'MVR'),
(134, 'Mali', '223', 'XOF'),
(135, 'Malta', '356', 'EUR'),
(136, 'Man (Isle of)', '+44-1624', 'GBP'),
(137, 'Marshall Islands', '692', 'USD'),
(138, 'Martinique', '596', 'EUR'),
(139, 'Mauritania', '222', 'MRO'),
(140, 'Mauritius', '230', 'MUR'),
(141, 'Mayotte', '262', 'EUR'),
(142, 'Mexico', '52', 'MXN'),
(143, 'Micronesia', '691', 'USD'),
(144, 'Moldova', '373', 'MDL'),
(145, 'Monaco', '377', 'EUR'),
(146, 'Mongolia', '976', 'MNT'),
(147, 'Montenegro', '382', 'EUR'),
(148, 'Montserrat', '+1-664', 'XCD'),
(149, 'Morocco', '212', 'MAD'),
(150, 'Mozambique', '258', 'MZN'),
(151, 'Myanmar', '95', 'MMK'),
(152, 'Namibia', '264', 'NAD'),
(153, 'Nauru', '674', 'AUD'),
(154, 'Nepal', '977', 'NPR'),
(155, 'Netherlands Antilles', '', ''),
(156, 'Netherlands The', '31', 'EUR'),
(157, 'New Caledonia', '687', 'XPF'),
(158, 'New Zealand', '64', 'NZD'),
(159, 'Nicaragua', '505', 'NIO'),
(160, 'Niger', '227', 'XOF'),
(161, 'Nigeria', '234', 'NGN'),
(162, 'Niue', '683', 'NZD'),
(163, 'Norfolk Island', '672', 'AUD'),
(164, 'Northern Mariana Islands', '+1-670', 'USD'),
(165, 'Norway', '47', 'NOK'),
(166, 'Oman', '968', 'OMR'),
(167, 'Pakistan', '92', 'PKR'),
(168, 'Palau', '680', 'USD'),
(169, 'Palestinian Territory Occupied', '970', 'ILS'),
(170, 'Panama', '507', 'PAB'),
(171, 'Papua new Guinea', '675', 'PGK'),
(172, 'Paraguay', '595', 'PYG'),
(173, 'Peru', '51', 'PEN'),
(174, 'Philippines', '63', 'PHP'),
(175, 'Pitcairn Island', '870', 'NZD'),
(176, 'Poland', '48', 'PLN'),
(177, 'Portugal', '351', 'EUR'),
(178, 'Puerto Rico', '+1-787 and 1-939', 'USD'),
(179, 'Qatar', '974', 'QAR'),
(180, 'Reunion', '262', 'EUR'),
(181, 'Romania', '40', 'RON'),
(182, 'Russia', '7', 'RUB'),
(183, 'Rwanda', '250', 'RWF'),
(184, 'Saint Helena', '290', 'SHP'),
(185, 'Saint Kitts And Nevis', '+1-869', 'XCD'),
(186, 'Saint Lucia', '+1-758', 'XCD'),
(187, 'Saint Pierre and Miquelon', '508', 'EUR'),
(188, 'Saint Vincent And The Grenadines', '+1-784', 'XCD'),
(189, 'Saint-Barthelemy', '590', 'EUR'),
(190, 'Saint-Martin (French part)', '590', 'EUR'),
(191, 'Samoa', '685', 'WST'),
(192, 'San Marino', '378', 'EUR'),
(193, 'Sao Tome and Principe', '239', 'STD'),
(194, 'Saudi Arabia', '966', 'SAR'),
(195, 'Senegal', '221', 'XOF'),
(196, 'Serbia', '381', 'RSD'),
(197, 'Seychelles', '248', 'SCR'),
(198, 'Sierra Leone', '232', 'SLL'),
(199, 'Singapore', '65', 'SGD'),
(200, 'Slovakia', '421', 'EUR'),
(201, 'Slovenia', '386', 'EUR'),
(202, 'Solomon Islands', '677', 'SBD'),
(203, 'Somalia', '252', 'SOS'),
(204, 'South Africa', '27', 'ZAR'),
(205, 'South Georgia', '', 'GBP'),
(206, 'South Sudan', '211', 'SSP'),
(207, 'Spain', '34', 'EUR'),
(208, 'Sri Lanka', '94', 'LKR'),
(209, 'Sudan', '249', 'SDG'),
(210, 'Suriname', '597', 'SRD'),
(211, 'Svalbard And Jan Mayen Islands', '47', 'NOK'),
(212, 'Swaziland', '268', 'SZL'),
(213, 'Sweden', '46', 'SEK'),
(214, 'Switzerland', '41', 'CHF'),
(215, 'Syria', '963', 'SYP'),
(216, 'Taiwan', '886', 'TWD'),
(217, 'Tajikistan', '992', 'TJS'),
(218, 'Tanzania', '255', 'TZS'),
(219, 'Thailand', '66', 'THB'),
(220, 'Togo', '228', 'XOF'),
(221, 'Tokelau', '690', 'NZD'),
(222, 'Tonga', '676', 'TOP'),
(223, 'Trinidad And Tobago', '+1-868', 'TTD'),
(224, 'Tunisia', '216', 'TND'),
(225, 'Turkey', '90', 'TRY'),
(226, 'Turkmenistan', '993', 'TMT'),
(227, 'Turks And Caicos Islands', '+1-649', 'USD'),
(228, 'Tuvalu', '688', 'AUD'),
(229, 'Uganda', '256', 'UGX'),
(230, 'Ukraine', '380', 'UAH'),
(231, 'United Arab Emirates', '971', 'AED'),
(232, 'United Kingdom', '44', 'GBP'),
(233, 'United States', '1', 'USD'),
(234, 'United States Minor Outlying Islands', '1', 'USD'),
(235, 'Uruguay', '598', 'UYU'),
(236, 'Uzbekistan', '998', 'UZS'),
(237, 'Vanuatu', '678', 'VUV'),
(238, 'Vatican City State (Holy See)', '379', 'EUR'),
(239, 'Venezuela', '58', 'VEF'),
(240, 'Vietnam', '84', 'VND'),
(241, 'Virgin Islands (British)', '+1-284', 'USD'),
(242, 'Virgin Islands (US)', '+1-340', 'USD'),
(243, 'Wallis And Futuna Islands', '681', 'XPF'),
(244, 'Western Sahara', '212', 'MAD'),
(245, 'Yemen', '967', 'YER'),
(246, 'Zambia', '260', 'ZMK'),
(247, 'Zimbabwe', '263', 'ZWL');

-- --------------------------------------------------------

--
-- Table structure for table `mc_blog`
--

CREATE TABLE `mc_blog` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_blog`
--

INSERT INTO `mc_blog` (`id`, `user_name`, `title`, `body`, `category`, `datetime`, `blog_image`) VALUES
(5, 'bb', 'Testing Blog', 'Id nihil labore praesentium sequi quis quam atque optio. Reprehenderit aperiam tenetur quod veritatis facilis. Tempora odit aut accusantium facilis voluptatem optio molestias. Sint quam et et voluptates quibusdam aut maxime. Odio impedit sequi doloribus natus delectus hic. Repudiandae quis minima nihil repellat.\r\n\r\nNon impedit reiciendis repudiandae. Nemo ea iste optio. Et neque est earum adipisci. Facilis ut harum corrupti dolores omnis. Reiciendis voluptatem ut aperiam laborum qui pariatur similique omnis.\r\n\r\nNostrum reiciendis recusandae molestiae dicta nesciunt odio consequatur animi. Et sed tenetur est. Iusto nemo nobis illo. Vel et quae et. Quos labore quibusdam eum similique voluptatem vitae adipisci aliquid.\r\n\r\nAdipisci et sapiente ipsum. Ut quo omnis earum quae sint alias et. Quis nam consectetur rerum.\r\n\r\nCorrupti et facilis cum. Perspiciatis odio eligendi non ea similique. Blanditiis ratione sint tempore aut provident. Quia quibusdam et enim.', 'Other Updates', '2020-05-11 21:16:07', '1590666349-Capture12345.PNG'),
(14, 'mr_editor', 'A post by Editor', 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modes.', 'Other Updates', '2020-05-22 18:31:41', '1590152499-Example.png'),
(15, 'mr_editor', 'Another post by this idiota', 'See my Mac\r\nQuickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins. ', 'Other Updates', '2020-05-22 18:34:35', '1590152674-Untitled.png'),
(16, 'ITESaurabh', 'Minecraft Bedrock update', 'Minecraft is a sandbox video game developed by Mojang Studios. Minecraft was created by Markus \"Notch\" Persson in the Java programming language and was released as a public alpha for personal computers in 2009 before officially releasing in November 2011, with Jens Bergensten taking over development Minecraft is a sandbox video game developed by Mojang Studios. Minecraft was created by Markus \"Notch\" Persson in the Java programming language and was released as a public alpha for personal computers in 2009 before officially releasing in November 2011, with Jens Bergensten taking over development \r\nMinecraft is a sandbox video game developed by Mojang Studios. Minecraft was created by Markus \"Notch\" Persson in the Java programming language and was released as a public alpha for personal computers in 2009 before officially releasing in November 2011, with Jens Bergensten taking over development ', 'Other Updates', '2020-05-22 18:35:57', '1590152757-8_bit_heart_stock_by_xquatrox-d4r844m.png'),
(17, 'mr_editor', 'A trash Collage??', 'I dont know is college is 100% pure garbage (Yes.. but...)\r\ns college worth it? Does anyone care? Ex-Google tech lead clues you in on why it\'s so trendy to hate on college, and whether or not it is 100% pure, complete, and utterly worthless garbage ...\r\ns college worth it? Does anyone care? Ex-Google tech lead clues you in on why it\'s so trendy to hate on college, and whether or not it is 100% pure, complete, and utterly worthless garbage ...\r\n\r\nFU IPS', 'Other Updates', '2020-05-22 18:39:38', '1590152977-Silver Jubilee Logo.png'),
(18, 'mr_editor', 'Bootstrap Icons', 'For the first time ever, Bootstrap has its own icon library, custom designed and built for our components and documentation.\r\n\r\nBootstrap Icons are designed to work with Bootstrap components, from form controls to navigation. Bootstrap Icons are SVGs, so they scale quickly and easily and can be styled with CSS. While they\'re built for Bootstrap, they\'ll work in any project.\r\n\r\nThey\'re open sourced (MIT), so you\'re free to download, use, and extend. Heads up though, they\'re in alpha right now and subject to sweeping changes.\r\nFor the first time ever, Bootstrap has its own icon library, custom designed and built for our components and documentation.\r\n\r\nBootstrap Icons are designed to work with Bootstrap components, from form controls to navigation. Bootstrap Icons are SVGs, so they scale quickly and easily and can be styled with CSS. While they\'re built for Bootstrap, they\'ll work in any project.\r\n\r\nThey\'re open sourced (MIT), so you\'re free to download, use, and extend. Heads up though, they\'re in alpha right now and subject to sweeping changes.\r\nFor the first time ever, Bootstrap has its own icon library, custom designed and built for our components and documentation.\r\n\r\nBootstrap Icons are designed to work with Bootstrap components, from form controls to navigation. Bootstrap Icons are SVGs, so they scale quickly and easily and can be styled with CSS. While they\'re built for Bootstrap, they\'ll work in any project.\r\n\r\nThey\'re open sourced (MIT), so you\'re free to download, use, and extend. Heads up though, they\'re in alpha right now and subject to sweeping changes.\r\n', 'Other Updates', '2020-05-22 18:41:25', '1590153082-draw.png'),
(19, 'mr_editor', 'Bootstrap Icons Alpha 4 ', 'We’re closing in on 700 icons in Bootstrap Icons with today’s release, Alpha 4! We’ve spent some time under the hood of our build process to improve a few things, added tons of new icons, and fixed some bugs and inconsistencies.\r\n\r\nWe’ve shipped tons of new commerce icons for all your shopping cart needs, added tons of calendar options (I couldn’t settle on one design), tons of new shape arrows, and more.We’re closing in on 700 icons in Bootstrap Icons with today’s release, Alpha 4! We’ve spent some time under the hood of our build process to improve a few things, added tons of new icons, and fixed some bugs and inconsistencies.\r\n\r\nWe’ve shipped tons of new commerce icons for all your shopping cart needs, added tons of calendar options (I couldn’t settle on one design), tons of new shape arrows, and more.', 'Other Updates', '2020-05-22 18:42:29', '1590153149-6-E-for-Energy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mc_groups`
--

CREATE TABLE `mc_groups` (
  `id` int(20) NOT NULL,
  `group_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_groups`
--

INSERT INTO `mc_groups` (`id`, `group_name`) VALUES
(1, 'Minecraft India Group'),
(2, 'Minecraft India'),
(3, 'Minecraft India Discord'),
(4, 'Minecraft India Youtube'),
(5, 'Minecraft Bangladesh'),
(6, 'Google Search'),
(7, 'Other Sources..');

-- --------------------------------------------------------

--
-- Table structure for table `mc_user`
--

CREATE TABLE `mc_user` (
  `id` int(20) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verification_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_user`
--

INSERT INTO `mc_user` (`id`, `user_name`, `password`, `verification_status`) VALUES
(20, 'BB', '123456', 0),
(34, 'demo', '123456', 0),
(24, 'insaneKajal', '123456', 1),
(23, 'ITESaurabh', '123456', 0),
(22, 'kk_NotV', '123456', 0),
(25, 'Mr_Admin', '123456', 1),
(27, 'Mr_CustomerAssociate', '123456', 1),
(18, 'Mr_Editor', '123456', 1),
(11, 'Mr_Merchant', '123456', 1),
(13, 'Mr_Moderator', '123456', 1),
(26, 'Mr_ServerAssociate', '123456', 1),
(30, 'mr_user', '123456', 1),
(32, 'qscv', '123456', 0),
(31, 'qweasd', '123456', 0),
(35, 'qwerrrrt', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mc_user_detail`
--

CREATE TABLE `mc_user_detail` (
  `id` int(10) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gamer_tag` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) DEFAULT NULL,
  `address` text NOT NULL,
  `country_group` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `youtuber` varchar(10) DEFAULT NULL,
  `user_image` varchar(100) NOT NULL,
  `role` int(10) DEFAULT NULL,
  `apply_for_role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_user_detail`
--

INSERT INTO `mc_user_detail` (`id`, `user_name`, `first_name`, `last_name`, `email`, `gamer_tag`, `country`, `state`, `address`, `country_group`, `dob`, `youtuber`, `user_image`, `role`, `apply_for_role`) VALUES
(1, 'Mr_Merchant', 'lalit', 'patidar', 'lalitpatidar211999@gmail.com', 'qwjhd', 'India', 'Mumbai', 'hello is ndv ', 'Minecraft Bangladesh', '2020-05-14', 'on', '1589201849-The Blanket of the Dark(3).jpg', 7, 'Merchant'),
(3, 'Mr_Moderator', 'lalit', 'patidar', 'lalitpatidar211999@gmail.com', 'dwhsf', 'Philippines', '', 'ijdfegrng hifr', 'Minecraft India Youtube', '2020-04-28', NULL, '1590134879-CP_LOGO.png', 6, 'Moderator'),
(5, 'Mr_Editor', 'lalit', 'patidar', 'lalitpatidar211999@gmail.com', 'sdf', 'Nepal', '', 'esdrftgyh', 'Minecraft India Group', '2020-05-20', NULL, '1589193144-The(2).jpg', 5, 'Editor'),
(8, 'BB', 'BB', 'KI vines', 'lalitpatidar211999@gmail.com', 'PuBG WALA', 'South Africa', '', 'EWRTYU', 'Google Search', '2020-05-14', 'on', '1589200975-The(9).jpg', 1, 'Admin'),
(10, 'kk_NotV', 'kk', 'kk', 'lalitpatidar21@gmail.com', 'kk', 'Bangladesh', '', 'esdrftgyhuj tvybh', 'Minecraft India Youtube', '2020-05-07', NULL, '1589201849-The Blanket of the Dark(3).jpg', 10, 'User'),
(11, 'ITESaurabh', 'Saurabh', 'Tanwar', 'itesaurabh@yahoo.com', 'ITESaurabh', 'India', 'Indore', 'Everybody knows me ;-)', 'Minecraft India Group', '2000-01-22', 'on', '1589213345-ITESaurabh_2K20.png', 1, 'Admin'),
(12, 'insaneKajal', 'Kajal', 'Singh', 'kaju@google.com', 'insaneKajal', 'India', 'Indore', 'Hey babes 😉', 'Other Sources..', '2001-04-16', NULL, '1589213816-illustration1_-_Copy.jpg', 10, 'User'),
(13, 'Mr_Admin', 'Mr', 'Admin', 'Admin@mci.com', 'ZXCV', 'India', 'Delhi', 'Minecraft India\'s End User License Agreement created by Admin ', 'Minecraft India Discord', '2020-05-11', 'on', '1590119365-max min.PNG', 1, 'Admin'),
(14, 'Mr_ServerAssociate', 'Mr', 'ServerAssociate', 'ServerAssociate@mci.com', 'ZXCV', 'Bangladesh', '', 'ServerAssociateServerAssociateServerAssociateServerAssociateServerAssociateServerAssociateServerAssociateServerAssociate', 'Minecraft India Youtube', '2020-04-28', 'on', '1590119694-53974596-business-man-start-stepping-up-on-stairs-to-success-of-bussiness.jpg', 8, 'ServerAssociate'),
(15, 'Mr_CustomerAssociate', 'Mr', 'CustomerAssocia', 'CustomerAssociate@mci.com', 'zxcvb', 'South Africa', '', 'CustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociateCustomerAssociate', 'Google Search', '2020-05-06', 'on', '1590120546-Screenshot_2019-11-12  21.png', 9, 'CustomerAssociate'),
(17, 'mr_user', 'user', '21', 'lalitpatidar211999@gmail.com', 'qwer', 'Nepal', '', 'QWERTYUIOPASDFGHJKLZXCVBNM', 'Minecraft India Youtube', '2020-05-13', 'on', '1590238527-Capture12345.PNG', 10, 'User'),
(18, 'qweasd', 'lalqw', 'qw', 'lalitpatidar211999@gmail.com', 'qwe', 'Bangladesh', '', 'ertyui ertyuio', 'Minecraft Bangladesh', '2020-05-22', 'on', '1590482237-213.PNG', 10, 'User'),
(19, 'qscv', 'fdsa', '1234', 'lalitpatidar211999@gmail.com', 'qwer', 'Philippines', 'Banglore', '45678 wzertybnu  ewxecrtvbyhj', 'Minecraft India page', '2020-04-28', 'on', '1590482337-213.PNG', 10, 'User'),
(21, 'demo', 'dmeo', 'demo', 'lalitpatidar21@gmail.com', 'qwsdefrg', 'Argentina', '', 'xesdrftgy retyu', 'Minecraft India Group', '2020-07-03', NULL, '1591370989-213.PNG', 10, ''),
(22, 'qwerrrrt', 'qw', '12', 'lalitpatidar211999@gmail.com', 'wer', 'Austria', '', 'edrftgyhu exdrftgyhuj', 'Minecraft India Discord', '2020-06-10', NULL, '1591371260-213.PNG', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `mc_user_logs`
--

CREATE TABLE `mc_user_logs` (
  `id` int(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `user_count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_user_logs`
--

INSERT INTO `mc_user_logs` (`id`, `month`, `year`, `user_count`) VALUES
(3, 'April', 2020, 20),
(4, 'May', 2020, 12),
(5, 'June', 2020, 16);

-- --------------------------------------------------------

--
-- Table structure for table `mc_user_role`
--

CREATE TABLE `mc_user_role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_user_role`
--

INSERT INTO `mc_user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(5, 'Editor'),
(6, 'Moderator'),
(7, 'Merchant'),
(8, 'ServerAssociate'),
(9, 'CustomerAssociate'),
(10, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` mediumint(8) UNSIGNED NOT NULL,
  `country_code` char(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `country_code`) VALUES
(91, 'Andaman and Nicobar Islands', 101, 'IN'),
(92, 'Andhra Pradesh', 101, 'IN'),
(93, 'Arunachal Pradesh', 101, 'IN'),
(94, 'Assam', 101, 'IN'),
(95, 'Bihar', 101, 'IN'),
(96, 'Chandigarh', 101, 'IN'),
(97, 'Chhattisgarh', 101, 'IN'),
(98, 'Dadra and Nagar Haveli', 101, 'IN'),
(99, 'Daman and Diu', 101, 'IN'),
(100, 'Delhi', 101, 'IN'),
(101, 'Goa', 101, 'IN'),
(102, 'Gujarat', 101, 'IN'),
(103, 'Haryana', 101, 'IN'),
(104, 'Himachal Pradesh', 101, 'IN'),
(105, 'Jammu and Kashmir', 101, 'IN'),
(106, 'Jharkhand', 101, 'IN'),
(107, 'Karnataka', 101, 'IN'),
(108, 'Kerala', 101, 'IN'),
(109, 'Lakshadweep', 101, 'IN'),
(110, 'Madhya Pradesh', 101, 'IN'),
(111, 'Maharashtra', 101, 'IN'),
(112, 'Manipur', 101, 'IN'),
(113, 'Meghalaya', 101, 'IN'),
(114, 'Mizoram', 101, 'IN'),
(115, 'Nagaland', 101, 'IN'),
(116, 'Odisha', 101, 'IN'),
(117, 'Puducherry', 101, 'IN'),
(118, 'Punjab', 101, 'IN'),
(119, 'Rajasthan', 101, 'IN'),
(120, 'Sikkim', 101, 'IN'),
(121, 'Tamil Nadu', 101, 'IN'),
(122, 'Telangana', 101, 'IN'),
(123, 'Tripura', 101, 'IN'),
(124, 'Uttar Pradesh', 101, 'IN'),
(125, 'Uttarakhand', 101, 'IN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mc_blog`
--
ALTER TABLE `mc_blog`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `mc_user`
--
ALTER TABLE `mc_user`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `mc_user_detail`
--
ALTER TABLE `mc_user_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `mc_user_logs`
--
ALTER TABLE `mc_user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_user_role`
--
ALTER TABLE `mc_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mc_blog`
--
ALTER TABLE `mc_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mc_user`
--
ALTER TABLE `mc_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mc_user_detail`
--
ALTER TABLE `mc_user_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mc_user_logs`
--
ALTER TABLE `mc_user_logs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mc_user_role`
--
ALTER TABLE `mc_user_role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
