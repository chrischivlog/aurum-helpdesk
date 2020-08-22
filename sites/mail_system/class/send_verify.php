<?php
if (isset($_GET['mail']) && ($_GET['pin'])){


$Empfaenger2 = $_GET['mail'];
$pin = $_GET['pin'];

$result = mysqli_query($conn, "SELECT * FROM mail_cache WHERE pin = '$pin'");
while ($row = mysqli_fetch_array($result)) {

$content = $row['text'];

$absendername = $mail_adress_noreply;
$absendermail = $mail_adress_noreply;
  $Mailnachricht = nl2br("

<html>
         Hallo,
         Bitte bestätigen Sie das Erstellen eines Tickets, auf $site_name, klicke Sie hierzu auf den unten stehenden Link!
         
         $url/sites/mail_system/verify.php/?push=$pin

         <b>Information:</b>
         Bitte bewahren Sie diese Mail auf, bis das Anliegen geklärt ist.  

         <small>Diese Nachricht wurde automatisch generiert.</small>

         <br>
         <b>Inhalt des Tickts von $Empfaenger2:</b>
         <hr style='color:gray;'>
         <br>
         $content
         </hr>
	
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Anfrage #" . $pin.  " Bestätigen ";
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
      Bitte überprüfe dein Mail-Postfach! 
      <br>

      <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>  
        <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">

		  
      </center>
  </div>
<?php 
  } 
} else {
      ?><meta http-equiv="refresh" content="0; URL=<?php echo $url; ?>"><?php 
    
}?>