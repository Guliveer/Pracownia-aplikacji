-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 29 Wrz 2017, 13:10
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `ksiegarnia_internetowa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Klient`
--

CREATE TABLE IF NOT EXISTS `Klient` (
  `IDklienta` int(11) NOT NULL AUTO_INCREMENT,
  `nazwisko` text,
  `imie` text,
  `kodpocztowy` text,
  `miejscowosc` text,
  `ulica` text,
  `nr_domu` int(11) DEFAULT NULL,
  `pesel` text,
  `telefon` text,
  `email` text,
  PRIMARY KEY (`IDklienta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `Klient`
--

INSERT INTO `Klient` (`IDklienta`, `nazwisko`, `imie`, `kodpocztowy`, `miejscowosc`, `ulica`, `nr_domu`, `pesel`, `telefon`, `email`) VALUES
(1, 'Nowak', 'Adam', '00-011', 'Warszaws', 'Rzepi?ska', 10, '98052204774', '111222333', 'adam@gmail.com'),
(2, 'Anna', 'Lisek', '34-100', 'Wadowice', 'Lwowska', 11, '95031203267', '936789453', 'ania@gmail.com'),
(3, 'Anna', 'Lisek', '34-100', 'Wadowice', 'Lwowska', 11, '95031203267', '936789453', 'ania@gmail.com'),
(4, 'SD', 'FSADDFG', 'FSDF', 'DSF', 'DSF', 13, 'DSFAG', 'dfGD', 'DSG'),
(5, 'GÃ³rski', 'Jakub', NULL, NULL, NULL, NULL, '92120203229', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
