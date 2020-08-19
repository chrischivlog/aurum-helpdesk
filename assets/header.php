<!---
 * @package aurum v1.0
 * @website http://www.infinityheroes.de
 * @author Christopher Oneisz
 * @Icons icons8.de
 * @since 1.0.2
 --->

<!--DATENBANK VERBINDUNG-->
<?php

/**
 * @package aurum v1.0
 * @website http://www.infinityheroes.de
 * @author Christopher Oneisz
 * @Icons icons8.de
 * @since 1.0.2
 */


$server = "localhost";
$user = "root";
$database = "test";
$password = "";
$conn = new mysqli($server, $user, $password, $database);
?>
<!--DATENBANK VERBINDUNG ENDE-->

<?php

$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE description = 'domain'");
while ($row = mysqli_fetch_array($result)) {

    $url = $row["domain_path"];
}

$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE description = 'tidio'");
while ($row = mysqli_fetch_array($result)) {

    $tidio = $row["domain_path"];
}

$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE description = 'datenschutz'");
while ($row = mysqli_fetch_array($result)) {

    $datenschutz = $row["domain_path"];
}


$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE description = 'impressum'");
while ($row = mysqli_fetch_array($result)) {

    $impressum = $row["domain_path"];
}

$result = mysqli_query($conn, "SELECT * FROM domain_config WHERE description = 'agb'");
while ($row = mysqli_fetch_array($result)) {

    $agb = $row["domain_path"];
}

$result = mysqli_query($conn, "SELECT * FROM google_config WHERE description = 'data-sitekey'");
while ($row = mysqli_fetch_array($result)) {

    $google_sitekey = $row["token"];
}

$result = mysqli_query($conn, "SELECT * FROM google_config WHERE description = 'secretkey'");
while ($row = mysqli_fetch_array($result)) {

    $secretkey = $row["token"];
}

$result = mysqli_query($conn, "SELECT * FROM mail_config WHERE category = 'support-adress'");
while ($row = mysqli_fetch_array($result)) {

    $Empfaenger = $row["description"];
}

$result = mysqli_query($conn, "SELECT * FROM mail_config WHERE category = 'mail-versendet'");
while ($row = mysqli_fetch_array($result)) {

    $mail_text = $row["description"];
}

$result = mysqli_query($conn, "SELECT * FROM mail_config WHERE category = 'support-adress'");
while ($row = mysqli_fetch_array($result)) {

    $mail_adress = $row["description"];
}

$result = mysqli_query($conn, "SELECT * FROM aurum_info WHERE ID = '1'");
while ($row = mysqli_fetch_array($result)) {

    $site_name = $row["info"];
}

?>

<html lang="de">
<!--TITLE FÜR DIE SEITE-->

<title>Helpdesk - <?php echo $site_name; ?></title>

<head>
    <!--ICON-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url; ?>/assets/images/index.png">

    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta property="og:type" content="website" />

    <!--STYLE-->
    <link href="<?php echo $url; ?>/assets/style.css" rel="stylesheet">


    <!--SCRIPT-->
    <script src="<?php echo $tidio; ?>" ></script> 
    <script type="text/javascript" src="<?php echo $url; ?>/assets/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/scroll.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>




</head>
<div class="cookie-banner">
    Wir nutzen Cookies ok? <a href="?cookies=1"><button class="tag-start">Ok!</button></a>
</div>  

<style>
.background {
    background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://media.discordapp.net/attachments/597066766903934997/745285695194529974/image1.jpg') no-repeat center center fixed;
    background-size: cover;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

</style>

<body>
<div class="background">

    <div class="contentBox1">
    <br><br><br>

    <div class="text-left-header">
    <br>
    <a href="<?php echo $url; ?>/" style="color: white;"><b><?php echo $site_name; ?></b> ⎟ <font style="font-weight: 100;">Helpdesk</font></a>
    <center>
        <br><br><br><br>
 

