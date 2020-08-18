<?php include '../../assets/header.php'; ?>

<h1>Admin Loggin</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>


<div class="text">
    <center>
        <div class="box1">
            <a href="<?php echo $url; ?>" style="color: white; ">
                <div class="tag-back">
                    ❮ Hauptseite
                </div>
                <div class="only-mobile">
                    <br><br><br>
                </div>
            </a>
        </div>

        <div class="box2">
            <form action="login.php" method="post">
                <b style="float: left;">Nutzername für den Admin zugang:</b>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>
                <b style="float: left;">Passwort:</b>
                <input type="password" name="password" required=""></input>
                <br>
                <br>              

<br>


                <button name="submit" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>
            <div class="placeholderUI4"></div>

        </div>
        <div class="box3"></div>
</div>
</div>


</center>

<?php include '../../assets/footer.php'; ?>
</body>