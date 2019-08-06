<!--DATENBANK VERBINDUNG-->
<?php

$server = "localhost";
$user = "test_5";
$database = "test_5";
$password = "lol";
$conn = new mysqli($server, $user, $password, $database);


$result = mysqli_query($conn, "SELECT * FROM domain_config");
while ($row = mysqli_fetch_array($result)) {

    $url = $row["domain_path"];
}
?>

<html lang="de">
<!--TITLE FÜR DIE SEITE-->

<title>AHOI!</title>

<head>
    <!--ICON-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $url; ?>/assets/images/index.png">

    <!--META-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta property="og:type" content="website" />

    <!--STYLE-->
    <link href="<?php echo $url; ?>/assets/style.css" rel="stylesheet">

</head>


<body>
<div class="background">
    
    <div class="contentBox1">