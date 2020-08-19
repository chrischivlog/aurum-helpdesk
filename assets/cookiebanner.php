<?php
session_start();

if (isset($_GET['addcookies'])) {

    $_SESSION['cookies'] = 1;
?>
    <meta http-equiv='refresh' content='0; URL=?'>
<?php
}
if (empty($_SESSION['cookies'])) {
?>
    <div class="cookie-banner">
        Die Webseite <b><?php echo $site_name; ?></b> verwendet Cookies um die richtige Nutzung zu gewährleisten  <a href="?addcookies"> <button class="tag-start">Ich habe verstanden!</button></a>
    </div>
    <br><br><br>


<?php

} elseif (isset($_SESSION['cookies']) == 1) {
}

?>