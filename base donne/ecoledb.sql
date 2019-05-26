-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Juin 2015 à 18:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecoledb`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `titre_article` varchar(255) NOT NULL,
  `content_article` longtext NOT NULL,
  `date_article` timestamp NOT NULL,
  `tags_article` varchar(255) NOT NULL,
  `img_article` mediumblob NOT NULL,
  `status_article` varchar(20) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `author`, `titre_article`, `content_article`, `date_article`, `tags_article`, `img_article`, `status_article`, `id_category`) VALUES
(26, 'Houda', 'Delete Data From a MySQL Table Using MySQLi and PDO', '<p>Delete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDODelete Data From a MySQL Table Using MySQLi and PDO</p>', '2015-06-14 05:10:01', 'Codage, UTF-8, caractÃ¨res, spÃ©ciaux, franÃ§ais, HTML,', 0x2e2e2f696d616765732f696d675f61727469636c65732f657870726573732d312e676966, 'Publie', 1),
(27, '', 'mawazin music le monde', '<h1 style="text-align: center;"><span style="text-decoration: underline;"><strong>mawazin music le monde</strong></span></h1>\r\n<ol style="list-style-type: upper-alpha;">\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ol style="list-style-type: upper-roman;">\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde vmawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n<li></li>\r\n<li>mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;mawazin music le monde&nbsp;</li>\r\n</ol>', '2015-06-14 05:10:01', 'mawazin, music, le monde,', 0x2e2e2f696d616765732f696d675f61727469636c65732f6d6177617a696e652e6a7067, '0', 3),
(28, '', 'Codage UTF-8 et caractÃ¨res spÃ©ciaux (franÃ§ais) dans HTML', '<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>v</strong></p>\r\n<p><strong>v</strong></p>\r\n<p><strong>v</strong></p>\r\n<p><strong>v</strong></p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML,&nbsp;Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML.</p>\r\n<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML:</p>\r\n<p><strong>22:32:36&nbsp;</strong></p>\r\n<p>&nbsp;</p>', '2015-06-14 05:10:01', 'mawazin, music, le monde,', 0x2e2e2f696d616765732f696d675f61727469636c65732f33346362653239643162643863316666633139653034626365323536623530632e706e67, '0', 2),
(29, 'houda', 'Mot du Directeur.', '<p>Mot du Directeur.</p>\r\n<p>Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.</p>\r\n<p>Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.Mot du Directeur.&nbsp;Mot du Directeur.Mot du Directeur.</p>', '2015-06-14 05:10:01', 'how,can,do, that,', 0x2e2e2f696d616765732f696d675f61727469636c65732f31313430313537315f31303135333739383030343331313136355f353335363334303130383035353132343137335f6e2e6a7067, '0', 3),
(30, 'houda', 'Codage UTF-8 et caractÃ¨res spÃ©ciaux (franÃ§ais) dans HTML', '<p>Codage UTF-8 et caract&egrave;res sp&eacute;ciaux (fran&ccedil;ais) dans HTML</p>', '2015-06-14 06:44:32', 'karim, inama, kana, mina, ilayhi, hhhh,', 0x2e2e2f696d616765732f696d675f61727469636c65732f31303631303838365f3337353038333832323637373635375f3936313834383733393634343736373230385f6e2e6a7067, 'Publie', 1),
(36, 'houda', 'Mot du Directeur.', '<h3 class="styletitre" align="left"><strong>Bienvenue &agrave; brevet de technicien superieur&nbsp;(BTS).</strong></h3>\n<p><span style="color: #000000;">BTS&nbsp;n''a&nbsp; pas &nbsp;cess&eacute;&nbsp; d''accro&icirc;tre&nbsp; sa notori&eacute;t&eacute;.&nbsp;Son&nbsp; succ&egrave;s&nbsp;et son</span><span style="color: #000000;">rayonnement t&eacute;moignent de la comp&eacute;tence de ses dipl&ocirc;m&eacute;s, de ses enseignants et de ses collaborateurs. Dans l&rsquo;objectif de renforcer davantage son positionnement en tant qu&rsquo;op&eacute;rateur de formations de r&eacute;f&eacute;rence, BTS&nbsp;&oelig;uvre pour d&eacute;velopper un p&ocirc;le incontest&eacute; d&rsquo;expertise et d&rsquo;excellence dans le domaine technologies de l&rsquo;information.&nbsp;&nbsp;</span></p>\n<p class="Styleinpt" align="justify">La formation technicien Superieur, la formation continue et la recherche appliqu&eacute;e repr&eacute;sentent les priorit&eacute;s strat&eacute;giques de BTS bas&eacute;es sur l&rsquo;excellence, une de nos valeurs phares et aussi notre image de marque. Cette derni&egrave;re n&rsquo;est pas le fruit du hasard, c&rsquo;est le r&eacute;sultat de l&rsquo;engagement de l''ensemble des acteurs de l''institut qui ne cessent de fournir des services de qualit&eacute; pour offrir une formation de pointe. Le savoir faire p&eacute;dagogique de BTS&nbsp;permet de former des ing&eacute;nieurs &agrave; haut potentiel, sollicit&eacute;s sur le march&eacute; de l&rsquo;emploi et dont les comp&eacute;tences sont en parfaite ad&eacute;quation avec les besoins &eacute;volutifs du monde professionnel.</p>\n<p class="Styleinpt" align="justify">&nbsp;</p>\n<p class="Styleinpt" align="justify">Avec la mise en place d&rsquo;un nouveau syst&egrave;me de gouvernance sous forme de directoire, BTS&nbsp;s&rsquo;engage r&eacute;solument dans une d&eacute;marche de d&eacute;veloppement d&eacute;clin&eacute;e en axes strat&eacute;giques. Parmi lesquels :</p>\n<p class="Styleinpt" align="justify">- La r&eacute;orientation du cursus de formation et l&rsquo;accr&eacute;ditation de nouvelles fili&egrave;res,</p>\n<p class="Styleinpt" align="justify">- L&rsquo;implication des entreprises partenaires dans les programmes p&eacute;dagogiques,</p>\n<p class="Styleinpt" align="justify">- L&rsquo;engagement dans la d&eacute;marche qualit&eacute; et la ma&icirc;trise des processus d&rsquo;enseignement,</p>\n<p class="Styleinpt" align="justify">- L&rsquo;actualisation, l&rsquo;&eacute;largissement et la diversification en permanence de l&rsquo;offre de formations,</p>\n<p class="Styleinpt" align="justify">- La promotion de la recherche et d&eacute;veloppement,</p>\n<p class="Styleinpt" align="justify">- et le d&eacute;veloppement continu de l&rsquo;expertise p&eacute;dagogique.</p>\n<p class="Styleinpt" align="justify">&nbsp;</p>\n<p class="Styleinpt" align="justify">Selon une nouvelle approche p&eacute;dagogique active, orient&eacute;e vers les mises en situation, l&rsquo;inculcation des valeurs de citoyennet&eacute; et l&rsquo;apprentissage par vie associative, l&rsquo;institut souhaite renforcer &eacute;galement le d&eacute;veloppement personnel, le savoir &ecirc;tre et le savoir vivre dans la formation de futurs ing&eacute;nieurs polyvalents, entrepreneur et innovants. BTS&nbsp;offre d&eacute;sormais aux &eacute;l&egrave;ves inscrits en premi&egrave;re ann&eacute;e trois fili&egrave;res :</p>\n<p class="Styleinpt" align="justify">- technicien Superieur&nbsp;des syst&egrave;mes Informatiques,</p>\n<p class="Styleinpt" align="justify">- Management des technologies de l&rsquo;information.</p>\n<p class="Styleinpt" align="justify">&nbsp;Ces fili&egrave;res sont r&eacute;fl&eacute;chies autour des comp&eacute;tences pour un profil d''ing&eacute;nieur polyvalent selon le r&eacute;f&eacute;rentiel CDIO (Conceive, Design, Implement, Operate).</p>\n<p class="Styleinpt" align="justify">&nbsp;</p>\n<p class="Styleinpt" align="justify">Notre institut a capitalis&eacute; une forte notori&eacute;t&eacute; aupr&egrave;s des op&eacute;rateurs socio&eacute;conomiques. Cette notori&eacute;t&eacute; fait de nos dipl&ocirc;m&eacute;s des technicien Superieur recherch&eacute;s par les entreprises relevant de tous les secteurs d''activit&eacute;s dont naturellement ceux des Technologies de l''Information et des t&eacute;l&eacute;communications. Cette image nous l''avons construite et nous continuons &agrave; la cristalliser gr&acirc;ce aux enseignants-chercheurs de BTS et &agrave; la qualit&eacute; de leurs activit&eacute;s p&eacute;dagogiques mais &eacute;galement gr&acirc;ce au travail collaboratif que nous menons avec de nombreux partenaires nationaux et internationaux aussi bien acad&eacute;miques qu&rsquo;industriels.</p>', '2015-06-14 13:52:00', 'Mot, Directeur,', 0x2e2e2f696d616765732f696d675f61727469636c65732f70686f746f206469726563746575722e6a7067, 'Publie', 1),
(38, 'houda', 'Administration lycee', '<p>Administration lycee</p>', '2015-06-14 16:18:33', 'Administration, lycee', 0x2e2e2f696d616765732f696d675f61727469636c65732f7231363332375f365f696d675f303632302d322e6a7067, 'Publie', 1),
(39, 'houda', 'Presentation', '<p>Presentation A <strong>presentation</strong> is the process of <strong>presenting</strong>a topic to an audience. It is typically a demonstration, lecture, or speech meant to inform, persuade, or build good will. The term can also be used for a formal or ritualized introduction or offering, as with the<strong>presentation</strong> of a debutante.&nbsp;A <strong>presentation</strong> is the process of <strong>presenting</strong>a topic to an audience. It is typically a demonstration, lecture, or speech meant to inform, persuade, or build good will. The term can also be used for a formal or ritualized introduction or offering, as with the<strong>presentation</strong> of a debutante.A <strong>presentation</strong> is the process of <strong>presenting</strong>a topic to an audience. It is typically a demonstration, lecture, or speech meant to inform, persuade, or build good will. The term can also be used for a formal or ritualized introduction or offering, as with the<strong>presentation</strong> of a debutante.</p>', '2015-06-14 16:22:21', 'Presentation,Present', 0x2e2e2f696d616765732f696d675f61727469636c65732f534e4331303232382e4a5047, 'Publie', 2),
(40, 'houda', 'Anounces', '<p>Synonyms for</p>\r\n<p><em>announce&nbsp;</em></p>\r\n<p>at Thesaurus com with free online thesaurus, antonyms, and definitions &nbsp;Dictionary and Word of the Day&nbsp;Synonyms for</p>\r\n<p><em>announce&nbsp;</em></p>\r\n<p>at Thesaurus com with free online thesaurus, antonyms, and definitions &nbsp;Dictionary and Word of the Day&nbsp;Synonyms for</p>\r\n<p><em>announce&nbsp;</em></p>\r\n<p>at Thesaurus com with free online thesaurus, antonyms, and definitions &nbsp;Dictionary and Word of the Day&nbsp;Synonyms for</p>\r\n<p><em>announce&nbsp;</em></p>\r\n<p>at Thesaurus com with free online thesaurus, antonyms, and definitions &nbsp;Dictionary and Word of the Day&nbsp;Synonyms for</p>\r\n<p><em>announce&nbsp;</em></p>\r\n<p>at Thesaurus com with free online thesaurus, antonyms, and definitions &nbsp;Dictionary and Word of the Day&nbsp;</p>', '2015-06-14 16:26:45', 'Codage, UTF-8,', 0x2e2e2f696d616765732f696d675f61727469636c65732f425453322e706e67, 'Publie', 4),
(41, 'houda', 'Espace Etudiant', '<p>Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;Espace Etudiant&nbsp;</p>', '2015-06-14 16:37:10', 'karim, inama,', 0x2e2e2f696d616765732f696d675f61727469636c65732f636f6d7074612d4453435f373231302e6a7067, 'Publie', 5);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(1, 'General'),
(2, 'Lycee'),
(3, 'Instructions'),
(4, 'Anounces'),
(5, 'Espace');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `site` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE IF NOT EXISTS `galeries` (
  `id_galerie` int(11) NOT NULL AUTO_INCREMENT,
  `img_galerie` longblob NOT NULL,
  PRIMARY KEY (`id_galerie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(1) NOT NULL,
  `name_site` varchar(300) NOT NULL,
  `subtitle` text NOT NULL,
  `url_site` varchar(300) NOT NULL,
  `desc_site` text NOT NULL,
  `tags_site` text NOT NULL,
  `open_site` int(11) NOT NULL,
  `msgclose_site` text NOT NULL,
  `create_site` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `map` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `name_site`, `subtitle`, `url_site`, `desc_site`, `tags_site`, `open_site`, `msgclose_site`, `create_site`, `contact`, `adresse`, `phone`, `map`) VALUES
(0, 'Lycee Al Badissi', 'Lycee Abou Yacoub Al Badissi - Al Hoceima', 'http://localhost/ecole', 'Lycee Al Badissi ce trouve on centre Al Hoceima ville, ..', 'Lycee, Al Badissi, BTS, Developpement Informatique, ...', 0, 'Ce Site est fermer maintenant ..', 'Houda Es-sakkaki et Ourada Azzaatan', 'contact@albadissi.com', 'Lycee Abou Yacoub Al Badissi<br>\r\nRue anoual<br>\r\nAl Hoceima - Maroc<br>\r\n32000<br>', '(+212) 537 43 77 95', 'https://goo.gl/maps/C8Aq7');

-- --------------------------------------------------------

--
-- Structure de la table `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `sidebar`
--

INSERT INTO `sidebar` (`id`, `titre`, `lien`, `img`) VALUES
(1, 'Map AL Badissi', 'http://localhost/ecole/map.php', 'images/demo/map-lycee.png'),
(2, '', 'http://localhost/ecole/index.php', 'images/demo/map-lycee.png'),
(3, 'titre 3', 'http://localhost/ecole/admin/sidbar.php', 'http://www.inpt.ac.ma/SiteCollectionImages/photo%20directeur.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `img_slide` longtext NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkedn` varchar(50) NOT NULL,
  `googleplus` varchar(50) NOT NULL,
  `rss` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `social`
--

INSERT INTO `social` (`id`, `facebook`, `twitter`, `linkedn`, `googleplus`, `rss`) VALUES
(1, 'https://www.facebook.com/lycee.badissi.alhoceima', 'http://twitter.com/albadissi', 'http://linkedn.com/albadissi', 'http://plus.google.com/albadissi', 'http://localhost/ecole/rss');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `img` mediumblob NOT NULL,
  `datereg` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `username`, `password`, `genre`, `classe`, `type`, `level`, `img`, `datereg`) VALUES
(1, 'houda', 'skaki', 'skakihouda@gmail.com', 'houdaskaki', '1234567', 'Femme', '2eme annee bts', '', '', '', '2015-06-08 17:59:49'),
(2, 'zakaria', 'boufous', 'zaka@bofo.com', 'kaka1991', 'aqswdefr', '', '', '', '', '', '0000-00-00 00:00:00'),
(3, 'Amine', 'zouhair', 'zouhairamine@gmail.com', 'aminzouhair', '12345678', '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'fatna', 'elghali', 'fatna@ghali.com', 'aminos', 'aaaaa', 'Femme', '', '', '', '', '0000-00-00 00:00:00'),
(12, 'amine', 'elghali', 'amineelghali@gmail.com', 'aminghali', 'PARADISE', '', '', '', '', '', '2015-06-05 22:45:29'),
(13, 'Houda', 'Es-sakkaki', 'houda@hotmail.com', 'houda', '12345', 'Female', '2eme annee bts', 'Etudiant', 'admin', '', '2015-06-08 17:49:12'),
(14, 'Sanaa', 'Zouhair', 'sanaarabat84@gmail.com', 'sanaa', 'aqswde', 'Femme', '', '', '', '', '2015-06-06 09:38:49'),
(15, 'Kamal', 'Skali', 'kamal@gmail.com', 'kamalito', '123456', '', '', '', '', '', '2015-06-06 09:42:53'),
(16, 'Amine', 'Zouhair', 'hhhh@hhh.com', 'samir', '123', '', '', '', '', '', '2015-06-06 09:48:10'),
(19, 'Amine', 'Smail', 'ahhh@hhh.com', 'amine', 'amine', '', '', '', '', '', '2015-06-06 10:24:53'),
(20, 'Fathna', 'Elghhali', 'fathhna@ghali.com', 'aahh', '456', '', '', '', '', '', '2015-06-06 11:21:14'),
(21, 'Amine', 'Zouhair', 'barachid@gmail.com', 'islami', 'islam', '', '', '', '', '', '2015-06-06 11:24:55'),
(22, 'fatna', 'Elghali', 'abhhh@hhh.com', 'zaz', '123', 'Femme', '', '', '', '', '2015-06-06 11:28:20'),
(23, 'fatna', 'Elghali', 'dfsfatna@ghali.com', 'cvaa', '123', '', '', '', '', '', '2015-06-06 11:31:40'),
(24, 'fatna', 'Issam', 'aaamine@amine.amine', 'abcas', 'aaaa', '', '', '', '', '', '2015-06-06 11:33:43'),
(25, 'fatna', 'Elghali', 'asadafatna@ghali.com', 'asafatna1960', '1234', '', '', '', '', '', '2015-06-06 11:35:13'),
(27, 'Amine', 'Zouhair', 'fatnda@ghali.com', 'ddd', 'dddd', '', '', '', '', '', '2015-06-06 12:34:10'),
(28, 'Ouarda', 'Azzaatan', 'ouarda@hotmail.com', 'ouarda', 'ouarda', '', '', '', '', '', '2015-06-08 15:16:44'),
(29, 'Driss', 'Lachgar', 'dris_far89@hotmail.com', 'drislachgar', '123456', '', '2eme annee bts', 'Etudiant', '', '', '2015-06-07 07:03:37'),
(30, 'Islam', 'Mohamed', 'islamislam@gmail.com', 'islamsalam', 'islamona', '', 'Autre', 'Autre', '', '', '2015-06-07 07:04:34'),
(31, 'Noor', 'Lhouda', 'nourlhouda@gmail.com', 'nourlhouda', '123', 'Femme', '2eme annee bts', 'Professeur', '', '', '2015-06-07 07:24:01'),
(32, 'Zakaria', 'Mohamed', 'skakihsdsdsouda@gmail.com', 'sdsdsdsds', 'sdsdsdsds', '', '1er annee bts', 'Autre', '', '', '2015-06-07 07:51:46'),
(35, 'Hasan', 'Mohsen', 'hasan@gmail.com', 'hasan', '123', 'Homme', '2eme annee bts', 'Etudiant', 'admin', '', '2015-06-08 17:48:16'),
(43, 'Ahmed', 'Yassin', 'yassinahmed@gmail.com', 'ahmed', '123456', '', '1er annee bts', 'Etudiant', '', '', '2015-06-10 11:07:51');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
