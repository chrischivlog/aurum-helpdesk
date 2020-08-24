<h2>Optionen für Formulare hinzufügen/Entfernen</h2>


<?php if (isset($_GET['add'])) {
?>
    <form method="POST">
        <b style="float: left;">Name der Option:</b>
        <input type="text" name="name" required></input>
        <br>
        <b style="float: left;">Wähle ein Formular aus!</b>
                <select required="required" name="text">
				<optgroup label="Wähle bitte aus...">
                    <option value="Bann">Bann</option>
                    <option value="Bug">Bug</option>
				</optgroup>
			</select>
        <button type="submit" name="submit" class="tag-back">
            Absenden
        </button>
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $title = mysqli_real_escape_string($conn, $_POST['name']);
        $text = mysqli_real_escape_string($conn, $_POST['text']);


        ///CHECK TITLE

        ///INSERT CREDS
        mysqli_query($conn, "INSERT INTO options (info, type_name) VALUES ('$title', '$text')");
        echo " <meta http-equiv='refresh' content='0; URL=?option'>";
    }
} else { ?>


    <a href="?option&add">
        <button name="submit" class="tag-start" type="submit">
            Erstellen
        </button>
    </a>
    <div class="placeholderUI3"></div>

    <?php
    $result_3 = mysqli_query($conn, "SELECT * FROM options");
    if (mysqli_num_rows($result) > 0) {
        while ($row_4 = mysqli_fetch_array($result_3)) {
    ?>



            <details>
                <summary style="cursor:auto">
                    <b><?php echo $row_4['type_name'] ?> Formular - <?php echo $row_4['info'] ?></b>
                    <a href="?option&delete_option&id=<?php echo $row_4['ID'] ?>">
                        <button name="submit" class="tag-logout" type="submit">
                            Entferenen
                        </button>
                    </a>
                </summary>
            </details>
            <br>
    <?php
        }
    }
    ?>

<?php
} ?>


<?php

if (isset($_GET['delete_option'])) {
    $result = mysqli_query($conn, "DELETE FROM options WHERE ID = '" . $_GET['id'] . "'");
?>
    <meta http-equiv='refresh' content='0; URL=?option'>
<?php
} else {
}

?>