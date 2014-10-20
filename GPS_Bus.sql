-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Жов 20 2014 р., 15:44
-- Версія сервера: 5.5.40-0ubuntu0.14.04.1
-- Версія PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `GPS Bus`
--

-- --------------------------------------------------------

--
-- Структура таблиці `Driver`
--

CREATE TABLE IF NOT EXISTS `Driver` (
`idDriver` int(11) NOT NULL COMMENT 'ID водія',
  `firstName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ім’я',
  `nickName` text NOT NULL COMMENT 'Мережеве ім’я',
  `email` text NOT NULL COMMENT 'Email',
  `password` text NOT NULL COMMENT 'Пароль'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `Driver`
--

INSERT INTO `Driver` (`idDriver`, `firstName`, `nickName`, `email`, `password`) VALUES
(4, 'Олег', 'Logans', 'admin@admin', 'admin'),
(5, 'Анна', 'anna', 'anna@anna', 'anna'),
(6, 'Ростислав', 'elhowm', 'elhowm@elhowm', 'elhowm');

-- --------------------------------------------------------

--
-- Структура таблиці `DriverInfo`
--

CREATE TABLE IF NOT EXISTS `DriverInfo` (
  `idInfo` int(11) NOT NULL COMMENT 'ID інформації',
  `lastName` text NOT NULL COMMENT 'Прізвище',
  `currentCord` double NOT NULL COMMENT 'Координати',
  `idRoute` int(11) NOT NULL COMMENT 'ID маршруту'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `Route`
--

CREATE TABLE IF NOT EXISTS `Route` (
`idRoute` int(11) NOT NULL COMMENT 'ID маршруту',
  `routeName` varchar(10) NOT NULL COMMENT 'Назва маршруту',
  `stops` varchar(50) NOT NULL COMMENT 'Початкова та кінцева зупинки'
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `Route`
--

INSERT INTO `Route` (`idRoute`, `routeName`, `stops`) VALUES
(1, '1', 'Завод "Темп" - Дачі "Електроніка"'),
(2, '2', 'м/н Ракове - Гречани'),
(3, '15', 'Залізничний вокзал - Речовий ринок'),
(4, '17', 'Речовий ринок - ринок "Дубове"'),
(5, '18', 'Ружична - Ракове'),
(6, '19', 'м/н Ракове - м/н Озерна'),
(7, '20', 'завод "Катіон" - Автостанція №1'),
(8, '23', 'завод "Катіон" - м/н Ракове'),
(9, '24', 'с. Книжківці - Сілістра'),
(10, '24a', 'м/н Книжківці - Хмельницькгаз'),
(11, '25a', 'завод "Катіон" - м/н Ракове'),
(12, '25', 'завод "Катіон" - м/н Ракове'),
(13, '26', 'завод "Катіон" - Гречани'),
(14, '27', 'м/н Озерна - Ружична'),
(15, '28', 'Гречани - м/н Лезневе'),
(16, '29', 'завод "Катіон" - м/н Озерна'),
(17, '30', 'м/н Озерна - вул. Щедріна'),
(18, '32', 'м/н Ракове - Автостанція №1'),
(19, '33', 'м/н Книжківці - Шаровечка'),
(20, '34', 'завод "Катіон" - м/н Лезневе'),
(21, '35', 'завод "Катіон" - м/н Озерна'),
(22, '36', 'завод "Катіон" - м/н Книжківці'),
(23, '37', 'Гречани - вул. Будівельників'),
(24, '38', 'Гречани - м/н Озерна'),
(25, '39', 'м/н Озерна - ПМС-250'),
(26, '40', 'Ружична - м/н Лезневе'),
(27, '41', 'Аеропорт - с. Лісові Гринівці'),
(28, '42', 'завод "Катіон" - завод "Темп"'),
(29, '43', 'завод "Катіон" - м/н Лезневе'),
(30, '44', 'завод "Катіон" - Автостанція №1'),
(31, '44a', 'завод "Катіон" - Ліс'),
(32, '45', 'Гречани - ринок "Дубове"'),
(33, '46', 'Гречани - м/н Лезневе'),
(34, '46a', 'Гречани - м/н Лезневе'),
(35, '47', 'завод "Катіон" - Сілістра'),
(36, '48', 'завод "Катіон" - м/н Озерна'),
(37, '49', 'завод "Катіон" - м/н Озерна'),
(38, '50', 'ПМС-250 - М’ясокомбінат'),
(39, '51', 'завод "Катіон" - м/н Ракове'),
(40, '51a', 'Завод "Катіон" - м/н Ракове'),
(41, '52', 'завод "Катіон" - м/н Ракове'),
(42, '54', 'Керамзитний завод - Автостанція №1');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `Driver`
--
ALTER TABLE `Driver`
 ADD PRIMARY KEY (`idDriver`);

--
-- Індекси таблиці `DriverInfo`
--
ALTER TABLE `DriverInfo`
 ADD PRIMARY KEY (`idInfo`), ADD KEY `fk_DriverInfo_1_idx` (`idRoute`);

--
-- Індекси таблиці `Route`
--
ALTER TABLE `Route`
 ADD PRIMARY KEY (`idRoute`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `Driver`
--
ALTER TABLE `Driver`
MODIFY `idDriver` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID водія',AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `Route`
--
ALTER TABLE `Route`
MODIFY `idRoute` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID маршруту',AUTO_INCREMENT=43;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `DriverInfo`
--
ALTER TABLE `DriverInfo`
ADD CONSTRAINT `fk_DriverInfo_1` FOREIGN KEY (`idRoute`) REFERENCES `Route` (`idRoute`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
