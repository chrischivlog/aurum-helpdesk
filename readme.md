Willkommen im Setup:

1. Erestelle einen neuen MYSQL Benutzer und eine Datenbank. 
2. Füge nun die upload-aurum.sql in die Datenbank via drag and drop ein.
3. Lade nun alle dateien im Upload ordner auf den Webserver.
4. Gehe nun unter dem Verzeichniss /assests/ in die header.php und füge dort deine Verbindungsinformationen für den Mysql Server und die Tabelle ein.
5. Gehe nun in PhPmyadmin auf deine Erstellte Datenbank. Nun trägst du in der spalte mit der "ID 1" der Tabelle "domain_config" deine URL ein worüber man die Startseite des Helpdesk erreichen kann.
6. Zu guter letzt, damit das versenden der Mails Funktioniert gehe unter google_config und gib deine Recaptcha Daten an.

!!!WICHTIG!!!
Bitte keine Tabellen oder Spalten (Außer FAQ und Bewerbungsvorausetzungs Spalten)löschen. Alle Tabellen sind essentiel für den Betrieb.