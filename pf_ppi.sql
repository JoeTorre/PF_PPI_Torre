-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mai 2018 um 22:53
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `pf_ppi`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `carrito`
--

CREATE TABLE `carrito` (
  `ID_CARRITO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `historial`
--

CREATE TABLE `historial` (
  `ID_HISTORIAL` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL,
  `COMPRA` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `historial`
--

INSERT INTO `historial` (`ID_HISTORIAL`, `ID_USUARIO`, `ID_PRODUCTO`, `COMPRA`, `CANTIDAD`) VALUES
(4, 9, 13, 1, 4),
(5, 9, 7, 1, 1),
(6, 9, 5, 1, 3),
(7, 9, 10, 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `MEDIDA` varchar(10) DEFAULT NULL,
  `DESCRIPCION` varchar(80) CHARACTER SET utf8mb4 DEFAULT NULL,
  `IMAGEN` varchar(45) DEFAULT NULL,
  `PRECIO` double NOT NULL,
  `EXISTENCIA` int(11) DEFAULT NULL,
  `MARCA` varchar(45) DEFAULT NULL,
  `ORIGEN` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `productos`
--

INSERT INTO `productos` (`ID_PRODUCTO`, `NOMBRE`, `MEDIDA`, `DESCRIPCION`, `IMAGEN`, `PRECIO`, `EXISTENCIA`, `MARCA`, `ORIGEN`) VALUES
(1, 'Blueberry Ice Cream', 'Noble', '30ml Blueberry Ice Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_BlueberryIceCream.jpg', 125, 10, 'Uncle Joe', 'MEX'),
(2, 'Blueberry Ice Cream', 'Royal', '60ml Blueberry Ice Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_BlueberryIceCream.jpg', 220, 9, 'Uncle Joe', 'MEX'),
(3, 'Coconut Milk', 'Noble', '30ml Coconut Milk flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_LechedeCoco.jpg', 125, 10, 'Uncle Joe', 'MEX'),
(4, 'Coconut Milk', 'Royal', '60ml Coconut Milk flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_LechedeCoco.jpg', 220, 10, 'Uncle Joe', 'MEX'),
(5, 'Crunch Cereal', 'Noble', '30ml Crunch Cereal flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_CerealCrunch.jpg', 125, 7, 'Uncle Joe', 'MEX'),
(6, 'Crunch Cereal', 'Royal', '60ml Crunch Cereal flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_CerealCrunch.jpg', 220, 10, 'Uncle Joe', 'MEX'),
(7, 'Irish Cream', 'Noble', '30ml Irish Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_IrishCream.jpg', 125, 9, 'Uncle Joe', 'MEX'),
(8, 'Irish Cream', 'Royal', '60ml Irish Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_IrishCream.jpg', 220, 10, 'Uncle Joe', 'MEX'),
(9, 'Snickers', 'Noble', '30ml Snickers flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_Snickers.jpg', 125, 10, 'Uncle Joe', 'MEX'),
(10, 'Snickers', 'Royal', '60ml Vanilla Cupcake flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_Snickers.jpg', 220, 9, 'Uncle Joe', 'MEX'),
(11, 'Strawberries & Cream', 'Noble', '30ml Strawberries & Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_FresasconCrema.jpg', 125, 10, 'Uncle Joe', 'MEX'),
(12, 'Strawberries & Cream', 'Royal', '60ml Strawberries & Cream flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_FresasconCrema.jpg', 220, 10, 'Uncle Joe', 'MEX'),
(13, 'Vanilla Cupcake', 'Noble', '30ml Vanilla Cupcake flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_VanillaCupcake.jpg', 125, 10, 'Uncle Joe', 'MEX'),
(14, 'Vanilla Cupcake', 'Royal', '60ml Vanilla Cupcake flavoured E-liquid (70% VG / 30% PG USP grade).', 'imgs/Liq_VanillaCupcake.jpg', 220, 10, 'Uncle Joe', 'MEX'),
(15, 'Kensei RTA', 'Equipment', 'E-liquid Atomizer (1x 510 delrin drip tip).', 'imgs/Eq_KenseiRTAbyVandyVape.jpg', 748, 5, 'Vandy Vape', 'USA'),
(16, 'Pharaoh RTA', 'Equipment', 'E-cigar vape dispenser gadget.', 'imgs/Eq_PharaohRTA.jpg', 525, 3, 'Vandy Vape', 'USA'),
(17, 'Extra Suorin Air', 'Equipment', 'Extra battery for E-cigar', 'imgs/Eq_RepuestoSuorinAir.jpg', 733, 2, 'Suorin Air', 'USA'),
(18, 'Smoke Alien Baby', 'Equipment', 'Small E-cigar.', 'imgs/Eq_SmokAlienBaby.jpg', 1021, 4, 'Smoke Alien', 'USA'),
(19, 'Smoke Alien Mod', 'Equipment', 'Big e-cigar.', 'imgs/Eq_SmokAlienMod.jpg', 1655, 5, 'Smoke Alien', 'USA'),
(20, 'Suorin Air', 'Equipment', 'Squared e-cigar.', 'imgs/Eq_SuorinAir.jpg', 2100, 3, 'Suorin Air', 'USA'),
(21, 'Suorin Drop Kit', 'Equipment', 'E-juice dispenser.', 'imgs/Eq_SuorinDropKit.jpg', 438, 6, 'Suorin Air', 'USA'),
(22, 'Tsunami 24', 'Equipment', 'E-cigar with metal mouth tubes.', 'imgs/Eq_Tsunami24.jpg', 3250, 5, 'Tsunami', 'JPN'),
(23, 'Vaper Stuff VP RDA', 'Equipment', 'Mouth tubes for e-cigars.', 'imgs/Eq_VaperStuff-VPRDA.jpg', 340, 10, 'Vaper Stuff', 'CAN'),
(24, 'Vaporesso Revenger Kit', 'Equipment', 'E-cigars with kit.', 'imgs/Eq_VaporessoRevengerKit.jpg', 1000, 7, 'Vaporesso', 'ITA'),
(25, 'Vaporesso Swag Kit', 'Equipment', 'E-cigar with kit with battery blue.', 'imgs/Eq_VaporessoSwagKit.jpg', 1500, 4, 'Vaporesso', 'ITA'),
(26, 'Vaporesso Target Mini', 'Equipment', 'E-cigar with mini kit.', 'imgs/Eq_VaporessoTargetMini.jpg', 730, 3, 'Vaporesso', 'ITA'),
(27, 'VGod Elite DTA', 'Equipment', 'Complete e-cigar set with equipment.', 'imgs/Eq_VGodEliteDTA.jpg', 1460, 4, 'VGod', 'USA'),
(28, 'Wismec Releux RX Gen 3', 'Equipment', '3rd Generation E-cigar.', 'imgs/Eq_WismecReleuxRXGen3.jpg', 890, 5, 'Wismec', 'USA'),
(29, 'Wismec Reuleaux RX2-20700', 'Equipment', 'Super e-cigar.', 'imgs/Eq_WismecReuleauxRX2-20700.jpg', 2300, 4, 'Wismec', 'USA'),
(30, 'Wismec Sinuous Ravage 230 Mod', 'Equipment', 'Extra long battery e-cigar.', 'imgs/Eq_WismecSinuousRavage230Mod.jpg', 2700, 3, 'Wismec', 'USA'),
(31, 'Wotofo Bravo RTA', 'Equipment', 'Mouth tube for Wotobo e-cigar.', 'imgs/Eq_WotofoBravoRTA.jpg', 530, 9, 'Bravo', 'USA');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `APELLIDO` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `CORREO` varchar(45) NOT NULL,
  `CONTRA` varchar(45) NOT NULL,
  `FECHNAC` date DEFAULT NULL,
  `NUM_TARJETA` decimal(16,0) DEFAULT NULL,
  `DIRECCION` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `UTIPO` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `CORREO`, `CONTRA`, `FECHNAC`, `NUM_TARJETA`, `DIRECCION`, `UTIPO`) VALUES
(1, 'Joe', 'Tor', 'chosetorre@hotmail.com', 'admin', '1995-12-08', '0', 'Universidad Anáhuac', 'ADMIN'),
(9, 'Edu', 'Tor', 'eduardo.torre@anahuac.mx', 'alumno', '1995-12-08', '1111111111111111', 'Lomas Anahuac', 'USER');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID_CARRITO`),
  ADD UNIQUE KEY `ID_CARRITO_UNIQUE` (`ID_CARRITO`),
  ADD KEY `ID_USUARIO_idx` (`ID_USUARIO`),
  ADD KEY `ID_PRODUCTO_idx` (`ID_PRODUCTO`);

--
-- Indizes für die Tabelle `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`ID_HISTORIAL`),
  ADD UNIQUE KEY `ID_HISTORIAL_UNIQUE` (`ID_HISTORIAL`),
  ADD KEY `ID_USUARIO_idx` (`ID_USUARIO`),
  ADD KEY `ID_PRODUCTO_idx` (`ID_PRODUCTO`);

--
-- Indizes für die Tabelle `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD UNIQUE KEY `ID_PRODUCTO_UNIQUE` (`ID_PRODUCTO`);

--
-- Indizes für die Tabelle `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD UNIQUE KEY `ID_USUARIOS_UNIQUE` (`ID_USUARIO`),
  ADD UNIQUE KEY `CORREO_UNIQUE` (`CORREO`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID_CARRITO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT für Tabelle `historial`
--
ALTER TABLE `historial`
  MODIFY `ID_HISTORIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT für Tabelle `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `ID_PRODUCTO` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `productos` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ID_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `ID_PRODUCTO_FK` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `productos` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ID_USUARIO_FK` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
