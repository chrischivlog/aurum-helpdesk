<div class="footer">
    <div class="contentBox1">
        <center>

            <?php 
            if($support_enabled == '1'){ ?>
                
                    <h3>Dein Anliegen ist nicht aufgeführt?</h3>
                    <a href="<?php echo $url; ?>sites/support-request/"><div class="tag-start">Support Anfrage stellen</div></a>
                    <br>

                <?php } 
            ?>
            <br>
            <a href="<?php echo $impressum; ?>" style="color:black;">Impressum </a> |
            <a href="<?php echo $datenschutz; ?>" style="color:black;">Datenschutz </a>|
            <a href="<?php echo $url; ?>sites/content/index.php" style="color:black;">Inhalt</a>

            <?php if (empty($agb)) {
            } else { ?>
                | <a href="<?php echo $agb; ?>" style="color:black;">AGB </a>
            <?php } ?>
            <?php if (empty($_SESSION['admin'])) {
            } else { ?>
                | <a href="<?php echo $url; ?>sites/admin/" style="color:black;" target="_blank">Admin Panel </a>
            <?php } ?>
            <br>
            <br>
            aurum infinity by Christopher Oneisz - Version 2.32.2
 
        </center>
    </div>