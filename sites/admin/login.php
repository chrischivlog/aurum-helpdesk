<?php include '../../assets/header.php'; ?>

<h1>AiAi Kapitän! 🌊</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>
<div class="text">

        <div class="box1">
            <br>
                <a href="?">
                <button name="submit" class="tag-back" type="submit">
                    Startseite
                </button>
                </a>
                <br>
                <br>
                <a href="?faq">
                <button name="submit" class="tag-back" type="submit">
                    FAQ Verwalten
                </button>
                </a>
                <br>
                <br>
                <a href="?settings">
                <button name="submit" class="tag-back" type="submit">
                    System-Daten Verwalten
                </button>
                </a>
                <br>
                <br>
                <a href="?apply">
                <button name="submit" class="tag-back" type="submit">
                    Bewerbungphase Verwalten
                </button>
                </a>
                <br>
                <br>
                <button name="submit" class="tag-logout" type="submit">
                    Abmelden!
                </button>       
        </div>
        <center>
        <div class="box2">

        <?php
        if(isset($_GET['faq'])){
            include 'faq.php';
        } elseif(isset($_GET['settings'])){
            include 'settings.php';
        } elseif(isset($_GET['add_faq'])){
            include 'add_faq.php';
        } elseif(isset($_GET['edit_faq'])){
            include 'edit_faq.php';
        } elseif(isset($_GET['apply'])){
            include 'apply.php';
        } elseif(isset($_GET['apply_supporter'])){
            include 'edit_apply-sup.php';
        } elseif(isset($_GET['apply_partner'])){
            include 'edit_apply-partner.php';
        } else {
            include 'start.php';
        }

        ?>

        </div>
        <div class="box3"></div>
</div>
</div>


</center>

<?php include '../../assets/footer.php'; ?>
</body>