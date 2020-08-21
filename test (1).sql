-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Aug 2020 um 15:52
-- Server-Version: 10.4.14-MariaDB
-- PHP-Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aurum_info`
--

CREATE TABLE `aurum_info` (
  `ID` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `aurum_info`
--

INSERT INTO `aurum_info` (`ID`, `info`) VALUES
(1, 'aurum infinity'),
(23, 'Diese Webseite verwendet Cookies um die richtige Nutzung zu gewährleisten.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bann_location`
--

CREATE TABLE `bann_location` (
  `ID` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bann_location`
--

INSERT INTO `bann_location` (`ID`, `location`) VALUES
(1, 'Teamspeak 3 Server');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bugreport_options`
--

CREATE TABLE `bugreport_options` (
  `ID` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `domain_config`
--

CREATE TABLE `domain_config` (
  `ID` int(11) NOT NULL,
  `domain_path` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `domain_config`
--

INSERT INTO `domain_config` (`ID`, `domain_path`, `description`) VALUES
(1, 'http://localhost/aurum-helpdesk/', 'domain'),
(2, '', 'tidio'),
(3, 'https://epic-playing.de/Forum/index.php?legal-notice/', 'datenschutz'),
(4, 'https://aurum-helpdesk.com/terms', 'impressum'),
(5, 'https://aurum-helpdesk.com/terms', 'datenschutz'),
(6, '', 'agb'),
(7, 'http://localhost/aurum-helpdesk/assets/img/background.jpg', 'background');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `faq_article`
--

CREATE TABLE `faq_article` (
  `ID` int(11) NOT NULL,
  `category` text NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `faq_article`
--

INSERT INTO `faq_article` (`ID`, `category`, `title`, `details`) VALUES
(23, '0', 'Text hier', 'FAQ Hierdsfdfsdsdfffffffffffffff');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `google_config`
--

CREATE TABLE `google_config` (
  `ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `google_config`
--

INSERT INTO `google_config` (`ID`, `description`, `token`) VALUES
(1, 'data-sitekey', '6LdJbLgUAAAAAOeD1Sb14C2Na0u30DJZ-eqWodfQ'),
(2, 'secretkey', '6LdJbLgUAAAAAEbbM4RiyiavbCa_AX8pgkZx8thr');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `job_desc`
--

CREATE TABLE `job_desc` (
  `ID` int(11) NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL,
  `online` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `job_desc`
--

INSERT INTO `job_desc` (`ID`, `category`, `description`, `online`, `date`) VALUES
(1, 'Supporter', '                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n<br>\r\n<br>\r\n<li>Hier kann der Inhalt stehen</li>    <li>Hier kann der Inhalt stehen</li>    <li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', '10/10/2020'),
(2, 'Partner', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', ''),
(9, 'Developer', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', ''),
(10, 'Designer', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', ''),
(11, 'Level1', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', ''),
(12, 'Level2', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', ''),
(13, 'Level3', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>  \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n<li>Hier kann der Inhalt stehen</li>    \r\n    \r\n         \r\n         \r\n         \r\n         \r\n         \r\n     ', '1', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mail_cache`
--

CREATE TABLE `mail_cache` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL,
  `pin` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `mail_cache`
--

INSERT INTO `mail_cache` (`ID`, `text`, `pin`, `date`) VALUES
(17, '<h1>Bewerbung als Supporter</h1> \r\n                                                                                        Mail: sdffdsdfs\r\n                                                                                        <br>Name:<br>dsfdfsdsf\r\n                                                                                        <br>Stell dich kurz vor:<br> dfsdfsdfs\r\n                                                                                        <br>Warum willst du dich bei uns bewerben?<br>fsdsdfdfs  \r\n                                                                                        <br>Anmerkungen zu deiner Bewerbung<br>dsfdfssdf', '867588', '21-08-2020 15:51:42');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mail_config`
--

CREATE TABLE `mail_config` (
  `ID` int(11) NOT NULL,
  `category` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `other` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `mail_config`
--

INSERT INTO `mail_config` (`ID`, `category`, `description`, `other`) VALUES
(1, 'support-adress', 'coneisz+mctbetndtrbhy43lkerg@boards.trello.com', ''),
(2, 'mail-versendet', 'Hallo, dein Anliegen ist bei uns eingegangen und wird bearbeitet. Sofern wir nachfragen haben, werden wir dich über deine angegebene Mail kontaktieren. <br>Solltest du noch Fragen haben, kontaktiere uns einfach via Support-Chat.<br><br>\\r\\n\\r\\nMit freundlichen Grüßen\\r\\nDein Epic-Playing Team\\r\\n\\r\\n\\r\\n----------\\r\\nMail wurde vom Aurum Helpdesk erstellt. \r\nMit freundlichen Grüßen\r\nDein Epic-Playing Team\r\n\r\n\r\n----------\r\nMail wurde vom Aurum Helpdesk erstellt. ', ''),
(3, 'no-reply', 'aurum@aurum-helpdesk.com', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `aurum_info`
--
ALTER TABLE `aurum_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `bann_location`
--
ALTER TABLE `bann_location`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `bugreport_options`
--
ALTER TABLE `bugreport_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `domain_config`
--
ALTER TABLE `domain_config`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `faq_article`
--
ALTER TABLE `faq_article`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `google_config`
--
ALTER TABLE `google_config`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `job_desc`
--
ALTER TABLE `job_desc`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `mail_cache`
--
ALTER TABLE `mail_cache`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `mail_config`
--
ALTER TABLE `mail_config`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `aurum_info`
--
ALTER TABLE `aurum_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT für Tabelle `bann_location`
--
ALTER TABLE `bann_location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `bugreport_options`
--
ALTER TABLE `bugreport_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `domain_config`
--
ALTER TABLE `domain_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `faq_article`
--
ALTER TABLE `faq_article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT für Tabelle `google_config`
--
ALTER TABLE `google_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `mail_cache`
--
ALTER TABLE `mail_cache`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT für Tabelle `mail_config`
--
ALTER TABLE `mail_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
