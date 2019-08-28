<?php
include('../../assets/header.php');

$Empfaenger2 = $_GET['email'];
$pin = $_GET['pin'];
$user = $_GET['user'];



$absendername = "helpdesk@epic-playing.de";
$absendermail = "helpdesk@epic-playing.de";
  $Mailnachricht = nl2br("

<html>
         Hallo " . $_REQUEST['user'] . " vielen dank für deine Bewerbung. 
         <br>
         <br>
         Bitte akzeptiere nun noch die Regeln für Epic-Playing.de.
         
         <a href='http://localhost/epic-playing-support-hub//sites/accept_rules/?user=" . $_REQUEST['user'] . "'>Klicke Hier</a>
	
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Support case #" . $pin.  " eingegangen ";
  mail($Empfaenger2, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));;

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
<?php include '../../assets/footer.php'; ?>
