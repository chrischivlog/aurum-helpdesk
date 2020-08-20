<?php
include('../../assets/header.php');
include('../../assets/recaptcha.php');
if ($antwortDaten->success) {


    $absendername = $mail_adress_noreply;
    $absendermail = $mail_adress_noreply;
    $Mailnachricht = nl2br("

<html>
                
                Der Nutzer " . $_REQUEST['user'] . " hat die Bewerbung " . $_GET['id'] . " Bestätigt.	                						
</html>
");

    $header[] = 'MIME-Version: 1.0';
    $header[] = 'Content-type: text/html; charset=UTF-8';
    $header[] = "From: $absendername <$absendermail>";

    $Mailbetreff = "Bewerbungs bestätigung " . $_REQUEST['user'] . " # " . $_GET['id'] . "";
    mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));
    ?>
  <h1>Vielen Dank <?php echo $_REQUEST['user'];?> </h1>
  <div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>


<div class="text">
    </center>
    <br><br>
</div>
</div>
</div>
<br>


<div class="text">
    <center>
        <img src="<?php echo $url; ?>/assets/icons/fogg-success-1.png" width="400px"><br>
        Du hast die Regeln akzeptiert
        <br>
        <br>

        <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>
        <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">
        <div class="placeholderUI4"></div>


    </center>
</div>
</div>

<?php

} else {

    ?>
<h1>Da ist was Falsch gelaufen...</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>


<div class="text">
    <center>
        <img src="<?php echo $url; ?>/assets/icons/fogg-page-not-found-1.png" width="400px"><br>
        Dein Anliegen konnte nicht bearbeitet werden, bitte überpfüfe ob du Java-Script aktiviert hast oder Felder leer sind.
        <br>
        <br>

        <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>
        <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">
    </center>
    <div class="placeholderUI4"></div>
</div>
<?php

}


?>

<?php include '../../assets/footer.php'; ?>