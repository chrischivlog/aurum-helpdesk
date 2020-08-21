<?php

///GET FROM DB
$result = mysqli_query($conn, "SELECT * FROM mail_cache WHERE pin = '$pin'");
        if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {


        $absendername = $mail_adress_noreply;
        $absendermail = $mail_adress_noreply;
        
    ///SUCCSESS
    $Mailnachricht = nl2br("

    <html>
                ". $row['text']."              						
    </html>
");

  $header[] = 'MIME-Version: 1.0';
  $header[] = 'Content-type: text/html; charset=UTF-8';
  $header[] = "From: $absendername <$absendermail>";

  $Mailbetreff = "Anfrage #" . $pin. " - " .$row['date']. "";
  mail($Empfaenger, $Mailbetreff, $Mailnachricht, implode("\r\n", $header));


  //DELETE FORM DATABASE
  $result = mysqli_query($conn, "DELETE FROM mail_cache WHERE pin = '$pin'");

  ?><meta http-equiv="refresh" content="10; URL="><?php    

        }

      }

?>
