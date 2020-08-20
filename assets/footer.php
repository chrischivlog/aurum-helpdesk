<div class="footer">

    <div class="contentBox1">
        <center>

            <?php if (empty($_SESSION['admin'])) { ?>
                <h3>Dein Anliegen ist nicht aufgeführt?</h3>
                <div class="tag-start">Support Anfrage stellen</div>
                <br>
            <?php } else { ?>
                <h3>Da du in einer Admin Sitzung bist:</h3>
                <a href="<?php echo $url; ?>sites/admin/"><div class="tag-start">Zum Admin-Panel</div>
                <br>
            <?php } ?>
            <br><br>
            <a href="<?php echo $impressum; ?>" style="color:white;">Impressum </a> |
            <a href="<?php echo $datenschutz; ?>" style="color:white;">Datenschutz </a>|
            <a href="sites/content/index.php" style="color:white;">Inhalt</a>

            <?php if (empty($agb)) {
            } else { ?>
                | <a href="<?php echo $agb; ?>" style="color:white;">AGB </a>
            <?php } ?>
            <br>
            <br>
            aurum infinity 2.0 Helpdesk

        </center>
    </div>