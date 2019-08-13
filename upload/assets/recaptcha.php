<?php
$antwortJSON = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
$antwortDaten = json_decode($antwortJSON);


//if($antwortDaten->success){ #validierung
//Erfolg
 //    }
 //        else
 //    {
 //Misserfolg       echo 'nix';
 //
 //}
 
?>