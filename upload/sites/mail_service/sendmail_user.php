<?php
include('../../assets/header.php');

$Empfaenger2 = $_GET['email'];
$pin = $_GET['pin'];


$absendername = "helpdesk@epic-playing.de";
$absendermail = "helpdesk@epic-playing.de";
  $Mailnachricht = nl2br("

<html>
         $mail_text
	
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Support case #" . $pin.  " eingegange ";
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
