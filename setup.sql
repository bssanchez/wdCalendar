-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wdcalendar`
--

CREATE TABLE IF NOT EXISTS `wdcalendar` (
  `id` int(11) NOT NULL,
  `subject` mediumtext CHARACTER SET utf8 COLLATE utf8_bin,
  `location` varchar(200) DEFAULT NULL,
  `description` text,
  `starttime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `isalldayevent` tinyint(1) NOT NULL,
  `color` varchar(10) DEFAULT NULL,
  `recurringrule` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indices de la tabla `wdcalendar`
--
ALTER TABLE `wdcalendar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de la tabla `wdcalendar`
--
ALTER TABLE `wdcalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
