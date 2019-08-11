<?php
include('../../assets/header.php');
include('../../assets/recaptcha.php');
if ($antwortDaten->success) {

  $Empfaenger = "chrischivlog@gmail.com";
  function generatePIN($digits = 4){
    $i = 0;
    $pin = "";
    while($i < $digits){
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

$pin = generatePIN(6);

  $absendername = "help.aurum@epic-playing.de";
  $absendermail = "help.aurum@epic-playing.de";
  $Mailnachricht = nl2br("

<html>
                <h1>Entbannungsantrag</h1>
                Mail: " . $_REQUEST['mail'] . "
                <br>
                Name des Nutzers: " . $_REQUEST['user_name'] . "
                <br>
                Grund des Banns: " . $_REQUEST['reason'] . " d
                <br>
                  Gebannt auf/im " . $_REQUEST['location'] . "  			
                <br>  	      		    
                  Datum des Banns<br>" . $_REQUEST['date'] . "
                <br>
                  Richtigstellung/Entschuldigung<br>" . $_REQUEST['desc'] . "

                <br>	                						
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=UTF-8';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Support case #" . $pin.  "- von " . $_REQUEST['user_name'] . " Entbannung ";
  mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));;

?>
  <h1>Dein Anliegen #<?php echo $pin;?> übermittelt</h1>
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
      Dein Anliegen konnte nicht bearbeitet werden, bitte überpfüfe ob du Java-Script aktiviert hast oder Felder leer gelassen.
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
