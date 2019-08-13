-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 13. Aug 2019 um 19:19
-- Server-Version: 10.1.34-MariaDB
-- PHP-Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test_5`
--

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
(1, 'http://localhost/epic-playing-support-hub/', 'domain'),
(2, '//code.tidio.co/chvdksu4ds9d4uqyaphebjetzrubthx2.js', 'tidio'),
(3, 'https://epic-playing.de/Forum/index.php?legal-notice/', 'datenschutz'),
(4, 'https://infinityheroes.de', 'impressum'),
(5, 'https://infinityheroes.de', 'datenschutz'),
(6, 'https://infinityheroes.de', 'agb');

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
(2, 'teamspeak', 'Wann bekommt man ein neues LvL?', 'Alle 35 Minuten bekommst du ein neues LvL!'),
(3, 'teamspeak', 'Wie verifiziere ich mich für das Rankystem?', 'Betritt den \"Freischaltung Ranksystem\" Channel und verifiziere dich mit diesen Link\r\n'),
(4, 'teamspeak', 'Wo kann man seine Teamspeak Stats sehen?', 'Deine Stats kannst du hier sehen! <a href=\"https://epic-playing.de/rank/stats\">https://epic-playing.de/rank/stats</a>'),
(5, 'teamspeak', 'Wo bekommt man einen Clan Channel?', 'Gehe in den Support und ein Teammitglied wird dir dort helfen!'),
(6, 'teamspeak', 'Ab wann kann man Avatare setzen?', 'Avatare können ab LvL 1 gesetzt werden!'),
(7, 'teamspeak', 'Wann kann man einen permanten Channel erstellen?', 'Permante Channel können ab LvL 10 erstellt werden oder als Donator!'),
(8, 'teamspeak', 'Wie kann ich jemanden den Clan Rang geben?', 'Clan Ränge können von Teammitgliedern vergeben werden. Melde dich einfach im Support!\r\n'),
(9, 'bewerben', 'Wo kann man sich Bewerben?', 'Bewerben kann man sich im Forum!'),
(10, 'teamspeak', 'Wo kann ich entbannt werden, wenn ich gebannt wurde?', 'Du kannst dich auf unserer Webseite entbannen lassen!'),
(11, 'Rängeinformation', 'Rängeinformation', '\r\nVIP:<br><br>\r\n- Werden nur an Personen die man kennt oder \r\nsehr lange auf\r\ndem TS sind vergeben!<br>\r\n- Können alle Channel vom Team abonnieren<br>\r\n- Können Permanente Channel erstellen<br>\r\n- Können einen Avatar setzen<br>\r\n- Können eigene Client Beschreibung anpassen<br>\r\n- Können in den VIP Talks rein<br><br>\r\n\r\nDonator:<br><br>\r\n- 1,50€ Mindestwert für Freischaltung auf dem TS!<br>\r\n- Können Permanente Channel erstellen<br>\r\n- Können einen Avatar setzen<br>\r\n- Können Team Lounge abonnieren (Keine Admin Channel)<br>\r\n- Können eigene Client Beschreibung anpassen<br>\r\n- Können in den VIP Talks rein<br>\r\n- Können in die Community Talks rein<br><br>\r\n\r\nMonthly-Donator:<br><br>\r\n- 2,50€ Mtl.<br>\r\n- Können Permanente Channel erstellen<br>\r\n- Können einen Avatar setzen<br>\r\n- Können Team Lounge abonnieren (auch Admin Channel)<br>\r\n- Können eigene Client Beschreibung anpassen<br>\r\n- Können in den VIP Talks rein<br>\r\n- Können in die Community Talks rein<br>\r\n- Erhalte einen Musikbot<br>\r\n- Erhalte einen Premium Support (schneller und besseren Support + Verlängerte Support zeiten)\r\n- Erhalte 7% Rabatt im Unlock-All Shop (Dazu bitte vor einen Kauf im Support melden)<br><br>\r\n\r\nFollower:<br><br>\r\n- Folge mir auf Twitch: DamiyTV<br>\r\n- Können einen Avatar setzen<br>\r\n- Können eigene Client Beschreibung anpassen<br>\r\n- Können in den Follower Talks rein<br>\r\n- Können Semi-Permanente Channel erstellen<br><br>\r\n\r\nSubscriper:<br><br>\r\n- Abonniere mich auf Twitch: DamiyTV<br>\r\n- Können einen Avatar setzen<br>\r\n- Können eigene Client Beschreibung anpassen<br>\r\n- Können in den Follower und die Subscriber Talks rein<br>\r\n- Können Gamer moven<br>\r\n- Können permanente Channel erstellen<br><br>\r\n'),
(12, 'teamspeak', 'LvL System\r\n', 'Ab LvL 1 können Avatare gesetzt werden und Semi Permanente Channel erstellt werden<br><br>\r\nAb LvL 10 können Permanente Channel erstellt werden. <br><br>\r\nAb LvL 20 können eigene Client Beschreibungen gesetzt werden');

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
(1, 'data-sitekey', '6Ld9PXQUAAAAAEM25gzmqtQq66G3YgQv0XSaiSOW'),
(2, 'secretkey', '6Ld9PXQUAAAAADBrXC2NgyOTlkI-LWr2xgaTOi_j');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `jobs_online`
--

CREATE TABLE `jobs_online` (
  `ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `jobs_online`
--

INSERT INTO `jobs_online` (`ID`, `description`, `online`) VALUES
(1, 'supporter', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `job_desc`
--

CREATE TABLE `job_desc` (
  `ID` int(11) NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `job_desc`
--

INSERT INTO `job_desc` (`ID`, `category`, `description`) VALUES
(1, 'supporter', 'Mindestalter 14 Jahre'),
(2, 'partner', 'mindestens 150 Youtube Abonnenten'),
(3, 'supporter', 'Beherrschung der deutschen Sprache, in Wort und Schrift.'),
(4, 'supporter', 'hohe Selbstständigkeit'),
(5, 'supporter', 'Spaß an der Arbeit im Team'),
(6, 'supporter', 'Streitschlichter Fähigkeiten (gerne gesehen)'),
(7, 'supporter', 'Du musst Level 40 auf dem Teamspeak Server haben.'),
(8, 'partner', '60 Aufrufe auf das letzte Video');

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
(1, 'support-adress', 'chrischivlog@gmail.com', ''),
(2, 'mail-versendet', 'Hallo, dein Anliegen ist bei uns eingegangen und wird bearbeitet. Sofern wir nachfragen haben, werden wir dich über deine angegebene Mail kontaktieren. <br>Solltest du noch Fragen haben, kontaktiere uns einfach via Support-Chat.<br><br>\\r\\n\\r\\nMit freundlichen Grüßen\\r\\nDein Epic-Playing Team\\r\\n\\r\\n\\r\\n----------\\r\\nMail wurde vom Aurum Helpdesk erstellt. \r\nMit freundlichen Grüßen\r\nDein Epic-Playing Team\r\n\r\n\r\n----------\r\nMail wurde vom Aurum Helpdesk erstellt. ', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bann_location`
--
ALTER TABLE `bann_location`
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
-- Indizes für die Tabelle `jobs_online`
--
ALTER TABLE `jobs_online`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `job_desc`
--
ALTER TABLE `job_desc`
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
-- AUTO_INCREMENT für Tabelle `bann_location`
--
ALTER TABLE `bann_location`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `domain_config`
--
ALTER TABLE `domain_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `faq_article`
--
ALTER TABLE `faq_article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `google_config`
--
ALTER TABLE `google_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `jobs_online`
--
ALTER TABLE `jobs_online`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `job_desc`
--
ALTER TABLE `job_desc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `mail_config`
--
ALTER TABLE `mail_config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
