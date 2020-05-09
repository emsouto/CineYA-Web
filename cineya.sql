-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2020 a las 22:18:05
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cineya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `usuario` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario`, `contrasena`) VALUES
('Emmanuel', 'Souto'),
('Emmanuel', 'Souto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cines`
--

CREATE TABLE IF NOT EXISTS `cines` (
  `Id` int(90) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `Direccion` varchar(90) NOT NULL,
  `Url` varchar(90) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `cines`
--

INSERT INTO `cines` (`Id`, `Nombre`, `Direccion`, `Url`) VALUES
(1, 'Hoyts Abasto	', 'Av. Corrientes 3200. Abasto.', 'http://guia.lanacion.com.ar/cine/sala/hoyts-abasto-de-buenos-aires-sa95'),
(2, 'Atlas Patio Bullrich	', 'Posadas 1245. Recoleta.		', 'http://guia.lanacion.com.ar/cine/sala/atlas-patio-bullrich-sa119'),
(3, 'Village Recoleta', 'Vicente Lopez y Junin. Recoleta.', 'http://guia.lanacion.com.ar/cine/sala/village-recoleta-sa400'),
(4, 'Cinema City General Paz	', 'Av. Cabildo 2702. Belgrano.', 'http://guia.lanacion.com.ar/cine/sala/cinema-city-general-paz-sa126'),
(5, 'Showcase Belgrano', 'Monroe 1655. Belgrano.', 'http://guia.lanacion.com.ar/cine/sala/showcase-cinemas-belgrano-sa170'),
(6, 'Multiplex Belgrano	', 'Obligado y Mendoza. Belgrano.', 'http://guia.lanacion.com.ar/cine/sala/belgrano-multiplex-sa125'),
(7, 'Arte Multiplex Belgrano', 'Av. Cabildo 2829. Belgrano.', 'http://guia.lanacion.com.ar/cine/sala/cabildo-multiplex-sa1006'),
(8, 'Cinemark Caballito', 'Av. La Plata 96. Caballito.		', 'http://guia.lanacion.com.ar/cine/sala/cinemark-caballito-sa130'),
(9, 'Village Caballito', 'Av. Rivadavia 5071. Caballito.	', 'http://guia.lanacion.com.ar/cine/sala/village-caballito-sa446'),
(10, 'Premier', 'Av. Corrientes 1565. San Nicolas.', 'http://guia.lanacion.com.ar/cine/sala/premier-sa120'),
(12, 'Lorca', 'Av. Corrientes 1428. San Nicolas.', 'http://guia.lanacion.com.ar/cine/sala/lorca-sa110'),
(13, 'Monumental Lavalle', 'Lavalle 780. San Nicolas.', 'http://guia.lanacion.com.ar/cine/sala/monumental-sa229'),
(14, 'Espacio INCAA Km 0 Gaumont', 'Av. Rivadavia 1635. Monserrat.', 'http://guia.lanacion.com.ar/cine/sala/espacio-incaa-sala-gaumont-sa107'),
(15, 'Monumental Lavalle 4D', 'Lavalle 780. San Nicolas.', 'http://guia.lanacion.com.ar/cine/sala/monumental-4d-e-motion-sa1167'),
(16, 'Atlas Flores', 'Rivera Indarte 44. Flores.	', 'http://guia.lanacion.com.ar/cine/sala/atlas-flores-sa133'),
(18, 'Cinemark Palermo', 'Beruti 3399. Palermo.', 'http://guia.lanacion.com.ar/cine/sala/cinemark-palermo-sa223'),
(19, 'Atlas Alcorta', 'Salguero 3172. Palermo.		', 'http://guia.lanacion.com.ar/cine/sala/atlas-alcorta-sa985'),
(20, 'Cinemark Puerto Madero', 'Alicia Moreau de Justo 1920. Puerto Madero.', 'http://guia.lanacion.com.ar/cine/sala/cinemark-puerto-madero-sa102'),
(21, 'Cinema Devoto', 'J. P. Varela 4866. Villa Devoto.	', 'http://guia.lanacion.com.ar/cine/sala/cinema-devoto-sa407'),
(22, 'Hoyts Dot', 'Vedia 3626, 3er Nivel. Saavedra.', 'http://guia.lanacion.com.ar/cine/sala/hoyts-dot-sa520'),
(23, 'Hoyts Dot Premium', 'Vedia 3626, 3er Nivel. Saavedra.', 'http://guia.lanacion.com.ar/cine/sala/hoyts-dot-premium-sa522'),
(24, 'CPM Cinemas Del Parque Shopping', 'Cuenca 3035 Villa del Parque.', 'http://guia.lanacion.com.ar/cine/sala/cpm-cinemas-del-parque-shopping-sa1154');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciopelis`
--

CREATE TABLE IF NOT EXISTS `iniciopelis` (
  `Nombres` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Genero` varchar(250) NOT NULL,
  PRIMARY KEY (`Nombres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `iniciopelis`
--

INSERT INTO `iniciopelis` (`Nombres`, `Url`, `Genero`) VALUES
('Bloodshot', 'https://www.clarin.com/espectaculos/cine/image/bloodshot_9425.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Buscando justicia', 'https://www.clarin.com/espectaculos/cine/image/buscando-justicia_9371.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('El hombre invisible', 'https://www.clarin.com/espectaculos/cine/image/el-hombre-invisible_9455.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('El llamado salvaje', 'https://www.clarin.com/espectaculos/cine/image/el-llamado-salvaje_9470.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('El precio de la verdad', 'https://www.clarin.com/espectaculos/cine/image/el-precio-de-la-verdad_9531.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Familia', 'https://www.clarin.com/espectaculos/cine/image/familia_9560.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Grandes espÃ­as', 'https://www.clarin.com/espectaculos/cine/image/grandes-espias_9249.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('La biblioteca de los libros olvidados', 'https://www.clarin.com/espectaculos/cine/image/la-biblioteca-de-los-libros-olvidados_9559.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('La sombra del gallo', 'https://www.clarin.com/espectaculos/cine/image/la-sombra-del-gallo_9550.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Los Caballeros', 'https://www.clarin.com/espectaculos/cine/image/los-caballeros_9521.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Los Miserables', 'https://www.clarin.com/espectaculos/cine/image/los-miserables_9539.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Ni hÃ©roe ni traidor', 'https://www.clarin.com/espectaculos/cine/image/ni-heroe-ni-traidor_9523.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Querido SeÃ±or', 'https://www.clarin.com/espectaculos/cine/image/querido-seor_9530.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Unidos', 'https://www.clarin.com/espectaculos/cine/image/unidos_9209.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>'),
('Unidos 3D', 'https://www.clarin.com/espectaculos/cine/image/unidos-3d_9572.jpg', '<p class="clase">Apta para todo pÃºblico con leyenda</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `contrasena` varchar(15) DEFAULT NULL,
  `repcontrasena` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
