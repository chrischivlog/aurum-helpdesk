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

        <div class="box2">
            <form action="sendmail_unban.php" method="post">
                <b style="float: left;">Unter welchem Namen wurdest du gebannt?</b>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>
                <b style="float: left;">Mit welchem Grund wurdest du ausgeschlossen?</b>
                <input type="text" name="request1" required=""></input>
                <br>
                <br>

                <b style="float: left;">Wo wurdest du gebannt?</b>
                <select type="text" name="request2" required="">
                    <optgroup label="Wähle:">
                        <!-- BEGINN DATABASE CONNECTION BANN REASONS-->

                        <?php
                        $conn = new mysqli($server, $user, $password, $database);
                        mysqli_set_charset($conn, "utf8");
                        $result = mysqli_query($conn, "SELECT * FROM bann_location ORDER BY location DESC");
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <!--DATABASE CONNECTION BANN REASONS END-->



                            <option><b><?php echo $row['location']; ?></b></option>
                        <?php
                        }
                        ?>
                    </optgroup>
                </select>
                <br>
                <br>
                <b style="float: left;">Wann wurdest du gebannt?</b>
                <input type="text" name="date" value="<?php echo date("d.m.Y"); ?>" placeholder="dd.mm.jjjj hh:mm" required>    
                <br>
                <br>
                <b style="float: left;">Deine Entschuldigung/Richtigstellung</b>
                <textarea type="text" rows="6" name="desc" required=""></textarea>
                <br>
                <br>
                <b style="float: left;">Bitte gib eine E-Mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="mail" name="mail" required=""></input>
                <br><br>
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


</center>

<?php include '../../assets/footer.php'; ?>
</body>