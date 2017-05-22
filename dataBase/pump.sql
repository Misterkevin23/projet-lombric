-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Mai 2017 à 20:43
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
-- Structure de la table `preinscription`
--

CREATE TABLE `preinscription` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `numeros` int(11) NOT NULL,
  `nomDeRue` varchar(255) NOT NULL,
  `appartement` varchar(255) NOT NULL,
  `batiment` varchar(255) NOT NULL,
  `lieuDit` varchar(255) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `age` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `exterieur` varchar(255) NOT NULL,
  `habitant` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `preinscription`
--

INSERT INTO `preinscription` (`id`, `email`, `pseudo`, `motDePasse`, `Sex`, `prenom`, `nom`, `numeros`, `nomDeRue`, `appartement`, `batiment`, `lieuDit`, `CodePostal`, `ville`, `pays`, `tel1`, `tel2`, `age`, `situation`, `exterieur`, `habitant`) VALUES
(1, 'sh@gmail.com', 'gwada', '', 'm', 'Kevin', 'PASCAL', 4, 'rue de montmo', 'appartement A', 'batiment 4', 'tigro', 95560, 'Montsoult', 'France', 673772112, 134697755, 'medium25-40', 'proprietaire', 'terrasse', '3');

-- --------------------------------------------------------

--
-- Structure de la table `produitjardinerie`
--

CREATE TABLE `produitjardinerie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitjardinerie`
--

INSERT INTO `produitjardinerie` (`id`, `nom`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Jardinière 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/jardiniere1.jpg'),
(2, 'Jardinière 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/jardiniere2.jpg'),
(3, 'Jardinière 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere3.jpg'),
(4, 'Jardinière 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'Rupture', '../image/shop/jardiniere4.jpg'),
(5, 'Jardinière 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 300, 'EN stock', '../image/shop/jardiniere5.jpg'),
(6, 'Jardinière 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere6.jpg'),
(7, 'Jardinière 7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/jardiniere7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produitlombricomposteur`
--

CREATE TABLE `produitlombricomposteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `prix` int(11) NOT NULL,
  `statue` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produitlombricomposteur`
--

INSERT INTO `produitlombricomposteur` (`id`, `nom`, `resume`, `prix`, `statue`, `lien`) VALUES
(1, 'Lombricompost NOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'En stock', '../image/shop/lombricomposteur1.jpg'),
(2, 'Lombricompost NOM', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'En stock', '../image/shop/lombricomposteur2.jpg'),
(3, 'Lombricompost 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricomposteur3.jpg'),
(4, 'fibre de chanvre pour litière', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 100, 'Rupture', '../image/shop/fibre_de_chanvre_litiere.jpg'),
(5, 'Lombricompost 5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 300, 'EN stock', '../image/shop/lombricomposteur3.jpg'),
(6, 'Lombricompost 6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 200, 'Rupture', '../image/shop/lombricomposteur1.jpg');

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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jardinerie`
--
ALTER TABLE `jardinerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lombricompost`
--
ALTER TABLE `lombricompost`
  ADD UNIQUE KEY `id` (`id`);

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
-- Index pour la table `produitlombricomposteur`
--
ALTER TABLE `produitlombricomposteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tableaufruit`
--
ALTER TABLE `tableaufruit`
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
-- AUTO_INCREMENT pour la table `jardinerie`
--
ALTER TABLE `jardinerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `lombricompost`
--
ALTER TABLE `lombricompost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `preinscription`
--
ALTER TABLE `preinscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `produitjardinerie`
--
ALTER TABLE `produitjardinerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `produitlombricomposteur`
--
ALTER TABLE `produitlombricomposteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tableaufruit`
--
ALTER TABLE `tableaufruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
