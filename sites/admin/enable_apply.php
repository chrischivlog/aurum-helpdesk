<form method="POST">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM jobs_online WHERE ID = '1'");
    while ($row = mysqli_fetch_array($result)) { ?>

        <?php
        if ($row['online'] > '0') {
        ?>
            <br><br>
            <button name="submit-sup-0" class="tag-start" type="submit">
                Absenden Aktiv
            </button><?php
                if (isset($_POST['submit-sup-0'])) {
                    ///INSERT CREDS
                    $result5 = mysqli_query($conn, "UPDATE jobs_online SET online = '0' WHERE category= 'supporter'");
                    echo "<meta http-equiv='refresh' content='3; URL=?apply'>";
                }
                    } else { ?>
            <br><br>
            <button name="submit-sup-1" class="tag-start" type="submit">
                Absenden Inaktiv
            </button><?php
                if (isset($_POST['submit-sup-1'])) {
                    ///INSERT CREDS
                    $result5 = mysqli_query($conn, "UPDATE jobs_online SET online = '1' WHERE category= 'supporter'");
                    echo "<meta http-equiv='refresh' content='3; URL=?apply'>";
                }
                    }
                } ?>

</form>