-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 17.Dec 2023, 02:34
-- Verzia serveru: 10.4.25-MariaDB
-- Verzia PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `nomad-force`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `page_name` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `url` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `page_name`, `url`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'index.php#about'),
(3, 'Portfolio', 'index.php#portfolio'),
(4, 'News & Events', 'index.php#news'),
(5, 'Contact us', 'index.php#contact');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_slovak_ci NOT NULL,
  `category` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `date` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `image_caption` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `color` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `date`, `image`, `image_caption`, `color`) VALUES
(2, 'Job Opportunities: Digital, Marketing', 'Events', ' Alaska, August 6, 2021', 'jean-philippe-delberghe-MmanXAs1sKw-unsplash.jpeg', 'A caption for the above image.', 'bg-primary'),
(3, 'What happened to new viral video?', 'News', '6 days ago', 'maria-stewart-p4tj0g-_aMM-unsplash.jpeg', 'A caption for the above image.', 'bg-success'),
(4, 'The rise of the gig economy spells the end for these workers the old system', 'News', '22 hours ago', 'caroline-lm-uqveD8dYPUM-unsplash.jpg', 'A caption for the above image.', 'bg-warning');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `news_paragraph`
--

CREATE TABLE `news_paragraph` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `news_paragraph`
--

INSERT INTO `news_paragraph` (`id`, `text`, `news_id`) VALUES
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.', 2),
(6, 'Nullam id lorem commodo, pharetra sapien ut, accumsan ligula. Sed sit amet sem pulvinar, imperdiet eros quis, vestibulum felis. Pellentesque posuere scelerisque sodales.', 2),
(7, 'Morbi scelerisque urna in orci elementum, nec mollis ligula luctus. Proin ullamcorper pulvinar commodo. Quisque tortor nunc, ultricies efficitur ex sit amet, tempus rutrum libero. In nec faucibus tellus.', 2),
(8, 'Donec justo orci, pretium ultricies ante eget, bibendum semper enim. Nunc efficitur purus suscipit leo placerat, a ultricies purus gravida. Sed sollicitudin ornare porta. Mauris convallis sit amet purus sed rutrum.', 2),
(9, 'This Bootstrap 5 layout is provided by TemplateMo website and it is free to use for any of your website. You are allowed to edit it in any way you like. However, please do not redistribute this template ZIP file for a template download purpose on any other website such as Free CSS collection websites.', 2),
(15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.', 3),
(16, 'Nullam id lorem commodo, pharetra sapien ut, accumsan ligula. Sed sit amet sem pulvinar, imperdiet eros quis, vestibulum felis. Pellentesque posuere scelerisque sodales.', 3),
(17, 'Morbi scelerisque urna in orci elementum, nec mollis ligula luctus. Proin ullamcorper pulvinar commodo. Quisque tortor nunc, ultricies efficitur ex sit amet, tempus rutrum libero. In nec faucibus tellus.', 3),
(18, 'Donec justo orci, pretium ultricies ante eget, bibendum semper enim. Nunc efficitur purus suscipit leo placerat, a ultricies purus gravida. Sed sollicitudin ornare porta. Mauris convallis sit amet purus sed rutrum.', 3),
(19, 'This Bootstrap 5 layout is provided by TemplateMo website and it is free to use for any of your website. You are allowed to edit it in any way you like. However, please do not redistribute this template ZIP file for a template download purpose on any other website such as Free CSS collection websites.', 3),
(20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.', 4),
(21, 'Nullam id lorem commodo, pharetra sapien ut, accumsan ligula. Sed sit amet sem pulvinar, imperdiet eros quis, vestibulum felis. Pellentesque posuere scelerisque sodales.', 4),
(22, 'Morbi scelerisque urna in orci elementum, nec mollis ligula luctus. Proin ullamcorper pulvinar commodo. Quisque tortor nunc, ultricies efficitur ex sit amet, tempus rutrum libero. In nec faucibus tellus.', 4),
(23, 'Donec justo orci, pretium ultricies ante eget, bibendum semper enim. Nunc efficitur purus suscipit leo placerat, a ultricies purus gravida. Sed sollicitudin ornare porta. Mauris convallis sit amet purus sed rutrum.', 4),
(24, 'This Bootstrap 5 layout is provided by TemplateMo website and it is free to use for any of your website. You are allowed to edit it in any way you like. However, please do not redistribute this template ZIP file for a template download purpose on any other website such as Free CSS collection websites.', 4);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `text` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `text_bg` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `text`, `text_bg`, `image`) VALUES
(1, 'Effortless', 'Branding', 'text-danger', 'visuals-Y4qzW3AsvqI-unsplash.jpeg'),
(2, 'Health technology', 'Art Direction', 'text-success', 'severin-candrian-nn3uIZqmUtE-unsplash.jpeg'),
(3, 'Maki', 'Website', 'text-warning', 'tyler-nix-Y1drF0Y3Oe0-unsplash.jpeg'),
(4, 'The gig economy', 'Graphic', 'text-info', 'thought-catalog-gv-T-OjLe4c-unsplash.jpeg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `position` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `position_bg` varchar(45) COLLATE utf8mb4_slovak_ci NOT NULL,
  `image` text COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `studio`
--

INSERT INTO `studio` (`id`, `name`, `position`, `position_bg`, `image`) VALUES
(1, 'Susane R.', 'Founding Partner', 'bg-warning', 'studio-shot-beautiful-happy-retired-caucasian-female-with-pixie-hairdo-crossing-arms-her-chest-having-confident-look-smiling-broadly.jpg'),
(2, 'Morgan S.', 'CEO & Investor', 'bg-primary', 'project-leder-with-disabilities-looking-front-sitting-immobilized-wheelchair-business-office-room.jpg'),
(5, 'Naomi W.', 'Art Director', 'bg-success', 'asia-business-woman-feeling-happy-smiling-looking-camera-while-relax-home-office.jpg'),
(6, 'Robinson H.', 'Sales & Marketing', 'bg-info', 'happy-african-american-professional-manager-smiling-looking-camera-headshot-portrait.jpg'),
(9, 'Jane M.', 'Project Management', 'bg-danger', 'working-business-lady.jpg');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `news_paragraph`
--
ALTER TABLE `news_paragraph`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_news_paragrahp_news_idx` (`news_id`);

--
-- Indexy pre tabuľku `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `news_paragraph`
--
ALTER TABLE `news_paragraph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pre tabuľku `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `news_paragraph`
--
ALTER TABLE `news_paragraph`
  ADD CONSTRAINT `fk_news_paragrahp_news` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
