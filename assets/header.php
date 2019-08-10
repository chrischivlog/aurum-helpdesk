<!--DATENBANK VERBINDUNG-->
<?php

$server = "localhost";
$user = "test_5";
$database = "test_5";
$password = "lol";
$conn = new mysqli($server, $user, $password, $database);


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



?>

<html lang="de">
<!--TITLE FÜR DIE SEITE-->

<title>Helpdesk - Epic-Playing.de</title>

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



</head>


<body>
<div class="background">
    
    <div class="contentBox1">
    <div class="text-left-header">
    <br>
    <a href="<?php echo $url; ?>/" style="color: white;"><b>Epic-Playing</b> ⎟ <font style="font-weight: 100;">Helpdesk</font></a>
    <center>
        <br><br><br><br>
 

