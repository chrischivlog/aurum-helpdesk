<h2>Neue Bewerbungs-Gruppe</h2>

<b>Tipp: Es können auch HTML Tags im Formular verwendet werden.</b>
<br><br>

<form method="POST">
    <b style="float: left;">Name:</b>
    <input type="text" name="name" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Bitte schreibe ohne Leerzeichen und weniger als 20 Buchstaben."></input>
    <br>
    <b style="float: left;">Voraussetzungen:</b>
    <textarea type="text" name="text" rows="14" required></textarea>
    <button  type="submit" name="submit" class="tag-back">
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