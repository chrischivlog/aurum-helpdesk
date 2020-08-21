<?php
$absendername = $mail_adress_noreply;
$absendermail = $mail_adress_noreply;

///GET FROM DB
$result = mysqli_query($conn, "SELECT * FROM mail_cache WHERE pin = '$pin'");
      while ($row = mysqli_fetch_array($result)) {
        if($row['pin'] == NULL){

      ?><meta http-equiv="refresh" content="10; URL=verify.php?push ?>"><?php    
    } else {
    ///SUCCSESS
    $Mailnachricht = nl2br("

    <html>
                ". $row['text']."              						
    </html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=UTF-8';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Anfrage #" . $pin. " -" .$row['date']. "";
  mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));
  ?><meta http-equiv="refresh" content="10; URL=>"><?php    

        }

      }

?>
