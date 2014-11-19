-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2014 a las 21:08:03
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `modulo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador`
--

CREATE TABLE IF NOT EXISTS `investigador` (
  `Nombres` text NOT NULL,
  `Apellidos` text NOT NULL,
  `Tipo_Documento` text NOT NULL,
  `Numero_Documento` int(11) NOT NULL,
  `Nacionalidad` text NOT NULL,
  `Datos_contacto` text NOT NULL,
  `Evaluador` tinyint(1) NOT NULL DEFAULT '0',
  `justificacion` text NOT NULL,
  `Hoja_vida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `investigador`
--

INSERT INTO `investigador` (`Nombres`, `Apellidos`, `Tipo_Documento`, `Numero_Documento`, `Nacionalidad`, `Datos_contacto`, `Evaluador`, `justificacion`, `Hoja_vida`) VALUES
('juan', 'moreno', 'cedula', 1231222, 'colombiano', '3207329971', 1, '', 'https://www.google.com.co/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0CCYQFjAC&url=http%3A%2F%2Fwww.mineducacion.gov.co%2F1621%2Farticles-296037_angel_alberto_garzon.pdf&ei=xN8yVLrfCYjCggT_i4GADg&usg=AFQjCNFExglJDCmsxN4s_Xft55-I-rb-iA&sig2=iIWIfNuQ0bGpawnHGDGH_A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE IF NOT EXISTS `organizaciones` (
  `Nit` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` text NOT NULL,
  `Nombre` text NOT NULL,
  `motivoCambioOrganizacion` text NOT NULL,
  `Ciudad` text NOT NULL,
  `validar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`Nit`, `Email`, `Direccion`, `Telefono`, `Nombre`, `motivoCambioOrganizacion`, `Ciudad`, `validar`) VALUES
(1227, 'lamanuela@gmail.com', 'entre armnia y montnegro', '7404985', 'manuela hotel', 'porque si', 'montenegro', ' '),
(1569, 'fotocopias200@yahoo.es', 'cr 13#21', '7440338', 'fotocopias200', 'es la mejor', 'pereira', '1'),
(1993, 'espumas@hotmail.com', 'centro carrera 19', '7412049', 'espumas del quindio', '', 'Armenia', ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Valor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `Nombre`, `Valor`) VALUES
(1, 'Numero de sugerencias a mostrar', '5'),
(2, 'Dias Para Inactivar un Foro', '5'),
(3, 'Fecha inicial para vinculacion de Integrantes a grupos', '20151219'),
(4, 'Opciones Modificar', '1'),
(5, 'Cantidad de dias para realizar la evaluacion', '5'),
(6, 'Cantidad de dias para subir un informe de seguimiento', '8'),
(7, 'Dispersion entre evaluaciones', '5'),
(8, 'cantidad de dias para reclamacion', '5'),
(9, 'Personas autorizadas para emitir aprobacion de elegibles', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillas`
--

CREATE TABLE IF NOT EXISTS `plantillas` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `texto` text NOT NULL,
  `enlaces` text NOT NULL,
  `imagenes` text NOT NULL,
  `fecha` text NOT NULL,
  `notificacion` text NOT NULL,
  `alerta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plantillas`
--

INSERT INTO `plantillas` (`id`, `titulo`, `descripcion`, `texto`, `enlaces`, `imagenes`, `fecha`, `notificacion`, `alerta`) VALUES
(1, 'Adiccion de materias', 'es el formato para agregar una materia', 'dfsdf', ' 12', ' http://insuco.edu.mx/images/licenciaturas/22-campo_laboral.jpg', '20141127', '1', '1'),
(2, 'Cancelacion de materia', 'es el formato para cancelar una materia', 'dsdasdfdsjlkjhk\r\ndfs', ' ', ' http://www.cedip.edu.mx/img/iscee/iscee1.jpg', ' ', '', ''),
(3, 'Modificar registro', 'es el formato para modificar el registro de las materias', ' ', '  ', ' http://4.bp.blogspot.com/_pIKOZEfTHmM/SuJqzl4hbII/AAAAAAAAADo/zGSSrhLdoEg/s320/sistemas.jpg', ' ', '', ''),
(4, 'modificar clave academusoft', 'formato para solicitar cambio de clave', ' ', ' ', ' http://www.chistes21.com/img/chistes/8619_barba--sistema-operativo.jpg', ' ', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `investigador`
--
ALTER TABLE `investigador`
 ADD PRIMARY KEY (`Numero_Documento`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
 ADD PRIMARY KEY (`Nit`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantillas`
--
ALTER TABLE `plantillas`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
