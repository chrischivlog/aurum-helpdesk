<?php include '../../assets/header.php'; ?>

<h1>Akzeptiere die Regeln</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>
<?php 

if($_GET){
    $user = $_GET['user'];
    } 
    if(!$_GET){
    $user = "Dein Name";
    } 
?>

<div class="text">
    <center>
        <div class="box1">
        </div>
        <div class="box2">
            <form action="accept_rules_go.php" method="post">
                <b style="float: left;">Dein Name</b>
                <input type="text" name="user" value="<?php echo $user ;?>" required="">
                <br><br>
                <input type="checkbox" name="accepted" required=""> Ich akzeptiere die Regeln von Epic-Playing.de</input>
                <br>
                <br>
                <font style="color: gray; font-size: 65%"><b>Mit dem Akzeptieren der Regeln wird auch deine Bewerbung gültig gemacht.</b></font>
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