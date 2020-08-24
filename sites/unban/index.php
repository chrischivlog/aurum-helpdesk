<?php include '../../assets/header.php'; ?>

<h1>Entbannungsantrag</h1>
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
        <?php if($unban_enabled == '1'){?>
        <div class="box2">
            <form action="../mail_system/submit.php?type=bann" method="post">
                <b style="float: left;">Bitte gib eine E-Mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="email" name="mail" required></input>
                <br><br>
                <b style="float: left;">Bitte gib deinen Namen an</b><br>
                <input type="mail" name="user_name" required></input>
                <br><br>
                <b style="float: left;">Mit welchem Grund wurdest du ausgeschlossen?</b>
                <input type="text" name="request1" required></input>
                <br>
                <br>

                <b style="float: left;">Wo wurdest du von uns ausgeschlossen?</b>
                <select type="text" name="request2" required>
                    <optgroup label="Wähle:">
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM options WHERE type_name = 'Bann'");
                        while ($row = mysqli_fetch_array($result)) {?>
                            <option><b><?php echo $row['info']; ?></b></option>
                        <?php
                        }
                        ?>
                    </optgroup>
                </select>
                <br>
                <br>
                <b style="float: left;">Wann wurdest du ausgeschlossen?</b>
                <input type="text" name="request3" value="<?php echo date("d.m.Y"); ?>" placeholder="dd.mm.jjjj hh:mm" required>    
                <br>
                <br>
                <b style="float: left;">Deine Entschuldigung/Richtigstellung</b>
                <textarea type="text" rows="6" name="request4" required=""></textarea>
                <br>
                <br>
                <input type="checkbox" name="datenschtz" value="Car" required="">Ich habe die <a href="<?php echo $datenschutz; ?>">Datenschutzbestimmungen</a> gelesen und akzeptiert.</input>
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
                <?php }else{?>
                    <div class="box2">
                    <h2>Der Betereiber hat dieses Formular deaktiviert!</h2>
                </div>
                    </div>
                <?php }?>

</center>

<?php include '../../assets/footer.php'; ?>
</body>