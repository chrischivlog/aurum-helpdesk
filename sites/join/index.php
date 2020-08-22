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

    <!---DYN TEIL--->



    <div class="box2">
        <br>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE online = '1'");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <a href="#<?php echo $row['category']; ?>"><button class="tag-start" style="margin-top: 10;"><?php echo $row['category']; ?></button></a>

        <?php } ?>



        <?php
        $result = mysqli_query($conn, "SELECT * FROM job_desc");
        while ($row = mysqli_fetch_array($result)) {
            if ($row['online'] == '1') {

        ?>

                <br>
                <br>
                <h2 id="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></h2>
                <br>
                <b>Voraussetzungen</b>
                <br>
                <br>


                <?php echo $row['description']; ?><br>
                <br>
                <br>
                <a href="formular.php?cat=<?php echo $row['category']; ?>" class="btn btn-primary">
                    Jetzt Bewerben
                </a>
                <br>
                <br>
                <hr style="    border-color: #ffffff52;">
            <?php
            } else {
            ?>
                <br>
                <br>
                <h2 id="<?php echo $row['category']; ?>">Keine Bewerbung möglich - <?php echo $row['category']; ?></h2>
                <br>
                <b>Voraussetzungen</b>
                <br>
                <br>


                <?php echo $row['description']; ?><br>
                <br>
                <hr style="    border-color: #ffffff52;">
        <?php

            }
        } ?>
        <br>
        <br>
    </div>
    <br>
    <div class="box3">

    </div>
    <br>

</div>

<br>
<br>
</div>
</div>

<?php include '../../assets/footer.php'; ?>
</body>