<?php include './assets/header.php'; ?>

<h1>Huhu, wie können wir dir Helfen? 👋</h1>
<div class="placeholderUI4"></div>

</center>
<br><br>
</div>
</div>
</div>
<br>

<div class="text">
    <center>
        <div class="placeholderUI3"></div>
        <div class="box1 a-black">
        <div class="only-mobile">
                <br><br><br>
                </div>
            <a class="a-black" href="<?php echo $url; ?>/#faq">
                <img src="<?php echo $url; ?>/assets/icons/clip-2.png" width="240px">
                <h1>FAQ</h1>
            </a>

            <font style="font-weight: 100;">Fragen? Wir haben die richtigen antworten.</font>
        </div>
        <div class="box2">
        <div class="only-mobile">
                <br><br><br>
                </div>
            <a class="a-black" href="<?php echo $url; ?>/sites/join">
                <img src="<?php echo $url; ?>/assets/icons/clip-message-sent.png" width="240px">
                <h1>Bewerben</h1>
            </a>

            <font style="font-weight: 100;">Für mehr Epic-Playing in deinem Leben!</font>

        </div>
        <div class="box3">
        <div class="only-mobile">
                <br><br><br>
                </div>
            <a class="a-black" href="<?php echo $url; ?>/sites/unban">
                <img src="<?php echo $url; ?>/assets/icons/clip-no-comments.png" width="240px">
                <h1>Entbannen</h1>
            </a>

            <font style="font-weight: 100;">Falls du mal wieder misst gebaut hast...</font> <br><br><br>

        </div>
</div>
</div>

</center>

<div class="placeholderUI5"></div><br><br>


<div class="text">
    <center>
        <div class="only-moblie">
        </div>
        <h1 id="faq">FAQ</h1>

        <?php
        $conn = new mysqli($server, $user, $password, $database);
        mysqli_set_charset($conn, "utf8");
        $result = mysqli_query($conn, "SELECT * FROM faq_article ORDER BY title DESC");
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <p>
                <details>

                    <summary>
                        <b><?php echo $row['title']; ?></b>
                    </summary>

                    <div class="sum-word-breakUI">
                        <br>
                        <?php echo $row['details']; ?>
                        </br>
                    </div>
                </details>
            <?php
            }
            ?>
            <div class="placeholderUI4"></div>

</div>


<?php include './assets/footer.php'; ?>


</body>