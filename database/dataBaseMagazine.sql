-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 16-03-2020 a las 11:49:01
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `databasemagazine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext,
  `fecha` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments_usuario` (`usuario_id`),
  KEY `fk_comments_categoria` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`, `image`) VALUES
(1, 1, 1, 'La importancia de los modelos de control para prevenir la ayuda elpolen a mejorar la fermentación alcohólica del vino', 'Investigadores de la Universidad de Cádiz, integrante del ceiA3, dirigidos por el profesor Víctor Palacios, y en colaboración con el Instituto Catalán de la Viña y el Vino (INCAVI).', '2020-03-11', NULL),
(2, 1, 3, 'Entertainment', 'Or you can simply remove buttons in this Bootstrap layout templates if you don\'t want them to be shown. It\'s OK to leave a small description of your work.', '2020-03-11', NULL),
(3, 1, 3, 'Event Organization', 'List services you can provide in this section of Bootstrap layout templates. You can add other pages to provide more detailed info to your sites and edit the buttons.', '2020-03-13', NULL),
(4, 1, 4, 'El sector de turrones y mazapanes prevé cerrar 2019 con un incremento del 4% en sus ventas', 'La industria española del turrón y el mazapán prevé cerrar 2019 con un incremento del 4% en sus ventas, respecto a los resultados del ejercicio anterior. Así lo reflejan las estimaciones realizadas por PRODULCE (Asociación Española del Dulce) que integra a 70 de las principales compañías de este mercado. ', '2020-03-14', 'elaboradoTurron.jpg'),
(5, 1, 3, 'Legislación: Estructura orgánica básica de los departamentos ministeriales', 'Se ha publicado el Real Decreto 430/2020, de 3 de marzo, por el que se desarrolla la estructura orgánica básica del Ministerio de Agricultura, Pesca y Alimentación, y por el que se modifica el Real Decreto 139/2020, de 28 de enero, por el que se establece la estructura orgánica básica de los departamentos ministeriales.', '2020-03-15', 'depMinisteriales.jpg'),
(6, 1, 3, 'Avances técnicos del Proyecto Detección y Erradicación Almendra Amarga', 'En relación al desarrollo y ejecución técnica del proyecto, el Dr. Xavier Miarnau del IRTA-Instituto de Investigación y Tecnología Agroalimentarias, expuso las conclusiones de los trabajos realizados durante la primera anualidad y se planificaron las actividades para la próxima campaña.', '2020-03-15', 'ServicioAvanceTecnico.jpg'),
(7, 1, 1, 'Científicos y viticultores europeos se alían para evitar la pérdida de diversidad vitícola', '\r\nSe consideran variedades minoritarias aquellas que ocupan menos del 0,02% de la superficie total de viñedo de un país. A pesar de que todas ellas se conservan en colecciones vivas de distintas instituciones científicas, no es suficiente para evitar su desaparición.', '2020-03-15', 'vitucultores.jpg'),
(8, 1, 1, 'Subproductos de la cerveza para reinventar las proteínas', 'Smart Protein, que se lanzará el 1 de enero de 2020, es una colaboración de cuatro años y 9,6 millones de euros entre 33 socios de 21 países para desarrollar nuevas proteínas utilizando subproductos de la producción de pasta, pan y cerveza, ingredientes que actualmente apenas se utilizan en la producción de alimentos.', '2020-03-15', 'proteina.jpg'),
(9, 1, 5, 'El Tetra Brik más sostenible: el 89% de sus materiales procede de fuentes renovables', 'El 81% de las personas cree que la conservación del medioambiente es un problema inmediato y urgente (según datos de un estudio realizado por la consultora Kantar). Y, lo que es más importante, un buen número de ellas están dispuestas a hacer algo para contribuir a solucionarlo. hasta un 54% de las personas pagaría un precio algo más alto a cambio de productos elaborados de manera sostenible.', '2020-03-15', 'tetabrick.jpg'),
(10, 1, 5, 'La automatización de las tiendas ayuda a recuperar clientes en el canal físico', 'Los frutos secos se caracterizan por presentar un contenido en agua inferior al 50% y un contenido en grasa que se sitúa entre el 45% y el 75%. Este perfil lipídico hace que los frutos secos sean susceptibles de sufrir transformaciones químicas que ocasionan alteraciones en sus propiedades sensoriales y características nutritivas y sanitarias.', '2020-03-15', 'frutosSecos.jpg'),
(11, 1, 5, 'Los conductores podrán moverse por las zonas de Italia restringidas por el coronavirus', 'El Gobierno italiano ha impuesto medidas extraordinarias que afectan al norte del país para evitar la expansión del coronavirus. Su presidente, Giuseppe Conte, ha firmado un decreto mediante el que se establece que la región de Lombardía y otras 14 provincias ', '2020-03-15', 'conductores.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'BEBIDA'),
(2, 'CONSERVAS'),
(3, 'SERVICIOS'),
(4, 'ELABORADO'),
(5, 'DISTRIBUCIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `lastname`, `email`, `rol`) VALUES
(1, 'ADMIN', 'salaz', 'admin@admin.es', 'admin'),
(2, 'Vanesa', 'salazar', 'vancig1128@gmail.com', 'user'),
(3, 'Robert', 'Arias', '11rsahome@gmail.com', ''),
(5, 'Robert', 'Arias', 'dilanbad19@hotmail.com', ''),
(8, 'Robert', 'Arias', 'di3@hotmail.com', ''),
(10, 'Thomas', 'Slazar', 'Thomas@hotmail.com', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_comments_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_comments_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
