<?php
include('../../../assets/header.php');
include('../../../assets/recaptcha.php');
if ($antwortDaten->success) {

  
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

$absendername = $mail_adress_noreply;
$absendermail = $mail_adress_noreply;
  $Mailnachricht = nl2br("

<html>
                <h1>Bewerbung als Supporter</h1>
                Mail: " . $_REQUEST['mail'] . "
                <br>
                Name des Nutzers: <br>" . $_REQUEST['user_name'] . "
                <br>
                Alter: <br>" . $_REQUEST['old'] . "
                <br>
                Stell dich kurz vor: <br>" . $_REQUEST['request1'] . "  			
                <br>  	      		    
                Warum willst du dich bei uns bewerben?<br>" . $_REQUEST['request2'] . "
                <br>
                Hast du schon erfahrung im Support bereich?<br>" . $_REQUEST['request3'] . "
                <br>
                Bitte nenne mindestens drei Sträken und Schwächen: <br>" . $_REQUEST['request4'] . "
                <br>                
                Gib bitte dein Alter an<br>" . $_REQUEST['old'] . "
                <br>                
                <br>	                						
</html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=UTF-8';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Support case #" . $pin.  "- von " .$_REQUEST['user_name']. " Bewerbung ";
  mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));;

?>
  <h1>Es wird hart gearbeitet...</h1>
  <div class="placeholderUI4"></div>
  
  </center>
  <br><br>
  </div>
  </div>
  </div>
  <br>
  
  
  <div class="text">
      <center>
      <img src="<?php echo $url; ?>/assets/img/loader.gif" width="400px"><br>
      Bitte habe ein Moment gedult!
      <br>

        <div class="placeholderUI4"></div>
 

      </center>
  </div>
<meta http-equiv="refresh" content="3; URL=../../mail_service/sendmail_apply.php?email=<?php echo $_REQUEST['mail']; ?>&pin=<?php echo $pin;  ?>&user=<?php echo $_REQUEST['user_name'];  ?>">


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
      Dein Anliegen konnte nicht bearbeitet werden, bitte überpfüfe ob du Java-Script aktiviert hast oder du hast Felder leer gelassen...
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

<?php include '../../../assets/footer.php'; ?>
