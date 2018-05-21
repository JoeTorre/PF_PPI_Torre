-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 10:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pf_ppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `ID_CARRITO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `historial`
--

CREATE TABLE `historial` (
  `ID_HISTORIAL` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PRODUCTO` int(11) NOT NULL,
  `COMPRA` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historial`
--

INSERT INTO `historial` (`ID_HISTORIAL`, `ID_USUARIO`, `ID_PRODUCTO`, `COMPRA`, `CANTIDAD`) VALUES
(4, 9, 13, 1, 4),
(5, 9, 7, 1, 1),
(6, 9, 5, 1, 3),
(7, 9, 10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
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
-- Dumping data for table `productos`
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
(16, 'Pharaoh RTA', 'Equipment', 'E-cigar vape dispenser gadget.', '/imgs/Eq_PharaohRTA.jpg', 525, 3, 'Vandy Vape', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `CORREO`, `CONTRA`, `FECHNAC`, `NUM_TARJETA`, `DIRECCION`, `UTIPO`) VALUES
(1, 'Joe', 'Tor', 'chosetorre@hotmail.com', 'admin', '1995-12-08', '0', 'Universidad Anáhuac', 'ADMIN'),
(9, 'Edu', 'Tor', 'eduardo.torre@anahuac.mx', 'alumno', '1995-12-08', '1111111111111111', 'Lomas Anahuac', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID_CARRITO`),
  ADD UNIQUE KEY `ID_CARRITO_UNIQUE` (`ID_CARRITO`),
  ADD KEY `ID_USUARIO_idx` (`ID_USUARIO`),
  ADD KEY `ID_PRODUCTO_idx` (`ID_PRODUCTO`);

--
-- Indexes for table `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`ID_HISTORIAL`),
  ADD UNIQUE KEY `ID_HISTORIAL_UNIQUE` (`ID_HISTORIAL`),
  ADD KEY `ID_USUARIO_idx` (`ID_USUARIO`),
  ADD KEY `ID_PRODUCTO_idx` (`ID_PRODUCTO`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD UNIQUE KEY `ID_PRODUCTO_UNIQUE` (`ID_PRODUCTO`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD UNIQUE KEY `ID_USUARIOS_UNIQUE` (`ID_USUARIO`),
  ADD UNIQUE KEY `CORREO_UNIQUE` (`CORREO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID_CARRITO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `historial`
--
ALTER TABLE `historial`
  MODIFY `ID_HISTORIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `ID_PRODUCTO` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `productos` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ID_USUARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `ID_PRODUCTO_FK` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `productos` (`ID_PRODUCTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ID_USUARIO_FK` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
