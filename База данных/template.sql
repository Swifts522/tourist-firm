-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2017 г., 20:17
-- Версия сервера: 5.1.52
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `template`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(24) NOT NULL,
  `Password` varchar(24) NOT NULL,
  `Admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`ID`, `Name`, `Password`, `Admin`) VALUES
(1, 'Swift', '112211', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `thead`
--

CREATE TABLE IF NOT EXISTS `thead` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Header` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `thead`
--

INSERT INTO `thead` (`ID`, `Header`, `Text`) VALUES
(1, 'Лучший отдых для детей! Турция из Алматы', 'Rixos World – The Land of Legends – первый отель в Турции с уникальной концепцией, поскольку он объединяет все аспекты отдыха. Как и в других отелях цепочки Rixos, здесь высокий уровень обслуживания, великолепный SPA, а также восхитительный тематический парк развлечений и отдыха. Концепция и дизайн номеров отеля разработаны специально для отдыха с детьми. \r\nДополнительно оплачиваются некоторые аттракционы и услуги парка развлечений'),
(2, 'Супер цены на Мальдивы из Алматы!', 'Туры на Мальдивы из Алматы. Мальдивы - это рай на земле - это белоснежные песчаные пляжи, теплое, ласковое море, солнце, релакс, богатый подводный мир. Многочисленные виды кораллов, чрезвычайно богатый подводный мир и кристально чистая вода сделали Мальдивские острова "Меккой" для аквалангистов всего мира. На каждом курорте есть центр подводного плавания, дающий возможность новичкам получить сертификаты международного образца. Буквально в 20 метрах от номера, плавая с трубкой и маской, можно увидеть практически всех обитателей океана. \r\nВиза не требуется'),
(3, 'Люксовый отдых в Турции! ', 'Супер цены на туры в отели класса PREMIUM/LUXE на Анталийском побережье с вылетом из Алматы! Вас ждет незабываемый отдых в окружении роскоши и высочайшего уровня сервиса. Подарите себе возможность получить незабываемые впечатления.\r\nВылеты различными авиакомпаниями: Atlas Jet, Sunday Airlines, Air Astana, Pegasus Airlines. \r\nВиза не требуется');

-- --------------------------------------------------------

--
-- Структура таблицы `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Punkt` varchar(150) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `ticket`
--

INSERT INTO `ticket` (`ID`, `Punkt`, `Price`) VALUES
(1, 'Дубай', 70000),
(2, 'Гонконг', 45000);
