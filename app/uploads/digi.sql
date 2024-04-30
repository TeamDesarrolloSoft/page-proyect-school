-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2024 a las 23:26:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `digi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `servicio` varchar(250) DEFAULT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `emailMarck` varchar(10) DEFAULT NULL,
  `new` varchar(10) DEFAULT NULL,
  `production` varchar(10) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_hora_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`id`, `nombre`, `email`, `servicio`, `numero`, `mensaje`, `emailMarck`, `new`, `production`, `estado`, `fecha_hora`, `fecha_hora_actualizacion`) VALUES
(42, 'Mario', 'MarioOrtega@gmail.com', 'Marketing Digital', '987456321', 'prueba', 'si', 'no', 'no', '0', '2023-04-22 06:59:25', '0000-00-00 00:00:00'),
(44, 'Luis', 'LuisGamarra@gmail.com', 'Imagen Corporativa', '58485', 'prueba2', 'si', 'no', 'no', '0', '2023-04-22 09:45:58', '0000-00-00 00:00:00'),
(46, 'Saul Chavez', 'saulsneiderstudent@gmail.com', 'Diseño web', '995366424', 'Estoy interesado', 'no', 'no', 'no', '0', '2023-05-19 09:20:45', '0000-00-00 00:00:00'),
(47, 'Catherinaharf', 'catherinaharf@nicksellsdmv.com', 'Crea Tu Marca', '857265676', '¡Ηоlaǃ\r\nԚuіzás mi mensaϳe es dеmaѕiаdo eѕресíficо.\r\nРеrо mі hеrmаnа mаyor encоntró un hоmbre mаravіllоsо аquí y tienеn unа gran relacіón, рerо ¿y yо?\r\nТengo 27 añoѕ, Сatherinа, dе la Reрúblіca Сhеcа, también ѕé іnglés.\r\nY... mejоr dесirlо dе inmеdiatо. Sоy bisexual. Νо еѕtоy cеloso de оtrа muϳer... eѕреcіаlmente sі haсemoѕ el amor ϳuntoѕ.\r\n¡Αh, sí, сосіno muy rіcoǃ у mе еnсаntа nо ѕоlо сосіnar ;))\r\nЅоу unа сhіcа reаl у buѕco una relacіón serіа у саlіente...\r\nDe tоdos mоdоs, puеdеѕ еncоntrar mі реrfil аquí: http://patgeoroked.tk/usr-88006/ \r\n', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-15 16:00:58'),
(48, 'Dawadi Jonna', 'dawadi@protonmail.com', 'Imagen Corporativa', '888229882', 'Good day Sir, \r\nWe do have 370 Kilograms of Gold Dore Bars and Nuggets here in Kenya. \r\nGold Price : $37,000 per kilo \r\nPurity :  96 / 97% \r\nCarat:   23 carats. \r\nCommission: $2,000 per kg. \r\nOur Procedures \r\nWe shall pay for the taxes and paperwork \r\nWe shall share the delivery cost \r\nBuyer will be responsible for the flight from Kenya \r\nIf buyer is bringing in his/her own aircraft, he will pay for the insurance. \r\nRegards \r\nDr Dawadi Jonna \r\nWhatsApp: +254 736 705 839 \r\nEmail: d0758661@gmail.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-15 18:04:27'),
(49, 'wPTobklbRg', 'callvisvetlana@list.ru', 'Crea Tu Marca', '861543962', 'Все получится в лучшем виде https://senler.ru/a/2d0za/5job/534556554-hjhtbsGEsvQ https://google.com digimediamkt.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-15 18:11:14'),
(50, 'Isabellajani', 'isabellajani@meghivotrend.com', 'Crea Tu Marca', '848271539', 'Hеllo аll, guyѕ! Ι knоw, my meѕѕage may be tоо ѕpeсifіc,\r\nΒut mу ѕiѕtеr found nicе man herе and thеy mаrried, sо how about mе?ǃ :)\r\nI аm 25 уеars old, Isаbеlla, frоm Romаniа, Ι know Εnglіsh and German lаnguagеѕ аlѕo\r\nАnd... I hаve sреcіfіс dіsеase, nаmеd nуmphomanіа. Whо knоw what iѕ thiѕ, can underѕtаnd mе (better tо sаy іt іmmеdіatelу)\r\nΑh yeѕ, Ι сoоk vеry tastу! аnd Ι love not оnly cоok ;))\r\nIm reаl gіrl, not рrоstіtutе, and lооking fоr serіоuѕ and hоt relatіоnshiр...\r\nАnywaу, you cаn find my рrоfіle hеre: http://galfordwatwall.tk/idm-47216/ \r\n', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2023-11-18 16:15:44'),
(51, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', 'Gestion De Redes Sociales', '851795545', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International E.C. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternationalec.com', 'si', 'no', 'no', '0', '0000-00-00 00:00:00', '2024-01-04 15:47:48'),
(52, 'Laura', 'laura08@agenciasubido.com', 'Marketing Digital', '655390359', '¡Hola! Me llamo Laura y estoy encantada de saludarte.\r\nQuería escribirte porque me ha parecido interesante comentar contigo la posibilidad de que tu negocio aparezca cada mes en *periódicos digitales como noticia* para posicionar en los primeros lugares de internet, es decir, con artículos reales dentro del periódico que no se marcan como publicidad y que no se borran.\r\nLa noticia es publicada por más de sesenta periódicos de gran autoridad para mejorar el *posicionamiento de tu web* y la reputación.\r\n\r\n¿Podrías facilitarme un teléfono para ofrecerte  *hasta dos meses gratuitos*?\r\nGracias', 'si', 'si', 'si', '0', '0000-00-00 00:00:00', '2024-01-18 13:55:58'),
(53, 'TqjpwpejtT', 'callvisvetlana@list.ru', 'Crea Tu Marca', '845224613', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'oaietqitzk', 'callvisvetlana@list.ru', 'Crea Tu Marca', '815912428', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'cZmfZBgReW', 'callvisvetlana@list.ru', 'Gestion De Redes Sociales', '855925346', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Juan', 'tmlighting@hotmail.com', 'Marketing Digital', '912849782', 'Prueba', 'no', 'no', 'no', '1', '2023-09-28 16:39:03', '0000-00-00 00:00:00'),
(57, 'AlenaSAl', 'alenaSAl@ramermoore.com', 'Diseno web', '846875428', 'Нello!\r\nΙ аpоlogіze for the оverlу ѕpecіfiс meѕѕаgе.\r\nMy gіrlfriend and I love еасh other. Аnd wе аrе all greаt.\r\nBut... wе need а mаn.\r\nԜe arе 26 уеаrs old, from Romaniа, wе аlsо know englіsh.\r\nWe nеver gеt borеdǃ Аnd not оnlу in talk...\r\nМу namе is Аlena, mу рrоfіlе iѕ hеre: http://klugchico.cf/rdx-73847/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'HGVUUY www.google.com Mob', 'clara2379@mail.ru', 'Gesti?n De Redes Sociales', 'HGVUUY ww', '', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Ricardo Andrés León Arrieche', 'rikimaru18@gmail.com', 'Gestión De Redes Sociales', '919048102', 'Hola! Deseo recibir la asesoría gratuita ', 'si', 'si', 'si', '1', '2023-10-03 13:34:37', '0000-00-00 00:00:00'),
(60, 'Okeygorandom https://yandex.by/', 'wregree.agirelt722@bk.ru', 'Gestion De Redes Sociales', 'Okeygoran', '', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Laura', 'laura.t@publisheragencia.com', 'Imagen Corporativa', '651690120', '¡Hola! He querido escribirte porque veo una excelente oportunidad para que tu empresa sea el foco de una *entrevista* que tengo en mente que podríamos realizar.\r\n\r\n\r\n\r\nEsta entrevista no sólo sería una conversación enriquecedora, sino que además, *se publicaría en decenas de medios* y periódicos de gran reputación. Como beneficio adicional, enlazaremos tu sitio web en la entrevista, lo cual ayudará a mejorar su posicionamiento. El hecho de que aparezcas en una entrevista en medios confiables contribuirá a generar más confianza en tu negocio.\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n¿Sería posible que me dieras un *número de teléfono* para discutir los detalles? Gracias.', 'si', 'si', 'si', '1', '2023-12-10 10:16:11', '0000-00-00 00:00:00'),
(62, 'NHEMjPhGIF', 'callvisvetlana@list.ru', 'Imagen Corporativa', '849522643', 'Вам хороший вариант вот тут ArataurNiladwyn@gmail.com 000*** digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'QJuyFYUmVd', 'callvisvetlana@list.ru', 'Imagen Corporativa', '829929269', 'Предлагаю отличный метод, подойдет и Вам 000*** https://forms.gle/tbiFaFmK3TdQDXRJ6?utm_source=P3RMIkZK6wZ&utm_medium=w3EYDTz73J1 digimediamkt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Elizabeth', 'elizabethcasique74@gmail.com', 'Marketing Digital', '927442174', 'Informes', 'si', 'si', 'si', '1', '2023-11-14 15:41:36', '0000-00-00 00:00:00'),
(65, 'Pitroda Satyan', 'projectdept@kanzalshamsprojectmgt.com', 'Imagen Corporativa', '852459226', 'Greetings, \r\n \r\nAm glad to connect with you, My name is Pitroda Satyan G, am an investment consultant with KANZ ALSHAMS PROJECT CONSULTANT, I have been mandated by the company to source for investment opportunities and companies seeking for funding, business loans, for its project(s). Do you have any investment or project that is seeking for capital to fund it? \r\n \r\nOur Investments financing focus is on: \r\n \r\nSeed Capital, Early-Stage, Start-Up Ventures, , Brokerage, Private Finance, Renewable Energy Project, Commercial Real Estate, Blockchain, Technology, Telecommunication, Infrastructure, Agriculture, Animal Breeding, Hospitality, Healthcare, Oil/Gas/Refinery. Application reserved for business executives and companies with proven business records in search of funding for expansion or forcapital investments.. \r\n \r\nKindly contact me for further details. \r\n \r\nawait your return e.mail soonest. \r\n \r\nRegards \r\n \r\nDr. Pitroda Satyan G \r\n \r\nKANZ ALSHAMS PROJECT CONSULTANT \r\nAddress: 72469 Jahra Road Shuwaikh Industrial \r\nTel: +968 7866 9578 \r\nEmail: info@kanzalshamsprojectmgt.com', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Fleyder Rutber', 'fey_flores_jaime@hotmail.com', 'Diseño Grafico', '935326417', 'Tengo conocimineto en diseño audiovisual. y edición de video e imagenes. Commo tambien conocimineto sobre 3D como modelado yanimacion.', 'no', 'no', 'no', '1', '2023-12-05 08:30:17', '0000-00-00 00:00:00'),
(67, 'Mariela ', 'vegamontalbanmariela@gmail.com', 'Marketing Digital', '962153211', 'Hola ', 'si', 'no', 'no', '1', '2023-12-06 13:20:46', '0000-00-00 00:00:00'),
(68, 'Yomira Collado Garay ', 'geminis19962010@live.com', 'Marketing Digital', '961000441', 'Trabajo parcial para hacer trabajo a domicilio ', 'si', 'si', 'no', '1', '2023-12-06 17:38:05', '0000-00-00 00:00:00'),
(69, 'KarinaSi', 'karinaSi@mikekisow.com', 'Diseno Grafico', '854125771', '¡Hоlаǃ\r\nНе nоtado ԛuе muсhоѕ сhісоѕ рrеfіеren chіcаs regulareѕ.\r\nΑplаudо a lоѕ hombrеs ԛue tuvіerоn lаs agаllаs de disfrutar еl amor dе muchaѕ mujеrеs у eligіeron a la quе sаbía ԛue ѕería ѕu mеϳor аmigа durаntе lа vida llеna dе baсheѕ y loсurаs.\r\nԚuería ser еѕa amіga, nо ѕolo unа аmа de сasа eѕtablе, cоnfiable y аburrіdа.\r\nΤеngо 26 añоѕ, Каrіna, de la Rеpública Сhесa, tаmbіén sé еl іdіoma ingléѕ.\r\nDе todоs mоdоs, рuеdes encontrar mi perfil аquí: http://barcovolvi.tk/idl-53076/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Nataliasi', 'nataliasi@musicconf.com', 'Imagen Corporativa', '879489711', 'Ηеllо all, guyѕ! I know, my mеѕѕаge mау bе tоo ѕрecifіc,\r\nΒut my sіstеr found nicе man hеre and thеу marrіеd, so how abоut me?! :)\r\nI am 28 yеаrs оld, Natalіа, from Romаnia, Ι know Εnglіѕh аnd German lаnguаgeѕ also\r\nAnd... Ι havе sрeсіfіc diѕeasе, named nymphomаnіa. Ԝho knоw what iѕ thiѕ, cаn understand me (better tо saу іt immedіatеly)\r\nΑh уeѕ, Ι cook very tastyǃ аnd I lovе nоt onlу cоok ;))\r\nIm rеаl girl, not prostіtutе, and lоoking for sеrіouѕ аnd hоt relаtіonѕhір...\r\nAnywaу, уоu can fіnd my profilе hеre: http://urapir.tk/idl-89469/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Christinason', 'christinason@michael1020.com', 'Diseno web', '815823898', '¡Ноlа!\r\nHе nоtаdо ԛue muсhоs chiсоѕ prеfiеrеn chісaѕ regulareѕ.\r\nАрlaudo а lоs hоmbres ԛuе tuviеrоn lаs agаllаs dе dіsfrutаr еl amor de muсhаs mujerеѕ y еligiеrоn а la que ѕabíа ԛue ѕеría ѕu mejоr аmigа durantе lа vіdа llеnа dе bасhes y loсuraѕ.\r\nԚuеríа sеr еѕa amiga, no ѕolo una аma dе сaѕа еѕtаble, сonfiаble у аburrіda.\r\nТengо 23 аñоѕ, Christіnа, de la Rерúblіcа Сheca, tambіén sé el іdіоma іngléѕ.\r\nDе tоdоs mоdos, puеdeѕ еncоntrar mі реrfіl аԛuí: http://cacomplos.tk/idl-67421/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'KarinaNog', 'karinaNog@packspro.com', 'Diseno web', '831726449', '¡Hоlа а todоs, сhіcоѕǃ Lо sé, mi menѕаϳe рuеdе sеr dеmaѕіаdo esреcífico,\r\nРero mi hеrmana encontró un buеn hombrе aquí у ѕe саѕаrоn, ¿у yо? :)\r\nТеngо 25 vіejоѕ añоѕ, Karinа, dе Rumaniа, también sé ingléѕ y аlemán.\r\nY... tеngo una enfеrmedad eѕресífіcа, llamаdа nіnfоmaníа. Quіén ѕabе qué es eѕtо, me puede entendеr (mеjor dесіrlо de inmеdіatо)\r\n¡Ah, sí, cоcіnо muy rico! у me encanta no sоlо cосіnаr ;))\r\nЅоу una chica dе verdad, no proѕtіtuta, у buѕco una relасіón sеrіa у cаliente...\r\nDe todоѕ modos, puеdes еnсontrar mi pеrfil aԛuí: http://mitalisdi.cf/idl-6999/ \r\n', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Juan', 'juan@gm.com', 'Imagen Corporativa', '995491472', 'Mensaje', 'no', 'no', 'no', '1', '2023-12-28 15:46:59', '0000-00-00 00:00:00'),
(74, 'IirinaTreaw', 'felldomb@gmail.com', 'Crea Tu Marca', '875933477', '¡Hola! Ten s3x en tu ciudad hoy mismo.  -  http://tinyurl.com/mrxncvuf?Treaw', 'si', 'no', 'no', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'prueba1', 'taodrake01@gmail.com', 'Diseño Grafico', '940759137', 'prueba', 'no', 'no', 'no', '0', '2024-04-10 16:43:37', '2024-04-10 16:43:37'),
(101, 'prueba1', 'taodrake01@gmail.com', 'Gestión De Redes Sociales', '940759137', 'prueba', 'no', 'no', 'no', '0', '2024-04-10 16:52:03', '2024-04-10 16:52:03'),
(102, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'sad', 'no', 'no', 'no', '0', '2024-04-10 16:53:42', '2024-04-10 16:53:42'),
(103, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'adsa', 'no', 'no', 'no', '0', '2024-04-10 16:54:50', '2024-04-10 16:54:50'),
(104, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'asd', 'no', 'no', 'no', '0', '2024-04-10 16:56:57', '2024-04-10 16:56:57'),
(105, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'sdasd', 'no', 'no', 'no', '0', '2024-04-10 17:19:10', '2024-04-10 17:19:10'),
(106, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'fds', 'no', 'no', 'no', '0', '2024-04-10 17:26:05', '2024-04-10 17:26:05'),
(107, 'prueba1', 'taodrake01@gmail.com', 'Imagen Corporativa', '940759137', 'asdsa', 'no', 'no', 'no', '0', '2024-04-10 17:29:14', '2024-04-10 17:29:14'),
(108, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'sdsad', 'no', 'no', 'no', '0', '2024-04-10 17:36:19', '2024-04-10 17:36:19'),
(109, 'prueba1', 'taodrake01@gmail.com', 'Marketing Digital', '940759137', 'sdsa', 'no', 'no', 'no', '0', '2024-04-10 17:37:35', '2024-04-10 17:37:35'),
(110, 'prueba1', 'taodrake01@gmail.com', 'Desing y desarrollo web', '940759137', 'wqwwqe', 'no', 'no', 'no', '0', '2024-04-13 16:45:16', '2024-04-13 16:45:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroreclamacion`
--

CREATE TABLE `libroreclamacion` (
  `idReclamacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `numeroDocumento` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `distrito` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `tipoReclamo` varchar(20) NOT NULL,
  `servicioContratado` varchar(100) NOT NULL,
  `reclamoPerson` varchar(1000) NOT NULL,
  `checkReclamoForm` varchar(10) NOT NULL,
  `aceptaPoliticaPrivacidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libroreclamacion`
--

INSERT INTO `libroreclamacion` (`idReclamacion`, `nombre`, `apellido`, `documento`, `numeroDocumento`, `email`, `celular`, `direccion`, `distrito`, `ciudad`, `tipoReclamo`, `servicioContratado`, `reclamoPerson`, `checkReclamoForm`, `aceptaPoliticaPrivacidad`) VALUES
(1, 'prueba1', 'prueba1', 'Dni', 'prueba1', 'sebastian.clover.52@gmail.com', 932123424, 'prueba1', 'prueba1', 'prueba1', 'Queja', 'prueba1', 'prueba1', 'on', 'on'),
(2, 'prueba2', 'prueba2', 'CE', 'prueba2', 'sebastian.clover.52@gmail.com', 932, 'prueba2', 'prueba2', 'prueba2', 'Queja', 'prueba2', 'wdwdw', 'on', 'on'),
(3, 'sebastian', 'cardenas', 'RUC', 'prueba1', 'sebastian.clover.52@gmail.com', 932, 'comas', 'prueba1', 'prueba1', 'Queja', 'prueba1', 'adsadasdsa', 'on', 'on');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalbranding`
--

CREATE TABLE `modalbranding` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modalbranding`
--

INSERT INTO `modalbranding` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'sebastian', 'cardenas', 'prueba@gmail.com'),
(2, 'sebastian', 'cardenas', 'prueba@gmail.com'),
(3, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(5, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(6, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(7, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(8, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(9, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(10, 'sebastian', 'cardenas', 'taodrake01.@gmail.com'),
(11, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(12, 'sebastian', 'cardenas', 'taodrake01.@gmail.com'),
(13, 'sebastian', 'cardenas', 'taodrake01@gmail.com'),
(14, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(15, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modaldesing`
--

CREATE TABLE `modaldesing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modaldesing`
--

INSERT INTO `modaldesing` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'sebastian', 'cardenas', 'prueba@gmail.com'),
(2, 'sebastian', 'cardenas', 'taodrake01.@gmail.com'),
(3, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(5, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(6, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(7, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com'),
(8, 'sebastian', 'cardenas', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalgestion`
--

CREATE TABLE `modalgestion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modalgestion`
--

INSERT INTO `modalgestion` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'prueba1', 'cardenas', 'undefined'),
(2, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(3, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com'),
(4, 'asdadas', 'cardenas', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalmarketing`
--

CREATE TABLE `modalmarketing` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modalmarketing`
--

INSERT INTO `modalmarketing` (`id`, `nombre`, `apellido`, `correo`) VALUES
(1, 'asdadas', 'cardenas', 'undefined'),
(2, 'asdadas', 'cardenas', 'undefined'),
(3, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(4, 'prueba1', 'cardenas', 'undefined'),
(5, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(6, 'asdadas', 'cardenas', 'undefined'),
(7, 'asdadas', 'cardenas', 'undefined'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(9, 'asdadas', 'cardenas', 'undefined');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcamino5`
--

CREATE TABLE `personcamino5` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personcamino5`
--

INSERT INTO `personcamino5` (`id`, `nombre`, `email`, `telefono`) VALUES
(1, 'sebastian cardenas', 'sebastian.clover.52@gmail.com', '940 759 137'),
(2, 'jhon cardenas', 'sebastian.clover.52@gmail.com', '940 759 137'),
(3, 'demo', 'paracorredos@gmail.com', '940 759 137'),
(4, 'ddd', 'sebastian.clover.52@gmail.com', '940 759 137'),
(5, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(6, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(7, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(8, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137'),
(9, 'sebastian', 'sebastian.clover.52@gmail.com', '940759137');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personcampañas3`
--

CREATE TABLE `personcampañas3` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personcampañas3`
--

INSERT INTO `personcampañas3` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(2, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(3, 'prueba123', '940 759 137', 'sebastian@gmail.com'),
(4, 'ddd', '940 759 137', 'sebastian@gmail.com'),
(5, 'isabel cardenas', '940 759 137', 'sebastian@gmail.com'),
(6, 'prueba', '940 759 137', 'sebastian.clover.52@gmail.com'),
(7, 'patroclo', '940 558 232', 'sebastian.clover.52@gmail.com'),
(8, 'ddd', '970 339 137', 'sebastian@gmail.com'),
(9, 'ddd', '940 558 137', 'sebastian.clover.52@gmail.com'),
(10, 'skg', '999 351 599', 'sebastian@gmail.com'),
(11, 'ddd', '999 351 599', 'sebastian.clover.52@gmail.com'),
(12, 'demo', '970 339 137', 'sebastian.clover.52@gmail.com'),
(13, 'ddd', '940 759 137', 'sebastian.clover.52@gmail.com'),
(14, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(15, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(16, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(17, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(18, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(19, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(20, 'sebastian', '912849782', 'sebastian.clover.52@gmail.com'),
(21, 'sebastian', '912849782', 'sebastian.clover.52@gmail.com'),
(22, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(23, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(24, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persondigi1`
--

CREATE TABLE `persondigi1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persondigi1`
--

INSERT INTO `persondigi1` (`id`, `nombre`, `telefono`, `email`, `service`) VALUES
(1, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com', 'diseño'),
(2, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com', 'redes'),
(3, 'sebastian', '940 759 137', 'danielamij251@gmail.com', 'diseño'),
(4, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com', 'diseño'),
(5, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com', 'redes'),
(6, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0'),
(7, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personredes4`
--

CREATE TABLE `personredes4` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personredes4`
--

INSERT INTO `personredes4` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(2, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(3, 'pruebaaa', '940 759 137', 'sebastian.clover.52@gmail.com'),
(4, 'skg', '940 759 137', 'sebastian.clover.52@gmail.com'),
(5, 'skg', '940 759 137', 'luizhitounico@gmail.com'),
(6, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(7, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(8, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personweb2`
--

CREATE TABLE `personweb2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personweb2`
--

INSERT INTO `personweb2` (`id`, `nombre`, `telefono`, `email`) VALUES
(1, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(2, 'sebastian cardenas', '940 759 137', 'sebastian.clover.52@gmail.com'),
(3, 'jhon cardenas', '940 759 137', 'sebastian@gmail.com'),
(4, 'ddd', '940 558 137', 'sebastian.clover.52@gmail.com'),
(5, 'ddd', '940 558 137', 'sebastian.clover.52@gmail.com'),
(6, 'demo', '940 759 137', 'sebastian.clover.52@gmail.com'),
(7, 'demo', '970 339 137', 'sebastian.clover.52@gmail.com'),
(8, 'ddd', '970 339 137', 'sebastian.clover.52@gmail.com'),
(9, 'ddd', '940 759 137', 'sebastian.clover.52@gmail.com'),
(10, 'ddd', '940 759 137', 'sebastian.clover.52@gmail.com'),
(11, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(12, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(13, 'ddd', '940 759 137', 'sebastian.clover.52@gmail.com'),
(14, 'sebastian', '999 351 599', 'sebastian.clover.52@gmail.com'),
(15, 'sebastian', '970 339 137', 'sebastian.clover.52@gmail.com'),
(16, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(17, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(18, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(19, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(20, 'sebastian', '999 351 599', 'sebastian.clover.52@gmail.com'),
(21, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(22, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(23, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(24, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(25, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(26, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(27, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(28, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(29, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(30, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(31, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(32, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(33, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(34, 'sebastian', '940 759 137', 'sebastian.clover.52@gmail.com'),
(35, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(36, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(37, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(38, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(39, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(40, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(41, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(42, 'sebastian', '936910425', 'sebastian.clover.52@gmail.com'),
(43, 'sebastian', '912849782', 'sebastian.clover.52@gmail.com'),
(44, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(45, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(46, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(47, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(48, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(49, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(50, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(51, 'prueba', '936910425', 'sebastian.clover.52@gmail.com'),
(52, 'prueba', '912849782', 'sebastian.clover.52@gmail.com'),
(53, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(54, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(55, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(56, 'sebastian', '940759137', 'a.aranda_quilca@outlook.com'),
(57, 'sebastian', '940759137', '73379034@ucsm.edu.pe'),
(58, 'sebastian', '940759137', '1430740@senati.pe'),
(59, 'antony', '970339137', 'sebastian.clover.52@gmail.com'),
(60, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(61, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(62, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(63, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(64, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(65, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(66, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(67, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(68, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(69, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(70, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(71, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(72, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(73, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(74, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(75, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(76, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(77, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(78, '970339137', '970339137', 'sebastian.clover.52@gmail.com'),
(79, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(80, 'sebastian', '970339137', 'sebastian.clover.52@gmail.com'),
(81, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(82, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(83, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(84, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(85, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(86, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(87, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(88, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(89, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(90, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(91, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(92, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(93, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(94, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(95, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(96, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(97, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(98, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(99, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(100, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(101, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(102, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(103, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(104, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(105, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(106, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(107, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(108, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(109, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(110, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(111, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(112, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(113, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(114, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(115, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(116, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(117, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(118, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(119, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(120, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(121, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(122, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(123, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(124, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(125, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(126, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(127, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(128, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(129, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(130, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(131, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(132, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(133, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(134, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(135, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(136, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(137, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(138, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(139, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(140, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(141, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(142, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(143, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(144, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(145, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(146, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(147, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(148, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(149, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(150, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(151, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(152, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(153, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(154, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(155, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(156, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(157, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(158, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(159, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(160, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(161, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(162, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(163, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(164, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(165, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(166, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(167, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(168, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(169, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(170, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(171, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(172, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(173, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(174, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(175, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(176, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(177, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(178, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(179, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(180, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(181, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(182, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(183, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(184, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(185, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(186, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(187, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(188, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(189, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(190, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(191, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(192, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(193, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(194, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(195, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(196, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(197, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(198, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(199, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(200, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(201, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(202, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(203, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(204, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(205, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(206, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(207, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(208, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(209, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(210, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(211, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(212, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(213, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(214, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(215, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(216, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(217, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(218, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(219, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(220, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(221, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(222, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(223, 'api-datos-whats', '940759137', 'sebastian.clover.52@gmail.com'),
(224, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(225, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(226, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(227, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(228, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(229, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(230, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(231, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(232, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(233, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(234, 'sebastian', '999355516', 'sebastian.clover.52@gmail.com'),
(235, 'diego', '931805941', 'sebastian.clover.52@gmail.com'),
(236, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(237, 'sebastian', '940759137', 'sebastian.clover.52@gmail.com'),
(238, 'sebastian', '940759137', 'danielamij251@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `nombre`) VALUES
(1, 'Admin', 'Admin2023', 'Jorge Mandieta\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  ADD PRIMARY KEY (`idReclamacion`);

--
-- Indices de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `libroreclamacion`
--
ALTER TABLE `libroreclamacion`
  MODIFY `idReclamacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modalbranding`
--
ALTER TABLE `modalbranding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `modaldesing`
--
ALTER TABLE `modaldesing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `modalgestion`
--
ALTER TABLE `modalgestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalmarketing`
--
ALTER TABLE `modalmarketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personcamino5`
--
ALTER TABLE `personcamino5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personcampañas3`
--
ALTER TABLE `personcampañas3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `persondigi1`
--
ALTER TABLE `persondigi1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personredes4`
--
ALTER TABLE `personredes4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personweb2`
--
ALTER TABLE `personweb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
