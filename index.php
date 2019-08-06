<?php include './assets/header.php'; ?>


<div class="text-left-header">
    <br>
    <b>Epic-Playing</b> ⎟ <font style="font-weight: 100;">Helpdesk</font>
    <center>
        <br><br><br><br>
        <h1>Wie können wir dir Helfen?</h1>
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
            <a class="a-black" href="<?php echo $url; ?>/#faq">
                <img src="<?php echo $url; ?>/assets/icons/clip-2.png" width="240px">
                <h1>FAQ</h1>
                <font style="font-weight: 100;">Fragen? Wir haben die richtigen antworten.</font>
            </a>
        </div>
        <div class="box2">
            <a class="a-black" href="<?php echo $url; ?>/sites/join">
                <img src="<?php echo $url; ?>/assets/icons/clip-message-sent.png" width="240px">
                <h1>Bewerben</h1>
                <font style="font-weight: 100;">Für mehr Epic-Playing in deinem Leben!</font>
            </a>

        </div>
        <div class="box3">
            <a class="a-black" href="<?php echo $url; ?>/sites/unban">
                <img src="<?php echo $url; ?>/assets/icons/clip-no-comments.png" width="240px">
                <h1>Entbannen</h1>
                <font style="font-weight: 100;">Falls du mal wieder misst gebaut hast...</font>
            </a>
        </div>
        </div>
        </div>

    </center>

    <div class="placeholderUI5"></div><br><br>


    <div class="text">
        <center>
        <?php
			$result = mysqli_query($conn, "SELECT * FROM faq_article WHERE category = 'apply' ORDER BY date DESC");
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
<br><br>
<br>
<br>
<br>
<br>

    </div>








    </body>