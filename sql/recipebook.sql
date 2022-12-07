-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 02:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `ingredient` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `ingredient`) VALUES
(1, 'middelgrote ui'),
(2, 'winterpeen'),
(3, 'bleekselderij'),
(4, 'oliijfolie'),
(5, 'ongezouten roomboter'),
(6, 'tomatenpuree'),
(7, 'mager rundergehakt'),
(8, 'runderbouillon'),
(9, 'tomatenblokjes in blik'),
(10, 'spaghetti'),
(11, 'pizzadeeg'),
(12, 'bloem'),
(13, 'water '),
(14, 'verse gist'),
(15, 'zout '),
(16, 'suiker'),
(17, 'gedroogde oregano'),
(18, 'Tomatensaus'),
(19, 'Mozzarella'),
(20, 'Salami'),
(21, 'Parmezaan of Oude Kaas'),
(22, 'eieren'),
(23, 'mascarpone'),
(24, 'lange vingers'),
(25, 'koffie'),
(26, 'cacaopoeder'),
(27, 'marsala wijn');

-- --------------------------------------------------------

--
-- Table structure for table `ingredientsrecipes`
--

CREATE TABLE `ingredientsrecipes` (
  `ingredient_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredientsrecipes`
--

INSERT INTO `ingredientsrecipes` (`ingredient_id`, `recipe_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(4, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(16, 3),
(4, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `instructions` text NOT NULL,
  `appliances` text DEFAULT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `subtitle`, `instructions`, `appliances`, `added`) VALUES
(1, 'Spaghetti Bolognese', 'Makkelijk en voedzaam!', 'Snipper de ui. Schil de winterpeen en snijd in plakjes. Snijd de bleekselderij in boogjes. Verhit de olie met de boterin een pan, voeg de ui, peen en bleekselderij toe en bak 5 min. op middelhoog vuur. Voeg de tomatenpuree en het gehakt toe en bak in 5 min. rul.\r\nVoeg de bouillon en tomatenblokjes erdoor. Breng op smaak met peper en eventueel zout. Breng aan de kook en laat de saus met de deksel op de pan 30 min. op laag vuur sudderen. Roer af en toe.\r\nKook ondertussen de spaghetti volgens de aanwijzingen op de verpakking. Verdeel de spaghetti over de borden en schep de saus erover.', NULL, '2022-11-28 14:38:35'),
(2, 'Pizza Salami', 'Zoals moeder het kan, kan niemand het', 'Giet het lauwwarme water in een brede bak of schaal en voeg de gist en suiker toe. Roer goed door, tot de gist egaal verdeeld is. Laat vervolgens een kwartier staan, tot het gistproces op gang is gekomen. Het is van belang dat het water rond de 35 graden is, hierbij werkt gist optimaal. De suiker helpt om dit proces op gang te brengen.\r\nBestuif het werkblad met wat bloem en maak hierop een bergje van de bloem, of gebruik een grote, brede kom. Meng het zout, eventueel de oregano en de bloem en giet hier het gistmengsel en de olijfolie over, eventueel in fasen. Kneed het deeg ongeveer 10 minuten. In het begin zal het deeg plakkerig zijn, maar gaandeweg wordt het steeds soepeler. Door het zo lang te kneden worden lange ketens gevormd, waardoor het deeg sterker wordt, en wordt het heel soepel, zodat het goed te vormen is. Doe de deegbal in een met olijfolie ingevette bak, dek deze af met een vochtige theedoek en zet deze op een warme plek weg, bijvoorbeeld naast de oven of de verwarming, om 1 tot 2 uur te rijzen.\r\nKneed het deeg, dat nu ongeveer twee keer zo groot gerezen is, nog een keer goed door en verdeel het in de juiste portie per pizza. Rol elke portie uit tot een pizza. In principe geldt: hoe dunner hoe beter!\r\nMaak de randen iets dikker, zodat de saus er niet afloopt en bedek de pizza met de topping. Hou daarbij je eigen voorkeur aan qua hoeveelheid. Wat jij lekker vindt is goed! Zorg voor een goede, gelijkmatige verdeling.\r\nZet de pizza op een ingevette bakplaat of ingevet bakpapier in de midden van de oven en bak 15 minuten bij een voorverwamde oven op 250° C of 12 minuten bij 270° C (let op, de meeste ovens hebben zeker een half uur nodig om door en door verwarmd te worden op deze hoge temperaturen). Als je oven nog heter kan, hoeft de pizza nog korter te bakken. Zie voor meer informatie en tips het volledige recept om pizza te maken.', NULL, '2022-11-28 14:38:35'),
(3, 'Tiramisu', 'Het beste eind van een heerlijke maaltijd', 'Splits de eieren. Zorg er voor dat er absoluut geen eigeel bij het eiwit komt. Mix de eigelen met de suiker in een paar minuten tot een licht geel en luchtig mengsel. Mix de mascarpone er door. Maak de mixer en kom goed schoon en vetvrij en klop daarna de eiwitten helemaal stijf. Spatel het eiwit door het mascarpone mengsel.\r\nRoer de wijn door de koffie in een kommetje of diep bord. Doop de helft van de lange vingers hier een paar seconden in en verdeel over de bodem van de schaal (met de gesuikerde kant naar beneden). Giet ongeveer de helft van het mengsel hierover heen. Doop de rest van de lange vingers in de koffie en verdeel weer over de schaal. Giet het laatste deel van het mengsel er over. Strooi er wat cacao over en zet in de koelkast. Geef de tiramisu de tijd om goed op te stijven, het liefst een hele nacht.\r\nTips: let op, in dit recept worden rauwe eieren gebruikt. Dit kan gevaarlijk zijn voor oudere of zwakkere mensen en is niet geschikt voor zwangere vrouwen. Vervang de eieren door 200 ml opgeklopte slagroom voor een variant zonder ei.\r\nVervang de marsala wijn ook eens door Amaretto, Licor 43 of Baileys.', 'mixer\r\nschaal ca. 20 x 14 cm\r\nklein zeefje', '2022-11-28 14:38:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
