-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 14. Aug 2021 um 15:45
-- Server-Version: 10.4.20-MariaDB
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd13_CR10_MarkusKamitz_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_CR10_MarkusKamitz_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_CR10_MarkusKamitz_BigLibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `big_library`
--

CREATE TABLE `big_library` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `type` enum('Book','CD','DVD') NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `status` enum('available','reserved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `big_library`
--

INSERT INTO `big_library` (`id`, `title`, `image`, `isbn`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(5, 'Fairy Trails', 'https://cdn.pixabay.com/photo/2017/09/21/01/04/father-2770301_1280.jpg', '3-492-28088-9', 'Fairy trails in austrian forests and stories from beyond.', 'Book', 'Hirsl', 'Hinteregger', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2018-05-09', 'available'),
(6, 'Finding the Yeti', 'https://cdn.pixabay.com/photo/2015/03/26/09/46/montains-690287_1280.jpg', '3-492-28088-9', 'Finding the Yeti in the mountains of austria and listening to his stories.', 'Book', 'Alois', 'Vorderkogler', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2019-09-23', 'available'),
(9, 'The Fallen Angel', 'https://cdn.pixabay.com/photo/2017/10/04/13/33/angel-2816236_1280.jpg', '3-492-28088-9', 'A fallen angel and her adventures with a man in the viennese forest.', 'Book', 'Fallen', 'Angel', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2021-08-11', 'available'),
(10, 'Island Survival Guide', 'https://cdn.pixabay.com/photo/2017/12/15/13/51/polynesia-3021072_1280.jpg', '3-492-28088-9', 'How to survive stranded on lonely islands totell the story.', 'Book', 'Robin', 'Crusoe', 'Behind The Oak Publishing', 'Behind The Oak Street 33 66777 Toronto Canada', '2016-05-10', 'available'),
(11, 'Finding The Witch', 'https://cdn.pixabay.com/photo/2017/11/19/02/20/woman-2961723_1280.jpg', '3-492-28088-9', 'How a little girl found the witch in Austria.', 'DVD', 'Little', 'Girl', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2021-08-05', 'available'),
(12, 'Me my Horse and I', 'https://cdn.pixabay.com/photo/2018/06/18/02/03/woman-3481756_1280.jpg', '3-492-28088-8', 'How i found the horse of my life.', 'DVD', 'Kathreen', 'Beyond', 'Behind The Oak Publishing', 'Behind The Oak Street 33 66777 Toronto Canada', '2014-08-04', 'available'),
(13, 'My Cat is awesome', 'https://cdn.pixabay.com/photo/2014/04/13/20/49/cat-323262_1280.jpg', '3-492-28088-9', 'Adventures of a magic cat in the middle of vienna.', 'DVD', 'Cat', 'Stevens', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2021-08-18', 'available'),
(14, 'The Tree', 'https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_1280.jpg', '1-492-28088-7', 'Sound of a tree in the middle of nowhere.', 'CD', 'Hearing', 'Better', 'Voices from Beyond', 'Somewehere Street 10 Nowhere Land 1 ', '2012-05-09', 'available'),
(15, 'The sound of Silence', 'https://cdn.pixabay.com/photo/2018/09/19/23/03/sunset-3689760_1280.jpg', '3-492-23088-5', 'Wonderful guitar music played on a fishing boat in a remote part of thailand.', 'CD', 'Guitar', 'Lover', 'Thais Best', 'Nowhere Special Street 22 10100 Bankok Thailand', '2011-08-02', 'available'),
(16, 'In the Woods', 'https://cdn.pixabay.com/photo/2018/05/04/15/27/cabin-3374201_1280.jpg', '2-492-22088-2', 'Sounds of the forest recorded in a remote cabin in the woods.', 'CD', 'Remote ', 'Woman', 'Voices from Beyond', 'Somewehere Street 10 Nowhere Land 1', '2021-08-07', 'available'),
(17, 'The Swan', 'https://cdn.pixabay.com/photo/2017/02/25/17/37/swan-2098349_1280.jpg', '1-492-28088-6', 'The Swany', 'Book', 'Swan', 'Lover', 'Fantasy Publishing', 'Feenstrasse 1 1010 Vienna Austria', '2016-08-09', 'reserved'),
(22, 'another one bites the dust', 'https://cdn.pixabay.com/photo/2015/06/19/09/39/lonely-814631_960_720.jpg', '2-492-22088-2', 'omg', 'Book', 'me', 'myswlf', 'andi', 'someone', '2021-08-27', 'available');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `big_library`
--
ALTER TABLE `big_library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `big_library`
--
ALTER TABLE `big_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
