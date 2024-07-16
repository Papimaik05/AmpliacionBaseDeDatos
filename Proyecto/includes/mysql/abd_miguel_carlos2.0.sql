-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2023 a las 17:56:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abd_miguel_carlos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraexperiencia`
--
DROP TABLE IF EXISTS `compraexperiencia`;
CREATE TABLE IF NOT EXISTS `compraexperiencia` (
  `nombre_usuario` varchar(20) NOT NULL,
  `id_experiencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--
DROP TABLE IF EXISTS `experiencias`;
CREATE TABLE IF NOT EXISTS `experiencias` (
  `nombre` varchar(25) NOT NULL,
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `nivelminimo` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`nombre`, `id`, `descripcion`, `precio`, `nivelminimo`, `puntos`, `imagen`) VALUES
('Pesca con Iniaki', 1, 'Sumérgete en esta aventura para poder vivir la experiencia de pescar con el inigualable Iniaki Arrizabalaga.', 150, 0, 2, './img/pesca_inaki.jpg'),
('Conoce a los pinguinos', 2, 'Adéntrate en esta aventura única en la que podrás relacionarte con los pinguinos y jugar a numerosos juegos entretenidos y originales.', 189, 0, 3, './img/pinguinos_madagascar.jpg'),
('Busquemos a Nemo', 3, 'Revive la experiencia de nuevo viviendo en primera persona la inigualable historia de buscando a Nemo.', 250, 1, 5, './img/nemo.jpg'),
('Nada entre tiburones', 4, 'Atrévete a disfrutar la máxima experiencia de esta tienda ¡NADAR ENTRE TIBURONES! SERÁ INOLVIDABLE.', 379, 2, 10, './img/jaula_tiburones.jpg'),
('Visita la Atlantida', 6, 'Dicen los rumores que bajo el lago del retiro de Madrid se encuentra una ciudad sumergida. Adéntrate con nuestros profesionales y descubre este enigma.', 120, 1, 4, './img/atlantida.jpg'),
('Barcas de Retiro', 7, 'Disfruta de un relajante paseo por el lago del retiro en las góndolas madrilenias. Impresiona con la cita mas romántica de la capital.', 50, 0, 1, './img/barcas.jpg'),
('Observa delfines', 8, '¡Descubre la emoción de avistar delfines y ballenas en libertad en las aguas de La Gomera! Podrás disfrutar de la maravillosa experiencia de ver estos animales majestuosos en su hábitat natural, sin interferir en su entorno. La actividad se realiza cumpliendo con los compromisos de calidad turística para garantizar un avistamiento responsable y respetuoso, sin barreras que interrumpan la vista del maravilloso océano Atlántico. ¡Aprovecha esta oportunidad única para conectarte con la naturaleza y crear recuerdos inolvidables!', 120, 0, 2, './img/delfines.jpg'),
('Paddle Surf', 9, '¡Aventúrate en el agua con nuestra emocionante excursión de paddle surf! Descubre la belleza del mar mientras haces ejercicio y disfrutas del aire libre en una tabla de surf especialmente diseniada. Nuestros guías expertos te enseniarán todo lo que necesitas saber para navegar y remar con seguridad mientras te sumerges en la naturaleza. Además, podrás disfrutar de impresionantes vistas y sorprenderte con la fauna marina. ¡Únete a nosotros para una experiencia inolvidable en el mar!', 180, 1, 5, './img/paddle.jpg'),
('Excursion en Kayak', 10, '¡Sumérgete en la naturaleza y disfruta de una experiencia única en el agua con nuestra emocionante excursión en kayak! Rema en tu propio ritmo mientras exploras hermosas costas, ríos y lagos, y descubre la vida silvestre que habita en sus alrededores. No necesitas experiencia previa, nuestro equipo de guías expertos te dará las instrucciones necesarias y te acompaniarán durante toda la aventura. ¡Ven y descubre la belleza del entorno desde una perspectiva diferente!', 170, 0, 2, './img/kayak.jpg'),
('Surf Extremo', 11, '¡Bienvenido al emocionante mundo del surf para los más valientes! Si eres un amante de la adrenalina y la emoción, esta actividad es para ti. Con tu tabla y tu traje de neopreno, podrás desafiar las olas más grandes y hacer maniobras que te llevarán al límite de tus habilidades.', 220, 2, 10, './img/surfear.jpg'),
('Paseo en Catamaran', 12, '¿Te imaginas disfrutar de un día increíble navegando por el mar en companiía de tus amigos o familia? Con una salida en catamarán podrás vivir una experiencia inolvidable, llena de diversión y relajación. Podrás disfrutar de las impresionantes vistas del mar y la costa, baniarte en aguas cristalinas y practicar snorkel para descubrir la belleza del fondo marino. Además, podrás disfrutar de una deliciosa comida a bordo y refrescarte con bebidas mientras te relajas bajo el sol y la brisa marina. ¡No hay nada mejor que disfrutar del mar en buena companiía en una experiencia de catamarán!', 250, 0, 2, './img/catamaran.jpg'),
('Gran Barrera De Coral', 13, 'La Gran Barrera de Coral Australia es todo un Jardín del Edén para los buceadores. En la zona de Queensland, esta aventura puede convertirse en una pesadilla si no se toman precauciones ante las letales medusas. Un ejemplo: la especie irukandji puede provocar la muerte con sus picaduras. Su veneno es cien veces más toxico que el de la cobra.', 260, 2, 10, './img/coral.jpg'),
('Rafting', 14, '¿Estás buscando una aventura emocionante y refrescante? ¡El rafting es la actividad perfecta para ti y tus amigos o familia! Desciende por un río en un bote inflable mientras trabajas en equipo para superar los rápidos y obstáculos en el camino. ¡Es una experiencia emocionante, llena de adrenalina y diversión para todas las edades y niveles de habilidad! Además, disfrutarás de vistas impresionantes de la naturaleza y un entorno único. Los guías expertos te proporcionarán todo el equipo necesario y te enseniarán las técnicas adecuadas para navegar en el río de manera segura. ¡No te pierdas esta experiencia única y divertida que nunca olvidarás!', 180, 1, 5, './img/rafting.jpg'),
('Descenso del Sella', 15, '¡Bienvenido a la emocionante aventura del Descenso del Sella! Prepárate para disfrutar de un día lleno de diversión y adrenalina en medio de la naturaleza asturiana. Descenderás por el río Sella en una balsa neumática, acompaniado por tus amigos o familiares, y un guía experto que te ayudará en todo momento. A medida que avanzas por el río, te sorprenderás con paisajes de ensuenio, con montanias y bosques verdes que rodean el río. Sentirás la emoción de las corrientes del río y tendrás que sortear obstáculos naturales, como rápidos y cascadas, que pondrán a prueba tu habilidad en el agua. ', 160, 0, 2, './img/sella.jpg'),
('Kite-Surf', 16, '¿Quieres sentir la emoción de volar sobre el agua y la brisa en tu rostro? El kite-surf es el deporte acuático perfecto para ti. Aprenderás a controlar una cometa gigante que te impulsará sobre tu tabla, realizando saltos impresionantes y maniobras acrobáticas en el agua. Nuestros instructores expertos te guiarán en todo momento para que tengas una experiencia segura y emocionante. ¡Sé parte de la comunidad de kite-surf y descubre una nueva forma de sentir la adrenalina en el agua!', 220, 1, 5, './img/kite-surf.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--
DROP TABLE IF EXISTS `nivel`;
CREATE TABLE IF NOT EXISTS `nivel` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `minimo` int(11) NOT NULL,
  `maximo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`numero`, `nombre`, `minimo`, `maximo`) VALUES
(0, 'Cangrejo', 0, 4),
(1, 'Delfin', 5, 9),
(2, 'megalodon', 10, 19),
(3, 'poseidon', 20, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--
DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `numero` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`numero`, `nombre`) VALUES
(0, 'admin'),
(1, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `password`, `email`, `rol`, `puntos`) VALUES
('admin', '$2y$10$ZyWYBdU27QpPrGpKnmzwj.czJ4iL639IDLQUcFNETY1RGxJewIomC', 'admin@gmail.com', 0, 20),
('user', '$2y$10$DeLJtcK3s2TfZT/jnhLKVOHWr.KcyzmcFi5xHy7N6zfucsLeMCjdi', 'user@gmail.com', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compraexperiencia`
--
ALTER TABLE `compraexperiencia`
  ADD KEY `nombre_usuario` (`nombre_usuario`),
  ADD KEY `id_experiencia` (`id_experiencia`);

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nivelminimo` (`nivelminimo`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compraexperiencia`
--
ALTER TABLE `compraexperiencia`
  ADD CONSTRAINT `compraexperiencia_ibfk_1` FOREIGN KEY (`id_experiencia`) REFERENCES `experiencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compraexperiencia_ibfk_2` FOREIGN KEY (`nombre_usuario`) REFERENCES `usuario` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD CONSTRAINT `experiencias_ibfk_1` FOREIGN KEY (`nivelminimo`) REFERENCES `nivel` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`numero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
