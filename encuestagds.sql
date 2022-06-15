-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2022 a las 17:04:53
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestagds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `razon_social` text NOT NULL,
  `rfc` text NOT NULL,
  `regimen_fiscal` text NOT NULL,
  `codigo_postal` varchar(6) NOT NULL,
  `pago_sat` text NOT NULL,
  `uso_cfi` text NOT NULL,
  `constancia_situacion_fiscal` text DEFAULT NULL,
  `cumplimiento_positiva_al_presente` text DEFAULT NULL,
  `comprobante_de_domicilio` text DEFAULT NULL,
  `fechaRegistro` date NOT NULL,
  `fechaModificacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `razon_social`, `rfc`, `regimen_fiscal`, `codigo_postal`, `pago_sat`, `uso_cfi`, `constancia_situacion_fiscal`, `cumplimiento_positiva_al_presente`, `comprobante_de_domicilio`, `fechaRegistro`, `fechaModificacion`) VALUES
(1, 'TENNANT VENTAS & SERVICIOS DE MEXICO SA DE CV', 'TVA100610S27', '601', '20900', '99', 'G03', 'b8d2775aea6e7d19897efbab970993d8.pdf', 'ec0ba7f1d6719d907c113856f32e6369.pdf', '23c2849a248489d9e23c0ede24fa2742.pdf', '2022-04-01', '2022-04-01'),
(2, 'GRUPO DIGITAL SYSTEMS SA DE CV', 'GDS980406NI4', '601', '06500', '3', 'G03', '211af80cf8a6119b342e92b6697862bf.pdf', 'b383f55ab80dc34231e6131fda193800.pdf', 'cd627901f0fafa0f01569a068c5ad21d.pdf', '2022-04-02', '2022-04-02'),
(3, 'COMPASS SOLUTIONS SA DE CV', 'CSO1402051F9', '601', '03330', '99', 'G03', '4b6a58fb2536989c8a9b795cd2271fe5.pdf', 'f63c3de47ea1b106528030e4fdfbaedc.pdf', '71dd0df1d1f523673992d2045d529181.pdf', '2022-04-04', '2022-04-04'),
(4, 'GREENBERG MACHINERY COMPANY SA DE CV', 'GMA1611088E8', '601', '11700', '3', 'G03', '8ea370d39a17a3ce7ea84f8102135d88.pdf', '34b73bc333fc00591da2be5909e6af58.pdf', '279f7aae201335bfcc17205f2c80bfdf.pdf', '2022-04-20', '2022-04-20'),
(5, 'TIMCO, SA DE CV', 'TIM740328A40', '601', '06430', '3', 'G03', 'e04b4240929aaa73cdc61aa10171c846.pdf', '50f8a7cab22a2f5434061140001b0a92.pdf', '3d7b73abfc01ecf55aefc5fc3e115f34.PDF', '2022-04-20', '2022-04-20'),
(6, 'ENVASES PUROS INTERNATIONAL DE MEXICO S DE RL DE CV', 'EPG080922TWA', '601', '05129', '99', 'G03', '1314529bc453da2a50f7892ba67face4.pdf', 'b82b1cda1288b416228caf0d71f2eaf1.pdf', 'e5a3ad83a3e0455c3779b6245a29c8fa.pdf', '2022-04-20', '2022-04-20'),
(7, 'JOM METODOS MEXICANOS, S.A. DE C.V.', 'JMM9103201X5', '601', '03100', '3', 'G03', 'fba051afdf499689735119894f5b5584.pdf', '746a07283f92adac9285c8dc516c7c4c.pdf', '691faa789d124adfd5b00c8cd9fc7cbd.pdf', '2022-04-21', '2022-04-21'),
(8, 'MARIA ELSA BONILLA DIAZ', 'BODE6504064U4', '612', '15700', '3', 'G03', '4cbec7ace92752b29dcb1eaf1424bbe2.pdf', '24d245b81965061d9f9ed1c4bd39aaa3.pdf', 'b5cf23cb0e96b95a1bbc4290d15f1872.pdf', '2022-04-25', '2022-04-25'),
(9, 'EDUARDO CABRERA MENDOZA', 'CAME720309KG8', '606', '06400', '3', 'G03', '9f3ccb2c4d62d5dc4ad8c5d0aef7ce59.pdf', 'e481a6be2a2baf730f1b610b3d10f8ab.pdf', '4f6e797bc9a3ea50316075e7d150c989.pdf', '2022-04-26', '2022-04-26'),
(10, 'SERVICIO DE NOTICIAS DE LA MUJER DE LATINOAMERICA Y DEL CARIBE, SEMLAC. A.C.', 'SNM1201253V5', '603', '03020', '1', 'G03', '6f47ff30cf1e85c52a9eac224bc0b69e.pdf', 'b7eeab1eb4edc6b7572e3e64fe27e262.pdf', 'ec8aed4de5c96e3e7482ef1dbbc06431.pdf', '2022-05-11', '2022-05-11'),
(11, 'VISION Y ENFOQUE CONSULTORES SA DE CV', 'VEC210802LS0', '601', '80100', '3', 'G03', '2b76a9530541f472a727e518c8180d05.pdf', '6c34c45e8efee71017fc9ad6fd5e28c2.pdf', 'b43ed918ce2fde1b6d1bf4a9af89f226.pdf', '2022-05-11', '2022-05-11'),
(12, 'IDEAS PARA EDUCAR SA DE CV', 'IED030329LV3', '601', '06400', '99', 'G03', '9a8e0d8617185718243909ee59931340.pdf', 'b2a1b4e584b29f55f008040c097c837a.pdf', '9a977b3b9c62c590b0eac625e85be647.pdf', '2022-05-11', '2022-05-11'),
(13, 'VIALPE SERVICES SA DE CV', 'VSE110608KP8', '601', '11700', '3', 'G03', '89d459a3d627ff3b04c4892bce199dc7.pdf', '4963810cb3c5a568c5523ea4714498ba.pdf', 'eb6e99b11f066d5735812ff38db85f0e.pdf', '2022-05-12', '2022-05-12'),
(14, 'CARMEN RAMONA PONCE MELÉNDEZ', 'POMC520526DIA', '612', '04920', '1', 'G02', 'c14513413a407d113a67c0b8ad1b89fc.pdf', '6084021bdd2e5267aa0d7210567bdafb.pdf', '1a211915773a0f07580d45aa8f658ad2.pdf', '2022-05-12', '2022-05-12'),
(15, 'COMUNICACIÓN E INFORMACIÓN DE LA MUJER, A.C.', 'CIM910820130', '603', '06050', '3', 'G03', 'f87a85b8f90936cfdc1534197fe24133.pdf', 'd8664b757925d1d088fb37ef82459463.pdf', 'edb84241f3777dc21516cb5f76e5f31f.pdf', '2022-05-12', '2022-05-12'),
(16, 'TOFSE MEXICO S DE RL DE CV', 'TME1111292S1', '601', '54060', '3', 'G03', '61ab8075e9eebd7eb5d0f084d097a1f4.pdf', '22fe412a46725dbb3c8ea0ba301c44e3.pdf', '67dd0f03db599b11cf1d3c5d7b946b9e.pdf', '2022-05-12', '2022-05-12'),
(17, 'GRUPO BESCO SA DE CV', 'GBE101207523', '601', '03240', '3', 'G03', '4956f87977751b48f7a60e473075b337.pdf', '56a1c88ab1a689ab69ebab3afde6d226.pdf', 'fd4b0191275359249683744fd7b584b0.pdf', '2022-05-13', '2022-05-13'),
(18, 'SISTEMA DE LECTURA AVANZADA AVANC MEXICO, SA DE CV', 'SLA190403C4A', '601', '11560', '3', 'G03', '5442b02c1a80e9dda30f16724f930050.pdf', '54e8bc4970f3d926f14e2ff372a6180b.pdf', '8fda61436dd83baab7331d7c210da1cb.pdf', '2022-05-18', '2022-05-18'),
(19, 'ASOCIACION MEXICANA DE DISTRIBUIDORES DEAUTOMOTORES AC', 'AMD891005M19', '603', '03103', '3', 'G03', 'fc314dd8650b5190993848706bf0f787.pdf', 'ca20a749e1a671b7699cfc3dacb685ad.pdf', '7962f550302ffff5ed4f2a1c4458290f.pdf', '2022-05-20', '2022-05-20'),
(20, 'UNIONMACHINERY LATAM, S.A. DE CV', 'GMA1611088E8', '601', '55680', '3', 'G03', '3b083b77f2ee69338b115a41c005540c.pdf', '1311d7f9f05fc2f7eb876a77174ce277.pdf', '320e2df4e620083a4ca219bce0d36d23.pdf', '2022-05-20', '2022-05-20'),
(21, 'GUTIGATO SA DE CV', 'GUT200123HC6', '601', '06700', '3', 'G03', 'b8d5f58e141af4225bd07ac3e144c3e4.pdf', '021468cc85a841ce5fa3e5bb3feeacd0.pdf', 'e58458e6f90cd112bded042b0612871e.pdf', '2022-05-20', '2022-05-20'),
(22, 'ASOCIACION MEXICANA DE DISTRIBUIDORES DE AUTOMOTORES AC', 'AMD891005M19', '603', '03103', '3', 'G03', '6c60f782765e6b68f169921c7c425f34.pdf', 'd63e97b02af16588081f043dcae07f38.pdf', '8c5039bb0b18c813d9d00cb509ba3651.pdf', '2022-05-20', '2022-05-20'),
(23, 'INSTITUTO AMDA DE CAPACITACION Y ADIESTRAMIENTO AC', 'IAC 7907259ZA', '601', '03103', '3', 'G03', '64a3517ccfad55275a072db8967432ff.pdf', '3298fbc710edff058f6dd21d6236a3b0.pdf', '95ceffc059d3bc981c185b5219692c6a.pdf', '2022-05-20', '2022-05-20'),
(24, 'MERCADERES SERVICIOS LABORALES Y ADMINISTRATIVOS SA DE CV', 'MSL0102267Y0', '601', '03103', '3', 'G03', 'ed04003658e1ff222007249fe8d5f5dc.pdf', '7c8fa4198a9790af6981575c79c7c47a.pdf', '9f141516f268a1bbb0b7c322162297a8.pdf', '2022-05-20', '2022-05-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
