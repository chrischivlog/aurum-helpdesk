<h2>Ändere FAQ-Titel und fragen oder füge neue Hinzu.</h2>

<a href="?add_faq">
    <button name="submit" class="tag-start" type="submit">
        Erstellen
    </button>
</a>
<div class="placeholderUI3"></div>

<?php
$result_3 = mysqli_query($conn, "SELECT * FROM faq_article");
if (mysqli_num_rows($result) > 0) {
    while ($row_4 = mysqli_fetch_array($result_3)) {
?>



<details>
    <summary>
        <b><?php echo $row_4['title']?></b>
        
    </summary>

    <div class="sum-word-breakUI">
        <br>
        <?php echo $row_4['details']?>
        <br>
        <br>
        <button name="submit" class="tag-start" type="submit">
            Entferenen
        </button>

        <a href="?edit_faq&id">
        <button name="submit" class="tag-start" type="submit">
            Bearbeiten
        </button>
        </a>

    </div>
</details>
<br>
<?php 
    }
}
?>
