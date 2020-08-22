<?php
include('../../assets/header.php');
include('../../assets/recaptcha.php');
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

include './class/mail_insert_datbase.php';

?>
  <h1>Deine Daten werden gespeichert.</h1>
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
      Bitte habe einen Moment geduld!
      <br>

        <div class="placeholderUI4"></div>
 

      </center>
  </div>
<meta http-equiv="refresh" content="10; URL=verify.php?verify=1&mail=<?php echo $_REQUEST['mail']; ?>&pin=<?php echo $pin;  ?>">


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

<?php include '../../assets/footer.php'; ?>
