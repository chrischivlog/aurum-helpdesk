<?php include '../../assets/header.php'; ?>

<h1>Bewerben: <?php echo $_GET['cat'];?></h1>
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
            <a href="<?php echo $url; ?>sites/join/" style="color: white; ">
                <div class="tag-back">
                    ❮ Übersicht
                </div>
                <div class="only-mobile">
                    <br><br><br>
                </div>
            </a>
        </div>
        <div class="box2">
<?php
$result = mysqli_query($conn, "SELECT * FROM job_desc WHERE category = '".$_GET['cat']."'");
while ($row = mysqli_fetch_array($result)) {

    if(($row['online']) == '0'){
        ?><h2>Aktuell sind keine Bewerbungen für <?php echo $_GET['cat'];?> möglich. Schau später nochmal vorbeis. 😰</h2><?php
    } else{
         

        ?>

            <form action="../mail_system/submit.php?type=apply&cat=<?php echo $_GET['cat'];?>" method="post">
                <b style="float: left;">Dein Name</b>
                <br>
                <font style="font-size: 10px; float:left;">Pflichtfeld</font>
                <input type="text" name="user_name" required=""></input>
                <br>
                <br>
                <b style="float: left;">Bitte gib eine E-mail Adresse an!</b><br>
                <font style="font-size: 10px; float:left;">Die Mail wird nur zur Bearbeitung deines Anliegens benutzt. </font>
                <input type="mail" name="mail" required=""></input>
                <br>
                <br>           
                <b style="float: left;">Stell dich vor:</b>
                <br>
                <font style="font-size: 10px; float:left;">Pflichtfeld</font>
                <textarea type="text" rows="10" name="request1" required=""></textarea>
                <br>
                <b style="float: left;">Warum deine Bewerbung als <?php echo $_GET['cat']?>, bei <?php echo $site_name; ?>?</b>
                <br>
                <font style="font-size: 10px; float:left;">Pflichtfeld</font>
                <textarea type="text" rows="10" name="request2" required=""></textarea>
                <br>
                <br>    
                <b style="float: left;">Anmerkungen zu deiner Bewerbung:</b>
                <br>
                <font style="font-size: 10px; float:left;">Optional</font>
                <textarea type="text" rows="10" name="request3"></textarea>
                <br>
                <br>                                               

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
        </center>

        <div class="box3">
            <div class="box_gray">
                <h2>Voraussetzungen für <?php echo $_GET['cat']?></h2>
                <?php echo $row['description'];?>
            </div>
        </div>
</div>


<?php
    }
}

?>
</div>
</div>
</center>

<?php include '../../assets/footer.php'; ?>
</body>