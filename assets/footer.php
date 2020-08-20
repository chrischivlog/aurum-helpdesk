
<div class="footer">

    <div class="contentBox1">
<center>

<?php if(empty($_SESSION['admin'])) {?>
<h3>Dein Anliegen ist nicht aufgeführt?</h3>
<div class="tag-start">Support Anfrage stellen</div>
<br>
<?php }?>
<br><br>
    <a href="<?php echo $impressum; ?>" style="color:white;">Impressum </a> |
        <a href="<?php echo $datenschutz; ?>" style="color:white;">Datenschutz </a>|
         <a href="<?php echo $agb; ?>" style="color:white;">Inhalt</a>

        <?php if(empty($agb)){} else{ ?>
            | <a href="<?php echo $agb; ?>" style="color:white;">AGB </a>
        <?php } ?>
        <br>
    <br>
    aurum infinity 2.0 Helpdesk

    </center>
</div>