<?php include '../../assets/header.php'; ?>

<h1>Bewerben 🤝</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>


<div class="text">
    <div class="box1">
        <center>
            <a href="<?php echo $url; ?>" style="color: white; ">
                <div class="tag-back">
                    ❮ Hauptseite
                </div>
            </a>
        </center>
    </div>

    <!---SUPPORTER TEIL--->

    <div class="box2">
        <h2>Supporter</h2>
        <br>
        <b>Voraussetzungen</b>
        <br>
        <br>

        <!-- BEGINN DATABASE CONNECTION BANN REASONS-->

        <?php
        $conn = new mysqli($server, $user, $password, $database);
        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE category = 'supporter' ");
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <!--DATABASE CONNECTION BANN REASONS END-->
            <?php echo $row['description']; ?>
            <br>
        <?php
        }
        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn, "SELECT * FROM jobs_online WHERE description = 'supporter'");

        while ($row = mysqli_fetch_array($result)) {
            if ($row['online'] == '1') {
                ?>
                <br>
                <a href="supporter" class="btn btn-primary">
                    Jetzt Bewerben
                </a>
            <?php
            } else {
                ?>
                <br>
                    <b>Aktuell kannst du dich nicht als Supporter  Bewerben.</b>
            <?php
            }
        }
        ?>


        <div class="placeholderUI3"></div>


        <!---PARTNER TEIL--->
        <h2>Partner</h2>
        <br>
        <b>Voraussetzungen</b>
        <br>
        <br>

        <!-- BEGINN DATABASE CONNECTION BANN REASONS-->

        <?php
        $conn = new mysqli($server, $user, $password, $database);
        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE category = 'partner' ORDER BY description DESC");
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <!--DATABASE CONNECTION BANN REASONS END-->
            <?php echo $row['description']; ?>
            <br>
        <?php
        }
        ?>
        <br>
        <a href="partner" class="btn btn-primary">
            Jetzt Anfragen
        </a>
        <br>
        <div class="placeholderUI4"></div>

    </div>
    <div class="box3"></div>

</div>

</div>



<?php include '../../assets/footer.php'; ?>
</body>