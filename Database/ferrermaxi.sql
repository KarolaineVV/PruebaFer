-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2022 a las 04:17:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base1`
--
CREATE DATABASE IF NOT EXISTS `base1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cli` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_dian_factura`
--

CREATE TABLE `codigo_dian_factura` (
  `Id_codgn` int(11) NOT NULL,
  `Id_facturacion_cod` int(11) NOT NULL,
  `Estado_facturacion` varchar(255) NOT NULL,
  `Fecha_aprovado` datetime NOT NULL,
  `Limite_inferior` varchar(75) NOT NULL,
  `Limite_superior` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo_dian_factura`
--

INSERT INTO `codigo_dian_factura` (`Id_codgn`, `Id_facturacion_cod`, `Estado_facturacion`, `Fecha_aprovado`, `Limite_inferior`, `Limite_superior`) VALUES
(1234, 4321, 'bin', '2022-02-01 00:00:00', '1', '5'),
(123123, 123123, 'bueno', '2022-06-08 00:00:00', '21', '222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_empleado` int(11) NOT NULL,
  `Nic_em` varchar(30) NOT NULL,
  `Cedula` varchar(15) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Correo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Nic` varchar(30) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Nic`, `Nombre`, `Direccion`, `Telefono`) VALUES
('111111111111111111', 'gggggg', 'calle45522', '3114318708'),
('22', 'ferrocales y carburos', 'manzana 9casa 32', '5894656'),
('2222222222222', 'orlando', 'calle45', '25145454'),
('444444444', 'gggggg', 'dfgfg', '5525252'),
('5555555555555555', 'vdzvzvzvzvdzv', 'sgsg', '222222222222'),
('5654656', 'karol', 'calle10', '4454545454'),
('5663353', 'Karolaine', 'calle4552', '3114318708'),
('66666666', 'gggggg', 'calle70', '5464218'),
('7275785', 'octaferro', 'calle45522', '5894656'),
('7458588', 'cfasf', 'ggse', '222222222222'),
('78566', 'brayan', 'calle70', '25487451000'),
('78566522222', 'brayan', 'calle70', '25487451000'),
('8858585', 'octaferro', 'calle70', '585858585'),
('88888888', 'AAAAAAAAA', 'calee7485', '3114318708'),
('99999999999', 'gggggg', 'calle45522', '3114318708');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `Id_facturacion` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Cantidad` varchar(70) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Articulo` varchar(70) NOT NULL,
  `Precio_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`Id_facturacion`, `Nombre`, `Cantidad`, `Precio`, `Descripcion`, `Articulo`, `Precio_total`) VALUES
(2123, 'Jose', '21231', 20000, 'Nosendajanadsfn', '1', 22000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `Id_pedido` int(11) NOT NULL,
  `proveedor` varchar(290) NOT NULL,
  `Nic_producto` int(11) NOT NULL,
  `Hora_recibido` time NOT NULL,
  `Hora_pedido` time NOT NULL,
  `Fecha_pedido` date NOT NULL,
  `Fecha_recibido` date DEFAULT NULL,
  `Cantidad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`Id_pedido`, `proveedor`, `Nic_producto`, `Hora_recibido`, `Hora_pedido`, `Fecha_pedido`, `Fecha_recibido`, `Cantidad`) VALUES
(1, '0', 32569, '10:58:00', '22:58:00', '2022-08-12', '2022-08-11', '5454'),
(2, 'juan', 32156, '11:03:00', '11:04:00', '2022-08-11', '2022-08-11', '677'),
(3, '90', 98, '20:25:00', '08:28:00', '2022-07-06', '2022-07-15', '4'),
(5, '9', 56, '11:09:00', '03:07:00', '2022-07-14', '2022-07-15', '4'),
(9, '897', 65, '00:40:00', '09:42:00', '2022-07-13', '2022-07-15', '3'),
(76, '54', 9, '11:12:00', '03:10:00', '2022-07-08', '2022-07-21', '4'),
(86, '54', 56, '11:12:00', '11:10:00', '2022-07-16', '2022-07-13', '76'),
(765787474, '334778', 483454589, '11:16:00', '11:15:00', '2022-07-15', '2022-07-15', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `permiso` varchar(20) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_produto` int(11) NOT NULL,
  `Id_pro_ven_Pt` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Nic_pro` int(11) NOT NULL,
  `Nic_empro` varchar(30) NOT NULL,
  `RUT` varchar(45) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Telefono` varchar(35) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Pag_web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Nic_pro`, `Nic_empro`, `RUT`, `Nombre`, `Telefono`, `Direccion`, `Correo`, `Pag_web`) VALUES
(231, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `precio` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`codigo`, `nombre`, `foto`, `Descripcion`, `precio`) VALUES
(1, 'piscicultura', 'asesoria.jpg', 'Consulta opciones de retiro y envios gratis', 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(30) NOT NULL,
  `nombre_usu` varchar(120) DEFAULT NULL,
  `contraseña` varchar(150) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre_usu`, `contraseña`, `rol`) VALUES
(1, 'karolaine_villero', '1001882539', 'admin'),
(2, 'adrian', '1234', 'personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_producto`
--

CREATE TABLE `venta_producto` (
  `Id_pro_ven` int(11) NOT NULL,
  `Id_cli_ven` int(11) NOT NULL,
  `Id_codgn_ven` int(11) NOT NULL,
  `Cantidad` varchar(45) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta_producto`
--

INSERT INTO `venta_producto` (`Id_pro_ven`, `Id_cli_ven`, `Id_codgn_ven`, `Cantidad`, `Fecha`) VALUES
(6, 7, 3, '97', '2022-07-14 00:00:00'),
(65, 9, 2, '98', '2022-07-07 00:00:00'),
(4579, 41426, 8109709, '67', '2022-07-15 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cli`);

--
-- Indices de la tabla `codigo_dian_factura`
--
ALTER TABLE `codigo_dian_factura`
  ADD PRIMARY KEY (`Id_codgn`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Nic`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`Id_facturacion`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_produto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Nic_pro`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- Indices de la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
  ADD PRIMARY KEY (`Id_pro_ven`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
