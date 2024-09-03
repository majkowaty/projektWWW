-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 03, 2024 at 09:22 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiszki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `propozycje`
--

CREATE TABLE `propozycje` (
  `id` int(10) UNSIGNED NOT NULL,
  `SlowkoP` varchar(50) NOT NULL,
  `SlowkoA` varchar(50) NOT NULL,
  `Kategoria` varchar(1) NOT NULL,
  `idUzytkownika` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `propozycje`
--

INSERT INTO `propozycje` (`id`, `SlowkoP`, `SlowkoA`, `Kategoria`, `idUzytkownika`) VALUES
(3, 'Miecz', 'Sword', 'B', 8),
(5, 'Włosy', 'Hair', 'A', 8),
(6, 'Koszula', 'Shirt', 'B', 8),
(7, 'Papier', 'Paper', 'A', 8),
(8, 'Klawiatura', 'Keyboard', 'B', 8),
(9, 'Pracoholizm', 'Workaholism', 'C', 8),
(10, 'Żałosny', 'Pathetic', 'B', 8),
(11, 'Wyimaginowany', 'Imaginary', 'B', 8),
(12, 'Drapieżnik', 'Predator', 'C', 8),
(13, 'Paskudny', 'Hideous', 'C', 8),
(14, 'Pozwać kogoś', 'Sue', 'C', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowka`
--

CREATE TABLE `slowka` (
  `id` int(11) UNSIGNED NOT NULL,
  `SlowkoP` varchar(25) NOT NULL,
  `SlowkoA` varchar(25) NOT NULL,
  `Kategoria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `slowka`
--

INSERT INTO `slowka` (`id`, `SlowkoP`, `SlowkoA`, `Kategoria`) VALUES
(1, 'Uniesiony', 'Ascended', 'B'),
(2, 'Samochód', 'Car', 'A'),
(6, 'Skrupulatny', 'Meticulous', 'C'),
(10, 'Mistrz', 'Master', 'B'),
(12, 'Podejrzany', 'Suspicious', 'B'),
(13, 'Krzyż', 'Cross', 'B'),
(15, 'Grzyb', 'Mushroom', 'B'),
(16, 'Pies', 'Dog', 'A'),
(17, 'Drzewo', 'Tree', 'A'),
(18, 'Plecak', 'Backpack', 'A'),
(19, 'Pociąg', 'Train', 'A'),
(20, 'Człowiek', 'Human', 'A'),
(21, 'Ja', 'Me', 'A'),
(22, 'Iść', 'Walk', 'A'),
(23, 'Skakać', 'Jump', 'A'),
(24, 'Architektura', 'Architecture', 'B'),
(25, 'Adaptacja', 'Adaptation', 'C'),
(26, 'Wyrównać', 'Align', 'C'),
(27, 'Dziwaczny', 'Bizarre', 'C'),
(28, 'Pęknąć', 'Burst', 'C'),
(29, 'Wiarygodny', 'Credible', 'C');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rola` varchar(15) NOT NULL DEFAULT 'user',
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `A` int(11) NOT NULL DEFAULT 1,
  `B` int(11) NOT NULL DEFAULT 1,
  `C` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`, `rola`, `data`, `A`, `B`, `C`) VALUES
(6, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'pn89222@stud.uph.edu.pl', 'user', '2024-08-30 10:43:34', 0, 0, 0),
(8, 'Kobury', '202cb962ac59075b964b07152d234b70', '123@gmail.com', 'admin', '2024-08-30 10:49:04', 3, 1, 1),
(9, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 'user', '2024-09-02 18:24:55', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zgloszenia`
--

CREATE TABLE `zgloszenia` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUzytkownika` int(10) UNSIGNED NOT NULL,
  `slowko1` varchar(50) NOT NULL,
  `slowko2` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zgloszenia`
--

INSERT INTO `zgloszenia` (`id`, `idUzytkownika`, `slowko1`, `slowko2`, `data`) VALUES
(1, 8, 'Pies', 'Dog', '2024-09-03 07:09:18');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `propozycje`
--
ALTER TABLE `propozycje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUzytkownika` (`idUzytkownika`);

--
-- Indeksy dla tabeli `slowka`
--
ALTER TABLE `slowka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUzytkownika` (`idUzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `propozycje`
--
ALTER TABLE `propozycje`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slowka`
--
ALTER TABLE `slowka`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zgloszenia`
--
ALTER TABLE `zgloszenia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `propozycje`
--
ALTER TABLE `propozycje`
  ADD CONSTRAINT `propozycje_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zgloszenia`
--
ALTER TABLE `zgloszenia`
  ADD CONSTRAINT `zgloszenia_ibfk_1` FOREIGN KEY (`idUzytkownika`) REFERENCES `uzytkownicy` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
