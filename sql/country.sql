-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 02. kvě 2026, 11:38
-- Verze serveru: 10.4.28-MariaDB
-- Verze PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `formulare`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Vypisuji data pro tabulku `country`
--

INSERT INTO `country` (`id`, `name`, `short_name`, `info`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'USA', 'us', 'Spojené státy americké (anglicky United States of America – odtud zkratka USA), zkráceným názvem Spojené státy, jsou stát ležící převážně v Severní Americe.', 0, 0, NULL),
(2, 'Francie', 'fr', 'Francie (francouzsky France), plným názvem Francouzská republika (francouzsky République française ), je stát nacházející se především v západní Evropě. Mezi její zámořské oblasti a území patří Francouzská Guyana v Jižní Americe, Saint Pierre a Miquelon v severním Atlantiku, Francouzské Antily a mnoho ostrovů v Oceánii a Indickém oceánu, což vytváří jednu z největších nesouvislých výlučných ekonomických zón na světě.', 0, 0, NULL),
(4, 'Velká Británie', 'gb', '', 0, 1777639626, NULL),
(5, 'Španělsko', 'es', '', 0, 0, NULL),
(6, 'Polsko', 'pl', '', 0, 0, NULL),
(7, 'Česká republika', 'cz', '', 0, 0, NULL),
(8, 'Itálie', 'it', '', 0, 0, NULL),
(9, 'Mexiko', 'mx', '', 0, 0, NULL),
(10, 'Brazílie', 'br', '', 0, 0, NULL),
(12, 'Argentina', 'ar', '', 1777620913, 1777620913, NULL),
(13, 'Indie', 'in', '<p>Indie je stát v jižní Asii, aktuálně s nejvyšším počtem obyvatel na světě. Vznikl rozdělením původní Britské Indie na části, kde klíčem k rozdělení bylo náboženství.</p>', 1777621038, 1777641341, NULL),
(14, 'Japonsko', 'jp', '<p>Japonsko je ostrovní stát ve východní Asii. Skládá se ze 4 hlavních ostrovů a tisíců menších ostrůvků.</p>', 1777622081, 1777622081, NULL),
(15, 'Austrálie', 'au', '<p>Austrálie je stát na nejmenším kontinentu. Současně se jedná o jediný stát, který zabírá celý kontinent.</p>', 1777622856, 1777654365, 1777650789),
(17, 'Německo', 'de', '<p>Německo (německy Deutschland), plným názvem Spolková republika Německo (německy Bundesrepublik Deutschland), je stát v západní části střední Evropy. Rozkládá mezi Baltským a Severním mořem na severu a Alpami na jihu. Na severu sousedí s Dánskem, na východě s Polskem a Českem, na jihu s Rakouskem a Švýcarskem a na západě s Francií, Lucemburskem, Belgií a Nizozemskem.</p>', 1777631154, 1777631154, NULL);

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
