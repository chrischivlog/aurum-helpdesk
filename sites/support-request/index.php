<?php include '../../assets/header.php'; ?>

<h1>Allgemeine Support-Anfrage 🔮</h1>
<div class="placeholderUI4"></div>

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
    </center>

        <div class="box2">
            <form action="sendmail_help.php" method="post">
                <h4>Wie können wir dir Helfen?</h4><p>  
                <small>Anfragen zu Bugs oder Bewerbungen werden möglicherweiße über dieses Formular nicht beantwortet.</small>
                <select required="required" name="type">
                    <option value="Vorschlag einen neuen FAQ Beitrag">Vorschlag zu einen neuen FAQ Beitrag</option>
                    <option value="Allgemeine Anfrage">Allgemeine Anfrage</option>
			</select>
                <br>
                <br>
                <b style="float: left;">Beschreibe dein Anliegen:</b>
                <textarea type="text" rows="6" name="request1" required=""></textarea>
                <br>
                <br>                                                         
                <b style="float: left;">Bitte gib eine E-Mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="mail" name="mail" required=""></input>
                <br><br>
                <input type="checkbox" name="datenschtz" required="">Ich habe die <a href="<?php echo $datenschutz; ?>">Datenschutzbestimmungen</a> gelesen und akzeptiert.</input>
                <br><br>
                <div class="g-recaptcha" data-sitekey="<?php echo $google_sitekey; ?>"></div>
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