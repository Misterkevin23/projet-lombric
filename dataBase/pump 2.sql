-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 30 Mai 2017 à 00:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pump`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `paragraphe1` text NOT NULL,
  `paragraphe2` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`id`, `titre`, `paragraphe1`, `paragraphe2`, `image1`, `date`, `image2`) VALUES
(1, 'Presentation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '../image/lombric2.gif', 0, ''),
(2, 'Notre objectif', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(255) NOT NULL,
  `idpanier` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `motDePasse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sex` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `numeros` int(11) NOT NULL,
  `nomDeRue` varchar(255) CHARACTER SET latin1 NOT NULL,
  `appartement` varchar(255) CHARACTER SET latin1 NOT NULL,
  `batiment` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lieuDit` varchar(255) CHARACTER SET latin1 NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pays` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `age` varchar(255) CHARACTER SET latin1 NOT NULL,
  `situation` varchar(255) CHARACTER SET latin1 NOT NULL,
  `exterieur` varchar(255) CHARACTER SET latin1 NOT NULL,
  `habitant` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jardinerie`
--

CREATE TABLE `jardinerie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `paragraphe1` text NOT NULL,
  `paragraphe2` text NOT NULL,
  `date` date NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jardinerie`
--

INSERT INTO `jardinerie` (`id`, `titre`, `paragraphe1`, `paragraphe2`, `date`, `image1`, `image2`) VALUES
(1, 'Substrat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-05-19', '../image/substrat1.jpg', ''),
(2, 'Irrigation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2017-05-21', '../image/irrigation1.jpg', '../image/irrigation2.jpg'),
(3, 'Condition climatique', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-05-20', '../image/condition1.jpg', '../image/condition2.png');

-- --------------------------------------------------------

--
-- Structure de la table `livraisonmode`
--

CREATE TABLE `livraisonmode` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `delai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livraisonmode`
--

INSERT INTO `livraisonmode` (`id`, `nom`, `prix`, `delai`) VALUES
(1, 'COLLISSIMO', 2, 4),
(2, 'EXPRESS', 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `lombricompost`
--

CREATE TABLE `lombricompost` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `paragraphe1` text NOT NULL,
  `paragraphe2` text NOT NULL,
  `date` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lombricompost`
--

INSERT INTO `lombricompost` (`id`, `titre`, `paragraphe1`, `paragraphe2`, `date`, `image1`, `image2`) VALUES
(1, 'lombric', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0, '', ''),
(2, 'Les besoins alimentaires des vers Eisenia', 'Un apport varié de matière à composter contribue à la bonne santé de l\'écosystème reproduit au sein de votre lombricomposteur. Plus le menu des vers\r\n présente de la diversité , meilleur sera le compost. Les vers présents dans votre vermicomposteur se nourrissent et ingurgitent avant tout des matières d\'origine végétale et dites biodégradables. Bien sûr il existe des exceptions que vous retrouverez dans la liste avec en tête l\'oignon, l\'ail, l\'échalote ou les agrumes.\r\n<span class=important>Eviter de leur donner de trop gros morceaux</span>', 'Les vers de manière générale ont une préférence pour les aliments en petits morceaux surtout quand ils découvrent de la nourriture qu\'ils ne connaissent pas. Il faut donc naturellement couper en petit morceaux ce que vous incorporez dans votre lombricomposteur. De plus, n\'hésitez pas à disperser l\'apport d\'un nouveau déchet dans le plateau en en mettant un peu à chaque fois et à des endroits différents. Il faut éviter de faire un grand tas en surface en gros morceaux. Idéalement, il est préférable d\' incorporer les déchets, les découper et varier le menu de notre congénère épigé.', 0, '../image/legumePourri.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(6) UNSIGNED NOT NULL,
  `idvisit` varchar(99) DEFAULT NULL,
  `idclient` varchar(99) DEFAULT NULL,
  `idadmin` varchar(99) DEFAULT NULL,
  `pspj1` varchar(99) DEFAULT NULL,
  `qte_pspj1` varchar(99) DEFAULT NULL,
  `pspj2` varchar(99) DEFAULT NULL,
  `qte_pspj2` varchar(99) DEFAULT NULL,
  `pspj3` varchar(99) DEFAULT NULL,
  `qte_pspj3` varchar(99) DEFAULT NULL,
  `pspj4` varchar(99) DEFAULT NULL,
  `qte_pspj4` varchar(99) DEFAULT NULL,
  `pspj5` varchar(99) DEFAULT NULL,
  `qte_pspj5` varchar(99) DEFAULT NULL,
  `pspj6` varchar(99) DEFAULT NULL,
  `qte_pspj6` varchar(99) DEFAULT NULL,
  `pspj7` varchar(99) DEFAULT NULL,
  `qte_pspj7` varchar(99) DEFAULT NULL,
  `pspl1` varchar(99) DEFAULT NULL,
  `qte_pspl1` varchar(99) DEFAULT NULL,
  `pspl2` varchar(99) DEFAULT NULL,
  `qte_pspl2` varchar(99) DEFAULT NULL,
  `pspl3` varchar(99) DEFAULT NULL,
  `qte_pspl3` varchar(99) DEFAULT NULL,
  `pspl4` varchar(99) DEFAULT NULL,
  `qte_pspl4` varchar(99) DEFAULT NULL,
  `pspl5` varchar(99) DEFAULT NULL,
  `qte_pspl5` varchar(99) DEFAULT NULL,
  `pspl6` varchar(99) DEFAULT NULL,
  `qte_pspl6` varchar(99) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `idvisit`, `idclient`, `idadmin`, `pspj1`, `qte_pspj1`, `pspj2`, `qte_pspj2`, `pspj3`, `qte_pspj3`, `pspj4`, `qte_pspj4`, `pspj5`, `qte_pspj5`, `pspj6`, `qte_pspj6`, `pspj7`, `qte_pspj7`, `pspl1`, `qte_pspl1`, `pspl2`, `qte_pspl2`, `pspl3`, `qte_pspl3`, `pspl4`, `qte_pspl4`, `pspl5`, `qte_pspl5`, `pspl6`, `qte_pspl6`) VALUES
(13, NULL, NULL, '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, '15', NULL, 'NULL', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, 'TRUE', '4', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, '20', 'TRUE', '1', 'NULL', '1', 'NULL', '1', 'NULL', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '20', 'TRUE', '1', 'TRUE', '1', 'TRUE', '1', 'TRUE', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, '20', 'TRUE', '1', 'TRUE', '1', 'TRUE', '1', 'TRUE', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, 'TRUE', '1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `preinscription`
--

CREATE TABLE `preinscription` (
  `id` int(255) NOT NULL,
  `idpanier` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `motDePasse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sex` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `numeros` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nomDeRue` varchar(255) CHARACTER SET latin1 NOT NULL,
  `appartement` varchar(255) CHARACTER SET latin1 NOT NULL,
  `batiment` varchar(255) CHARACTER SET latin1 NOT NULL,
  `lieuDit` varchar(255) CHARACTER SET latin1 NOT NULL,
  `CodePostal` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pays` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel1` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) CHARACTER SET latin1 NOT NULL,
  `situation` varchar(255) CHARACTER SET latin1 NOT NULL,
  `exterieur` varchar(255) CHARACTER SET latin1 NOT NULL,
  `habitant` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `preinscription`
--

INSERT INTO `preinscription` (`id`, `idpanier`, `email`, `pseudo`, `motDePasse`, `Sex`, `prenom`, `nom`, `numeros`, `nomDeRue`, `appartement`, `batiment`, `lieuDit`, `CodePostal`, `ville`, `pays`, `tel1`, `tel2`, `age`, `situation`, `exterieur`, `habitant`, `description`) VALUES
(1, '', 'sh@gmail.com', 'gwada', '1234', 'm', 'Kevin', 'PASCAL', '4', 'rue de montmo', 'appartement A', 'batiment 4', 'tigro', '95560', 'Montsoult', 'France', '673772112', '134697755', 'medium25-40', 'proprietaire', 'terrasse', '3', ''),
(5, '', 'afd@gmail.com', 'madinina', '972', 'mme', 'MAdi', 'Nina', '65', 'rue de la libertÃ©', 'ND', 'ND', 'ND', '97', 'FORT DE FRANCE', 'Allemagne', '955664422', '522114477', 'ND', 'locataire', 'les deux', 'un nombre incertain', '  sdqijqpbgdsjigbq jpisdqbj^qb^^psqdb^bq^^bqsd^gsqjd^gb^q ^jsdbg^jqsdgbq^db jsd^bgs^qdb^jdsqb jsd^sqdbsd^sb j^sdbg^sqjdbsdj^sd ^jsdb^jsdb ^jbqsd^fsqfo^sdqnb ^nsdqo^bnso^d bo^nbo^s no^nosd^n o^sdn Ã´sn o^sqdn o^nfosnd oqsdn^sdqn sl no^gno^sdqngÃ´sdqn s^q nsq^ns^nsd^ns^ksdnÃ´sqdn o^sqn sdokn o^s n^sdn osqn on do^sngsÃ´d n^sqdg no^sdgn so^gn sod^fg no^f no^g nqÃ´gnfdqso^gnsdo^g nsdo^g ndso^no no^gnsog ^sn o^no^gnsqdo^no^g nsqÃ´gnsogndgksnglknl s^k'),
(23, NULL, 'js@hotmail.com', 'titi', '1234', 'societe', 'gros', 'Minet', '58', 'rue de la soif', 'ND', 'bÃ¢timent 4', 'arisdode', '45860', 'marseille', 'Espagne', '0655997722', 'ND', '40', 'proprietaire', 'les deux', 'un nombre incertain', '  '),
(25, '4', 'php@hotmail.com', 'panier', '1234', 'societe', 'gros', 'Minet', '58', 'rue de la soif', 'ND', 'bÃ¢timent 4', 'arisdode', '45860', 'marseille', 'Espagne', '0655997722', 'ND', '40', 'proprietaire', 'les deux', 'un nombre incertain', '  ');

-- --------------------------------------------------------

--
-- Structure de la table `produitjardinerie`
--

CREATE TABLE `produitjardinerie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitjardinerie`
--

INSERT INTO `produitjardinerie` (`id`, `nom`, `abreviation`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Jardinière 1', 'pspj1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/jardiniere1.jpg'),
(2, 'Jardinière 2', 'pspj2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/jardiniere2.jpg'),
(3, 'Jardinière 3', 'pspj3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere3.jpg'),
(4, 'Jardinière 4', 'pspj4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'Rupture', '../image/shop/jardiniere4.jpg'),
(5, 'Jardinière 5', 'pspj5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 300, 'EN stock', '../image/shop/jardiniere5.jpg'),
(6, 'Jardinière 6', 'pspj6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere6.jpg'),
(7, 'Jardinière 7', 'pspj7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produitlombricompost`
--

CREATE TABLE `produitlombricompost` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitlombricompost`
--

INSERT INTO `produitlombricompost` (`id`, `nom`, `abreviation`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Lombricompost 1', 'pspj1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/lombricompost1.jpg'),
(2, 'Lombricompost 2', 'pspj2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricompost2.jpg'),
(3, 'Lombricompost 3', 'pspj3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricompost3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produitlombricomposteur`
--

CREATE TABLE `produitlombricomposteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitlombricomposteur`
--

INSERT INTO `produitlombricomposteur` (`id`, `nom`, `abreviation`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Lombricompost NOM', 'pspl1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/lombricomposteur1.jpg'),
(2, 'Lombricompost NOM', 'pspl2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/lombricomposteur2.jpg'),
(3, 'Lombricompost 3', 'pspl3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricomposteur3.jpg'),
(4, 'fibre de chanvre pour litière', 'pspl4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'Rupture', '../image/shop/fibre_de_chanvre_litiere.jpg'),
(5, 'Lombricompost 5', 'pspl5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 300, 'EN stock', '../image/shop/lombricomposteur3.jpg'),
(6, 'Lombricompost 6', 'pspl6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricomposteur1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produitsystemeirrigation`
--

CREATE TABLE `produitsystemeirrigation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitsystemeirrigation`
--

INSERT INTO `produitsystemeirrigation` (`id`, `nom`, `abreviation`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Systeme irrigation 1', 'pspj1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/systeme_irrigation1.jpg'),
(2, 'Systeme irrigation 2', 'pspj2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/systeme_irrigation2.jpg'),
(3, 'Systeme irrigation 3', 'pspj3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/systeme_irrigation3.jpg'),
(4, 'Systeme irrigation 4', 'pspj3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/systeme_irrigation4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produitterreaux`
--

CREATE TABLE `produitterreaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `abreviation` varchar(255) DEFAULT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitterreaux`
--

INSERT INTO `produitterreaux` (`id`, `nom`, `abreviation`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Terreaux 1', 'pspj1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/terreau1.jpg'),
(2, 'Terreau 2', 'pspj2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/terreau2.jpg'),
(3, 'Terreau 3', 'pspj3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/terreau3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tableaufruit`
--

CREATE TABLE `tableaufruit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tableaufruit`
--

INSERT INTO `tableaufruit` (`id`, `nom`, `description`, `class`) VALUES
(1, 'Peaux des agrumes', 'L\'Eisenia n\'apprécie pas le zeste de l\'agrume. Celui-ci est irritant pour sa peau. <span class="important">A éviter ou alors 	très modéré et incorporé avec d\'autres déchets</span>', 'tableNo'),
(2, 'Ananas', '<span class="important">Eviter les feuilles</span>,plutôt dures et difficile à ingérer.Pas de problème pour <span class="tableYes"> 	les épluchures.</span>', ''),
(3, 'Artichaut', 'Pas facile pour le vers d en venir à bout donc n\'hésiter pas à le mêler à un met de choix et un peu de carton. Pensez à le découper si possible.', ''),
(4, 'Asperge', 'Eisenia est loin d\'entre être friand donc ne pas trop en mettre d\'un coups.', ''),
(5, 'Déchets liés à l\'aquariophilie', 'Les plantes aquatiques et algues peuvent être introduite dans le lombricomposteur une fois égouttées.', 'tableYes'),
(6, 'Avocat', 'Eisenia met bien trop de temps à en venir à bout.', 'tableNo'),
(7, 'Banane', 'Les vers de compost en raffolent. Succès garanti !\r\n						<span class="important">A éviter de le mettre seul et en gros morceaux.A mélanger avec du carton, papier, filtre ou marc de café pour faciliter le travail des vers.</span>', 'tableYes'),
(8, 'Champignons', 'Les restes et épluchures de champignons sont appréciés des vers.', 'tableYes'),
(9, 'Haricot', 'Les pointes des haricots et les gousses sont aprécié.', ''),
(10, 'Melon', 'Les restes de melon une fois vidé conviennent aux lombrics.<span class="important"> Découpez la peau en morceaux.</span>', ''),
(11, 'Oignon', 'L\'oignon est acide et de ce fait il est délicat de le mettre à disposition des vers. Il est préférable et bien plus sage ne pas 	en mettre du tout.', 'tableNo'),
(12, 'Ail', 'Idem que pour l\'oignon', 'tableNo'),
(13, 'Poireau', 'Aucun problème avec ce légume dont on jette souvent les restes.', 'tableYes'),
(14, 'Pomme de terre', 'On évitera tout simplement les épluchures comme les patates entières qui pourrissent.', 'tableNo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `idpanier` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `statue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `motDePasse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sex` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `numeros` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nomDeRue` varchar(255) CHARACTER SET latin1 NOT NULL,
  `appartement` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `batiment` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lieuDit` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `CodePostal` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pays` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel1` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `situation` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `exterieur` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `habitant` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` text CHARACTER SET latin1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `idpanier`, `statue`, `email`, `pseudo`, `motDePasse`, `Sex`, `prenom`, `nom`, `numeros`, `nomDeRue`, `appartement`, `batiment`, `lieuDit`, `CodePostal`, `ville`, `pays`, `tel1`, `tel2`, `age`, `situation`, `exterieur`, `habitant`, `description`) VALUES
(20, '14', 'admin', 'gwada@gwada.fr', 'gwada', '1234', 'm', 'gwada', 'gwada', '4', 'rue de la libertÃ©', '', '', '', '23237', 'enghien', 'France', '0673772112', '', 'd\'un certain age', 'proprietaire', 'les deux', 'un nombre incertain', '  '),
(15, '9', 'client', 'panier@hotmail.com', 'panier', '1234', 'm', 'mister', 'panier', '4', 'rue de la soif', '', '', '', '23237', 'renaissance', 'Allemagne', '0688554466', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(255) NOT NULL,
  `idpanier` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `motDePasse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sex` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `numeros` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nomDeRue` varchar(255) CHARACTER SET latin1 NOT NULL,
  `appartement` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `batiment` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lieuDit` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `CodePostal` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pays` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel1` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `idpanier`, `email`, `motDePasse`, `Sex`, `prenom`, `nom`, `numeros`, `nomDeRue`, `appartement`, `batiment`, `lieuDit`, `CodePostal`, `ville`, `pays`, `tel1`) VALUES
(17, '34', 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(18, '35', 're@gmail.com', '1234', 'mme', 'jeanne', 'ria', '4', 'rue de montmo', '', '', '', '95560', 'rita', 'Allemagne', '0677554466'),
(19, '36', 'ret@gmail.com', '1234', 'societe', 'kira', 'L', '5', 'rue des bo', '', '', '', '98541', 'enghien', 'Espagne', '0688554466'),
(16, '33', 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(13, '27', 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(14, NULL, 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(15, NULL, 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(12, '26', 'sh@gmail.com', '1234', 'm', 'kevin', 'pasc', '4', 'rue de ', '', '', '', '95560', 'monts', 'France', '0655223311'),
(20, '37', 'atf@hotmail.com', '1234', 'mlle', 'sarah', 'noris', '7', 'rue de la soif', '', '', '', '94562', 'estre', 'belgique', '0688554466');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jardinerie`
--
ALTER TABLE `jardinerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraisonmode`
--
ALTER TABLE `livraisonmode`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lombricompost`
--
ALTER TABLE `lombricompost`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preinscription`
--
ALTER TABLE `preinscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produitjardinerie`
--
ALTER TABLE `produitjardinerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produitlombricompost`
--
ALTER TABLE `produitlombricompost`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produitlombricomposteur`
--
ALTER TABLE `produitlombricomposteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produitsystemeirrigation`
--
ALTER TABLE `produitsystemeirrigation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produitterreaux`
--
ALTER TABLE `produitterreaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tableaufruit`
--
ALTER TABLE `tableaufruit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jardinerie`
--
ALTER TABLE `jardinerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `livraisonmode`
--
ALTER TABLE `livraisonmode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `lombricompost`
--
ALTER TABLE `lombricompost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `preinscription`
--
ALTER TABLE `preinscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `produitjardinerie`
--
ALTER TABLE `produitjardinerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `produitlombricompost`
--
ALTER TABLE `produitlombricompost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `produitlombricomposteur`
--
ALTER TABLE `produitlombricomposteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `produitsystemeirrigation`
--
ALTER TABLE `produitsystemeirrigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produitterreaux`
--
ALTER TABLE `produitterreaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tableaufruit`
--
ALTER TABLE `tableaufruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
