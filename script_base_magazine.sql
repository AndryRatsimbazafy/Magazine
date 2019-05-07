-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 07 Mai 2019 à 08:06
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `magazine`
--
CREATE DATABASE IF NOT EXISTS `magazine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `magazine`;

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `IdAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`IdAdmin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`IdAdmin`, `Username`, `Password`) VALUES
(1, 'Root', 'Root');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `IdCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCategorie`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`IdCategorie`, `Nom`) VALUES
(1, 'Food'),
(2, 'Lifestyle');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `IdPost` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `SousTitre` varchar(150) NOT NULL,
  `Texte` text NOT NULL,
  `IdCategorie` int(11) NOT NULL,
  `Image` varchar(25) NOT NULL,
  `NomCategorie` varchar(20) NOT NULL,
  `Image2` varchar(20) NOT NULL,
  PRIMARY KEY (`IdPost`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`IdPost`, `Titre`, `SousTitre`, `Texte`, `IdCategorie`, `Image`, `NomCategorie`, `Image2`) VALUES
(1, 'Fiona Falkiner: ‘My fight with a trainer on the Biggest Loser’', 'When Fiona Falkiner began hosting the hit reality TV show The Biggest Loser, she never expected an enemy to come from within.', 'Fiona Falkiner is no stranger to the concept of transformation. In 2006, Falkiner applied successfully to be a contestant on The Biggest Loser, and she was hoping losing the weight would make her happy. But following major success on the show, she found herself spiralling into a deep depression. Here, she talks about life before, during and after living the reality TV juggernaut.\r\n\r\n*****\r\n\r\nWhile I was in New York I got an email from my Aussie agent asking if I’d like to do a modelling gig back in Melbourne.\r\n\r\nI had been in New York for about 4 months but decided I’d do it and use it as an excuse to head back home and see family and friends.\r\n\r\nJust as I was boarding my flight I got a text from an old friend who was a producer on my series of Loser.\r\n\r\nShe asked me if I would be interested in coming in for a screen test to host the show. My jaw nearly hit the floor. Me, host the show? What? No!\r\n\r\nI stumbled my way to my seat, took a deep breath and re-read the text. My heart was pounding, so many thoughts were running through my mind. I don’t know how to host a show, do I want to go back on TV, back in the public eye etc … so much negativity was swirling around inside my head. I suddenly stopped and realised what I was doing — I was letting the old me take hold, the one that is full of self doubt and negativity.', 2, 'Lifestyle', 'Lifestyle', 'Lifestyle2'),
(2, 'Demand for Foodbank service growing as more Tasmanian families seek help', 'THE Foodbank of Tasmania has distributed a tonne of chocolate in recent days alongside its fresh produce as it juggles an ever-growing need for its se', 'THE Foodbank of Tasmania has distributed a tonne of chocolate in recent days.\r\n\r\nThe mountain of Easter eggs will be spread far and wide, as the state’s largest food relief organisation is juggling ever-growing need.\r\n\r\nFoodbank’s Edward Gauden said it had been a busy week, as the not-for-profit added Easter eggs to its usual supply of fresh food.\r\n\r\n“We’ve got literally a tonne of eggs to get out,” said Mr Gauden.\r\n\r\nThe organisation is supported by many farms and supermarkets throughout Tasmania, and this week Cadbury came forward with donated eggs.\r\n\r\nMORE: HAMPERS BRING EASTER JOY TO ‘TENT CITY’\r\n\r\nFoodbank, which distributes surplus food to 240 charities statewide, is struggling to keep up with the demand from people in need.\r\n\r\n“Families are struggling because their day-to-day bills keep coming, Christmas has only just passed and now Easter has crept up on them.”\r\n\r\nFoodbank is delivering several thousand Easter eggs to charities and churches, so they can be distributed to families in need.\r\n\r\nMr Gauden said some nuns had also collected eggs and fresh food for the elderly in the community who may be alone over Easter.\r\n\r\nHe said the organisation was in need of more donations of fresh produce to meet the growing demand.', 1, 'Food', 'Food', 'Food2'),
(3, 'North West’s wardrobe puts us to shame', 'She is the daughter of a global style icon and a fashion designer, so it’s no surprise North Kardashian West is a fierce fashion boss.', 'When a reality TV star and a rapper make a baby, it is scientifically proven that their child will be a fashion force to be reckoned with.\r\n\r\nBut the world wasn’t quite ready for Kim Kardashian and Kanye West’s eldest daughter North West to flex her fashion muscles quite so early in her life.\r\n\r\nHowever, when your mother is a global style icon, and you live your life in front of a camera, the girl’s got some pretty big Balenciaga thigh high boots to fill.\r\n\r\nShe may only be five years old, but North West is already making headlines for her fierce fashion choices and, quite frankly, it’s putting some grown adults to shame.\r\n\r\nHer unapologetic style — which usually involves rifling through her mother’s expansive wardrobe — is literally cool enough to rival long-established supermodels.\r\n\r\nWhen I was five years old, I thought lip gloss was the grease that got on your lips from a sausage sizzle.\r\n\r\nBut this kid literally personifies the phrase “too glam to give a damn”.', 2, 'Lifestyle', 'Lifestyle', 'Lifestyle2'),
(4, 'Is this the world’s best food?', 'IT’S the question on everyone’s lips: Where can we find the best food on the planet? Experts have scoured the globe for the answer.', 'IT’S the question on everyone’s lips: Which country has the world’s best food?\r\n\r\nLet’s face it, one of the best parts of travelling is giving your tastebuds new experiences as you sample the delectable and unique local dishes.\r\n\r\nNow, CNN has scoured the world to come up with a list of their 50 favourite foods.\r\n\r\nWhile the list includes many well-known global favourites, it may leave some travellers scratching their heads — it even includes buttered popcorn from the US and potato chips from the UK.\r\n\r\nHere are their top 10 picks:\r\n\r\n10. Chicken Muamba, Gabon, Africa\r\n9. Ice cream, global\r\n8. Tom yum goong, Thailand\r\n7. Penang assam laksa, Malaysia\r\n6. Hamburger, Germany\r\n5. Peking duck, China\r\n4. Sushi, Japan\r\n3. Chocolate, Mexico\r\n2. Neapolitan pizza, Italy\r\n1. Massaman curry, Thailand', 1, 'Food', 'Food', 'Food2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
