<?php include '../../assets/header.php'; ?>

<h1>Entbannungsantrag</h1>
        <div class="placeholderUI4"></div>

    </center>
    <br><br>
</div>
</div>
</div>
<br>

<!--BACKGROUND UNBAN SITE START-->
<style>
.background {
    background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.pexels.com/photos/1061588/pexels-photo-1061588.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') no-repeat center center fixed;
    background-size: cover;
    color: white;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
</style>
<!--BACKGROUND UNBAN SITE END-->


<div class="text">
    <center>
        <div class="box1">
        <a href="<?php echo $url; ?>" style="color: white; ">
            <div class="tag-back">
            ❮ Hauptseite
        </div>
        </a>
        </div>

        <div class="box2">
            <b style="float: left;">Unter welchem namen wurdest du Gebannt?</b>
            <input type="text" name="user_name" required=""></input>
            <br>
            <br>
            <b style="float: left;">Mit welchem Grund wurdest du ausgeschlossen?</b>
            <input type="text" name="reason" required=""></input>
            <br>
            <br>

            <b style="float: left;">Wo wurdest du Gebannt?</b>
            <select type="text" name="location" required="">
                <optgroup label="wählen">
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
            <b style="float: left;">Wo wurdest du Gebannt?</b>
            <textarea type="text" rows="6" name="desc" ></textarea>
            <br>
            <br>
            <b style="float: left;">Bitte gib eine Email Adresse an!</b><br><font style="font-size: 10px; float:left;">Die Email wurd nur als Empfangsbestätigung benutzt. </font>
            <input type="text" name="reason" required=""></input>


        </div>
        <div class="box3"></div>
</div>
</div>

</center>

<?php include '../../assets/footer.php'; ?>
</body>