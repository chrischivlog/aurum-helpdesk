<h2>Neues FAQ</h2>

<b>Tipp: Es können auch HTML Tags im FAQ verwendet werden.</b>

<form method="POST">
    <b style="float: left;">Titel:</b>
    <input type="text" name="title" required></input>
    <br>
    <b style="float: left;">Text:</b>
    <textarea type="text" name="text" rows="14" required></textarea>
    <button name="submit" class="tag-back" type="submit">
        Absenden
    </button>
</form>

<?php

if (isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $text = mysqli_real_escape_string($conn,$_POST['text']);




                        ///INSERT CREDS
                        $result2 = mysqli_query($conn, "INSERT INTO faq_article (category, title, details) VALUES ('0', '$title', '$text')");
                        echo "<text style='color: green;'>Erfolgreich eingeplfegt. Leite weiter zur Übersicht in 3 Sekunden</text>";
                        echo " <meta http-equiv='refresh' content='2; URL=?faq'>";



    }

?>