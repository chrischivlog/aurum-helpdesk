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
        $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE online = '1'");
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
                        while ($row = mysqli_fetch_array($result)) {

                    ?>

                <br>
                <br>
                    <h2 id="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></h2>
                    <br>
                    <b>Voraussetzungen</b>
                    <br>
                    <br>
        
        
                    <?php echo $row['description']; ?><br>
                    Stellenausschreibung aktiv seid: <?php echo $row['date']; ?>
                    <br>
                    <br>
                    <a href="formular.php?cat=<?php echo $row['category']; ?>" class="btn btn-primary">
                        Jetzt Bewerben
                    </a>
                    <br>
                    <br>
                    <hr style="    border-color: #ffffff52;">
        
                <?php 
                        }
                } else {
                    ?><div class="placeholderUI4"></div><?php

                    echo "<center><h2>Aktuell sind keine Bewerbungen möglich. Schau später nochmal vorbeit. 😰</h2></center>";

                } ?>
        <br>
        <br>
    </div>
    <br>
    <div class="box3">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE online = '0' LIMIT 1");
    while ($row = mysqli_fetch_array($result)) {
    ?>
            <h3>Wird aktuell nicht gesucht:</h3>
            <?php
    }
            ?>
            <div class="box_gray">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM job_desc WHERE online = '0'");
    while ($row = mysqli_fetch_array($result)) {
    ?>

                <h2 style="margin-top: 12.92;padding-top: 0px;padding-bottom: 0px; margin-bottom: -23;" id="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></h2>
                <br>
                <?php
                if (isset($row['date']) && $row['date'] > '0') { ?>
                    <br>
                    Voraussichtliche neue Stellenausschreibung:
                <?php echo $row['date'];
                } else { ?>
                    <br>
                    Der Betreiber hat keine weiteren<br> Informationen angegeben, wann es wieder<br> zu einer Stellenausschreibung kommt.
                <?php }
                ?>
    <?php } ?>
    </div>
    <br>

    </div>

    <br>
    <br>
</div>
</div>

<?php include '../../assets/footer.php'; ?>
</body>