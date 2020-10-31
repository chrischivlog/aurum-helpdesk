# Aurum Helpdesk

**Inhaltsverzeichniss**
- Vorraussetzungen
- Installation
- Admin Zugang 
- Änderung des Admin Benutzers

## Vorraussetzungen
> Einen Webserver mit PHP und PHP-SQL (nginx oder Apache2)
> Einen MariaDB oder MySql Server
> Einen Mailserver (z.Bsp.: Postfix) mit gültigen Zertifikaten 
> Ggf. Eine Funktionierende Domain

## Installation

1.  Laden sie sich die aktuellste Version von der Release seite bei Aurum-Helpdesk herunter. [https://github.com/chrischivlog/aurum-helpdesk/releases](http://https://github.com/chrischivlog/aurum-helpdesk/releases "https://github.com/chrischivlog/aurum-helpdesk/releases")
2. Entpacken sie das heruntergeladene Archiv 
3. Verschieben sie nun den Entpackten Ordner auf ihren Webserver, oder in das Gewünschte verzeichniss.
4. Fügen sie nun die im Ordner Befindliche Datei `aurum.sql` in ihren MySqls oder MariaDB Server ein. Tipp: Nutzen sie, sofern vorhanden, die Import Funktion in PHPMyAdmin "*Importieren* **ODER** *Import*"
5. Bearbeiten sie nun die Datei Header.php in `/assets/header.php`. Dort geben sie nun ihre SQL Benutzer-Daten an.
