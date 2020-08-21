<h2>Neue Bewerbungs-Gruppe</h2>

<b>Tipp: Es können auch HTML Tags im Formular verwendet werden.</b>
<br><br>

<form method="POST">
    <b style="float: left;">Name:</b>
    <input type="text" name="name" required></input>
    <br>
    <b style="float: left;">Voraussetzungen:</b>
    <textarea type="text" name="text" rows="14" required></textarea>
    <button name="submit" class="tag-back" type="submit">
        Absenden
    </button>
</form>

<?php

if (isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($conn,$_POST['name']);
    $text = mysqli_real_escape_string($conn,$_POST['text']);


    ///CHECK TITLE

                        ///INSERT CREDS
                        mysqli_query($conn, "INSERT INTO job_desc (category, description, online) VALUES ('$title', '$text', '1')");
                        echo " <meta http-equiv='refresh' content='0; URL=?apply'>";

    }

?>