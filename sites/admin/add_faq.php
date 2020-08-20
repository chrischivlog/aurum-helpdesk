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


    ///CHECK TITLE
    $result_1 = mysqli_query($conn, "SELECT title FROM faq_article WHERE title == '$title'");
    if (mysqli_num_rows($result) > 0) {

                        ///INSERT CREDS
                        $result2 = mysqli_query($conn, "INSERT INTO faq_article (category, title, details) VALUES ('0', '$title', '$text')");
                        echo "<text style='color: green;'>Erfolgreich eingeplfegt. Leite weiter zur Übersicht in 3 Sekunden</text>";
                        echo " <meta http-equiv='refresh' content='2; URL=?faq'>";
        } else {

            
            echo "<text style='color: red;'>Beitrag mit diesem Titel schon vorhanden</text>";

        }


    }

?>