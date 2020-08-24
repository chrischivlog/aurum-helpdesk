<?php include '../../assets/header.php'; ?>

<h1>Fehler Melden 🙀</h1>
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
            <form action="../mail_system/submit.php?type=bug" method="post">
            <b style="float: left;">Bitte gib eine E-Mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="email" name="mail" required=""></input>
                <br><br>
                <b style="float: left;">Dein Name</b>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>                
                <b style="float: left;">Beschreibe den Fehler</b>
                <textarea type="text" rows="6" name="request1" required=""></textarea>
                <br>
                <br>
                <b style="float: left;">Wo ist der Fehler aufgetaucht?</b>
                <select required="required" name="request2">
				<optgroup label="Wähle bitte aus...">
					<?php
						mysqli_set_charset($conn, "utf8");
						$result = mysqli_query($conn, "SELECT * FROM options WHERE type_name = 'Bug' ORDER BY info DESC");

						while ($row = mysqli_fetch_array($result)) { ?>
					<option value="<?php  echo $row['info'];?>"><?php echo $row['info'];?></option>
					<?php	}
						?>
				</optgroup>
			</select>
                <br>
                <br>
                <b style="float: left;">ggf. Screenshots oder Videos</b><br>
                <font style="font-size: 10px; float:left;">Bitte gib einen Link an. </font>

                <input type="text" name="request3"></input>
                <br>
                <br>                                                         
                <input type="checkbox" name="datenschtz" required>Ich habe die <a href="<?php echo $datenschutz; ?>">Datenschutzbestimmungen</a> gelesen und akzeptiert.</input>
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