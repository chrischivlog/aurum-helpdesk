<?php
if ($_GET['push']) { //IS PIN THERE?
  $pin = $_GET['push'];
  $result = mysqli_query($conn, "SELECT * FROM mail_cache WHERE pin = '$pin'");
  if (mysqli_fetch_array($result) > 0) {
    include 'send_team.php';
?>
    <h1>Deine Daten wurden soeben an <?php echo $site_name; ?> weitergeleitet.</h1>
    <div class="placeholderUI4"></div>

    </center>
    <br><br>
    </div>
    </div>
    </div>
    <br>


    <div class="text">
      <div class="placeholderUI4"></div>

      <center>
        <img src="https://cdn2.golfgenius.com/assets/bootstrap_theme/job/Checkmark400x400-4383ca9f626a45acc6f70b7a7686e3f979f941b95164d94a9dffde453f4b3a85.gif" width="140px">
        <h2>Sollte es Probleme oder Fragen geben, wende dich an den Betreiber mit der ID #<?php echo $pin; ?> </h2>

        <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>
        <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">

      </center>
    </div>
  <?php

  } else { //IS PIN NOT THERE??>
    <h1>Bitte überprüfe deine Daten!</h1>
    <div class="placeholderUI4"></div>

    </center>
    <br><br>
    </div>
    </div>
    </div>
    <br>
    <div class="text">
      <div class="placeholderUI4"></div>

      <center>
        <h2>Die ID ist entweder Falsch oder schon benutzt.</h2>

        <b>Du wirst in 10 Sekunden zur Startseite zurück geschickt...</b>
          <meta http-equiv="refresh" content="10; URL=<?php echo $url; ?>">
      </center>
    </div>
<?php
  }
} elseif ($_GET['push'] == NULL) { //IS PIN NOT SET THERE?
  echo $_GET['push'] . "<h1>Gib einen gültigen Link an!</h1><br><br></div>";
}
