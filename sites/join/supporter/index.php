<?php include '../../../assets/header.php'; ?>

<h1>Bewerben: Supporter</h1>
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
            <form action="sendmail_supporter.php" method="post">
                <b style="float: left;">Dein Name</b>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>
                <b style="float: left;">Gib bitte dein Alter an</b>
                <input type="text" name="old" required=""></input>
                <br>
                <br>              
                <b style="float: left;">Stell dich kurz vor</b>
                <textarea type="text" rows="6" name="request1" required=""></textarea>
                <br>
                <br>
                <b style="float: left;">Warum willst du dich bei epic-playing bewerben?</b>
                <textarea type="text" rows="6" name="request2" required=""></textarea>
                <br>
                <br>
                <b style="float: left;">Hast du schon Erfahrung im Support bereich?</b>
                <textarea type="text" rows="6" name="request3" required=""></textarea>
                <br>
                <br>
                <b style="float: left;">Bitte nenne mindestens drei Sträken und Schwächen</b>
                <textarea type="text" rows="6" name="request4" required=""></textarea>
                <br>
                <br>                                                    
                <b style="float: left;">Bitte gib eine E-mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="mail" name="mail" required=""></input>
                <br><br>
                <input type="checkbox" name="datenschtz" required="">Ich habe die <a href="<?php echo $datenschutz; ?>">Datenschutzbestimmungen</a> gelesen und akzeptiert.</input>
                <br><br>                
                <script>
                    $("form").submit(function(event) {

                        var recaptcha = $("#g-recaptcha-response").val();
                        if (recaptcha === "") {
                            event.preventDefault();
                            alert("Bitte löse das Recaptcha!");
                        }
                    });
                </script>
                <div class="g-recaptcha" data-sitekey="<?php echo $google_sitekey; ?>"></div>
                <br><br>


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

<?php include '../../../assets/footer.php'; ?>
</body>