<?php include '../../assets/header.php'; ?>

<h1>AiAi Kapitän! 🌊</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>
<?php 
if(isset($_SESSION['admin'])){
?>


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
                <a href="?module">
                <button name="submit" class="tag-back" type="submit">
                    Module Verwalten
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
                <a href="?option">
                <button name="submit" class="tag-back" type="submit">
                    Formular Optionen Verwalten
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
                <?php include 'logout.php';?>
                <form method="POST">
                <button name="submit-logout" class="tag-logout" type="submit">
                    Abmelden!
                </button>       
                </form>
        </div>
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
        } elseif(isset($_GET['delete_faq'])){
            include 'delete_faq.php';
        } elseif(isset($_GET['apply'])){
            include 'apply.php';
        } elseif(isset($_GET['add_apply'])){
            include 'add_apply.php';
        } elseif(isset($_GET['module'])){
            include 'module.php';
        } elseif(isset($_GET['option'])){
            include 'option.php';
        } else {
            include 'start.php';
        }

        ?>

        </div>
        <div class="box3"></div>
</div>
</div>



<?php
} else{
    ?>
      <meta http-equiv='refresh' content='0; URL=<?php echo $url; ?>sites/admin'>
      <?php

}
?>

<?php include '../../assets/footer.php'; ?>
</body>