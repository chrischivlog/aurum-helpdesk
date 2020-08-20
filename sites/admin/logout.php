<?php
if (isset($_POST['submit-logout'])) {
    session_destroy(); 
    ?>
    <meta http-equiv="refresh" content="1; URL=?addcookies">

    <meta http-equiv="refresh" content="2; URL=<?php echo $url; ?>">
<?php
}
?>
