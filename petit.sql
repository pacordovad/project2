-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2014 a las 00:10:27
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `petit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `ID_ANIMAL` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_ANIMAL` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_ANIMAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`ID_ANIMAL`, `NAME_ANIMAL`) VALUES
(1, 'Perro'),
(2, 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID_PERSON` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_USER` bigint(20) DEFAULT NULL,
  `NAME` varchar(64) NOT NULL,
  `LAST_NAME` varchar(64) NOT NULL,
  `CELL_PHONE` varchar(18) NOT NULL,
  `HOUSE_PHONE` varchar(18) DEFAULT NULL,
  `JOB_PHONE` varchar(18) DEFAULT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `ADDRESS` text,
  `GENDER` tinyint(1) NOT NULL,
  `FACEBOOK_ACCOUNT` varchar(64) DEFAULT NULL,
  `TWITTER_ACCOUNT` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID_PERSON`),
  KEY `FK_USER_PERSON` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
  `ID_PET` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_RACE` int(11) DEFAULT NULL,
  `ID_PERSON` bigint(20) DEFAULT NULL,
  `NAME_PET` varchar(60) DEFAULT NULL,
  `BIRTHDAY_PET` date DEFAULT NULL,
  `PICTURE` varchar(64) DEFAULT NULL,
  `CODE` varchar(6) NOT NULL,
  `PECULIARITY` text,
  PRIMARY KEY (`ID_PET`),
  KEY `FK_RELATIONSHIP_2` (`ID_PERSON`),
  KEY `FK_RELATIONSHIP_3` (`ID_RACE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `race`
--

CREATE TABLE IF NOT EXISTS `race` (
  `ID_RACE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ANIMAL` int(11) DEFAULT NULL,
  `NAME_RACE` varchar(128) NOT NULL,
  `PICTURE_RACE` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID_RACE`),
  KEY `FK_RELATIONSHIP_4` (`ID_ANIMAL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_ROLE` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_ROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`ID_ROLE`, `NAME_ROLE`) VALUES
(1, 'root'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_ROLE` int(11) DEFAULT NULL,
  `EMAIL` varchar(1024) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `SALT` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_RELATIONSHIP_5` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `FK_USER_PERSON` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Filtros para la tabla `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PERSON`) REFERENCES `person` (`ID_PERSON`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_RACE`) REFERENCES `race` (`ID_RACE`);

--
-- Filtros para la tabla `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_ANIMAL`) REFERENCES `animal` (`ID_ANIMAL`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
