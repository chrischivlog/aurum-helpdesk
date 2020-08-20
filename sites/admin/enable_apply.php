<br>
<form method="POST">
    <?php
        $result = mysqli_query($conn, "SELECT * FROM jobs_online WHERE ID = '1'");
            while ($row = mysqli_fetch_array($result)) { 
                if ($row['online'] == '0') {
                        ?><a href="?apply&enable=1"><div class="tag-start">Bewerbungsphase für Supporter Aktivieren</div></a>
                    <?php
                } else { 
                    ?><a href="?apply&disabled=1"><div class="tag-start">Bewerbungsphase für Supporter Deaktivieren</div></a>
                    <?php
                }
            }
    ?>
</form>

    <?php
                if (isset($_GET['enable'])=='1') {
                    $result5 = mysqli_query($conn, "UPDATE jobs_online SET online = '1' WHERE description = 'supporter'");
                        echo "<meta http-equiv='refresh' content='0; URL=?apply'>";

                } elseif(isset($_GET['disabled'])=='1') {
                    $result5 = mysqli_query($conn, "UPDATE jobs_online SET online = '0' WHERE description = 'supporter'");
                        echo "<meta http-equiv='refresh' content='0; URL=?apply'>";


                }
                ?>

