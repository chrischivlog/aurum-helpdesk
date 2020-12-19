
![Kitten](https://cdn.discordapp.com/attachments/763089233229250600/789940965027610644/Screenshot_1.png)


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

1.  Laden sie sich die aktuellste Version von der Release Seite bei Aurum-Helpdesk herunter. [https://github.com/chrischivlog/aurum-helpdesk/releases](http://https://github.com/chrischivlog/aurum-helpdesk/releases "https://github.com/chrischivlog/aurum-helpdesk/releases")
2. Entpacken sie das heruntergeladene Archiv.
3. Verschieben sie nun den Entpackten Ordner auf ihren Webserver, oder in das Gewünschte Verzeichniss.
4. Fügen sie nun die im Ordner Befindliche Datei `aurum.sql` in ihren MySqls oder MariaDB Server ein. Tipp: Nutzen sie, sofern vorhanden, die Import Funktion in PHPMyAdmin "*Importieren* **ODER** *Import*"
5. Bearbeiten sie nun die Datei Header.php in `/assets/header.php`. Dort geben sie nun ihre SQL Benutzer-Daten an.

## Admin Zugang 

Der Admin Zugang wird über den URL-Pfad gewährleistet. Sofern sie das Admin-Panel betreten möchten, sollte die URL so aussehen: `http://localhost/aurum-helpdesk/sites/admin/`

## Änderung des Admin Benutzers

Zur änderung des Admin Benutzers, begeben sie sich auf ihren Webserver und öffnen sie im Verzeichniss `assets` des Helpdesk die access.php. 

Editieren sie nach belieben den Name und das Passwort.
```php
<?php
$admin_user = 'admin'; ///Admin nutzername ändern
$admin_password = 'foobar'; ///Admin Passwort ändern
?>
```


****

Mehr hilfe bekommen sie im Admin-Panel oder auf meinem unten Verlinkten Discord-Server.

[![Discord](https://discordapp.com/api/guilds/308571324152807424/embed.png?style=banner2 "Discord")](https://discord.gg/wNbfWJwtPG "Discord")


