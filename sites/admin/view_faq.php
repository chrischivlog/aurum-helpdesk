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
        <a href="?delete_faq&id=<?php echo $row_4['ID']?>" href="url_to_delete" onclick="return confirm('Soll der Eintrag <?php echo $row_4['title']; ?> wirklich entfernt werden?');">
        <button name="submit" class="tag-start" type="submit">
            Entferenen
        </button>
        </a>

        <a href="?edit_faq&id=<?php echo $row_4['ID']?>">
        <button name="submit" class="tag-start" type="submit">
            Bearbeiten
        </button>
        </a>

    </div>
</details>
<?php 
    }
}
?>
