<?php include '../../assets/header.php'; ?>

<?php if(isset($_SESSION['admin'])){
    echo "<meta http-equiv='refresh' content='0; URL=login.php?'>";
} else {
}
?> 

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
            <form method="post">
                <b style="float: left;">Nutzername für den Admin zugang:</b>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>
                <b style="float: left;">Passwort:</b>
                <input type="password" name="password" required=""></input>
                <br>
                <br>              

<br>


                <button name="submit-admin-access" class="tag-back" type="submit">
                    Absenden
                </button>
            </form>


            <?php 
            if(isset($_POST['submit-admin-access'])){
                if ($_POST['user_name']==$admin_user && $_POST['password']==$admin_password){
                    $_SESSION['admin'] = '1';
                    echo "<meta http-equiv='refresh' content='0; URL=login.php?'>";

                } else {
                    echo "Falscher Nutzer oder Passwort. Wende dich an den Admin, sofern du die Logindaten verloren hast.";
                }

            }
            ?>




            <div class="placeholderUI4"></div>

        </div>
        <div class="box3"></div>
</div>
</div>


</center>

<?php include '../../assets/footer.php'; ?>
</body>