-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 18:17:08
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `prioridad` enum('Alta','Normal','Baja') COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `prioridad`, `descripcion`, `inicio`, `fin`) VALUES
(1, 'Alta', 'Pagar IVA', '2015-11-18 09:00:00', NULL),
(2, 'Normal', 'Retirar nuevo facturero', '2015-11-17 09:00:00', NULL),
(3, 'Alta', 'Visita a MonseÃ±or Laguna', '2015-12-16 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL,
  `sucursal` int(4) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_provincia` int(11) NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `sucursal`, `descripcion`, `direccion`, `localidad`, `codigo_postal`, `id_provincia`, `telefono`, `fax`, `email`, `web`, `observaciones`) VALUES
(1, 12, 'BANCO MACRO S.A.', 'Av. San MartÃ­n 2010', 'Puerto Rico', '3334', 19, '03743-420528', '03743-420060', 'serviciosalcliente@macro.com.ar', 'https://www.macro.com.ar/', ''),
(2, 2800, 'BANCO NACION', 'Av. San Martin 1736', 'Puerto Rico ', '3334', 19, '(03743)-420570', '(03743)-420570', 'asistenciaproteccionusuarios@bna.com.ar', 'http://www.bna.com.ar/', ''),
(3, 2065, 'BANCO NACION', 'De Los Pioneros 727\r\n', 'JardÃ­n AmÃ©rica', '3328', 19, '(03743)-460103', '(03743)-460298', 'asistenciaproteccionusuarios@bna.com.ar', 'http://www.bna.com.ar/', ''),
(4, 2720, 'BANCO NACION', 'Bolivar 1799', 'Posadas', '3300', 19, '(376) 4430227 ', '(376) 440865', 'asistenciaproteccionusuarios@bna.com.ar', 'http://www.bna.com.ar/', ''),
(5, 24, 'BANCO MACRO S.A.', 'J. Manuel Estrada 132\r\n', 'CapiovÃ­', '3332', 19, '(03743)-493038', '(03743)-493038', 'serviciosalcliente@macro.com.ar', 'https://www.macro.com.ar/', ''),
(6, 1, 'BANCO MACRO S.A.', 'Av. San MartÃ­n 1886', 'Posadas', '3300', 19, '(0376)-4448000', '(0376)-4448032', 'serviciosalcliente@macro.com.ar', 'https://www.macro.com.ar/', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `descripcion`) VALUES
(1, 'Caja Principal  '),
(2, 'Caja Chica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `id` int(11) NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `patente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `anio_fabric` int(11) NOT NULL,
  `nro_chasis` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nro_motor` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_patente` date DEFAULT NULL,
  `ejes` int(11) DEFAULT NULL,
  `tara` decimal(6,0) DEFAULT NULL,
  `carga_util` decimal(6,0) DEFAULT NULL,
  `fin_garantia` date DEFAULT NULL,
  `fecha_itv` date DEFAULT NULL,
  `fecha_ult_revision` date DEFAULT NULL,
  `kms_ult_revision` decimal(8,0) DEFAULT NULL,
  `id_tipo_ult_manten` int(11) DEFAULT NULL,
  `id_poliza` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`id`, `id_chofer`, `patente`, `marca`, `modelo`, `tipo`, `anio_fabric`, `nro_chasis`, `nro_motor`, `color`, `fecha_patente`, `ejes`, `tara`, `carga_util`, `fin_garantia`, `fecha_itv`, `fecha_ult_revision`, `kms_ult_revision`, `id_tipo_ult_manten`, `id_poliza`) VALUES
(1, 1, 'NZC345', 'FIAT', 'IVECO', 'TRALLIS', 2008, 'ASKI88AD88ADA', 'ASDI8ASD7623KN', 'BLANCO', '2008-10-10', 2, '12000', '25000', '2005-11-03', '2015-11-09', '2015-08-11', '158623', 1, 1),
(2, 2, 'PTZ244', 'SCANIA', 'VABIS', 'TRALLIS', 2008, 'ASKI88AD88ADA', 'ASDI8ASD7623KN', 'BLANCO', '2008-10-10', 2, '12000', '25000', '2005-11-02', '2015-11-09', '2015-08-11', '158623', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cheques`
--

CREATE TABLE `cheques` (
  `id` int(11) NOT NULL,
  `propios` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `id_caja` int(11) DEFAULT NULL,
  `id_banco` int(11) NOT NULL,
  `numero` bigint(20) DEFAULT NULL,
  `estado` enum('Cartera','Depositado','Rechazado','Entregado','Reemplazado') COLLATE utf8_spanish_ci NOT NULL,
  `cuit` char(13) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_venc` date DEFAULT NULL,
  `fecha_cobro` date DEFAULT NULL,
  `conciliado` tinyint(1) DEFAULT NULL,
  `clearing` enum('24','48','72') COLLATE utf8_spanish_ci DEFAULT NULL,
  `importe` decimal(14,2) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cheques`
--

INSERT INTO `cheques` (`id`, `propios`, `fecha`, `id_caja`, `id_banco`, `numero`, `estado`, `cuit`, `fecha_venc`, `fecha_cobro`, `conciliado`, `clearing`, `importe`, `id_proveedor`, `id_cliente`, `observaciones`) VALUES
(1, 0, '2015-12-10', 1, 1, 1111111111, 'Entregado', '', '2015-11-18', NULL, 0, '', '12445.00', 1, 1, ''),
(2, 0, '2015-10-10', 1, 1, 1111111112, 'Entregado', '', '2015-11-18', NULL, 0, '', '12445.00', 1, 1, ''),
(3, 1, '2015-11-19', 1, 1, 33333, 'Cartera', '', '2015-11-18', NULL, 0, '', '34533.00', 1, 1, ''),
(4, 1, '2015-11-19', 1, 1, 44444, 'Cartera', '', '2015-11-18', NULL, 0, '', '34533.00', 1, 1, ''),
(5, 0, '2015-10-10', 1, 1, 1111111113, 'Entregado', '', '2015-11-18', NULL, 0, '', '12445.00', 1, 1, ''),
(7, 0, '2015-11-03', 1, 2, 323232, 'Cartera', '', NULL, NULL, 0, '', '543.00', NULL, 1, ''),
(8, 1, '2014-12-11', 1, 1, 11111118, 'Rechazado', '', NULL, NULL, 0, '', '2134.00', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cheques_depositados`
--

CREATE TABLE `cheques_depositados` (
  `id` int(11) NOT NULL,
  `id_deposito` int(11) NOT NULL,
  `id_cheque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `choferes`
--

CREATE TABLE `choferes` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(20) DEFAULT NULL,
  `id_provincia` int(11) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `id_tipo_impositivo` int(11) DEFAULT NULL,
  `documento_impositivo` varchar(100) DEFAULT NULL,
  `id_tipo_responsable` int(11) DEFAULT NULL,
  `fecha_ing` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `observaciones` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `choferes`
--

INSERT INTO `choferes` (`id`, `denominacion`, `direccion`, `localidad`, `codigo_postal`, `id_provincia`, `telefono`, `celular`, `fax`, `email`, `web`, `id_tipo_impositivo`, `documento_impositivo`, `id_tipo_responsable`, `fecha_ing`, `fecha_baja`, `observaciones`) VALUES
(1, 'MATIAS', 'LOS FRUTALES 1', 'CAPIOVI', '3332', 19, '477922', '15425252', '', '', '', 1, '1', 1, '1978-03-03', NULL, ''),
(2, 'MARIO', 'LOS PINOS', 'CAPIOVI', '3332', 19, '', '', '', '', '', NULL, '', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(20) DEFAULT NULL,
  `id_provincia` int(11) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `id_tipo_impositivo` int(11) DEFAULT NULL,
  `documento_impositivo` varchar(100) DEFAULT NULL,
  `id_tipo_responsable` int(11) DEFAULT NULL,
  `observaciones` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `denominacion`, `direccion`, `localidad`, `codigo_postal`, `id_provincia`, `telefono`, `celular`, `fax`, `email`, `web`, `id_tipo_impositivo`, `documento_impositivo`, `id_tipo_responsable`, `observaciones`) VALUES
(1, 'LOPEZ PEDRO', 'ESTRADA 125', 'PUERTO RICO', '3334', 19, '', '', '', '', '', 1, '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combustibles`
--

CREATE TABLE `combustibles` (
  `id` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `litros` decimal(10,3) DEFAULT NULL,
  `importe` decimal(10,2) DEFAULT NULL,
  `km_bitacora` decimal(9,0) DEFAULT NULL,
  `id_proveedor` int(11) NOT NULL,
  `tn` decimal(8,2) NOT NULL,
  `recorrido` decimal(9,0) NOT NULL,
  `consumo` decimal(6,2) NOT NULL,
  `rendimiento` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `combustibles`
--

INSERT INTO `combustibles` (`id`, `id_camion`, `fecha`, `litros`, `importe`, `km_bitacora`, `id_proveedor`, `tn`, `recorrido`, `consumo`, `rendimiento`) VALUES
(1, 2, '2015-04-15', '20.000', '96.00', '2563', 1, '0.00', '0', '0.00', '0.00'),
(2, 1, '2015-04-29', '2.500', '14.00', '2664', 1, '0.00', '101', '40.40', '8.42'),
(3, 1, '2015-05-10', '3.000', '13.40', '2795', 1, '0.00', '131', '43.70', '7.80'),
(4, 1, '2015-05-20', '6.800', '35.00', '3090', 1, '0.00', '295', '43.40', '9.71'),
(5, 1, '2015-05-31', '25.000', '125.00', '4091', 1, '0.00', '1001', '40.00', '7.78'),
(6, 1, '2015-06-30', '24.000', '100.00', '5000', 1, '0.00', '909', '37.90', '7.58'),
(7, 2, '2015-04-15', '20.000', '96.00', '2563', 1, '0.00', '0', '0.00', '0.00'),
(8, 2, '2015-04-29', '2.500', '14.00', '2664', 1, '0.00', '101', '40.40', '8.42'),
(9, 2, '2015-05-10', '3.000', '13.40', '2795', 1, '0.00', '131', '43.70', '7.80'),
(10, 2, '2015-05-20', '6.800', '35.00', '3090', 1, '0.00', '295', '43.40', '9.71'),
(11, 2, '2015-05-31', '25.000', '125.00', '4091', 1, '0.00', '1001', '40.00', '7.78'),
(12, 2, '2015-06-30', '24.000', '100.00', '5000', 1, '0.00', '909', '37.90', '7.58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `mes_fiscal` int(2) NOT NULL,
  `anio_fiscal` int(4) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_tipo_comprobante` int(11) NOT NULL,
  `letra` char(1) DEFAULT NULL,
  `sucursal` int(4) DEFAULT NULL,
  `nro_comprobante` bigint(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_destino` int(11) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `neto_gravado` decimal(14,2) DEFAULT NULL,
  `no_gravado` decimal(14,2) DEFAULT NULL,
  `imp_internos` decimal(12,2) DEFAULT NULL,
  `imp_municipales` decimal(14,2) DEFAULT NULL,
  `imp_provinciales` decimal(14,2) DEFAULT NULL,
  `imp_nacionales` decimal(14,2) DEFAULT NULL,
  `percepcion` decimal(14,2) DEFAULT NULL,
  `ing_brutos` decimal(14,2) DEFAULT NULL,
  `perc_iva` decimal(12,2) DEFAULT NULL,
  `perc_dgr` decimal(12,2) DEFAULT NULL,
  `tasa_1_iva` decimal(6,2) DEFAULT NULL,
  `importe_1_iva` decimal(14,2) DEFAULT NULL,
  `tasa_2_iva` decimal(6,2) DEFAULT NULL,
  `importe_2_iva` decimal(14,2) DEFAULT NULL,
  `tasa_3_iva` decimal(6,2) DEFAULT NULL,
  `importe_3_iva` decimal(14,2) DEFAULT NULL,
  `tasa_4_iva` decimal(6,2) DEFAULT NULL,
  `importe_4_iva` decimal(14,2) DEFAULT NULL,
  `tasa_5_iva` decimal(6,2) DEFAULT NULL,
  `importe_5_iva` decimal(14,2) DEFAULT NULL,
  `total` decimal(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `mes_fiscal`, `anio_fiscal`, `id_proveedor`, `id_tipo_comprobante`, `letra`, `sucursal`, `nro_comprobante`, `fecha`, `id_destino`, `detalle`, `neto_gravado`, `no_gravado`, `imp_internos`, `imp_municipales`, `imp_provinciales`, `imp_nacionales`, `percepcion`, `ing_brutos`, `perc_iva`, `perc_dgr`, `tasa_1_iva`, `importe_1_iva`, `tasa_2_iva`, `importe_2_iva`, `tasa_3_iva`, `importe_3_iva`, `tasa_4_iva`, `importe_4_iva`, `tasa_5_iva`, `importe_5_iva`, `total`) VALUES
(1, 1, 2015, 1, 1, 'A', 0, 1, '2015-09-12', 1, 'MATERIALES DE CONSTRUCCION', '100.00', '0.00', NULL, '3.00', '4.00', '5.00', '6.00', '7.00', NULL, NULL, '21.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '121.00'),
(2, 1, 2015, 2, 1, 'A', 2, 13, '2015-10-01', 1, 'TRANSPORTE RALEO', '118530.05', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '24891.31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '143421.36'),
(3, 1, 2015, 2, 1, 'A', 2, 14, '2015-10-13', 1, 'TRANSPORTE RALEO', '5367.84', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '1127.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6495.09'),
(5, 1, 2015, 2, 1, 'A', 2, 15, '2015-11-13', 1, 'TRANSPORTE RALEO', '4901.44', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '1029.30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5930.74');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `tipo` enum('Cuenta Corriente','Caja de Ahorro','Cuenta Sueldos','Cuenta de la Seg Social') COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `id_banco`, `tipo`, `numero`, `descripcion`) VALUES
(1, 1, 'Cuenta Corriente', 421, 'Cuenta Corriente Principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuit_paises`
--

CREATE TABLE `cuit_paises` (
  `cuit_pais` char(11) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` tinyint(4) DEFAULT NULL,
  `tipo_sujeto` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuit_paises`
--

INSERT INTO `cuit_paises` (`cuit_pais`, `descripcion`, `codigo`, `tipo_sujeto`) VALUES
('50000000024', 'PARAGUAY	', 1, 'FISICA	'),
('50000000032', 'CHILE	', 1, 'FISICA	'),
('50000000040', 'BOLIVIA	', 1, 'FISICA	'),
('50000000059', 'BRASIL	', 1, 'FISICA	'),
('50000001012', 'BURKINA FASO	', 1, 'FISICA	'),
('50000001020', 'ARGELIA	', 1, 'FISICA	'),
('50000001039', 'BOTSWANA	', 1, 'FISICA	'),
('50000001047', 'BURUNDI	', 1, 'FISICA	'),
('50000001055', 'CAMERUN	', 1, 'FISICA	'),
('50000001071', 'CENTRO AFRICANO, REP.	', 1, 'FISICA	'),
('50000001101', 'COSTA DE MARFIL	', 1, 'FISICA	'),
('50000001136', 'EGIPTO	', 1, 'FISICA	'),
('50000001144', 'ETIOPIA	', 1, 'FISICA	'),
('50000001152', 'GABON	', 1, 'FISICA	'),
('50000001160', 'GAMBIA	', 1, 'FISICA	'),
('50000001179', 'GHANA	', 1, 'FISICA	'),
('50000001187', 'GUINEA	', 1, 'FISICA	'),
('50000001195', 'GUINEA ECUATORIAL	', 1, 'FISICA	'),
('50000001209', 'KENIA	', 1, 'FISICA	'),
('50000001217', 'LESOTHO	', 1, 'FISICA	'),
('50000001225', 'REPUBLICA DE LIBERIA (Estado independiente)	', 1, 'FISICA	'),
('50000001233', 'LIBIA	', 1, 'FISICA	'),
('50000001241', 'MADAGASCAR	', 1, 'FISICA	'),
('50000001276', 'MARRUECOS	', 1, 'FISICA	'),
('50000001284', 'REPUBLICA DE MAURICIO	', 1, 'FISICA	'),
('50000001292', 'MAURITANIA	', 1, 'FISICA	'),
('50000001306', 'NIGER	', 1, 'FISICA	'),
('50000001314', 'NIGERIA	', 1, 'FISICA	'),
('50000001322', 'ZIMBABWE	', 1, 'FISICA	'),
('50000001330', 'RUANDA	', 1, 'FISICA	'),
('50000001349', 'SENEGAL	', 1, 'FISICA	'),
('50000001357', 'SIERRA LEONA	', 1, 'FISICA	'),
('50000001365', 'SOMALIA	', 1, 'FISICA	'),
('50000001373', 'REINO DE SWAZILANDIA (Estado independiente)	', 1, 'FISICA	'),
('50000001381', 'SUDAN	', 1, 'FISICA	'),
('50000001403', 'TOGO	', 1, 'FISICA	'),
('50000001411', 'REPUBLICA TUNECINA	', 1, 'FISICA	'),
('50000001446', 'ZAMBIA	', 1, 'FISICA	'),
('50000001454', 'POS.BRITANICA (AFRICA)	', 1, 'FISICA	'),
('50000001462', 'POS.ESPAÃ‘OLA (AFRICA)	', 1, 'FISICA	'),
('50000001470', 'POS.FRANCESA (AFRICA)	', 1, 'FISICA	'),
('50000001489', 'POS.PORTUGUESA (AFRICA)	', 1, 'FISICA	'),
('50000001497', 'REPUBLICA DE ANGOLA	', 1, 'FISICA	'),
('50000001500', 'REPUBLICA DE CABO VERDE (Estado independiente)	', 1, 'FISICA	'),
('50000001519', 'MOZAMBIQUE	', 1, 'FISICA	'),
('50000001527', 'CONGO REP.POPULAR	', 1, 'FISICA	'),
('50000001535', 'CHAD	', 1, 'FISICA	'),
('50000001543', 'MALAWI	', 1, 'FISICA	'),
('50000001551', 'TANZANIA	', 1, 'FISICA	'),
('50000001586', 'COSTA RICA	', 1, 'FISICA	'),
('50000001616', 'ZAIRE	', 1, 'FISICA	'),
('50000001624', 'BENIN	', 1, 'FISICA	'),
('50000001632', 'MALI	', 1, 'FISICA	'),
('50000001705', 'UGANDA	', 1, 'FISICA	'),
('50000001713', 'SUDAFRICA, REP. DE	', 1, 'FISICA	'),
('50000001810', 'REPUBLICA DE SEYCHELLES (Estado independiente)	', 1, 'FISICA	'),
('50000001829', 'SANTO TOME Y PRINCIPE	', 1, 'FISICA	'),
('50000001837', 'NAMIBIA	', 1, 'FISICA	'),
('50000001845', 'GUINEA BISSAU	', 1, 'FISICA	'),
('50000001853', 'ERITREA	', 1, 'FISICA	'),
('50000001861', 'REPUBLICA DE DJIBUTI (Estado independiente)	', 1, 'FISICA	'),
('50000001896', 'COMORAS	', 1, 'FISICA	'),
('50000001985', 'INDETERMINADO (AFRICA)	', 1, 'FISICA	'),
('50000002019', 'BARBADOS (Estado independiente)	', 1, 'FISICA	'),
('50000002043', 'CANADA	', 1, 'FISICA	'),
('50000002051', 'COLOMBIA	', 1, 'FISICA	'),
('50000002094', 'DOMINICANA, REPUBLICA	', 1, 'FISICA	'),
('50000002116', 'EL SALVADOR	', 1, 'FISICA	'),
('50000002124', 'ESTADOS UNIDOS	', 1, 'FISICA	'),
('50000002132', 'GUATEMALA	', 1, 'FISICA	'),
('50000002140', 'REPUBLICA COOPERATIVA DE GUYANA (Estado independiente)	', 1, 'FISICA	'),
('50000002159', 'HAITI	', 1, 'FISICA	'),
('50000002167', 'HONDURAS	', 1, 'FISICA	'),
('50000002175', 'JAMAICA	', 1, 'FISICA	'),
('50000002183', 'MEXICO	', 1, 'FISICA	'),
('50000002191', 'NICARAGUA	', 1, 'FISICA	'),
('50000002205', 'REPUBLICA DE PANAMA (Estado independiente)	', 1, 'FISICA	'),
('50000002213', 'ESTADO LIBRE ASOCIADO DE PUERTO RICO (Estado asoc. a EEUU)	', 1, 'FISICA	'),
('50000002221', 'PERU	', 1, 'FISICA	'),
('50000002256', 'ANTIGUA Y BARBUDA (Estado independiente)	', 1, 'FISICA	'),
('50000002264', 'VENEZUELA	', 1, 'FISICA	'),
('50000002272', 'POS.BRITANICA (AMERICA)	', 1, 'FISICA	'),
('50000002280', 'POS.DANESA (AMERICA)	', 1, 'FISICA	'),
('50000002299', 'POS.FRANCESA (AMERICA)	', 1, 'FISICA	'),
('50000002302', 'POS.PAISES BAJOS (AMERICA)	', 1, 'FISICA	'),
('50000002310', 'POS.E.E.U.U. (AMERICA)	', 1, 'FISICA	'),
('50000002329', 'SURINAME	', 1, 'FISICA	'),
('50000002337', 'EL COMMONWEALTH DE DOMINICA (Estado Asociado)	', 1, 'FISICA	'),
('50000002345', 'SANTA LUCIA	', 1, 'FISICA	'),
('50000002353', 'SAN VICENTE Y LAS GRANADINAS (Estado independiente)	', 1, 'FISICA	'),
('50000002361', 'BELICE (Estado independiente)	', 1, 'FISICA	'),
('50000002396', 'CUBA	', 1, 'FISICA	'),
('50000002426', 'ECUADOR	', 1, 'FISICA	'),
('50000002434', 'REPUBLICA DE TRINIDAD Y TOBAGO	', 1, 'FISICA	'),
('50000002825', 'BUTAN	', 1, 'FISICA	'),
('50000002841', 'MYANMAR (EX BIRMANIA)	', 1, 'FISICA	'),
('50000002876', 'ISRAEL	', 1, 'FISICA	'),
('50000002882', 'ESTADO ASOCIADO DE GRANADA (Estado independiente)	', 1, 'FISICA	'),
('50000002892', 'FEDERACION DE SAN CRISTOBAL (Islas Saint Kitts and Nevis)	', 1, 'FISICA	'),
('50000002906', 'COMUNIDAD DE LAS BAHAMAS (Estado independiente)	', 1, 'FISICA	'),
('50000002914', 'TAILANDIA	', 1, 'FISICA	'),
('50000002922', 'INDETERMINADO (AMERICA)	', 1, 'FISICA	'),
('50000002930', 'IRAN	', 1, 'FISICA	'),
('50000002981', 'ESTADO DE QATAR (Estado independiente)	', 1, 'FISICA	'),
('50000003007', 'REINO HACHEMITA DE JORDANIA	', 1, 'FISICA	'),
('50000003015', 'AFGANISTAN	', 1, 'FISICA	'),
('50000003023', 'ARABIA SAUDITA	', 1, 'FISICA	'),
('50000003031', 'ESTADO DE BAHREIN (Estado independiente)	', 1, 'FISICA	'),
('50000003066', 'CAMBOYA (EX KAMPUCHEA)	', 1, 'FISICA	'),
('50000003074', 'REPUBLICA DEMOCRATICA SOCIALISTA DE SRI LANKA	', 1, 'FISICA	'),
('50000003082', 'COREA DEMOCRATICA 	', 1, 'FISICA	'),
('50000003090', 'COREA REPUBLICANA	', 1, 'FISICA	'),
('50000003104', 'CHINA REP.POPULAR	', 1, 'FISICA	'),
('50000003112', 'REPUBLICA DE CHIPRE (Estado independiente)	', 1, 'FISICA	'),
('50000003120', 'FILIPINAS	', 1, 'FISICA	'),
('50000003139', 'TAIWAN	', 1, 'FISICA	'),
('50000003147', 'GAZA	', 1, 'FISICA	'),
('50000003155', 'INDIA	', 1, 'FISICA	'),
('50000003163', 'INDONESIA	', 1, 'FISICA	'),
('50000003171', 'IRAK	', 1, 'FISICA	'),
('50000003201', 'JAPON	', 1, 'FISICA	'),
('50000003236', 'ESTADO DE KUWAIT (Estado independiente)	', 1, 'FISICA	'),
('50000003244', 'LAOS	', 1, 'FISICA	'),
('50000003252', 'LIBANO	', 1, 'FISICA	'),
('50000003260', 'MALASIA	', 1, 'FISICA	'),
('50000003279', 'REPUBLICA DE MALDIVAS (Estado independiente)	', 1, 'FISICA	'),
('50000003287', 'SULTANATO DE OMAN	', 1, 'FISICA	'),
('50000003295', 'MONGOLIA	', 1, 'FISICA	'),
('50000003309', 'NEPAL	', 1, 'FISICA	'),
('50000003317', 'EMIRATOS ARABES UNIDOS (Estado independiente)	', 1, 'FISICA	'),
('50000003325', 'PAKISTAN	', 1, 'FISICA	'),
('50000003333', 'SINGAPUR	', 1, 'FISICA	'),
('50000003341', 'SIRIA	', 1, 'FISICA	'),
('50000003376', 'VIETNAM	', 1, 'FISICA	'),
('50000003392', 'REPUBLICA DEL YEMEN	', 1, 'FISICA	'),
('50000003414', 'POS.BRITANICA (HONG KONG)	', 1, 'FISICA	'),
('50000003422', 'POS.JAPONESA (ASIA)	', 1, 'FISICA	'),
('50000003449', 'MACAO	', 1, 'FISICA	'),
('50000003457', 'BANGLADESH	', 1, 'FISICA	'),
('50000003503', 'TURQUIA	', 1, 'FISICA	'),
('50000003546', 'ITALIA	', 1, 'FISICA	'),
('50000003554', 'TURKMENISTAN	', 1, 'FISICA	'),
('50000003562', 'UZBEKISTAN	', 1, 'FISICA	'),
('50000003570', 'TERRITORIOS AUTONOMOS PALESTINOS	', 1, 'FISICA	'),
('50000003813', 'ISLANDIA	', 1, 'FISICA	'),
('50000003880', 'GEORGIA	', 1, 'FISICA	'),
('50000003899', 'TAYIKISTAN	', 1, 'FISICA	'),
('50000003902', 'AZERBAIDZHAN	', 1, 'FISICA	'),
('50000003910', 'BRUNEI DARUSSALAM (Estado independiente)	', 1, 'FISICA	'),
('50000003929', 'KAZAJSTAN	', 1, 'FISICA	'),
('50000003937', 'KIRGUISTAN	', 1, 'FISICA	'),
('50000003961', 'INDETERMINADO (ASIA)	', 1, 'FISICA	'),
('50000004011', 'REPUBLICA DE ALBANIA	', 1, 'FISICA	'),
('50000004046', 'PRINCIPADO DEL VALLE DE ANDORRA	', 1, 'FISICA	'),
('50000004054', 'AUSTRIA	', 1, 'FISICA	'),
('50000004062', 'BELGICA	', 1, 'FISICA	'),
('50000004070', 'BULGARIA	', 1, 'FISICA	'),
('50000004097', 'DINAMARCA	', 1, 'FISICA	'),
('50000004100', 'ESPAÃ‘A	', 1, 'FISICA	'),
('50000004119', 'FINLANDIA	', 1, 'FISICA	'),
('50000004127', 'FRANCIA	', 1, 'FISICA	'),
('50000004135', 'GRECIA	', 1, 'FISICA	'),
('50000004143', 'HUNGRIA	', 1, 'FISICA	'),
('50000004151', 'IRLANDA (EIRE)	', 1, 'FISICA	'),
('50000004186', 'PRINCIPADO DE LIECHTENSTEIN (Estado independiente)	', 1, 'FISICA	'),
('50000004194', 'GRAN DUCADO DE LUXEMBURGO	', 1, 'FISICA	'),
('50000004216', 'PRINCIPADO DE MONACO	', 1, 'FISICA	'),
('50000004224', 'NORUEGA	', 1, 'FISICA	'),
('50000004232', 'PAISES BAJOS	', 1, 'FISICA	'),
('50000004240', 'POLONIA	', 1, 'FISICA	'),
('50000004259', 'PORTUGAL	', 1, 'FISICA	'),
('50000004267', 'REINO UNIDO	', 1, 'FISICA	'),
('50000004275', 'RUMANIA	', 1, 'FISICA	'),
('50000004283', 'SERENISIMA REPUBLICA DE SAN MARINO (Estado independiente)	', 1, 'FISICA	'),
('50000004291', 'SUECIA	', 1, 'FISICA	'),
('50000004305', 'SUIZA	', 1, 'FISICA	'),
('50000004313', 'SANTA SEDE (VATICANO)	', 1, 'FISICA	'),
('50000004321', 'YUGOSLAVIA	', 1, 'FISICA	'),
('50000004364', 'REPUBLICA DE MALTA (Estado independiente)	', 1, 'FISICA	'),
('50000004380', 'ALEMANIA, REP. FED.	', 1, 'FISICA	'),
('50000004399', 'BIELORUSIA	', 1, 'FISICA	'),
('50000004402', 'ESTONIA	', 1, 'FISICA	'),
('50000004410', 'LETONIA	', 1, 'FISICA	'),
('50000004429', 'LITUANIA	', 1, 'FISICA	'),
('50000004437', 'MOLDOVA	', 1, 'FISICA	'),
('50000004461', 'BOSNIA HERZEGOVINA	', 1, 'FISICA	'),
('50000004496', 'ESLOVENIA	', 1, 'FISICA	'),
('50000004909', 'MACEDONIA	', 1, 'FISICA	'),
('50000004917', 'POS.BRITANICA (EUROPA)	', 1, 'FISICA	'),
('50000004984', 'INDETERMINADO (EUROPA)	', 1, 'FISICA	'),
('50000004992', 'AUSTRALIA	', 1, 'FISICA	'),
('50000005034', 'REPUBLICA DE NAURU (Estado independiente)	', 1, 'FISICA	'),
('50000005042', 'NUEVA ZELANDA	', 1, 'FISICA	'),
('50000005050', 'REPUBLICA DE VANUATU	', 1, 'FISICA	'),
('50000005069', 'SAMOA OCCIDENTAL	', 1, 'FISICA	'),
('50000005077', 'POS.AUSTRALIANA (OCEANIA)	', 1, 'FISICA	'),
('50000005085', 'POS.BRITANICA (OCEANIA)	', 1, 'FISICA	'),
('50000005093', 'POS.FRANCESA (OCEANIA)	', 1, 'FISICA	'),
('50000005107', 'POS.NEOCELANDESA (OCEANIA)	', 1, 'FISICA	'),
('50000005115', 'POS.E.E.U.U. (OCEANIA)	', 1, 'FISICA	'),
('50000005123', 'FIJI, ISLAS	', 1, 'FISICA	'),
('50000005131', 'PAPUA, ISLAS	', 1, 'FISICA	'),
('50000005166', 'KIRIBATI	', 1, 'FISICA	'),
('50000005174', 'TUVALU	', 1, 'FISICA	'),
('50000005182', 'ISLAS SALOMON	', 1, 'FISICA	'),
('50000005190', 'REINO DE TONGA (Estado independiente)	', 1, 'FISICA	'),
('50000005204', 'REPUBLICA DE LAS ISLAS MARSHALL (Estado independiente)	', 1, 'FISICA	'),
('50000005212', 'ISLAS MARIANAS	', 1, 'FISICA	'),
('50000005905', 'MICRONESIA ESTADOS FED.	', 1, 'FISICA	'),
('50000005913', 'PALAU	', 1, 'FISICA	'),
('50000005980', 'INDETERMINADO (OCEANIA)	', 1, 'FISICA	'),
('50000006014', 'RUSA, FEDERACION	', 1, 'FISICA	'),
('50000006022', 'ARMENIA	', 1, 'FISICA	'),
('50000006030', 'CROACIA	', 1, 'FISICA	'),
('50000006049', 'UCRANIA	', 1, 'FISICA	'),
('50000006057', 'CHECA, REPUBLICA	', 1, 'FISICA	'),
('50000006065', 'ESLOVACA, REPUBLICA	', 1, 'FISICA	'),
('50000006529', 'ANGUILA (Territorio no autÃ³nomo del Reino Unido)	', 1, 'FISICA	'),
('50000006537', 'ARUBA (Territorio de PaÃ­ses Bajos)	', 1, 'FISICA	'),
('50000006545', 'ISLAS DE COOK (Territorio autÃ³nomo asociado a Nueva Zelanda)	', 1, 'FISICA	'),
('50000006553', 'PATAU	', 1, 'FISICA	'),
('50000006561', 'POLINESIA FRANCESA (Territorio de Ultramar de Francia)	', 1, 'FISICA	'),
('50000006596', 'ANTILLAS HOLANDESAS (Territorio de PaÃ­ses Bajos)	', 1, 'FISICA	'),
('50000006626', 'ASCENCION	', 1, 'FISICA	'),
('50000006634', 'BERMUDAS (Territorio no autÃ³nomo del Reino Unido)	', 1, 'FISICA	'),
('50000006642', 'CAMPIONE D@ITALIA	', 1, 'FISICA	'),
('50000006650', 'COLONIA DE GIBRALTAR	', 1, 'FISICA	'),
('50000006669', 'GROENLANDIA	', 1, 'FISICA	'),
('50000006677', 'GUAM (Territorio no autÃ³nomo de los EEUU)	', 1, 'FISICA	'),
('50000006685', 'HONK KONG (Territorio de China)	', 1, 'FISICA	'),
('50000006693', 'ISLAS AZORES	', 1, 'FISICA	'),
('50000006707', 'ISLAS DEL CANAL:Guernesey,Jersey,Alderney,G.Stark,L.Sark,etc	', 1, 'FISICA	'),
('50000006715', 'ISLAS CAIMAN (Territorio no autÃ³nomo del Reino Unido)	', 1, 'FISICA	'),
('50000006723', 'ISLA CHRISTMAS	', 1, 'FISICA	'),
('50000006731', 'ISLA DE COCOS O KEELING	', 1, 'FISICA	'),
('50000006766', 'ISLA DE MAN (Territorio del Reino Unido)	', 1, 'FISICA	'),
('50000006774', 'ISLA DE NORFOLK	', 1, 'FISICA	'),
('50000006782', 'ISLAS TURKAS Y CAICOS (Territorio no autÃ³nomo del R. Unido)	', 1, 'FISICA	'),
('50000006790', 'ISLAS PACIFICO	', 1, 'FISICA	'),
('50000006804', 'ISLA DE SAN PEDRO Y MIGUELON	', 1, 'FISICA	'),
('50000006812', 'ISLA QESHM	', 1, 'FISICA	'),
('50000006820', 'ISLAS VIRGENES BRITANICAS(Territorio no autÃ³nomo de R.UNIDO)	', 1, 'FISICA	'),
('50000006839', 'ISLAS VIRGENES DE ESTADOS UNIDOS DE AMERICA	', 1, 'FISICA	'),
('50000006847', 'LABUAN	', 1, 'FISICA	'),
('50000006855', 'MADEIRA (Territorio de Portugal)	', 1, 'FISICA	'),
('50000006863', 'MONTSERRAT (Territorio no autÃ³nomo del Reino Unido)	', 1, 'FISICA	'),
('50000006871', 'NIUE	', 1, 'FISICA	'),
('50000006901', 'PITCAIRN	', 1, 'FISICA	'),
('50000006936', 'REGIMEN APLICABLE A LAS SA FINANCIERAS(ley 11.073 de la ROU)	', 1, 'FISICA	'),
('50000006944', 'SANTA ELENA	', 1, 'FISICA	'),
('50000006952', 'SAMOA AMERICANA (Territorio no autÃ³nomo de los EEUU)	', 1, 'FISICA	'),
('50000006960', 'ARCHIPIELAGO DE SVBALBARD	', 1, 'FISICA	'),
('50000006979', 'TRISTAN DA CUNHA	', 1, 'FISICA	'),
('50000006987', 'TRIESTE (Italia)	', 1, 'FISICA	'),
('50000006995', 'TOKELAU	', 1, 'FISICA	'),
('50000007002', 'ZONA LIBRE DE OSTRAVA (ciudad de la antigua Checoeslovaquia)	', 1, 'FISICA	'),
('50000009986', 'PARA PERSONAS FISICAS DE INDETERMINADO (CONTINENTE)	', 1, 'FISICA	'),
('50000009994', 'PARA PERSONAS FISICAS DE OTROS PAISES	', 1, 'FISICA	'),
('51600000016', 'URUGUAY	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600000024', 'PARAGUAY	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600000032', 'CHILE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600000040', 'BOLIVIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600000059', 'BRASIL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001012', 'BURKINA FASO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001020', 'ARGELIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001039', 'BOTSWANA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001047', 'BURUNDI	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001055', 'CAMERUN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001071', 'CENTRO AFRICANO, REP.	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001101', 'COSTA DE MARFIL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001136', 'EGIPTO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001144', 'ETIOPIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001152', 'GABON	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001160', 'GAMBIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001179', 'GHANA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001187', 'GUINEA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001195', 'GUINEA ECUATORIAL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001209', 'KENIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001217', 'LESOTHO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001225', 'REPUBLICA DE LIBERIA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001233', 'LIBIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001241', 'MADAGASCAR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001276', 'MARRUECOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001284', 'REPUBLICA DE MAURICIO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001292', 'MAURITANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001306', 'NIGER	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001314', 'NIGERIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001322', 'ZIMBABWE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001330', 'RUANDA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001349', 'SENEGAL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001357', 'SIERRA LEONA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001365', 'SOMALIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001373', 'REINO DE SWAZILANDIA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001381', 'SUDAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001403', 'TOGO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001411', 'REPUBLICA TUNECINA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001446', 'ZAMBIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001454', 'POS.BRITANICA (AFRICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001462', 'POS.ESPAÃ‘OLA (AFRICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001470', 'POS.FRANCESA (AFRICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001489', 'POS.PORTUGUESA (AFRICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001497', 'REPUBLICA DE ANGOLA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001500', 'REPUBLICA DE CABO VERDE (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001519', 'MOZAMBIQUE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001527', 'CONGO REP.POPULAR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001535', 'CHAD	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001543', 'MALAWI	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001551', 'TANZANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001586', 'COSTA RICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001616', 'ZAIRE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001624', 'BENIN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001632', 'MALI	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001705', 'UGANDA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001713', 'SUDAFRICA, REP. DE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001810', 'REPUBLICA DE SEYCHELLES (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001829', 'SANTO TOME Y PRINCIPE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001837', 'NAMIBIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001845', 'GUINEA BISSAU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001853', 'ERITREA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001861', 'REPUBLICA DE DJIBUTI (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001896', 'COMORAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600001985', 'INDETERMINADO (AFRICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002019', 'BARBADOS (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002043', 'CANADA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002051', 'COLOMBIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002094', 'DOMINICANA, REPUBLICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002116', 'EL SALVADOR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002124', 'ESTADOS UNIDOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002132', 'GUATEMALA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002140', 'REPUBLICA COOPERATIVA DE GUYANA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002159', 'HAITI	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002167', 'HONDURAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002175', 'JAMAICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002183', 'MEXICO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002191', 'NICARAGUA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002205', 'REPUBLICA DE PANAMA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002213', 'ESTADO LIBRE ASOCIADO DE PUERTO RICO (Estado asoc. a EEUU)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002221', 'PERU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002256', 'ANTIGUA Y BARBUDA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002264', 'VENEZUELA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002272', 'POS.BRITANICA (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002280', 'POS.DANESA (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002299', 'POS.FRANCESA (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002302', 'POS.PAISES BAJOS (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002310', 'POS.E.E.U.U. (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002329', 'SURINAME	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002337', 'EL COMMONWEALTH DE DOMINICA (Estado Asociado)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002345', 'SANTA LUCIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002353', 'SAN VICENTE Y LAS GRANADINAS (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002361', 'BELICE (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002396', 'CUBA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002426', 'ECUADOR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002434', 'REPUBLICA DE TRINIDAD Y TOBAGO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002825', 'BUTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002841', 'MYANMAR (EX BIRMANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002876', 'ISRAEL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002884', 'ESTADO ASOCIADO DE GRANADA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002892', 'FEDERACION DE SAN CRISTOBAL (Islas Saint Kitts and Nevis)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002906', 'COMUNIDAD DE LAS BAHAMAS (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002914', 'TAILANDIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002922', 'INDETERMINADO (AMERICA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002930', 'IRAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600002981', 'ESTADO DE QATAR (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003007', 'REINO HACHEMITA DE JORDANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003015', 'AFGANISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003023', 'ARABIA SAUDITA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003031', 'ESTADO DE BAHREIN (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003066', 'CAMBOYA (EX KAMPUCHEA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003074', 'REPUBLICA DEMOCRATICA SOCIALISTA DE SRI LANKA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003082', 'COREA DEMOCRATICA 	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003090', 'COREA REPUBLICANA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003104', 'CHINA REP.POPULAR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003112', 'REPUBLICA DE CHIPRE (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003120', 'FILIPINAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003139', 'TAIWAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003147', 'GAZA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003155', 'INDIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003163', 'INDONESIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003171', 'IRAK	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003201', 'JAPON	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003236', 'ESTADO DE KUWAIT (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003244', 'LAOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003252', 'LIBANO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003260', 'MALASIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003279', 'REPUBLICA DE MALDIVAS (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003287', 'SULTANATO DE OMAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003295', 'MONGOLIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003309', 'NEPAL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003317', 'EMIRATOS ARABES UNIDOS (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003325', 'PAKISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003333', 'SINGAPUR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003341', 'SIRIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003376', 'VIETNAM	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003392', 'REPUBLICA DEL YEMEN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003414', 'POS.BRITANICA (HONG KONG)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003422', 'POS.JAPONESA (ASIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003449', 'MACAO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003457', 'BANGLADESH	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003503', 'TURQUIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003546', 'ITALIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003554', 'TURKMENISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003562', 'UZBEKISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003570', 'TERRITORIOS AUTONOMOS PALESTINOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003813', 'ISLANDIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003880', 'GEORGIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003899', 'TAYIKISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003902', 'AZERBAIDZHAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003910', 'BRUNEI DARUSSALAM (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003929', 'KAZAJSTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003937', 'KIRGUISTAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600003961', 'INDETERMINADO (ASIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004011', 'REPUBLICA DE ALBANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004046', 'PRINCIPADO DEL VALLE DE ANDORRA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004054', 'AUSTRIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004062', 'BELGICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004070', 'BULGARIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004097', 'DINAMARCA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004100', 'ESPAÃ‘A	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004119', 'FINLANDIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004127', 'FRANCIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004135', 'GRECIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004143', 'HUNGRIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004151', 'IRLANDA (EIRE)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004186', 'PRINCIPADO DE LIECHTENSTEIN (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004194', 'GRAN DUCADO DE LUXEMBURGO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004216', 'PRINCIPADO DE MONACO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004224', 'NORUEGA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004232', 'PAISES BAJOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004240', 'POLONIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004259', 'PORTUGAL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004267', 'REINO UNIDO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004275', 'RUMANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004283', 'SERENISIMA REPUBLICA DE SAN MARINO (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004291', 'SUECIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004305', 'SUIZA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004313', 'SANTA SEDE (VATICANO)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004321', 'YUGOSLAVIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004364', 'REPUBLICA DE MALTA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004380', 'ALEMANIA, REP. FED.	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004399', 'BIELORUSIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004402', 'ESTONIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004410', 'LETONIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004429', 'LITUANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004437', 'MOLDOVA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004461', 'BOSNIA HERZEGOVINA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004496', 'ESLOVENIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004909', 'MACEDONIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004917', 'POS.BRITANICA (EUROPA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004984', 'INDETERMINADO (EUROPA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600004992', 'AUSTRALIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005034', 'REPUBLICA DE NAURU (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005042', 'NUEVA ZELANDA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005050', 'REPUBLICA DE VANUATU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005069', 'SAMOA OCCIDENTAL	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005077', 'POS.AUSTRALIANA (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005085', 'POS.BRITANICA (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005093', 'POS.FRANCESA (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005107', 'POS.NEOCELANDESA (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005115', 'POS.E.E.U.U. (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005123', 'FIJI, ISLAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005131', 'PAPUA, ISLAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005166', 'KIRIBATI	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005174', 'TUVALU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005182', 'ISLAS SALOMON	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005190', 'REINO DE TONGA (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005204', 'REPUBLICA DE LAS ISLAS MARSHALL (Estado independiente)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005212', 'ISLAS MARIANAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005905', 'MICRONESIA ESTADOS FEDERADOS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005913', 'PALAU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600005980', 'INDETERMINADO (OCEANIA)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006014', 'RUSA, FEDERACION	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006022', 'ARMENIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006030', 'CROACIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006049', 'UCRANIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006057', 'CHECA, REPUBLICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006065', 'ESLOVACA, REPUBLICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006529', 'ANGUILA (Territorio no autÃ³nomo del Reino Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006537', 'ARUBA (Territorio de PaÃ­ses Bajos)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006545', 'ISLAS DE COOK (Territorio autÃ³nomo asociado a Nueva Zelanda)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006553', 'PATAU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006561', 'POLINESIA FRANCESA (Territorio de Ultramar de Francia)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006596', 'ANTILLAS HOLANDESAS (Territorio de PaÃ­ses Bajos)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006626', 'ASCENCION	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006634', 'BERMUDAS (Territorio no autÃ³nomo del Reino Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006642', 'CAMPIONE D@ITALIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006650', 'COLONIA DE GIBRALTAR	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006669', 'GROENLANDIA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006677', 'GUAM (Territorio no autÃ³nomo de los EEUU)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006685', 'HONK KONG (Territorio de China)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006693', 'ISLAS AZORES	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006707', 'ISLAS DEL CANAL:Guernesey,Jersey,Alderney,G.Stark,L.Sark,etc	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006715', 'ISLAS CAIMAN (Territorio no autÃ³nomo del Reino Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006723', 'ISLA CHRISTMAS	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006731', 'ISLA DE COCOS O KEELING	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006766', 'ISLA DE MAN (Territorio del Reino Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006774', 'ISLA DE NORFOLK	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006782', 'ISLAS TURKAS Y CAICOS (Territorio no autÃ³nomo del R. Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006790', 'ISLAS PACIFICO	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006804', 'ISLA DE SAN PEDRO Y MIGUELON	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006812', 'ISLA QESHM	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006820', 'ISLAS VIRGENES BRITANICAS(Territorio no autÃ³nomo de R.UNIDO)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006839', 'ISLAS VIRGENES DE ESTADOS UNIDOS DE AMERICA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006847', 'LABUAN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006855', 'MADEIRA (Territorio de Portugal)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006863', 'MONTSERRAT (Territorio no autÃ³nomo del Reino Unido)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006871', 'NIUE	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006901', 'PITCAIRN	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006936', 'REGIMEN APLICABLE A LAS SA FINANCIERAS(ley 11.073 de la ROU)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006944', 'SANTA ELENA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006952', 'SAMOA AMERICANA (Territorio no autÃ³nomo de los EEUU)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006960', 'ARCHIPIELAGO DE SVBALBARD	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006979', 'TRISTAN DA CUNHA	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006987', 'TRIESTE (Italia)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600006995', 'TOKELAU	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600007002', 'ZONA LIBRE DE OSTRAVA (ciudad de la antigua Checoeslovaquia)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600009986', 'PARA PERSONAS FISICAS DE INDETERMINADO (CONTINENTE)	', 2, 'OTRO TIPO DE ENTIDAD'),
('51600009994', 'PARA PERSONAS FISICAS DE OTROS PAISES	', 2, 'OTRO TIPO DE ENTIDAD'),
('55000000018', 'URUGUAY	', 0, 'JURIDICA	'),
('55000000026', 'PARAGUAY	', 0, 'JURIDICA	'),
('55000000034', 'CHILE	', 0, 'JURIDICA	'),
('55000000042', 'BOLIVIA	', 0, 'JURIDICA	'),
('55000000050', 'BRASIL	', 0, 'JURIDICA	'),
('55000001014', 'BURKINA FASO	', 0, 'JURIDICA	'),
('55000001022', 'ARGELIA	', 0, 'JURIDICA	'),
('55000001030', 'BOTSWANA	', 0, 'JURIDICA	'),
('55000001049', 'BURUNDI	', 0, 'JURIDICA	'),
('55000001057', 'CAMERUN	', 0, 'JURIDICA	'),
('55000001073', 'CENTRO AFRICANO, REP.	', 0, 'JURIDICA	'),
('55000001103', 'COSTA DE MARFIL	', 0, 'JURIDICA	'),
('55000001138', 'EGIPTO	', 0, 'JURIDICA	'),
('55000001146', 'ETIOPIA	', 0, 'JURIDICA	'),
('55000001154', 'GABON	', 0, 'JURIDICA	'),
('55000001162', 'GAMBIA	', 0, 'JURIDICA	'),
('55000001170', 'GHANA	', 0, 'JURIDICA	'),
('55000001189', 'GUINEA	', 0, 'JURIDICA	'),
('55000001197', 'GUINEA ECUATORIAL	', 0, 'JURIDICA	'),
('55000001200', 'KENIA	', 0, 'JURIDICA	'),
('55000001219', 'LESOTHO	', 0, 'JURIDICA	'),
('55000001227', 'REPUBLICA DE LIBERIA (Estado independiente)	', 0, 'JURIDICA	'),
('55000001235', 'LIBIA	', 0, 'JURIDICA	'),
('55000001243', 'MADAGASCAR	', 0, 'JURIDICA	'),
('55000001278', 'MARRUECOS	', 0, 'JURIDICA	'),
('55000001286', 'REPUBLICA DE MAURICIO	', 0, 'JURIDICA	'),
('55000001294', 'MAURITANIA	', 0, 'JURIDICA	'),
('55000001308', 'NIGER	', 0, 'JURIDICA	'),
('55000001316', 'NIGERIA	', 0, 'JURIDICA	'),
('55000001324', 'ZIMBABWE	', 0, 'JURIDICA	'),
('55000001332', 'RUANDA	', 0, 'JURIDICA	'),
('55000001340', 'SENEGAL	', 0, 'JURIDICA	'),
('55000001359', 'SIERRA LEONA	', 0, 'JURIDICA	'),
('55000001367', 'SOMALIA	', 0, 'JURIDICA	'),
('55000001375', 'REINO DE SWAZILANDIA (Estado independiente)	', 0, 'JURIDICA	'),
('55000001383', 'SUDAN	', 0, 'JURIDICA	'),
('55000001405', 'TOGO	', 0, 'JURIDICA	'),
('55000001413', 'REPUBLICA TUNECINA	', 0, 'JURIDICA	'),
('55000001448', 'ZAMBIA	', 0, 'JURIDICA	'),
('55000001456', 'POS.BRITANICA (AFRICA)	', 0, 'JURIDICA	'),
('55000001464', 'POS.ESPAÃ‘OLA (AFRICA)	', 0, 'JURIDICA	'),
('55000001472', 'POS.FRANCESA (AFRICA)	', 0, 'JURIDICA	'),
('55000001480', 'POS.PORTUGUESA (AFRICA)	', 0, 'JURIDICA	'),
('55000001499', 'REPUBLICA DE ANGOLA	', 0, 'JURIDICA	'),
('55000001502', 'REPUBLICA DE CABO VERDE (Estado independiente)	', 0, 'JURIDICA	'),
('55000001510', 'MOZAMBIQUE	', 0, 'JURIDICA	'),
('55000001529', 'CONGO REP.POPULAR	', 0, 'JURIDICA	'),
('55000001537', 'CHAD	', 0, 'JURIDICA	'),
('55000001545', 'MALAWI	', 0, 'JURIDICA	'),
('55000001553', 'TANZANIA	', 0, 'JURIDICA	'),
('55000001588', 'COSTA RICA	', 0, 'JURIDICA	'),
('55000001618', 'ZAIRE	', 0, 'JURIDICA	'),
('55000001626', 'BENIN	', 0, 'JURIDICA	'),
('55000001634', 'MALI	', 0, 'JURIDICA	'),
('55000001707', 'UGANDA	', 0, 'JURIDICA	'),
('55000001715', 'SUDAFRICA, REP. DE	', 0, 'JURIDICA	'),
('55000001812', 'REPUBLICA DE SEYCHELLES (Estado independiente)	', 0, 'JURIDICA	'),
('55000001820', 'SANTO TOME Y PRINCIPE	', 0, 'JURIDICA	'),
('55000001839', 'NAMIBIA	', 0, 'JURIDICA	'),
('55000001847', 'GUINEA BISSAU	', 0, 'JURIDICA	'),
('55000001855', 'ERITREA	', 0, 'JURIDICA	'),
('55000001863', 'REPUBLICA DE DJIBUTI (Estado independiente)	', 0, 'JURIDICA	'),
('55000001898', 'COMORAS	', 0, 'JURIDICA	'),
('55000001987', 'INDETERMINADO (AFRICA)	', 0, 'JURIDICA	'),
('55000002010', 'BARBADOS (Estado independiente)	', 0, 'JURIDICA	'),
('55000002045', 'CANADA	', 0, 'JURIDICA	'),
('55000002053', 'COLOMBIA	', 0, 'JURIDICA	'),
('55000002096', 'DOMINICANA, REPUBLICA	', 0, 'JURIDICA	'),
('55000002118', 'EL SALVADOR	', 0, 'JURIDICA	'),
('55000002126', 'ESTADOS UNIDOS	', 0, 'JURIDICA	'),
('55000002134', 'GUATEMALA	', 0, 'JURIDICA	'),
('55000002142', 'REPUBLICA COOPERATIVA DE GUYANA (Estado independiente)	', 0, 'JURIDICA	'),
('55000002150', 'HAITI	', 0, 'JURIDICA	'),
('55000002169', 'HONDURAS	', 0, 'JURIDICA	'),
('55000002177', 'JAMAICA	', 0, 'JURIDICA	'),
('55000002185', 'MEXICO	', 0, 'JURIDICA	'),
('55000002193', 'NICARAGUA	', 0, 'JURIDICA	'),
('55000002207', 'REPUBLICA DE PANAMA (Estado independiente)	', 0, 'JURIDICA	'),
('55000002215', 'ESTADO LIBRE ASOCIADO DE PUERTO RICO (Estado asoc. a EEUU)	', 0, 'JURIDICA	'),
('55000002223', 'PERU	', 0, 'JURIDICA	'),
('55000002258', 'ANTIGUA Y BARBUDA (Estado independiente)	', 0, 'JURIDICA	'),
('55000002266', 'VENEZUELA	', 0, 'JURIDICA	'),
('55000002274', 'POS.BRITANICA (AMERICA)	', 0, 'JURIDICA	'),
('55000002282', 'POS.DANESA (AMERICA)	', 0, 'JURIDICA	'),
('55000002290', 'POS.FRANCESA (AMERICA)	', 0, 'JURIDICA	'),
('55000002304', 'POS.PAISES BAJOS (AMERICA)	', 0, 'JURIDICA	'),
('55000002312', 'POS.E.E.U.U. (AMERICA)	', 0, 'JURIDICA	'),
('55000002320', 'SURINAME	', 0, 'JURIDICA	'),
('55000002339', 'EL COMMONWEALTH DE DOMINICA (Estado Asociado)	', 0, 'JURIDICA	'),
('55000002347', 'SANTA LUCIA	', 0, 'JURIDICA	'),
('55000002355', 'SAN VICENTE Y LAS GRANADINAS (Estado independiente)	', 0, 'JURIDICA	'),
('55000002363', 'BELICE (Estado independiente)	', 0, 'JURIDICA	'),
('55000002398', 'CUBA	', 0, 'JURIDICA	'),
('55000002428', 'ECUADOR	', 0, 'JURIDICA	'),
('55000002436', 'REPUBLICA DE TRINIDAD Y TOBAGO	', 0, 'JURIDICA	'),
('55000002827', 'BUTAN	', 0, 'JURIDICA	'),
('55000002843', 'MYANMAR (EX BIRMANIA)	', 0, 'JURIDICA	'),
('55000002878', 'ISRAEL	', 0, 'JURIDICA	'),
('55000002884', 'ESTADO ASOCIADO DE GRANADA (Estado independiente)	', 0, 'JURIDICA	'),
('55000002894', 'FEDERACION DE SAN CRISTOBAL (Islas Saint Kitts and Nevis)	', 0, 'JURIDICA	'),
('55000002908', 'COMUNIDAD DE LAS BAHAMAS (Estado independiente)	', 0, 'JURIDICA	'),
('55000002916', 'TAILANDIA	', 0, 'JURIDICA	'),
('55000002924', 'INDETERMINADO (AMERICA)	', 0, 'JURIDICA	'),
('55000002932', 'IRAN	', 0, 'JURIDICA	'),
('55000002983', 'ESTADO DE QATAR (Estado independiente)	', 0, 'JURIDICA	'),
('55000003009', 'REINO HACHEMITA DE JORDANIA	', 0, 'JURIDICA	'),
('55000003017', 'AFGANISTAN	', 0, 'JURIDICA	'),
('55000003025', 'ARABIA SAUDITA	', 0, 'JURIDICA	'),
('55000003033', 'ESTADO DE BAHREIN (Estado independiente)	', 0, 'JURIDICA	'),
('55000003068', 'CAMBOYA (EX KAMPUCHEA)	', 0, 'JURIDICA	'),
('55000003076', 'REPUBLICA DEMOCRATICA SOCIALISTA DE SRI LANKA	', 0, 'JURIDICA	'),
('55000003084', 'COREA DEMOCRATICA 	', 0, 'JURIDICA	'),
('55000003092', 'COREA REPUBLICANA	', 0, 'JURIDICA	'),
('55000003106', 'CHINA REP.POPULAR	', 0, 'JURIDICA	'),
('55000003114', 'REPUBLICA DE CHIPRE (Estado independiente)	', 0, 'JURIDICA	'),
('55000003122', 'FILIPINAS	', 0, 'JURIDICA	'),
('55000003130', 'TAIWAN	', 0, 'JURIDICA	'),
('55000003149', 'GAZA	', 0, 'JURIDICA	'),
('55000003157', 'INDIA	', 0, 'JURIDICA	'),
('55000003165', 'INDONESIA	', 0, 'JURIDICA	'),
('55000003173', 'IRAK	', 0, 'JURIDICA	'),
('55000003203', 'JAPON	', 0, 'JURIDICA	'),
('55000003238', 'ESTADO DE KUWAIT (Estado independiente)	', 0, 'JURIDICA	'),
('55000003246', 'LAOS	', 0, 'JURIDICA	'),
('55000003254', 'LIBANO	', 0, 'JURIDICA	'),
('55000003262', 'MALASIA	', 0, 'JURIDICA	'),
('55000003270', 'REPUBLICA DE MALDIVAS (Estado independiente)	', 0, 'JURIDICA	'),
('55000003289', 'SULTANATO DE OMAN	', 0, 'JURIDICA	'),
('55000003297', 'MONGOLIA	', 0, 'JURIDICA	'),
('55000003300', 'NEPAL	', 0, 'JURIDICA	'),
('55000003319', 'EMIRATOS ARABES UNIDOS (Estado independiente)	', 0, 'JURIDICA	'),
('55000003327', 'PAKISTAN	', 0, 'JURIDICA	'),
('55000003335', 'SINGAPUR	', 0, 'JURIDICA	'),
('55000003343', 'SIRIA	', 0, 'JURIDICA	'),
('55000003378', 'VIETNAM	', 0, 'JURIDICA	'),
('55000003394', 'REPUBLICA DEL YEMEN	', 0, 'JURIDICA	'),
('55000003416', 'POS.BRITANICA (HONG KONG)	', 0, 'JURIDICA	'),
('55000003424', 'POS.JAPONESA (ASIA)	', 0, 'JURIDICA	'),
('55000003440', 'MACAO	', 0, 'JURIDICA	'),
('55000003459', 'BANGLADESH	', 0, 'JURIDICA	'),
('55000003505', 'TURQUIA	', 0, 'JURIDICA	'),
('55000003548', 'ITALIA	', 0, 'JURIDICA	'),
('55000003556', 'TURKMENISTAN	', 0, 'JURIDICA	'),
('55000003564', 'UZBEKISTAN	', 0, 'JURIDICA	'),
('55000003572', 'TERRITORIOS AUTONOMOS PALESTINOS	', 0, 'JURIDICA	'),
('55000003815', 'ISLANDIA	', 0, 'JURIDICA	'),
('55000003882', 'GEORGIA	', 0, 'JURIDICA	'),
('55000003890', 'TAYIKISTAN	', 0, 'JURIDICA	'),
('55000003904', 'AZERBAIDZHAN	', 0, 'JURIDICA	'),
('55000003912', 'BRUNEI DARUSSALAM (Estado independiente)	', 0, 'JURIDICA	'),
('55000003920', 'KAZAJSTAN	', 0, 'JURIDICA	'),
('55000003939', 'KIRGUISTAN	', 0, 'JURIDICA	'),
('55000003963', 'INDETERMINADO (ASIA)	', 0, 'JURIDICA	'),
('55000004013', 'REPUBLICA DE ALBANIA	', 0, 'JURIDICA	'),
('55000004048', 'PRINCIPADO DEL VALLE DE ANDORRA	', 0, 'JURIDICA	'),
('55000004056', 'AUSTRIA	', 0, 'JURIDICA	'),
('55000004064', 'BELGICA	', 0, 'JURIDICA	'),
('55000004072', 'BULGARIA	', 0, 'JURIDICA	'),
('55000004099', 'DINAMARCA	', 0, 'JURIDICA	'),
('55000004102', 'ESPAÃ‘A	', 0, 'JURIDICA	'),
('55000004110', 'FINLANDIA	', 0, 'JURIDICA	'),
('55000004129', 'FRANCIA	', 0, 'JURIDICA	'),
('55000004137', 'GRECIA	', 0, 'JURIDICA	'),
('55000004145', 'HUNGRIA	', 0, 'JURIDICA	'),
('55000004153', 'IRLANDA (EIRE)	', 0, 'JURIDICA	'),
('55000004188', 'PRINCIPADO DE LIECHTENSTEIN (Estado independiente)	', 0, 'JURIDICA	'),
('55000004196', 'GRAN DUCADO DE LUXEMBURGO	', 0, 'JURIDICA	'),
('55000004218', 'PRINCIPADO DE MONACO	', 0, 'JURIDICA	'),
('55000004226', 'NORUEGA	', 0, 'JURIDICA	'),
('55000004234', 'PAISES BAJOS	', 0, 'JURIDICA	'),
('55000004242', 'POLONIA	', 0, 'JURIDICA	'),
('55000004250', 'PORTUGAL	', 0, 'JURIDICA	'),
('55000004269', 'REINO UNIDO	', 0, 'JURIDICA	'),
('55000004277', 'RUMANIA	', 0, 'JURIDICA	'),
('55000004285', 'SERENISIMA REPUBLICA DE SAN MARINO (Estado independiente)	', 0, 'JURIDICA	'),
('55000004293', 'SUECIA	', 0, 'JURIDICA	'),
('55000004307', 'SUIZA	', 0, 'JURIDICA	'),
('55000004315', 'SANTA SEDE (VATICANO)	', 0, 'JURIDICA	'),
('55000004323', 'YUGOSLAVIA	', 0, 'JURIDICA	'),
('55000004366', 'REPUBLICA DE MALTA (Estado independiente)	', 0, 'JURIDICA	'),
('55000004382', 'ALEMANIA, REP. FED.	', 0, 'JURIDICA	'),
('55000004390', 'BIELORUSIA	', 0, 'JURIDICA	'),
('55000004404', 'ESTONIA	', 0, 'JURIDICA	'),
('55000004412', 'LETONIA	', 0, 'JURIDICA	'),
('55000004420', 'LITUANIA	', 0, 'JURIDICA	'),
('55000004439', 'MOLDOVA	', 0, 'JURIDICA	'),
('55000004463', 'BOSNIA HERZEGOVINA	', 0, 'JURIDICA	'),
('55000004498', 'ESLOVENIA	', 0, 'JURIDICA	'),
('55000004900', 'MACEDONIA	', 0, 'JURIDICA	'),
('55000004919', 'POS.BRITANICA (EUROPA)	', 0, 'JURIDICA	'),
('55000004986', 'INDETERMINADO (EUROPA)	', 0, 'JURIDICA	'),
('55000004994', 'AUSTRALIA	', 0, 'JURIDICA	'),
('55000005036', 'REPUBLICA DE NAURU (Estado independiente)	', 0, 'JURIDICA	'),
('55000005044', 'NUEVA ZELANDA	', 0, 'JURIDICA	'),
('55000005052', 'REPUBLICA DE VANUATU	', 0, 'JURIDICA	'),
('55000005069', 'SAMOA OCCIDENTAL	', 0, 'JURIDICA	'),
('55000005079', 'POS.AUSTRALIANA (OCEANIA)	', 0, 'JURIDICA	'),
('55000005087', 'POS.BRITANICA (OCEANIA)	', 0, 'JURIDICA	'),
('55000005095', 'POS.FRANCESA (OCEANIA)	', 0, 'JURIDICA	'),
('55000005109', 'POS.NEOCELANDESA (OCEANIA)	', 0, 'JURIDICA	'),
('55000005117', 'POS.E.E.U.U. (OCEANIA)	', 0, 'JURIDICA	'),
('55000005125', 'FIJI, ISLAS	', 0, 'JURIDICA	'),
('55000005133', 'PAPUA, ISLAS	', 0, 'JURIDICA	'),
('55000005168', 'KIRIBATI	', 0, 'JURIDICA	'),
('55000005176', 'TUVALU	', 0, 'JURIDICA	'),
('55000005184', 'ISLAS SALOMON	', 0, 'JURIDICA	'),
('55000005192', 'REINO DE TONGA (Estado independiente)	', 0, 'JURIDICA	'),
('55000005206', 'REPUBLICA DE LAS ISLAS MARSHALL (Estado independiente)	', 0, 'JURIDICA	'),
('55000005214', 'ISLAS MARIANAS	', 0, 'JURIDICA	'),
('55000005907', 'MICRONESIA ESTADOS FED.	', 0, 'JURIDICA	'),
('55000005915', 'PALAU	', 0, 'JURIDICA	'),
('55000005982', 'INDETERMINADO (OCEANIA)	', 0, 'JURIDICA	'),
('55000006016', 'RUSA, FEDERACION	', 0, 'JURIDICA	'),
('55000006024', 'ARMENIA	', 0, 'JURIDICA	'),
('55000006032', 'CROACIA	', 0, 'JURIDICA	'),
('55000006040', 'UCRANIA	', 0, 'JURIDICA	'),
('55000006059', 'CHECA, REPUBLICA	', 0, 'JURIDICA	'),
('55000006067', 'ESLOVACA, REPUBLICA	', 0, 'JURIDICA	'),
('55000006520', 'ANGUILA (Territorio no autÃ³nomo del Reino Unido)	', 0, 'JURIDICA	'),
('55000006539', 'ARUBA (Territorio de PaÃ­ses Bajos)	', 0, 'JURIDICA	'),
('55000006547', 'ISLAS DE COOK (Territorio autÃ³nomo asociado a Nueva Zelanda)	', 0, 'JURIDICA	'),
('55000006555', 'PATAU	', 0, 'JURIDICA	'),
('55000006563', 'POLINESIA FRANCESA (Territorio de Ultramar de Francia)	', 0, 'JURIDICA	'),
('55000006598', 'ANTILLAS HOLANDESAS (Territorio de PaÃ­ses Bajos)	', 0, 'JURIDICA	'),
('55000006628', 'ASCENCION	', 0, 'JURIDICA	'),
('55000006636', 'BERMUDAS (Territorio no autÃ³nomo del Reino Unido)	', 0, 'JURIDICA	'),
('55000006644', 'CAMPIONE D@ITALIA	', 0, 'JURIDICA	'),
('55000006652', 'COLONIA DE GIBRALTAR	', 0, 'JURIDICA	'),
('55000006660', 'GROENLANDIA	', 0, 'JURIDICA	'),
('55000006679', 'GUAM (Territorio no autÃ³nomo de los EEUU)	', 0, 'JURIDICA	'),
('55000006687', 'HONK KONG (Territorio de China)	', 0, 'JURIDICA	'),
('55000006695', 'ISLAS AZORES	', 0, 'JURIDICA	'),
('55000006709', 'ISLAS DEL CANAL:Guernesey,Jersey,Alderney,G.Stark,L.Sark,etc	', 0, 'JURIDICA	'),
('55000006717', 'ISLAS CAIMAN (Territorio no autÃ³nomo del Reino Unido)	', 0, 'JURIDICA	'),
('55000006725', 'ISLA CHRISTMAS	', 0, 'JURIDICA	'),
('55000006733', 'ISLA DE COCOS O KEELING	', 0, 'JURIDICA	'),
('55000006768', 'ISLA DE MAN (Territorio del Reino Unido)	', 0, 'JURIDICA	'),
('55000006776', 'ISLA DE NORFOLK	', 0, 'JURIDICA	'),
('55000006784', 'ISLAS TURKAS Y CAICOS (Territorio no autÃ³nomo del R. Unido)	', 0, 'JURIDICA	'),
('55000006792', 'ISLAS PACIFICO	', 0, 'JURIDICA	'),
('55000006806', 'ISLA DE SAN PEDRO Y MIGUELON	', 0, 'JURIDICA	'),
('55000006814', 'ISLA QESHM	', 0, 'JURIDICA	'),
('55000006822', 'ISLAS VIRGENES BRITANICAS(Territorio no autÃ³nomo de R.UNIDO)	', 0, 'JURIDICA	'),
('55000006830', 'ISLAS VIRGENES DE ESTADOS UNIDOS DE AMERICA	', 0, 'JURIDICA	'),
('55000006849', 'LABUAN	', 0, 'JURIDICA	'),
('55000006857', 'MADEIRA (Territorio de Portugal)	', 0, 'JURIDICA	'),
('55000006865', 'MONTSERRAT (Territorio no autÃ³nomo del Reino Unido)	', 0, 'JURIDICA	'),
('55000006873', 'NIUE	', 0, 'JURIDICA	'),
('55000006903', 'PITCAIRN	', 0, 'JURIDICA	'),
('55000006938', 'REGIMEN APLICABLE A LAS SA FINANCIERAS(ley 11.073 de la ROU)	', 0, 'JURIDICA	'),
('55000006946', 'SANTA ELENA	', 0, 'JURIDICA	'),
('55000006954', 'SAMOA AMERICANA (Territorio no autÃ³nomo de los EEUU)	', 0, 'JURIDICA	'),
('55000006962', 'ARCHIPIELAGO DE SVBALBARD	', 0, 'JURIDICA	'),
('55000006970', 'TRISTAN DA CUNHA	', 0, 'JURIDICA	'),
('55000006989', 'TRIESTE (Italia)	', 0, 'JURIDICA	'),
('55000006997', 'TOKELAU	', 0, 'JURIDICA	'),
('55000007004', 'ZONA LIBRE DE OSTRAVA (ciudad de la antigua Checoeslovaquia)	', 0, 'JURIDICA	'),
('55000009988', 'PARA PERSONAS FISICAS DE INDETERMINADO (CONTINENTE)	', 0, 'JURIDICA	'),
('55000009996', 'PARA PERSONAS FISICAS DE OTROS PAISES	', 0, 'JURIDICA	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `id` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `boleta` int(11) DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `efectivo` decimal(14,2) DEFAULT NULL,
  `total_cheques` decimal(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `descripcion`) VALUES
(1, 'Bienes de Uso'),
(2, 'Bienes de Cambio'),
(3, 'Servicios'),
(4, 'Locaciones'),
(5, 'Gastos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incoterms`
--

CREATE TABLE `incoterms` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `incoterms`
--

INSERT INTO `incoterms` (`id`, `descripcion`) VALUES
(4, 'Cost and Freight'),
(5, 'Cost, Insurance and Freight'),
(6, 'Carriage and Insurance Paid To'),
(7, 'Carriage Paid To'),
(8, 'Delivered At Frontier'),
(9, 'Delivered At Port'),
(10, 'Delivered Duty Paid'),
(11, 'Delivered Duty Unpaid'),
(12, 'Delivered Ex Quay'),
(13, 'Delivered Ex Ship'),
(14, 'Ex Works'),
(15, 'Free Alongside Ship'),
(16, 'Free Carrier'),
(17, 'Free On Board');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_tipo_manten` int(11) NOT NULL,
  `fecha_revision` date DEFAULT NULL,
  `kms_revision` decimal(9,0) DEFAULT NULL,
  `importe` decimal(12,2) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `fecha_ult_revision` date DEFAULT NULL,
  `dias_vencimiento` int(11) DEFAULT NULL,
  `fecha_siguiente_revision` date DEFAULT NULL,
  `km_ult_revision` decimal(9,0) DEFAULT NULL,
  `km_vto` decimal(9,0) DEFAULT NULL,
  `km_siguiente_revision` decimal(9,0) DEFAULT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedas`
--

CREATE TABLE `monedas` (
  `id` char(3) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monedas`
--

INSERT INTO `monedas` (`id`, `descripcion`) VALUES
('000', 'OTRAS MONEDAS '),
('002', 'DÃ³lar EEUU LIBRE '),
('003', 'FRANCOS FRANCESES '),
('004', 'LIRAS ITALIANAS '),
('005', 'PESETAS '),
('006', 'MARCOS ALEMANES '),
('007', 'FLORINES HOLANDESES '),
('008', 'FRANCOS BELGAS '),
('009', 'FRANCOS SUIZOS '),
('010', 'PESOS MEJICANOS '),
('011', 'PESOS URUGUAYOS '),
('012', 'REAL '),
('013', 'ESCUDOS PORTUGUESES '),
('014', 'CORONAS DANESAS '),
('015', 'CORONAS NORUEGAS '),
('016', 'CORONAS SUECAS '),
('017', 'CHELINES AUTRIACOS '),
('018', 'DÃ³lar CANADIENSE '),
('019', 'YENS '),
('021', 'LIBRA ESTERLINA '),
('022', 'MARCOS FINLANDESES '),
('023', 'BOLIVAR (VENEZOLANO)'),
('024', 'CORONA CHECA '),
('025', 'DINAR (YUGOSLAVO) '),
('026', 'DÃ³lar AUSTRALIANO '),
('027', 'DRACMA (GRIEGO) '),
('028', 'FLORIN (ANTILLAS HOLA '),
('029', 'GUARANI '),
('030', 'SHEKEL (ISRAEL) '),
('031', 'PESO BOLIVIANO '),
('032', 'PESO COLOMBIANO '),
('033', 'PESO CHILENO '),
('034', 'RAND (SUDAFRICANO)'),
('035', 'NUEVO SOL PERUANO '),
('036', 'SUCRE (ECUATORIANO) '),
('040', 'LEI RUMANOS '),
('041', 'DERECHOS ESPECIALES DE GIRO '),
('042', 'PESOS DOMINICANOS '),
('043', 'BALBOAS PANAMEÃ‘AS '),
('044', 'CORDOBAS NICARAGÃ›ENSES '),
('045', 'DIRHAM MARROQUÃES '),
('046', 'LIBRAS EGIPCIAS '),
('047', 'RIYALS SAUDITAS '),
('048', 'BRANCOS BELGAS FINANCIERAS'),
('049', 'GRAMOS DE ORO FINO '),
('050', 'LIBRAS IRLANDESAS '),
('051', 'DÃ³lar DE HONG KONG'),
('052', 'DÃ³lar DE SINGAPUR '),
('053', 'DÃ³lar DE JAMAICA '),
('054', 'DÃ³lar DE TAIWAN '),
('055', 'QUETZAL (GUATEMALTECOS) '),
('056', 'FORINT (HUNGRIA) '),
('057', 'BAHT (TAILANDIA) '),
('058', 'ECU '),
('059', 'DINAR KUWAITI '),
('060', 'EURO '),
('061', 'ZLTYS POLACOS '),
('062', 'RUPIAS HINDÃšES '),
('063', 'LEMPIRAS HONDUREÃ‘AS '),
('064', 'YUAN (Rep. Pop. China)'),
('DOL', 'DÃ³lar ESTADOUNIDENSE '),
('PES', 'PESOS ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mov_bancos`
--

CREATE TABLE `mov_bancos` (
  `id` int(11) NOT NULL,
  `id_operacion_bancaria` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `debe` decimal(14,2) DEFAULT NULL,
  `haber` decimal(14,2) DEFAULT NULL,
  `id_caja` int(11) DEFAULT NULL,
  `id_banco` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_banco_dest` int(11) DEFAULT NULL,
  `id_cuenta_dest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mov_bancos`
--

INSERT INTO `mov_bancos` (`id`, `id_operacion_bancaria`, `descripcion`, `fecha`, `debe`, `haber`, `id_caja`, `id_banco`, `id_cuenta`, `id_banco_dest`, `id_cuenta_dest`) VALUES
(1, 1, 'DEPOSITO AL 12''999', '2015-11-10', NULL, '12000.00', 1, 1, 1, NULL, NULL),
(2, 2, 'EXTRACCION PARA COMPRAR SANDIAS', '2015-11-10', '100.00', NULL, 1, 1, 1, NULL, NULL),
(3, 11, 'A FAVOR DE PETROVALLE S.A.', '2015-11-10', '5200.00', NULL, 1, 1, 1, NULL, NULL),
(4, 2, 'PARA PAGAR GASTOS MENORES', '2015-12-25', '550.00', NULL, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `id` int(11) NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alegato` longtext COLLATE utf8_spanish_ci,
  `importe` decimal(12,2) DEFAULT NULL,
  `fecha_venc` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `observaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `multas`
--

INSERT INTO `multas` (`id`, `id_chofer`, `fecha`, `descripcion`, `alegato`, `importe`, `fecha_venc`, `fecha_pago`, `observaciones`) VALUES
(1, 1, '2015-12-01', 'paso semáforo en rojo', 'no vio por la niebla', '12500.00', '2015-12-16', '2015-12-16', 'por desatento'),
(2, 2, '2015-12-24', 'NO SE DETUVO EN UNA SEÃ‘AL DE STOP', 'NO SABÃA QUE TENIA QUE PARAR', '500.00', NULL, '2015-12-02', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones_bancarias`
--

CREATE TABLE `operaciones_bancarias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `operaciones_bancarias`
--

INSERT INTO `operaciones_bancarias` (`id`, `descripcion`) VALUES
(1, 'DepÃ³sito Bancario'),
(2, 'ExtracciÃ³n Bancaria'),
(3, 'Gasto Bancario'),
(4, 'Impuesto'),
(5, 'RetenciÃ³n'),
(6, 'PercepciÃ³n'),
(7, 'Cheque Rechazado'),
(8, 'Ajuste de Saldo'),
(9, 'Clearing Recibido'),
(10, 'Cheque Pagador'),
(11, 'Transferencia Bancaria'),
(12, 'AcreditaciÃ³n de Haberes'),
(13, 'CancelaciÃ³n Numerales'),
(14, 'CancelaciÃ³n PrÃ©stamo'),
(15, 'ComisiÃ³n Mantenimiento de Cuenta'),
(16, 'ComisiÃ³n ReimpresiÃ³n Tarjeta'),
(17, 'Compra MAESTRO'),
(18, 'DÃ©bito Transferencia'),
(19, 'DÃ©bito IVA 5% Compra MAESTRO'),
(20, 'ExtracciÃ³n con Tarjeta'),
(21, 'ExtracciÃ³n Red LInk'),
(22, 'Intereses Capitalizados'),
(23, 'Pago LINK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion_cond_iva`
--

CREATE TABLE `operacion_cond_iva` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `alicuota` decimal(6,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `operacion_cond_iva`
--

INSERT INTO `operacion_cond_iva` (`id`, `descripcion`, `alicuota`) VALUES
(1, 'No Gravado', '0.0000'),
(2, 'Exento', '0.0000'),
(3, '0%', '0.0000'),
(4, '10,50%', '10.5000'),
(5, '21%', '21.0000'),
(6, '27%', '27.0000'),
(8, '5%', '5.0000'),
(9, '2,50%', '2.5000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `denominacion`, `descripcion`) VALUES
(101, 'BURKINA FASO	', 'BURKINA FASO	'),
(102, 'ARGELIA	', 'ARGELIA	'),
(103, 'BOTSWANA	', 'BOTSWANA	'),
(104, 'BURUNDI	', 'BURUNDI	'),
(105, 'CAMERUN	', 'CAMERUN	'),
(107, 'REP. CENTROAFRICANA.	', 'REP.CENTROAFRICANA	'),
(108, 'CONGO	', 'CONGO	'),
(109, 'REP.DEMOCRAT.DEL CONGO EX ZAIRE	', 'REP. DEMOCRAT. DEL CONGO EX ZAIRE	'),
(110, 'COSTA DE MARFIL	', 'COSTA DE MARFIL	'),
(111, 'CHAD	', 'CHAD	'),
(112, 'BENIN	', 'BENIN	'),
(113, 'EGIPTO	', 'EGIPTO	'),
(115, 'GABON	', 'GABON	'),
(116, 'GAMBIA	', 'GAMBIA	'),
(117, 'GHANA	', 'GHANA	'),
(118, 'GUINEA	', 'GUINEA	'),
(119, 'GUINEA ECUATORIAL	', 'GUINEA ECUATORIAL	'),
(120, 'KENYA	', 'KENYA	'),
(121, 'LESOTHO	', 'LESOTHO	'),
(122, 'LIBERIA	', 'LIBERIA	'),
(123, 'LIBIA	', 'LIBIA	'),
(124, 'MADAGASCAR	', 'MADAGASCAR	'),
(125, 'MALAWI	', 'MALAWI	'),
(126, 'MALI	', 'MALI	'),
(127, 'MARRUECOS	', 'MARRUECOS	'),
(128, 'MAURICIO,ISLAS	', 'MAURICIO,ISLAS	'),
(129, 'MAURITANIA	', 'MAURITANIA	'),
(130, 'NIGER	', 'NIGER	'),
(131, 'NIGERIA	', 'NIGERIA	'),
(132, 'ZIMBABWE	', 'ZIMBABWE	'),
(133, 'RWANDA	', 'RWANDA	'),
(134, 'SENEGAL	', 'SENEGAL	'),
(135, 'SIERRA LEONA	', 'SIERRA LEONA	'),
(136, 'SOMALIA	', 'SOMALIA	'),
(137, 'SWAZILANDIA	', 'SWAZILANDIA	'),
(138, 'SUDAN	', 'SUDAN	'),
(139, 'TANZANIA	', 'TANZANIA	'),
(140, 'TOGO	', 'TOGO	'),
(141, 'TUNEZ	', 'TUNEZ	'),
(142, 'UGANDA	', 'UGANDA	'),
(143, 'REPUBLICA DE SUDAFRICA	', 'REPUBLICA DE SUDAFRICA	'),
(144, 'ZAMBIA	', 'ZAMBIA	'),
(145, 'TERRIT.VINCULADOS AL R UNIDO	', 'AFRICA	'),
(146, 'TERRIT.VINCULADOS A ESPAÃ‘A	', 'AFRICA	'),
(147, 'TERRIT.VINCULADOS A FRANCIA	', 'AFRICA	'),
(148, 'TERRIT.VINCULADOS A PORTUGAL	', 'AFRICA	'),
(149, 'ANGOLA	', 'ANGOLA	'),
(150, 'CABO VERDE	', 'ISLAS	'),
(151, 'MOZAMBIQUE	', 'MOZAMBIQUE	'),
(152, 'SEYCHELLES	', 'SEYCHELLES	'),
(153, 'DJIBOUTI	', 'DJIBOUTI	'),
(155, 'COMORAS	', 'COMORAS	'),
(156, 'GUINEA BISSAU	', 'GUINEA BISSAU	'),
(157, 'STO.TOME Y PRINCIPE	', 'STO.TOME Y PRINCIPE	'),
(158, 'NAMIBIA	', 'NAMIBIA	'),
(159, 'SUDAFRICA	', 'SUDAFRICA	'),
(160, 'ERITREA	', 'ERITREA	'),
(161, 'ETIOPIA	', 'ETIOPIA	'),
(197, 'RESTO (AFRICA)	', 'RESTO (AFRICA)	'),
(198, 'INDETERMINADO (AFRICA)	', 'INDETERMINADO AFRICA)	'),
(200, 'ARGENTINA	', 'ARGENTINA	'),
(201, 'BARBADOS	', 'BARBADOS	'),
(202, 'BOLIVIA	', 'BOLIVIA	'),
(203, 'BRASIL	', 'BRASIL	'),
(204, 'CANADA	', 'CANADA	'),
(205, 'COLOMBIA	', 'COLOMBIA	'),
(206, 'COSTA RICA	', 'COSTA RICA	'),
(207, 'CUBA	', 'CUBA	'),
(208, 'CHILE	', 'CHILE	'),
(209, 'DOMINICANA,REP.	', 'DOMINICANA,REP.	'),
(210, 'ECUADOR	', 'ECUADOR	'),
(211, 'EL SALVADOR	', 'EL SALVADOR	'),
(212, 'ESTADOS UNIDOS	', 'ESTADOS UNIDOS	'),
(213, 'GUATEMALA	', 'GUATEMALA	'),
(214, 'GUYANA	', 'GUYANA	'),
(215, 'HAITI	', 'HAITI	'),
(216, 'HONDURAS	', 'HONDURAS	'),
(217, 'JAMAICA	', 'JAMAICA	'),
(218, 'MEXICO	', 'MEXICO	'),
(219, 'NICARAGUA	', 'NICARAGUA	'),
(220, 'PANAMA	', 'PANAMA	'),
(221, 'PARAGUAY	', 'PARAGUAY	'),
(222, 'PERU	', 'PERU	'),
(223, 'PUERTO RICO	', 'ESTADO ASOCIADO	'),
(224, 'TRINIDAD Y -TOBAGO	', 'TRINIDAD Y TOBAGO	'),
(225, 'URUGUAY	', 'URUGUAY	'),
(226, 'VENEZUELA	', 'VENEZUELA	'),
(227, 'TERRIT.VINCULADO AL R.UNIDO	', 'AMERICA	'),
(228, 'TER.VINCULADOS A DINAMARCA	', 'AMERICA	'),
(229, 'TERRIT.VINCULADOS A FRANCIA AMERIC.	', 'AMERICA	'),
(230, 'TERRIT. HOLANDESES	', 'TERRIT. HOLANDESES	'),
(231, 'TER.VINCULADOS A ESTADOS UNIDOS	', 'AMERICA	'),
(232, 'SURINAME	', 'SURINAME	'),
(233, 'DOMINICA	', 'DOMINICA	'),
(234, 'SANTA LUCIA	', 'SANTA LUCIA	'),
(235, 'SAN VICENTE Y LAS GRANADINS	', 'SAN VICENTE Y LAS GRANADINAS	'),
(236, 'BELICE	', 'BELICE	'),
(237, 'ANTIGUA Y BARBUDA	', 'ANTIGUA Y BARBUDA	'),
(238, 'S.CRISTOBAL Y NEVIS	', 'S.CRISTOBAL Y NEVIS	'),
(239, 'BAHAMAS	', 'BAHAMAS	'),
(240, 'GRANADA	', 'GRANADA	'),
(241, 'ANTILLAS HOLANDESAS	', 'TERRI.VINC.A PAISES BAJOS	'),
(242, 'ARUBA	', '	'),
(250, 'TIERRA DEL FUEGO	', '(AAE)	'),
(251, 'ZF LA PLATA	', 'BUENOS AIRES	'),
(252, 'ZF JUSTO DARACT	', 'SAN LUIS	'),
(253, 'ZF RIO GALLEGOS	', 'SANTA CRUZ	'),
(254, 'ISLAS MALVINAS	', 'ISLAS MALVINAS	'),
(255, 'ZF TUCUMAN	', 'TUCUMAN	'),
(256, 'ZF CORDOBA	', 'CORDOBA	'),
(257, 'ZF MENDOZA	', 'MENDOZA	'),
(258, 'ZF GENERAL PICO	', 'LA PAMPA	'),
(259, 'ZF COMODORO RIVADAVIA	', 'CHUBUT	'),
(260, 'ZF IQUIQUE	', 'CHILE	'),
(261, 'ZF PUNTA ARENAS	', 'CHILE	'),
(262, 'ZF SALTA	', 'SALTA	'),
(263, 'ZF PASO DE LOS LIBRES	', 'CORRIENTES	'),
(264, 'ZF PUERTO IGUAZU	', 'MISIONES	'),
(265, 'SECTOR ANTARTICO ARG.	', 'SECTOR ANTARTICO ARG.	'),
(270, 'ZF COLON	', 'PANAMA	'),
(271, 'ZF WINNER (STA. C.DE LA SIERRA	', 'BOLIVIA	'),
(280, 'ZF COLONIA	', 'URUGUAY	'),
(281, 'ZF FLORIDA	', 'URUGUAY	'),
(282, 'ZF LIBERTAD	', 'URUGUAY	'),
(283, 'ZF ZONAMERICA	', 'EX MONTEVIDEO URUGUAY	'),
(284, 'ZF NUEVA HELVECIA	', 'URUGUAY	'),
(285, 'ZF NUEVA PALMIRA	', 'URUGUAY	'),
(286, 'ZF RIO NEGRO	', 'URUGUAY	'),
(287, 'ZF RIVERA	', 'URUGUAY	'),
(288, 'ZF SAN JOSE	', 'URUGUAY	'),
(291, 'ZF MANAOS	', 'BRASIL	'),
(295, 'MAR ARG ZONA ECO.EX	', 'ARGENTINA	'),
(296, 'RIOS ARG NAVEG INTER	', 'ARGENTINA	'),
(297, 'RESTO AMERICA	', 'RESTO AMERICA	'),
(298, 'INDETERMINADO.(AMERICA)	', 'INDETERMINADO.(AMERICA)	'),
(301, 'AFGANISTAN	', 'AFGANISTAN	'),
(302, 'ARABIA SAUDITA	', 'ARABIA SAUDITA	'),
(303, 'BAHREIN	', 'BAHREIN	'),
(304, 'MYANMAR(EX-BIRMANIA)	', 'MYANMAR(EX-BIRMANIA)	'),
(305, 'BUTAN	', 'BUTAN	'),
(306, 'CAMBODYA(EX-KAMPUCHE	', 'CAMBODYA(EX-KAMPUCHE	'),
(307, 'SRI LANKA	', 'SRI LANKA	'),
(308, 'COREA DEMOCRATICA	', 'COREA DEMOCRATICA	'),
(309, 'COREA REPUBLICANA	', 'COREA REPUBLICANA	'),
(310, 'CHINA	', 'CHINA	'),
(311, 'CHIPRE	', 'CHIPRE	'),
(312, 'FILIPINAS	', 'FILIPINAS	'),
(313, 'TAIWAN	', 'TAIWAN	'),
(314, 'GAZA	', 'GAZA	'),
(315, 'INDIA	', 'INDIA	'),
(316, 'INDONESIA	', 'INDONESIA	'),
(317, 'IRAK	', 'IRAK	'),
(318, 'IRAN	', 'IRAN	'),
(319, 'ISRAEL	', 'ISRAEL	'),
(320, 'JAPON	', 'JAPON	'),
(321, 'JORDANIA	', 'JORDANIA	'),
(322, 'QATAR	', 'QATAR	'),
(323, 'KUWAIT	', 'KUWAIT	'),
(324, 'LAOS	', 'LAOS	'),
(325, 'LIBANO	', 'LIBANO	'),
(326, 'MALASIA	', 'MALASIA	'),
(327, 'MALDIVAS ISLAS	', 'MALDIVAS ISLAS	'),
(328, 'OMAN	', 'OMAN	'),
(329, 'MONGOLIA	', 'MONGOLIA	'),
(330, 'NEPAL	', 'NEPAL	'),
(331, 'EMIRATOS ARABES,UNID	', 'EMIRATOS ARABES,UNID	'),
(332, 'PAKISTAN	', 'PAKISTAN	'),
(333, 'SINGAPUR	', 'SINGAPUR	'),
(334, 'SIRIA	', 'SIRIA	'),
(335, 'THAILANDIA	', 'THAILANDIA	'),
(336, 'TURQUIA	', 'TURQUIA	'),
(337, 'VIETNAM	', 'VIETNAM	'),
(341, 'HONG KONG	', 'REG.ADM.ESP. DE CHINA	'),
(344, 'MACAO	', 'MACAO(REG.ADM.ESPEC)	'),
(345, 'BANGLADESH	', 'BANGLADESH	'),
(346, 'BRUNEI	', 'BRUNEI	'),
(348, 'REPUBLICA DE YEMEN	', 'REPUBLICA DE YEMEN	'),
(349, 'ARMENIA	', 'ARMENIA	'),
(350, 'AZERBAIJAN	', 'AZERBAIJAN	'),
(351, 'GEORGIA	', 'GEORGIA	'),
(352, 'KAZAJSTAN	', 'KAZAJSTAN	'),
(353, 'KIRGUIZISTAN	', 'KIRGUIZISTAN	'),
(354, 'TAYIKISTAN	', 'TAYIKISTAN	'),
(355, 'TURKMENISTAN	', 'TURKMENISTAN	'),
(356, 'UZBEKISTAN	', 'UZBEKISTAN	'),
(357, 'TERR. AU. PALESTINOS	', 'GAZA Y JERICO	'),
(358, 'TIMOR ORIENTAL	', '	'),
(397, 'RESTO DE ASIA	', 'RESTO DE ASIA	'),
(398, 'INDET.(ASIA)	', 'INDET.(ASIA)	'),
(401, 'ALBANIA	', 'ALBANIA	'),
(402, 'ALEMANIA FEDERAL	', 'ALEMANIA FEDERAL	'),
(403, 'ALEMANIA ORIENTAL	', 'ALEMANIA ORIENTAL	'),
(404, 'ANDORRA	', 'ANDORRA	'),
(405, 'AUSTRIA	', 'AUSTRIA	'),
(406, 'BELGICA	', 'BELGICA	'),
(407, 'BULGARIA	', 'BULGARIA	'),
(408, 'CHECOSLOVAQUIA	', 'CHECOSLOVAQUIA	'),
(409, 'DINAMARCA	', 'DINAMARCA	'),
(410, 'ESPAÃ‘A	', 'ESPAÃ‘A	'),
(411, 'FINLANDIA	', 'FINLANDIA	'),
(412, 'FRANCIA	', 'FRANCIA	'),
(413, 'GRECIA	', 'GRECIA	'),
(414, 'HUNGRIA	', 'HUNGRIA	'),
(415, 'IRLANDA	', 'IRLANDA	'),
(416, 'ISLANDIA	', 'ISLANDIA	'),
(417, 'ITALIA	', 'ITALIA	'),
(418, 'LIECHTENSTEIN	', 'LIECHTENSTEIN	'),
(419, 'LUXEMBURGO	', 'LUXEMBURGO	'),
(420, 'MALTA	', 'MALTA	'),
(421, 'MONACO	', 'MONACO	'),
(422, 'NORUEGA	', 'NORUEGA	'),
(423, 'PAISES BAJOS	', 'PAISES BAJOS	'),
(424, 'POLONIA	', 'POLONIA	'),
(425, 'PORTUGAL	', 'PORTUGAL	'),
(426, 'REINO UNIDO	', 'REINO UNIDO	'),
(427, 'RUMANIA	', 'RUMANIA	'),
(428, 'SAN MARINO	', 'SAN MARINO	'),
(429, 'SUECIA	', 'SUECIA	'),
(430, 'SUIZA	', 'SUIZA	'),
(431, 'VATICANO(SANTA SEDE)	', 'VATICANO(SENTA SEDE)	'),
(432, 'YUGOSLAVIA	', '	'),
(433, 'POS.BRIT.(EUROPA)	', 'POS.BRIT.(EUROPA)	'),
(434, 'HOLANDA	', 'HOLANDA	'),
(435, 'CHIPRE	', 'CHIPRE	'),
(436, 'TURQUIA	', 'TURQUIA	'),
(438, 'ALEMANIA,REP.FED.	', 'ALEMANIA,REP.FED.	'),
(439, 'BIELORRUSIA	', 'BIELORRUSIA	'),
(440, 'ESTONIA	', 'ESTONIA	'),
(441, 'LETONIA	', 'LETONIA	'),
(442, 'LITUANIA	', 'LITUANIA	'),
(443, 'MOLDAVIA	', 'MOLDAVIA	'),
(444, 'RUSIA	', 'RUSIA	'),
(445, 'UCRANIA	', 'UCRANIA	'),
(446, 'BOSNIA HERZEGOVINA	', 'BOSNIA HERZEGOVINA	'),
(447, 'CROACIA	', 'CROACIA	'),
(448, 'ESLOVAQUIA	', 'ESLOVAQUIA	'),
(449, 'ESLOVENIA	', 'ESLOVENIA	'),
(450, 'MACEDONIA	', 'MACEDONIA	'),
(451, 'REP. CHECA	', 'REP. CHECA	'),
(452, 'FED. SER Y MONT YOGOE	', '	'),
(453, 'MONTENEGRO	', 'MONTENEGRO	'),
(454, 'SERBIA	', 'SERBIA	'),
(497, 'RESTO EUROPA	', 'RESTO EUROPA	'),
(498, 'INDET.(EUROPA)	', 'INDET.(EUROPA)	'),
(501, 'AUSTRALIA	', 'AUSTRALIA	'),
(503, 'NAURU	', 'NAURU	'),
(504, 'NUEVA ZELANDIA	', 'NUEVA ZELANDIA	'),
(505, 'VANATU	', 'VANATU	'),
(506, 'SAMOA OCCIDENTAL	', 'SAMOA OCCIDENTAL	'),
(507, 'TERRITORIO VINCULADOS A AUSTRALIA	', 'OCEANIA	'),
(508, 'TERRITORIOS VINCULADOS AL R. UNIDO	', 'OCEANIA	'),
(509, 'TERRITORIOS VINCULADOS A FRANCIA	', 'OCEANIA	'),
(510, 'TER VINCULADOS A NUEVA. ZELANDA	', 'OCEANIA	'),
(511, 'TER. VINCULADOS A ESTADOS UNIDOS	', 'OCEANIA	'),
(512, 'FIJI, ISLAS	', 'FIJI, ISLAS	'),
(513, 'PAPUA NUEVA GUINEA	', 'PAPUA NUEVA GUINEA	'),
(514, 'KIRIBATI, ISLAS	', 'KIRIBATI, ISLAS	'),
(515, 'MICRONESIA,EST.FEDER	', 'MICRONESIA,EST.FEDER	'),
(516, 'PALAU	', 'PALAU	'),
(517, 'TUVALU	', 'TUVALU	'),
(518, 'SALOMON,ISLAS	', 'SALOMON,ISLAS	'),
(519, 'TONGA	', 'TONGA	'),
(520, 'MARSHALL,ISLAS	', 'MARSHALL,ISLAS	'),
(521, 'MARIANAS,ISLAS	', 'MARIANAS,ISLAS	'),
(597, 'RESTO OCEANIA	', 'RESTO OCEANIA	'),
(598, 'INDET.(OCEANIA)	', 'INDET.(OCEANIA)	'),
(601, 'URSS	', 'URSS	'),
(652, 'ANGUILA (TERRITORIO NO AUTONOMO DEL R. UNIDO)	', 'ANGUILA (TERRITORIO NO AUTONOMO DEL R. UNIDO)	'),
(653, 'ARUBA (TERRITORIO DE PAISES BAJOS)	', '	'),
(654, 'ISLA DE COOK (TERRITORIO AUTONOMO ASOCIADO A NUEVA ZELANDA)	', '	'),
(655, 'PATAU	', '	'),
(656, 'POLINESI FRANCESA (TERRITORIO DE ULTRAMAR DE FRANCIA)	', '	'),
(659, 'ANTILLAS HOLANDESAS (TERRITORIO DE PAISES BAJOS)	', '	'),
(662, 'ASCENCION	', '	'),
(663, 'BERMUDAS (TERRITORIO NO AUTONOMO DEL R UNIDO)	', '	'),
(664, 'CAMPIONE DITALIA	', '	'),
(665, 'COLONIA DE GIBRALTAR	', '	'),
(666, 'GROENLANDIA	', '	'),
(667, 'GUAM (TERRITORIO NO AUTONOMO DE LOS ESTADO UNIDOS	', '	'),
(668, 'HONG KONG (TERRITORIO DE CHINA)	', '	'),
(669, 'ISLAS AZORES	', '	'),
(670, 'ISLAS DEL CANAL (GUERNESEY, JERSEY, ALDERNEY,G.STARK, L.SARK, ETC)	', '	'),
(671, 'ISLAS CAIMAN (TERRITORIO NO AUTONOMO DE R UNIDO)	', '	'),
(672, 'ISLA CHRISTMAS	', '	'),
(673, 'ISLA DE COCOS O KEELING	', '	'),
(676, 'ISLA DE MAN (TERRITORIO DEL REINO UNIDO)	', '	'),
(677, 'ISLA DE NORFOLK (TERRITORIO DEL R UNIDO)	', '	'),
(678, 'ISALAS TURKAS Y CAICOS (TERRITORIO NO AUTONOMO DEL REINO UNIDO)	', '	'),
(679, 'ISLAS PACIFICO	', '	'),
(680, 'ISLAS DE SAN PEDRO Y MIGUELON	', '	'),
(681, 'ISLA QESHM	', '	'),
(682, 'ISLAS VIRGENES BRITANICAS (TERRITORIO NO AUTONOMO DEL REINO UNIDO)	', '	'),
(683, 'ISLAS VIRGENES DE ESTADOS UNIDOS DE AMERICA	', '	'),
(684, 'LABUAM	', '	'),
(685, 'MADEIRA (TERRITORIO DE PORTUGAL)	', '	'),
(686, 'MONSERRAT (TERRITORIO NO AUTONOMO DEL REINO UNIDO)	', '	'),
(687, 'NIUE 	', '	'),
(690, 'PITCAIRN	', '	'),
(693, 'REGIMEN APLICABLE A LAS SA FINANCIERAS (LEY 11073 DE LA ROU)	', '	'),
(694, 'SANTA ELENA	', '	'),
(695, 'SAMAO AMERICANA (TERRITORIO NO AUTONOMO DE LOS ESTADOS UNIDOS)	', '	'),
(696, 'ARCHIPIELAGO DE SVBALBARD	', '	'),
(697, 'TRISTAN DACUNHA	', '	'),
(698, 'TRIESTE (ITALIA)	', '	'),
(699, 'TOKELAU	', '	'),
(700, 'ZONA LIBRE DE OSTRAVA (CIUDAD DE LA ATIGUA CHECOSLOVAQUIA)	', '	'),
(997, 'RESTO CONTINENTE	', 'RESTO CONTINENTE	'),
(998, 'INDET.(CONTINENTE)	', 'INDET.(CONTINENTE)	'),
(999, 'OTROS PAISES	', '	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `cuit` char(13) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo_responsable` int(11) NOT NULL,
  `nro_agente_retenc` int(11) NOT NULL,
  `nro_establec` int(11) NOT NULL,
  `enc_linea1_izq` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enc_linea2_izq` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enc_linea3_izq` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enc_linea1_der` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enc_linea2_der` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enc_linea3_der` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `denominacion`, `domicilio`, `localidad`, `id_provincia`, `fecha_inicio`, `cuit`, `id_tipo_responsable`, `nro_agente_retenc`, `nro_establec`, `enc_linea1_izq`, `enc_linea2_izq`, `enc_linea3_izq`, `enc_linea1_der`, `enc_linea2_der`, `enc_linea3_der`, `fecha_desde`, `fecha_hasta`) VALUES
(1, 'STRIEDER BLAS LEONARDO', 'LAS ROSAS 156', 'CAPIOVI', 19, '1997-10-01', '20-17135383-2', 1, 0, 1, 'STRIEDER BLAS LEONARDO', 'LAS ROSAS 156 - CAPIOVI', 'FECHA INICIO 01/10/1997', 'RESPONSABLE INSCRIPTO', 'CUIT 20-17135383-2', 'I.BRUTOS 20171353832', '2015-10-01', '2015-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polizas`
--

CREATE TABLE `polizas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fax` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `fecha_venc` date DEFAULT NULL,
  `cobertura` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `polizas`
--

INSERT INTO `polizas` (`id`, `descripcion`, `cia`, `contacto`, `telefono`, `celular`, `fax`, `email`, `fecha_pago`, `fecha_venc`, `cobertura`) VALUES
(1, '', 'SAN CRISTOBAL', 'PEDRO', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `denominacion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(20) DEFAULT NULL,
  `id_provincia` int(11) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `id_tipo_impositivo` int(11) DEFAULT NULL,
  `documento_impositivo` varchar(100) DEFAULT NULL,
  `id_tipo_responsable` int(11) DEFAULT NULL,
  `observaciones` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `denominacion`, `direccion`, `localidad`, `codigo_postal`, `id_provincia`, `telefono`, `celular`, `fax`, `email`, `web`, `id_tipo_impositivo`, `documento_impositivo`, `id_tipo_responsable`, `observaciones`) VALUES
(1, 'SHELL', '', '', '', 19, '', '', '', '', '', 1, '', 1, ''),
(2, 'PAPEL MISIONERO', 'PUERTO LEONI', 'CAPIOVI', '3332', 19, NULL, NULL, NULL, NULL, NULL, 1, '30-54037289-2', 1, NULL),
(3, 'ALFA INGENIERÃA SRL', 'LOS PIONEROS', 'CAPIOVI', '3332', 19, NULL, NULL, NULL, NULL, NULL, 1, '30-68327226-0', 1, NULL),
(4, 'BUTIUK FERNANDO RAUL', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, 1, '20-16934080-4', 1, NULL),
(5, 'MACOVALLE S.A', NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, 1, '30-58311279-7', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `descripcion`) VALUES
(0, 'Ciudad AutÃ³noma de Buenos Aires'),
(1, 'Buenos Aires'),
(2, 'Catamara'),
(3, 'CÃ³rdoba'),
(4, 'Corrientes'),
(5, 'Entre RÃ­os'),
(6, 'Jujuy'),
(7, 'Mendoza'),
(8, 'La Rioja'),
(9, 'Salta'),
(10, 'San Juan'),
(11, 'San Luis'),
(12, 'Santa Fe'),
(13, 'Santiago del Estero'),
(14, 'TucumÃ¡n'),
(16, 'Chaco'),
(17, 'Chubut'),
(18, 'Formosa'),
(19, 'Misiones'),
(20, 'NeuquÃ©n'),
(21, 'La Pampa'),
(22, 'RÃ­o Negro'),
(23, 'Santa Cruz'),
(24, 'Tierra del Fuego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos_manten`
--

CREATE TABLE `repuestos_manten` (
  `id` int(11) NOT NULL,
  `id_repuesto` int(11) NOT NULL,
  `id_mantenimiento` int(11) NOT NULL,
  `cantidad` decimal(10,3) NOT NULL,
  `importe` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sample1`
--

CREATE TABLE `sample1` (
  `no` int(11) NOT NULL,
  `date` date NOT NULL,
  `itemname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `uom` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sample1`
--

INSERT INTO `sample1` (`no`, `date`, `itemname`, `qty`, `uom`) VALUES
(1, '2009-08-11', 'Sample 1', 10, 'PCS'),
(2, '2009-08-26', 'æ»‘é¼ ', 2, 'PCS'),
(3, '2009-08-15', 'LCD Monitor', 1, 'PCS'),
(4, '2009-08-11', 'test item 3', 3, 'PCS'),
(6, '2009-08-11', 'Again, sample data', 8, 'day'),
(7, '2013-03-13', 'Dell Computer With Keyboard Mouse', 20, 'PCS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sample2`
--

CREATE TABLE `sample2` (
  `date` date NOT NULL,
  `docno` varchar(20) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `terms` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sample2`
--

INSERT INTO `sample2` (`date`, `docno`, `companyname`, `amount`, `terms`, `address`, `id`) VALUES
('2009-08-12', 'PO1001', 'Company 1', '100.00', 'C.O.D', '222, Street XXX,\r\nXXXX, XXXX,\r\nMalaysia', 1),
('2009-08-22', 'PO1002', 'Company 2', '300.00', '30 Days', '11, Street YYYY,\r\nYYYYY YYYYY\r\nSingapore', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sample2line`
--

CREATE TABLE `sample2line` (
  `no` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `unitprice` decimal(12,2) NOT NULL,
  `uom` varchar(10) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `headerid` int(11) NOT NULL,
  `lineid` int(11) NOT NULL,
  `linedesc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sample2line`
--

INSERT INTO `sample2line` (`no`, `itemname`, `qty`, `unitprice`, `uom`, `amount`, `headerid`, `lineid`, `linedesc`) VALUES
(1, 'LCD Monitor', 3, '300.00', 'PCS', '900.00', 1, 1, '* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* Samsung (SN:12345)\r\n* HP (SN: 2323434)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)\r\n* ACER (SN:xxxxx)'),
(2, 'Optical Mouse', 4, '1.00', 'PCS', '4.00', 1, 2, '* 2nd hand'),
(1, 'Notebook', 1, '1000.00', 'PCS', '1000.00', 2, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_manten`
--

CREATE TABLE `servicios_manten` (
  `id` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_mantenimiento` int(11) NOT NULL,
  `cantidad` decimal(10,3) NOT NULL,
  `importe` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siniestros`
--

CREATE TABLE `siniestros` (
  `id` int(11) NOT NULL,
  `referencia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `notas` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_chofer` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `fecha_declaracion` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `importe_indemnizacion` decimal(12,2) DEFAULT NULL,
  `importe_danios` decimal(12,2) DEFAULT NULL,
  `cia_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telef_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `poliza_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `patente_contrario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `marca_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `modelo_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color_contrario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `notas_contrario` longtext COLLATE utf8_spanish_ci,
  `actuaciones` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_comprobante`
--

CREATE TABLE `tipo_comprobante` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_comprobante`
--

INSERT INTO `tipo_comprobante` (`id`, `descripcion`) VALUES
(1, 'FACTURAS A'),
(2, 'NOTAS DE DEBITO A'),
(3, 'NOTAS DE CREDITO A'),
(4, 'RECIBOS A'),
(5, 'NOTAS DE VENTA AL CONTADO A'),
(6, 'FACTURAS B'),
(7, 'NOTAS DE DEBITO B'),
(8, 'NOTAS DE CREDITO B'),
(9, 'RECIBOS B'),
(10, 'NOTAS DE VENTA AL CONTADO B'),
(11, 'FACTURAS C'),
(12, 'NOTAS DE DEBITO C'),
(13, 'NOTAS DE CREDITO C'),
(14, 'DOCUMENTO ADUANERO'),
(15, 'RECIBOS C'),
(16, 'NOTAS DE VENTA AL CONTADO C'),
(19, 'FACTURAS DE EXPORTACION'),
(20, 'NOTAS DE DEBITO POR OPERACIONES CON EL EXTERIOR'),
(21, 'NOTAS DE CREDITO POR OPERACIONES CON EL EXTERIOR'),
(22, 'FACTURAS - PERMISO EXPORTACION SIMPLIFICADO - DTO. 855/97'),
(30, 'COMPROBANTES DE COMPRA DE BIENES USADOS'),
(31, 'MANDATO - CONSIGNACION'),
(32, 'COMPROBANTES PARA RECICLAR MATERIALES'),
(34, 'COMPROBANTES A DEL APARTADO A  INCISO F  R G  N  1415'),
(35, 'COMPROBANTES B DEL ANEXO I, APARTADO A, INC. F), RG NÂ° 1415'),
(36, 'COMPROBANTES C DEL Anexo I, Apartado A, INC.F), R.G. NÂ° 1415'),
(37, 'NOTAS DE DEBITO O DOCUMENTO EQUIVALENTE QUE CUMPLAN CON LA R.G. NÂ° 1415'),
(38, 'NOTAS DE CREDITO O DOCMENTO EQUIVALENTE QUE CUMPLAN CON LA R.G. NÂ° 1415'),
(39, 'OTROS COMPROBANTES A QUE CUMPLEN CON LA R G  1415'),
(40, 'OTROS COMPROBANTES B QUE CUMPLAN CON LA R.G. NÂ° 1415'),
(41, 'OTROS COMPROBANTES C QUE CUMPLAN CON LA R.G. NÂ° 1415'),
(50, 'RECIBO FACTURA A  REGIMEN DE FACTURA DE CREDITO '),
(51, 'FACTURAS M'),
(52, 'NOTAS DE DEBITO M'),
(53, 'NOTAS DE CREDITO M'),
(54, 'RECIBOS M'),
(55, 'NOTAS DE VENTA AL CONTADO M'),
(56, 'COMPROBANTES M DEL ANEXO I  APARTADO A  INC F   R G  N  1415'),
(57, 'OTROS COMPROBANTES M QUE CUMPLAN CON LA R G  N  1415'),
(58, 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO M'),
(59, 'LIQUIDACIONES M'),
(60, 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO A'),
(61, 'CUENTAS DE VENTA Y LIQUIDO PRODUCTO B'),
(63, 'LIQUIDACIONES A'),
(64, 'LIQUIDACIONES B'),
(65, 'NOTAS DE CREDITO DE COMPROBANTES CON COD. 34, 39, 58, 59, 60, 63, 96, 97 '),
(66, 'DESPACHO DE IMPORTACION'),
(67, 'IMPORTACION DE SERVICIOS'),
(68, 'LIQUIDACION C'),
(70, 'RECIBOS FACTURA DE CREDITO'),
(71, 'CREDITO FISCAL POR CONTRIBUCIONES PATRONALES'),
(73, 'FORMULARIO 1116 RT'),
(74, 'CARTA DE PORTE PARA EL TRANSPORTE AUTOMOTOR PARA GRANOS'),
(75, 'CARTA DE PORTE PARA EL TRANSPORTE FERROVIARIO PARA GRANOS'),
(80, 'COMPROBANTE DIARIO DE CIERRE (ZETA)'),
(81, 'TIQUE FACTURA A   CONTROLADORES FISCALES'),
(82, 'TIQUE - FACTURA B'),
(83, 'TIQUE'),
(84, 'COMPROBANTE   FACTURA DE SERVICIOS PUBLICOS   INTERESES FINANCIEROS'),
(85, 'NOTA DE CREDITO   SERVICIOS PUBLICOS   NOTA DE CREDITO CONTROLADORES FISCALES'),
(86, 'NOTA DE DEBITO   SERVICIOS PUBLICOS'),
(87, 'OTROS COMPROBANTES - SERVICIOS DEL EXTERIOR'),
(88, 'OTROS COMPROBANTES - DOCUMENTOS EXCEPTUADOS / REMITO ELECTRONICO'),
(89, 'OTROS COMPROBANTES - DOCUMENTOS EXCEPTUADOS - NOTAS DE DEBITO / RESUMEN DE DATOS'),
(90, 'OTROS COMPROBANTES - DOCUMENTOS EXCEPTUADOS - NOTAS DE CREDITO'),
(91, 'REMITOS R'),
(92, 'AJUSTES CONTABLES QUE INCREMENTAN EL DEBITO FISCAL'),
(93, 'AJUSTES CONTABLES QUE DISMINUYEN EL DEBITO FISCAL'),
(94, 'AJUSTES CONTABLES QUE INCREMENTAN EL CREDITO FISCAL'),
(95, 'AJUSTES CONTABLES QUE DISMINUYEN EL CREDITO FISCAL'),
(96, 'FORMULARIO 1116 B'),
(97, 'FORMULARIO 1116 C'),
(99, 'OTROS COMP  QUE NO CUMPLEN CON LA R G  3419 Y SUS MODIF '),
(101, 'AJUSTE ANUAL PROVENIENTE DE LA  D J  DEL IVA  POSITIVO '),
(102, 'AJUSTE ANUAL PROVENIENTE DE LA  D J  DEL IVA  NEGATIVO '),
(103, 'NOTA DE ASIGNACION'),
(104, 'NOTA DE CREDITO DE ASIGNACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cta_bancaria`
--

CREATE TABLE `tipo_cta_bancaria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_cta_bancaria`
--

INSERT INTO `tipo_cta_bancaria` (`id`, `descripcion`) VALUES
(1, 'Caja de Ahorro en $'),
(2, 'Cuenta Corriente en $'),
(3, 'Cuenta Sueldos'),
(4, 'Cuenta Seguridad Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc_comprador`
--

CREATE TABLE `tipo_doc_comprador` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_doc_comprador`
--

INSERT INTO `tipo_doc_comprador` (`id`, `descripcion`) VALUES
(0, 'CI PolicÃ­a Federal'),
(1, 'CI Buenos Aires'),
(2, 'CI Catamarca'),
(3, 'CI CÃ³rdoba'),
(4, 'CI Corrientes'),
(5, 'CI Entre RÃ­os'),
(6, 'CI Jujuy'),
(7, 'CI Mendoza'),
(8, 'CI La Rioja'),
(9, 'CI Salta'),
(10, 'CI San Juan'),
(11, 'CI San Luis'),
(12, 'CI Santa Fe'),
(13, 'CI Santiago del Estero'),
(14, 'CI TucumÃ¡n'),
(16, 'CI Chaco'),
(17, 'CI Chubut'),
(18, 'CI Formosa'),
(19, 'CI Misiones'),
(20, 'CI NeuquÃ©n'),
(21, 'CI La Pampa'),
(22, 'CI RÃ­o Negro'),
(23, 'CI Santa Cruz'),
(24, 'CI Tierra del Fuego'),
(30, 'Certificado de MigraciÃ³n'),
(80, 'CUIT'),
(86, 'CUIL'),
(87, 'CDI'),
(88, 'Usado por Anses para PadrÃ³n'),
(89, 'LE'),
(90, 'LC'),
(91, 'CI extranjera'),
(92, 'en trÃ¡mite'),
(93, 'Acta nacimiento'),
(94, 'Pasaporte'),
(95, 'CI Bs. As. RNP'),
(96, 'DNI'),
(99, 'Sin identificar/venta global diaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc_impositivo`
--

CREATE TABLE `tipo_doc_impositivo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_doc_impositivo`
--

INSERT INTO `tipo_doc_impositivo` (`id`, `descripcion`) VALUES
(1, 'CUIL'),
(2, 'CUIT Extranjeros'),
(3, 'CUIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_manten`
--

CREATE TABLE `tipo_manten` (
  `id` int(11) NOT NULL,
  `tipo` enum('Chapa y pintura','ReparaciÃ³n','RevisiÃ³n','Lavado','Mantenimiento') COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_manten`
--

INSERT INTO `tipo_manten` (`id`, `tipo`, `descripcion`) VALUES
(1, 'ReparaciÃ³n', 'A/C Reemplazo Compresor'),
(2, 'Mantenimiento', 'A/C Recarga de Gas'),
(3, 'RevisiÃ³n', 'A/C DiagnÃ³stico'),
(4, 'ReparaciÃ³n', 'A/C Reemplazo Condensador'),
(5, 'ReparaciÃ³n', 'A/C Reemplazo Evaporador'),
(6, 'ReparaciÃ³n', 'Balanceo de Llantas'),
(7, 'Mantenimiento', 'Cambio de Aceite'),
(8, 'Mantenimiento', 'Cambio del LÃ­quido de TransmisiÃ³n'),
(9, 'Mantenimiento', 'Cambio de NeumÃ¡ticos'),
(10, 'Chapa y pintura', 'Chapa'),
(11, 'RevisiÃ³n', 'DiagnÃ³stico de Sistema de Carga'),
(12, 'RevisiÃ³n', 'InspecciÃ³n de Banda de Motor'),
(13, 'RevisiÃ³n', 'InspecciÃ³n de BaterÃ­a'),
(14, 'RevisiÃ³n', 'InspecciÃ³n de Frenos'),
(15, 'RevisiÃ³n', 'InspecciÃ³n TÃ©cniva Vehicular'),
(16, 'Lavado', 'Lavado'),
(17, 'Chapa y pintura', 'Pintura'),
(18, 'ReparaciÃ³n', 'Reemplazo Alternador'),
(19, 'Mantenimiento', 'Reemplazo de Amortiguadores'),
(20, 'Mantenimiento', 'Reemplazo de Anticongelante'),
(21, 'ReparaciÃ³n', 'Reemplazo de Burro de Aranque'),
(22, 'Mantenimiento', 'Reemplazo de Pastillas de Freno'),
(23, 'Mantenimiento', 'Reemplazo de BaterÃ­a'),
(24, 'ReparaciÃ³n', 'Reemplazo de Bobina de Arranque'),
(25, 'Mantenimiento', 'Reemplazo de BujÃ­as'),
(26, 'ReparaciÃ³n', 'Reemplazo de Bomba de Aceita'),
(27, 'ReparaciÃ³n', 'Reemplazo de Bomba de Agua'),
(28, 'ReparaciÃ³n', 'Reemplazo de Bomba de Combustible'),
(29, 'ReparaciÃ³n', 'Reemplazo de Bomba de DirecciÃ³n'),
(30, 'ReparaciÃ³n', 'Reemplazo de Caliper de Freno'),
(31, 'ReparaciÃ³n', 'Reemplazo de Convertidor CatalÃ­tico'),
(32, 'ReparaciÃ³n', 'Reemplazo de Escape'),
(33, 'Mantenimiento', 'Reemplazo de Filtro de Aceite'),
(34, 'Mantenimiento', 'Reemplazo de Filtro de TransmisiÃ³n'),
(35, 'ReparaciÃ³n', 'Reemplazo de Inyectores de Combustible'),
(36, 'Mantenimiento', 'Reemplazo de Limpiaparabrizas'),
(37, 'ReparaciÃ³n', 'Reemplazo de Llanta'),
(38, 'ReparaciÃ³n', 'Reemplazo de Manguera de CalefacciÃ³n'),
(39, 'ReparaciÃ³n', 'Reemplazo de Manguera de DirecciÃ³n'),
(40, 'ReparaciÃ³n', 'Reemplazo de Motor/Regulador Ventanilla'),
(41, 'Mantenimiento', 'Reemplazo de RÃ³tulas'),
(42, 'Mantenimiento', 'Reemplazo de Soporte de Motor'),
(43, 'ReparaciÃ³n', 'Reemplazo de Termostato'),
(44, 'ReparaciÃ³n', 'Reemplazo de TransmisiÃ³n'),
(45, 'Mantenimiento', 'Reemplazo de Filtro de Aire'),
(46, 'ReparaciÃ³n', 'ReparaciÃ³n de Radiador'),
(47, 'RevisiÃ³n', 'RevisiÃ³n de Soportes de Motor'),
(48, 'RevisiÃ³n', 'RevisiÃ³n de SuspensiÃ³n'),
(49, 'Mantenimiento', 'RotaciÃ³n de Llantas'),
(50, 'ReparaciÃ³n', 'Servicio a Llanta'),
(51, 'Mantenimiento', 'Servicio de AfinaciÃ³n BÃ¡sica'),
(52, 'Mantenimiento', 'Servicio de AfinaciÃ³n Mayor'),
(53, 'Mantenimiento', 'Servicio de AlineaciÃ³n'),
(54, 'RevisiÃ³n', 'Servicio Programado de Agencia'),
(55, 'ReparaciÃ³n', 'Tapizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_responsable`
--

CREATE TABLE `tipo_responsable` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_responsable`
--

INSERT INTO `tipo_responsable` (`id`, `descripcion`) VALUES
(1, 'IVA Responsable Inscripto'),
(2, 'IVA Responsable no Inscripto'),
(3, 'IVA no Responsable'),
(4, 'IVA Sujeto Exento'),
(5, 'Consumidor Final'),
(6, 'Responsable Monotributo'),
(7, 'Sujeto no Categorizado'),
(8, 'Proveedor del Exterior'),
(9, 'Cliente del Exterior'),
(10, 'IVA Liberado - Ley NÂº19.640'),
(11, 'IVA Responsable Inscripto â€“ Agente de PercepciÃ³n'),
(12, 'PequeÃ±o Contribuyente Eventual'),
(13, 'Monotributista Social'),
(14, 'PequeÃ±o Contribuyente Eventual Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`id`, `descripcion`) VALUES
(0, 'SIN DESCRIPCION'),
(1, 'KILOGRAMO'),
(2, 'METROS'),
(3, 'METRO CUADRADO'),
(4, 'METRO CUBICO'),
(5, 'LITROS'),
(6, '1000 KILOWATT HORA'),
(7, 'UNIDAD'),
(8, 'PAR'),
(9, 'DOCENA'),
(10, 'QUILATE'),
(11, 'MILLAR'),
(12, 'MEGA U. INTER. ACT. ANTIB'),
(13, 'UNIDAD INT. ACT. INMUNG'),
(14, 'GRAMO'),
(15, 'MILIMETRO'),
(16, 'MILIMETRO CUBICO'),
(17, 'KILOMETRO'),
(18, 'HECTOLITRO'),
(19, 'MEGA UNIDAD INT. ACT. INMUNG'),
(20, 'CENTIMETRO'),
(21, 'KILOGRAMO ACTIVO'),
(22, 'GRAMO ACTIVO'),
(23, 'GRAMO BASE'),
(24, 'UIACTHOR'),
(25, 'JGO.PQT. MAZO NAIPES'),
(26, 'MUIACTHOR'),
(27, 'CENTIMETRO CUBICO'),
(28, 'UIACTANT'),
(29, 'TONELADA'),
(30, 'DECAMETRO CUBICO'),
(31, 'HECTOMETRO CUBICO'),
(32, 'KILOMETRO CUBICO'),
(33, 'MICROGRAMO'),
(34, 'NANOGRAMO'),
(35, 'PICOGRAMO'),
(36, 'MUIACTANT'),
(37, 'UIACTIG'),
(41, 'MILIGRAMO'),
(47, 'MILILITRO'),
(48, 'CURIE'),
(49, 'MILICURIE'),
(50, 'MICROCURIE'),
(51, 'U.INTER. ACT. HORMONAL'),
(52, 'MEGA U. INTER. ACT. HOR.'),
(53, 'KILOGRAMO BASE'),
(54, 'GRUESA'),
(55, 'MUIACTIG'),
(61, 'KILOGRAMO BRUTO'),
(62, 'PACK'),
(63, 'HORMA'),
(97, 'SEÃ‘AS/ANTICIPOS'),
(98, 'OTRAS UNIDADES'),
(99, 'BONIFICACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `observaciones` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `nombres`, `apellidos`, `email`, `password`, `observaciones`) VALUES
(1, 'blas', 'Blas', 'Stieder', 'blas@strieder.com', 'admin', NULL),
(2, 'carlosbdf', 'Carlos', 'Beyersdorf', 'carlosbdf@yahoo.es', 'ninguna', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tipo_comprobante` int(11) NOT NULL,
  `letra` char(1) DEFAULT NULL,
  `sucursal` int(4) DEFAULT NULL,
  `nro_comprobante` bigint(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `neto_gravado` decimal(14,2) DEFAULT NULL,
  `no_gravado` decimal(14,2) DEFAULT NULL,
  `imp_internos` decimal(12,2) DEFAULT NULL,
  `imp_municipales` decimal(14,2) DEFAULT NULL,
  `imp_provinciales` decimal(14,2) DEFAULT NULL,
  `imp_nacionales` decimal(14,2) DEFAULT NULL,
  `percepcion` decimal(14,2) DEFAULT NULL,
  `ing_brutos` decimal(14,2) DEFAULT NULL,
  `perc_iva` decimal(12,2) DEFAULT NULL,
  `perc_dgr` decimal(12,2) DEFAULT NULL,
  `tasa_1_iva` decimal(6,2) DEFAULT NULL,
  `importe_1_iva` decimal(14,2) DEFAULT NULL,
  `tasa_2_iva` decimal(6,2) DEFAULT NULL,
  `importe_2_iva` decimal(14,2) DEFAULT NULL,
  `tasa_3_iva` decimal(6,2) DEFAULT NULL,
  `importe_3_iva` decimal(14,2) DEFAULT NULL,
  `tasa_4_iva` decimal(6,2) DEFAULT NULL,
  `importe_4_iva` decimal(14,2) DEFAULT NULL,
  `tasa_5_iva` decimal(6,2) DEFAULT NULL,
  `importe_5_iva` decimal(14,2) DEFAULT NULL,
  `total` decimal(14,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_cliente`, `id_tipo_comprobante`, `letra`, `sucursal`, `nro_comprobante`, `fecha`, `detalle`, `neto_gravado`, `no_gravado`, `imp_internos`, `imp_municipales`, `imp_provinciales`, `imp_nacionales`, `percepcion`, `ing_brutos`, `perc_iva`, `perc_dgr`, `tasa_1_iva`, `importe_1_iva`, `tasa_2_iva`, `importe_2_iva`, `tasa_3_iva`, `importe_3_iva`, `tasa_4_iva`, `importe_4_iva`, `tasa_5_iva`, `importe_5_iva`, `total`) VALUES
(1, 1, 1, 'A', 0, 1, '2015-10-12', 'MATERIALES DE CONSTRUCCION', '100.00', '0.00', NULL, '3.00', '4.00', '5.00', '6.00', '7.00', NULL, NULL, '21.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '121.00'),
(2, 2, 1, 'A', 0, 13, '2015-10-13', 'TRANSPORTE RALEO', '118530.05', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '24891.31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '143421.36'),
(3, 2, 1, 'A', 0, 14, '2015-10-13', 'TRANSPORTE RALEO', '5367.84', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '1127.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6495.09'),
(5, 2, 1, 'A', 0, 15, '2015-10-13', 'TRANSPORTE RALEO', '4901.44', '0.00', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, '21.00', '1029.30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5930.74');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `id` int(11) NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `kms_salida` decimal(9,0) DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `kms_llegada` decimal(9,0) DEFAULT NULL,
  `id_chofer` int(11) NOT NULL,
  `id_camion` int(11) NOT NULL,
  `tn` decimal(8,2) NOT NULL,
  `km_plus` decimal(9,0) DEFAULT NULL,
  `litros_comb` decimal(10,3) DEFAULT NULL,
  `importe_comb` decimal(10,2) DEFAULT NULL,
  `importe_peajes` decimal(10,2) DEFAULT NULL,
  `importe_gastos` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `viajes`
--

INSERT INTO `viajes` (`id`, `fecha_salida`, `kms_salida`, `fecha_llegada`, `kms_llegada`, `id_chofer`, `id_camion`, `tn`, `km_plus`, `litros_comb`, `importe_comb`, `importe_peajes`, `importe_gastos`) VALUES
(1, '2015-12-01', '12336', '2015-12-01', '12850', 1, 1, '0.00', NULL, '32.000', '416.00', '0.00', '0.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provincias_bancos` (`id_provincia`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_choferes_camiones` (`id_chofer`),
  ADD KEY `fk_polizas_camiones` (`id_poliza`),
  ADD KEY `fk_camiones_tipo_manten` (`id_tipo_ult_manten`);

--
-- Indices de la tabla `cheques`
--
ALTER TABLE `cheques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cajas_cheques` (`id_caja`),
  ADD KEY `fk_bancos_cheques` (`id_banco`),
  ADD KEY `fk_proveedores_cheques` (`id_proveedor`),
  ADD KEY `fk_clientes_cheques` (`id_cliente`);

--
-- Indices de la tabla `cheques_depositados`
--
ALTER TABLE `cheques_depositados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depositos_che_dep` (`id_deposito`),
  ADD KEY `fk_cheques_che_dep` (`id_cheque`);

--
-- Indices de la tabla `choferes`
--
ALTER TABLE `choferes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provincias_clientes` (`id_provincia`),
  ADD KEY `fk_tipo_imp_clientes` (`id_tipo_impositivo`),
  ADD KEY `fk_tipo_resp_clientes` (`id_tipo_responsable`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provincias_clientes` (`id_provincia`),
  ADD KEY `fk_tipo_imp_clientes` (`id_tipo_impositivo`),
  ADD KEY `fk_tipo_resp_clientes` (`id_tipo_responsable`);

--
-- Indices de la tabla `combustibles`
--
ALTER TABLE `combustibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_combustibles_proveedores` (`id_proveedor`),
  ADD KEY `fk_combustibles_camiones` (`id_camion`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_proveedores_compras` (`id_proveedor`),
  ADD KEY `fk_tipo_comp_compras` (`id_tipo_comprobante`),
  ADD KEY `fk_destino_compras` (`id_destino`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bancos_cuentas` (`id_banco`);

--
-- Indices de la tabla `cuit_paises`
--
ALTER TABLE `cuit_paises`
  ADD PRIMARY KEY (`cuit_pais`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bancos_depositos` (`id_banco`),
  ADD KEY `fk_cuentas_depositos` (`id_cuenta`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incoterms`
--
ALTER TABLE `incoterms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_camiones_mantenimientos` (`id_camion`),
  ADD KEY `fk_mantenimientos_tipo_manten` (`id_tipo_manten`),
  ADD KEY `fk_mantenimientos_proveedores` (`id_proveedor`);

--
-- Indices de la tabla `monedas`
--
ALTER TABLE `monedas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mov_bancos`
--
ALTER TABLE `mov_bancos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cajas_mov_bancos` (`id_caja`),
  ADD KEY `fk_oper_banc_mov_bancos` (`id_operacion_bancaria`),
  ADD KEY `fk_bancos_mov_bancos` (`id_banco`),
  ADD KEY `fk_cuentas_mov_bancos` (`id_cuenta`),
  ADD KEY `fk_bcodes_mov_bancos` (`id_banco_dest`),
  ADD KEY `fk_ctades_mov_bancos` (`id_cuenta_dest`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_choferes_multas` (`id_chofer`);

--
-- Indices de la tabla `operaciones_bancarias`
--
ALTER TABLE `operaciones_bancarias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operacion_cond_iva`
--
ALTER TABLE `operacion_cond_iva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `polizas`
--
ALTER TABLE `polizas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provincias_proveedores` (`id_provincia`),
  ADD KEY `fk_tipo_imp_proveedores` (`id_tipo_impositivo`),
  ADD KEY `fk_tipo_resp_proveedores` (`id_tipo_responsable`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repuestos_manten`
--
ALTER TABLE `repuestos_manten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depositos_che_dep` (`id_repuesto`),
  ADD KEY `fk_cheques_che_dep` (`id_mantenimiento`);

--
-- Indices de la tabla `sample1`
--
ALTER TABLE `sample1`
  ADD PRIMARY KEY (`no`);

--
-- Indices de la tabla `sample2`
--
ALTER TABLE `sample2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sample2line`
--
ALTER TABLE `sample2line`
  ADD PRIMARY KEY (`lineid`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_manten`
--
ALTER TABLE `servicios_manten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_depositos_che_dep` (`id_servicio`),
  ADD KEY `fk_cheques_che_dep` (`id_mantenimiento`);

--
-- Indices de la tabla `siniestros`
--
ALTER TABLE `siniestros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_choferes_siniestros` (`id_chofer`);

--
-- Indices de la tabla `tipo_comprobante`
--
ALTER TABLE `tipo_comprobante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_cta_bancaria`
--
ALTER TABLE `tipo_cta_bancaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_doc_comprador`
--
ALTER TABLE `tipo_doc_comprador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_doc_impositivo`
--
ALTER TABLE `tipo_doc_impositivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_manten`
--
ALTER TABLE `tipo_manten`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_responsable`
--
ALTER TABLE `tipo_responsable`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_proveedores_compras` (`id_cliente`),
  ADD KEY `fk_tipo_comp_compras` (`id_tipo_comprobante`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_viajes_camiones` (`id_camion`),
  ADD KEY `fk_viajes_choferes` (`id_chofer`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `camiones`
--
ALTER TABLE `camiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cheques`
--
ALTER TABLE `cheques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
