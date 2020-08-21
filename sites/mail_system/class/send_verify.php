<?php
if (isset($_GET['mail']) && ($_GET['pin'])){


$Empfaenger2 = $_GET['mail'];
$pin = $_GET['pin'];

$absendername = $mail_adress_noreply;
$absendermail = $mail_adress_noreply;
  $Mailnachricht = nl2br("

<html>
         Hallo $user,
         Bitte bestätige das erstellen eines Tickets auf $site_name, klicke dazu auf den unten stehenden Link!
         
         $url/sites/mail_system/verify.php/?push=$pin
	
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Deine Anfrage #" . $pin.  " Bestätigen ";
  mail($Empfaenger2, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));;

?>

  <h1>Du erhältst nun eine Verifizierungs-Mail mit der ID #<?php echo $pin;?></h1>
  <div class="placeholderUI4"></div>
  
  </center>
  <br><br>
  </div>
  </div>
  </div>
  <br>
  
  
  <div class="text">
      <center>
      <img src="<?php echo $url; ?>/assets/icons/fogg-success-1.png" width="400px"><br>
      Dein Anliegen wurde übermittelt. 
      <br>
      <br>

      <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>  
        <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">
        <div class="placeholderUI4"></div>

		  
      </center>
  </div>
<?php } else {
      ?><meta http-equiv="refresh" content="0; URL=<?php echo $url; ?>"><?php  
}?>